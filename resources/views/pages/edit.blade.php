@extends('template.template')

@section('content')

    <div class="container">

        <form action="{{ route('photos.update', $photo->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method("PUT")

            <label class="mt-2 mb-2" for="">photo :</label>
            <input type="file" class="form-control" name="url" value="{{$photo->url}}">
                <br>
            <label class="mt-2 mb-2" for="">Description :</label>
            <input type="text" name="name" id="" value="{{$photo->name}}">
                <br>
            <label class="mt-2 mb-2" for="">Description :</label>
            <input type="text" name="description" id="" value="{{$photo->description}}">
                <br>
            <button class="mt-2 mb-2" type="submit">Update</button>

        </form>

    </div>

@endsection

