<footer id="contrive-footer">

    <div class="contrive-footer-widgets">
        <div class="contrive-container">
            <div class="contrive-row">

                <div class="contrive-col-12">
                    <div class="aligncenter">
                        <img data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600" src="{{ asset('images/logo/fullLogo297x200.png') }}" alt="" title="">
                        <div class="contrive-topmargin-50"></div>
                        <p data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600" class="footer-about-content">Jesteśmy firmą ogólnobudowlaną z bogatym doświadczeniem,<br> dużym zasobem sprzętwowym oraz wiekim potencjałem.</p>
                        <div class="contrive-topmargin-80"></div>
                    </div>
                </div>

                <div class="contrive-contact-space contrive-col-7">
                    <aside class="widget widget_recent_entries">
                        <h2 class="widget-title"> Kontakt </h2>
                        <div class="contrive-row">
                            <div class="contrive-col-4">
                                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600" class="contrive-contact-with-large-icon">
                                    <div class="contrive-contact-icon-holder">
                                        <i class="pe-7s-call"></i>
                                    </div>
                                    <div class="contrive-contact-text-holder">
                                        <h6> TEL. </h6>
                                        <p> +48 605 831 374 </p>
                                    </div>
                                </div>
                            </div>
                            <div class="contrive-col-4">
                                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600" class="contrive-contact-with-large-icon">
                                    <div class="contrive-contact-icon-holder">
                                        <i class="icon icon-map"></i>
                                    </div>
                                    <div class="contrive-contact-text-holder">
                                        <h6> ADRES </h6>
                                        <p> Żabi Róg 43 </p>
                                        <p> 14-300 Morąg </p>
                                    </div>
                                </div>
                            </div>
                            <div class="contrive-col-4">
                                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600" class="contrive-contact-with-large-icon">
                                    <div class="contrive-contact-icon-holder">
                                        <i class="icon icon-envelope"></i>
                                    </div>
                                    <div class="contrive-contact-text-holder">
                                        <h6> EMAIL </h6>
                                        <a class="contact-link" href="" title=""> kontakt@bud-ged.com </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>

                <div class="contrive-col-5">
                    <aside class="widget widget_recent_entries">
                        <h2 class="widget-title"> Napisz do nas </h2>
                        <div class="contrive-contact-form-result" id="footer-form-message">Twoja wiadomość została wysłana. Postaramy się odpowiedzieć jak najszybciej, dziękujemy.</div>
                        @include('layout.partials.form.footerForm')
                    </aside>
                </div>
            </div>
        </div>
    </div>

    <div class="contrive-copyrights">
        <div class="contrive-container">

            <div class="contrive-row">
                <div class="contrive-col-4">
                    <p> © Copyrights 2019 PG. All Rights Reserved. </p>
                </div>
                <div class="contrive-col-8">
                    <ul class="contrive-nav-links">
                        <li><a href="{{ route('index') }}" title=""> STRONA GŁÓWNA </a></li>
                        <li><a href="{{ route('gallery') }}" title=""> GALERIA </a></li>
                        <li><a href="{{ route('services') }}" title=""> USŁUGI </a></li>
                        <li><a href="{{ route('work') }}" title=""> PRACA </a></li>
                        <li><a href="{{ route('contact') }}" title=""> KONTAKT </a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

</footer>

