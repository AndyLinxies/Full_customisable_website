<section class="mb-5">
    <div class="container"
        style="border: rgba(0, 0, 255, .2) solid 1px; padding:15px; box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);">
        <form action="/home" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <select class="form-select" name="logo" aria-label="Default select example">
                    <option selected>Select logo</option>
                    <option value="fa fa-laptop">laptop</option>
                    <option value="fa fa-wrench">wrench</option>
                    <option value="fa fa-arrows-alt">arrows</option>
                    <option value="fa fa-cogs">cogs</option>
                    <option value="fa fa-angellist">peace</option>
                </select>
            </div>
            <div class="form-group mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="customFile" />
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlInput2">Under title</label>
                <input type="text" name="text" class="form-control" id="exampleFormControlInput2">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>