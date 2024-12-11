<ul class="main-menu">
    <li class="active">
        <a href="{{!$is_main ? route('main.index') : ''}}#home" class="nav-anim">
            <span class="menu-icon lnr lnr-home"></span>
            <span class="link-text">Home</span>
        </a>
    </li>
    <li>
        <a href="{{!$is_main ? route('main.index') : ''}}#about-me" class="nav-anim">
            <span class="menu-icon lnr lnr-user"></span>
            <span class="link-text">About Me</span>
        </a>
    </li>
    <li>
        <a href="{{!$is_main ? route('main.index') : ''}}#resume" class="nav-anim">
            <span class="menu-icon lnr lnr-graduation-hat"></span>
            <span class="link-text">Resume</span>
        </a>
    </li>
    <li>
        <a href="{{!$is_main ? route('main.index') : ''}}#portfolio" class="nav-anim">
            <span class="menu-icon lnr lnr-briefcase"></span>
            <span class="link-text">Portfolio</span>
        </a>
    </li>
    <li>
        <a href="{{!$is_main ? route('main.index') : ''}}#blog" class="nav-anim">
            {{--                        <span class="menu-icon lnr lnr-book"></span>--}}

            <span class="menu-icon lnr fab fa-blogger"></span>
            <span class="link-text">Blog</span>
        </a>
    </li>
    <li>
        <a href="{{!$is_main ? route('main.index') : ''}}#contact" class="nav-anim">
            <span class="menu-icon lnr lnr-envelope"></span>
            <span class="link-text">Contact</span>
        </a>
    </li>
</ul>
