@extends('dashboard.layout.app', ['title' => 'Surat Keluar'])

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Surat Keluar</h1>
        @role('admin|officer')
            <a href="{{ route('surat-keluar.create') }}" class="btn btn-primary shadow">Tambah Surat</a>
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
                    <th scope="col">Nomor</th>
                    <th scope="col">Tujuan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Keterangan</th>
                    @role('admin|officer')
                        <th scope="col">Action</th>
                    @endrole
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $sk)
                    <tr class="align-middle">
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">{{ $sk->nomor }}</td>
                        <td>{{ $sk->tujuan }}</td>
                        <td>{{ $sk->tanggal }}</td>
                        <td>{!! $sk->keterangan !!}</td>
                        <td>
                            @role('admin|officer')
                                <div class="text-center">
                                    <a href="{{ route('surat-keluar.edit', $sk->id) }}" class="btn btn-warning"><i
                                            data-feather="edit"></i></a>
                                    <form action="{{ route('surat-keluar.destroy', $sk->id) }}" method="POST" class="d-inline">
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
