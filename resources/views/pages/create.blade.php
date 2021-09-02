@extends('template.template')

@section('content')

    <h1 class="text-center my-3">Créer photo</h1>

    <form action="{{ route('photos.store') }}" method="post">
    @csrf
        <div class="mb-3">
          <label class="form-label">URL</label>
          <input class="form-control" type="text" name="url">
        </div>
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input class="form-control" type="text" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

@endsection