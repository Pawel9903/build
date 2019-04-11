@component('mail::layout')
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img src="{{ asset('/images/logo/nameLogo421x60.png') }}" alt="{{ config('app.name') }} Logo">
        @endcomponent
    @endslot

    @slot('body')
        <h4>Od: {{ $name }}</h4>
        <h4>Email: {{ $email }}</h4>
        <h4>Tel: {{ $phone }}</h4>
        @section('body')
            <p>Wiadomość: {{ $description }} }}</p>
        @endsection
    @endslot

    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}.{{' PG. All rights reserved.'}}
        @endcomponent
    @endslot
@endcomponent