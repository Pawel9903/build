@extends('layout.master')

@section('content')

    @include('layout.partials.topHeaderPage', ['header' => 'KONTAKT'])

    <!-- *** CONTENT WRAP STARTS *** -->
    <div class="contrive-content-wrap">


        <div class="contrive-container">

            <div class="contrive-heading center">
                <h6> Masz Pytanie? </h6>
                <h2> SKONTAKTUJ SIĘ Z NAMI </h2>
            </div>

            @include('layout.partials.contactForm')

        </div>

        <div class="contrive-topmargin-120"></div>

        <div class="contrive-row-fw contrive-fw-no-padding contrive-contact-margin-2">
            <div class="contrive-map-holder" data-zoom="14" data-width="100%" data-address="Melbourne, Australia"
                 data-description="<h5>Hi, we are contrive</h5><p>Lorem Ipsum is simply dummy text of the <strong> printing </strong> and <strong> typesetting </strong> <br> industry. <strong> Lorem Ipsum </strong> has been the industry's standard dummy <br> text ever since the <strong> 1500s,</strong> when an unknown printer took a <strong> galley </strong> <br> of type and scrambled it to make a type specimen book. </p></div>"
                 data-icon="images/map-icon.png"
                 data-iconsize="60,83">
            </div>
        </div>

    </div>
    <!-- *** CONTENT WRAP END *** -->


@endsection
