<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>News</title>
    </head>
    <body>
         @extends('master')
    @section('content')
    <br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                
                <div class="panel panel-info" dir="rtl">
                    <div class="panel-heading">
                        Titr : {{$news->title}}
                    </div>
                    <div class="panel-body">
                         {{$news->article}}
                    </div>
                    
                </div>
                <hr>
                
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    @endsection
    </body>
</html>
