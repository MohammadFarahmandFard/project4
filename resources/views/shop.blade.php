<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فروشگاه</title>
<link rel="stylesheet" href="css1/bootstrap.css">
<style>
    #cadr1{
        border-radius: 5px;
        box-shadow: 4px 4px 7px #333;
        text-align: center;
        
    }
    #cadr1 h6{
        font-family: koodak;
        font-size: 10pt;
    }
	p{
		font-size: 9pt;
	}
	.cadr:hover img{
		
		transition: 0.1s ease-in;
		transform: scale(1.1);
	}
	.cadr:hover{
		cursor: pointer;
	}
	</style>
</head>

<body>
       @extends('master')
    @section('content')<br><br><br><br><br>
        <div class="container">
        	<div class="row">
        		<div class="col-md-4" style="margin-bottom: 20px;">
        			<div style="text-align: center;box-shadow: 3px 3px 10px #333;width: 300px;height: 400px;" class="cadr">
                                    <img src="tablet 10.jpg" class="img-responsive" style="margin-left: 40px;">
        				<p>Google's Android OS gives you a choice of hardware from several different manufacturers and offers maximum configurability, a top-notch notification system, fast and smooth web browsing, and seamless integration with Google applications like Gmail, Google Maps, and Hangouts for video chat. Android also includes support for multiple user logins so you can share your tablet with a friend or family member.</p>
        			</div>
        		</div>
        		<div class="col-md-4" style="margin-bottom: 20px;">
        			<div style="text-align: center;box-shadow: 3px 3px 10px #333;width: 300px;height: 400px;" class="cadr">
        				<img src="tablet2.jpg" class="img-responsive">
        				<p>Google's Android OS gives you a choice of hardware from several different manufacturers and offers maximum configurability, a top-notch notification system, fast and smooth web browsing, and seamless integration with Google applications like Gmail, Google Maps, and Hangouts for video chat. Android also includes support for multiple user logins so you can share your tablet with a friend or family member, a useful feature that's missing in Apple tablets (despite Apple's Family Sharing, which isn't the same thing).</p>
        			</div>
        		</div>
        		<div class="col-md-4" style="margin-bottom: 20px;">
        			<div style="text-align: center;box-shadow: 3px 3px 10px #333;width: 300px;height: 400px;" class="cadr">
        				<img src="tablet3.jpg" class="img-responsive">
        				<p>Google's Android OS gives you a choice of hardware from several different manufacturers and offers maximum configurability, a top-notch notification system, fast and smooth web browsing, and seamless integration with Google applications like Gmail, Google Maps, and Hangouts for video chat. Android also includes support for multiple user logins so you can share your tablet with a friend or family member, a useful feature that's missing in Apple tablets (despite Apple's Family Sharing, which isn't the same thing).</p>
        			</div>
        		</div>
        	</div>
        	<div class="row">
        		<div class="col-md-4" style="margin-bottom: 20px;">
        			<div style="text-align: center;box-shadow: 3px 3px 10px #333;width: 300px;height: 400px;" class="cadr">
        				<img src="tablet4.jpg" class="img-responsive">
        				<p>Google's Android OS gives you a choice of hardware from several different manufacturers and offers maximum configurability, a top-notch notification system, fast and smooth web browsing, and seamless integration with Google applications like Gmail, Google Maps, and Hangouts for video chat. Android also includes support for multiple user logins so you can share your tablet with a friend or family member, a useful feature that's missing in Apple tablets (despite Apple's Family Sharing, which isn't the same thing).</p>
        			</div>
        		</div>
        		<div class="col-md-4" style="margin-bottom: 20px;">
        			<div style="text-align: center;box-shadow: 3px 3px 10px #333;width: 300px;height: 400px;" class="cadr">
        				<img src="tablet5.jpg" class="img-responsive">
        				<p>Google's Android OS gives you a choice of hardware from several different manufacturers and offers maximum configurability, a top-notch notification system, fast and smooth web browsing, and seamless integration with Google applications like Gmail, Google Maps, and Hangouts for video chat. Android also includes support for multiple user logins so you can share your tablet with a friend or family member.</p>
        			</div>
        		</div>
        		<div class="col-md-4" style="margin-bottom: 20px;">
        			<div style="text-align: center;box-shadow: 3px 3px 10px #333;width: 300px;height: 400px;" class="cadr">
        				<img src="tablet6.jpg" class="img-responsive">
        				<p>Google's Android OS gives you a choice of hardware from several different manufacturers and offers maximum configurability, a top-notch notification system, fast and smooth web browsing, and seamless integration with Google applications like Gmail, Google Maps, and Hangouts for video chat. .</p>
        			</div>
        		</div>
        	</div>
        </div>
    
    <br><br><br><br>
    
    
    <div class="container">
        <div class="row" style="text-align: center;">
            <h1 style="font-family: koodak;color: #cc00ab;">محصولات اضافه شده</h1>
            <hr style="border-color: red;width:50%;"
        </div>
    </div>
    
    <br><br><br><br>
    <div class="container">
        <div class="row">
            @foreach($product as $p)
            <div class="col-md-4" id="cadr1">
                
                    <img src="image/{{$p->image}}" class="img-responsive">
                <h6>نام کالا : {{$p->name}}</h6>
                <h6><del>{{$p->old_price}}</del></h6>
                <h6>قیمت باتخفیف : {{$p->price}}</h6>
                <h6>تعداد محصولات موجود : {{$p->nop}}</h6>
                     
            </div>
            @endforeach
        </div>
        
    </div>
  @endsection      
         		
</body>
</html>