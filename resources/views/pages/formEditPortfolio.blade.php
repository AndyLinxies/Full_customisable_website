@extends('backoffice.partials.basebo')

@section('content')
    <section class="mb-5">
    {{-- Form --}}
    <div class="container" style="border: rgba(0, 0, 255, .2) solid 1px; padding:15px; box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);">
        <form action="/portupdate/{{$edit->id}}/update" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <select name="image_link" class="form-select" aria-label="Default select example">
                
                <option value="portfolio-1.jpg">image-1</option>
                <option value="portfolio-2.jpg">image-2</option>
                <option value="portfolio-3.jpg">image-3</option>
                <option value="portfolio-4.jpg">image-4</option>
                <option value="portfolio-5.jpg">image-5</option>
                <option value="portfolio-6.jpg">image-6</option>
                <option value="portfolio-7.jpg">image-7</option>
                <option value="portfolio-8.jpg">image-8</option>
                <option value="portfolio-9.jpg">image-9</option>
                <option value="portfolio-10.jpg">image-10g</option>
                
            </select>
            <div class="form-group mb-3">
                <label for="exampleFormControlInput2">Title h3</label>
                <input value="{{$edit->titre_h3}}" type="text" name="titre_h3" class="form-control" id="exampleFormControlInput2">
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlInput3">Description</label>
                <input value="{{$edit->description}}" type="text" name="description" class="form-control" id="exampleFormControlInput3">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>
@endsection