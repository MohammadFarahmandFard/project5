<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title> Delete Products</title>
         <style>
            .pic1{
                height: 350px;
                width: 100%;
                box-shadow: 3px 3px 5px #333;
                position: relative;
                
            }
             @font-face{
                src:url('NasimBold.ttf');
                font-family: nasim;
                src:url('Yekan.ttf');
                font-family: yekan;
                src:url('Kamran.ttf');
                font-family: kami;
                src:url('TitrBold.ttf');
                font-family: titr;
                src:url('KoodakBold.ttf');
                font-family: koo;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
    <body>
         <br><br>
        <div class="container" dir="rtl" style="border: 5px solid #ffcc00;">
            <h1>تلفن همراه</h1>
        </div>
        <br><br><br>
        
        <div class="container">
                @foreach($mobile as $m)
                <div class="col-md-3">
                    <div class="pic1" style="text-align: center;">
                        <img src="mobile/{{$m->image}}" class="img-responsive" style="position: absolute;">
                        
                        <a href="/del_m/{{$m->id}}/{{$m->image}}"><span class="glyphicon glyphicon-trash" style="font-size: 19pt;position: absolute;top: 300px;"></span></a>
                    </div>
                </div>
                @endforeach
        </div>
        
        
        <br><br>
        <div class="container" dir="rtl" style="border: 5px solid #ffcc00;">
            <h1>خودرو ها</h1>
        </div>
        <br><br>
        <div class="container" dir="rtl">
                @foreach($car as $c)
                <div class="col-md-3">
                    <div class="pic1"  style="text-align: center;">
                        <img src="cars/{{$c->image}}" class="img-responsive" style="position: absolute;">
                        <a href="/del_c/{{$c->id}}/{{$c->image}}"><span class="glyphicon glyphicon-trash" style="font-size: 19pt;position: absolute;top: 300px;"></span></a>
                    </div>
                </div>
                @endforeach
        </div>
        <br><br><br><br>
        
    </body>
</html>
