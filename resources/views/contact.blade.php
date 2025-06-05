<!DOCTYPE html>
<html lang="{{ session('locale') }}">
{{--The head--}}
<x-head title="- contact me"></x-head>

<body class="home page-template-default page page-id-1307 is-frontend dynamic-mode mejs-semplice-ui"
      data-post-type="page">
<div id="content-holder" data-active-post="1307">
    {{--The menu bar--}}
    <x-menu-bar></x-menu-bar>
    {{--The key part of contact me--}}
    <div id="content-1307" class="content-container active-content">
        <div id="content-1354" class="content-container active-content pt-5 ">
            <div class="sections" id="app">
                <section id="section_b29b1a041" class="content-block" data-column-mode-sm="single"
                         data-column-mode-xs="single" data-xs-visibility="visbile">
                    <div class="container pb-5 mb-5">
                        <div id="row_f9c3b251b" class="row animate__animated animate__slideInDown animate__delay-1s">
                            <div id="column_ded5q4q5v" class="column spacer-column" data-xl-width="3"></div>
                            <div id="column_bf0e4b95d" class="column" data-xl-width="6">
                                {{--Contact card--}}
                                <form method="post" action="{{ route('form') }}">
                                    @csrf
                                    <div class="card shadow-lg text-light card-config">
                                        <div class="card-header text-center p-3">
                                            @unless(count($errors))
                                                <img
                                                    class="card-img-top animate__animated animate__delay-3s animate__rubberBand"
                                                    src="/images/envelop.png" alt="it is the picture of an envelop">
                                            @endunless
                                            @if( count($errors) )
                                                <div class="mx-auto d-block font-weight-bold text-left"
                                                     role="text" aria-label="list of form errors">
                                                    @foreach($errors->all() as $error)
                                                        <p class="text-danger">* {{$error}}</p>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        {{--Contact inputs--}}
                                        <div class="card-body text-center bg-black">
                                        <span class="animate__animated animate__delay-2s animate__fadeIn animate__slow"
                                              role="text" aria-label="choose one of the options">
                                            {{ switchLanguages('You are contacting me because you want to have (a)',
                                            'پیام شما پیرامون') }}
                                        </span>
                                            <div class="p-3 animate__animated animate__delay-2s animate__zoomIn">
                                                <input class="checkbox-tools" type="radio" name="type" id="tool-1"
                                                       value="class">
                                                <label class="for-checkbox-tools" for="tool-1">
                                                    <i class='uil uil-line-alt'></i>
                                                    {{ switchLanguages('class','برگزاری کلاس ') }}
                                                </label>
                                                <input class="checkbox-tools" type="radio" name="type" id="tool-2"
                                                       value="cooperation">
                                                <label class="for-checkbox-tools" for="tool-2">
                                                    <i class='uil uil-vector-square'></i>
                                                    {{ switchLanguages('cooperation','همکاری کاری') }}
                                                </label>
                                                <input class="checkbox-tools" type="radio" name="type" id="tool-3"
                                                       value="question">
                                                <label class="for-checkbox-tools" for="tool-3">
                                                    <i class='uil uil-ruler'></i>
                                                    {{ switchLanguages('question','پرسش خاص') }}
                                                </label>
                                            </div>
                                            <label class="d-none"
                                                   for="name"> {{ switchLanguages('Your name','نام و نام خانوادگی') }}</label>
                                            <input
                                                class="input1 js-example-basic-single animate__animated animate__fadeInLeft animate__delay-2s"
                                                type="text" name="name"
                                                placeholder="{{ switchLanguages('Your name','نام و نام خانوادگی') }}"
                                                aria-label="name of the user" {{ switchDirection( session('locale')) }}>

                                            <label class="d-none"
                                                   for="email"> {{ switchLanguages('Your email','آدرس ایمیل') }}</label>
                                            <input
                                                class="input1 js-example-basic-single animate__animated animate__fadeInLeft animate__delay-2s"
                                                type="text" name="email"
                                                placeholder="{{ switchLanguages('Your email','آدرس ایمیل') }}"
                                                aria-label="email of the user" {{ switchDirection( session('locale')) }}>

                                            <label class="d-none"
                                                   for="phone"> {{ switchLanguages('Your phone','شماره تماس') }}</label>
                                            <input
                                                class="input1 js-example-basic-single animate__animated animate__fadeInRight animate__delay-2s"
                                                type="text" name="phone"
                                                placeholder="{{ switchLanguages('Your phone','شماره تماس') }}"
                                                aria-label="phone of the user" {{ switchDirection( session('locale')) }}>

                                            <label class="d-none" for="cellphone">Your cellphone:</label>
                                            <input
                                                class="input1 cell js-example-basic-single animate__animated animate__fadeInRight animate__delay-2s"
                                                type="text" name="cellphone"
                                                aria-label="do not fill this; only made for robots" id="cellphone">

                                            <textarea
                                                class="input1 js-example-basic-single animate__animated animate__fadeInRight animate__delay-2s"
                                                name="message"
                                                placeholder=" {{ switchLanguages('Your message','پیام') }}"
                                                aria-label="write your message here" {{ switchDirection( session('locale')) }}></textarea>
                                        </div>
                                        <div class="card-footer text-center p-5">
                                            <button id="submit"
                                                    class="btn shadow-lg btn-style animate__animated animate__slow animate__pulse animate__infinite"
                                                    role="button" aria-label="click to submit"
                                                    title="{{ switchLanguages('Click to submit','ارسال') }}">
                                                <i class="material-icons">email</i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="column_qaihj31oe" class="column spacer-column" data-xl-width="3">
                                <div class="content-wrapper"></div>
                            </div>
                        </div>
                    </div>
                </section>
                {{--The footer of homepage--}}
                <x-footer></x-footer>
            </div>
        </div>
        <div id="masonry-content_veb881u82" class="masonry"></div>
    </div>

</div>
{{--back-to-top icon--}}
<x-back-to-top></x-back-to-top>
<script src="{{ mix('js/app.js')}}"></script>
<script src="{{ asset('js/second.js')}}"></script>
@if( session()->has('done') )
    {{-- successful message delivery text--}}
    <x-modal></x-modal>
@endif
</body>
</html>

