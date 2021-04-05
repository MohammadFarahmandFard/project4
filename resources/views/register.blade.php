<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>صفحه ی ثبت نام</title>
<link rel="stylesheet" href="farsi1.css" type="text/css">
<style>
	@font-face{
		src:url('Tabassom.ttf');
		font-family:tabassom;
		src:url('TitrBold.ttf');
		font-family:titr;
	}
	</style>
</head>

<body style="background-image: url(777.png);background-repeat: no-repeat;">
@extends('master')
    @section('content')<br><br><br><br>
<div class="container">
	<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4" style="direction: rtl;background-color: #ECFFA7;margin-top: 20px;border-radius: 10px;box-shadow: 3px 3px 10px #333;">
	
		<form style="font-family: titr;">
			<div class="form-group">
				نام:<input type="text" placeholder="نام خود رابنویسید..." class="form-control" name="name" style="border-radius: 0px;">
				</div>
				<div class="form-group">
				پسورد را وارد کنید:<input type="password" class="form-control" placeholder="رمز خود را وارد کنید..." name="pass" style="border-radius: 0px;">
				</div>
				<div class="form-group">
				ایمیل خود را وارد کنید:<input type="email" class="form-control" name="email" style="border-radius: 0px;">
				</div>
				<div class="form-group">
					جنسیت:&nbsp;&nbsp;&nbsp;مرد:<input type="radio" name="gender" value="1">
					زن:<input type="radio" name="gender" value="0">
				</div>
				<div class="form-group">
					کدام شهر هستید؟&nbsp;<select class="form-control" name="city" style="width: 50%;">
						<option selected="selected" value="">انتخاب شهر</option>
						<option value="shiraz">شیراز</option>
						<option value="esfahan">اصفهان</option>
						<option value="tehran">تهران</option>
						<option value="tabriz">تبریز</option>
						<option value="mashhad">مشهد</option>
					</select>
				</div>
				
				<div class="form-group">
					قوانین را قبول دارم<input type="checkbox" value="1" name="tic">
				</div>
				<div class="form-group" style="text-align: center;">
					<input type="submit" name="submit" class="btn btn-primary" value="ارسال">
 				</div>
				
			</form></div>
			<div class="col-md-4"></div>
	</div>
</div>
@endsection
</body>
</html>