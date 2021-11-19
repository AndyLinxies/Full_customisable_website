<nav id="primary-navigation" class="site-navigation">

    <div class="container-fluid">

        <div class="navbar-header">

            <a href{{route('home')}} class="site-title yellow-text">{{env('NOM_ENTREPRISE')}}</a>
        </div><!-- /.navbar-header -->
        @foreach ($navigations as $navigation)

        <div class="main-menu" id="perfect-navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href={{route('home')}}>{{$navigation->home}}</a>
                </li>
                <li>
                    <a href={{route('blog')}}>{{$navigation->blog}}</a>
                </li>
                <li>
                    <a href={{route('porto')}}>{{$navigation->portfolio}}</a>
                </li>
                <li>
                    <a href="{{route('contact')}}">{{$navigation->contact}}</a>
                </li>
            </ul><!-- /.navbar-nav -->
        </div><!-- /.navbar-collapse -->

    </div>

    @endforeach
</nav><!-- /.site-navigation -->
