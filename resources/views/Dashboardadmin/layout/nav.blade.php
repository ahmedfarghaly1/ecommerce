



        <li  style="font: normal normal normal 17px/1 FontAwesome;margin-left:40%;"><a href="/"></a></li>
        {{-- التاجر--}}
     
         <li class=" treeview" style="font: normal normal normal 17px/1 FontAwesome;margin-left:32%;" >
          <a href="#">
            <i class="fa fa-users pull-right"></i> <span > لوحة تحكم التاجر </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" dir="rtl">
            <li  style="margin-left:10%;" class="active"><a href="{{url('/adminpanel/product/create')}}"><i class="fa fa-circle-o"></i> أضافة منتج جديد</a></li>
            <li><a href="{{url('/adminpanel/product')}}"><i class="fa fa-circle-o"></i> عرض كل المنتجات </a></li>
            
     
           </ul>
        </li>

        {{-- المحل--}}
          <li class=" treeview" style="font: normal normal normal 17px/1 FontAwesome;margin-left:32%;">
          <a href="#">
            <i class="fa fa-users pull-right"></i> <span>لوحة تحكم المحل </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" dir="rtl">
            <li style="margin-left:10%;" class="active"><a href="{{url('/adminpanel/StoreProduct/create')}}"><i class="fa fa-circle-o"></i> أضافة منتج جديد</a></li>
            <li><a href="{{url('/adminpanel/StoreProduct')}}"><i class="fa fa-circle-o"></i>  عرض كل المنتجات </a></li>
            
          </ul>

        </li>
         {{-- الادمن--}}
          <li class=" treeview" style="font: normal normal normal 17px/1 FontAwesome;margin-left:32%;">
          <a href="#">
            <i class="fa fa-users pull-right"></i> <span>لوحة تحكم الادمن </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" dir="rtl">
            <li  style="margin-left:10%;" class="active"><a href="{{url('/adminpanel/user/create')}}"><i class="fa fa-circle-o"></i> أضافة مستخدم </a></li>
           
            <li><a href="{{url('/adminpanel/user')}}"><i class="fa fa-circle-o"></i> عرض المستخدمين </a></li>
         
          </ul>
        