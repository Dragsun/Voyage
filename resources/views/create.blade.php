@extends('base.layout')
@section('content')
	<form action="{{route('fruit.store')}}" method="POST">
		@csrf
		@method('POST')
		<div class="mb-3">
			<label class="form-label">title</label>
			<input type="text" name="title">
		</div>
		<div class="mb-3">
			<label class="form-label">Body</label>
			<textarea name="body"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection
