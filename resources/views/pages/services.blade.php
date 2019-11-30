@extends('layout.master')
@section('title', 'BUD GED - Nasze usługi')
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
            <p data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600" class="aligncenter contrive-custom-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non tincidunt orci. In non vestibulum orci. <br> Praesent ac velit nisl. <a href="" title="">Maecenas facilisis </a> tincidunt odio sollicitudin mattis. </p>

        </div>
    </div>

@endsection
