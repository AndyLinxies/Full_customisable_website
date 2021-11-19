
<div class="container">
@foreach ($myfooters as $myfooter)

    <div class="email">
        <a href="mailto:hello@businessperfect.com">{{$myfooter->mail}}</a>
    </div><!-- /.email -->

    <div class="row">

        <div class="col-md-3 col-xs-6">

            <div class="mb-xs-20">
                <a href="index.html" class="site-title yellow-text">{!!$myfooter->p_titre1!!}</a>
                <p class="mb-0">{{$myfooter->p1}}</p>
            </div>
        </div>

        <div class="col-md-3 col-xs-6">

            <div class="mb-xs-20">
                <h4 class="small-title">{{$myfooter->p_titre3}}</h4>
                <ul class="list-unstyled">
                    <li>Phone: <a href="">{{$myfooter->p3}}</a>
                    </li>
                    <li>Email: <a href="">{{$myfooter->mail}}</a></li>
                    <li>Fax: <a href="">{{$myfooter->fax}}</a></li>
                </ul>
            </div>

        </div>

        <div class="col-md-3 col-xs-6">

            <div class="mb-xs-20">
                <h4 class="small-title">{{$myfooter->p_titre4}}</h4>
                <ul class="list-unstyled">
                    <li><a href="">{{$myfooter->p4}}</a></li>
                    <li><a href="">{{$myfooter->link2}}</a></li>
                    <li><a href="">{{$myfooter->link3}}</a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-3 col-xs-6">

            <div class="mb-xs-20">
                <h4 class="small-title">{{$myfooter->p_titre2}}</h4>
                <ul class="list-unstyled">
                    <li>{{$myfooter->name}}</li>
                    <li>{{$myfooter->street}}</li>
                    <li>{{$myfooter->bp}}</li>
                </ul>
            </div>

        </div>

    </div>
    @endforeach
</div>

<div class="copyright">
    <p>&copy; 2017 BusinessPerfect | Made by <a href="http://milansavov.com/" class="yellow-text">Milan Savov</a></p>
</div><!-- /.copyright -->
