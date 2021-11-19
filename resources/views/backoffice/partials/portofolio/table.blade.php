<section class="container">
    <div class="table-responsive mb-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Titre</th>
                    <th>Description</th>
                </tr>
            </thead>
            
            @foreach ($portos1 as $porto1)
                <tbody>
                    <tr>
                        <td style="background-color: rgba(0, 0, 255, .2); font-weight:bold;">{{ $porto1->id }}</td>
                        <td style="max-width:200px; overflow-x: scroll;">{{ $porto1->image_link }}</td>
                        <td style="width:150px;">{{ $porto1->titre_h3 }}</td>
                        <td>{{ $porto1->description }}</td>
                        <td>
                            <form action="/portobo/{{$porto1->id}}/delete" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">
                                Delete
                            </button>
                        </form>
                        </td>
                        <td>
                            <a class="btn btn-primary text-white" href="/porto/{{$porto1->id}}/show">Show</a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
    </div>
</section>