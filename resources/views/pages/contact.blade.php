@extends('layouts.index')

@section('content')

    <header id="masthead" class="site-header" data-anchor-target=".hero"
        data-top="background: rgba(59,58,54,0); border-bottom-color: rgba(226,226,226,0);"
        data-top-bottom="background: rgba(59,58,54,1); border-bottom-color: rgba(226,226,226,1);">

        @include('partials.navbar')

    </header>


    <div class="hero hero-max-720 hero-contact background-overlay">

        <div class="hero-text">
            <h1 class="white-text">Contact Us</h1>
        </div><!-- /.hero-text -->

        <div class="hero-arrow">
            <a class="scrollTo" href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div><!-- /.hero-arrow -->

    </div><!-- /.hero -->

    <main id="main" class="site-main">

        <section class="section-contact-us">

            <div class="container-fluid">

                <div class="row">

                    <div class="col-md-5 yellow-bg">

                        <div class="site-section-small">

                            <div class="get-in-touch">
                                @foreach ($itemsConts as $itemsCont)
                                    @foreach ($myfooters as $myfooter)
                                        
                                    <h2 class="section-title">{{$itemsCont->h2}}</h2>
                                    <p class="small-title mb-50">{{$itemsCont->paragraph}}
                                    </p>

                                    <ul class="list-unstyled mb-0">
                                        <li>{{$myfooter->name}}</li>
                                        <li>Phone: <a class="gray-text" href="tel:+15417543010">{{$myfooter->p3}}</a></li>
                                        <li>Fax: <a class="gray-text" href="tel:+15417543010">{{$myfooter->fax}}</a></li>
                                        <li><a class="white-text"
                                                href="mailto:hello@businessperfect.com">{{$myfooter->mail}}</a></li>
                                    </ul>
                                    @endforeach
                                @endforeach
                            </div><!-- /.get-in-touch -->

                        </div>

                    </div>

                    <div class="col-md-7">

                        <div class="site-section-small">

                            <form class="form-horizontal contact-form text-right">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <input class="form-control" type="text" name="contact-name" placeholder="Name *"
                                            required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input class="form-control" type="email" name="contact-email" placeholder="E-mail *"
                                            required>
                                    </div>
                                </div>
                                <input class="form-control" type="text" name="contact-subject" placeholder="Subject">
                                <textarea class="form-control" placeholder="Message *" required></textarea>

                                <button class="btn btn-yellow">Submit</button>
                            </form><!-- /.contact-form -->

                        </div>

                    </div>

                </div>

            </div>

        </section><!-- /.section-contact-us -->

    </main><!-- /.site-main -->

@endsection
