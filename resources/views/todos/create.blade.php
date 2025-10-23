@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-lg border-0 rounded-4" style="background: #d9f5c6;">
        <div class="card-body p-5">
            <h2 class="text-center fw-bold mb-4 text-success">📝 Buat ToDo Baru</h2>

            <form action="{{ route('todos.store') }}" method="POST">
                @csrf

                <!-- Judul -->
                <div class="row mb-3 align-items-center">
                    <label for="title" class="col-sm-3 col-form-label text-end fw-semibold text-success">
                        Judul
                    </label>
                    <div class="col-sm-9">
                        <input type="text" name="title" id="title" class="form-control"
                            placeholder="Masukkan judul tugas">
                    </div>
                </div>

                <!-- Keterangan -->
                <div class="row mb-3 align-items-start">
                    <label for="description" class="col-sm-3 col-form-label text-end fw-semibold text-success">
                        Keterangan
                    </label>
                    <div class="col-sm-9">
                        <textarea name="description" id="description" rows="4" class="form-control"
                            placeholder="Masukkan keterangan"></textarea>
                    </div>
                </div>

                <!-- Tombol Simpan -->
                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-success px-4 fw-semibold shadow-sm">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
