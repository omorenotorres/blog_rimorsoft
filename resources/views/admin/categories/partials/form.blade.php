<br>
<br>
<div class="form-group">
	{{ Form::Label('name', 'NOMBRE DE LA CATEGORIA') }}
	{{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}	
</div>

<div class="form-group">
	{{ Form::Label('slug', 'URL AMIGABLE') }}
	{{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}	
</div>

<div class="form-group">
	{{ Form::Label('body', 'DESCRIPCION DE LA CATEGORIA') }}
	{{ Form::textarea('body', null, ['class' => 'form-control']) }}	
</div>

<div class="form-group">
	{{ Form::submit('GUARDAR', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')
<script src="{{ asset('vendor/stringtoslug/jquery.stringToSlug.min.js') }}" ></script>
<script>
	$(document).ready(function(){
		$("#name, #slug").stringToSlug({
			callback: function(text){
				$("#slug").val(text);
			}
		});
	});
</script>
@endsection