<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kutubxona</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
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
<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
            <h4 class="header-line">ADMIN LOGIN FORM</h4>
            </div>
        </div>
                
    <!--LOGIN PANEL START-->           
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" >
                    <div class="panel panel-info">
                        <div class="panel-heading">
                        Admin qismga Kirish
                        </div>
                            <div class="panel-body">
                                <form role="form" action="{{ route('login') }}" method="post">
                                    @csrf

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                                        @error('email')
                                                                            <span class="invalid-feedback" role="alert">
                                                                                <strong>{{ $message }}</strong>
                                                                            </span>
                                                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label>Parol:</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Kirish') }}
                                        </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Parolni unutdingizmi?') }}
                                        </a>
                                    @endif
                                </form>
                            </div>
                    </div>
            </div>
        </div> 
    </div>
</div> 
<!---LOGIN PABNEL END-->            
             
 
    
     
@extends('layouts/app')