<!DOCTYPE html>
<html lang="{{ session('locale') }}">
{{--The head--}}
<x-head title="- my blog"></x-head>
<body class="home page-template-default page page-id-1307 is-frontend dynamic-mode mejs-semplice-ui"
      data-post-type="page" onload="activePagination()" {{ switchDirection( session('locale')) }} >
<div id="content-holder" data-active-post="1307">
    {{--The menu bar--}}
    <x-menu-bar></x-menu-bar>
    {{--The key part of blog--}}
    <div id="content-1307" class="content-container active-content">
        <div id="content-1107" class="content-container active-content pt-5 ">
            <div class="sections animate__animated animate__zoomIn animate__delay-1s">
                <section id="section_a21af9a7c" class="content-block" data-column-mode-sm="single"
                         data-column-mode-xs="single">
                    <div class="container" id="app">
                        <div id="row_e8d534b79" class="row">
                            <div id="column_s3xvma0mf" class="column spacer-column" data-xl-width="3">
                                <div class="content-wrapper"></div>
                            </div>
                            <div id="column_5983d5229" class="column" data-xl-width="6">
                                <div class="content-wrapper">
                                    <div id="content_9a091f616" class="column-content" data-module="paragraph">
                                        <div class="is-content has-xs">
                                            <div data-content-for="xl">
                                                <p id="blog-title-xl">
                                                    <span class="font_91vawym96" role="text"
                                                          aria-label="title of blog page">
                                                        {{ switchLanguages($blog->title_page ?? '',$blog->title_page_f ?? '') }}
                                                    </span>
                                                </p>
                                            </div>
                                            <div data-content-for="xs">
                                                <p id="blog-title-xs">
                                                    <span class="font_91vawym96" role="text"
                                                          aria-label="title of blog page">
                                                            <strong>
                                                              {{ switchLanguages($blog->title_page ?? '',$blog->title_page_f ?? '') }}
                                                            </strong>
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
                {{--posts--}}
                <section id="section_rpep36how" class="content-block px-5" data-column-mode-sm="single"
                         data-column-mode-xs="single">
                    @foreach($posts as $row)
                        @if($row->id ==1) @continue @endif
                        <div class="container shadow p-4">
                            <div id="row_gp84idql1" class="row">
                                <div id="column_ergspd1p6" class="column" data-xl-width="6">
                                    <div class="content-wrapper">
                                        <div id="content_ndrf4xd2z" class="column-content" data-module="image">
                                            <div class="ce-image" data-align="left">
                                                <img class="is-content" src="{{ $row->pic }}"
                                                     alt="{{ $row->pic_caption }}"
                                                     width="1024" height="753"
                                                     caption="{{ $row->pic_caption }}"
                                                     data-width="original" data-scaling="yes">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="column_kml4u0uov" class="column" data-xl-width="6">
                                    <div class="content-wrapper">
                                        <div id="content_go5otu79i" class="column-content" data-module="paragraph">
                                            <div class="is-content has-xs">
                                                <div data-content-for="xl">
                                                    <p class="blog-text-title">
                                                    <span class="font_91vawym96"
                                                          aria-label="title of the {{ $row->id }}  blog/post">
                                                        {{ switchLanguages($row->title_post ?? '',$row->title_post_f ?? '') }}
                                                    </span>
                                                    </p>
                                                    <p class="blog-text-text">
                                                    <span title="play the podcast"
                                                          class="font_1w81df9au text-center mx-auto d-block py-5 rounded"
                                                          aria-label="message of the {{ $row->id }}  blog/post">
                                                           <img class="rounded post-image" alt="media-poster"
                                                                @if(isLastPost($row->id)) src="images/latest-post.jpg"
                                                                @else src="images/post.jpg" @endif>
                                                          <audio class="post-audio" controls>
                                                              <source src="{{ $row->text_post }}" type="audio/mpeg">
                                                            Your browser does not support the audio element.
                                                        </audio>
                                                    </span>
                                                        <small class="float-right font-italic">
                                                            posted {{  $row->created_at->diffForHumans()}}
                                                        </small>
                                                    </p>
                                                </div>
                                                <div data-content-for="xs">
                                                    <p class="blog-text-title-xs">
                                                    <span class="font_91vawym96"
                                                          aria-label="title of the {{ $row->id }}  blog/post">
                                                         {{ switchLanguages($row->title_post ?? '',$row->title_post_f ?? '') }}
                                                    </span>
                                                    </p>
                                                    <p class="blog-text-text-xs">
                                                    <span class="font_1w81df9au text-center mx-auto d-block"
                                                          aria-label="message of the {{ $row->id }}  blog/post">
                                                         <img class="rounded post-image-xs" alt="media-poster"
                                                              @if($loop->index ==0) src="images/latest-post.jpg"
                                                              @else src="images/post.jpg" @endif>
                                                         <audio class="post-audio-xs" controls>
                                                              <source src="{{ $row->text_post }}" type="audio/mpeg">
                                                            Your browser does not support the audio element.
                                                        </audio>
                                                    </span>
                                                        <small class="float-right font-italic">
                                                            posted {{  $row->created_at->diffForHumans()}}
                                                        </small>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </section>
                <div id="page-links" style="">
                    @unless(($posts->total()-$posts->count()) == 1)
                        {{ $posts->links() }}
                    @endunless
                </div>
                <div class="mb-5 pb-5"></div>
                {{--The footer of homepage--}}
                <x-footer></x-footer>
            </div>

        </div>
    </div>
    <div id="masonry-content_veb881u82" class="masonry"></div>
</div>
{{--back-to-top icon--}}
<x-back-to-top></x-back-to-top>

<script src="{{ mix('js/app.js')}}"></script>
<script src="{{ asset('js/second.js')}}"></script>
</body>
</html>

