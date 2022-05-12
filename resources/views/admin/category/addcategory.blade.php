@extends('layouts/admin')
@section('content')

<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Toifa qo`shish</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"">
                <div class="panel panel-info">
                    <div class="panel-heading">
                    Toifa ma`lumotlari
                    </div>
                        <div class="panel-body">
                            <form role="form" action="{{route('category.store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Toifa nomi</label>
                                    <input class="form-control" type="text" name="name" autocomplete="off" required />
                                </div>
                                <div class="form-group">
                                        <label>Holati</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="status" id="status" value="1" checked="checked">Faol
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                        <input type="radio" name="status" id="status" value="0">Bloklangan
                                        </label>
                                    </div>

                                </div>
                                <button type="submit" name="create" class="btn btn-info">Yaratish </button>
                            </form>
                        </div>
                </div>
            </div>

        </div>

    </div>
</div>
<!-- CONTENT-WRAPPER SECTION END-->
@endsection