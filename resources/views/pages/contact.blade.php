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
{{--            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2352.722911641476!2d20.01225085108103!3d53.86557497999344!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e29c478a9bcb01%3A0x542ab06055608bf0!2zxbthYmkgUsOzZyA0MywgMTQtMzAwIMW7YWJpIFLDs2c!5e0!3m2!1spl!2spl!4v1554035535884!5m2!1spl!2spl" width="1000" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>--}}
{{--            <div class="contrive-map-holder" data-zoom="14" data-width="100%" data-address="Melbourne, Australia"--}}
{{--                 data-description="<h5>Hi, we are contrive</h5><p>Lorem Ipsum is simply dummy text of the <strong> printing </strong> and <strong> typesetting </strong> <br> industry. <strong> Lorem Ipsum </strong> has been the industry's standard dummy <br> text ever since the <strong> 1500s,</strong> when an unknown printer took a <strong> galley </strong> <br> of type and scrambled it to make a type specimen book. </p></div>"--}}
{{--                 data-icon="images/map-icon.png"--}}
{{--                 data-iconsize="60,83">--}}
{{--            </div>--}}
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
