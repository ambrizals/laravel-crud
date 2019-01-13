@extends('layouts.default')
@section('title','Tambah Jasa')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Tambah Jasa</h5>
            </div>
            <form action="{{ route('masterJasa.store') }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('POST') }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama Jasa</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Jasa">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi"></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    <a href="{{ route('masterJasa.index') }}" class="btn btn-primary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection