@extends('backoffice.partials.basebo')

@section('content')
    @include('backoffice.partials.blog.form')    
    @include('backoffice.partials.blog.dynamic')
    @include('backoffice.partials.blog.static')
@endsection
