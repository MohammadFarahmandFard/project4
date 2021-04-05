<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script>
	window.onscroll = function() {scrollFunction()};
	 function scrollFunction() {
		if(document.documentElement.scrollTop>20||document.body.scrollTop>20)
			{
				
				
				document.getElementById('header').style.fontSize='25pt';
				document.getElementById('cadr').style.padding='30px 10px';
			}
		else{
			
				
				document.getElementById('header').style.fontSize='35pt';
			    document.getElementById('cadr').style.padding='60px 10px';
		}
                var t=document.getElementById('pm');
                t.style.backgroundColor='#ffc';
	}
	</script>
        <style>
            .list-group-item:hover{
                background-color: #ffc;
            }
            .list-group-item a:hover{
                text-decoration: none;
            }
        </style>
        <title>پنل مدیریت</title>
    </head>
    <body>
        @extends('master')
    @section('content')
      
    <br><br><br><br><br><br>
    
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @if(auth()->user()->isAdmin==1)
                <ul class="list-group" style="text-align: center;">
                    <li class="list-group-item"><a href="/add_new">اضافه کردن اخبار</a></li>
                    <li class="list-group-item"><a href="/add_pro">اضافه کردن محصولات</a></li>
                    <li class="list-group-item"><a href="/book">افزودن کتاب</a></li>
                    <li class="list-group-item"><a href="/book_show">نمایش کتاب ها</a></li>
                    <li class="list-group-item"><a href="/logout">خروج</a></li>
                </ul>
                @endif
                @if(auth()->user()->isAdmin==null)
                <div class="container">
                    <div class="col-md-3"></div>
                    <div class="col-md-6" style="text-align: center;">
                <h1 style="font-family: nasim;color: blue;">پنل مدیریت!</h1>
                <h2 style="margin-top: 50px;">شما به قسمت مدیریت دسترسی  ندارید</h2>
                <br><br>
                <li class="list-group-item"><a href="/book_show" style="font-size: 15pt;">نمایش کتاب ها</a></li>
                <li class="list-group-item"><a href="/logout" style="font-size: 15pt;">خروج</a></li>
                </div>
                    <div class="col-md-3"></div>
                </div>
                @endif
            </div>
        </div>
    </div>
    @endsection
    </body>
</html>
