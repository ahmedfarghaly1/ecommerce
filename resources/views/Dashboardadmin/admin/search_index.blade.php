@extends('Dashboardadmin.layout.layout')


@section('title')

   data table

@endsection

@section('head')

     {!!Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')!!}
@endsection







@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header" style="background-color:; ">
    
   
      <form  role="form" method="POST" action="{{url('/adminpanel/user/search')}}" enctype="multipart/form-data">
    
    {{csrf_field()}}

           <div style="margin-left:1%;">
           <input type="text" placeholder="بحث.." name="s">
          <button type="submit" style="background-color:#dbc65d;"><i class="fa fa-search" ></i></button>
          </div>
      </form>

      <ol class="breadcrumb" style="margin-left:85%;"  dir="rtl">
        <li><a href="{{url('adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active"><a href="{{url('adminpanel/user')}}"> عرض المستخدمين 
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="background-color:; ">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
             
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form action="{{url('/adminpanel/deleteid')}}" method="post">
      {{csrf_field()}}

              <table id="example2" class="table table-bordered table-hover" dir="rtl">

                <thead>
                <tr>
                    
                <tr >
                 
               </th>
                  <th><h5 style="margin-left:70%;">رقم</th>
                  <th><h5 style="margin-left:40%;">اسم المستخدم</th>
                  <th><h5 style="margin-left:70%;">الايميل</th>
                  <th><h5 style="margin-left:40%;">دور المستخدم</th>
                  <th><h5 style="margin-left:70%;">تاريخ الاضافة</th>
                  <th ><h5 style="margin-left:80%;">التحكم </h5></th>
                   <th><button type="submit" class="btn btn-primary" style="margin-left:80%;">  <i class="fa fa-trash"></i></button></th> 
                </tr>
                </thead>
                <tbody>
               @foreach($user as $userinfo)
                <tr>
             
                	<td>{{$userinfo->id}}</td>
                  <td>{{$userinfo->name}}</td>
                  <td>{{$userinfo->email}}</td>
                  <td>{{ $userinfo->admin==1 ?'admin':'user'}}</td>
                  <td>{{$userinfo->created_at}}</td>
                 
               
              <td>
                	<a href="{{url('/adminpanel/user/'.$userinfo->id.'/edit')}}" class="btn btn-primary"> تعديل </a>

                </td>
                <td>
                <input type="checkbox" name=delid[] value="{{$userinfo->id}}">
</td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>

              
           
                </tfoot>

              </table>
              </form>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         
          <!-- /.box -->
        </div>
        <!-- /.col -->

      <!-- /.row -->
    </section>
    <!-- /.content -->

@endsection



























  @section('footer')

     {!!Html::script('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')!!}
      {!!Html::script('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')!!}
   
@endsection

