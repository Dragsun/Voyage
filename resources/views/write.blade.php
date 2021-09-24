<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
	<br>
	<link rel="icon" href="{{asset('img/favicon.png')}}">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<!-- animate CSS -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- owl carousel CSS -->
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<!-- themify CSS -->
	<link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
	<!-- flaticon CSS -->
	<link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
	<!-- fontawesome CSS -->
	<link rel="stylesheet" href="{{asset('fontawesome/css/all.min.css')}}">
	<!-- magnific CSS -->
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('css/gijgo.min.css')}}">
	<!-- niceselect CSS -->
	<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
	<!-- slick CSS -->
	<link rel="stylesheet" href="{{asset('css/slick.css')}}">
	<!-- style CSS -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
	@foreach($fruits as $fruit)
	<div class="d-flex">
		{{$fruit->id}}
		--
		{{$fruit->title}}
		--
		{{$fruit->body}}
		--
		<a href="">VOIR</a>
		--
		<a href="">EDITER</a>
		--

		<form action="{{route('deleteFruit',$fruit->id)}}" method="post">
			<button type="submit" class="btn btn-danger btn-block">Delete</button>
			@csrf
			@method('DELETE')
		</form>
	</div>
	@endforeach
	<a href="{{route('createFruit')}}">CREER</a>

</body>
</html>