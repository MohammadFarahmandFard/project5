<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>add member</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
        <style>
            h4{
                margin-top: 25px;
            }
        </style>
    </head>
    <body>
        <div class="container" style="margin-top: 20px;">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group"><h4>Enter your name :</h4></div>
                    <div class="form-group"><h4>Enter your lastname :</h4></div>
                    <div class="form-group"><h4>Enter your phonenumber :</h4></div>
                    <div class="form-group"><h4>Enter your age :</h4></div>
                </div>
                <div class="col-md-6">
                    <form method="post" action="/add_info">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="enter your name..." class="form-control" name="name1">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="enter your lastname..." class="form-control" name="lastname1">
                        </div>
                        <div class="form-group">
                        <input type="text" placeholder="enter your phonenumber..." class="form-control" name="number1">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="enter your age..." class="form-control" name="age1">
                        </div>
                        <div class="form-group" style="text-align: center;">
                        <button type="submit" class="btn btn-primary">add</button>
                        </div>
                            
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
