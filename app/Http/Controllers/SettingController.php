<?php

namespace App\Http\Controllers;

use App\Helper;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        return view('admin.settings.index');
    }

    public function homepage(Request $request)
    {
        if ($request->isMethod('GET')) {
            $data = Helper::getHomeSetting();
            return view('admin.settings.home', compact('data'));
        } else {
            $title = $request->title ?? '';
            $paragraph1 = $request->paragraph1 ?? '';
            $paragraph2 = $request->paragraph2 ?? '';
            $buttonText = $request->button_text ?? '';
            $image = '';

            if ($request->hasFile('image')) {
                $image = $request->file('image')->store('uploads');
            }

            Helper::setSetting('home_title', $title);
            Helper::setSetting('home_paragraph1', $paragraph1);
            Helper::setSetting('home_paragraph2', $paragraph2);
            Helper::setSetting('home_button_text', $buttonText);

            // Handle image upload
            if ($image) {
                Helper::setSetting('home_image', $image);
            }

            return redirect()->back();
        }
    }


    public function aboutpage(Request $request)
    {
        if ($request->isMethod('GET')) {
            $data = Helper::getAboutSetting();
            return view('admin.settings.about', compact('data'));
        } else {
            $biography = $request->biography ?? '';
            $email = $request->email ?? '';
            $phone = $request->phone ?? '';
            $address = $request->address ?? '';
            $skills = $request->skills ?? [];

            if ($request->hasFile('aboutimage')) {
                $imagePath = $request->file('aboutimage')->store('about_images');
                Helper::setSetting('about_image', $imagePath);
            }

            Helper::setSetting('about_biography', $biography);
            Helper::setSetting('about_email', $email);
            Helper::setSetting('about_phone', $phone);
            Helper::setSetting('about_address', $address);
            Helper::setSetting('about_skills', json_encode($skills));

            $data = Helper::getAboutSetting();

            return view('admin.settings.about', compact('data'));
        }
    }

    public function general(Request $request){
        if($request->isMethod('GET')){
            $data = Helper::getGeneralSetting();
            return view('admin.settings.general',compact('data'));
        }else{
            $head = $request->head ?? '';
            Helper::setSetting('head_text', $head);
            return redirect()->back();
        }
    }

    public function meta(Request $request)
    {
        if($request->isMethod('GET')){
            $data = Helper::getMetaSetting();
            return view('admin.settings.meta',compact('data'));
        }else{
            $metaTitle = $request->meta_title ?? '';
            $metaDescription = $request->meta_description ?? '';
            if ($request->hasFile('meta_image')) {
                $imagePath = $request->file('meta_image')->store('meta_images');
                Helper::setSetting('meta_image', $imagePath);
            }
            Helper::setSetting('meta_title',$metaTitle);
            Helper::setSetting('meta_description',$metaDescription);
            return redirect()->back();
        }
    }
    public function footer(Request $request)
    {
        if ($request->isMethod('GET')) {
            $data = Helper::getFooterSetting();
            return view('admin.settings.footer', compact('data'));
        } else {
            $footerHeadingLogo = $request->footer_heading_logo ?? '';
            $footerParagraph = $request->footer_paragraph ?? '';
            $facebookLink = $request->facebook_link ?? '';
            $instagramLink = $request->instagram_link ?? '';
            $linkedinLink = $request->linkedin_link ?? '';
            $twitterLink = $request->twitter_link ?? '';

            Helper::setSetting('footer_heading_logo', $footerHeadingLogo);
            Helper::setSetting('footer_paragraph', $footerParagraph);
            Helper::setSetting('facebook_link', $facebookLink);
            Helper::setSetting('instagram_link', $instagramLink);
            Helper::setSetting('linkedin_link', $linkedinLink);
            Helper::setSetting('twitter_link', $twitterLink);


            $data = Helper::getFooterSetting();


            return view('admin.settings.footer', compact('data'));
        }
    }


}
