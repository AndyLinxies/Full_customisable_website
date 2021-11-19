<section class="social-networks">

    <div class="container-fluid">

        <div class="row">
            
            @foreach ($socials as $social)
            {!!$social->twitter!!}
            {!!$social->facebook!!}
            {!!$social->google!!}
            {!!$social->mail!!}
            @endforeach
        </div>
        
    </div>
    
</section><!-- /.social-networks -->