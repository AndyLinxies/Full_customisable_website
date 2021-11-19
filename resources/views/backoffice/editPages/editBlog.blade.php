@extends('backoffice.partials.basebo')

@section('content')
    <section class="mb-5">
        <div class="container"
            style="border: rgba(0, 0, 255, .2) solid 1px; padding:15px; box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);">
            <form action="/blogbo/{{$edit->id}}/update" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label class="form-label" for="customFile">Image</label>
                    <input type="file" value="{{$edit->image_link}}" name="image_link" class="form-control" id="customFile" required />
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput2">Title h3</label>
                    <input type="text" value="{{$edit->titre_h3}}" name="titre_h3" class="form-control" id="exampleFormControlInput2" required>
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput3">Paragraph</label>
                    <input type="text" value="{{$edit->paragraph}}" name="paragraph" class="form-control" id="exampleFormControlInput3" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection
