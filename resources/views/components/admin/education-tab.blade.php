<div class="tab-pane container fade text-center py-2" id="education" role="tabpanel" tabindex="0"
     aria-labelledby="education">
    <div class="row">
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="change education title" aria-selected="true"
               data-x="educationTitle" data-toggle="modal" data-target="#changeEducationTitle"
               class="btn btn-dark bt-width" @click="fireModal($refs, $el)">Education Title</a>
        </div>
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="add education text" aria-selected="true"
               data-x="addEducationText" data-toggle="modal" data-target="#addEducationText"
               class="btn btn-dark bt-width" @click="fireModal($refs, $el)">Add Education</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="edit education text" aria-selected="true"
               data-toggle="modal" data-target="#editEducationText" data-x="editEducationText"
               class="btn btn-dark bt-width" @click="fireModal($refs, $el)">Edit Education</a>
        </div>
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="delete education text" aria-selected="true"
               data-x="deleteEducationText" data-toggle="modal" data-target="#deleteEducationText"
               class="btn btn-dark bt-width" @click="fireModal($refs, $el)">Delete Education</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="change professors name" aria-selected="true"
               data-x="editProfessor" data-toggle="modal" data-target="#addProfessorsName"
               class="btn btn-dark bt-width" @click="fireModal($refs, $el)">Professor Name</a>
        </div>

        <div class="col-sm-6 p-2"></div>
    </div>
</div>
