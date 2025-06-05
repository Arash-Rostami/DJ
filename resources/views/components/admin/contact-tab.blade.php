<div class="tab-pane container fade text-center py-2" id="contact" role="tabpanel" tabindex="0"
     aria-labelledby="contact">
    <div class="row">
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="show instant message" aria-selected="true" id="questions"
               data-x="showMessage" data-toggle="modal" data-target="#showMessage" @click="fireModal($refs, $el)"
               class="btn btn-dark bt-width">Show Messages</a>
        </div>
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="send instant message" aria-selected="true"
               data-x="sendMessage" data-toggle="modal" data-target="#sendMessage" @click="fireModal($refs, $el)"
               class="btn btn-dark bt-width">Send Message</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="delete instant message" aria-selected="true"
               data-x="deleteMessage" data-toggle="modal" data-target="#deleteMessage" @click="fireModal($refs, $el)"
               class="btn btn-dark bt-width">Delete Message</a>
        </div>
        <div class="col-sm-6 p-2"></div>
    </div>
</div>
