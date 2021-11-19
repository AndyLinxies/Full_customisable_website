@extends('backoffice.partials.basebo')
@section('content')
    <section>
        {{--Nav --}}
        <div class="table-responsive mb-4 mt-5 container">
            <h3>NAVBAR</h3>
            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        
                        <th>Colonne1</th>
                        <th>Colonne2</th>
                        <th>Colonne3</th>
                        <th>Colonne4</th>
                    </tr>
                </thead>
                
                @foreach ($navis as $navi)
                    <tbody>
                        <tr>
                            <td style="background-color: rgba(0, 0, 255, .2); font-weight:bold;">{{ $navi->id }}</td>
                            <td style="max-width:200px; overflow-x: scroll;">
                                {{$navi->home}} 
                            </td>
                            <td style="width:150px;">
                            
                                {{ $navi->blog}}
                            </td>
                            <td>
                                {{ $navi->portfolio}}
                            </td>
                            <td>
                                {{$navi->contact}}
                            </td>
                            
                            <td>
                                <a class="btn btn-primary text-white" href="/nav/{{$navi->id}}/edit">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </section>

    <section>
        {{-- Footer --}}
        <div class="table-responsive mb-4 mt-5 container">
            <h3>FOOTER</h3>
            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        
                        <th>Colonne1</th>
                        <th>Colonne2</th>
                        <th>Colonne3</th>
                        <th>Colonne4</th>
                    </tr>
                </thead>
                
                @foreach ($footerbos as $footerbo)
                    <tbody>
                        <tr>
                            <td style="background-color: rgba(0, 0, 255, .2); font-weight:bold;">{{ $footerbo->id }}</td>
                            <td style="max-width:200px; overflow-x: scroll;">{!!$footerbo->p_titre1!!} <hr>
                            {{$footerbo->p1}}
                            </td>
                            <td style="width:150px;">
                                {{$footerbo->p_titre3}} <hr>
                                {{$footerbo->p3}} <hr>
                                {{$footerbo->mail}} <hr>
                                {{$footerbo->fax}}
                            </td>
                            <td>
                                {{ $footerbo->p_titre4 }} <hr>
                                {{ $footerbo->p4 }} <hr>
                                {{ $footerbo->link2}} <hr>
                                {{ $footerbo->link3}} <hr>
                            </td>
                            <td>
                                {{ $footerbo->p_titre2 }} <hr>
                                {{ $footerbo->name }} <hr>
                                {{ $footerbo->street }} <hr>
                                {{ $footerbo->bp }} <hr>
                            </td>
                            
                            <td>
                                {{-- href="/footer/{{$footerbo->id}}/edit" --}}
                                <a class="btn btn-primary text-white" href="/nav/{{$navi->id}}/edit" >
                                    Edit</a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </section>

    <section>
        {{-- Contact--}}
        <div class="table-responsive mb-4 mt-5 container">
            <h3>CONTACT</h3>
            <p>Pour modifier les coordonées veuillez vous referer au Footer</p>
            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Grand texte</th>
                        <th>Paragraphe</th>
                        
                    </tr>
                </thead>
                
                @foreach ($myContacts as $myContact)
                    <tbody>
                        <tr>
                            <td style="background-color: rgba(0, 0, 255, .2); font-weight:bold;">{{ $myContact->id }}</td>
                            <td style="max-width:200px; overflow-x: scroll;">
                                {{$myContact->h2}} 
                            </td>
                            <td style="width:150px;">
                                {{$myContact->paragraph}}
                            </td>
                            <td>
                                {{-- href="/mycontacts/{{$myContact->id}}/edit" --}}
                                <a class="btn btn-primary text-white" href="/nav/{{$navi->id}}/edit">Edit</a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </section>
@endsection