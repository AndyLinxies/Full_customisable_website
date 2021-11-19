<section class="site-section-small section-services">

    <div class="container">

        <div class="text-center">

            <h3 class="section-title">{{ $homeInputs[6]->content }}</h3>
            <p class="section-text">{{ $homeInputs[7]->content }}</p>

        </div>
        <div class="row">

            @foreach ($homeCards as $homeCard)
                <div class="col-sm-5 col-sm-offset-1 col-xs-6" id="blogArticles">
                    <div class="service">
                        <div class="service-icon">
                            <i class="{{ $homeCard->logo }}" aria-hidden="true"></i>
                        </div><!-- /.service-icon -->
                        <div class="service-content">
                            <h4 class="service-title">{{ $homeCard->title }}</h4>
                            <p>{{ $homeCard->text }}</p>
                        </div><!-- /.service-content -->
                    </div><!-- /.service -->
                </div>
            @endforeach

        </div>
    </div>

</section><!-- /.section-services -->
