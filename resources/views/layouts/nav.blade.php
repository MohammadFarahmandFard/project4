<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Nav</title>
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" type="text/css">
<script src="js1.js"></script>
<script src="js2.js"></script>
<script src="jquery.js"></script>
<script>
	window.onscroll = function() {scrollFunction1()};
	 function scrollFunction1() {
  if ( document.documentElement.scrollTop <= 3) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-55px";
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
                src:url('NasimBold.ttf');
                font-family: nasim;
                src:url('Yekan.ttf');
                font-family: yekan;
                src:url('Kamran.ttf');
                font-family: kami;
                src:url('KoodakBold.ttf');
                font-family: koodak;
            }
	@font-face{
		src: url('leaguegothic-regular-webfont.ttf');
		font-family:league;
		src: url('knewave.ttf');
		font-family:kn;
	}
	li:hover{
		background-color: #4D4D4D;

	}
	ul li a{
		font-family: koodak;
		font-size: 20pt;
                color: black;
	}
        ul li a:active{
            background-color: #cccccc;
        }
        ul{

        }
	</style>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="top:0px;transition: top 0.3s;display: block;" id="navbar">



        <form class="navbar-form navbar-left">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="search..." name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <span class="glyphicon glyphicon-search" style="font-size: 10pt;"></span>
          </button>
        </div>
      </div>
    </form>



        <ul class="nav navbar-nav navbar-right" style="margin-right: 10px;color: black;">
        	<li><a href="/"> صفحه اصلی</a></li>
        	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" >تماس <span class="caret"></span></a>
        	<ul class="dropdown-menu">
        		<li><a href="#">از طریق واتس اپ</a></li>
        		<li><a href="#">از طریق تلگرام</a></li>
        		<li><a href="#">ازطریق اینستاگرام</a></li>
        	</ul>
			</li>

                <li><a href="/register">ثبت نام</a></li>
                @if(!auth()->user())
                <li><a href="/login">ورود</a></li>
                @endif
        	<li><a href="/shop">فروشگاه</a></li>
                @if(auth()->user())
                <li><a href="/com">نظردهی</a></li>
                @endif
        	<li><a href="/news">اخبار</a>
        	<ul class="dropdown-menu" id="list">
        		<li><a href="#">سیاسی</a></li>
        		<li><a href="#">ورزشی</a></li>
        		<li><a href="#">علمی</a></li>
        	</ul>
        	</li>

        	<li><a href="/mob">فروشگاه موبایل</a></li>

                @if(auth()->user())
                <li><a href="/logout">خروج</a></li>
                @endif
                @if(auth()->user())
                <li class="active"><a href="/admin" style="color: white;">Hi <?php echo auth()->user()->name ?></a></li>
                @endif
        </nav>

</body>
</html>
