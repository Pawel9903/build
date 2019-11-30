@extends('layout.master')
@section('title', 'BUD GED usługi budowlane, budowa, firma, dom, koparka,  jednorodzinny, wypożyczanie sprzętu, roboty ziemne.')
@section('keywords', 'usługi ogólnobudowlane, budowa, firma, dom, koparka,  jednorodzinny, wypożyczanie sprzętu, roboty ziemne')
@section('description', 'BUD GED - usługi ogólnobudowlane, roboty ziemne, wypożyczanie sprzętu budowlanego.')
@section('content')

    @include('layout.partials.topHeaderPage', ['header' => 'USŁUGI'])

    <div class="contrive-content-wrap">
        <div class="contrive-row-fw contrive-fw-no-padding">
            <div class="contrive-container">

                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600" class="contrive-heading center">
                    <h6> Nasza </h6>
                    <h2> Oferta </h2>
                </div>

            </div>
            <div class="contrive-topmargin-30"></div>
            <div class="aligncenter">
                <img src="{{ asset('images/build/services_page.jpeg') }}" alt="" title="">
            </div>
            <div class="contrive-topmargin-50"></div>
            <p style="margin-left: 50px; margin-right: 50px;" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600" class="aligncenter contrive-custom-para">
                BUD-GED jest profesjonalną firmą budowlaną instniejącą ponad 10 lat na rynku. W tym czasie udało nam się zrealizować sporo projektów dzięki, którym zdobyliśmy sporo doświadczenia.
                Pozwala nam ono na świadczenie bardzo szerokiego zakresu usług w branży budowlanej. Realizujemy inwestycję z zakresu budownictwa mieszkaniowego, kompleksowe termomodernizacje, roboty ziemne, wznoszenie oraz modernicacje budynków.
                Dzięki sztabowi specjalistów oraz z pomocą nowoczesnego sprzętu gwarantujemy profesjonalne podejście do projektów oraz wysoką jakość wykonania.
            </p>

        </div>
    </div>

@endsection
