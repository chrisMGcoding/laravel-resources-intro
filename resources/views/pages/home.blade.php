@extends('template.template')

@section('content')

<div class="container d-flex justify-content-center">

    <h1>Photos</h1>

    <a class="m-2 rounded bg-primary text-dark" href="{{ route('photos.create')}}">Ajouter</a>

</div>

<div class="container">

    <table class="table">

        <thead >
            <tr>
                <th scope="col">#</th>
                <th scope="col">URL</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>

        <tbody>

        @foreach($photo as $item)

            <tr>
                <th scope="row">{{($item->id)}}</th>
                <td>{{($item->url)}}</td>
                <td>{{($item->name)}}</td>
                <td>{{($item->description)}}</td>
                <td>
                    <div class="d-flex">
                        <form action="{{ route('photos.destroy', $item->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="rounded m-3 bg-danger" type="submit">Delete</button>
                        </form>

                        <button class="rounded m-3 bg-warning"><a class="text-decoration-none text-dark" href="{{ route('photos.show', $item->id)}}">Show</a></button>

                        <button class="rounded m-3 bg-success"><a class="text-decoration-none text-dark" href="{{ route('photos.edit', $item->id)}}">Update</a></button>
                    </div>
                </td>
            </tr>

        @endforeach

        </tbody>

    </table>






    </div>

@endsection