<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>book show</title>
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
	</style>
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
	}
	</script>
</head>

<body>
 
   
    
    <div  style="text-align: center;background-color: #0200FF;color: #fff;width: 100%;position: fixed;transition: 0.3s;padding: 60px 10px;z-index: 1;" id="cadr">
    	<p id="header" style="font-size: 35pt;">Book Show</p>
    	
    </div>
    <br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
    <div class="container">
    	<div class="row">
    		<div class="col-md-4"></div>
    		<div class="col-md-4">
    			<table class="table table-hover table-bordered" style="text-align: center;font-family: titr;">
    			@foreach($books as $a)
    				<tr>
    					<td>{{$a->name}}</td>
    					<td>{{$a->author}}</td>
    					<td>{{$a->yearofedit}}</td>
                                        <td><a href="/delete/{{$a->id}}"><span class="glyphicon glyphicon-trash"></span></a></td>
                                        <td><a  href="/update1/{{$a->id}}"><span class="glyphicon glyphicon-edit"></span></a></td>
    				</tr>
    				@endforeach
    			</table>
    		</div>
    		<div class="col-md-4"></div>
    	</div>
    </div>
    <br><br><br><br><br><br>
    
</body>
</html>