<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Kutubxona admin qismiga xush kelibsiz!</title>
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
      <!------MENU SECTION START-->
<div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                

            </div>

            <div class="right-div">
                <a class="btn btn-danger pull-right" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Chiqish
                </a>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="{{route('dashboard')}}" class="menu-top-active">Asosiy</a></li>
                           
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Toifalar <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add-category.php">Toifa qo`shish</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-categories.php">Toifalarni boshqarish</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Mualliflar <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add-author.php">Muallif qo`shish</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-authors.php">Mualliflarni boshqarish</a></li>
                                </ul>
                            </li>
 <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Kitoblar <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="add-book.php">Kitob qo`shish</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-books.php">Kitoblarni boshqarish</a></li>
                                </ul>
                            </li>

                           <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown"> Kitoblar nashri <i class="fa fa-angle-down"></i></a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="issue-book.php">Yangi nashr qo`shish</a></li>
                                     <li role="presentation"><a role="menuitem" tabindex="-1" href="manage-issued-books.php">Nashrlarni boshqarish</a></li>
                                </ul>
                            </li>
                             <li><a href="reg-students.php">Foydalanuvchilar</a></li>
                    
  <li><a href="change-password.php">Parolni o`zgartirish</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- MENU SECTION END-->
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Admin asosiy</h4>
                
                            </div>

        </div>
             
            <div class="row">
                <a href="manage-books.php">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="alert alert-success back-widget-set text-center">
                            <i class="fa fa-book fa-5x"></i>
                            <h3>9</h3>
                            Kitoblar ro`yhati
                        </div>
                    </div>
                </a>
                <a href="manage-issued-books.php">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="alert alert-warning back-widget-set text-center">
                            <i class="fa fa-recycle fa-5x"></i>

                            <h3>2</h3>
                          Qaytarilmagan kitoblar
                        </div>
                    </div>
                </a>
                <a href="reg-students.php">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                      <div class="alert alert-danger back-widget-set text-center">
                            <i class="fa fa-users fa-5x"></i>
                                                        <h3>6</h3>
                            Foydalanuvchilar
                        </div>
                    </div>
                </a>
                <a href="manage-authors.php">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <div class="alert alert-success back-widget-set text-center">
                            <i class="fa fa-user fa-5x"></i>
                            <h3>11</h3>
                            Mualliflar ro`yhati
                        </div>
                    </div>
                </a>
            </div>
            <div class="row">
                <a href="manage-categories.php">            
                    <div class="col-md-3 col-sm-3 rscol-xs-6">
                        <div class="alert alert-info back-widget-set text-center">
                            <i class="fa fa-file-archive-o fa-5x"></i>

                            <h3>6 </h3>
                        Toifalar ro`yhati
                        </div>
                    </div>
                </a>
            </div>             
            
    </div>
    </div>


    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Boshqaruvdan chiqasizmi?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Agar tizimdan chiqishni hohlasangiz "Ha" tugmasini bosing.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Bekor</button>
                    <form method="POST" action="{{route('logout')}}">
                        @csrf
                        <button type="submit" class="btn btn-primary">Ha</button>
                    </form>
                </div>
            </div>
        </div>
    </div>      
@extends('layouts/app')
