@extends('base.layout')
@section('content')

	{{$fruit->id}}
	{{$fruit->title}}
	{{$fruit->body}}

	<a class="btn btn-primary" href="{{route('fruit.index')}}">Retour</a>
@endsection
