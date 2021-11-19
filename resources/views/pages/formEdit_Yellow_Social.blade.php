@extends('backoffice.partials.basebo')

@section('content')
<section>
{{-- Yellow card --}}
<div class="container mt-5" style="border: rgba(0, 0, 255, .2) solid 1px; padding:15px; box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);">
    <h1>Yellow card</h1>
    <form action="/yellow_social/{{$edit3->id}}/update" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="exampleFormControlInput2">Paragraphe</label>
            <input value="{{$edit3->p}}" type="text" name="p" class="form-control" id="exampleFormControlInput2">
            
        </div>

        <div class="form-group mb-3">
            <label for="exampleFormControlInput3">Bouton</label>
            <input value="{{$edit3->button}}" type="text" name="button" class="form-control" id="exampleFormControlInput3">
            
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</section>

<section>
{{-- Socials --}}
<div class="container mt-5 mb-5" style="border: rgba(0, 0, 255, .2) solid 1px; padding:15px; box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);">
    <h1>Social network</h1>
    <form action="/yellow_socialz/{{$edit4->id}}/update" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h5>Colonne 1</h5>
        <select name="twitter" class="form-select" aria-label="Default select example">
                
            <option selected="selected" value='<a class="white-text black-bg twitter-bg" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>'>Twitter</option>

            <option value='<a class="white-text gray-bg facebook-bg" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>'>Facebook</option>

            <option value='<a class="white-text black-bg google-plus-bg" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>'>Google plus</option>

            <option value='<a class="white-text gray-bg message-bg" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>'>E-mail</option>
            
        </select>
        <h5>Colonne 2</h5>
        <select name="facebook" class="form-select" aria-label="Default select example">
                
            <option  value='<a class="white-text black-bg twitter-bg" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>'>Twitter</option>

            <option selected="selected" value='<a class="white-text gray-bg facebook-bg" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>'>Facebook</option>

            <option value='<a class="white-text black-bg google-plus-bg" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>'>Google plus</option>

            <option value='<a class="white-text gray-bg message-bg" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>'>E-mail</option>
            
        </select>
        <h5>Colonne 3</h5>
        <select name="google" class="form-select" aria-label="Default select example">
                
            <option value='<a class="white-text black-bg twitter-bg" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>'>Twitter</option>

            <option value='<a class="white-text gray-bg facebook-bg" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>'>Facebook</option>

            <option selected="selected" value='<a class="white-text black-bg google-plus-bg" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>'>Google plus</option>

            <option value='<a class="white-text gray-bg message-bg" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>'>E-mail</option>
            
        </select>
        <h5>Colonne 4</h5>
        <select name="mail" class="form-select" aria-label="Default select example">
                
            <option value='<a class="white-text black-bg twitter-bg" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>'>Twitter</option>

            <option value='<a class="white-text gray-bg facebook-bg" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>'>Facebook</option>

            <option value='<a class="white-text black-bg google-plus-bg" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>'>Google plus</option>

            <option selected="selected" value='<a class="white-text gray-bg message-bg" href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>'>E-mail</option>
            
        </select>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</section>
@endsection