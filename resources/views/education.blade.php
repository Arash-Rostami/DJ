<!DOCTYPE html>
<html lang="{{ session('locale') }}">
{{--The head--}}
<x-head title="- education"></x-head>
<body class="home page-template-default page page-id-1307 is-frontend dynamic-mode"
      data-post-type="page" {{ switchDirection( session('locale')) }}>
<div id="content-holder" data-active-post="1307">
    {{--The menu bar--}}
    <x-menu-bar></x-menu-bar>
    {{--The key part of education--}}
    <div id="content-1307" class="content-container active-content">
        <div id="content-1354" class="content-container active-content pt-5">
            <div class="sections" id="app">
                <section id="section_fd7630b4f" class="content-block" data-column-mode-sm="single"
                         data-column-mode-xs="single" data-xs-visibility="visbile">
                    <div class="container">
                        <div id="row_94f566f23"
                             class="row animate__animated animate__lightSpeedInLeft animate__delay-1s shadow-lg py-5">
                            <div id="column_99eab2c7b" class="column spacer-column" data-xl-width="2">
                                <div class="content-wrapper"></div>
                            </div>
                            <div id="column_878a062a2" class="column" data-xl-width="5">
                                <div class="content-wrapper">
                                    <div id="content_1e12c6159" class="column-content" data-module="paragraph">
                                        @foreach($education as $row)
                                            <h1 class="sr-only">
                                                {{ switchLanguages($row->title_edu ?? '',$row->title_edu_f ?? '') }}:
                                            </h1>
                                            <div class="is-content has-xs">
                                                <div data-content-for="xl">
                                                    <p class="education-title-xl">
                                                        <span class="font_91vawym96"
                                                              role="text" aria-label="title of education page">
                                                            {{ switchLanguages($row->title_edu ?? '',$row->title_edu_f ?? '') }}
                                                        </span>
                                                    </p></div>
                                                <div data-content-for="xs">
                                                    <p class="education-title-xs">
                                                        <span class="font_91vawym96"
                                                              role="text" aria-label="title of education page">
                                                              {{ switchLanguages($row->title_edu ?? '',$row->title_edu_f ?? '') }}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                            @if($loop->first) @break @endif
                                        @endforeach
                                    </div>
                                    <br>
                                    <div id="content_38b2c3e52" class="column-content" data-module="paragraph">
                                        <div class="sr-only" aria-label="list of educational experience">
                                            @foreach($education as $row)
                                                @if($loop->first) @continue @endif
                                                <p class="sr-only">

                                                    {{ switchLanguages($row->text_date ?? '',$row->text_date_f ?? '') }}
                                                    <br>

                                                    {{ switchLanguages($row->text_place ?? '',$row->text_place_f ?? '') }}

                                                    <br>
                                                    {{ switchLanguages($row->text_course ?? '',$row->text_course_f ?? '') }}
                                                </p>
                                            @endforeach
                                        </div>
                                        <div class="is-content has-xs ">
                                            <div data-content-for="xl" role="text"
                                                 aria-label="list of educational experience">
                                                @foreach($education as $row)
                                                    @if($loop->first) @continue @endif
                                                    <p>
                                                        <span class="font_1w81df9au">
                                                            {{ switchLanguages($row->text_date ?? '',$row->text_date_f ?? '') }}
                                                        </span><br>
                                                        <span class="font_nm87rbumn"><strong>
                                                          {{ switchLanguages($row->text_place ?? '',$row->text_place_f ?? '') }}

                                                            </strong></span><br>
                                                        <span class="font_1w81df9au">
                                                          {{ switchLanguages($row->text_course ?? '',$row->text_course_f ?? '') }}
                                                        </span>
                                                    </p>
                                                @endforeach
                                            </div>
                                            <div data-content-for="xs">
                                                @foreach($education as $row)
                                                    @if($loop->first) @continue @endif
                                                    <p>
                                                         <span class="font_1w81df9au">
                                                             {{ switchLanguages($row->text_date ?? '',$row->text_date_f ?? '') }}
                                                        </span><br>
                                                        <span class="font_nm87rbumn"><strong>
                                                          {{ switchLanguages($row->text_place ?? '',$row->text_place_f ?? '') }}

                                                            </strong></span><br>
                                                        <span class="font_1w81df9au">
                                                          {{ switchLanguages($row->text_course ?? '',$row->text_course_f ?? '') }}
                                                        </span>
                                                    </p>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @foreach($education as $row)
                                <div id="column_ffn9ff64n" class="column" data-xl-width="5">
                                    <div class="content-wrapper">
                                        <div id="content_hkis3kjyw" class="column-content" data-module="paragraph">
                                            <h1 class="sr-only">
                                                {{ switchLanguages($row->title_pro ?? '',$row->title_pro_f ?? '') }}:
                                            </h1>
                                            <div class="is-content has-xs">
                                                <div data-content-for="xl">
                                                    <p class="professors-xl">
                                                        <span class="font_91vawym96"
                                                              role="text" aria-label="professors">
                                                             {{ switchLanguages($row->title_pro ?? '',$row->title_pro_f ?? '') }}
                                                        </span>
                                                    </p>
                                                </div>
                                                <div data-content-for="xs">
                                                    <p class="professors-xs">
                                                        <span class="font_91vawym96"
                                                              role="text" aria-label="professors">
                                                           {{ switchLanguages($row->title_pro ?? '',$row->title_pro_f ?? '') }}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div id="content_8xb8mt5ux" class="column-content" data-module="paragraph">
                                            <p class="sr-only">
                                                {!! nl2br(switchLanguages($row->text_pro ?? '',$row->text_pro_f ?? ''))  !!}
                                            </p>
                                            <div class="is-content has-xs">
                                                <div data-content-for="xl"
                                                     role="text" aria-label="list of all professors"><p>
                                                    <span class="font_1w81df9au">
                                                         {!! nl2br(switchLanguages($row->text_pro ?? '',$row->text_pro_f ?? ''))  !!}
                                                    </span></p>
                                                    <p><br data-mce-bogus="1"></p></div>
                                                <div data-content-for="xs"
                                                     role="text" aria-label="list of all professors"><p>
                                                     <span class="font_1w81df9au">
                                                         {!! nl2br(switchLanguages($row->text_pro ?? '',$row->text_pro_f ?? ''))  !!}
                                                    </span></p>
                                                    <p><br data-mce-bogus="1"></p></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if($loop->first) @break @endif
                            @endforeach
                        </div>
                    </div>
                </section>
                <br><br><br><br>
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
</body>
</html>

