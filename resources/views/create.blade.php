<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<title>Document</title>
</head>
<body>
	<form action="{{route('createData')}}" method="POST">
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
</body>
</html>