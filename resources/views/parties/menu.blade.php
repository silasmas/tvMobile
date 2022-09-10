<div class="header header-auto-show header-fixed header-logo-center">
    <a href="index.html" class="header-title">NomChaine @hasSection('title')
        @yield("title")
        @endif</a>
    <a href="#" data-menu="menu-main" class="header-icon header-icon-1"><i class="fas fa-bars"></i></a>
    <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-dark"><i class="fas fa-sun"></i></a>
    <a href="#" data-toggle-theme class="header-icon header-icon-4 show-on-theme-light"><i class="fas fa-moon"></i></a>
    <a href="#" data-menu="menu-share" class="header-icon header-icon-3"><i class="fas fa-share-alt"></i></a>
</div>

@hasSection('title')
<div id="footer-bar" class="footer-bar-6">
    <a href="{{ route('annonceur') }}" class="active-nav"><i class="fa fa-layer-group"></i><span>Annonceur</span></a>
    <a href="{{ route('annonce') }}" class="active-nav"><i class="fa fa-file"></i><span>Annonce</span></a>
    <a href="{{ route('home') }}" class="circle-nav active-nav"><i class="fa fa-home"></i><span>Accueil</span></a>
    <a href="{{ route('regisseur') }}" class="active-nav"><i class="fa fa-image"></i><span>Regisseur</span></a>
    <a href="#" data-menu="menu-main"><i class="fa fa-bars"></i><span>Menu</span></a>
</div>
@endif

<div class="page-title page-title-fixed">
    <h1>
        @hasSection('title')
        @yield("title")
        @endif
        @hasSection('authTitle')
        @yield("authTitle")
        @endif
    </h1>
    <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-share"><i
            class="fa fa-share-alt"></i></a>
    <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-light" data-toggle-theme><i
            class="fa fa-moon"></i></a>
    <a href="#" class="page-title-icon shadow-xl bg-theme color-theme show-on-theme-dark" data-toggle-theme><i
            class="fa fa-lightbulb color-yellow-dark"></i></a>
    <a href="#" class="page-title-icon shadow-xl bg-theme color-theme" data-menu="menu-main"><i
            class="fa fa-bars"></i></a>
</div>
<div class="page-title-clear"></div>

<div id="menu-main" class="menu menu-box-left rounded-0" data-menu-width="280" data-menu-active="nav-welcome"
    data-menu-load="{{ asset('menu-main.html') }}"></div>
<div id="menu-share" class="menu menu-box-bottom rounded-m" data-menu-load="{{ asset('menu-share.html') }}"
    data-menu-height="370"> </div>
<div id="menu-colors" class="menu menu-box-bottom rounded-m" data-menu-load="{{ asset('menu-colors.html') }}"
    data-menu-height="480"></div>
