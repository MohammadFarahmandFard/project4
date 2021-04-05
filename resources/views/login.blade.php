<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login Page</title>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
<style>
	
	@font-face{
		src:url('Tabassom.ttf');
		font-family:tabassom;
		src:url('TitrBold.ttf');
		font-family:titr;
		src: url('Farnaz.ttf');
		font-family: farnaz;
	}
	@font-face{
		src: url('leaguegothic-regular-webfont.ttf');
		font-family:league;
		src: url('knewave.ttf');
		font-family:kn;
	}
	</style>
</head>

<body style="background-image: url(5.jpg);background-repeat: no-repeat;">
@extends('master')
    @section('content')
    <br>
    <br>
    <br>
<div class="container">
	<div class="row">
		<div class="col-md-3" ></div>
		<div class="col-md-6" style="font-family: titr;"><div class="panel panel-success" style="margin-top: 20px;">
				<div class="panel-heading" style="direction: rtl;">
					<span class="glyphicon glyphicon-user"></span>مشخصات خود را جهت ورود وارد کنید:
				</div>
				<div class="panel-body">
					<div class="form-group" style="direction: rtl;">
				ایمیل خود را وارد کنید:<input type="email" class="form-control">
				</div>
				<div class="form-group" style="direction: rtl;">
				پسورد را وارد کنید:<input type="password" class="form-control" placeholder="رمز خود را وارد کنید...">
				</div>
				<div class="form-group" style="text-align: center;">
					<button type="submit" class="btn btn-primary">ورود</button>
				</div>
				</div>
			</div></div>
		<div class="col-md-3" ></div>
	</div>
</div>
@endsection
</body>
</html>