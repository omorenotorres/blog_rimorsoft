@extends('layouts.app')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-2">
			<div class="card card-primary">
				<div class="card-header">
					CREAR CATEGORIA
					<a href="{{ route('categories.index') }}" class="btn btn-sm btn-primary float-right">LISTADO</a>
				</div>
			</div>
			<div class="card-primary">
				{!! Form::open(['route' => 'categories.store']) !!}
					@include('admin.categories.partials.form')
				{!! Form::close() !!}
			</div>
			
		</div>
		
	</div>
	
</div>

@endsection