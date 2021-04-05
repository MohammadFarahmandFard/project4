<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>News</title>
        <style>
            a:hover{
                opacity: 0.8;
            }
            
        </style>
    </head>
    <body>
         @extends('master')
    @section('content')
    <br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                @foreach($news as $n)
                <div class="panel panel-info">
                    <div class="panel-heading" dir="rtl">
                        <h3 style="font-family: titr;font-size: 14pt;display: inline;">تیتر : </h3>  <p style="font-family: titr;font-size: 12pt;display: inline;">{{$n->title}}</p>
                    </div>
                    <div class="panel-body" dir="rtl">
                        <p style="font-family: titr;font-size: 12pt;display: inline;"><?php echo substr($n->article,0,50); ?>...</p> &nbsp;
    <a href="/complete/{{$n->id}}" style="font-family: farnaz;
       color: black;text-decoration: none;font-size: 12pt;">ادامه ی مطلب</a>
        
                    </div>
                    
                </div>
                <hr>
                @endforeach
            </div>
             <div class="col-md-3"></div>
        </div>
    </div>
    <br><br><br><br>
    <div class="container" style="text-align: center;">
        {!! $news->render() !!}
    </div>
    @endsection
    </body>
</html>
