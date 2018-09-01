
<!DOCTYPE html>
<html lang="zxx">
<head>
<!-- Meta-Tags -->



<!-- Custom-Stylesheet-Links -->






<!-- tabs inner slider -->

 {!!Html::style('website/css/style.css')!!}
  {!!Html::style('website/css/owl.carousel.css')!!}


</head>

<div class="container">

    <div class="contact-bottom">
<center>
         <div class="card-body" style=" margin-top: 100px;" >
            <h3 class="col-md-12">Log in</h3>

                    <form method="POST" Action="{{ route('login') }}">
                        @csrf

                        <div class="text2">

                            <div class="col-md-12">
                                <input style="width:40%;" id="email" placeholder="E-mail" type="email" class="text2{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="text2">

                            <div class="col-md-12">
                                     <div class="clear"></div><br>
                                <input style="width:40%;" id="password" placeholder="password" type="password" class="text2{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="text2">
                            <div class="col-md-13 ">
                                <div class="checkbox" style="margin-left:10px;">
                                    <label  >
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('  remember me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="text2">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('forget password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                </center>
    </div>

</div>


<!-- map -->

<!-- //map -->

<div class="footer-w3layouts" style="margin-top: 10%;">

<div class="botttom-nav-agileits">
  <ul>
    <li><a href="{{url('/')}}">Home</a></li>
    <li><a href="#about" class="scroll">About</a></li>
    <li><a href="#blog" class="scroll">Blog</a></li>
    <li><a href="#mail" class="scroll">Contact</a></li>
  </ul>
</div>
        <div class="container">
        <div class="agile-copy">
          <p>© 2017 Real Homes. All rights reserved | Developed by <a href="http://w3layouts.com/"></a></p>
        </div>
          <div class="clearfix"></div>
        </div>
      </div>
<!--/footer -->
<!-- Custom-JavaScript-File-Links -->
<!-- Supportive-JavaScript -->
{!!Html::script('website/js/jquery-2.2.3.min.js')!!}

{!!Html::script('website/js/modernizr-2.6.2.min.js')!!}
{!!Html::script('website/js/classie.js')!!}

{!!Html::script('website/js/demo7.js')!!}
<!-- //menu -->

{!!Html::script('website/js/JiSlider.js')!!}
    <script>
      $(window).load(function () {
        $('#JiSlider').JiSlider({color: '#fff', start: 3, reverse: true}).addClass('ff')
      })
    </script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- menu -->
<!-- for-Map -->
    <script type="text/javascript">
      $(function() {

        var menu_ul = $('.faq > li > ul'),
             menu_a  = $('.faq > li > a');

        menu_ul.hide();

        menu_a.click(function(e) {
          e.preventDefault();
          if(!$(this).hasClass('active')) {
            menu_a.removeClass('active');
            menu_ul.filter(':visible').slideUp('normal');
            $(this).addClass('active').next().stop(true,true).slideDown('normal');
          } else {
            $(this).removeClass('active');
            $(this).next().stop(true,true).slideUp('normal');
          }
        });

      });
    </script>
<!-- //for-Map -->
<!-- flexisel -->
    <script type="text/javascript">
    $(window).load(function() {
      $("#flexiselDemo1").flexisel({
        visibleItems: 4,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: {
          portrait: {
            changePoint:480,
            visibleItems: 1
          },
          landscape: {
            changePoint:640,
            visibleItems:2
          },
          tablet: {
            changePoint:768,
            visibleItems: 2
          }
        }
      });

    });
  </script>

  {!!Html::script('website/js/jquery.flexisel.js')!!}
<!-- //flexisel -->
<!-- gallery-pop-up -->

  {!!Html::script('website/js/lsb.min.js')!!}
  <script>
  $(window).load(function() {
      $.fn.lightspeedBox();
    });
  </script>
<!-- //gallery-pop-up -->

{!!Html::script('website/js/SmoothScroll.min.js')!!}
<!-- responsive-tabs -->

  {!!Html::script('website/js/easy-responsive-tabs.js')!!}
  <script>
    $(document).ready(function () {
    $('#verticalTab').easyResponsiveTabs({
    type: 'vertical',
    width: 'auto',
    fit: true
    });
    });
  </script>
<!-- //responsive-tabs -->
<!-- for-Tabs-section-inner-slider -->

 {!!Html::script('website/js/responsiveslides.min.js')!!}
             <script>
            // You can also use "$(window).load(function() {"
            $(function () {
              // Slideshow 4
              $("#slider4").responsiveSlides({
              auto: true,
              pager: false,
              nav: true,
              speed: 500,
              namespace: "callbacks",
              before: function () {
                $('.events').append("<li>before event fired.</li>");
              },
              after: function () {
                $('.events').append("<li>after event fired.</li>");
              }
              });

            });
            </script>

    <!-- //for-Tabs-section-inner-slider -->
<!-- smooth scrolling -->
  <script type="text/javascript">
    $(document).ready(function() {
    /*
      var defaults = {
      containerID: 'toTop', // fading element id
      containerHoverID: 'toTopHover', // fading element hover id
      scrollSpeed: 1200,
      easingType: 'linear'
      };
    */
    $().UItoTop({ easingType: 'easeOutQuart' });
    });
  </script>
  <a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
  <!-- start-smoth-scrolling -->

  {!!Html::script('website/js/move-top.js')!!}

  {!!Html::script('website/js/easing.js')!!}
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".scroll").click(function(event){
      event.preventDefault();
      $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
    });
  });
</script>
<!-- start-smoth-scrolling -->
<!-- required-js-files-->

              {!!Html::script('website/js/owl.carousel.js')!!}

                      <script>
                  $(document).ready(function() {
                    $("#owl-demo").owlCarousel({
                      items :3,
                  itemsDesktop : [768,2],
                  itemsDesktopSmall : [414,1],
                      lazyLoad : true,
                      autoPlay : true,
                      navigation :true,

                      navigationText :  false,
                      pagination : true,

                    });

                  });
                  </script>
                 <!--//required-js-files-->
<!-- Necessary-JS-File-For-Bootstrap -->
{!!Html::script('website/js/bootstrap-3.1.1.min.js')!!}

<!-- //Custom-JavaScript-File-Links -->
</body>
</html>
