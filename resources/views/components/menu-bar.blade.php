{{--the logo of Davood Jafari--}}
<header class="nav_9kx4kxo6b semplice-navbar active-navbar non-sticky-nav
     menu-type-hamburger cover-transparent scroll-to-top"
        data-cover-transparent="enabled" data-bg-overlay-visibility="hidden">
    <div class="container" data-nav="logo-left-menu-right" >
        <div class="navbar-inner menu-type-hamburger" data-xl-width="12" data-navbar-type="container">
            <div class="logo navbar-left" >
                <a
                @if(request()->path() !== '/')
                    href="{{ route('index') }}"
                   onkeypress="sendMeTo(event,'{{ route("index") }}')"
                   onclick="takeMeTo('{{ route("index") }}')"
                   title="Davood Jafari" role="link" aria-label="click to go to homepage"
                @else
                    href="{{ route('admin') }}"
                    onkeypress="sendMeTo(event,'{{ route("admin") }}')"
                    onclick="takeMeTo('{{ route("admin") }}')"
                    title="Davood Jafari" role="link" aria-label="click to go to admin page"
                 @endif
                >
                    <img src="/images/d-j.png" alt="logo of Davood Jafari"></a>
            </div>
            <div class="hamburger navbar-right semplice-menu">
                <a class="open-menu menu-icon"><span></span></a>
            </div>
        </div>
    </div>
</header>
{{--The menu items--}}
<div id="overlay-menu" {{ switchDirection( session('locale')) }}>
    <div class="overlay-menu-inner" data-xl-width="12" @click="takeMeTo" >
        <nav class="overlay-nav" data-justify="center" data-align="align-top" data-font="font_91vawym96">
            <ul class="container-fluid" >
                <li class="menu-item menu-item-type-get_type menu-item-object-page current-menu-item page_item page-item-1307 current_page_item menu-item-1373" >
                    <a href="{{ route("me") }}" onkeypress="sendMeTo(event,'{{ route("me") }}')" onclick="takeMeTo('{{ route("me") }}')">
                        <img src="/images/conductor.png" width="50" style="max-height: 40%" alt="shadow of a conductor holding a stick">
                        <span>
                             {{ switchLanguages('About me','درباره من') }}
                        </span>
                    </a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1375 text-center">
                    <a href="{{ route("education") }}" onkeypress="sendMeTo(event,'{{ route("education") }}')" onclick="takeMeTo('{{ route("education") }}')">
                        <img class="text-center" src="images/piano.png" width="50" alt="piano representing the education concept">
                        <span>
                            {{ switchLanguages('Education','تحصیلات') }}
                        </span>
                    </a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1375">
                    <a href="{{ route("occupation") }}" onkeypress="sendMeTo(event,'{{ route("occupation") }}')" onclick="takeMeTo('{{ route("occupation") }}')">                        <img src="images/music_stand.png" width="65" alt="music stand holding notes">
                        <span>
                             {{ switchLanguages('Occupation','سابقه شغلی') }}
                        </span>
                    </a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1375">
                    <a href="{{ route("projects") }}" onkeypress="sendMeTo(event,'{{ route("projects") }}')" onclick="takeMeTo('{{ route("projects") }}')">
                        <img src="images/record.png" width="50" alt="disc representing pieces composed">
                        <span>
                            {{ switchLanguages('Projects','قطعه ها') }}
                        </span>
                    </a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1375">
                    <a href="{{ route("blog") }}" onkeypress="sendMeTo(event,'{{ route("blog") }}')" onclick="takeMeTo('{{ route("blog") }}')">
                        <img src="images/note.png" width="50" alt="note icon representing blogs">
                        <span>
                             {{ switchLanguages('Blog','وب لاگ') }}
                        </span>
                    </a></li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1384">
                    <a href="{{ route("contact") }}" onkeypress="sendMeTo(event,'{{ route("contact") }}')" onclick="takeMeTo('{{ route("contact") }}')">
                        <img src="images/stage.png" width="50" alt="concert hall curtain representing a path to contact performer/conductor">
                        <span>
                             {{ switchLanguages('Contact me','ارتباط با من') }}
                        </span>
                    </a></li>
            </ul>
        </nav>
    </div>
</div>
