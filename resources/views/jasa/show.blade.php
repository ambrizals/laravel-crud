@extends('layouts.default')
@section('title',$jasa->nama)
@section('content')
	<div class="card mb-3">
		<div class="card-header">
			Deskripsi
		</div>
		<div class="card-body">
			<p>{{ $jasa->deskripsi }}</p>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-body">
					<h2>Berminat ?</h2>
					<p>Anda dapat menghubungi kami melalui telepon ataupun email</p>
					<a href="mailto:google@google.com" class="btn btn-primary btn-block">Kirim Email</a>
					<a href="tel:081234567890" class="btn btn-primary btn-block">Telepon Kami</a>
				</div>
			</div>
		</div>
		<div class="col-md-6">

		</div>
	</div>
@endsection