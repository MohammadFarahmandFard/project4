<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>صفحه ی اصلی</title>
<script src="jquery.js"></script>
<script src="https://unpkg.com/react@16/umd/react.production.min.js"></script>
  <script src="https://unpkg.com/react-dom@16/umd/react-dom.production.min.js"></script>
  <script src="https://unpkg.com/babel-standalone@6.15.0/babel.min.js"></script>
 <script>
	$(document).ready(function(){
		$("#btn1").click(function(){
			$("#r0").css('display','none');
			$("#r2").css('display','none');
			$("#r3").css('display','none');
			$("#r1").css('display','');
		})
		
		
		$("#btn2").click(function(){
			
			$("#r0").css('display','none');
			$("#r1").css('display','none');
			$("#r3").css('display','none');
			$("#r2").css('display','');
		})
		
		
		$("#btn3").click(function(){
			
			$("#r0").css('display','none');
			$("#r1").css('display','none');
			$("#r2").css('display','none');
			$("#r3").css('display','');
		})
	})
	
		 window.onscroll = function() {scrollFunction()};
	 function scrollFunction() {
		 if ( document.documentElement.scrollTop <= 5){
			 document.getElementById("up").style.bottom="-55px";
		 }
		 else{
			 document.getElementById("up").style.bottom="30px";
		 }
	 }
	</script>
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
	@-webkit-keyframes pa-oo{
		from{
			transform: translateY(0px);
		}
		to{
			transform: translateY(8px);
		}
	}
	#satr img:hover{
		opacity: 0.8;
		cursor: pointer;
                transform: translateY(9px);
	}
	#satr img{
		box-shadow: 3px 3px 7px #333;
                transition: 0.3s;
	}
	ul li a{
		font-family: tabassom;
		font-size: 20pt;
	}
	li:hover{
		background-color: #4D4D4D;
		
	}
	button{
		font-family: farnaz;
		
	}
	#cars img{
		box-shadow: 3px 3px 7px #333;
	}
	#up:hover{
		
		opacity: 0.8;
                
	
		
	}
	</style>

</head>

<body>
    @extends('master')
    @section('content')
     <span id="top"></span>
      <div style="position: fixed;box-shadow: 3px 3px 6px #333;text-align: center;height: 40px;width: 40px; border-radius: 10px;bottom: -55px;right: 30px;background-color: #26FFFB;transition: 0.7s;" id="up">
<a href="#top" style="transition: 1s;"><span class="glyphicon glyphicon-chevron-up" style="margin-top: 20%;font-size: 15pt;"></span></a>
	
</div>
      
      
        <br><br><br><br>
        <!--شروع اسلاید شو -->
        <div class="container-fluid"> 
        <div class="col-md-2"></div>
        <div class="col-md-8">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="t1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="t2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="t3.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>
        <div class="col-md-2"></div>
</div>
        
        <br>
        <br>
        <br>
    
      <!-- اسلاید شو -->
      
           <div class="container" style="text-align: center;font-family: koodak;">
           	<button type="button" class="btn btn-success" id="btn1">دارای تخفیف</button>&nbsp;&nbsp;&nbsp;
           	<button type="button" class="btn btn-danger" id="btn2">پرفروش ها</button>&nbsp;&nbsp;&nbsp;
           	<button type="button" class="btn btn-primary" id="btn3">جدید ترین ها</button>
           </div>
           <br>
           <br>
           <div class="container" id="cars">
           	<div class="row" id="r0">
           		<div class="col-md-3"><img src="c1.jpg" class="img-responsive img-thumbnail"></div>
           		<div class="col-md-3"><img src="c2.jpg" class="img-responsive img-thumbnail"></div>
           		<div class="col-md-3"><img src="c3.jpg" class="img-responsive img-thumbnail"></div>
           		<div class="col-md-3"><img src="c4.jpg" class="img-responsive img-thumbnail"></div>
           	</div>
           	<div class="row" id="r1" style="display: none;">
           		<div class="col-md-3"><img src="c5.jpg" class="img-responsive img-circle"></div>
           		<div class="col-md-3"><img src="c6.jpg" class="img-responsive img-circle"></div>
           		<div class="col-md-3"><img src="c7.jpg" class="img-responsive img-circle"></div>
           		<div class="col-md-3"><img src="c8.jpg" class="img-responsive img-circle"></div>
           	</div>
           	<div class="row" id="r2" style="display: none;">
           		<div class="col-md-3"><img src="c9.jpg" class="img-responsive img-circle"></div>
           		<div class="col-md-3"><img src="c10.jpg" class="img-responsive img-circle"></div>
           		<div class="col-md-3"><img src="c11.jpg" class="img-responsive img-circle"></div>
           		<div class="col-md-3"><img src="c12.jpg" class="img-responsive img-circle"></div>
           	</div>
           	<div class="row" id="r3" style="display: none;">
           		<div class="col-md-3"><img src="c13.jpg" class="img-responsive img-circle"></div>
           		<div class="col-md-3"><img src="c14.jpg" class="img-responsive img-circle"></div>
           		<div class="col-md-3"><img src="c15.jpg" class="img-responsive img-circle"></div>
           		<div class="col-md-3"><img src="c16.jpg" class="img-responsive img-circle"></div>
           	</div>
           </div>
           
           
           
           <br>
           <br>
           <br>
           
           <div class="container" style="text-align: center;">
         	<h3 style="font-family: koodak;">دپارتمان ها</h3>
         	<hr style="width: 30%;border-color: #FF0004;">
         </div>
           <br>
           
            <div class="container">
            	<div class="row" id="satr">
            		<div class="col-md-4" id="image1"><img src="vnjvjff.jpg" class="img-responsive" style="margin-bottom: 10px;"></div>
            		<div class="col-md-4" id="image2"><img src="egergerger.jpg" class="img-responsive" style="margin-bottom: 10px;"></div>
            		<div class="col-md-4" id="image3"><img src="tablet4.jpg" class="img-responsive"></div>
            	</div>
            </div>
            <br>
            
             <div class="container" style="text-align: center;">
         	<h3 style="font-family: koodak;">اطلاعیه ها</h3>
         	<hr style="width: 30%;border-color: #FF0004;">
         </div>
         
            <div class="container-fluid" style="background-color: #ff00cc;height: 300px;"></div>
         
         
         <div class="container">
         	<div class="row">
         		<div class="col-md-6" style="direction: rtl;">
                            <div style="text-align: center;">	 
         	<h3 style="font-family: koodak;">رویدادها</h3>
         	<hr style="width: 50%;border-color: #FF0004;"><br>
         	
         	<ul style="width: 30%;list-style-image: url('tic1.png');">
         		<li>علمی</li>
         		<li>جنگی</li>
         		<li>طبیعی</li>
         	</ul>
                </div>
         </div>
         		
         		<div class="col-md-6" style="direction: rtl;">
                            <div style="text-align: center;">
         	<h3 style="font-family: koodak;"> اخبار</h3>
         	<hr style="width: 50%;border-color: #FF0004;"><br>
         	
         	<ul style="width: 30%;list-style-image: url('tic1.png');">
         		<li>ورزشی</li>
         		<li>سیاسی</li>
         		<li>فناوری</li>
         	</ul>
                </div>
         </div>
        		</div>
         		</div>
         @endsection
         
       
</body>
</html> 












