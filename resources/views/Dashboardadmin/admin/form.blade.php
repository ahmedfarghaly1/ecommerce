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
   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

   <form  role="form" method="POST" action="{{ url('/adminpanel/user/stor') }}" dir="rtl">

                        @csrf

<table  id="customers">
<tr>
<td style="width:50%;">
                          
                                <input  style="width:100%;" id="name" placeholder="الاسم" type="text" class="text2{{ $errors->has('name') ? ' is-invalid' : '' }}" 
                                name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            
                </td>
                <td style="width:50%;">

                      
                    
                                <input style="width:100%;"  id="email" placeholder="الايميل" type="email" class="text2{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                     
                      
                          
                                <input  style="width:100%;" id="password"  placeholder="كلمة السر" type="password" class="{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        
              </td>
              </tr>
              <tr>
              <td style="width:50%;">

                           
                                <input style="width:100%;" id="password-confirm" placeholder="تاكيد كلمة السر" type="password" class="" name="password_confirmation" required>
                          
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
                        <div class="form-group row mb-0"  style="margin-left:98%;">
                            <div class="col-md-6 offset-md-4" style="margin-left:1.5%;">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('أضافة') }}
                                </button>
                            </div>
                        </div>
              </form>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
