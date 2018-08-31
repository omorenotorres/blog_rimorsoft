@extends('layouts.app')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-2">
			<div class="card card-primary">
				<div class="card-header">
					CREAR POST
					<a href="{{ route('posts.index') }}" class="btn btn-sm btn-primary float-right">LISTADO</a>
				</div>
			</div>
			<div class="card-primary">
				{!! Form::open(['route' => 'posts.store', 'files' => true]) !!}
					@include('admin.posts.partials.form')
				{!! Form::close() !!}
			</div>
			
		</div>
		
	</div>
	
</div>

@endsection