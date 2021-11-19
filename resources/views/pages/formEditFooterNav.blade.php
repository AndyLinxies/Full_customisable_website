@extends('backoffice.partials.basebo')

@section('content')
<section>
{{-- Nav --}}
<div class="container mt-5" style="border: rgba(0, 0, 255, .2) solid 1px; padding:15px; box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);">
    <h1>Navbar</h1>
    
    <form action="/nav/{{$edit2->id}}/update" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h3>Colonne 1</h3>
        <div class="form-group mb-3">
            <label for="exampleFormControlInput2">Donnée 1</label>
            <input value="{{$edit2->home}}" type="text" name="home" class="form-control" id="exampleFormControlInput2">
            
        </div>

        <h3>Colonne 2</h3>
        <div class="form-group mb-3">
            <label for="exampleFormControlInput3">Donnée 2</label>
            <input value="{{$edit2->blog}}" type="text" name="blog" class="form-control" id="exampleFormControlInput3">
            
        </div>

        <h3>Colonne 3</h3>
        <div class="form-group mb-3">
            <label for="exampleFormControlInput3">Donnée 3</label>
            <input value="{{$edit2->portfolio}}" type="text" name="portfolio" class="form-control" id="exampleFormControlInput3">

        </div>

        <h3>Colonne 4</h3>
        <div class="form-group mb-3">
            <label for="exampleFormControlInput3">Donnée 4</label>
            <input value="{{$edit2->contact}}" type="text" name="contact" class="form-control" id="exampleFormControlInput3">

        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</section>

<section>
    {{-- {{dd($edit)}} --}}
    {{--Footer {{dd($edit)}} --}}
<div class="container mt-5" style="border: rgba(0, 0, 255, .2) solid 1px; padding:15px; box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);">
    <h1>Footer</h1>
    <form action="/footer/{{$edit[0]->id}}/update" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <h3>Colonne 1</h3>
        <div class="form-group mb-3">
            <label for="exampleFormControlInput2">Titre 1</label>
            <input value="{{$edit[0]->p_titre1}}" type="text" name="p_titre1" class="form-control" id="exampleFormControlInput2">
            <label for="exampleFormControlInput2">Paragraphe</label>
            <input value="{{$edit[0]->p1}}" type="text" name="p1" class="form-control" id="exampleFormControlInput2">
        </div>

        <h3>Colonne 2</h3>
        <div class="form-group mb-3">
            <label for="exampleFormControlInput3">Titre 2</label>
            <input value="{{$edit[0]->p_titre3}}" type="text" name="p_titre3" class="form-control" id="exampleFormControlInput3">
            <input value="{{$edit[0]->p2}}" type="text" name="p2" class="form-control" id="exampleFormControlInput3">
            
            <label for="exampleFormControlInput3">Phone</label>
            <input value="{{$edit[0]->p3}}" type="text" name="p3" class="form-control" id="exampleFormControlInput3">

            <label for="exampleFormControlInput3">Email</label>
            <input value="{{$edit[0]->mail}}" type="text" name="mail" class="form-control" id="exampleFormControlInput3">

            <label for="exampleFormControlInput3">Fax</label>
            <input value="{{$edit[0]->fax}}" type="text" name="fax" class="form-control" id="exampleFormControlInput3">

        </div>

        <h3>Colonne 3</h3>
        <div class="form-group mb-3">
            <label for="exampleFormControlInput3">Titre 3</label>
            <input value="{{$edit[0]->p_titre4}}" type="text" name="p_titre4" class="form-control" id="exampleFormControlInput3">

            <label for="exampleFormControlInput3">Lien 1</label>
            <input value="{{$edit[0]->p4}}" type="text" name="p4" class="form-control" id="exampleFormControlInput3">

            <label for="exampleFormControlInput3">Lien 2</label>
            <input value="{{$edit[0]->link2}}" type="text" name="link2" class="form-control" id="exampleFormControlInput3">

            <label for="exampleFormControlInput3">Lien 3</label>
            <input value="{{$edit[0]->link3}}" type="text" name="link3" class="form-control" id="exampleFormControlInput3">
        </div>

        <h3>Colonne 4</h3>
        <div class="form-group mb-3">
            <label for="exampleFormControlInput3">Titre 4</label>
            <input value="{{$edit[0]->p_titre2}}" type="text" name="p_titre2" class="form-control" id="exampleFormControlInput3">

            <label for="exampleFormControlInput3">Nom d'entreprise</label>
            <input value="{{$edit[0]->name}}" type="text" name="name" class="form-control" id="exampleFormControlInput3">

            <label for="exampleFormControlInput3">Rue</label>
            <input value="{{$edit[0]->street}}" type="text" name="street" class="form-control" id="exampleFormControlInput3">

            <label for="exampleFormControlInput3">Boite postale</label>
            <input value="{{$edit[0]->bp}}" type="text" name="bp" class="form-control" id="exampleFormControlInput3">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</section>

<section>
    {{-- Contact --}}
    <div class="container mt-5 mb-5" style="border: rgba(0, 0, 255, .2) solid 1px; padding:15px; box-shadow: 12px 12px 2px 1px rgba(0, 0, 255, .2);">
        <h1>Contacts</h1>
        <form action="/mycontacts/{{$edit5->id}}/update" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="exampleFormControlInput2">Grand Texte</label>
                <input value="{{$edit5->h2}}" type="text" name="h2" class="form-control" id="exampleFormControlInput2">
                
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlInput3">Paragraphe</label>
                <input value="{{$edit5->paragraph}}" type="text" name="paragraph" class="form-control" id="exampleFormControlInput3">
                
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    </section>
@endsection