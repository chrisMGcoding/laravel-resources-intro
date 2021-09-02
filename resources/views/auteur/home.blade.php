@extends('template.template')

@section('content')

<div class="container d-flex justify-content-center">

    <h1>Album</h1>
    <button class="m-2 rounded bg-primary">
        <a href="{{ route('albums.create')}}"><p class="text-dark text-decoration-none">Ajouter</p></a>
    </button>

</div>

<div class="container">

    <table class="table">

        <thead >
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Date</th>
                <th scope="col">Auteur</th>
                <th scope="col">Profession</th>
                <th scope="col">Age</th>
                <th scope="col">Description</th>
            </tr>
        </thead>

        <tbody>

        @foreach($album as $item)

            <tr>
                <th scope="row">{{($item->id)}}</th>
                <td>{{($item->nom)}}</td>
                <td>{{($item->date)}}</td>
                <td>{{($item->auteur)}}</td>
                <td>{{($item->profession)}}</td>
                <td>{{($item->age)}}</td>
                <td>{{($item->description)}}</td>
                <td>
                    <div class="d-flex">
                        <form action="{{ route('albums.destroy', $item->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="rounded m-3 bg-danger" type="submit">Delete</button>
                        </form>

                        <button class="rounded m-3 bg-warning"><a class="text-decoration-none text-dark" href="{{ route('albums.show', $item->id)}}">Show</a></button>

                        <button class="rounded m-3 bg-success"><a class="text-decoration-none text-dark" href="{{ route('albums.edit', $item->id)}}">Update</a></button>
                    </div>
                </td>
            </tr>

        @endforeach

        </tbody>

    </table>






    </div>

@endsection