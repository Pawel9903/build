<!-- *** HEADER STARTS *** -->
<header id="contrive-masthead" class="transparent-header">

    <div class="header-main">
        <div class="contrive-container">

            <div class="contrive-row">

                <!-- *** LOGO STARTS *** -->
                <div class="contrive-col-3">
                    <div id="logo">
                        <a href="index.html" title="" class="contrive-standard-logo">
                            <img class="logo-light" src="{{ asset('/images/logo/nameLogoWhite421x60.png') }}" alt="" title="">
                            <img class="logo-dark" src="{{ asset('/images/logo/nameLogo421x60.png') }}" alt="" title="">
                        </a>
                        <a href="index.html" title="" class="contrive-retina-logo">
                            <img class="logo-light" src="{{ asset('/images/logo/nameLogo421x60.png') }}" alt="" title="">
                            <img class="logo-dark" src="{{ asset('/images/logo/nameLogo421x60.png') }}" alt="" title="">
                        </a>
                    </div>
                </div>
                <!-- *** LOGO END *** -->

                <div class="contrive-col-9">
{{--                    <div class="contrive-search-container">--}}
{{--                        <a class="contrive-search" href="#contrive-search-form"> </a>--}}

{{--                        <div id="contrive-search-form" class="contrive-search-form">--}}
{{--                            <form>--}}
{{--                                <input type="search" placeholder="SEARCH...">--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <!-- *** MAIN NAVIGATION STARTS *** -->
                    <div id="contrive-responsive-menu-trigger"><i class="fa fa-bars"></i></div>
                    <nav class="main-nav">
                        <ul>
                            <li class="current_page_item custom-nav-link"> <a href="{{ route('index') }}" title=""> Strona Główna </a></li>
                            <li class="current_page_item custom-nav-link"> <a href="{{ route('gallery') }}" title=""> Galeria </a></li>
                            <li class="current_page_item custom-nav-link"> <a href="{{ route('services') }}" title=""> Usługi </a></li>
                            <li class="current_page_item custom-nav-link"> <a href="{{ route('work') }}" title=""> Praca </a></li>
                            <li class="current_page_item custom-nav-link"> <a href="{{ route('contact') }}" title=""> Kontakt </a></li>
                        </ul>
                    </nav>
                    <!-- *** MAIN NAVIGATION END *** -->
                </div>

            </div>

        </div>
    </div>
</header>
<!-- *** HEADER END *** -->
