@extends('layouts.index')

@section('content')

    <header id="masthead" class="site-header" data-anchor-target=".hero" data-top="background: rgba(59,58,54,0); border-bottom-color: rgba(226,226,226,0);" data-top-bottom="background: rgba(59,58,54,1); border-bottom-color: rgba(226,226,226,1);">

        @include('partials.navbar')

    </header>

    @include('partials.home.hero')

    <main id="main" class="site-main">
        @include('partials.home.quote')
        @include('partials.home.creative')
        @include('partials.home.services')
        @include('partials.home.workwithus')
    </main><!-- /.site-main -->

@endsection



{{-- ANDY --}}

{{-- pour la page portofolio --}}

{{-- @extends('layouts.index')

@section('content')

    <header id="masthead" class="site-header site-header-fill">

        @include('partials.navbar')

    </header>

    {{-- mettre les includes
@endsection --}}


{{-- pour la page contact --}}

{{-- @extends('layouts.index')

@section('content')

    <header id="masthead" class="site-header" data-anchor-target=".hero" data-top="background: rgba(59,58,54,0); border-bottom-color: rgba(226,226,226,0);" data-top-bottom="background: rgba(59,58,54,1); border-bottom-color: rgba(226,226,226,1);">

        @include('partials.navbar')

    </header>

    {{-- mettre les includes
@endsection --}}
