<?php

namespace App\Http\Controllers;

use App\Models\Post;


use Illuminate\Http\Request;

class PostController extends Controller
{



    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image file types and size


        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName); // Move uploaded file to public/images directory
        } else {
            $imageName = null;
        }

        $post = new Post();
        $post->title = $request->title;
        $post->content = $request->content;
        $post->image = $imageName;
        $post->facebook_url = $request->facebook_url??"";
        $post->instagram_url = $request->instagram_url??"";
        $post->linkedin_url = $request->linkedin_url??"";
        $post->twitter_url = $request->twitter_url??"";
        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
    }



    public function index()
    {
        // Retrieve all posts from the database
        $posts = Post::all();

        // Pass the posts to the view
        return view('admin.posts', compact('posts'));
    }

    public function blogview()
    {
        $posts = Post::all();

        return view('blog', compact('posts'));
    }
    public function postdetail($id)
    {
        $post = Post::findOrFail($id);
        return view('postdetail', compact('post'));
    }





    public function edit($id)
    {
        $post = Post::find($id);
        return view('admin.postedit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'facebook_url' => 'nullable|url',
            'instagram_url' => 'nullable|url',
            'linkedin_url' => 'nullable|url',
            'twitter_url' => 'nullable|url',
        ]);

        $post->title = $request->title;
        $post->content = $request->content;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $post->image = $imageName;
        }
        $post->facebook_url = $request->facebook_url;
        $post->instagram_url = $request->instagram_url;
        $post->linkedin_url = $request->linkedin_url;
        $post->twitter_url = $request->twitter_url;

        $post->save();

        return redirect()->route('admin.posts.index')->with('success', 'Post updated successfully.');
    }


    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        // Check if post exists
        if (!$post) {
            return redirect()->route('admin.posts.index')->with('error', 'Post not found.');
        }

        // Delete the post
        $post->delete();

        // Flash a success message
        return redirect()->route('admin.posts.index')->with('success', 'Post deleted successfully.');
    }


}
