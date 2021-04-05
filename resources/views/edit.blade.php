<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>ویرایش کتاب</title>
    </head>
    <body>
        @extends('master')
    @section('content')
    <br>    <br>    <br>    <br>

    <br>

<div class="container">
	<div class="row">
	<div class="col-md-6">
            <form action="/update2/{{$book->id}}" method="post">
		@csrf
		<div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter book name...." name="name1" value="{{$book->name}}">
		</div>
			<div class="form-group">
                            <input class="form-control" type="text" name="author1" placeholder="Enter book author...." value="{{$book->author}}">
			</div>
			<div class="form-group">
                            <input class="form-control" type="date" name="year" value="{{$book->yearofedit}}">
			</div>
			<div class="form-group" style="text-align: center;font-family: titr;">
			<button class="btn btn-primary" type="submit">ویرایش</button>
			</div>
		</form>
		</div>
	</div>
</div>
@endsection
    </body>
</html>
