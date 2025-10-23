@extends('layouts.app')
@section('title', 'Daftar ToDo')

@section('content')
    <h3 style="margin-bottom: 20px;">📅 Daftar Tugas Saya</h3>

    @if (session('success'))
        <div style="padding:10px; background:#c8e6c9; border-radius:8px; margin-bottom:15px;">
            ✅ {{ session('success') }}
        </div>
    @endif

    @forelse ($todos as $todo)
        <div class="todo-card {{ $todo->isCompleted() ? 'completed' : 'pending' }}">
            <div class="todo-header">
            <h4>{{ $todo->title }}</h4>
                <span class="status {{ $todo->isCompleted() ? 'done' : 'todo' }}">
                    {{ $todo->isCompleted() ? '✅ Selesai' : '🕓 Belum' }}
                </span>
            </div>
            <p>{{ $todo->description }}</p>
            <small>
                Dibuat: {{ $todo->created_at->format('d M Y H:i') }}
                @if ($todo->completed_at)
                    | Selesai: {{ $todo->completed_at->format('d M Y H:i') }}
                @endif
            </small>
            <div class="todo-actions mt-2">
                <a href="{{ route('todos.edit', $todo->id) }}">
                    <button class="btn-edit"><i class='bx bx-edit'></i></button>
                </a>

                @if (!$todo->isCompleted())
                    <form action="{{ route('todos.complete', $todo->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('PATCH')
                        <button class="btn-done"><i class='bx bx-check'></i></button>
                    </form>
                @endif

                <form action="{{ route('todos.destroy', $todo->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn-delete"><i class='bx bx-trash'></i></button>
                </form>
            </div>
        </div>
    @empty
        <p style="text-align:center; color:#777;">Belum ada ToDo 😴</p>
    @endforelse
@endsection
