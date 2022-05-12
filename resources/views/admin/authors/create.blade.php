@extends('layouts/admin')
@section('content')

    <div class=" content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">Muallif qo`shish</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Muallif haqida
                        </div>
                        <div class="panel-body">
                        <form role="form" action="{{route('authors.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Muallif nomi</label>
                                <input class="form-control" type="text" name="author" autocomplete="off" required>
                            </div>
                            <button type="submit" name="create" class="btn btn-info">Qo`shish</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection