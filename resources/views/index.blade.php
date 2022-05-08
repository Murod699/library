<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kutubxona</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="/assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>

<!-- LOGO HEADER END-->


<section class="menu-section">
    <div class="container">
        <div class="row ">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">                        
                      
                        <li><a href="{{route('index')}}">Asosiy</a></li>
                        <li><a href="#">Kirish</a></li>
                        <li><a href="#">Ro`yhatdan o`tish</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section>
@section('content')
<div class="content-wrapper">
<div class="container">
<!--Slider---->
<div class="row">
    <div class="col-md-10 col-sm-8 col-xs-12 col-md-offset-1">
          <div id="carousel-example" class="carousel slide slide-bdr" data-ride="carousel" >
          <div class="carousel-inner">
              <div class="item active">
                  <img src="/assets/img/1.jpg" alt="" />
              </div>
              <div class="item">
                  <img src="/assets/img/2.jpg" alt="" />
              </div>
              <div class="item">
                  <img src="/assets/img/3.jpg" alt="" /> 
              </div>
          </div>
          <!--INDICATORS-->
           <ol class="carousel-indicators">
              <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example" data-slide-to="1"></li>
              <li data-target="#carousel-example" data-slide-to="2"></li>
          </ol>
          <!--PREVIUS-NEXT BUTTONS-->
           <a class="left carousel-control" href="#carousel-example" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#carousel-example" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
</a>
      </div>
    </div>
   </div>
<hr />
<div class="row pad-botm">
    <div class="col-md-12">
        <h4 class="header-line">Foydalanuvchi login formasi</h4>
    </div>
    </div>
     <a name="ulogin"></a>            
    <!--LOGIN PANEL START-->           
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
        <div class="panel panel-info">
        <div class="panel-heading">
     Kirish
    </div>
    <div class="panel-body">
        <form role="form" method="post">
        
            <div class="form-group">
            <label>Email:</label>
            <input class="form-control" type="text" name="emailid" required autocomplete="off" />
            </div>
            <div class="form-group">
            <label>Parol:</label>
            <input class="form-control" type="password" name="password" required autocomplete="off"  />
            <p class="help-block"><a href="user-forgot-password.php">Parolni unutdingizmi?</a></p>
            </div>
            <button type="submit" name="login" class="btn btn-info">Kirish</button> | <a href="signup.php">Ro`yhatdan o`tish</a>
        </form>
    </div>
    </div>
    </div>
    </div>  
    <!---LOGIN PABNEL END-->            
                 
     
        </div>
        </div>
         <!-- CONTENT-WRAPPER SECTION END-->
    
@endsection
@extends('layouts/app')