<section class="site-section-small portfolio">
    <div class="container">
        <h1 class="section-title-big text-center">Portfolio</h1>
    </div>
    <div class="container-fluid">
        <div class="row" id="grid">
        @foreach ($Portos as $Porto)
        
            <div class="col-lg-fifth col-md-3 col-sm-4 col-xs-6" data-groups='["uiux"]'>
                <a class="portfolio-link" href="#">
                    {{-- <img src="{{asset("img/portfolio-1.jpg")}}" alt='' class="img-carousel"> --}}
                    <img src="{{asset('img/'.$Porto->image_link)}}" alt='' class="img-carousel">
                    <div class="portfolio-info">
                        <div class="portfolio-info-top">
                            <h3>{{$Porto->titre_h3}}</h3>
                        </div><!-- /.portfolio-info-top -->
                        <div class="portfolio-info-bottom">
                            <p>{{$Porto->description}}</p>
                        </div><!-- /.portfolio-info-bottom -->
                    </div><!-- /.portfolio-info  -->
                </a>
            </div><!-- /.col-lg-fifth  -->

            @endforeach

        </div>

    </div>

</section>
