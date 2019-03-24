@extends('layout.master')

@section('content')

    @include('layout.partials.topHeaderPage', ['header' => 'GALERIA'])

    <!-- *** CONTENT WRAP STARTS *** -->
    <div class="contrive-content-wrap">
        <div class="contrive-row-fw contrive-fw-no-padding">
            <div class="contrive-container">

                <div class="contrive-heading center">
                    <h6> Nasze </h6>
                    <h2> Projekty </h2>
                </div>

                <p class="aligncenter contrive-custom-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non tincidunt orci. In non vestibulum orci. <br> Praesent ac velit nisl. <a href="" title="">Maecenas facilisis </a> tincidunt odio sollicitudin mattis. </p>

                <div class="contrive-topmargin-50"> </div>

            </div>
        </div>

        {{--<div class="contrive-portfolio-filter">--}}
            {{--<ul>--}}
                {{--<li><a href="" title="" data-filter="*" class="current">All Projects</a></li>--}}
                {{--<li><a href="" title="" data-filter=".web">Web Design</a></li>--}}
                {{--<li><a href="" title="" data-filter=".psd">Photography</a></li>--}}
                {{--<li><a href="" title="" data-filter=".ai">Illustration</a></li>--}}
                {{--<li><a href="" title="" data-filter=".wp">Wordpress</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}

        <div class="contrive-portfolio-holder contrive-row contrive-no-space-cols">
            <article class="contrive-col-4 no-space contrive-portfolio-item psd ai">
                <figure>
                    <img title="" alt="" src="{{ asset('/images/build/3246.jpg') }}">
                    <figcaption>
                        <div class="fig-overlay">
                            <h3> <a title="" href="portfolio-details.html"> Dom jednorodzinny <br> <strong> 08.03.2018</strong> </a> </h3>
                            <p> <a title="" href="portfolio-details.html"> Olsztyn </a> </p>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="contrive-col-4 no-space contrive-portfolio-item web wp">
                <figure>
                    <img title="" alt="" src="{{ asset('/images/build/3246.jpg') }}">
                    <figcaption>
                        <div class="fig-overlay">
                            <h3> <a title="" href="portfolio-details.html"> Blok <br> <strong> 03.23.2017 </strong> </a> </h3>
                            <p> <a href="portfolio-details.html"> Olsztyn </a> </p>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="contrive-col-4 no-space contrive-portfolio-item wp web">
                <figure>
                    <img title="" alt="" src="{{ asset('/images/build/2995.jpg') }}">
                    <figcaption>
                        <div class="fig-overlay">
                            <h3> <a title="" href="portfolio-details.html"> Mieszkanie <br> <strong> 10.10.2018 </strong> </a> </h3>
                            <p> <a title="" href="portfolio-details.html"> Olsztyn </a> </p>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="contrive-col-4 no-space contrive-portfolio-item psd ai">
                <figure>
                    <img title="" alt="" src="{{ asset('/images/build/49372.jpg') }}">
                    <figcaption>
                        <div class="fig-overlay">
                            <h3> <a title="" href="portfolio-details.html"> Dom jednorodzinny <br> <strong> 08.03.2018</strong> </a> </h3>
                            <p> <a title="" href="portfolio-details.html"> Olsztyn </a> </p>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="contrive-col-4 no-space contrive-portfolio-item web wp">
                <figure>
                    <img title="" alt="" src="{{ asset('/images/build/3246.jpg') }}">
                    <figcaption>
                        <div class="fig-overlay">
                            <h3> <a title="" href="portfolio-details.html"> Blok <br> <strong> 03.23.2017 </strong> </a> </h3>
                            <p> <a href="portfolio-details.html"> Olsztyn </a> </p>
                        </div>
                    </figcaption>
                </figure>
            </article>
            <article class="contrive-col-4 no-space contrive-portfolio-item wp web">
                <figure>
                    <img title="" alt="" src="{{ asset('/images/build/2995.jpg') }}">
                    <figcaption>
                        <div class="fig-overlay">
                            <h3> <a title="" href="portfolio-details.html"> Mieszkanie <br> <strong> 10.10.2018 </strong> </a> </h3>
                            <p> <a title="" href="portfolio-details.html"> Olsztyn </a> </p>
                        </div>
                    </figcaption>
                </figure>
            </article>
        </div>

    </div>
    <!-- *** CONTENT WRAP END *** -->
@endsection
