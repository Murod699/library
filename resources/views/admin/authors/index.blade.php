@extends('layouts/admin')
@section('content')
<!-- MENU SECTION END-->
<div class="content-wrapper">
    <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                <h4 class="header-line">Mualliflar </h4>
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
                      Mualliflar ro`yhati
                   </div>
                   <div class="panel-body">
                       <div class="table-responsive">
                           <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                               <thead>
                                   <tr>
                                       <th>№</th>
                                       <th>Muallif nomi</th>
                                       <th>Yaratilgan vaqti</th>
                                       <th>Yangilangan vaqti</th>
                                       <th>Amallar</th>
                                   </tr>
                               </thead>
                                <tbody>
                                  @foreach ($authors as $author)
                                   <tr class="odd gradeX">
                                       <td class="center">{{$author->id}}</td>
                                       <td class="center">{{$author->author_name}}</td>
                                       <td class="center">{{$author->created_at}}</td>
                                       <td class="center">{{$author->updated_at}}</td>
                                        <td class="center">
                                            
                                            <a href="{{route('authors.edit', $author->id)}}"><button class="btn btn-primary"><i class="fa fa-edit "></i></button> 
                                            <form action="{{route('authors.destroy', $author->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                            <a href="#" onclick="return confirm('Muallif nomini o`chirmoqchimisiz?');" >  <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
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