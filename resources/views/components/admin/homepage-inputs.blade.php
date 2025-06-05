<div>
    <div class="modal-body">
        {{--***********************ENGLISH PART*********************************--}}
        <div class="label-edit">
            {{-- homepage title--}}
            <label for="home-title" role="text" aria-label="Edit English title"
                   x-show="db['homeTitle']">
                Edit English title:
            </label>
            {{-- homepage text--}}
            <label for="home-text" role="text" aria-label="Edit English text"
                   x-show="db['homeText']">
                Edit English text:
            </label>
            {{-- about-me-title--}}
            <label for="about-me-title" role="text" aria-label="Edit English title of about me"
                   x-show="db['aboutMeTitle']">
                Edit English title:
            </label>
            {{-- about-me-text--}}
            <label for="about-me-text" role="text" aria-label="Edit English text of about me"
                   x-show="db['aboutMeText']">
                Edit English text:
            </label>
            {{-- about-mission-title--}}
            <label for="about-mission-title" role="text" aria-label="Edit English title of mission"
                   x-show="db['missionTitle']">
                Edit English title:
            </label>
            {{-- about-mission-text--}}
            <label for="about-mission-text" role="text" aria-label="Edit English text of mission"
                   x-show="db['missionText']">
                Edit English text:
            </label>
            {{-- image description--}}
            <label for="gallery-description" role="text" aria-label="Write description of image"
                   x-show="db['galleryImage']">
                Write the description of the image:
            </label>
            {{-- image deletion--}}
            <label for="gallery-deletion" role="text" aria-label="Delete the image"
                   x-show="db['galleryRemove']">
                Select the image to delete:
            </label>
            {{-- education title --}}
            <label for="education-title" role="text" x-show="db['educationTitle']"
                   aria-label="Change the title of education">
                Change the English title of Education:
            </label>

            {{-- add education text - course --}}
            <label for="add-education-course" role="text" x-show="db['addEducationText']"
                   aria-label="Add the course ">
                Add the course - English:
            </label>
            <input id="add-education-course" class="form-control"
                   wire:model.defer="course.text" x-show="db['addEducationText']">

            {{-- add education text -time --}}
            <label for="add-education-time" role="text" x-show="db['addEducationText']"
                   aria-label="Add the time of course ">
                Add the time of course - English:
            </label>
            <input id="add-education-time" class="form-control"
                   wire:model.defer="course.time" x-show="db['addEducationText']">

            {{-- add education text - place --}}
            <label for="add-education-place" role="text" x-show="db['addEducationText']"
                   aria-label="Add the place of course ">
                Add the place of course - English:
            </label>
            <input id="add-education-place" class="form-control"
                   wire:model.defer="course.place" x-show="db['addEducationText']">

            {{-- delete education text --}}
            <label for="delete-education" role="text" x-show="db['deleteEducationText']"
                   aria-label="Select to delete the course ">
                Select to delete the course:
            </label>
            @if(!$showEducation)
                <select class="form-control" id="delete-education"
                        wire:model.defer="course.edit" x-show="db['deleteEducationText']">
                    <option value="0">Select</option>
                    @foreach($education as $part)
                        @if($loop->first) @continue @endif
                        <option value="{{$part->id}}">{{ $part->text_course }}</option>
                    @endforeach
                </select>
            @endif
            {{--  education professors --}}
            <label for="education-professors-title" role="text" x-show="db['editProfessor']"
                   aria-label="Edit the professor title - English ">
                Edit the professor title- English:
            </label>
            <input id="education-professors-title" class="form-control"
                   wire:model.defer="edu_title.title_pro" x-show="db['editProfessor']">

            <label for="education-professors-title-f" role="text" x-show="db['editProfessor']"
                   aria-label="Edit the professor title - Persian ">
                Edit the professor title- Persian:
            </label>
            <input id="education-professors-title-f" class="form-control farsi-text"
                   wire:model.defer="edu_title.title_pro_f" x-show="db['editProfessor']">

            <label for="education-professors" role="text" x-show="db['editProfessor']"
                   aria-label="Edit the professor - English ">
                Edit the professor - English:
            </label>

            {{-- occupation title --}}
            <label for="occupation-title" role="text" x-show="db['occupationTitle']"
                   aria-label="Change the title of occuaption">
                Change the English title of occupation:
            </label>

            {{-- add occupation text  --}}
            <label for="add-occupation" role="text" x-show="db['addOccupationText']"
                   aria-label="Add the occupation ">
                Add the occupation - English:
            </label>
            <input id="add-occupation" class="form-control"
                   wire:model.defer="experience.text" x-show="db['addOccupationText']">

            {{-- add occupation text -time --}}
            <label for="add-occupation-time" role="text" x-show="db['addOccupationText']"
                   aria-label="Add the time of occupation ">
                Add the time of occupation - English:
            </label>
            <input id="add-occupation-time" class="form-control"
                   wire:model.defer="experience.time" x-show="db['addOccupationText']">

            {{-- add occupation text - place --}}
            <label for="add-occupation-place" role="text" x-show="db['addOccupationText']"
                   aria-label="Add the place of occupation ">
                Add the place of occupation - English:
            </label>
            <input id="add-occupation-place" class="form-control"
                   wire:model.defer="experience.place" x-show="db['addOccupationText']">

            {{-- delete occupation text --}}
            <label for="delete-occupation" role="text" x-show="db['deleteOccupationText']"
                   aria-label="Select to delete the occupational experience">
                Select to delete the occupation:
            </label>
            @if(!$showOccupation)
                <select class="form-control" id="delete-occupation"
                        wire:model.defer="experience.edit" x-show="db['deleteOccupationText']">
                    <option value="">Select</option>
                    @foreach($occupation as $period)
                        @if($loop->first) @continue @endif
                        <option value="{{$period->id}}">{{ $period->text_date }} - {{ $period->text_place }}</option>
                    @endforeach
                </select>
            @endif
            {{-- project title --}}
            <label for="project-title" role="text" x-show="db['projectTitle']"
                   aria-label="Change the title of project page">
                Change the English title of project page:
            </label>
            {{-- add project --}}
            <label for="project-text" role="text" x-show="db['addProject']"
                   aria-label="Add the English text of project">
                Add the English text of project:
            </label>
            <input id="project-text" class="form-control" x-ref="pieceTitle"
                   wire:model.defer="piece.text" x-show="db['addProject']">
            <label for="project-description" role="text" x-show="db['addProject']"
                   aria-label="Add the English description of project">
                Add the English description of project:
            </label>
            <textarea rows="3" cols="10" id="project-description" class="form-control" x-ref="pieceDes"
                      wire:model.defer="piece.description" x-show="db['addProject']">
                                    </textarea>
            <label for="project-time" role="text" x-show="db['addProject']"
                   aria-label=" Add the date of project">
                Add the date of project:
            </label>
            <input id="project-time" class="form-control" x-ref="pieceDate"
                   wire:model.defer="piece.time" x-show="db['addProject']">

            {{-- delete project --}}
            <label for="delete-project" role="text" x-show="db['deleteProject']"
                   aria-label="Select to delete the project piece">
                Select to delete the project piece:
            </label>
            @if(!$showProject)
                <select class="form-control" id="delete-project"
                        wire:model.defer="piece.edit" x-show="db['deleteProject']">
                    <option value="">Select</option>
                    @foreach($projects as $project)
                        @if($loop->first) @continue @endif
                        <option value="{{$project->id}}">{{ $project->title_project }}</option>
                    @endforeach
                </select>
            @endif

            {{-- homepage text--}}
            <label for="home-text" role="text" aria-label="Edit English text"
                   x-show="db['homeText']">
                Edit English text:
            </label>
            {{-- blog title--}}
            <label for="blog-title" role="text" aria-label="Edit English title of blog page"
                   x-show="db['blogTitle']">
                Edit English title:
            </label>

            {{-- add post--}}
            <label for="post-title" role="text" aria-label="Add English title of post"
                   x-show="db['addPost']">
                Add English title:
            </label>
            <input id="post-title" class="form-control" x-ref="postTitle"
                   wire:model.defer="post.title" x-show="db['addPost']">

            <label for="post-caption" role="text" aria-label="Add description to image"
                   x-show="db['addPost']">
                Add description to image:
            </label>
            <input id="post-caption" class="form-control" x-ref="postCaption"
                   wire:model.defer="post.caption" x-show="db['addPost']">

            <label for="post-image" role="text" aria-label="Upload the image" x-show="db['addPost']">
                Click to add the image:
            </label>
            <div class="custom-file" x-show="db['addPost']">
                <input type="file" class="custom-file-input" id="post-image" name="piece" x-ref="postPic">
                <label class="custom-file-label" for="post-image"></label>
            </div>

            {{-- delete post --}}
            <label for="delete-post" role="text" x-show="db['deletePost']"
                   aria-label="Select to delete the post">
                Select to delete the post in the blog:
            </label>
            <select class="form-control" id="delete-post"
                    wire:model.defer="post.delete" x-show="db['deletePost']">
                <option value="">Select</option>
                @foreach($posts as $post)
                    @if($loop->first) @continue @endif
                    <option value="{{$post->id}}">{{ $post->title_post }}</option>
                @endforeach
            </select>

            {{--contact send messages--}}
            <label x-show="db['sendMessage']" for="contact-name-selection"
                   role="text" aria-label="Write the name of the recipient">
                Choose:
            </label>
            <select class="form-control" id="contact-name-selection" x-on:change="switchContact"
                    x-model="db['contact']" x-show="db['sendMessage']">
                <option>Select</option>
                <option>New</option>
                <option>Saved</option>
            </select>
            {{-- from contact list--}}
            <div x-show="db['old']">
                <label x-show="db['sendMessage']" for="contact-name"
                       role="text" aria-label="Write the name of the recipient">
                    Select from the list:
                </label>
                <select class="form-control" id="contact-name" x-on:change="$wire.loadContact"
                        wire:model.defer="person.id" x-show="db['sendMessage']">
                    <option value="">Select</option>
                    @foreach($contacts as $contact)
                        <option value="{{$contact->id}}">{{$contact->name}}: {{ $contact->email }}</option>
                    @endforeach
                </select>
            </div>
            {{-- new contact --}}
            <div x-show="!db['old']">
                <label x-show="db['sendMessage']" for="contact-name"
                       role="text" aria-label="Write the name of the recipient">
                    Name:
                </label>
                <input x-show="db['sendMessage']" id="contact-name"
                       class="form-control" wire:model.defer="message.name">
            </div>

            {{-- email saved--}}
            <div x-show="db['sendMessage']">
                <label for="send-message-address" aria-label="Write the address of the recipient">
                    Email:
                </label>
                <input x-show="$wire.showContact" id="send-message-address"
                       class="form-control" wire:model.defer="message.email">

                {{-- new email--}}
                <input x-show="!$wire.showContact" id="send-message-address"
                       class="form-control" wire:model.defer="message.to">
            </div>

            <label x-show="db['sendMessage']" for="send-message-subject"
                   role="text" aria-label="Write the subject of the message">
                Subject:
            </label>
            {{-- email subject--}}
            <input x-show="db['sendMessage']" id="send-message-subject"
                   class="form-control" wire:model.defer="message.subject">


            {{--contact delete messages--}}
            <label for="delete-message" role="text" x-show="db['deleteMessage']"
                   aria-label="Select to delete the message">
                Select to delete the message:
            </label>
            <select class="form-control" id="delete-message"
                    wire:model.defer="message.delete" x-show="db['deleteMessage']">
                <option value="">Select</option>
                @foreach($questions as $question)
                    <option value="{{$question->id}}">
                        {{ $question->name }} sent it at {{ $question->created_at }}
                    </option>
                @endforeach
            </select>

        </div>
        {{-- homepage title--}}
        <textarea id="home-title" name="home_title" rows="5" cols="10" class="form-control"
                  x-show="db['homeTitle']" wire:model.defer="homepage.title">
                                    </textarea>
        {{-- homepage text--}}
        <textarea id="home-text" name="home_text" rows="5" cols="10" class="form-control"
                  x-show="db['homeText']" wire:model.defer="homepage.text">
                                    </textarea>
        {{-- about-me-title--}}
        <textarea id="about-me-title" name="about-me-title" rows="5" cols="10" class="form-control"
                  x-show="db['aboutMeTitle']" wire:model.defer="me.title_me">
                                    </textarea>
        {{-- about-me-text--}}
        <textarea id="about-me-text" name="about-me-text" rows="5" cols="10" class="form-control"
                  x-show="db['aboutMeText']" wire:model.defer="me.text_me">
                                    </textarea>
        {{-- about-mission-title--}}
        <textarea id="about-mission-title" name="about-mission-title" rows="5" cols="10" class="form-control"
                  x-show="db['missionTitle']" wire:model.defer="me.title_mis">
                                    </textarea>
        {{-- about-mission-text--}}
        <textarea id="about-mission-text" name="about-mission-text" rows="5" cols="10" class="form-control"
                  x-show="db['missionText']" wire:model.defer="me.text_mis">
                                    </textarea>
        {{-- image description--}}
        <textarea id="gallery-description" name="pic_caption" rows="5" class="form-control"
                  cols="10" x-show="db['galleryImage']" x-ref="description"></textarea>

        {{-- image deletion--}}
        <select class="form-control" id="gallery-deletion" wire:model.defer="image"
                x-show="db['galleryRemove']">
            <option value="0">Select</option>
            @foreach($images as $image)
                <option value="{{$image->id}}">{{ $image->caption }}</option>
            @endforeach
        </select>
        {{-- education title--}}
        <textarea id="education-title" cols="10" rows="5" class="form-control"
                  x-show="db['educationTitle']" wire:model.defer="edu_title.title_edu"></textarea>

        {{-- education edit text--}}
        @if(!$showEducation)
            <select class="form-control" wire:model.defer="course.edit" wire:change="$emit('loadCourse')"
                    x-show="db['editEducationText']">
                <option value="0">Select</option>
                @foreach($education as $part)
                    @if($loop->first) @continue @endif
                    <option value="{{$part->id}}">{{ $part->text_course }}</option>
                @endforeach
            </select>
        @endif

        {{-- education professors--}}
        <textarea id="education-professors" rows="5" cols="10" class="form-control"
                  x-show="db['editProfessor']" wire:model.defer="edu_title.text_pro">
                                    </textarea>

        {{-- occupation title--}}
        <textarea id="occupation-title" cols="10" rows="5" class="form-control"
                  x-show="db['occupationTitle']" wire:model.defer="ocu_title.title_ocu"></textarea>

        {{-- occupation edit text--}}
        @if(!$showOccupation)
            <select class="form-control" wire:model.defer="experience.edit" wire:change="$emit('loadExperience')"
                    x-show="db['editOccupationText']">
                <option value="0">Select</option>
                @foreach($occupation as $period)
                    @if($loop->first) @continue @endif
                    <option value="{{$period->id}}">{{ $period->text_date }} - {{ $period->text_place }}</option>
                @endforeach
            </select>
        @endif

        {{-- project title--}}
        <textarea id="project-title" cols="10" rows="5" class="form-control"
                  x-show="db['projectTitle']" wire:model.defer="proj_title.title_project"></textarea>

        {{-- Project edit --}}
        @if(!$showProject)
            <select class="form-control" wire:model.defer="piece.edit" wire:change="$emit('loadProject')"
                    x-show="db['editProject']">
                <option value="0">Select</option>
                @foreach($projects as $project)
                    @if($loop->first) @continue @endif
                    <option value="{{$project->id}}">{{ $project->title_project }} </option>
                @endforeach
            </select>
        @endif
        {{-- blog title--}}
        <textarea id="blog-title" rows="5" cols="10" class="form-control"
                  x-show="db['blogTitle']" wire:model.defer="blog_title.title_page"></textarea>

        {{--contact show messages--}}
        <div x-show="db['showMessage']">
            {{--            @inject('questions', 'App\Http\Livewire\PaginateMessage')--}}
            @foreach(paginate() as $message)
                <div class="row py-2 mx-auto">
                    <div class="col-3 text-left">
                        <h6>Name </h6>
                        <p class="small">{{ $message['name'] }}</p>
                    </div>
                    <div class="col-5">
                        <h6>Email</h6>
                        <p class="small">{{ $message['email'] }}</p>
                    </div>
                    <div class="col-4">
                        <h6>Phone</h6>
                        <p class="small">{{ $message['phone'] }}</p>
                    </div>
                </div>
                <div class="row py-2 mx-auto">
                    <div class="col-3">
                        <h6 title="Relevant to {{ $message['type'] }}">Message</h6>
                        <hr>
                        <p class="small">Relevant to {{ $message['type'] }}</p>
                    </div>
                    <div class="col-9">
                        <p class="small text-justify">{{ $message['message'] }}</p>
                    </div>
                </div>
                <hr>
            @endforeach
            <div class="row py-1 mx-auto">
                <span class="float-right">{{ paginate()->links() }}</span>
            </div>
        </div>


        {{--***********************FARSI PART*********************************--}}

        {{-- homepage title--}}
        <div class="label-edit">
            <label for="home-title-f" role="text" aria-label="Edit Persian title"
                   x-show="db['homeTitle']">
                Edit Persian title:
            </label>
            {{-- homepage text--}}
            <label for="home-text-f" role="text" aria-label="Edit Persian text"
                   x-show="db['homeText']">
                Edit Persian text:
            </label>
            {{-- about-me-title--}}
            <label for="about-me-title-f" role="text" aria-label="Edit Persian title of about me"
                   x-show="db['aboutMeTitle']">
                Edit Persian title:
            </label>
            {{-- about-me-text--}}
            <label for="about-me-text-f" role="text" aria-label="Edit Persian text of about me"
                   x-show="db['aboutMeText']">
                Edit Persian text:
            </label>
            {{-- about-mission-title--}}
            <label for="about-mission-title-f" role="text" aria-label="Edit Persian title of mission"
                   x-show="db['missionTitle']">
                Edit Persian title:
            </label>
            {{-- about-mission-text--}}
            <label for="about-mission-text-f" role="text" aria-label="Edit Persian text of mission"
                   x-show="db['missionText']">
                Edit Persian text:
            </label>
            {{-- image upload--}}
            <label for="image-upload" role="text" aria-label="Upload the image" x-show="db['galleryImage']">
                Click to select the image
            </label>

            {{-- education text edit--}}
            <label for="edu-course-place" role="text" x-show="db['eduEditText']"
                   aria-label="Edit course - education">
                Choose the course in English - Education:
            </label>

            {{-- send message--}}
            <label x-show="db['sendMessage']" for="send-message-text"
                   role="text" aria-label="Write the text of the message">
                Write your message:
            </label>
            <textarea id="send-message-text" cols="10" rows="5" class="form-control"
                      x-show="db['sendMessage']" wire:model.defer="message.text"></textarea>
            {{-- email attachment--}}
            <label x-show="db['sendMessage']" for="email-attachment"
                   role="text" aria-label="Write the text of the message">
                Add attachment:
            </label>
            <div class="custom-file" x-show="db['sendMessage']">
                <input type="file" class="custom-file-input" id="email-attachment" wire:model="attachment">
                <label class="custom-file-label" for="email-attachment"></label>
            </div>


            {{-- education title --}}
            <label for="education-title-f" role="text" x-show="db['educationTitle']"
                   aria-label="Change the Persian title of education">
                Change the Persian title of Education:
            </label>

            {{-- occupation title --}}
            <label for="occupation-title-f" role="text" x-show="db['occupationTitle']"
                   aria-label="Change the Persian title of occupation">
                Change the Persian title of occupation:
            </label>

            {{-- project  title --}}
            <label for="project-title-f" role="text" x-show="db['projectTitle']"
                   aria-label="Change the Persian title of project page">
                Change the Persian title of project page:
            </label>

            {{-- project  text --}}
            <label for="project-text-f" role="text" x-show="db['addProject']"
                   aria-label="Add the Persian text of project">
                Add the Persian text of project:
            </label>
            <input id="project-text-f" class="form-control farsi-text" x-ref="pieceTitle_f"
                   wire:model.defer="piece.text_f" x-show="db['addProject']">
            <label for="project-description-f" role="text" x-show="db['addProject']"
                   aria-label="Add the Persian description of the project">
                Add the Persian description of project:
            </label>
            <textarea rows="3" cols="10" id="project-description-f" class="form-control farsi-text"
                      x-ref="pieceDes_f"
                      wire:model.defer="piece.description_f" x-show="db['addProject']">
                                    </textarea>
            {{-- project file upload--}}
            <label for="project-file" role="text" aria-label="Upload the project file" x-show="db['addProject']">
                Click to upload the file
            </label>
            <div class="custom-file" x-show="db['addProject']">
                <input type="file" class="custom-file-input" id="project-file" name="piece" x-ref="piece">
                <label class="custom-file-label" for="project-file"></label>
            </div>


            {{-- add education text - course --}}
            <hr class="text-dark" x-show="db['addEducationText']">
            <label for="add-education-course-f" role="text" x-show="db['addEducationText']"
                   aria-label="Add the course - Persian ">
                Add the course - Persian:
            </label>
            <input id="add-education-course-f" class="form-control farsi-text"
                   wire:model.defer="course.text_f" x-show="db['addEducationText']">

            {{-- add education text -time --}}
            <label for="add-education-time-f" role="text" x-show="db['addEducationText']"
                   aria-label="Add the time of course -Persian">
                Add the time of course - Persian:
            </label>
            <input id="add-education-time-f" class="form-control farsi-text"
                   wire:model.defer="course.time_f" x-show="db['addEducationText']">

            {{-- add education text - place --}}
            <label for="add-education-place-f" role="text" x-show="db['addEducationText']"
                   aria-label="Add the place of course - Persian ">
                Add the place of course - Persian:
            </label>
            <input id="add-education-place-f" class="form-control farsi-text"
                   wire:model.defer="course.place_f" x-show="db['addEducationText']">

            <div x-show="$wire.showEducation">
                {{-- edit education text--}}
                <label for="edit-education-course" role="text" x-show="db['editEducationText']"
                       aria-label="Edit the course - English ">
                    Edit the course - English:
                </label>
                <input id="edit-education-course" x-show="db['editEducationText']" class="form-control"
                       wire:model.defer="education.text_course">
                {{-- edit education text -time --}}
                <label for="edit-education-time" role="text" x-show="db['editEducationText']"
                       aria-label="Edit the time of course - English">
                    Edit the time of course - English:
                </label>
                <input id="edit-education-time" class="form-control"
                       wire:model.defer="education.text_date" x-show="db['editEducationText']">
                {{-- edit education text - place --}}
                <label for="edit-education-place" role="text" x-show="db['editEducationText']"
                       aria-label="Edit the place of course - English ">
                    Edit the place of course - English:
                </label>
                <input id="edit-education-place" class="form-control"
                       wire:model.defer="education.text_place" x-show="db['editEducationText']">
                {{-- edit education text farsi--}}
                <label for="edit-education-course-f" role="text" x-show="db['editEducationText']"
                       aria-label="Edit the course - Persian ">
                    Edit the course - Persian:
                </label>
                <input id="edit-education-course-f" x-show="db['editEducationText']" class="form-control farsi-text"
                       wire:model.defer="education.text_course_f">
                {{-- edit education text -time --}}
                <label for="edit-education-time-f" role="text" x-show="db['editEducationText']"
                       aria-label="Edit the time of course - Persian">
                    Edit the time of course - Persian:
                </label>
                <input id="edit-education-time-f" class="form-control farsi-text"
                       wire:model.defer="education.text_date_f" x-show="db['editEducationText']">
                {{-- edit education text - place --}}
                <label for="edit-education-place-f" role="text" x-show="db['editEducationText']"
                       aria-label="Edit the place of course - Persian ">
                    Edit the place of course - Persian:
                </label>
                <input id="edit-education-place-f" class="form-control farsi-text"
                       wire:model.defer="education.text_place_f" x-show="db['editEducationText']">

            </div>


            {{--  education professors --}}
            <label for="education-professors-f" role="text" x-show="db['editProfessor']"
                   aria-label="Edit the professor - Persian ">
                Edit the professor - Persian:
            </label>
            <textarea id="education-professors-f" rows="5" cols="10" class="farsi-text form-control"
                      x-show="db['editProfessor']" wire:model.defer="edu_title.text_pro_f">
                                    </textarea>

            {{-- add occupation text occupation --}}
            <hr class="text-dark" x-show="db['addOccupationText']">
            <label for="add-occupation-course-f" role="text" x-show="db['addOccupationText']"
                   aria-label="Add the occupation - Persian ">
                Add the occupation - Persian:
            </label>
            <input id="add-occupation-course-f" class="form-control farsi-text"
                   wire:model.defer="experience.text_f" x-show="db['addOccupationText']">

            {{-- add occupation text -time --}}
            <label for="add-occupation-time-f" role="text" x-show="db['addOccupationText']"
                   aria-label="Add the time of occupation - Persian">
                Add the time of occupation - Persian:
            </label>
            <input id="add-occupation-time-f" class="form-control farsi-text"
                   wire:model.defer="experience.time_f" x-show="db['addOccupationText']">

            {{-- add occupation text - place --}}
            <label for="add-occupation-place-f" role="text" x-show="db['addOccupationText']"
                   aria-label="Add the place of occupation - Persian ">
                Add the place of occupation - Persian:
            </label>
            <input id="add-occupation-place-f" class="form-control farsi-text"
                   wire:model.defer="experience.place_f" x-show="db['addOccupationText']">

            <div x-show="$wire.showOccupation">
                {{-- edit occupation text--}}
                <label for="edit-occupation-course" role="text" x-show="db['editOccupationText']"
                       aria-label="Edit the occupation - English ">
                    Edit the occupation - English:
                </label>
                <input id="edit-occupation-course" x-show="db['editOccupationText']" class="form-control"
                       wire:model.defer="occupation.text_job">
                {{-- edit occupation text -time --}}
                <label for="edit-occupation-time" role="text" x-show="db['editOccupationText']"
                       aria-label="Edit the time of occupation - English">
                    Edit the time of occupation -Occupation
                </label>
                <input id="edit-occupation-time" class="form-control"
                       wire:model.defer="occupation.text_date" x-show="db['editOccupationText']">
                {{-- edit occupation text - place --}}
                <label for="edit-occupation-place" role="text" x-show="db['editOccupationText']"
                       aria-label="Edit the place of occupation - English ">
                    Edit the place of occupation - English:
                </label>
                <input id="edit-occupation-place" class="form-control"
                       wire:model.defer="occupation.text_place" x-show="db['editOccupationText']">
                {{-- edit occupation text farsi--}}
                <label for="edit-occupation-course-f" role="text" x-show="db['editOccupationText']"
                       aria-label="Edit the occupation - Persian ">
                    Edit the occupation - Persian:
                </label>
                <input id="edit-occupation-course-f" x-show="db['editOccupationText']"
                       class="form-control farsi-text"
                       wire:model.defer="occupation.text_job_f">
                {{-- edit occupation text -time --}}
                <label for="edit-occupation-time-f" role="text" x-show="db['editOccupationText']"
                       aria-label="Edit the time of occupation - Persian">
                    Edit the time of occupation - Persian:
                </label>
                <input id="edit-occupation-time-f" class="form-control farsi-text"
                       wire:model.defer="occupation.text_date_f" x-show="db['editOccupationText']">
                {{-- edit occupation text - place --}}
                <label for="edit-occupation-place-f" role="text" x-show="db['editOccupationText']"
                       aria-label="Edit the place of occupation - Persian ">
                    Edit the place of occupation - Persian:
                </label>
                <input id="edit-occupation-place-f" class="form-control farsi-text"
                       wire:model.defer="occupation.text_place_f" x-show="db['editOccupationText']">
            </div>
            <div x-show="$wire.showProject">
                {{-- edit project text--}}
                <label for="edit-project-title" role="text" x-show="db['editProject']"
                       aria-label="Edit the English text of the project">
                    Edit the English text of the project:
                </label>
                <input id="edit-project-title" x-show="db['editProject']" class="form-control"
                       wire:model.defer="projects.title_project">
                {{-- edit project description  --}}
                <label for="edit-project-description" role="text" x-show="db['editProject']"
                       aria-label=" Edit the English description of the project">
                    Edit the English description of the project:
                </label>
                <textarea id="edit-project-description" class="form-control" rows="3" cols="10"
                          wire:model.defer="projects.text_project" x-show="db['editProject']"></textarea>
                {{-- edit project date  --}}
                <label for="edit-project-date" role="text" x-show="db['editProject']"
                       aria-label="Edit the date of the project">
                    Edit the date of the project:
                </label>
                <input id="edit-project-date" class="form-control"
                       wire:model.defer="projects.date_project" x-show="db['editProject']">
                {{-- edit project text farsi--}}
                <label for="edit-project-title-f" role="text" x-show="db['editProject']"
                       aria-label="Edit the Persian text of the project">
                    Edit the Persian text of the project:
                </label>
                <input id="edit-project-title-f" x-show="db['editProject']" class="form-control farsi-text"
                       wire:model.defer="projects.title_project_f">
                {{-- edit project description - farsi --}}
                <label for="edit-project-description-f" role="text" x-show="db['editProject']"
                       aria-label=" Edit the Persian description of the project">
                    Edit the Persian description of the project:
                </label>
                <textarea id="edit-project-description-f" class="form-control farsi-text" rows="3" cols="10"
                          wire:model.defer="projects.text_project_f" x-show="db['editProject']"></textarea>

            </div>
            {{-- post title - farsi --}}
            <label for="blog-title-f" role="text" aria-label="Edit Persian title of blog page"
                   x-show="db['blogTitle']">
                Edit Persian title:
            </label>

            {{-- add post--}}
            <label for="post-title-f" role="text" aria-label="Add Persian title of post"
                   x-show="db['addPost']">
                Add Persian title:
            </label>
            <input id="post-title-f" class="form-control" x-ref="postTitleFarsi"
                   wire:model.defer="post.title_f" x-show="db['addPost']">

            <label for="post-file" role="text" aria-label="Upload the file of post" x-show="db['addPost']">
                Click to add the file:
            </label>
            <div class="custom-file" x-show="db['addPost']">
                <input type="file" class="custom-file-input" id="post-file" name="piece" x-ref="postFile">
                <label class="custom-file-label" for="post-file"></label>
            </div>

        </div>
        {{-- homepage title--}}
        <textarea id="home-title-f" name="home_title_f" class="farsi-text form-control"
                  rows="5" cols="10" x-show="db['homeTitle']"
                  wire:model.defer="homepage.title_f">
                                    </textarea>
        {{-- homepage text--}}
        <textarea id="home-text-f" name="home_text_f" class="farsi-text form-control"
                  rows="5" cols="10" x-show="db['homeText']"
                  wire:model.defer="homepage.text_f">
                                    </textarea>
        {{-- about-me-title--}}
        <textarea id="about-me-title-f" name="about-me-title-f" rows="5" cols="10" class="form-control farsi-text"
                  x-show="db['aboutMeTitle']" wire:model.defer="me.title_me_f">
                                    </textarea>
        {{-- about-me-text--}}
        <textarea id="about-me-text-f" name="about-me-text-f" rows="5" cols="10" class="farsi-text form-control "
                  x-show="db['aboutMeText']" wire:model.defer="me.text_me_f">
                                    </textarea>
        {{-- about-mission-title--}}
        <textarea id="about-mission-title-f" name="about-mission-title-f" rows="5" cols="10"
                  class=" form-control farsi-text"
                  x-show="db['missionTitle']" wire:model.defer="me.title_mis_f">
                                    </textarea>
        {{-- about-mission-text--}}
        <textarea id="about-mission-text-f" name="about-mission-text-f" rows="5" cols="10"
                  class=" form-control farsi-text"
                  x-show="db['missionText']" wire:model.defer="me.text_mis_f">
                                    </textarea>
        {{-- image upload--}}
        <div class="custom-file" x-show="db['galleryImage']">
            <input type="file" class="custom-file-input" id="gallery-image" name="filename"
                   x-ref="file">
            <label class="custom-file-label" for="gallery-image"></label>
        </div>

        {{-- image deletion--}}
        <div x-show="db['galleryRemove']">
            <hr>
            @foreach($images as $image)
                <img class="cursor rounded" height="100" width="100" src="{{$image->picture}}"
                     alt="{{$image->caption}}" data-lity>
            @endforeach

        </div>

        {{-- education title--}}
        <textarea id="education-title-f" cols="10" rows="5" class="farsi-text form-control"
                  x-show="db['educationTitle']" wire:model.defer="edu_title.title_edu_f"></textarea>

        {{-- occupation title--}}
        <textarea id="occupation-title-f" cols="10" rows="5" class="farsi-text form-control"
                  x-show="db['occupationTitle']" wire:model.defer="ocu_title.title_ocu_f"></textarea>

        {{-- project title--}}
        <textarea id="project-title-f" cols="10" rows="5" class="farsi-text form-control"
                  x-show="db['projectTitle']" wire:model.defer="proj_title.title_project_f"></textarea>

        {{-- post title--}}
        <textarea id="blog-title-f" class="farsi-text form-control" rows="5" cols="10"
                  x-show="db['blogTitle']" wire:model.defer="blog_title.title_page_f"></textarea>


    </div>

    <div class="details">
        <span x-text="updateTime"> </span> is the time of last update.
    </div>

    {{--***********************BUTTONS*********************************--}}
    <x-admin.buttons></x-admin.buttons>
</div>

