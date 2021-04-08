<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add Picture</title>
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css"
    </head>
    <body>
         <div class="container">
             <div class="row" dir="rtl">
            <div class="col-md-2">
                
            </div>
            <h1>برای موبایل ها</h1>
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
                <br><br><br><br><br><br>
                <form method="post" action="/send_mobile" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <b style="font-family: koodak;font-size: 15pt;">نام محصول : </b>
                        <input type="text" name="name"  style="width: 50%;" class="form-control">
                    </div>
                    <div class="form-group">
                        <b style="font-family: koodak;font-size: 15pt;">قیمت محصول: </b>
                        <input type="text" name="price"  style="width: 50%;" class="form-control">
                    </div>
                    <div class="form-group">
                        <b style="font-family: koodak;font-size: 15pt;">تعداد موجود : </b>
                        <input type="number" name="number"  style="width: 50%;" class="form-control">
                    </div>
                    
                    
                    <div class="form-group">
                        <b style="font-family: koodak;font-size: 15pt;">عکس محصول را وارد کنید : </b>
                        <input type="file" name="image"  style="width: 50%;">
                    </div>
                    <div class="form-group" style="text-align: center;">
                        <button type="submit" class="btn btn-success">add mobile</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2">
                
            </div>
        </div>
    </div>
        <hr style="border-color: #ff0033;width: 90%;">
       <!-- خودرو -->
        
         <div class="container">
        <div class="row" dir="rtl">
            <div class="col-md-2">
                
            </div>
            <h1>برای خودرو ها</h1>
            <div class="col-md-8" dir="rtl">
               
         
                
                
                <br><br><br><br><br><br>
                <form method="post" action="/send_car" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <b style="font-family: koodak;font-size: 15pt;">نام محصول : </b>
                        <input type="text" name="name"  style="width: 50%;" class="form-control">
                    </div>
                    <div class="form-group">
                        <b style="font-family: koodak;font-size: 15pt;">قیمت محصول: </b>
                        <input type="text" name="price"  style="width: 50%;" class="form-control">
                    </div>
                    <div class="form-group">
                        <b style="font-family: koodak;font-size: 15pt;">تعداد موجود : </b>
                        <input type="number" name="number"  style="width: 50%;" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <b style="font-family: koodak;font-size: 15pt;">عکس محصول را وارد کنید : </b>
                        <input type="file" name="image"  style="width: 50%;">
                    </div>
                    <div class="form-group" style="text-align: center;">
                        <button type="submit" class="btn btn-success">add car</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2">
                
            </div>
        </div>
    </div>
    </body>
</html>
