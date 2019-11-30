@extends('layout.master')
@section('title', 'BUD GED - Praca')
@section('keywords', 'usługi ogólnobudowlane, budowa, firma, dom, koparka,  jednorodzinny, wypożyczanie sprzętu, roboty ziemne')
@section('description', 'BUD GED - Dołącz do naszej ekipy i pracuj z najlepszymi.')
@section('content')

    @include('layout.partials.topHeaderPage', ['header' => 'PRACA'])

    <div class="contrive-content-wrap">
        <div class="contrive-row-fw contrive-fw-no-padding">
            <div class="contrive-container">

                <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600" class="contrive-heading center">
                    <h6> Szukasz pracy? </h6>
                    <h2> NAPISZ DO NAS </h2>
                </div>

            </div>
            <div class="contrive-topmargin-30"></div>
            <div class="aligncenter">
                <img src="{{ asset('images/build/work.jpg') }}" alt="" title="">
            </div>
        </div>
    </div>

    <!-- *** CONTENT WRAP STARTS *** -->
    <div class="contrive-content-wrap">
        <div class="contrive-container">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600" class="contrive-heading center" style="padding-top: 0">
                <h2>FORMULARZ REKRUTACYJNY</h2>
            </div>
            @include('layout.partials.form.workForm')
        </div>
    </div>
    <!-- *** CONTENT WRAP END *** -->
@endsection
