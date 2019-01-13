@extends('layouts.default')
@section('title','Master Jasa')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="row mb-4">
            <div class="col-8">
                <a href="{{ route('masterJasa.create') }}" class="btn btn-primary">Tambah Jasa</a>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="col-8">Nama Jasa</th>
                    <th class="col-4">Aksi</th>
                </tr>
            </thead>
            <tbody>
            @foreach($jasa as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>
                        <a href="{{ route('masterJasa.edit', $item->id) }}" class="btn btn-primary">Lihat Data</a>
                        <form action="{{ route('masterJasa.destroy', $item->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">Hapus Data</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection