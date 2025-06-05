<div class="tab-pane container fade text-center py-2" id="me" role="tabpanel" tabindex="0" aria-labelledby="me">
    <div class="row">
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="change about me title" aria-selected="true"
               data-toggle="modal" data-target="#changeAboutMeTitle" data-x="aboutMeTitle"
               class="btn btn-dark bt-width"  @click="fireModal($refs, $el)">About me Title</a>
        </div>
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="change about me text" aria-selected="true"
               data-toggle="modal" data-target="#changeAboutMeText" data-x="aboutMeText"
               class="btn btn-dark bt-width"  @click="fireModal($refs, $el)">About me Text</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="add about me images" aria-selected="true"
                data-toggle="modal" data-target="#addAboutMeGallery" data-x="galleryImage"
               class="btn btn-dark bt-width"  @click="fireModal($refs, $el)">Add Image</a>
        </div>
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="delete about me images" aria-selected="true"
              data-toggle="modal" data-x="galleryRemove"
               data-target="#delAboutMeGallery"
               class="btn btn-dark bt-width"  @click="fireModal($refs, $el)">Delete Image</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="change about me mission title"
               aria-selected="true" data-toggle="modal" data-x="missionTitle"
               data-target="#missionTitle"
               class="btn btn-dark bt-width"  @click="fireModal($refs, $el)">Mission Title</a>
        </div>
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="change about me mission text" aria-selected="true"
               data-toggle="modal" data-x="missionText"
               data-target="#missionText"
               class="btn btn-dark bt-width"  @click="fireModal($refs, $el)">Mission Text</a>
        </div>
    </div>
</div>
