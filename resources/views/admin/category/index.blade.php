@extends('layouts/admin')
@section('content')
<!-- MENU SECTION END-->
<div class="content-wrapper">
    <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                <h4 class="header-line">Toifalarni boshqarish</h4>
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
                      Toifalar ro`yhati
                   </div>
                   <div class="panel-body">
                       <div class="table-responsive">
                           <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                               <thead>
                                   <tr>
                                       <th>№</th>
                                       <th>Toifa nomi</th>
                                       <th>Holati</th>
                                       <th>Yaratilgan vaqti</th>
                                       <th>Yangilangan vaqti</th>
                                       <th>Amallar</th>
                                   </tr>
                               </thead>
                                <tbody>
                                  @foreach ($types as $type)
                                   <tr class="odd gradeX">
                                       <td class="center">{{$type->id}}</td>
                                       <td class="center">{{$type->name}}</td>
                                       <td class="center">
                                            @if ($type->status==1)
                                                <a href="#" class="btn btn-success btn-xs">Faol</a>
                                                @else
                                                <a href="#" class="btn btn-danger btn-xs">Bloklangan</a>
                                            @endif
                                        </td>
                                       <td class="center">{{$type->created_at}}</td>
                                       <td class="center">{{$type->updated_at}}</td>
                                        <td class="center">
                                            
                                            <a href="{{route('category.edit', $type->id)}}"><button class="btn btn-primary"><i class="fa fa-edit "></i></button> 
                                            <form action="{{route('category.destroy', $type->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                            <a href="#" onclick="return confirm('Toifani o`chirmoqchimisiz?');" >  <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
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