@extends('layouts.default')
@section('title','Daftar Jasa')
@section('content')
	<div class="row">
		@foreach($jasa as $item)
		<div class="col-md-4">
			<div class="card">
				<div class="card-body">
					<h5 class="card-title">{{ $item->nama }}</h5>
					<p class="card-text">{{ str_limit($item->deskripsi, 100) }}</p>
					<a href="{{ route('jasa.show', $item->urlslug) }}" class="btn btn-primary">Lihat Detail</a>
				</div>
			</div>
		</div>
		@endforeach
		{{ $jasa->links() }}
	</div>
@endsection