@extends('template.template')

@section('content')

    <h1 class="text-center my-3">Créer photo</h1>

    <form action="{{ route('albums.store') }}" method="post">
    @csrf
        <div class="mb-3">
          <label class="form-label">Nom</label>
          <input class="form-control" type="text" name="nom">
        </div>
        <div class="mb-3">
            <label class="form-label">Date</label>
            <input class="form-control" type="text" name="date">
        </div>
        <div class="mb-3">
            <label class="form-label">Auteur</label>
            <input class="form-control" type="text" name="auteur">
        </div>
        <div class="mb-3">
            <label class="form-label">Profession</label>
            <input class="form-control" type="text" name="profession">
        </div>
        <div class="mb-3">
            <label class="form-label">Age</label>
            <input class="form-control" type="text" name="age">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input class="form-control" type="text" name="description">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@endsection