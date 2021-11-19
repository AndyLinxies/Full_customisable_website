@extends('layouts.index')
@section('content')
<header id="masthead" class="site-header site-header-fill">

    @include('partials.navbar')

</header>

<main id="main" class="site-main">
    @include('partials.portfolio.portfolio_sec1')
    @include('partials.portfolio.portfolio_sec2')

</main><!-- /.site-main -->
@endsection
