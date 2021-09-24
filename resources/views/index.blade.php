@extends('base.layout')
@section('content')
	
	@foreach($fruits as $fruit)
	<div class="d-flex">
		{{$fruit->id}}
		--
		{{$fruit->title}}
		--
		{{$fruit->body}}
		--
		<a class="btn btn-secondary" href="{{route('fruit.show',$fruit->id)}}">VOIR</a>
		--
		<a class="btn btn-primary" href="{{route('fruit.edit',$fruit->id)}}">EDITER</a>
		--
		<form action="{{route('fruit.destroy',$fruit->id)}}" method="post">
			<button type="submit" class="btn btn-danger btn-block">Delete</button>
			@csrf
			@method('DELETE')
		</form>
	</div>
	@endforeach
	<a class="btn btn-success" href="{{route('fruit.create')}}">CREER</a>

@endsection