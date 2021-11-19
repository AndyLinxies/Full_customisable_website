@extends('layouts.index')
@section('content')
    <header id="masthead" class="site-header site-header-fill">

        @include('partials.navbar')

    </header>

    <section>
        <div class="card cardShow mt-5 mx-auto" style="width: 22rem;">
            <img src="{{ asset('img/' . $show->image_link) }}" class="card-img-top imgShow" alt="">

            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text">Titre: {{$show->titre_h3}}</li>
                    <li class="list-group-item">Description: {{$show->description}}</li>
                
                {{-- delete --}}
                <li class="list-group-item text">
                    <form action="/portobo/{{$show->id}}/delete" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class=" del btn btn-danger text-white">
                        Delete
                    </button>
                </form>
                </li>
                <li class="list-group-item text">
                    {{-- edit --}}
                <a href="/portedit/{{$show->id}}/edit" class=" ed btn btn-success text-white border-solid">Edit</a>
                </li>
                
                </ul>
            </div>
        </div>
    </section>
@endsection
