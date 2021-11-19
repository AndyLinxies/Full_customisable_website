<section class="mb-5">
    {{-- Form --}}
    <div class="container" style="border: rgba(0, 0, 255, .2) solid 1px; padding:15px; box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);">
        <form action="/portoback" method="POST" enctype="multipart/form-data">
            @csrf
            
            <select name="image_link" class="form-select" aria-label="Default select example">
                
                <option value="portfolio-1.jpg">portfolio-1.jpg</option>
                <option value="portfolio-2.jpg">portfolio-2.jpg</option>
                <option value="portfolio-3.jpg">portfolio-3.jpg</option>
                <option value="portfolio-4.jpg">portfolio-4.jpg</option>
                <option value="portfolio-5.jpg">portfolio-5.jpg</option>
                <option value="portfolio-6.jpg">portfolio-6.jpg</option>
                <option value="portfolio-7.jpg">portfolio-7.jpg</option>
                <option value="portfolio-8.jpg">portfolio-8.jpg</option>
                <option value="portfolio-9.jpg">portfolio-9.jpg</option>
                <option value="portfolio-10.jpg">portfolio-10.jpg</option>
                
            </select>
            <div class="form-group mb-3">
                <label for="exampleFormControlInput2">Title h3</label>
                <input type="text" name="titre_h3" class="form-control" id="exampleFormControlInput2">
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlInput3">Description</label>
                <input type="text" name="description" class="form-control" id="exampleFormControlInput3">
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlInput4">Link text</label>
                <input type="text" name="link_text" class="form-control" id="exampleFormControlInput4">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>