@extends('backoffice.partials.basebo')

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-md-9">

                <div class="blog-post">

                    <a href="{{ route('blog') }}">
                        <img class="img-carousel post-img" src={{ asset('images/' . $show->image_path) }} alt=""></a>

                    <div class="post-content">

                        <h3><a class="post-title" href="{{ route('blog') }}">{{ $show->titre_h3 }}</a></h3>


                        <p class="section-text">{{ $show->paragraph }}</p>

                    </div><!-- /.post-content -->

                    <a class="btn btn-success text-white mb-3" href="/blogbo/{{$show->id}}/edit">EDIT</a>

                    <form action="/blog/{{$show->id}}/delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger text-white" type="submit">DELETE</button>
                    </form>

                </div><!-- /.blog-post -->

            </div>
        </div>
    </div>
@endsection
