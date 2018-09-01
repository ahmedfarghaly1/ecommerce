@extends('Dashboardadmin.layout.layout')



@section('head')
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<style>
  .select2-selection__rendered{
    background: rgb(0, 1, 1);
    border: 1px solid rgba(115, 115, 115, 0.48)!important;
    /* color: #fff; */
    float: left;
    width: 100%;
    height: 40px;
    border-radius: 5px;
    /* border: 0; */
    box-shadow: none;
    border: 2px solid #d7d7d7;
    margin-top: 10px;
  }
  .select2-container--default .select2-selection--single{    background-color: 0!important;border: 0!important}
</style>
@endsection







@section('content')
      <section class="content-header"  style="background-color:; " dir="rtl">
      <h1 class="fa fa-dashboard" >
   تعديل بيانات المستخدم 
      
      </h1>
      <ol class="breadcrumb" >
        <li><a href="{{url('adminpanel')}}">الرئيسية</a></li>
        <li class=""><a href="{{url('/adminpanel/user')}}">عرض المستخدمين </a></li>
        
      </ol>
    </section>


      <section class="content" style="background-color:; ">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">

   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

   <form  dir="rtl" role="form" method="POST" action="{{ url('/adminpanel/user/update/').'/'.$user->id }}" enctype="multipart/form-data">

                                           @csrf

<table  id="customers" dir="rtl">
<tr>
<td style="width:50%;">
                          
                                <input  style="width:100%;" id="name" placeholder="الاسم" type="text" class="text2{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                name="name"  value="{{$user->name}}"  required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            
                </td>
                <td style="width:50%;">

                      
                    
                                <input style="width:100%;"  
                                id="email" placeholder="الايميل" 
                                type="email" 
                                class="text2{{ $errors->has('email') ? ' is-invalid' : '' }}" 
                                name="email"  value="{{$user->email}}"  required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        
             </td>
             </tr>
             <tr>
             <td style="width:50%;">

                      
                         
                              <select style="width:100%;"  name="admin" style="width: 40%;margin-bottom: 15px;">
                             <option  selected="" disabled="disabled">دور المستخدم</option>
                             <option value="مدير">مدير</option>
                             <option value="تاجر"> تاجر</option>
                             <option value="محل">محل</option>
                              </select>


            </td>
            <td style="width:50%;">
                     
                      
                          
                                <input  style="width:100%;" id="password"  placeholder="كلمة السر" 
                                type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" 
                                name="password"  value="{{$user->password}}"  required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        
              </td>
              </tr>
              <tr>
              <td style="width:50%;">

                           
                                <input style="width:100%;" id="password-confirm" 
                                placeholder="تاكيد كلمة السر" type="password" class=""
                                 name="password_confirmation"  value="{{$user->password}}"  required>
                          
                   </td>
                   <td style="width:50%;">
                   <div class="col-md-10">
                                اضافه صورة 
                                <input  type="file" name="image" accept='image/*'>
                            </div>
                   </td>
                   </tr>
                   </table>
<br>
                        <div class="form-group row mb-0"  style="margin-left:92%;">
                            <div class="col-md-6 offset-md-4" style="margin-left:1.5%;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('تعديل') }}
                                </button>
                            </div>
                        </div>


                               </form>


</div>
</div>
</div>
</div>

</section>

@endsection

              