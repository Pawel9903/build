@extends('layout.master')
@section('title', 'BUD GED - Kontakt')
@section('keywords', 'usługi ogólnobudowlane, budowa, firma, dom, koparka,  jednorodzinny, wypożyczanie sprzętu, roboty ziemne')
@section('description', 'BUD GED - Jeżeli chcesz skożystać z naszych usług skontaktuj się z nami i sprawdź naszą ofertę.')
@section('content')

    @include('layout.partials.topHeaderPage', ['header' => 'KONTAKT'])

    <!-- *** CONTENT WRAP STARTS *** -->
    <div class="contrive-content-wrap">


        <div class="contrive-container">

            <div class="contrive-heading center">
                <h6> Masz Pytanie? </h6>
                <h2> SKONTAKTUJ SIĘ Z NAMI </h2>
            </div>

            @include('layout.partials.form.contactForm')

        </div>

        <div class="contrive-topmargin-120"></div>

        <div id="google-map">
        </div>

    </div>
    <!-- *** CONTENT WRAP END *** -->
@endsection

@section('page_js')
    <script type="text/javascript">
        // Initialize and add the map
        function initMap() {
            // The location of Uluru
            let uluru = {lat: 53.86576, lng: 20.01394};
            // The map, centered at Uluru
            let map = new google.maps.Map(
                document.getElementById('google-map'), {zoom: 18, center: uluru});
            // The marker, positioned at Uluru
            // let marker = new google.maps.Marker({position: uluru, map: map});
            let image = 'images/logo/marker.png';
            let marker = new google.maps.Marker({
                map: map,
                icon: image,
                position: uluru,
            });
        }
    </script>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBANxFPT23VWiz_MGpK2fUBI55JHb73y-E&callback=initMap">
    </script>


    @endsection
