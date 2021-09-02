@extends('template.template')

@section('content')

    <div class="container">

        <form action="{{ route('albums.update', $album->id)}}" method="post">
        @csrf
        @method("PUT")

            <label class="mt-2 mb-2" for="">Nom :</label>
            <input type="text" name="nom" id="" value="{{$album->nom}}">
                <br>
            <label class="mt-2 mb-2" for="">Date :</label>
            <input type="text" name="date" id="" value="{{$album->date}}">
                <br>
            <label class="mt-2 mb-2" for="">Auteur :</label>
            <input type="text" name="auteur" id="" value="{{$album->auteur}}">
                <br>
            <label class="mt-2 mb-2" for="">Profession :</label>
            <input type="text" name="profession" id="" value="{{$album->profession}}">
                <br>
            <label class="mt-2 mb-2" for="">Age :</label>
            <input type="text" name="age" id="" value="{{$album->age}}">
                <br>
            <label class="mt-2 mb-2" for="">Description :</label>
            <input type="text" name="description" id="" value="{{$album->description}}">
                <br>
            <button class="mt-2 mb-2" type="submit">Update</button>

        </form>

    </div>

@endsection