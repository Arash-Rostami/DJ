<!DOCTYPE html>
<html lang="{{ session('locale') }}">
{{--The head--}}
<x-head title="- my projects"></x-head>
<body class="home page-template-default page page-id-1307 is-frontend dynamic-mode"
      data-post-type="page" {{ switchDirection( session('locale')) }}>
<div id="content-holder" data-active-post="1307">
    {{--The menu bar--}}
    <x-menu-bar></x-menu-bar>
    {{--The key part of projects--}}
    <div class="content-container active-content">
        <div class="content-container active-content pt-5">
            <div class="sections" id="app">
                <section class="content-block" data-column-mode-sm="single"
                         data-column-mode-xs="single" data-xs-visibility="visbile">
                    <div class="container">
                        <div class="row animate__animated animate__fadeIn shadow-lg py-5">
                            <div class="column spacer-column" data-xl-width="2">
                                <div class="content-wrapper"></div>
                            </div>
                            <div class="column" data-xl-width="5">
                                <div class="content-wrapper">
                                    <div class="column-content" data-module="paragraph">
                                        <div class="is-content has-xs">
                                            <div data-content-for="xl">
                                                <p class="education-title-xl">
                                                        <span class="font_91vawym96" role="text"
                                                              aria-label="title of project page">
                                                            {{ switchLanguages($project->title_project ?? '',$project->title_project_f ?? '') }}
                                                        </span>
                                                </p></div>
                                            <div data-content-for="xs">
                                                <p class="education-title-xs">
                                                        <span class="font_91vawym96"
                                                              role="text"
                                                              aria-label="title of project page">
                                                             {{ switchLanguages($project->title_project ?? '',$project->title_project_f ?? '') }}
                                                        </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div aria-label="list of composed pieces">
                                        <div id="accordion"
                                             class="animate__animated animate__slideInUp animate__slow animate__delay-1s">
                                            <div class="card shadow-lg">
                                                @foreach( $projects as $row)
                                                    @if($loop->first ) @continue @endif
                                                    <div class="card-header bg-white text-secondary">
                                                        <a class="card-link" href="#collapse{{ $row->id }}"
                                                           data-toggle="collapse">
                                                            {{--plus sign--}}
                                                            <span id="span-plus-{{$row->id }}" class="plus"
                                                                  onclick="showMe(this)">
                                                            @if( getAudio($row) )<strong>+ </strong> @endif
                                                                {{ switchLanguages($row->title_project ?? '',$row->title_project_f ?? '') }}
                                                                  <strong>
                                                                      {{switchLanguages($row->date_project ?? '',$row->date_project_f ?? '')}}
                                                                  </strong>
                                                            </span>
                                                            {{--minus sign--}}
                                                            <span id="span-minus-{{$row->id }}" class="minus"
                                                                  onclick="hideMe(this)">
                                                            @if( getAudio($row) )<strong>- </strong> @endif
                                                                {{ switchLanguages($row->title_project ?? '',$row->title_project_f ?? '') }}
                                                                     <strong>
                                                                          {{switchLanguages($row->date_project ?? '',$row->date_project_f ?? '')}}
                                                                     </strong>
                                                            </span>
                                                        </a>
                                                        <div
                                                            class="border border-1 border-secondary p-1 text-justify font-italic small">
                                                            {{switchLanguages($row->text_project ?? '',$row->text_project_f ?? '')}}
                                                        </div>
                                                    </div>
                                                    @if( getAudio($row) )
                                                        <div id="collapse{{ $row->id }}" class="collapse"
                                                             data-parent="#accordion">
                                                            <div class="card-body bg-black text-center">
                                                                <audio controls controlsList="nodownload">
                                                                    <source src="{{$row->audio_address}}"
                                                                            type="audio/mpeg">
                                                                    {{ switchLanguages('Your browser does not support the audio
                                                                    element.','مرورگر ما از فایلهای صوتی پشتیبانی نمی نماید') }}
                                                                </audio>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-5 ">
                                        {{ $projects->links('vendor.pagination.custom') }}
                                    </div>
                                </div>
                            </div>
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

