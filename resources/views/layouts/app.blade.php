<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
{!!Html::style('website/css/bootstrap.min.css')!!}
{!!Html::style('website/css/flexslider.css')!!}
{!!Html::style('website/css/style.css')!!}
{!!Html::style('website/css/font-awesome.min.css')!!}
{!!Html::script('website/js/jquery.min.js')!!}





<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>

<title>
     موقع عقارات 
     |
      @yield('title')
</title>
</head>
<body style="direction: rtl">
<div class="header">
    <div class="container"> <a class="navbar-brand"style="
    font-size: 32px;
    font-weight: 700;
    color: #444;
    letter-spacing: -1px;
    padding: 5px;
    float: right;
" href="{{url('/')}}"><i class="fa fa-paper-plane"></i> ONE</a>
    <div class="menu pull-left"> <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
      <ul class="nav" id="nav">
        <li class="current"><a href="{{url('/home')}}">الرئيسية</a></li>
        <li><a href="about.html">من نحن</a></li>
        <li><a href="services.html">الخدمات</a></li>
        <li><a href="contact.html">تواصل معنا </a></li>
            @if(Auth::guest())
                            <li><a class="nav-link" href="{{ url('/login') }}">تسجيل الدخول</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('تسجيل عضو') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('تسجيل الخروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endif
        <div class="clear"></div>
      </ul>
    
    </div>
  </div>
   </div>
@yield('content')

{!!Html::script('website/js/responsive-nav.js')!!}
{!!Html::script('website/js/bootstrap.min.js')!!}
{!!Html::script('website/js/jquery.flexslider.js')!!}
<div class="footer">
  <div class="footer_bottom">
    <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
    <div class="copy">
      <p>Copyright &copy; 2015 Company Name. Design by <a href="http://www.templategarden.com" rel="nofollow">TemplateGarden</a></p>
    </div>
  </div>
</div>
</body>

@yield('footer')
</html>
