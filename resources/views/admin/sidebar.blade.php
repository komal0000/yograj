<div class="sidebar d-none d-md-block" id="sidebar">
    <h2>{{strtoupper(Auth::user()->name)}}</h2>
    <ul>
        <li><a href="{{ route('admin.posts.index') }}"><i class="fas fa-edit"></i>Posts</a></li>
        <li><a href="{{ route('admin.posts.category.index') }}"><i class="fas fa-edit"></i>Posts category</a></li>
        <li><a href="{{ route('admin.settings.index') }}"><i class="fas fa-gear"></i>Settings</a></li>
        <li><a href="{{ route('admin.msg') }}"><i class="fas fa-envelope"></i>Messages</a></li>
        <li><a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
    </ul>
</div>
