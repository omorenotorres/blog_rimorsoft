@extends('layouts.app')


@section('content')

<div class="container">
	<div class="col-md-8 offset-2">
		<h1>
			POST
			<br>
			{{ $post->name }}
		</h1>
		
		<div class="card card-primary">
			<div class="card-header">
				<p>
					CATEGORIA
					<br>
				</p>
				<a href="{{ route('category', $post->category->slug) }}">{{ $post->category->name }}</a>
				<br>
			</div>
			<div class="card-info">
					@if($post->file)
						<br>
						<img src="{{ $post->file }}" class="img-fluid" alt="">
						<br>
					@endif
					<hr>
					{{ $post->excerpt }}
					<hr>
					{{ $post->body }}
					<hr>
					<hr>
					<p>
						ETIQUETAS
						<br>
						@foreach($post->tags as $tag)
							<a href="{{ route('tag', $tag->slug) }}">{{ $tag->name }}</a>
						@endforeach
					</p>
			</div>
		</div>
			<hr>
			<hr>
	</div>
</div>

@endsection()