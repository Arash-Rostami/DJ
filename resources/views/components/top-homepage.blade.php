<section id="section_1s1qzdxhx" class="content-block " data-column-mode-sm="single"
         data-column-mode-xs="single">
    <div class="container">
        {{--The greeting of homepage--}}
        <div id="row_t5tosdiqn" class="row ">
            <div id="column_i3fi63udz" class="column" data-xl-width="12">
                <div class="content-wrapper">
                    <div id="content_qji7o7gms" class="column-content" data-module="paragraph">
                        <h1 class="sr-only">
                            @foreach( $homepage as $row)
                                {{ switchLanguages($row->title ?? ' ',$row->title_f ?? '') }}
                            @endforeach
                        </h1>
                        <p class="sr-only">
                            @foreach( $homepage as $row)
                                {{ switchLanguages($row->text ?? ' ',$row->text_f ?? '') }}
                            @endforeach
                        </p>
                        <div class="is-content has-xs ">
                            <div data-content-for="xl">
                                <p class="main-home-xl">
                                     <span
                                         class="font_91vawym96 animate__animated animate__fadeInDownBig animate__delay-1s"
                                         role="text"
                                         aria-label="main greeting message from the homepage">
                                         @foreach( $homepage as $row)
                                             {{ switchLanguages($row->title ?? ' ',$row->title_f ?? '') }}
                                         @endforeach
                                     </span>
                                </p>
                            </div>
                            <div data-content-for="xs">
                                <p class="main-home-xs">
                                    <span
                                        class="font_91vawym96 animate__animated animate__fadeInDownBig animate__delay-1s"
                                        role="text" aria-label="main greeting message from the homepage">
                                      {{ switchLanguages('Hi.','سلام.') }}
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--The caption of homepage--}}
        <div id="row_t0uzy24v0" class="row">
            <div id="column_izl4fot5i" class="column" data-xl-width="12">
                <div class="content-wrapper">
                    <div id="content_sv8jw50m6" data-module="paragraph"
                         class="column-content animate__animated animate__bounceInUp animate__delay-2s">
                        <div class="is-content has-xs ">
                            <div data-content-for="xl">
                                <p class="main-home-message-xl">
                                    <span class="font_1w81df9au" role="text"
                                          aria-label="a line to user saying {{ $row->text }}">        @foreach( $homepage as $row)
                                            {{ switchLanguages($row->text ?? ' ',$row->text_f ?? '') }}
                                        @endforeach
                                        &nbsp;</span>
                                </p>
                            </div>
                            <div data-content-for="xs">
                                <p class="main-home-message-xs">
                                <span class="font_1w81df9au" role="text"
                                      aria-label="a line to user saying {{ $row->text }}">
                                       @foreach( $homepage as $row)
                                        {{ switchLanguages($row->text ?? ' ',$row->text_f ?? '') }}
                                    @endforeach
                                </span>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
