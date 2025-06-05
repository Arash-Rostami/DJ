<div class="container-fluid pr-0 mr-0" wire:ignore>
    {{--TOP HEADER--}}
    <x-admin.header></x-admin.header>
    <div class="row pr-0 mr-0">
        {{--LIST OF TABS--}}
        <div class="col-sm-2">
            <x-admin.tab-lists></x-admin.tab-lists>
        </div>
        <div class="col-sm-10 border-2 rounded-lg modules" x-data="modalController">
            <div class="tab-content" role="tabpanel">
                {{--HOME PAGE --}}
                <x-admin.homepage-tab></x-admin.homepage-tab>
                {{--ABOUT ME --}}
                <x-admin.about-me-tab></x-admin.about-me-tab>
                {{--Education--}}
                <x-admin.education-tab></x-admin.education-tab>
                {{--Occupation--}}
                <x-admin.occupation-tab></x-admin.occupation-tab>
                {{--Projects--}}
                <x-admin.projects-tab></x-admin.projects-tab>
                {{--Blog--}}
                <x-admin.blog-tab></x-admin.blog-tab>
                {{--Contact--}}
                <x-admin.contact-tab></x-admin.contact-tab>
            </div>
            <!-- Modals-->
            <div wire:ignore>
                <div class="modal fade" x-ref="modal">
                    <div class="modal-dialog">
                        <div class="modal-content p-2 modal-content-bg">
                            <x-admin.homepage-inputs
                                :homepage="$homepage"
                                :images="$images"
                                :education="$education"
                                :edu_title="$edu_title"
                                :course="$course"
                                :showEducation="$showEducation"
                                :occupation="$occupation"
                                :ocu_title="$ocu_title"
                                :showOccupation="$showOccupation"
                                :proj_title="$proj_title"
                                :projects="$projects"
                                :showProject="$showProject"
                                :posts="$posts"
                                :blog_title="$blog_title"
                                :questions="$questions"
                                :contacts="$contacts"
                                :showContact="$showContact"
                            ></x-admin.homepage-inputs>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
