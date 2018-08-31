@extends('layouts.app')


@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8 offset-2">
			<div class="card card-primary">
				<div class="card-header">
					LISTA DE POST
					<a href="{{ route('posts.create') }}" class="btn btn-sm btn-primary float-right">CREAR</a>
				</div>
			</div>
			<div class="card-subtitle">
				<table class="table table-striped table-hover">
					<thead>
						<tr>
							<th width="10px">ID</th>
							<th>NOMBRE</th>
							<th colspan="3">&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $post)

							<tr>
								<td>{{ $post->id }}</td>
								<td>{{ $post->name }}</td>
								<td width="10px">
									<a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-primary">VER</a>
								</td>
								<td width="10px">
									<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDITAR</a>
								</td>
								<td width="10px">
									{!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
										<button class="btn btn-sm btn-danger">
											ELIMINAR
										</button>
									{!! Form::close() !!}
									
								</td>
							</tr>

						@endforeach
					</tbody>
				</table>
				{{ $posts->render() }}
			</div>
			
		</div>
		
	</div>
	
</div>

@endsection