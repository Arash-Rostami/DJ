<section id="section_u88yt1urv" class="content-block" data-column-mode-sm="single"
         data-column-mode-xs="single" data-justify="space-between" data-height="dynamic" data-layout="grid"
         data-gutter="yes" data-valign="stretch">
    <div class="container">
        <div id="row_wlbm9hysy" class="row">
            <div id="column_rxt7y9j03" class="column" data-xl-width="12" data-valign="stretch">
                <div class="content-wrapper">
                    <div id="content_veb881u82" class="column-content" data-module="portfoliogrid">
                        <div id="masonry-content_veb881u82" class="masonry">
                            <div class="masonry-item-width"></div>
                            {{--the first top left link/box--}}
                            <div id="project-1118"
                                 class="masonry-item thumb masonry-content_veb881u82-item below"
                                 data-xl-width="4" data-sm-width="6" data-xs-width="12"><a
                                        href="{{ route('me') }}" onkeypress="sendMeTo(event,'{{ route("me") }}')"
                                        onclick="takeMeTo('{{ route("me") }}')">
                                    <div class="thumb-inner">
                                        <div class="thumb-hover">
                                            <div class="thumb-hover-meta middle-center show-title move-bottom">
                                                <p>
                                                    <span class="title" data-font="font_1w81df9au">
                                                        {{ switchLanguages('About me','درباره من') }}
                                                    </span>
                                                    <br/>
                                                </p>
                                            </div>
                                        </div>
                                        <img src="images/conductor.png" width="720" class="max-height-60" height="600"
                                             loading="lazy" alt="shadow of a conductor holding a stick">
                                    </div>
                                </a>
                            </div>
                            {{--the second top link/box--}}
                            <div id="project-1310"
                                 class="masonry-item thumb masonry-content_veb881u82-item below"
                                 data-xl-width="4" data-sm-width="6" data-xs-width="12"><a
                                        href="{{ route('education') }}"
                                        onkeypress="sendMeTo(event,'{{ route("education") }}')"
                                        onclick="takeMeTo('{{ route("education") }}')">
                                    <div class="thumb-inner">
                                        <div class="thumb-hover">
                                            <div class="thumb-hover-meta middle-center show-title move-bottom">
                                                <p>
                                                    <span class="title" data-font="font_1w81df9au">
                                                         {{ switchLanguages('Education','تحصیلات') }}
                                                    </span><br/>
                                                </p>
                                            </div>
                                        </div>
                                        <img src="images/piano.png" width="720" height="600"
                                             alt="piano representing the education concept">
                                    </div>
                                </a>
                            </div>
                            {{--the third top right link/box--}}
                            <div id="project-1117"
                                 class="masonry-item thumb masonry-content_veb881u82-item below"
                                 data-xl-width="4" data-sm-width="6" data-xs-width="12"><a
                                        href="{{ route('occupation') }}"
                                        onkeypress="sendMeTo(event,'{{ route("occupation") }}')"
                                        onclick="takeMeTo('{{ route("occupation") }}')">
                                    <div class="thumb-inner">
                                        <div class="thumb-hover">
                                            <div class="thumb-hover-meta middle-center show-title move-bottom">
                                                <p>
                                                <span class="title"
                                                      data-font="font_1w81df9au">
                                                    {{ switchLanguages('Occupation','سابقه شغلی') }}
                                                </span><br/>
                                                </p>
                                            </div>
                                        </div>
                                        <img src="images/music_stand.png" width="720" height="600" loading="lazy"
                                             alt="music stand holding notes">
                                    </div>
                                </a>
                            </div>
                            {{--the first bottom left link/box--}}
                            <div id="project-1361"
                                 class="masonry-item thumb masonry-content_veb881u82-item below"
                                 data-xl-width="4" data-sm-width="6" data-xs-width="12"><a
                                        href="{{ route("projects") }}"
                                        onkeypress="sendMeTo(event,'{{ route("projects") }}')"
                                        onclick="takeMeTo('{{ route("projects") }}')">
                                    <div class="thumb-inner">
                                        <div class="thumb-hover">
                                            <div class="thumb-hover-meta middle-center show-title move-bottom">
                                                <p>
                                                    <span class="title"
                                                          data-font="font_1w81df9au">
                                                        {{ switchLanguages('Projects','قطعه ها') }}
                                                    </span><br/>
                                                </p>
                                            </div>
                                        </div>
                                        <img src="images/record.png" width="720" height="600" loading="lazy"
                                             alt="disc representing pieces composed">
                                    </div>
                                </a>
                            </div>
                            {{--the second bottom link/box--}}
                            <div id="project-1256"
                                 class="masonry-item thumb masonry-content_veb881u82-item below"
                                 data-xl-width="4" data-sm-width="6" data-xs-width="12"><a
                                        href="{{ route("blog") }}" onkeypress="sendMeTo(event,'{{ route("blog") }}')"
                                        onclick="takeMeTo('{{ route("blog") }}')">
                                    <div class="thumb-inner">
                                        <div class="thumb-hover">
                                            <div class="thumb-hover-meta middle-center show-title move-bottom">
                                                <p>
                                                    <span class="title"
                                                          data-font="font_1w81df9au">
                                                        {{ switchLanguages('Blog','وب لاگ') }}
                                                    </span><br/>
                                                </p>
                                            </div>
                                        </div>
                                        <img src="images/note.png" width="720" height="600"
                                             alt="note icon representing blogs">
                                    </div>
                                </a>
                            </div>
                            {{--the third bottom right link/box--}}
                            <div id="project-1336"
                                 class="masonry-item thumb masonry-content_veb881u82-item below"
                                 data-xl-width="4" data-sm-width="6" data-xs-width="12">
                                <a href="{{ route("contact") }}" onkeypress="sendMeTo(event,'{{ route("contact") }}')"
                                   onclick="takeMeTo('{{ route("contact") }}')">
                                    <div class="thumb-inner">
                                        <div class="thumb-hover">
                                            <div class="thumb-hover-meta middle-center show-title move-bottom">
                                                <p>
                                                    <span class="title"
                                                          data-font="font_1w81df9au">
                                                        {{ switchLanguages('Contact me','ارتباط با من') }}
                                                    </span><br/>
                                                </p>
                                            </div>
                                        </div>
                                        <img src="images/stage.png" width="720" height="600" loading="lazy"
                                             alt="concert hall curtain representing a path to contact performer/conductor">
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
