<div class="tab-pane container fade text-center py-2" id="blog" role="tabpanel" tabindex="0" aria-labelledby="blog">
    <div class="row">
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="change blog title" aria-selected="true" @click="fireModal($refs, $el)"
               data-x="blogTitle" data-toggle="modal" data-target="#changeBlogTitle"
               class="btn btn-dark bt-width">Blog Title</a>
        </div>
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="add blog post" aria-selected="true" @click="fireModal($refs, $el)"
               data-x="addPost" data-toggle="modal" data-target="#addPost"
               class="btn btn-dark bt-width">Add Post</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 p-2">
            <a role="link" aria-label="delete blog post" aria-selected="true" @click="fireModal($refs, $el)"
               data-x="deletePost" data-toggle="modal" data-target="#deletePost"
               class="btn btn-dark bt-width">Delete Post</a>
        </div>
        <div class="col-sm-6 p-2"></div>
    </div>
</div>
