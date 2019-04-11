@extends('layout.master')

@section('content')

    @include('layout.partials.topHeaderPage', ['header' => 'PRACA'])

    <!-- *** CONTENT WRAP STARTS *** -->
    <div class="contrive-content-wrap">


        <div class="contrive-container">

            <div class="contrive-heading center">
                <h6> Szukasz pracy? </h6>
                <h2> NAPISZ DO NAS </h2>
            </div>

            @include('layout.partials.form.contactForm')

        </div>

    </div>
    <!-- *** CONTENT WRAP END *** -->
@endsection
