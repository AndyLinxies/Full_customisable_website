@extends('backoffice.partials.basebo')
@section('content')
    <section>
        <div class="table-responsive mb-4 mt-5 container">
            <h3>Yellow Card</h3>
            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Donnée 1</th>
                        <th>Donnée 2</th>
                    </tr>
                </thead>
                

                @foreach ($yellows as $yellow)
                    <tbody>
                        <tr>
                            <td style="background-color: rgba(0, 0, 255, .2); font-weight:bold;">{{$yellow->id }}</td>
                            <td style="max-width:200px; overflow-x: scroll;">
                                {{$yellow->p}} 
                            </td>
                            <td style="width:150px;">
                            
                                {{$yellow->button}}
                            </td>

                            <td>
                                <a class="btn btn-primary text-white" href="/yellow_social/{{$yellow->id}}/edit">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                    {{-- {{dd($yellow->id)}} --}}

                @endforeach
            </table>
        </div>
    </section>

    <section>
        <div class="table-responsive mb-4 mt-5 container">
            <h3>Social Network</h3>
            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Donnée 1</th>
                        <th>Donnée 2</th>
                        <th>Donnée 3</th>
                        <th>Donnée 4</th>
                    </tr>
                </thead>
                

                @foreach ($resaux as $resau)
                    <tbody>
                        <tr>
                            <td style="background-color: rgba(0, 0, 255, .2); font-weight:bold;">{{$resau->id }}</td>
                            <td style="max-width:200px; overflow-x: scroll;">
                                {{$resau->twitter}} 
                            </td>
                            <td style="width:150px;">
                            
                                {{$resau->facebook}}
                            </td>
                            <td style="width:150px;">
                            
                                {{$resau->google}}
                            </td>
                            <td style="width:150px;">
                            
                                {{$resau->mail}}
                            </td>

                            <td>
                                <a class="btn btn-primary text-white" href="/yellow_socialz/{{$resau->id}}/edit">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                    {{-- {{dd($yellow->id)}} --}}

                @endforeach
            </table>
        </div>
    </section>
@endsection