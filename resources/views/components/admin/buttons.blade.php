<div class="modal-footer">
    {{-- homepage title--}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['homeTitle']" wire:click="saveHomeTitle">
        Change
    </button>

    {{-- homepage text--}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['homeText']" wire:click="saveHomeText">
        Change
    </button>

    {{-- about-me-title--}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['aboutMeTitle']" wire:click="saveAboutMeTitle">
        Change
    </button>

    {{-- about-me-text--}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['aboutMeText']" wire:click="saveAboutMeText">
        Change
    </button>

    {{--mission-title--}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['missionTitle']" wire:click="saveMissionTitle">
        Change
    </button>

    {{--mission-text--}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['missionText']" wire:click="saveMissionText">
        Change
    </button>
    {{--  add image--}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['galleryImage']" x-on:click="addImage($refs.file,$refs.description)">
        Add
    </button>

    {{-- delete image--}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['galleryRemove']" x-on:click="deleteImage">
        Delete
    </button>

    {{--education title--}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['educationTitle']" wire:click="changeEducationTitle">
        Change
    </button>

    {{--add education text--}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['addEducationText']" wire:click="addEducationText">
        Add
    </button>

    {{--edit education text--}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['editEducationText']" wire:click="editEducationText">
        Edit
    </button>

    {{--delete education --}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['deleteEducationText']" x-on:click="deleteEducation">
        Delete
    </button>

    {{-- education professors --}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['editProfessor']" wire:click="changeProfessor">
        Change
    </button>

    {{--occupation title--}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['occupationTitle']" wire:click="changeOccupationTitle">
        Change
    </button>

    {{--add occupation text--}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['addOccupationText']" wire:click="addOccupationText">
        Add
    </button>

    {{--edit occupation text--}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['editOccupationText']" wire:click="editOccupationText">
        Edit
    </button>

    {{--delete occupation --}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['deleteOccupationText']" x-on:click="deleteOccupation">
        Delete
    </button>

    {{--project title--}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['projectTitle']" wire:click="changeProjectTitle">
        Change
    </button>

    {{-- add project--}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['addProject']" x-on:click="addAudio">
        Add
    </button>

    {{--edit project --}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['editProject']" wire:click="editPiece">
        Edit
    </button>

    {{--delete project --}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['deleteProject']" x-on:click="deleteProject">
        Delete
    </button>

    {{--post title--}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['blogTitle']" wire:click="changeBlogTitle">
        Change
    </button>

    {{-- add post--}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['addPost']" x-on:click="addPost">
        Add
    </button>

    {{--delete post --}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['deletePost']" x-on:click="deletePost">
        Delete
    </button>

    {{-- show message --}}
    <button type="button" class="btn btn-danger" data-dismiss="modal"
            x-show="db['showMessage']" x-on:click="clearList">
        Close
    </button>

    {{-- send message --}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['sendMessage']" wire:click="$emit('fireEmail')">
        Send
    </button>

    {{-- delete message --}}
    <button class="btn btn-secondary" data-dismiss="modal"
            x-show="db['deleteMessage']" x-on:click="deleteMessage">
        Delete
    </button>

    {{--default close--}}
    <button type="button" class="btn btn-danger" data-dismiss="modal" x-show="!db['showMessage']">
        Close
    </button>
</div>
