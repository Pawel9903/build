@extends('layout.master')
@section('title', 'BUD GED galeria naszych projektów budowlanych.')
@section('keywords', 'usługi ogólnobudowlane, budowa, firma, dom, koparka,  jednorodzinny, wypożyczanie sprzętu, roboty ziemne')
@section('description', 'BUD GED - galeria naszych projektów. usługi ogólnobudowlane, roboty ziemne, wypożyczanie sprzętu budowlanego.')
@section('content')

    @include('layout.partials.topHeaderPage', ['header' => 'GALERIA'])

    <!-- *** CONTENT WRAP STARTS *** -->
    <div class="contrive-content-wrap">
        <div class="contrive-row-fw contrive-fw-no-padding">
            <div class="contrive-container">

                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600" class="contrive-heading center">
                    <h6> Nasze </h6>
                    <h2> Projekty </h2>
                </div>

                <p data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600" class="aligncenter contrive-custom-para">Zapraszamy do obejrzenia i zapoznania się z naszymi projektami.</p>

                <div class="contrive-topmargin-50"></div>

            </div>
        </div>

        <div class="contrive-portfolio-holder contrive-row contrive-no-space-cols">
            @foreach($gallery as $item)
                <article class="contrive-col-4 no-space contrive-portfolio-item psd ai gallery-element">
                    <figure>
                        <a href="{{ asset("storage/{$item->image}") }}" data-lightbox="index">
                            <img alt="{{ $item->name }}" src="{{ asset("storage/{$item->image}") }}">
                        </a>
                    </figure>
                </article>
            @endforeach
        </div>

    </div>
    <!-- *** CONTENT WRAP END *** -->
@endsection
