<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Enter your book</title>

</head>

<body>
 @extends('master')
    @section('content')
    <br>    <br>
    <br>

<div class="container">
	<div class="row">
	<div class="col-md-6">
             @if(Session::get('success'))
                <div class="alert alert-success">
                    <b style="font-family: titr">با موفقیت وارد شد</b>
                </div>
                @endif
                @if(count($errors))
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <li>{{$error}}</li><br>
                    @endforeach
                </div>
                @endif
		<form action="/save_book" method="post">
		@csrf
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Enter book name...." name="name1">
		</div>
			<div class="form-group">
				<input class="form-control" type="text" name="author1" placeholder="Enter book author....">
			</div>
			<div class="form-group">
				<input class="form-control" type="date" name="year">
			</div>
			<div class="form-group" style="text-align: center;font-family: titr;">
			<button class="btn btn-primary" type="submit">افزودن</button>
			</div>
		</form>
		</div>
	</div>
</div>
@endsection
</body>
</html>