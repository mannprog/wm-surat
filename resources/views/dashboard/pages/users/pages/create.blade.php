@extends('dashboard.layout.app', ['title' => 'Users'])

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah User</h1>
        <a href="{{ route('users.index') }}" class="btn btn-secondary shadow">Kembali</a>
    </div>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="name" name="name" required autofocus
                value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required
                value="{{ old('password') }}">
        </div>
        <div class="mb-3">
            <label for="role" class="form-label">Roles<span class="text-danger">*</span></label>
            <select class="form-control" name="role" id="role">
                <option selected disabled>---Select Roles---</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary shadow">Simpan</button>
    </form>
@endsection
