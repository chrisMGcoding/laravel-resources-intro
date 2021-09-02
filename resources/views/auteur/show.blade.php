@extends('template.template')

@section('content')

    <div class="container">

        <p>ID : {{($album->id)}}</p>
        <p>Nom : {{($album->nom)}}</p>
        <p>Date : {{($album->date)}}</p>
        <p>Auteur : {{($album->auteur)}}</p>
        <p>Profession : {{($album->profession)}}</p>
        <p>Age : {{($album->age)}}</p>
        <p>Description : {{($album->description)}}</p>

    </div>

@endsection