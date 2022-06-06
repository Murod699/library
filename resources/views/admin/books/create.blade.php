@extends('layouts/admin')
@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Kitob qo`shish</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Kitob ma`lumotlari
                    </div>
                    <div class="panel-body">
                        @include('admin.alerts.main')
                        <form role="form" method="post" action="{{route('books.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">   
                                <div class="form-group">
                                <label>Kitob nomi<span style="color:red;">*</span></label>
                                <input class="form-control" type="text" name="book_name" autocomplete="off"  required />
                                </div>
                            </div>

                            <div class="col-md-6">  
                                <div class="form-group">
                                <label>Toifasi<span style="color:red;">*</span></label>
                                <select class="form-control" name="cat_id" required="required">
                                    @foreach ($category_list as $cat)
                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>

                            <div class="col-md-6">  
                                <div class="form-group">
                                <label>Muallifi<span style="color:red;">*</span></label>
                                <select class="form-control" name="author_id" required="required">
                                    @foreach ($authors as $author)
                                     <option value="{{$author->id}}">{{$author->author_name}}</option>
                                    @endforeach
                                </select>
                                </div>
                            </div>

                            <div class="col-md-6">  
                                <div class="form-group">
                                    <label>ISBN raqami<span style="color:red;">*</span></label>
                                    <input class="form-control" type="text" name="ISBN_number" id="isbn" required="required" autocomplete="off" onBlur="checkisbnAvailability()"  />
                                    <p class="help-block">ISBN xalqaro standart kitob raqamidir. ISBN noyob bo'lishi kerak</p>
                                    <span id="isbn-availability-status" style="font-size:12px;"></span>
                                </div>
                            </div>

                            

                            <div class="col-md-6">  
                                <div class="form-group">
                                <label>Kitob rasmi<span style="color:red;">*</span></label>
                                <input class="form-control" type="file" name="book_img" autocomplete="off"   required="required" />
                                </div>
                            </div>
                        <button type="submit" name="add" id="add" class="btn btn-info">Saqlash</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection