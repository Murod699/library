@php
 use App\Models\Author;
 use App\Models\BooksCategory;
 $author = Author::get();
 $cat = BooksCategory::get();   
@endphp
@extends('layouts/admin')
@section('content')
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
                            <a href="{{route('authors.index')}}">
                                <div class="col-md-3 col-sm-3 col-xs-6">
                                    <div class="alert alert-success back-widget-set text-center">
                                        <i class="fa fa-user fa-5x"></i>
                                        <h3>{{count($author)}}</h3>
                                        Mualliflar ro`yhati
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="row">
                            <a href="{{route('category.index')}}">            
                                <div class="col-md-3 col-sm-3 rscol-xs-6">
                                    <div class="alert alert-info back-widget-set text-center">
                                        <i class="fa fa-file-archive-o fa-5x"></i>
                                        <h3>{{count($cat)}}</h3>
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
@endsection