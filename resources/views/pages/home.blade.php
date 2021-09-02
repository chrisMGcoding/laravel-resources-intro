@extends('template.template')

@section('content')

<div class="container d-flex justify-content-center">

    <h1>Photos</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="" method="post">
    @csrf

        {{-- <label class="mt-2 mb-2" for="">Nom bâtiment :</label>
        <input type="text" name="titre" id="" value="{{old('')}}">
                <br>
        <label class="mt-2 mb-2" for="">Description :</label>
        <input type="text" name="description" id="" value="{{old('')}}">
                <br> --}}
        <button class="m-2 rounded bg-primary" type="submit">Ajouter</button>

    </form>

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
                        <form action="" method="post">
                            @csrf
                            <button class="rounded m-3 bg-danger" type="submit">Delete</button>
                        </form>

                        <button class="rounded m-3 bg-warning"><a class="text-decoration-none text-dark" href="">Show</a></button>

                        <button class="rounded m-3 bg-success"><a class="text-decoration-none text-dark" href="">Update</a></button>
                    </div>
                </td>
            </tr>

        @endforeach

        </tbody>

    </table>






    </div>

@endsection