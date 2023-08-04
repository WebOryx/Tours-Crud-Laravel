<!doctype html>
<html lang="en" class="h-100">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
<meta name="generator" content="Hugo 0.101.0">
<title>Tour Guide</title>
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('css/page.css')}}" rel="stylesheet">
</head>

<body class="">
<div class="container-fluid blog-header text-bg-dark">
	<div class="container">
		<header class="d-flex flex-wrap justify-content-center mb-4 p-4 border-bottom">
			<a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none link-secondary" href="#"><img src="{{asset('images/logo.png')}}" /></a>
			@if(Auth::check())
			<ul class="nav nav-pills mt-auto">
				<li class="nav-item"><a href="{{route('logout')}}" class="nav-link active" aria-current="page">Sign Out</a></li>
			</ul>
			@endif
		</header>
		@include('admin.layout.navbar')
	</div>
</div>
<main class="container mt-4">
	<div class="row">
		<div class="col-sm-12">
			<!-- BODY CONTENT -->