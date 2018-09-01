@extends('Dashboardadmin.layout.layout')
@section('content')

 <section class="content-header" style="background-color: " dir="rtl" >
     
      <ol class="breadcrumb" style="margin-left:85%;">
        <li><a href="{{url('adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class="active"><a href="{{url('/adminpanel/product')}}">عرض المنتجات
      </ol>
     
    </section>

    <!-- Main content -->
    <section class="content" style="background-color:; ">
      <div class="row">
        <div class="col-xs-12">
         
            <!-- /.box-header -->
            <div class="box-body">
 
      <form action="{{url('/adminpanel/deleteid')}}" method="post">
      {{csrf_field()}}
     
              <table id="example2" class="table table-bordered table-striped dataTable" dir="rtl">

                <thead>
                <tr>
                  <th>  <button type="submit" class="btn btn-primary" > <i class="fa fa-trash"></i></button>
               </th>
               <th >رقم</th>
                  <th> اسم المنتج </th>
                  <th>نوع المنتج</th>
                  <th>السعر</th>
                  <th>الفئة</th>
                  <th> الكمية</th>
                  <th>تاريخ الاضافة</th>
                  <th>التحكم</th>
              
                </tr>
                </thead>
                <tbody>
           
               
                @foreach($product as $userinfo)
                <tr>
                <td> <input type="checkbox" name=delid[] value="{{$userinfo->id}}"></td>
                	<td>{{$userinfo->id}}</td>
                  <td >{{$userinfo->name}}</td>
                  <td >{{$userinfo->type}}</td>
                  <td>{{$userinfo->price}}</td>
                  <td>{{$userinfo->category->category_name}}</td>
                  <td>{{$userinfo->countities}}</td>
                  <td>{{$userinfo->created_at}}</td>
               
                <td>
                	<a href="{{url('/adminpanel/product/'.$userinfo->id.'/edit')}}" class="btn btn-primary"> تعديل </a>
                
                </td>
               
                    </tr>
                    @endforeach
           
                </tbody>
                <tfoot>
            
     

                </tfoot>

              </table>
           </form>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         
          <!-- /.box -->
        </div>
        <!-- /.col -->

      <!-- /.row -->
    </section>
    
     @endsection