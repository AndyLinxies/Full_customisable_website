<section class="container">
    <h1 style="text-decoration: underline; margin-bottom: 15px">Dynamic Content:</h1>
    <div class="table-responsive mb-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Logo</th>
                    <th>Title</th>
                    <th>Under text</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            @foreach ($homeCards as $homeCard)
                <tbody>
                    <tr>
                        <td style="background-color: rgba(0, 0, 255, .2); font-weight:bold;">{{ $homeCard->id }}</td>
                        <td>{{ $homeCard->logo }}</td>
                        <td style="max-width:150px;">{{ $homeCard->title }}</td>
                        <td style="width: 150px">{{ $homeCard->text }}</td>
                        <td class="text-center"><a href="/homebo/{{ $homeCard->id }}/show"><button
                                    class="btn btn-success text-white">SHOW</button></a></td>
                        <td class="text-center">
                            <form action="/homebo/{{ $homeCard->id }}/delete" method="POST">
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