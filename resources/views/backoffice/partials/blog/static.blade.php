
    <section class="container">
        <h1 style="text-decoration: underline; margin-bottom: 15px">Static Content:</h1>
        <div class="table-responsive mb-4">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cell</th>
                        <th>Content</th>
                        <th></th>
                    </tr>
                </thead>
                @foreach ($blogInputStatics as $blogInputStatic)
                    <tbody>
                        <tr>
                            <td style="background-color: rgba(0, 0, 255, .2); font-weight:bold;">{{ $blogInputStatic->id }}</td>
                            <td>{{$blogInputStatic->cell }}</td>
                            <td>{{ $blogInputStatic->content }}</td>
                            <td class="text-center"> <a class="btn btn-success text-white mb-3" href="/blogbostatic/{{ $blogInputStatic->id }}/edit">EDIT</a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </section>