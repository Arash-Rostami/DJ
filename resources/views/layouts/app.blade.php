<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<x-head title="admin page"></x-head>
<body>
<div id="">
    {{-- logo & log out panel/ ribbon--}}
    <x-logout-panel></x-logout-panel>
    {{--    ADMIN PANEL--}}
    <main class="py-4">
        <div>
            @yield('content')
            @can('isAdmin'){{ $slot }}@endcan
        </div>
    </main>
</div>
{{--back-to-top icon--}}
<x-back-to-top></x-back-to-top>
<script src="{{ mix('js/app.js')}}"></script>
{{--messages of modals--}}
<x-modal-alternatives></x-modal-alternatives>
{{--admin footer--}}
<x-footer-admin></x-footer-admin>
{{-- alpine js and bootbox js--}}
<script src="{{ asset('js/third.js')}}"></script>
@livewireScripts
</body>
</html>
