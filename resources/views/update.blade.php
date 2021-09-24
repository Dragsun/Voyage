@extends('base.layout')
@section('content')
	<form action="{{route('fruit.update', $fruit->id)}}" method="POST">
		@csrf
		@method('PUT')
		<div class="mb-3">
			<label class="form-label">title</label>
			<input type="text" name="title" value="{{$fruit->title}}">
		</div>
		<div class="mb-3">
			<label class="form-label">Body</label>
			<textarea name="body">{{$fruit->body}}</textarea>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection
