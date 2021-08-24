<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 | Crowdfund</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <style type="text/css">
    	.display-1{
    		font-size: 11rem;
    		font-family: system-ui;
    		color:  #d0d0d0;
    		letter-spacing: -9px;
    	}
    	.box{
    		margin: 6rem auto 0;
    	}
    </style>
</head>
<body class="font-sans antialiased bg-white d-flex align-items-center justify-between flex-column">

	<div class="box w-50">
		<h1 class="fw-bolder display-1"><small class="align-top">: (</small> 404</h1>
		<h4 class="text-capitalize fw-bolder mb-3">Oops! This Page Could Not Be Found</h4>
		<p class="text-capitalize mb-4">Sorry but the page you are looking for does not exist, have been removed. Name changed or is temporarily unavailable</p> 
		<a href="{{ route('home') }}" class="btn btn-outline-secondary text-uppercase">Go to homepage</a>
	</div>

</body>