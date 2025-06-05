<!DOCTYPE html>
{{--@php session()->forget('region'); session()->forget('locale') @endphp--}}
@php !session()->has('region') ? switchGeo(): null ; @endphp
<html lang="{{ session('locale') }}">
{{--The head--}}
<x-head title="homepage"></x-head>
<body class="home page-template-default page page-id-1307 is-frontend dynamic-mode"
      data-post-type="page" {{ switchDirection( session('locale')) }}>
<div id="content-holder" data-active-post="1307" >
    {{--The menu bar--}}
    <x-menu-bar></x-menu-bar>
    {{--The key part of homepage--}}
    <div id="content-1307" class="content-container active-content bg-active">
        <div class="sections home-page-section" id="app">
            <x-lingo></x-lingo>
            {{--The vinyl demo--}}
            <x-vinyl></x-vinyl>
            {{--The written part of homepage--}}
            <x-top-homepage :homepage="$homepage"></x-top-homepage>
            {{--The bottom part of homepage--}}
            <x-bottom-homepage></x-bottom-homepage>
            {{--The footer of homepage--}}
            <x-footer></x-footer>
        </div>
    </div>
</div>
{{--back-to-top icon--}}
<x-back-to-top></x-back-to-top>

<script src="{{ mix('js/app.js')}}"></script>
<script src="{{ asset('js/second.js')}}"></script>
</body>
</html>
