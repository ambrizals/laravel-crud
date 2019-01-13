@extends('layouts.default')
@section('title','Jasa '.$jasa->nama)
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">{{ $jasa->nama }}</h5>
            </div>
            <form action="{{ route('masterJasa.update', $jasa->id) }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama Jasa</label>
                        <input type="text" name="nama" class="form-control" value="{{ $jasa->nama }}">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi">{{ $jasa->deskripsi }}</textarea>
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