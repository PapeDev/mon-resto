@if(session()->has('success'))


	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		  <i class="material-icons">close</i>
		</button>
		<span>
			<b> Succes - </b> {!! session()->get('success') !!}
		</span>
	</div>


@endif

@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
