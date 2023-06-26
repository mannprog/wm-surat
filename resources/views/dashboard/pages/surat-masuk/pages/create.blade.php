@extends('dashboard.layout.app', ['title' => 'Surat Masuk'])

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Surat Masuk</h1>
        <a href="{{ route('surat-masuk.index') }}" class="btn btn-secondary shadow">Kembali</a>
    </div>
    <form action="{{ route('surat-masuk.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nomor" class="form-label">Nomor Surat</label>
            <input type="text" class="form-control" id="nomor" name="nomor" required autofocus
                value="{{ old('nomor') }}">
        </div>
        <div class="mb-3">
            <label for="pengirim" class="form-label">Pengirim Surat</label>
            <input type="text" class="form-control" id="pengirim" name="pengirim" required
                value="{{ old('pengirim') }}">
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
