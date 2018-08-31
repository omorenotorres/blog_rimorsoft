@extends('layouts.app')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-2">
			<div class="card card-primary">
				<div class="card-header">
					POST
					<a href="{{ route('posts.index') }}" class="btn btn-sm btn-primary float-right">LISTADO</a>
				</div>
			</div>
			<div class="card card-primary">
				<br><br>
				<h4><strong>NOMBRE: </strong>{{ $post->name }}</h4>
				<h4><strong>SLUG: </strong>{{ $post->name }}</h4>
				<h4><strong>CONTENIDO: </strong>{{ $post->body }}</h4>
			</div>
			
		</div>
		
	</div>
	
</div>

@endsection