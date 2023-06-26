@extends('dashboard.layout.app', ['title' => 'Users'])

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Users</h1>
        @role('admin')
            <a href="{{ route('users.create') }}" class="btn btn-primary shadow">Tambah User</a>
        @endrole
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('edit'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('edit') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session()->has('delete'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('delete') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr class="text-center text-uppercase">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    @role('admin')
                        <th scope="col">Action</th>
                    @endrole
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $user)
                    <tr class="align-middle">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @role('admin')
                                <div class="text-center">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><i
                                            data-feather="edit"></i></a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Apakah kamu yakin?')"><i data-feather="trash"></i></button>
                                    </form>
                                </div>
                            @endrole
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
