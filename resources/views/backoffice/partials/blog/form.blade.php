<section class="mb-5">
    <div class="container"
        style="border: rgba(0, 0, 255, .2) solid 1px; padding:15px; box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);">
        <form action="/blog" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label class="form-label" for="customFile">Image</label>
                <input type="file" name="image_link" class="form-control" id="customFile" />
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlInput2">Title h3</label>
                <input type="text" name="titre_h3" class="form-control" id="exampleFormControlInput2">
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlInput3">Paragraph</label>
                <input type="text" name="paragraph" class="form-control" id="exampleFormControlInput3">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>