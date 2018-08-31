<br>
<br>
{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
	<strong>{{ Form::label('file', 'IMAGEN DEL POST') }}</strong>
	{{ Form::file('file') }}	
</div>

<div class="form-group">
	<strong>{{ Form::label('status', 'ESTADO DEL POST') }}</strong>
	<br>
	<label>
		{{ Form::radio('status', 'PUBLISHED') }} PUBLICADO
	</label>
	<br>
	<label>
		{{ Form::radio('status', 'DRAFT') }} BORRADOR
	</label>
</div>

<div class="form-group">
	<strong>{{ Form::label('tags', 'ETIQUETAS DEL POST') }}</strong>
	<div>
		@foreach($tags as $tag)
			<label>
				{{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
				<br>
			</label>
		@endforeach	
	</div>
	
</div>

<div class="form-group">
	<strong>{{ Form::label('category_id', 'CATEGORIA DEL POST') }}</strong>
	{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}	
</div>

<div class="form-group">
	<strong>{{ Form::Label('name', 'NOMBRE DEL POST') }}</strong>
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}	
</div>

<div class="form-group">
	<strong>{{ Form::Label('slug', 'URL AMIGABLE') }}</strong>
	{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}	
</div>

<div class="form-group">
	<strong>{{ Form::Label('excerpt', 'DESCRIPCION CORTA DEL POST') }}</strong>
	{{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2']) }}	
</div>

<div class="form-group">
	<strong>{{ Form::Label('body', 'DESCRIPCION DEL POST') }}</strong>
	{{ Form::textarea('body', null, ['class' => 'form-control', 'id' => 'body']) }}	
</div>

<div class="form-group">
	{{ Form::submit('GUARDAR', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')
<script src="{{ asset('vendor/stringtoslug/jquery.stringToSlug.min.js') }}" ></script>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}" ></script>

<script>
	$(document).ready(function(){
		$("#name, #slug").stringToSlug({
			callback: function(text){
				$("#slug").val(text);
			}
		});
	});

CKEDITOR.config.height = 400;
CKEDITOR.config.width = 'auto';

//CKEDITOR.replace('body');
</script>
@endsection