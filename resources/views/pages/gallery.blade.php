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

                <p class="aligncenter contrive-custom-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Morbi non tincidunt orci. In non vestibulum orci. <br> Praesent ac velit nisl. <a href="" title="">Maecenas
                        facilisis </a> tincidunt odio sollicitudin mattis. </p>

                <div class="contrive-topmargin-50"></div>

            </div>
        </div>

        <div class="contrive-portfolio-holder contrive-row contrive-no-space-cols">
            @foreach($gallery as $item)
                <article class="contrive-col-4 no-space contrive-portfolio-item psd ai gallery-element">
                    <figure>
                        <a href="{{ asset("storage/{$item->image}") }}" data-lightbox="index"
                           data-title="{{ $item->name }}">
                            <img title="{{ $item->name }}" alt="{{ $item->name }}"
                                 src="{{ asset("storage/{$item->image}") }}">
                            <figcaption>
                                <div class="fig-overlay">
                                    <h3 class="gallery-item-header"> Dom jednorodzinny <br> <strong>
                                                08.03.2018</strong></h3>
                                    <p>Olsztyn</p>
                                </div>
                            </figcaption>
                        </a>
                    </figure>
                </article>
            @endforeach
        </div>

    </div>
    <!-- *** CONTENT WRAP END *** -->
@endsection
