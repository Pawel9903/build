@extends('layout.master')

@section('content')
    <!-- *** BREADCRUMB STARTS *** -->
    <div style="margin: 100px 0 0 0" class="contrive-title-holder contrive-title-bg">
        <div class="contrive-container">
            <h1> USŁUGI </h1>
        </div>
    </div>
    <!-- *** BREADCRUMB END *** -->
    <div class="contrive-content-wrap">
        <div class="contrive-row-fw contrive-fw-no-padding">
            <div class="contrive-container">

                <div class="contrive-heading center">
                    <h6> Nasza </h6>
                    <h2> Oferta </h2>
                </div>

            </div>
            <div class="contrive-topmargin-30"></div>
            <div class="aligncenter">
                <img src="{{ asset('images/build/services.png') }}" alt="" title="">
            </div>
            <div class="contrive-topmargin-50"></div>
            <p class="aligncenter contrive-custom-para"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi non tincidunt orci. In non vestibulum orci. <br> Praesent ac velit nisl. <a href="" title="">Maecenas facilisis </a> tincidunt odio sollicitudin mattis. </p>

        </div>
    </div>

@endsection
