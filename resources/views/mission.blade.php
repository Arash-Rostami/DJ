<!DOCTYPE html>
<html lang="{{ session('locale') }}">
{{--The head--}}
<x-head title="- objectives"></x-head>
<body class="home page-template-default page page-id-1307 is-frontend dynamic-mode mejs-semplice-ui"
      data-post-type="page" {{ switchDirection( session('locale')) }}>
<div id="content-holder" data-active-post="1307">
    {{--The menu bar--}}
    <x-menu-bar></x-menu-bar>
    {{--The key part of mission--}}
    <div id="content-1307" class="content-container active-content">
        <div id="content-1354" class="content-container active-content pt-5 ">
            <div class="sections" id="app">
                <section id="section_b29b1a041" class="content-block" data-column-mode-sm="single"
                         data-column-mode-xs="single" data-xs-visibility="visbile">
                    <div class="container">
                        <div id="row_f9c3b251b" class="row animate__animated animate__backInUp animate__delay-1s ">
                            <div id="column_ded5q4q5v" class="column spacer-column" data-xl-width="3"></div>
                            <div id="column_bf0e4b95d" class="column" data-xl-width="6">
                                {{--Title of page--}}
                                <div class="content-wrapper shadow-lg p-5">
                                    <div id="content_odsdms1er" class="column-content" data-module="paragraph">
                                        <div class="is-content has-xs">
                                            <div data-content-for="xl" class="pb-4">
                                                <p class="about-me-title about-me-title-xl">
                                                    <span class="font_91vawym96" role="text"
                                                          aria-label="title of mission page">
                                                         @foreach( $me as $row)
                                                            {{ switchLanguages($row->title_mis ?? '',$row->title_mis_f ?? '') }}
                                                        @endforeach
                                                    </span>
                                                </p></div>
                                            <div data-content-for="xs" class="pb-4"><p
                                                    class="about-me-title about-me-title-xs">
                                                    <span class="font_91vawym96" role="text"
                                                          aria-label="title of mission page">
                                                        @foreach( $me as $row)
                                                            {{ switchLanguages($row->title_mis ?? '',$row->title_mis_f ?? '') }}
                                                        @endforeach
                                                    </span>
                                                </p></div>
                                        </div>
                                    </div>
                                    {{--Main text of page--}}
                                    <div id="content_31e64bcef" class="column-content" data-module="paragraph">
                                        <div class="is-content has-xs">
                                            <div data-content-for="xl">
                                                <p class="main-message-about-me-xl">
                                                    <span class="font_1w81df9au text-style"
                                                          role="text" aria-label="main message of mission page">
                                                        @foreach( $me as $row)
                                                            {!! nl2br( switchLanguages($row->text_mis ?? '',$row->text_mis_f ?? ''))  !!}
                                                        @endforeach
                                                         </span>
                                                    <br><br>
                                                </p>
                                                <br>
                                                <p>
                                                    <span class="font_1w81df9au">&nbsp;</span>
                                                </p>
                                            </div>
                                            <div data-content-for="xs"><p class="main-message-about-me-xs">
                                                    <span class="font_1w81df9au text-style"
                                                          role="text" aria-label="main message of mission page">
                                                     @foreach( $me as $row)
                                                            {!! nl2br( switchLanguages($row->text_mis ?? '',$row->text_mis_f ?? ''))  !!}
                                                        @endforeach
                                                    </span>
                                                    <br><br>
                                                </p>
                                                <p>
                                                    <span class="font_1w81df9au">&nbsp;</span>
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
                {{--                The footer of homepage--}}
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
</body>
</html>

