<div class="tab-pane container fade text-center py-2" id="projects" role="tabpanel" tabindex="0"
     aria-labelledby="projects">
    <div class="row">
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="change projects title" aria-selected="true" @click="fireModal($refs, $el)"
               data-x="projectTitle" data-toggle="modal" data-target="#changeProjectTitle"
               class="btn btn-dark bt-width">Project Title</a>
        </div>
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="add project" aria-selected="true" @click="fireModal($refs, $el)"
               data-x="addProject" data-toggle="modal" data-target="#addProject"
               class="btn btn-dark bt-width">Add Project</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="edit project" aria-selected="true" @click="fireModal($refs, $el)"
               data-x="editProject" data-toggle="modal" data-target="#editProject"
               class="btn btn-dark bt-width">Edit Project</a>
        </div>
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="delete project" aria-selected="true" @click="fireModal($refs, $el)"
               data-x="deleteProject" data-toggle="modal" data-target="#deleteProject"
               class="btn btn-dark bt-width">Delete Project</a>
        </div>
    </div>
</div>
