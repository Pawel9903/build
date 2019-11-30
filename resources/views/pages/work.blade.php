@extends('layout.master')
@section('title', 'BUD GED praca, wykwalifikowany i profesjonalny zespól pracowników budowlanych.')
@section('keywords', 'usługi ogólnobudowlane, budowa, firma, dom, koparka,  jednorodzinny, wypożyczanie sprzętu, roboty ziemne')
@section('description', 'BUD GED - Dołącz do naszej ekipy i pracuj z najlepszymi pracownikami budowlanycmi.')
@section('content')

    @include('layout.partials.topHeaderPage', ['header' => 'PRACA'])

    <!-- *** CONTENT WRAP STARTS *** -->
    <div class="contrive-content-wrap">
        <div class="contrive-container">
            <div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="600" class="contrive-heading center">
                <h6> Szukasz pracy? </h6>
                <h2> NAPISZ DO NAS </h2>
            </div>
            @include('layout.partials.form.workForm')
        </div>
    </div>
    <!-- *** CONTENT WRAP END *** -->
@endsection
