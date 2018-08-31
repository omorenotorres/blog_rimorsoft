@extends('layouts.app')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-2">
			<div class="card card-primary">
				<div class="card-header">
					EDITAR ETIQUETA
					<a href="{{ route('tags.index') }}" class="btn btn-sm btn-primary float-right">LISTADO</a>
				</div>
			</div>
			<div class="card-primary">
				{!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}
					@include('admin.tags.partials.form')
				{!! Form::close() !!}
			</div>
			
		</div>
		
	</div>
	
</div>

@endsection