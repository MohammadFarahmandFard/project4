<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Comment</title>
    </head>
    <body>
         @extends('master')
    @section('content')
    <br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @if(Session::get('success'))
                <div class="alert alert-success">
                    <h3 style="font-family: koodak;">نظر شما با موفقیت ثبت شد</h3>
                </div>
                @endif
                <form method="post" action="/sen_com" style="font-family: koodak;">
                    @csrf
                    <div class="form-group">
                        <textarea col="10" rows="8" placeholder="نظر خود را وارد کنید ..." class="form-control" dir="rtl" name="article1"></textarea>
                    </div>
                    <div class="form-group" style="text-align: center;">
                        <button type="submit" class="btn btn-success">ثبت نظر</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                @foreach($com as $c)
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        {{$c->user->name}}
                    </div>
                    <div class="panel-body">
                        {{$c->article}}
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endsection
    </body>
</html>
