<head>
    <title>Davood Jafari {{$title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="keywords" content="music, composition, music composition, music performance, music education">
    <meta name="author" content="Arash Rostami">
    <meta name="description" content="Davood Jafari's official website."/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:site_name" content="Davood Jafari"/>
    <link rel="shortcut icon" type="image/jpg" href="/images/d-j.png"/>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/initial.js')}}"></script>
    @can('isAdmin')
        <script defer src="https://unpkg.com/alpinejs@3.9.0/dist/cdn.min.js"></script>@endcan
    {{ switchFont(session('locale')) }}
    @livewireStyles
</head>

