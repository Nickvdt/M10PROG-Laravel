<div class="logo">
    <img src="images/logo.webp" alt="Logo">
</div>
<nav>
    <ul>
        <li class="mr-3 px-4 @if(Route::currentRouteName() == 'blog.welcome') bg-black @else bg-lightblue @endif text-white"><a href="{{ route('welcome') }}">Welcome</a></li>
        <li class="mr-3 px-4 @if(Route::currentRouteName() == 'blog.about') bg-black @else bg-lightblue @endif text-white"><a href="{{ route('about') }}">About</a></li>
        <li class="mr-3 px-4 @if(Route::currentRouteName() == 'blog.contact') bg-black @else bg-lightblue @endif text-white"><a href="{{ route('contact') }}">Contact</a></li>
        <li class="mr-3 px-4 @if(Route::currentRouteName() == 'blog.project') bg-black @else bg-lightblue @endif text-white"><a href="{{ route('project') }}">Projecten</a></li>
    </ul>
</nav>