<section class="site-section-small section-blog">

    <div class="container">

        <div class="text-center">

            <h1 class="section-title-big">{{$blogTexts[0]->content}}</h1>
            <p class="section-text">{{$blogTexts[1]->content}}</p>

        </div>

        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Blog</li>
        </ol><!-- /.breadcrumb -->
        @foreach ($blogInputs as $blogInput)

            <div class="row">

                <div class="col-md-9">

                    <div class="blog-post">

                        <a href="{{ route('blog') }}">
                            <img class="img-carousel post-img"
                                src={{asset('images/'.$blogInput->image_path)}} alt=""></a>

                        <div class="post-content">

                            <h3><a class="post-title" href="{{ route('blog') }}">{{ $blogInput->titre_h3 }}</a></h3>


                            <p class="section-text">{{ $blogInput->paragraph }}</p>

                        </div><!-- /.post-content -->

                    </div><!-- /.blog-post -->

                </div>
            </div>
        @endforeach

    </div>

</section><!-- /.section-blog -->
