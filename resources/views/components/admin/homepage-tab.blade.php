<div class="tab-pane container active text-center py-2" id="home" role="tabpanel" tabindex="0" aria-labelledby="home">
    <div class="row">
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="change homepage title" aria-selected="true" data-x="homeTitle"
               type="button" class="btn btn-dark" data-toggle="modal" data-target="#changeHomeTitle"
               @click="fireModal($refs, $el)">
                Homepage Title
            </a>
        </div>
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="change homepage text" aria-selected="true" data-x="homeText"
               data-toggle="modal" data-target="#changeHomeText" class="btn btn-dark"
               @click="fireModal($refs, $el)">
                Homepage Text
            </a>
        </div>
    </div>
</div>
