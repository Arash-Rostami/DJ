<!DOCTYPE html>
<html lang="{{ session('locale') }}">
{{--The head--}}
<x-head title="- about me"></x-head>
<body class="home page-template-default page page-id-1307 is-frontend dynamic-mode mejs-semplice-ui"
      data-post-type="page">
<div id="content-holder" data-active-post="1307">
    {{--The menu bar--}}
    <x-menu-bar></x-menu-bar>
    {{--The key part of about me--}}
    <div id="content-1307" class="content-container active-content">
        <div id="content-1354" class="content-container active-content pt-5 ">
            <div class="sections" id="app">
                <section id="section_b29b1a041" class="content-block" data-column-mode-sm="single"
                         data-column-mode-xs="single" data-xs-visibility="visbile">
                    <div class="container">
                        <div id="row_f9c3b251b" class="row animate__animated animate__fadeInDown animate__delay-1s">
                            <div id="column_ded5q4q5v" class="column spacer-column" data-xl-width="3"></div>
                            <div id="column_bf0e4b95d" class="column" data-xl-width="6">
                                {{--Title of page--}}
                                <div class="content-wrapper shadow-lg p-5">
                                    <div id="content_odsdms1er" class="column-content" data-module="paragraph">
                                        <div class="is-content has-xs">
                                            <div data-content-for="xl" class="pb-4">
                                                <p class="about-me-title about-me-title-xl" {{ switchDirection( session('locale')) }}>
                                                    <span class="font_91vawym96" role="text"
                                                          aria-label="title of about me">
                                                        @foreach( $me as $row)
                                                            {{switchLanguages( $row->title_me, $row->title_me_f) }}
                                                        @endforeach
                                                    </span>
                                                </p></div>
                                            <div data-content-for="xs" class="pb-4">
                                                <p class="about-me-title about-me-title-xs" {{ switchDirection( session('locale')) }}>
                                                    <span class="font_91vawym96" role="text"
                                                          aria-label="title of about me">
                                                         @foreach( $me as $row)
                                                            {{switchLanguages( $row->title_me, $row->title_me_f) }}
                                                        @endforeach
                                                    </span>
                                                </p></div>
                                        </div>
                                    </div>
                                    {{--Main text of page--}}
                                    <div id="content_31e64bcef" class="column-content" data-module="paragraph">
                                        <div class="is-content has-xs">
                                            <div data-content-for="xl">
                                                <p class="main-message-about-me-xl" {{ switchDirection( session('locale')) }}>
                                                    <span class="font_1w81df9au text-style"
                                                          role="text" aria-label="the message of about me">
                                                        @foreach( $me as $row)
                                                            {!! nl2br( switchLanguages($row->text_me, $row->text_me_f) )  !!}
                                                        @endforeach
                                                     </span><br>

                                                </p>
                                                <br>
                                                <div id="image-slider" class="splide">
                                                    <div class="splide__track" role="slider"
                                                         aria-label="showing the images of Davood in Trinity">
                                                        <ul class="splide__list">
                                                            @foreach( $slider as $row)
                                                                <li data-lity class="splide__slide"
                                                                    src="{{ $row->picture }}">
                                                                    <img src="{{ $row->picture }}"
                                                                         alt="{{ $row->caption }}">
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                <br>
                                                <p class="text-center" {{ switchDirection( session('locale')) }}>
                                                    <b>
                                                        <a class="cursor text-decoration-none" role="link"
                                                           aria-label="click to go to mission page"
                                                           onclick="takeMeTo('{{ route('mission') }}')">
                                                            {{ switchLanguages('click to see
                                                            the mission of my website', 'برای دیدن اهداف سایت کلیک نمایید') }}
                                                        </a>
                                                    </b>
                                                </p>
                                                <p>
                                                    <br></p>
                                                <p>
                                                    <span class="font_1w81df9au">&nbsp;</span>
                                                </p>
                                            </div>
                                            <div data-content-for="xs">
                                                <p class="main-message-about-me-xs">
                                                    <span class="font_1w81df9au text-style"
                                                          role="text" aria-label="the message of about me">
                                                         @foreach( $me as $row)
                                                            {!! nl2br( switchLanguages($row->text_me, $row->text_me_f))  !!}
                                                        @endforeach
                                                    </span>
                                                </p>
                                                <br>
                                                <img data-lity src="/images/img-0{{rand(1,4)}}.jpg" class="cursor"
                                                     alt="It is a photo of gallery randomly showing Davood standing while holding a mirror in Trinity">
                                                <br>
                                                <p class="text-center">
                                                    <b>
                                                        <a class="cursor text-decoration-none"
                                                           onclick="takeMeTo('{{ route('mission') }}')"
                                                           role="button" aria-hidden="true">
                                                            {{ switchLanguages('click to see
                                                            the mission of my website', 'برای دیدن اهداف سایت کلیک نمایید') }}
                                                        </a>
                                                    </b>
                                                </p>
                                                <p>
                                                    <span class="font_1w81df9au">&nbsp;
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="column_qaihj31oe" class="column spacer-column" data-xl-width="3">
                                <div class="content-wrapper"></div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            {{--The footer of homepage--}}
            <x-footer></x-footer>
        </div>
        <div id="masonry-content_veb881u82" class="masonry"></div>
    </div>
</div>
{{--back-to-top icon--}}
<x-back-to-top></x-back-to-top>
<script src="{{ mix('js/app.js')}}"></script>
<script src="{{ asset('js/second.js')}}"></script>
</body>
</html>

