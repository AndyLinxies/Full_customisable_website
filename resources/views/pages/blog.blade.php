@extends('layouts.index')
@section('content')

    <header id="masthead" class="site-header site-header-fill">

        @include('partials.navbar')

    </header>
    
    <main id="main" class="site-main">
        @include('partials.blog.blog')
    </main>
@endsection
