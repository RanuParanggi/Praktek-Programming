@extends('layouts.app')

@section('content')
  <h1>Edit ToDo</h1>

  <form action="{{ route('todos.update', $todo) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label class="form-label">Judul</label>
      <input type="text" name="title" value="{{ $todo->title }}" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Keterangan</label>
      <textarea name="description" class="form-control">{{ $todo->description }}</textarea>
    </div>

    <div class="form-check mb-3">
      <input type="checkbox" name="completed" id="completed" class="form-check-input" {{ $todo->isCompleted() ? 'checked' : '' }}>
      <label class="form-check-label" for="completed">Selesai</label>
    </div>

    <button class="btn btn-primary">Update</button>
  </form>
@endsection
