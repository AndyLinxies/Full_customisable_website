<section class="site-section-small section-work-with-us yellow-bg text-center">

    <div class="container">
        @foreach ( $unders as $under )
            <p class="section-title-small white-text mb-50">{{$under->p}}</p>
        <a class="btn" href="#">{{$under->button}}</a>
        @endforeach
        

    </div>
    
</section><!-- /.section-work-with-us -->