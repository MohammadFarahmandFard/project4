<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فروشگاه موبایل</title>
<link rel="stylesheet" href="farsi1.css" type="text/css">
<style>
	.bt{
		margin-top: 30px;
	}
	</style>
	<script>
		function change1(){
			document.getElementById('image1').src='yel.jpg';
		}
		function change2(){
			document.getElementById('image1').src='red.jpg';
		}
		function change3(){
			document.getElementById('image1').src='ble.jpg';
		}
		function change4(){
			document.getElementById('image1').src='blackdfd.jpg';
		}
		function change5(){
			document.getElementById('image1').src='backttt.jpg';
		}
	</script>
</head>

<body>
     @extends('master')
    @section('content')<br><br><br><br><br><br>
      <div class="container">
      	<div class="row">
      		<div class="col-md-6" style="text-align: center;">
      			<button class="btn btn-primary bt" onClick="change1()">gold</button><br>
      			<button class="btn btn-primary bt" onClick="change2()">red</button><br>
      			<button class="btn btn-primary bt" onClick="change3()">blue</button><br>
      			<button class="btn btn-primary bt" onClick="change4()">black</button><br>
      			<button class="btn btn-primary bt" onClick="change5()">back</button>
      		</div>
      		<div class="col-md-6">
      			<img src="yel.jpg" id="image1" style="box-shadow: 3px 3px 10px #333; margin-top: 50px;margin-left: 50%;transform: scale(1);" class="img-responsive">
      		</div>
      	</div>
      </div>
      @endsection
</body>
</html>