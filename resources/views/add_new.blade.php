<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add News</title>
    </head>
    <body>
          @extends('master')
    @section('content')
    <br><br><br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <form action="/enter_news" method="post">
                        @csrf
                        <div class="form-group">
                            <b>Title :</b>
                            <input type="text" class="form-control" name="title" placeholder="Titr...">
                        </div>
                        <div class="form-group">
                            <b>Enter the article :</b>
                            <textarea class="form-control" cols="20" rows="10" name="article"></textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success" type="submit">add news</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    @endsection
    </body>
</html>
