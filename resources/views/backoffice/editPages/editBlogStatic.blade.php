@extends('backoffice.partials.basebo')

@section('content')
    <section class="mb-5">
        <div class="container"
            style="border: rgba(0, 0, 255, .2) solid 1px; padding:15px; box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);">
            <form action="/blogbostatic/{{ $edit->id }}/update" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group mb-3">
                    <label class="form-label">Cell</label>
                    <input type="text" value="{{ $edit->cell }}" name="cell" class="form-control" id="customFile" />
                </div>
                <div class="form-group mb-3">
                    <label for="exampleFormControlInput2"></label>
                    <input type="text" value="{{ $edit->content }}" name="content" class="form-control"
                        id="exampleFormControlInput2">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>
@endsection
