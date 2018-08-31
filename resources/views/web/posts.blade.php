@extends('layouts.app')


@section('content')

<div class="container">
	<div class="col-md-8 offset-2">
		<h1>LISTA DE ARTICULOS</h1>
		
		@foreach($posts as $post)

			<div class="card card-primary">
				<div class="card-header">
					{{ $post->name }}
				</div>
				<div class="card-info">
					@if($post->file)
						<img src="{{ $post->file }}" class="img-fluid" alt="">
					@endif
					{{ $post->excerpt }}
				</div>
				<br>
			</div>
			<div>
				<a href="{{ route('post', $post->slug) }}" class="btn btn-sm btn-primary float-right">LEER MAS...</a>
			</div>
			<br>
			<br>
			
			<hr>
			<hr>

		@endforeach
		{{ $posts->render() }}
	</div>
</div>

@endsection()