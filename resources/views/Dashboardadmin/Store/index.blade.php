@extends('Dashboardadmin.layout.layout')



@section('title')

data table

@endsection

@section('head')

  {!!Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')!!}
@endsection



@section('content')

 <section class="content-header" style="background-color: " >
      <form  role="form" method="POST" action="{{url('/adminpanel/StoreProduct/search')}}" enctype="multipart/form-data">
    
    {{csrf_field()}}

           <div style="margin-left:1%;">
           <input type="text" placeholder="بحث.." name="s">
          <button type="submit" style="background-color:#dbc65d;"><i class="fa fa-search" ></i></button>
          </div>
      </form>


     
      <ol class="breadcrumb" style="margin-left:85%;">
        <li><a href="{{url('adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active"><a href="{{url('/adminpanel/StoreProduct/create')}}"> أضافة منتج
      </ol>
     
    </section>

    <!-- Main content -->
    <section class="content" style="background-color:; ">
      <div class="row">
        <div class="col-xs-12">
          
        <div class="box">
            <div class="box-header">
            <!-- /.box-header -->
            <div class="box-body">
              <!-- search form -->
     
      <!-- /.search form -->
      <form action="{{url('/adminpanel/deleteid')}}" method="post">
      {{csrf_field()}}
         <table id="example2" class="table table-bordered table-striped dataTable" dir="rtl">

                <thead>
                <tr >
                  <th>   <button type="submit" class="btn btn-primary" >  <i class="fa fa-trash"></i></button>
               </th>
               <th >رقم</th>
                  <th> اسم المنتج </th>
                  <th>نوع المنتج</th>
                  <th>السعر</th>
                  <th>الفئة</th>
                  <th> المقاس</th>
                  <th>تاريخ الاضافة</th>
                  <th>التحكم</th>
              
                </tr>
                </thead>
                <tbody>
           
               
                @foreach($storeproduct as $userinfo)
                <tr>
                <td> <input type="checkbox" name=delid[] value="{{$userinfo->id}}"></td>
                	<td>{{$userinfo->id}}</td>
                  <td >{{$userinfo->name}}</td>
                  <td >{{$userinfo->type}}</td>
                  <td>{{$userinfo->price}}</td>
                  <td>{{$userinfo->category->category_name}}</td>
                  <td>{{$userinfo->size}}</td>
                  <td>{{$userinfo->created_at}}</td>
               
                <td>
                	<a href="{{url('/adminpanel/StoreProduct/'.$userinfo->id.'/edit')}}" class="btn btn-primary"> تعديل </a>
                
                </td>
               
                    </tr>
                    @endforeach
           
                </tbody>
                <tfoot >
                <div style="margin-left:81%;">
                {{ $storeproduct->links() }}
     
                </div>
                </tfoot>

              </table>
            
              </form>
           
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

             </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

      <!-- /.row -->
    </section>
    
     @endsection

  

@section('footer')

{!!Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')!!}
 {!!Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')!!}

@endsection