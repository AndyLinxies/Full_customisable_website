@extends('backoffice.partials.basebo')

@section('content')

    <section class="site-section-small section-services">

        <div class="container">

            <div class="service">

                <div class="service-icon">
                    <i class={{ $show->logo }} aria-hidden="true"></i>
                </div><!-- /.service-icon -->
                <div class="service-content">
                    <h4 class="service-title">{{ $show->title }}</h4>
                    <p>{{ $show->text }}</p>
                </div><!-- /.service-content -->
                <a class="btn btn-success text-white mb-3" href="/homebo/{{ $show->id }}/edit">EDIT</a>

                <form action="/homebo/{{ $show->id }}/delete" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger text-white" type="submit">DELETE</button>
                </form>
            </div><!-- /.service -->

        </div>

    </section><!-- /.section-services -->

@endsection
