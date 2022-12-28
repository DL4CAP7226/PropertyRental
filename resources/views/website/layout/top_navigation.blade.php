<?php
use App\Models\PropertyType;
$types = PropertyType::all();
?>
<style>
   @import url(https://fonts.googleapis.com/css?family=Lato:400,900,700,300);
.heading4{font-size:18px;font-weight:400;font-family:'Lato', sans-serif;color:#111111;margin:0px 0px 5px 0px;}
.heading1{font-size:30px;line-height:20px;font-family:'Lato', sans-serif;text-transform:uppercase;color:#1b2834;font-weight:900;}
.content-quality{float:left;width:193px;}
.content-quality p{margin-left:10px;font-family:'Open Sans', sans-serif;font-size:14px;font-weight:600;line-height:17px;}
.content-quality p span{display:block;}
.tabtop li a{font-family:'Lato', sans-serif;font-weight:700;color:#1b2834;border-radius:0px;margin-right:22.008px;border:1px solid #ebebeb !important;     margin-left: 22.0008px;}
.tabtop .active a:before{content:"♦";position:absolute;top:15px;left:82px;color:#aaa!important;font-size:30px;
    position: absolute;
    top: 15px;
    left: 50%;
    color: #ffe001;
    font-size: 30px;}
.tabtop li a:hover{color:#e31837 !important;text-decoration:none;}
.tabtop .active a:hover{color:#fff !important;}
.tabtop .active a{    background-color: #aaa !important; color:#FFF !important;}
.margin-tops{margin-top:30px;}
.tabtop li a:last-child{padding:10px 22px;}
.thbada{padding:10px 28px !important;}
section p{font-family:'Lato', sans-serif;}
/*.margin-tops4{margin-top:20px;}*/
.tabsetting{border-top:5px solid #ebebeb;padding-top:6px;}
/*.services{background-color:#d4d4d4;min-height:710px;padding:65px 0 27px 0;}*/
/*.services a:hover{color:#000;}*/
.services h1{margin-top:0px !important;}
.heading-container p{font-family:'Lato', sans-serif;text-align:center;font-size:16px !important;text-transform:uppercase;}
.section-title.section-header.left-text {
    margin-bottom: 15px;
}
ul.nav.nav-tabs.tabtop.tabsetting {
    display: flex;
    justify-content: center;
        background: 0 !important;
        /*background: #ff6237;*/
}
ul.nav.nav-tabs.tabtop.tabsetting li a {
    border-radius: 0px !important;
}
ul.nav.nav-tabs.tabtop.tabsetting li {
    width: 100% !important;
}
.modalDialog {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
      background: #00000096;
    z-index: 99999;
    opacity:0;
    -webkit-transition: opacity 100ms ease-in;
    -moz-transition: opacity 100ms ease-in;
    transition: opacity 100ms ease-in;
    pointer-events: none;
}
.modalDialog:target {
    opacity:1;
    pointer-events: auto;
}
.modalDialog > div {
    max-width: 600px;
    width: 90%;
    position: relative;
    margin: 10px auto;
    padding: 20px;
    border-radius: 3px;
    background: #fff;
}
.close {
    font-family: Arial, Helvetica, sans-serif;
    background: #fff;
    color: #000;
    line-height: 25px;
    position: absolute;
    right: 10px;
    text-align: center;
    top: 10px;
    width: 34px;
    height: 34px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
    padding-top: 5px;
    opacity: 1;
}
.close:hover {
    background: #fa3f6f;
}

ul.list-nav li {
    width: 20% !important;
    float: left;
    padding-left: 12px;
}

ul.list-nav h1{
    font-size: 14px; 
    font-weight: 600;
    color: #303030;
    /* padding-bottom: 8px; */
    margin-top: 16px;
    padding-left: 12px;
}ul.list-nav li a{
    color: #000 !important;
}
.modal-footer span {
    font-size: 15px;
}
@media only screen and (max-width: 480px) {
html, body {
    width: 100%;
    height: 100%;

    margin: 0;
    padding: 0;
}
}







.menu-2 {
    position: relative;
}
.menu-1 {
    position: absolute;
     top: 6px;
}
.header-opt-1 .nav-toggle-menu {
    line-height: 50px;
    background-color: #000000;
    height: 50px;
}
</style>

<section class="header-part">
   <header class="site-header header-opt-1 cate-show">
      <!-- header-top -->
      <div class="header-top">
         <div class="container">
            <!-- nav-left -->
           
            <!-- nav-left -->
            <!-- nav-right -->
            <!--<ul class=" nav-right">-->
                
               <!--<li class="dropdown setting">
                  <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>MB Prime</span> <i aria-hidden="true" class="fa fa-angle-down"></i></a>
                  <div class="dropdown-menu  ">
                     <ul class="account">
                        <li><a href="">Handpicked Agent to assist you</a></li>
                        <li><a href="">First access to owner properties</a></li>
                        <li><a href="">Exclusive partner discounts</a></li>
                     </ul>
                  </div>
               </li>-->
                
               <!-- <li class="dropdown setting" style="float: right; display: flex!important;"> -->
                  <!-- <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle ">
                      <span>
                         @if(Auth::check())
                          <b>Welcome :</b> {{Auth::user()->name}}
                          @else
                           Login
                           @endif
                      </span> <i aria-hidden="true" class="fa fa-angle-down"></i></a>
                  <div class="dropdown-menu" style="" >
                     <ul class="account" type="none">
                         @if(Auth::guard('admin')->check())
                            <li><a href="{{route('admin_dashboard')}}" target="_blank"> 
                                <i class="fa fa-dashboard" aria-hidden="true"></i> My Account</a></li>
                         @elseif(Auth::guard('vendor')->check())
                            <li><a href="{{route('vendor_dashboard')}}" target="_blank">
                               <i class="fa fa-dashboard" aria-hidden="true"></i> My Account</a></li>
                               @elseif(Auth::guard('customer')->check())
                               <li><a href="{{route('customer_dashboard')}}" target="_blank">
                                <i class="fa fa-dashboard" aria-hidden="true"></i> My Account</a></li>
                                @endif
                                
                                @if(Auth::check())
                          <li>
                             <a href="{{ route('customer_logout') }}" 
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="ti-power-off text-primary"></i> Logout </a>
                            <form id="logout-form" action="{{ route('customer_logout') }}" method="POST" class="d-none">
                               @csrf
                            </form>
                          </li>
                          @else
                           <li><a href="{{route('customer_signup')}}">Login/Register </a></li>
                         @endif
                        </ul>
                  </div> -->

                  <!--<li>-->
                  <!-- Button trigger modal -->

                  

<!--                  <button type="button" class="btn btn-primary post-property" style=-->
<!--                  "color: #000;-->
<!--                   background-color: #ffffff;-->
<!--                   border-color: #ffffff;-->
<!--                   border-radius: 25px;-->
<!--                   margin-top: 2px;-->
<!--                   margin-bottom: 4px;-->
<!--                   /* padding-top: 4px; */-->
<!--                   padding-bottom: 4px;-->
<!--                   /* padding-left: 4px; */-->
<!--                   /* width: 20px; */-->
<!--                   margin-left: 4px;-->
<!--                   margin-right: 4px;-->
<!--                   line-height: 0px;" -->
<!--                   data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" >Sign In</button>-->
				   
<!--</li>-->
<!-- <li class="btn-free"><a href="javascript:void()" class="postProperty" >Post Property<span>Free</span> </a></li>-->
<!-- </ul>-->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
      <div class="col-lg-6 col-md-12 ">
            <div class="section-title section-header  left-text">
            <h2>Login / Sign Up Here </h2>
            </div>
        </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          
          
          <section class="home-content-top">

    <div class="row">
    <!--our-quality-shadow-->
    <div class="clearfix"></div>

    <div class="tabbable-panel margin-tops4 ">
      <div class="tabbable-line">
        <ul class="nav nav-tabs tabtop  tabsetting">
          <li class="active"> <a href="#tab_default_1" data-toggle="tab"> Login</a> </li>
          <li> <a href="#tab_default_2" data-toggle="tab"> Sign Up</a> </li>
       
        </ul>
        <div class="tab-content margin-tops">
          <div class="tab-pane active fade in" id="tab_default_1">
           
            <div class="col-md-12">
                <div class="row" >
           <div class="col-md-6">
          
<img src="https://imgs.ipstaticcnt.com/registration/images/signup-bg.jpg" width="100%">
                   
               </div>
          
          
        <div class="col-md-6">
            <a href="#" class="social-icon"><i class="fa fa-google-plus" aria-hidden="true"></i>Continue With Google</a>
                  <a href="#" class="social-icon" style="background: #315e99;"><i class="fa fa-facebook" aria-hidden="true"></i>Continue With Google</a>
            <form id="loginForm" >
                   @csrf
                   <div class="row">
                     <div class="form-group col-sm-12 ">
                          <label class="text-white ">Email <i id="loginemailError" class="text-danger"></i> </label>
                          <input type="email" id="email" name="email" class="form-control" placeholder="Your email" value="">
                     </div>
                   </div>
            
                <div class="row">
                   <div class="form-group col-sm-12">
                      <label class="text-white">Password <i id="loginpasswordError" class="text-danger"></i> </label>
                      <input type="password" id="password" name="password" class="form-control" placeholder="Your password" value="">
                   </div>
                </div>
  <button type="submit" id="login_btn" class="btn btn-success btn-sm" style="width:210px;">Login
               </button>
               </form>
               </div>
            </div>
              </a> </div>
          </div>
          <div class="tab-pane fade" id="tab_default_2">
          
            <div class="col-md-12">
              <div class="row" >
                  
<!--                  <div class="col-md-6">-->
          
<!--<img src="https://imgs.ipstaticcnt.com/registration/images/signup-bg.jpg" width="100%">-->
                   
<!--               </div>-->
        <!-- <div class="col-md-6">
            <form id="loginForm" >
                   @csrf
                   <div class="row">
                     <div class="form-group col-sm-8 ">
                          <label class="text-white">Email <i id="loginemailError" class="text-danger"></i> </label>
                          <input type="email" id="email" name="email" class="form-control" placeholder="Your email" value="">
                     </div>
                   </div>
            
                <div class="row">
                   <div class="form-group col-sm-8">
                      <label class="text-white">Password <i id="loginpasswordError" class="text-danger"></i> </label>
                      <input type="password" id="password" name="password" class="form-control" placeholder="Your password" value="">
                   </div>
                </div>
                   <button type="submit" id="login_btn" class="btn btn-success btn-sm" style="width:210px;">Login
                   <img id="login_load" src="{{asset('public')}}/uploads/default/load.gif"  style="width:17px;float:right;">
                   </button>
                </form>
        </div> -->
        
        <div class="col-md-12">
              <div class="row">
                         <div class="col-sm-6  ">
            <a href="#" class="social-icon"><i class="fa fa-google-plus" aria-hidden="true"></i>Continue With Google</a>
            </div>
               <div class="col-sm-6  ">
            <a href="#" class="social-icon" style="background: #315e99;"><i class="fa fa-facebook" aria-hidden="true"></i>Continue With facebook</a>
              </div>  </div>
            <form id="signupForm" >
                   @csrf
                   <div class="form-group">
                      <label class="text-white">I Am </label>
                      <div class="row">
                         <div class="col-sm-3  form-group">
                            <input type="radio" name="usertype" value="owner" class="" checked >
                            <label class="text-white">Owner</label>
                         </div>
                         <div class="col-sm-3  form-group">
                            <input type="radio" name="usertype" value="builder"  class="" >
                            <label class="text-white">Builder</label>
                         </div>
                         <div class="col-sm-3  form-group">
                            <input type="radio" name="usertype" value="agent"  class="" >
                            <label class="text-white">Agent</label>
                         </div>
                         <div class="col-sm-3  form-group">
                            <input type="radio" name="usertype" value="customer" class="" >
                            <label class="text-white">Customer</label>
                         </div>
                      </div>
                   </div> 
                    <div class="col-sm-6 ">
                   <div class="form-group mb-4">
                      <label class="text-white">Name  <i id="nameError" class="text-danger"></i> </label>
                      <input type="text" id="name" name="name" class="form-control" placeholder="Your name" value="">
                   </div></div>
                   <div class="col-sm-6 ">
                   <div class="form-group mb-4">
                      <label class="text-white">Email <i id="emailError" class="text-danger"></i> </label>
                      <input type="email" id="email" name="email" class="form-control" placeholder="Your email" value="">
                   </div>
                   </div>
                   <div class="col-sm-6 ">
                   <div class="form-group mb-4">
                      <label class="text-white">Mobile No  <i id="mobile_noError" class="text-danger"></i> </label>
                      <input type="number" id="mobile_no" name="mobile_no" class="form-control" placeholder="Your mobile no" onkeypress="if(this.value.length==10) return false;">
                   </div>
                   </div>
                   <div class="col-sm-6 ">
                   <div class="form-group mb-4">
                      <label class="text-white">Create Password <i id="passwordError" class="text-danger"></i> </label>
                      <input type="password" id="password" name="password" class="form-control" placeholder="Your password" value="">
                   </div> </div>
                   <div class="col-sm-6 ">
                   <div class="form-group mb-4">
                      <label class="text-white">Confirm Password <i id="cpasswordError" class="text-danger"></i> </label>
                      <input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="Your Confirm password" value="">
                   </div></div>
                       <div class="col-sm-6 ">
                   <button type="submit" id="signup_btn" class="btn btn-success btn-sm" style="width:210px;">Create Account
                   <img id="signup_load" src="{{asset('public')}}/uploads/default/load.gif"  style="width:17px;float:right;">
                   </button></div>
                </form>
        </div>
    </div>
              </a> </div>
          </div>
       
        
       
        </div>
      </div>
    </div>
    </div>

</section>
<!--home-content-top ends here--> 



<!--      <div class="row" >-->
<!--           <div class="col-md-6">-->
          
<!--<img src="https://imgs.ipstaticcnt.com/registration/images/signup-bg.jpg" width="100%">-->
                   
<!--               </div>-->
          
          
<!--        <div class="col-md-6">-->
<!--            <a href="#" class="social-icon"><i class="fa fa-google-plus" aria-hidden="true"></i>Continue With Google</a>-->
<!--                  <a href="#" class="social-icon" style="background: #315e99;"><i class="fa fa-facebook" aria-hidden="true"></i>Continue With Google</a>-->
<!--            <form id="loginForm" >-->
<!--                   @csrf-->
<!--                   <div class="row">-->
<!--                     <div class="form-group col-sm-12 ">-->
<!--                          <label class="text-white ">Email <i id="loginemailError" class="text-danger"></i> </label>-->
<!--                          <input type="email" id="email" name="email" class="form-control" placeholder="Your email" value="">-->
<!--                     </div>-->
<!--                   </div>-->
            
<!--                <div class="row">-->
<!--                   <div class="form-group col-sm-12">-->
<!--                      <label class="text-white">Password <i id="loginpasswordError" class="text-danger"></i> </label>-->
<!--                      <input type="password" id="password" name="password" class="form-control" placeholder="Your password" value="">-->
<!--                   </div>-->
<!--                </div>-->

                   
<!--               </div>-->
<!--            </div>-->
    <!--        <div class="modal-footer">-->
    <!--         <span style="text-align:left;" ><small style="font-size: 100%;-->
    <!--padding-right: 55px;">Don't have an account. <a  href="signup"> Sign Up</a></small></span> -->
    <!--           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
    <!--           <button type="submit" id="login_btn" class="btn btn-success btn-sm" style="width:210px;">Login-->
    <!--           </button>-->
    <!--        </div>-->
         <!--</form>-->
    </div>
  </div>
</div>
            
                
              
                
        
            <!-- nav-right --> 
         </div>
      </div>
       
      <div class="header-nav mid-header" >
         <div class="container">
            <div class="box-header-nav">
               <!-- btn categori mobile -->
               <span data-action="toggle-nav-cat" class="nav-toggle-menu nav-toggle-cat"><span>Categories</span></span>
               <!-- btn menu mobile -->
               <span data-action="toggle-nav" class="nav-toggle-menu"></span>
			   <div class="menu-2">
			   <div class="menu-1">
			   <a href="home"><img src="{{asset('public')}}/frontend/images/logo.jpg" width="55px" height="40px" alt="logo"></a>
			   
                  <button type="button" class="btn btn-primary post-property" style=
                  "color: #000;
                   background-color: #ffffff;
                   border-color: #ffffff;
                   border-radius: 25px;
                   margin-top: 2px;
                   margin-bottom: 4px;
                   /* padding-top: 4px; */
                   padding-bottom: 4px;
                   /* padding-left: 4px; */
                   /* width: 20px; */
                   margin-left: 4px;
                   margin-right: 4px;
                   line-height: 0px;" 
                   data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo" >Sign In</button></span> <span><a href="javascript:void()" class="postProperty">Post Property<span class="free-s">Free</span> </a></span></span>
				   </div></div>
               <!--categori  -->
               <div class="block-nav-categori">
                  <div class="block-content">
                     <div class="clearfix"><span data-action="close-cat" class="close-cate"><span>Categories</span></span></div>
                     <ul class="ui-categori">
                        <li class="parent">
                           <a href="">
                           <span class="icon"><img src="{{asset('public/frontend')}}/images/icon/index1/nav-cat1.png" alt="nav-cat"></span>
                           Electronics
                           </a>
                           <span class="toggle-submenu"></span>
                           <div class="submenu" style="background-image: url({{asset('public/frontend')}}/images/bgmenu.jpg);">
                              <ul class="categori-list clearfix">
                                 <li class="col-sm-3">
                                    <strong class="title"><a href="">Smartphone</a></strong>
                                    <ul>
                                       <li><a href="">Skirts    </a></li>
                                       <li><a href="">Jackets</a></li>
                                       <li><a href="">Jumpusuits</a></li>
                                       <li><a href="">Scarvest</a></li>
                                       <li><a href="">T-Shirts</a></li>
                                    </ul>
                                 </li>
                                 <li class="col-sm-3">
                                    <strong class="title"><a href="">TElevision</a></strong>
                                    <ul>
                                       <li><a href="">Skirts    </a></li>
                                       <li><a href="">Jackets</a></li>
                                       <li><a href="">Jumpusuits</a></li>
                                       <li><a href="">Scarvest</a></li>
                                       <li><a href="">T-Shirts</a></li>
                                    </ul>
                                 </li>
                                 <li class="col-sm-3">
                                    <strong class="title"><a href="">Camera</a></strong>
                                    <ul>
                                       <li><a href="">Skirts    </a></li>
                                       <li><a href="">Jackets</a></li>
                                       <li><a href="">Jumpusuits</a></li>
                                       <li><a href="">Scarvest</a></li>
                                       <li><a href="">T-Shirts</a></li>
                                    </ul>
                                 </li>
                              </ul>
                              <ul class="categori-list clearfix">
                                 <li class="col-sm-3">
                                    <strong class="title"><a href="">Smartphone</a></strong>
                                    <ul>
                                       <li><a href="">Skirts    </a></li>
                                       <li><a href="">Jackets</a></li>
                                       <li><a href="">Jumpusuits</a></li>
                                       <li><a href="">Scarvest</a></li>
                                       <li><a href="">T-Shirts</a></li>
                                    </ul>
                                 </li>
                                 <li class="col-sm-3">
                                    <strong class="title"><a href="">TElevision</a></strong>
                                    <ul>
                                       <li><a href="">Skirts    </a></li>
                                       <li><a href="">Jackets</a></li>
                                       <li><a href="">Jumpusuits</a></li>
                                       <li><a href="">Scarvest</a></li>
                                       <li><a href="">T-Shirts</a></li>
                                    </ul>
                                 </li>
                                 <li class="col-sm-3">
                                    <strong class="title"><a href="">Camera</a></strong>
                                    <ul>
                                       <li><a href="">Skirts    </a></li>
                                       <li><a href="">Jackets</a></li>
                                       <li><a href="">Jumpusuits</a></li>
                                       <li><a href="">Scarvest</a></li>
                                       <li><a href="">T-Shirts</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li class="parent">
                           <a href="">
                           <span class="icon"><img src="{{asset('public/frontend')}}/images/icon/index1/nav-cat2.png" alt="nav-cat"></span>
                           Sports & Outdoors
                           </a>
                           <span class="toggle-submenu"></span>
                           <div class="submenu">
                              <div class="categori-img">
                                 <a href=""><img src="{{asset('public/frontend')}}/images/categori-img1.jpg" alt="categori-img"></a>
                              </div>
                              <ul class="categori-list">
                                 <li class="col-sm-3">
                                    <strong class="title"><a href="">Smartphone</a></strong>
                                    <ul>
                                       <li><a href="">Skirts    </a></li>
                                       <li><a href="">Jackets</a></li>
                                       <li><a href="">Jumpusuits</a></li>
                                       <li><a href="">Scarvest</a></li>
                                       <li><a href="">T-Shirts</a></li>
                                    </ul>
                                 </li>
                                 <li class="col-sm-3">
                                    <strong class="title"><a href="">TElevision</a></strong>
                                    <ul>
                                       <li><a href="">Skirts    </a></li>
                                       <li><a href="">Jackets</a></li>
                                       <li><a href="">Jumpusuits</a></li>
                                       <li><a href="">Scarvest</a></li>
                                       <li><a href="">T-Shirts</a></li>
                                    </ul>
                                 </li>
                                 <li class="col-sm-3">
                                    <strong class="title"><a href="">Camera</a></strong>
                                    <ul>
                                       <li><a href="">Skirts    </a></li>
                                       <li><a href="">Jackets</a></li>
                                       <li><a href="">Jumpusuits</a></li>
                                       <li><a href="">Scarvest</a></li>
                                       <li><a href="">T-Shirts</a></li>
                                    </ul>
                                 </li>
                                 <li class="col-sm-3">
                                    <strong class="title"><a href="">washing machine</a></strong>
                                    <ul>
                                       <li><a href="">Skirts    </a></li>
                                       <li><a href="">Jackets</a></li>
                                       <li><a href="">Jumpusuits</a></li>
                                       <li><a href="">Scarvest</a></li>
                                       <li><a href="">T-Shirts</a></li>
                                    </ul>
                                 </li>
                              </ul>
                           </div>
                        </li>
                        <li class="parent">
                           <a href="">
                           <span class="icon"><img src="{{asset('public/frontend')}}/images/icon/index1/nav-cat3.png" alt="nav-cat"></span>
                           Smartphone & Tablets
                           </a>
                           <span class="toggle-submenu"></span>
                           <div class="submenu">
                              <strong class="subtitle"><span>special products</span></strong>
                              <div class="owl-carousel" data-nav="true" data-dots="false" data-margin="30" 
                                 data-autoplayTimeout="300" data-autoplay="true" data-loop="true"
                                 data-responsive='{"0":{"items":1},"380":{"items":1},"480":{"items":1},"600":{"items":1}, "992":{"items":4} }'>
                                 <div class="product-item product-item-opt-1">
                                    <div class="product-item-info">
                                       <div class="product-item-photo">
                                          <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/product-menu1.jpg"></a>
                                       </div>
                                       <div class="product-item-detail">
                                          <strong class="product-item-name"><a href="">Asus Ispiron 20</a></strong>
                                          <div class="product-item-price">
                                             <span class="price">$45.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-item product-item-opt-1">
                                    <div class="product-item-info">
                                       <div class="product-item-photo">
                                          <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/product-menu2.jpg"></a>
                                       </div>
                                       <div class="product-item-detail">
                                          <strong class="product-item-name"><a href="">Electronics Ispiron 20 </a></strong>
                                          <div class="product-item-price">
                                             <span class="price">$45.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-item product-item-opt-1">
                                    <div class="product-item-info">
                                       <div class="product-item-photo">
                                          <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/product-menu3.jpg"></a>
                                       </div>
                                       <div class="product-item-detail">
                                          <strong class="product-item-name"><a href="">Samsung Ispiron 20 </a></strong>
                                          <div class="product-item-price">
                                             <span class="price">$45.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-item product-item-opt-1">
                                    <div class="product-item-info">
                                       <div class="product-item-photo">
                                          <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/product-menu4.jpg"></a>
                                       </div>
                                       <div class="product-item-detail">
                                          <strong class="product-item-name"><a href="">Electronics Ispiron 20 </a></strong>
                                          <div class="product-item-price">
                                             <span class="price">$45.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-item product-item-opt-1">
                                    <div class="product-item-info">
                                       <div class="product-item-photo">
                                          <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/product-menu4.jpg"></a>
                                       </div>
                                       <div class="product-item-detail">
                                          <strong class="product-item-name"><a href="">Samsung Ispiron 20 </a></strong>
                                          <div class="product-item-price">
                                             <span class="price">$45.00</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                        <li>
                           <a href="">
                           <span class="icon"><img src="{{asset('public/frontend')}}/images/icon/index1/nav-cat4.png" alt="nav-cat"></span>
                           Health & Beauty
                           </a>
                        </li>
                        <li>
                           <a href="">
                           <span class="icon"><img src="{{asset('public/frontend')}}/images/icon/index1/nav-cat5.png" alt="nav-cat"></span>
                           Bags, Shoes & Accessories
                           </a>
                        </li>
                        <li>
                           <a href="">
                           <span class="icon"><img src="{{asset('public/frontend')}}/images/icon/index1/nav-cat6.png" alt="nav-cat"></span>
                           Toys & Hobbies
                           </a>
                        </li>
                        <li>
                           <a href="">
                           <span class="icon"><img src="{{asset('public/frontend')}}/images/icon/index1/nav-cat7.png" alt="nav-cat"></span>
                           Computers & Networking
                           </a>
                        </li>
                        <li>
                           <a href="">
                           <span class="icon"><img src="{{asset('public/frontend')}}/images/icon/index1/nav-cat8.png" alt="nav-cat"></span>
                           Laptops & Accessories
                           </a>
                        </li>
                        <li>
                           <a href="">
                           <span class="icon"><img src="{{asset('public/frontend')}}/images/icon/index1/nav-cat9.png" alt="nav-cat"></span>
                           Jewelry & Watches
                           </a>
                        </li>
                        <li>
                           <a href="">
                           <span class="icon"><img src="{{asset('public/frontend')}}/images/icon/index1/nav-cat10.png" alt="nav-cat"></span>
                           Flashlights & Lamps
                           </a>
                        </li>
                        <li class="cat-link-orther">
                           <a href="">
                           <span class="icon"><img src="{{asset('public/frontend')}}/images/icon/index1/nav-cat10.png" alt="nav-cat"></span>
                           Flashlights & Lamps
                           </a>
                        </li>
                        <li class="cat-link-orther">
                           <a href="">
                           <span class="icon"><img src="{{asset('public/frontend')}}/images/icon/index1/nav-cat9.png" alt="nav-cat"></span>
                           Cameras & Photo  
                           </a>
                        </li>
                        <li class="cat-link-orther">
                           <a href="">
                           <span class="icon"><img src="{{asset('public/frontend')}}/images/icon/index1/nav-cat10.png" alt="nav-cat"></span>
                           Flashlights & Lamps
                           </a>
                        </li>
                        <li class="cat-link-orther">
                           <a href="">
                           <span class="icon"><img src="{{asset('public/frontend')}}/images/icon/index1/nav-cat9.png" alt="nav-cat"></span>
                           Cameras & Photo  
                           </a>
                        </li>
                     </ul>
                     <div class="view-all-categori">
                        <a  class="open-cate btn-view-all">All Categories</a>
                     </div>
                  </div>
               </div>
               <!--categori  -->
                
               <!-- menu -->
               <div class="block-nav-menu">
                  <div class="clearfix"><span data-action="close-nav" class="close-nav"><span>close</span></span></div>
                  <ul class="ui-menu">
                  <li class="list-logoo" >
                  <span><strong class="logo">
                  <a href="{{route('home')}}"><img src="{{asset('public/frontend')}}/images/logo.jpg" width="55px" height="40px" alt="logo"></a>
                  </strong></span>
               </li>
               <!--<li style=" margin-left: -20px;">-->
               <!--<strong class="title"><a href="{{route('home')}}"><span style="font-size: 20px;"> Nestray </span></a></strong>-->
               <!--</li>-->
               
              
               <li class="parent parent-megamenu">
                      <ul class="nav-left" >
               
               <li class="dropdown switcher  switcher-currency">
                  <a data-toggle="" role="button" href="#openModal-about" class="dropdown-toggle switcher-trigger"> Goa <i aria-hidden="true" class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu switcher-options top-list " style="padding:0px;">
                               
                      <h1>North Goa</h1>
                         <div class="listss" style="padding:0px 0px 0px 50px;">
                               <ul class=" switcher-options top-list ">   
                                  <h1>Taluka</h1>
                                  <div class="listss">
                                        <li class="switcher-option">
                                            <a href="#"> Bicholim </a>
                                        </li> 

                                        <li class="switcher-option">
                                            <a href="#"> Bardez </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Tiswadi </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Pernem </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Sattari </a>
                                        </li>  
                                  </div>

                                   <h1>City</h1>
                                   <div class="listss">
                                        <li class="switcher-option">
                                            <a href="#"> Bicholim </a>
                                        </li> 

                                        <li class="switcher-option">
                                            <a href="#"> Mapusa </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Panaji </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Pernem </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Sanquelim </a>
                                        </li>   
                        
                                   </div>
                               </ul>
                         </div>
                      <h1>South Goa</h1>
                         <div class="listss" style="padding:0px 0px 0px 50px;">
                               <ul class=" switcher-options top-list ">   
                                  <h1>Taluka</h1>
                                  <div class="listss">
                                        <li class="switcher-option">
                                            <a href="#"> Cacacona </a>
                                        </li> 

                                        <li class="switcher-option">
                                            <a href="#"> Salcete </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Quepem </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Mormugao </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Ponda </a>
                                        </li>
                                       <!-- <li class="switcher-option">
                                            <a href="#"> Sanguem </a>
                                        </li> -->
                                  </div>

                                   <h1>City</h1>
                                   <div class="listss">
                                        <li class="switcher-option">
                                            <a href="#"> Cacacona </a>
                                        </li> 

                                        <li class="switcher-option">
                                            <a href="#"> Cuncolim </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Curchorem </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Maragoa </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Vasco </a>
                                        </li>  
                                       
                                       <li class="switcher-option">
                                            <a href="#"> Ponda </a>
                                        </li>
                                       
                                       <li class="switcher-option">
                                            <a href="#"> Quepem </a>
                                        </li>
                                       
                                       <li class="switcher-option">
                                            <a href="#"> Sanguem </a>
                                        </li>
                        
                                   </div>
                               </ul>
                         </div> 
                  </ul>
               </li>
                
            </ul>
                      </li>
                      <!--<li class="parent parent-megamenu">
                        <a href="{{route('home')}}" >Home</a> 
                      </li>-->

                      @foreach($types as $type)
                       <li class="parent parent-megamenu ">
                        <a href="#"> {{$type->name}} </a>
                        <span class="toggle-submenu"></span>
                        <i aria-hidden="true" class="fa fa-angle-down"></i>
                        <div class="megamenu drop-menu">
                           <ul>
                               @foreach($type->category as $category)
                              <li class="col-md-3">
                                 <strong class="title"><a href="#"><span>  {{$category->name}} </span></a></strong>
                                 <ul class="list-submenu"> 
                                     @foreach($category->subcategory as $subcategory)
                                      <li>
                                            <a href="{{route('category',['type'=>$type->slug,'category'=>$category->slug,'subcategory'=>$subcategory->slug])}}">  {{$subcategory->subcategory_name}} </a>
                                     </li> 
                                     @endforeach
                                 </ul> 
                              </li>
                               @endforeach
                              <li class="col-md-3">
                                 <div class="img-categori">
                                    <a href=""><img alt="img" src="{{asset('public/uploads/default').'/'.$type->image}}"></a>
                                 </div>
                              </li>
                           </ul>
                        </div> 
                     </li>
                      @endforeach

                      <li class="parent parent-megamenu">
                        <a href="{{route('propertyServices')}}" >Property Services</a> 
                      </li>

                      <li class="parent parent-megamenu">
                        <a href="{{route('newsAarticles')}}" >News& Articles</a> 
                      </li>

                      <li class="parent parent-megamenu">
                        <a href="{{route('faq')}}" >FAQ</a> 
                      </li>

                      <li class="parent parent-megamenu">
                        <a href="{{route('exploreGoa')}}" >Explore Goa</a> 
                      </li>
                     <li class="parent parent-megamenu">
                        <button type="button" class="btn btn-primary post-property" style="color: #000;
                           background-color: #ffffff;
                           border-color: #ffffff;
                           border-radius: 25px;
                           margin-top: 2px;
                           margin-bottom: 4px;
                           /* padding-top: 4px; */
                           padding-bottom: 4px;
                           /* padding-left: 4px; */
                           /* width: 20px; */
                           margin-left: 4px;
                           margin-right: 4px;
                           line-height: 0px;" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Sign In</button>
                      </li>
                    <!-- <li class="parent parent-megamenu ">
                        <a >Rent-Lease</a>
                        <span class="toggle-submenu"></span>
                        <i aria-hidden="true" class="fa fa-angle-down"></i>
                        <div class="megamenu drop-menu">
                           <ul>
                               
                              <li class="col-md-3">
                                 <strong class="title"><a href=""><span>Women's1 </span></a></strong>
                                 <ul class="list-submenu">
                                    <li><a href="">Shoes</a></li>
                                    <li><a href="">Clothing</a></li>
                                    <li><a href="">Accessories</a></li>
                                    <li><a href="">Sunglasses</a></li>
                                 </ul>
                              </li>
                               
                              <li class="col-md-3">
                                 <strong class="title"><a href=""><span>Women's3 </span></a></strong>
                                 <ul class="list-submenu">
                                    <li><a href="">Shoes</a></li>
                                    <li><a href="">Clothing</a></li>
                                    <li><a href="">Accessories</a></li>
                                    <li><a href="">Sunglasses</a></li>
                                 </ul>
                              </li>
                               
                              <li class="col-md-3">
                                 <strong class="title"><a href=""> <span>Kid's5</span></a></strong>
                                 <ul class="list-submenu">
                                    <li><a href="">Shoes</a></li>
                                    <li><a href="">Clothing</a></li>
                                    <li><a href="">Accessories</a></li>
                                    <li><a href="">Sunglasses</a></li>
                                 </ul>
                              </li>
                               
                              <li class="col-md-3">
                                 <div class="img-categori">
                                    <a href=""><img alt="img" src="{{asset('public/uploads/default/rent.jpg')}}"></a>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </li>-->
                      
                     <!--<li class="parent parent-megamenu">
                        <a >Sell</a>
                        <span class="toggle-submenu"></span>
                        <i aria-hidden="true" class="fa fa-angle-down"></i>
                        <div class="megamenu drop-menu">
                           <ul>
                              <li class="col-md-3">
                                 <strong class="title"><a href=""><span>Women's </span></a></strong>
                                 <ul class="list-submenu">
                                    <li><a href="">Shoes</a></li>
                                    <li><a href="">Clothing</a></li>
                                    <li><a href="">Accessories</a></li>
                                    <li><a href="">Sunglasses</a></li>
                                 </ul>
                                 <strong class="title"><a href=""><span>Women's </span></a></strong>
                                 <ul class="list-submenu">
                                    <li><a href="">Shoes</a></li>
                                    <li><a href="">Clothing</a></li>
                                    <li><a href="">Accessories</a></li>
                                    <li><a href="">Sunglasses</a></li>
                                 </ul>
                              </li>
                              <li class="col-md-3">
                                 <strong class="title"><a href=""><span>Women's </span></a></strong>
                                 <ul class="list-submenu">
                                    <li><a href="">Shoes</a></li>
                                    <li><a href="">Clothing</a></li>
                                    <li><a href="">Accessories</a></li>
                                    <li><a href="">Sunglasses</a></li>
                                 </ul>
                                 <strong class="title"><a href=""><span>Women's </span></a></strong>
                                 <ul class="list-submenu">
                                    <li><a href="">Shoes</a></li>
                                    <li><a href="">Clothing</a></li>
                                    <li><a href="">Accessories</a></li>
                                    <li><a href="">Sunglasses</a></li>
                                 </ul>
                              </li>
                              <li class="col-md-3">
                                 <strong class="title"><a href=""> <span>Kid's</span></a></strong>
                                 <ul class="list-submenu">
                                    <li><a href="">Shoes</a></li>
                                    <li><a href="">Clothing</a></li>
                                    <li><a href="">Accessories</a></li>
                                    <li><a href="">Sunglasses</a></li>
                                 </ul>
                                 <strong class="title"><a href=""><span>Women's </span></a></strong>
                                 <ul class="list-submenu">
                                    <li><a href="">Shoes</a></li>
                                    <li><a href="">Clothing</a></li>
                                    <li><a href="">Accessories</a></li>
                                    <li><a href="">Sunglasses</a></li>
                                 </ul>
                              </li>
                              <li class="col-md-3">
                                 <div class="img-categori">
                                    <a href=""><img alt="img" src="{{asset('public/uploads/default/sell.jpg')}}"></a>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </li>-->
                      
                      
                      <!-- <li class="parent parent-megamenu">
                        <a href="#" >About Us</a> 
                      </li>
                      
                      <li class="parent parent-megamenu">
                        <a href="#" >Contact Us</a> 
                      </li>
                       -->
                     
                      
                  </ul>
               </div>
               <!-- menu -->
               <!-- mini cart -->
               <div class="block-minicart dropdown ">
                  <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                  <span class="cart-icon"></span>
                  </a>
                  <div class="dropdown-menu">
                     <form>
                        <div  class="minicart-content-wrapper" >
                           <div class="subtitle">
                              You have 6 item(s) in your cart
                           </div>
                           <div class="minicart-items-wrapper">
                              <ol class="minicart-items">
                                 <li class="product-item">
                                    <a class="product-item-photo" href="#" title="The Name Product">
                                    <img class="product-image-photo" src="{{asset('public/frontend')}}/images/minicart.jpg" alt="The Name Product">
                                    </a>
                                    <div class="product-item-details">
                                       <strong class="product-item-name">
                                       <a href="#">Donec Ac Tempus</a>
                                       </strong>
                                       <div class="product-item-price">
                                          <span class="price">61,19 €</span>
                                       </div>
                                       <div class="product-item-qty">
                                          <span class="label">Qty: </span ><span class="number">1</span>
                                       </div>
                                       <div class="product-item-actions">
                                          <a class="action delete" href="#" title="Remove item">
                                          <span>Remove</span>
                                          </a>
                                       </div>
                                    </div>
                                 </li>
                                 <li class="product-item">
                                    <a class="product-item-photo" href="#" title="The Name Product">
                                    <img class="product-image-photo" src="{{asset('public/frontend')}}/images/minicart2.jpg" alt="The Name Product">
                                    </a>
                                    <div class="product-item-details">
                                       <strong class="product-item-name">
                                       <a href="#">Donec Ac Tempus</a>
                                       </strong>
                                       <div class="product-item-price">
                                          <span class="price">61,19 €</span>
                                       </div>
                                       <div class="product-item-qty">
                                          <span class="label">Qty: </span ><span class="number">1</span>
                                       </div>
                                       <div class="product-item-actions">
                                          <a class="action delete" href="#" title="Remove item">
                                          <span>Remove</span>
                                          </a>
                                       </div>
                                    </div>
                                 </li>
                              </ol>
                           </div>
                           <div class="subtotal">
                              <span class="label">Total</span>
                              <span class="price">$630</span>
                           </div>
                           <div class="actions">
                              <!-- <a class="btn btn-viewcart" href="">
                                 <span>Shopping bag</span>
                                 </a> -->
                              <button class="btn btn-checkout" type="button" title="Check Out">
                              <span>Checkout</span>
                              </button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <!-- search -->
               <div class="block-search">
                  <div class="block-title">
                     <span>Search</span>
                  </div>
                  <div class="block-content">
                     <div class="form-search">
                        <form>
                           <div class="box-group">
                              <input type="text" class="form-control" placeholder="i'm Searching for...">
                              <button class="btn btn-search" type="button"><span>search</span></button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <!-- search -->
               <!--setting  -->
               <div class="dropdown setting" >
                  <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>Settings</span> <i aria-hidden="true" class="fa fa-user"></i></a>
                  <div class="dropdown-menu  ">
                     <div class="switcher  switcher-language">
                        <strong class="title">Select language</strong>
                        <ul class="switcher-options ">
                           <li class="switcher-option">
                              <a href="#">
                              <img class="switcher-flag" alt="flag" src="{{asset('public/frontend')}}/images/flags/flag_french.png">
                              </a>
                           </li>
                           <li class="switcher-option">
                              <a href="#">
                              <img class="switcher-flag" alt="flag" src="{{asset('public/frontend')}}/images/flags/flag_germany.png">
                              </a>
                           </li>
                           <li class="switcher-option">
                              <a href="#">
                              <img class="switcher-flag" alt="flag" src="{{asset('public/frontend')}}/images/flags/flag_english.png">
                              </a>
                           </li>
                           <li class="switcher-option switcher-active">
                              <a href="#">
                              <img class="switcher-flag" alt="flag" src="{{asset('public/frontend')}}/images/flags/flag_spain.png">
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="switcher  switcher-currency">
                        <strong class="title">SELECT CURRENCIES</strong>
                        <ul class="switcher-options ">
                           <li class="switcher-option">
                              <a href="#">
                              <i class="fa fa-usd" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li class="switcher-option switcher-active">
                              <a href="#">
                              <i class="fa fa-eur" aria-hidden="true"></i>
                              </a>
                           </li>
                           <li class="switcher-option">
                              <a href="#">
                              <i class="fa fa-gbp" aria-hidden="true"></i>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <ul class="account">
                        <li><a href="">My Account</a></li>
                        <li><a href="">Checkout</a></li>
                        <li><a href="{{route('customer_signup')}}">Login/Register</a></li>
                     </ul>
                  </div>
               </div>
               <!--setting  -->
            </div>
         </div>
      </div>
      <!-- header-nav -->
   </header>
   <!-- end HEADER -->        
</section>
<div id="openModal-about" class="modalDialog">
      <div>
         <a href="" title="Close" class="close"><i class="fa fa-times" aria-hidden="true"></i></a>
    <div class="section-title section-header  left-text">
            <h2>Select your City</h2>
            </div>  
       <ul class="list-nav" style="padding: 0px; right: 0px; left: auto; ;">
                               
                      <h1>North Goa</h1>
                         <div class="listss" style="">
                               <ul class=" switcher-options top-list ">   
                                  <h1>Taluka</h1>
                                  <div class="listss">
                                        <li class="switcher-option">
                                            <a href="#"> Bicholim </a>
                                        </li> 

                                        <li class="switcher-option">
                                            <a href="#"> Bardez </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Tiswadi </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Pernem </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Sattari </a>
                                        </li>  
                                  </div>

                                   <h1>City</h1>
                                   <div class="listss">
                                        <li class="switcher-option">
                                            <a href="#"> Bicholim </a>
                                        </li> 

                                        <li class="switcher-option">
                                            <a href="#"> Mapusa </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Panaji </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Pernem </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Sanquelim </a>
                                        </li>   
                        
                                   </div>
                               </ul>
                         </div>
                      <h1>South Goa</h1>
                         <div class="listss" style="">
                               <ul class=" switcher-options top-list ">   
                                  <h1>Taluka</h1>
                                  <div class="listss">
                                        <li class="switcher-option">
                                            <a href="#"> Cacacona </a>
                                        </li> 

                                        <li class="switcher-option">
                                            <a href="#"> Salcete </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Quepem </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Mormugao </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Ponda </a>
                                        </li>
                                       <!-- <li class="switcher-option">
                                            <a href="#"> Sanguem </a>
                                        </li> -->
                                  </div>

                                   <h1>City</h1>
                                   <div class="listss">
                                        <li class="switcher-option">
                                            <a href="#"> Cacacona </a>
                                        </li> 

                                        <li class="switcher-option">
                                            <a href="#"> Cuncolim </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Curchorem </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Maragoa </a>
                                        </li>

                                        <li class="switcher-option">
                                            <a href="#"> Vasco </a>
                                        </li>  
                                       
                                       <li class="switcher-option">
                                            <a href="#"> Ponda </a>
                                        </li>
                                       
                                       <li class="switcher-option">
                                            <a href="#"> Quepem </a>
                                        </li>
                                       
                                       <li class="switcher-option">
                                            <a href="#"> Sanguem </a>
                                        </li>
                        
                                   </div>
                               </ul>
                         </div> 
                  </ul>
       </div> </div>
   </div>


<script>  
$('#signup_load').hide();
  $('#signupForm').on('submit',function(e){
		e.preventDefault();
		 $.ajax({
			        url: "{{route('customer_signup')}}",
				    type: "POST",
				    data:  new FormData(this),
					contentType: false,
		   		    cache: false,
					processData:false,
				    beforeSend : function()
							   {
								   $('#signup_load').show();
                                   $('#signup_btn').prop('disabled', true);
							   },
				    success: function(data) 
					  {
                          //alert(data);
                           $('#signup_load').hide();
						  var res=JSON.parse(data);
                           if(res.err===1)
							{
                                $('#nameError').html(typeof res.msg.name === 'undefined' ? '' : res.msg.name);
                                $('#emailError').html(typeof res.msg.email === 'undefined' ? '' : res.msg.email);
                                $('#mobile_noError').html(typeof res.msg.mobile_no === 'undefined' ? '' : res.msg.mobile_no);
                                $('#passwordError').html(typeof res.msg.password === 'undefined' ? '' : res.msg.password);
                                $('#cpasswordError').html(typeof res.msg.cpassword === 'undefined' ? '' : res.msg.cpassword);
                              
                                $('#signup_btn').prop('disabled', false);
							}
							else
							{
                                $.notify(res.msg, "success");
                                swal("", res.msg , "success");
                                
                                $('.text-danger').html('');
                                
                                $('#signupForm')[0].reset();
                                 $('#signup_btn').prop('disabled', false);
							}
					  }
		      });
	});
</script>




<script>
$('#login_load').hide();
  $('#loginForm').on('submit',function(e){
		e.preventDefault();
		 $.ajax({
			        url: "{{route('login')}}",
				    type: "POST",
				    data:  new FormData(this),
					contentType: false,
		   		    cache: false,
					processData:false,
				    beforeSend : function()
							   {
								   $('#login_load').show();
                                   $('#login_btn').prop('disabled', true);
                                   
							   },
				    success: function(data) 
					  {
                          //alert(data);
                           $('#login_load').hide();
						  var res=JSON.parse(data);
                           if(res.err===1)
							{
                                $('#loginemailError').html(typeof res.msg.email === 'undefined' ? '' : res.msg.email);
                                $('#loginpasswordError').html(typeof res.msg.password === 'undefined' ? '' : res.msg.password);
                                
                                
                                $('#login_btn').prop('disabled', false);
							}
							else
							{
                                $('.text-danger').html('');
                                swal("", res.msg , "success");
                                
                                
                                setTimeout(function(){
                                    window.location.href=res.url;
                                },3000);
                                $('#loginForm')[0].reset();
                                 $('#login_btn').prop('disabled', false);
							}
					  }
		      });
	});
</script> 