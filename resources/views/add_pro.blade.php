<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>اضافه کردن محصولات</title>
        <style>
            ::placeholder{
                font-family: koodak;
            }
            b{
                font-size: 15pt;
            }
            .form-control{
                border-radius:0px;
            }
        </style>
    </head>
    <body>
           @extends('master')
    @section('content')
      
    <br><br><br><br><br><br>
        <div class="container">
        <div class="row">
            <div class="col-md-2">
                
            </div>
            <div class="col-md-8" dir="rtl">
                @if(Session::get('success'))
                <div class="alert alert-success">
                    <h2 style="font-family: koodak;">با موفقیت ثبت شد</h2>
                </div>
                @endif
                @if(count($errors))
                <div class="alert alert-warning">
                    @foreach($errors->all() as $e)
                    <h2 style="font-family: koodak;">{{$e}}</h2>
                    @endforeach
                </div>
                @endif
                <form method="post" action="/send_pro" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <b style="font-family: koodak;">نام محصول : </b>
                        <input type="text" class="form-control" name="name" placeholder="نام محصول را وارد کنید ...">
                    </div>
                    <div class="form-group">
                        <b style="font-family: koodak;">قیمت محصول : </b>
                        <input type="text" class="form-control" name="price" placeholder="قیمت محصول را وارد کنید ...">
                    </div>
                    <div class="form-group">
                        <b style="font-family: koodak;">قیمت با تخفیف : </b>
                        <input type="text" class="form-control" name="old_price" placeholder="قیمت محصول با تخفیف ...">
                    </div>
                    <div class="form-group">
                        <b style="font-family: koodak;">تعداد موجود : </b>
                        <input type="text" class="form-control" name="nop" style="width: 50%;">
                    </div>
                    <div class="form-group">
                        <b style="font-family: koodak;">عکس محصول را وارد کنید : </b>
                        <input type="file" name="image"  style="width: 50%;">
                    </div>
                    <div class="form-group" style="text-align: center;">
                        <button type="submit" class="btn btn-success">add</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2">
                
            </div>
        </div>
    </div>
    @endsection
    </body>
</html>
