<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>home page</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/farsi1.css')}}">
        <style>
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
            #header{
                width: 100%;height: 150px;background-color: #00ffff;
                box-shadow: 3px 3px 7px #333;text-align: center;position:absolute;top:0px;

            }
            h2{
                margin-top: 50px;
            }
            ul li a{
                font-size: 25pt;
                font-family: koo;
            }
            ul li a:hover{
                cursor: pointer;
                background-color: #ffffa3;
            }
        </style>
    </head>
    <body>
        <div id="header">
            <h2>Welcome to home page</h2>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br>
        <br>
        <div class="container">
            <div class="row">
                <ul class="nav nav-tabs" dir="rtl">
                    <li><a href="/">خانه</a></li>
                    @if(auth()->user())
                    <li><a>{{auth()->user()->name}}</a></li>
                    @endif
                    
                    <li><a>درباره ما</a></li>
                    
                    @if(auth()->user())
                    <li><a href="/admin">عضویت</a></li>
                    @endif
                    @if(!auth()->user())
                    <li><a href="/register">عضویت</a></li>
                    @endif
                    
                    @if(!auth()->user())
                    <li><a href="/login">ورود</a></li>
                    @endif
                    @if(auth()->user())
                    <li><a href="/admin">ورود</a></li>
                    @endif
                    
                    
                    <li><a>تماس با ما</a></li>
                    <li><a href="/show_pic">نمایش محصولات</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>
