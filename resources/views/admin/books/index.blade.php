@extends('layouts/admin')
@section('content')
<div class="content-wrapper">
    <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
            <h4 class="header-line">Kitoblar</h4>
            </div>
            <div class="row">
                <div class="col-md-6">
                    @include('admin.alerts.main') 
                </div>
            </div>
        </div>
       <div class="row">
           <div class="col-md-12">
               <!-- Advanced Tables -->
               <div class="panel panel-default">
                   <div class="panel-heading">
                      Kitoblar ro`yhati
                   </div>
                   <div class="panel-body">
                       <div class="table-responsive">
                           <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                               <thead>
                                   <tr>
                                       <th>№</th>
                                       <th>Kitob nomi</th>
                                       <th>Toifasi</th>
                                       <th>Muallifi</th>
                                       <th>ISBN raqami</th>
                                       <th>Amallar</th>
                                   </tr>
                               </thead>
                               <tbody>
                                   @foreach ($books as $book)
                                   <tr class="odd gradeX">
                                       <td class="center">{{$book->id}}</td>
                                       <td class="center" width="200">
                                            <img src="{{asset('storage/'.$book->thumb) }}" width="100" alt="Rasmni yuklashda xatolik">
                                            
                                           <br /><b>{{$book->book_name}}</b></td>
                                       <td class="center">{{$book->cat_id}}</td>
                                       <td class="center">{{$book->author_id}}</td>
                                       <td class="center">{{$book->ISBN_number}}</td>
                                       <td class="center">

                                       <a href="{{route('books.edit', $book->id)}}"><button class="btn btn-primary"><i class="fa fa-edit "></i></button>
                                        <form action="{{route('books.destroy', $book->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="#" onclick="return confirm('Kitobni o`chirmoqchimisiz?');" >  <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                        </form>
                                    </td>
                                   </tr>
                                   @endforeach
                                </tbody>
                           </table>
                       </div>
                       
                   </div>
               </div>
               <!--End Advanced Tables -->
           </div>
       </div>
    </div>
</div>
<!-- CONTENT-WRAPPER SECTION END-->
    
@endsection
