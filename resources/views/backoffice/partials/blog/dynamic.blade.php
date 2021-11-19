<section class="container">
    <h1 style="text-decoration: underline; margin-bottom: 15px">Dynamic Content:</h1>
    <div class="table-responsive mb-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Paragraph</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            @foreach ($blogInputs as $blogInput)
                <tbody>
                    <tr>
                        <td style="background-color: rgba(0, 0, 255, .2); font-weight:bold;">{{ $blogInput->id }}</td>
                        <td style="max-width:200px; overflow-x: scroll;">{{ $blogInput->image_link }}</td>
                        <td style="width:150px;">{{ $blogInput->titre_h3 }}</td>
                        <td>{{ $blogInput->paragraph }}</td>
                        <td class="text-center"><a href="/blogbo/{{$blogInput->id}}/show"><button class="btn btn-success text-white">SHOW</button></a></td>
                        <td class="text-center">
                            <form action="/blog/{{$blogInput->id}}/delete" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger text-white" type="submit">DELETE</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</section>