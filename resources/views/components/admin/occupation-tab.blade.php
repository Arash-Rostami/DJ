<div class="tab-pane container text-center fade py-2" id="occupation" role="tabpanel" tabindex="0"
     aria-labelledby="occupation">
    <div class="row">
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="change occupation title" aria-selected="true" @click="fireModal($refs, $el)"
               data-x="occupationTitle" data-toggle="modal" data-target="#changeOccupationTitle"
               class="btn btn-dark bt-width">Occupation Title</a>
        </div>
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="add occupation text" aria-selected="true" @click="fireModal($refs, $el)"
               data-x="addOccupationText" data-toggle="modal" data-target="#addOccupationText"
               class="btn btn-dark bt-width">Add Occupation</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="edit occupation text" aria-selected="true" @click="fireModal($refs, $el)"
               data-x="editOccupationText" data-toggle="modal" data-target="#editOccupationText"
               class="btn btn-dark bt-width">Edit Occupation</a>
        </div>
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="delete occupation text" aria-selected="true" @click="fireModal($refs, $el)"
               data-x="deleteOccupationText" data-toggle="modal" data-target="#deleteOccupationText"
               class="btn btn-dark bt-width">Delete Occupation</a>
        </div>
    </div>
</div>
