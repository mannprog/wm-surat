@extends('dashboard.layout.app', ['title' => 'Surat Keluar'])

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Surat Keluar</h1>
        <a href="{{ route('surat-keluar.index') }}" class="btn btn-secondary shadow">Kembali</a>
    </div>
    <form action="{{ route('surat-keluar.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nomor" class="form-label">Nomor Surat</label>
            <input type="text" class="form-control" id="nomor" name="nomor" required autofocus
                value="{{ old('nomor') }}">
        </div>
        <div class="mb-3">
            <label for="tujuan" class="form-label">Tujuan Surat</label>
            <input type="text" class="form-control" id="tujuan" name="tujuan" required value="{{ old('tujuan') }}">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Surat</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" required value="{{ old('tanggal') }}">
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input id="keterangan" type="hidden" name="keterangan" value="{{ old('keterangan') }}">
            <trix-editor input="keterangan"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary shadow">Simpan</button>
    </form>
@endsection
@push('custom-scripts')
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endpush
