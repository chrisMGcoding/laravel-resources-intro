@extends('template.template')

@section('content')

    <div class="container">

        <p>ID : {{($photo->id)}}</p>
        <p>Url : {{($photo->url)}}</p>
        <p>Name : {{($photo->name)}}</p>
        <p>Description : {{($photo->description)}}</p>

    </div>

@endsection