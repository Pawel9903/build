<!-- *** HEADER STARTS *** -->
<header id="contrive-masthead" class="transparent-header">

    <div class="header-main">
        <div class="contrive-container">

            <div class="contrive-row">

                <!-- *** LOGO STARTS *** -->
                <div class="contrive-col-3">
                    <div id="logo">
                        <a href="{{ route('index') }}" title="" class="contrive-standard-logo">
                            <img class="logo-light" src="{{ asset($slider? '/images/logo/nameLogoWhite421x60.png' : '/images/logo/nameLogo421x60.png') }}" alt="" title="">
                            <img class="logo-dark" src="{{ asset('/images/logo/nameLogo421x60.png') }}" alt="" title="">
                        </a>
                        <a href="{{ route('index') }}" title="" class="contrive-retina-logo">
                            <img class="logo-light" src="{{ asset('/images/logo/nameLogo421x60.png') }}" alt="" title="">
                            <img class="logo-dark" src="{{ asset('/images/logo/nameLogo421x60.png') }}" alt="" title="">
                        </a>
                    </div>
                </div>
                <!-- *** LOGO END *** -->

                <div class="contrive-col-9">

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
