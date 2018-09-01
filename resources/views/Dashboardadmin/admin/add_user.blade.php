@extends('Dashboardadmin.layout.layout')



@section('head')
    
    
@endsection

  





@section('content')
      <section class="content-header" style="background-color:; ">
      <h1  class="fa fa-dashboard">
أضافة مستخدم جديد
   
      </h1>
      <ol class="breadcrumb" dir="rtl" style="margin-left:80%;" >
        <li><a href="{{url('adminpanel')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li class=""><a href="{{url('adminpanel/user')}}">التحكم فى المستخدمين  </a></li>
       
      </ol>
    </section>


      <section class="content" style="background-color:; ">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
          
            <!-- /.box-header -->
            <div class="box-body">

            	    
            	        @include('/Dashboardadmin.admin.form')
               
            	  
            </div>
            </div>
          </div> 
         </div>
           
 </section>

@endsection