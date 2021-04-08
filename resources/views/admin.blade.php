<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>عضویت</title>
        <style>
             #header{
                width: 100%;height: 200px;background-color: #00ffff;
                box-shadow: 3px 3px 7px #333;text-align: center;position:absolute;top:0px;
                
            }
            ul li a{
                float: right;
                margin-right: 20px;
                text-decoration: none;
                font-size: 15pt;
            }
            ul{
                list-style-type: none;
            }
        </style>
    </head>
    <body>
        <div id="header">
            <h2>به صفحه ی مدیریت خوش آمدید</h2>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br>
        <br>
        @if(auth()->user()->isAdmin=="yes")
        <ul>
            <li><a href="/add">Add product</a></li>
            <li><a href="/show_product">See product</a></li>
            <li><a href="/del">delete products</a></li>
            <li><a href="/logout">logout</a></li>
            
        </ul>
        @endif
        
        
        @if(auth()->user()->isAdmin==null)
        <div class="form-group" style="text-align: center;">
        <h2>شما نمی توانید کسی رااضافه کنید</h2>
        
        <a href="/logout" style="text-decoration: none;font-size: 20pt;">logout</a>
        
        </div>
        @endif
    </body>
</html>
