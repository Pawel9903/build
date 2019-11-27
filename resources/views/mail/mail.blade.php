@component('mail::layout')
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img src="{{ asset('/images/logo/nameLogo421x60.png') }}" alt="{{ config('app.name') }} Logo">
        @endcomponent
    @endslot

    Od: {{ $name }}
    <br>
    Email: {{ $email }}
    <br>
    Tel: {{ $phone }}
    <br>
    Wiadomość: {{ $description }}

    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}.{{' PG. All rights reserved.'}}
        @endcomponent
    @endslot
@endcomponent
