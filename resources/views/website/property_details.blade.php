@extends('website/layout/master')
@section('title','details')
@section('body')
@php
   $original = asset('public/property_img/original').'/';
   $compress = asset('public/property_img/compress').'/';
@endphp
 
 <style>
         section#tabs {
         margin-bottom: 15px;
         }
         .strat-icons {
         padding-left: 12px;
         }
         .block-content {
         }
         .item.list-hyper li {
         float: left;
         padding-bottom: 12px;
         }
         .strat-icons {
         padding-left: 12px;
         float: right;
         }
         .block-title {
         margin-bottom: 0px !important;
         }
         .block-title {
         margin-bottom: 0px !important;
         padding-bottom: 0px !important;
         height: auto;
         }
         ._p-qty-and-cart.bnt-group .btn-success:hover {
         background-color: #d8232a !important;
         color: #fff !important;
         }
         .bnt-group .buy-btn {
         /* background-color: rgba(216,35,42,.1); */
         border: none !important;
         color: #d8232a;
         text-decoration: none;
         font-size: 14px;
         font-weight: 600;
         background: 0;
         }
         ._p-qty-and-cart.bnt-group button {
         margin-left: 40px;
         margin: 30px \; FONT-VARIANT: JIS04;
         }
         .bnt-group .btn-success {
         background-color: rgba(216,35,42,.1) !important;
         border: none !important;
         color: #d8232a;
         font-weight: 600;
         font-size: 14px;
         padding: 23px 34px;
         line-height: 0px;
         }
         .form-control:focus {
         color: #495057;
         background-color: #fff;
         border-color: #8bbafe;
         outline: 0;
         box-shadow: none;
         border-radius: 0px;
         border-bottom: 2px solid blue !important
         }
         .inputbox {
         position: relative;
         margin-bottom: 20px;
         width: 100%
         }
         .inputbox span {
         position: absolute;
         top: 7px;
         left: 11px;
         transition: 0.5s
         }
         .box-shh {
         background-color: #fff;
         box-shadow: 0 1px 2px 0 rgb(0 0 0 / 20%);
         -webkit-box-shadow: 0 1px 2px 0 rgb(0 0 0 / 20%);
         padding: 24px;
         }
         .inputbox i {
         position: absolute;
         top: 13px;
         right: 8px;
         transition: 0.5s;
         color: #3F51B5
         }
         input::-webkit-outer-spin-button,
         input::-webkit-inner-spin-button {
         -webkit-appearance: none;
         margin: 0
         }
         .inputbox input:focus~span {
         transform: translateX(-0px) translateY(-15px);
         font-size: 12px
         }
         .inputbox input:valid~span {
         transform: translateX(-0px) translateY(-15px);
         font-size: 12px
         }
         .card-blue {
         background-color: #492bc4
         }
         .hightlight {
         background-color: #5737d9;
         padding: 10px;
         border-radius: 10px;
         margin-top: 15px;
         font-size: 14px
         }
         .yellow {
         color: #fdcc49
         }
         .decoration {
         text-decoration: none;
         font-size: 14px
         }
         .btn-success {
         color: #fff;
         background-color: #492bc4;
         border-color: #492bc4
         }
         .btn-success:hover {
         color: #fff;
         background-color: #492bc4;
         border-color: #492bc4
         }
         .decoration:hover {
         text-decoration: none;
         color: #fdcc49
         }
         @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,800);
         .border-con {
         border: 1px solid #dfdfdf;
         padding: 20px
         px
         ;
         }
         span.fa.fa-star.checked {
         color: #f6a623;
         font-size: 19px;
         }
         section.scroller-smooth {
         margin-bottom: 15px;
         }
         button.btn-theme.btn.btn-success.btn-heart {
         width: 40px;
         height: 40px;
         text-align: center;
         border-radius: 40px;
         padding-left: 12px;
         border: 1px solid #f7b656;
         }
         .btn-heart a {
         color: #f7b64b;
         font-size: 17px;
         }
         body {
         background-color: #eee !important;
         font-family: 'Open Sans';
         font-size: 1.3em;
         padding: 0;
         margin: 0;
         }
         a {
         text-decoration: none;
         color: white;
         }
         header.header-scroller {
         border-bottom: 1px solid #cccccc;
         }
         #nav ul{
         list-style: none;
         }
         #nav li {
         display: inline-block;
         padding: 10px;
         }
         #nav li:hover {
         background: aquamarine;
         }
         #nav li:hover a{
         color: black;
         }
         .anchor {
         display: block; /*this is important!*/
         }
         a.free-t {
         color: red;
         text-decoration: underline;
         font-size: 14px;
         color: #d8232a;
         padding-left: 12px;
         }
         td.left_tab {
         color: #333 !important;
         font-size: 14px;
         }
         .read_working a {
         color: #fff;
         background-color: #d8232a;
         padding: 7px 27px;
         border-radius: 0.3rem;
         }
         .read_working {
         margin: 20px 0 0;
         }
         ul.list-propertys li p a {
         color: #000;
         text-decoration: underline;
         }
         .padd-tab tr td {
         color: #999;
         font-size: 14px;
         }
         .footer-widget-heading p {
         padding-bottom: 15px;
         color: #666;
         font-size: 14px;
         }
         .card.p-3 {
         background-color: #fff;
         box-shadow: 0 1px 2px 0 rgb(0 0 0 / 20%);
         -webkit-box-shadow: 0 1px 2px 0 rgb(0 0 0 / 20%);
         padding: 10px 20px 25px;
         }
         .fomr-agre p {
         padding: 10px 0;
         font-size: 12px;
         font-size: 1.2rem;
         color: #606060;
         /* text-align: center; */
         }
         .padd-tab tr {
         /* margin: 0; */
         border-bottom: 1px dashed #eaeaea;
         line-height: 40px;
         padding: 23px 0 !important;
         }
         .border-bootom h3 {
         margin: 0;
         font-size: 18px;
         color: #000;
         font-weight: 600;
         border-bottom: 1px solid #eaeaea;
         }
         .border-bootom {
         background-color: #fff;
         box-shadow: 0 1px 2px 0 rgb(0 0 0 / 20%);
         -webkit-box-shadow: 0 1px 2px 0 rgb(0 0 0 / 20%);
         padding: 0px;
         }
         .description.star-sec {
         min-height: 0px !important;
         }
         .page-divider {
         margin: 0 auto;
         width: 100%;
         min-height: 500px;
         height: 100%; 
         overflow: hidden;
         background-size: cover;
         }
         .properties-list ul li a {
         color: #d8232a;
         padding: 0 24px 4px;
         font-size: 15px;
         }
         .pgd1{background-image: url("http://image.shutterstock.com/display_pic_with_logo/719740/162308759/stock-photo-young-trendy-girl-in-sunglasses-and-a-knitted-hat-sitting-on-a-skateboard-on-the-background-of-a-162308759.jpg");}
         .pgd2{background-image: url("http://image.shutterstock.com/display_pic_with_logo/683038/155224421/stock-photo-group-of-three-young-adults-laughing-and-having-a-good-time-155224421.jpg");}
         .page {
         min-width: 200px;
         }
         #page1 {    background: white;}
         #page2 {background: MediumSpringGreen;}
         #page3 {background: SlateGray;}
         .properties-list li {
         display: inline-block;
         padding: 10px;
         }
         .padd-tab {
         padding: 15px;
         }
         .footer-widget-heading h3 {
         /* padding-left: 15px; */
         padding: 11px 15px;
         margin: 0;
         font-size: 18px;
         color: #000;
         font-weight: 600;
         border-bottom: 1px solid #eaeaea;
         }
         span.animationLine.transition {
         position: absolute;
         left: 0;
         bottom: -2px;
         height: 2px;
         width: 0;
         background: #d8232a;
         }
         .properties-list {
         position: relative;
         }
         .list-propertys .dropdown-menu {
         background: #fff;
         min-width: 125px;
         border: 1px solid #ccc;
         box-shadow: 0 5px 10px -4px rgb(0 0 0 / 75%);
         }
         ul.list-propertys li {
         display: inline-block;
         padding: 12px 24px 29px !important;
         }
         .ms-3.d-flex.flex-column span {
         font-size: 14px;
         font-weight: 600;
         color: #666;
         /* padding-bottom: 7px; */
         }
         p.CA_ownertype_name {
         font-size: 12px;
         font-weight: 600;
         color: #333;
         padding-bottom: 5px;
         margin: 0 0 0px;
         }
         .ms-3.d-flex.flex-column h1 {
         font-size: 12px;
         color: #999;
         padding-bottom: 3px;
         margin-top: 0 !important;
         margin-bottom: 0px !important;
         }
         .inputbox.mt-3 input {
         border-bottom: 1px solid #e2e2e2;
         background: 0 !important;
         font-size: 12px;
         color: #909090;
         border-top: transparent;
         border-left: transparent;
         }
         .d-flex.flex-row {
         margin: 14px 0;
         }
         select#list {
         border-bottom: 1px solid #e2e2e2 !important;
         border: none;
         }
         .d-flex {
         display: flex;
         margin-bottom: 15px;
         }
         .d-flex.align-items-center.logo.bg-purple {
         display: flex!important;
         align-items: center;
         }
         .ms-3.d-flex.flex-column {
         flex-direction: column!important;
         display: flex;
         padding-left: 12px;
         }
         a.dropdown-item {
         color: #000;
         display: block;
         padding: 0px 24px 8px;
         }
         button#dropdownMenuButton {
         padding-left: 0px;
         }
         form.prop_form {
         background-color: #fff;
         box-shadow: 0 1px 2px 0 rgb(0 0 0 / 20%);
         -webkit-box-shadow: 0 1px 2px 0 rgb(0 0 0 / 20%);
         padding: 20px;
         /* margin: 30px 0; */
         }
         .btn-share {
         float: right;
         }
         .images_joomla img {
         /* width: 100%; */
         /* height: 100%; */
         -o-object-fit: cover;
         /* object-fit: cover; */
         width: 38px;
         }
      </style>

<style>
    .notifyjs-corner{z-index: 50000;}
</style>



<section class="scroller-smooth">
   <div class="main" id="section1">
      <div class="container border-con">
         <div class="row">
            <header class="header-scroller">
               <div id="nav " class="properties-list">
                  <ul>
                     <li><a href="#section1" class="scroller" >Property Details</a></li>
                     <li><a href="#" class="scroller" data-offset="-139">Property Details</a></li>
                     <li><a href="#section2" class="scroller">Locality Details</a></li>
                  </ul>
                  <span class="animationLine transition" style="width: 158.25px; left: 0px;"></span>
               </div>
            </header>
             
            <div class="col-md-5">
               <div class="content">
                   @php
                     $path = $original.'/'.$property->images[0]->image_name;
                   @endphp
                  <div class="page-divider" data-toggle="modal" data-target="#sliderModal" style='background-image:url("{{$path}}")'></div>
               </div>
            </div>
             
            <div class="col-md-7">
                <h2> {{$property->property_name}} </h2>
               <ul class="list-propertys">
                  <li>
                     Garden : {{$property->garden}} 
                  </li>
                  <li>
                     Wi-Fi Internet  : {{$property->wi_fi_internet}}
                  </li>
                  <li>
                     Pool : {{$property->pool}}
                  </li>
                  <li>
                     Fitness Center: {{$property->fitness_center}}
                  </li>
                  <li>
                     Gym: {{$property->gym}}
                  </li>
                  <li>
                     Near Beach : {{$property->near_beach}}
                  </li>
                   <li>
                     Parking : {{$property->parking}}
                  </li>
                 
                  <li>
                     Security: {{$property->security}}
                  </li>
                  <li>
                     See View : {{$property->see_view}}
                  </li>
                  <li>
                     BreakFast: {{$property->break_fast}}
                  </li>
                  <li>
                     Lunch Included: {{$property->lunch_include}}
                  </li>
                   <li>
                     Ac : {{$property->ac}}
                  </li>
                  <li>
                     Dinner Included: {{$property->dinner_include}}
                  </li>
                  <li>
                     Express Check-In: {{$property->express_check_in}}
                  </li>
                   <li>
                     Late Check-out: {{$property->late_check_out}}
                  </li>
                   <li>
                     Spa : {{$property->spa}}
                  </li>
                   <li>
                     Beach View: {{$property->beach_view}}
                  </li>
                   <li>
                     Airport Pickup & Drop: {{$property->airport_drop}}
                  </li>
                   <li>
                     Railway Station Pickup & Drop : {{$property->railway_station_pickup_drop}}
                  </li>
                   <li>
                     Daily HouseKeeping : {{$property->daily_house_keeping}}
                  </li>
                   <li>
                     Welcome Drink  : {{$property->welcome_drink}}
                  </li>
                   
               </ul>
               <div class="_p-qty-and-cart">
                  <div class="_p-add-cart">
                     <button class="btn-theme btn buy-btn" tabindex="0">
                     Contact Builder
                     </button>
                     <button class="btn-theme btn btn-success" tabindex="0" data-toggle="modal" data-target="#enquiryModal">
                     Enquire Now
                     </button>
                     <button class="btn-theme btn btn-success btn-heart" tabindex="0">
                     <a href=""><i class="fa fa-heart"></i></a>
                     </button>
                     <button class="btn-underline btn-share" tabindex="0">
                     Share Property Feedback
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

      <section id="tabs" class="project-tab">
   <div class="" id="">
      <a class="anchor" id="portfolio"></a>
      <div class="container">
         <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-6 mb-50 border-bootom">
               <div class="footer-widget">
                  <div class="footer-widget-heading">
                     <h3>Description</h3>
                  </div>
                  <div class="padd-tab">
                     <div class="footer-widget-heading">
                        <p> {{$property->description}} . </p>
                     </div>
                     <table style="width:50%" class="footer_tab">
                        <tbody> 
                           <tr>
                              <td> Monthly Rent </td>
                              <span class="mkdf-wh-delimiter"></span>
                              <td class="left_tab">₹ {{$property->monthly_rent}} </td>
                           </tr>
                           <tr>
                              <td> Daily Rent </td>
                              <td class="left_tab">₹ {{$property->daily_rent}} </td>
                           </tr>
                           <tr>
                              <td> Security Amount </td>
                              <td class="left_tab"> ₹ {{$property->security_amount}} </td>
                           </tr>
                           <tr>
                              <td> Other Charge </td>
                              <td class="left_tab"> ₹ {{$property->other_charge}} </td>
                           </tr>
                           <tr>
                              <td> Maintenance Charges </td>
                              <td class="left_tab"> ₹ {{$property->maintenance_charge}} </td>
                           </tr>
                           <tr>
                              <td> Electricity & Water charges excluded </td>
                              <td class="left_tab"> ₹ {{$property->electr_charge}} </td>
                           </tr>
                        </tbody>
                     </table>
                     <div class="read_working">
                        <a href="#">Contact Owner
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 mb-50 ">
               <div class="d-flex">
                  <div class="d-flex align-items-center logo bg-purple">
                     <div class="images_joomla">
                        <img src="{{asset('public/frontend')}}/images/57808113_6_MG-20211212-WA0006_180_240.jpg">
                     </div>
                  </div>
                   
                  <div class="ms-3 d-flex flex-column">
                     <h1>Owner </h1>
                     <p class="CA_ownertype_name"> {{$property->user->name}} </p>
                     <span>+91-
                        
                         {{substr($property->user->mobile_no, 0, 4) . "****" . substr($property->user->mobile_no, 7, 4)}}
                      </span>
                     <!--<div class="read_working">
                        <a href="#">Save for Later</a>
                     </div>-->
                  </div>
                   
               </div>
                
               <div class="card p-3">
                   <form id="contactForm" method="post">
                       @csrf
                       <div class="inputbox mt-3">
                          <input type="text" name="name" value="" placeholder="name" class="form-control"> 
                       </div>
                   
                      <div class="inputbox mt-3"> 
                          <input type="email" name="email" value="" class="form-control"  placeholder="Email"> 
                      </div>
                       
                      <div class="inputbox mt-3"> 
                          <input type="number" name="mobile_no" value="" class="form-control"  placeholder="Mobile No"> 
                      </div>
                       
                      <div class="inputbox mt-3"> 
                          <textarea name="message" class="form-control" placeholder="Message Here ..."></textarea>
                      </div>
                   
                   
                       <button type="submit" id="contact_btn" class="btn-theme btn-primary btn-sm" style="width:210px;">Get Contact Details
                            <img id="contact_load" src="{{asset('public')}}/uploads/default/load.gif"  style="width:17px;float:right;">
                       </button>
                     
                   </form>
               </div>
                
            </div>
         </div>
      </div>
   </div>
</section>

<section class="Ratings & Review">
   <div class="main" id="section2">
      <div class="block-hot-categories-opt1">
         <div class="container box-shh ">
            <div class="block-title ">
               <span class="title">Hot categories</span>
            </div>
            <div class="block-content">
               <div class="row">
                  <div class="col-md-3 col-sm-6">
                     <div class="item list-hyper">
                        <div class="description star-sec">
                           <div class="title"><span> COMMUTING </span></div>
                        </div>
                        <ul>
                           <div class="list-public">
                              <li> <a href="javascript:void()"> Public Transport : {{$property->public_transport}}  </a> </li>
                              <div class="strat-icons">
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                              </div>
                           </div>
                           <div class="list-public">
                              <li> <a href="javascript:void()"> Parking : {{$property->parking}}  </a> </li>
                              <div class="strat-icons">
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                              </div>
                           </div>
                           <div class="list-public">
                              <li> <a href="javascript:void()"> Connectivity : {{$property->connectivity}}  </a> </li>
                              <div class="strat-icons">
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                              </div>
                           </div>
                           <div class="list-public">
                              <li> <a href="javascript:void()"> Traffic : {{$property->traffic}} &nbsp;&nbsp;&nbsp; </a> </li>
                              <div class="strat-icons">
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                              </div>
                           </div>
                        </ul>
                     </div>
                  </div>
                   
                  <div class="col-md-3 col-sm-6">
                     <div class="item list-hyper">
                        <div class="description star-sec">
                           <div class="title"><span> ENVIRONMENT </span></div>
                        </div>
                        <ul>
                           <div class="list-public">
                              <li><a href="javascript:void()"> Neighborhood : {{$property->neighborhood}} </a>
                              </li>
                              <div class="strat-icons">
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                              </div>
                           </div>
                           <div class="list-public">
                              <li><a href="javascript:void()" style="width:126px;"> Roads : {{$property->roads}}  </a>
                              </li>
                              <div class="strat-icons">
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                              </div>
                           </div>
                           <div class="list-public">
                              <li><a href="javascript:void()" style="width:148px;"> Safety : {{$property->safety}} </a>
                              </li>
                              <div class="strat-icons">
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                              </div>
                           </div>
                           <div class="list-public">
                              <li><a href="javascript:void()"> Cleanliness : {{$property->cleanliness}} </a>
                              </li>
                              <div class="strat-icons">
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                              </div>
                           </div>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <div class="item list-hyper">
                        <div class="description star-sec">
                           <div class="title"><span>PLACES OF INTEREST</span></div>
                        </div>
                        <ul>
                           <div class="list-public">
                              <li><a href="javascript:void()"> Schools : {{$property->school}} </a>
                              </li>
                              <div class="strat-icons">
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                              </div>
                           </div>
                           <div class="list-public">
                              <li><a href="javascript:void()"> Restaurant : {{$property->restaurant}}  </a>
                              </li>
                              <div class="strat-icons">
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                              </div>
                           </div>
                           <div class="list-public">
                              <li><a href="javascript:void()"> Hospital : {{$property->hospital}} </a>
                              </li>
                              <div class="strat-icons">
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                              </div>
                           </div>
                           <div class="list-public">
                              <li><a href="javascript:void()" style="width:140px"> Market : {{$property->market}} </a>
                              </li>
                              <div class="strat-icons">
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                              </div>
                           </div>
                        </ul>
                     </div>
                  </div>
                   
                  <div class="col-md-3 col-sm-6">
                     <div class="item list-hyper">
                        <div class="description star-sec">
                           <div class="title"><span> Location Advantage </span></div>
                        </div>
                        <ul>
                           <div class="list-public">
                              <li><a href="javascript:void()"> Garden : {{$property->garden}} </a>
                              </li>
                              <div class="strat-icons">
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                              </div>
                           </div>
                           <div class="list-public">
                              <li><a href="javascript:void()" style="width:140px;"> Security : {{$property->security}} </a>
                              </li>
                              <div class="strat-icons">
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                              </div>
                           </div>
                           <div class="list-public">
                              <li><a href="javascript:void()"> See View : {{$property->see_view}} </a>
                              </li>
                              <div class="strat-icons">
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                              </div>
                           </div>
                           <div class="list-public">
                              <li><a href="javascript:void()"> Near Beach : {{$property->near_beach}} </a>
                              </li>
                              <div class="strat-icons">
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                                 <a><span class="fa fa-star checked"></span></a>
                              </div>
                           </div>
                        </ul>
                     </div>
                  </div>
            
               </div>
               
            </div>
         </div>
      </div>
   </div>
</section>

<!--Image Slider Modal -->
<div class="modal fade" id="sliderModal"  style="z-index:10000;"  >
  <div class="modal-dialog modal-lg" >
    <div class="modal-content">
      <div class="modal-body" style="position:relative;">
        <button type="button" class="close" data-dismiss="modal" style="position: absolute;top:-9px;z-index:500000;right: 4px;">
          <span aria-hidden="true" style="color:red;font-size:30px;">X</span>
        </button>
               <div id="carouse" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                     <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                     <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                  </ol>
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    @foreach($property->images as $key=>$value) 
                       @php
                         $active = $key == 0 ? 'active' : '';
                         $path = $original.'/'.$value->image_name;
                       @endphp
                        <div class="item {{$active}}">
                            <img src="{{$path}}" style="width:100%;height:450px;">
                        </div>
                    @endforeach 
                  </div>
                  <!-- Controls -->
                  <a class="left carousel-control" href="#carouse" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#carouse" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
      </div>
    </div>
  </div>
</div>
<!--Image Slider Modal -->

<!--Enquiry Modal start -->
<div class="modal fade" id="enquiryModal"  style="z-index:10000;">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        <h5 class="modal-title" id="exampleModalLabel"> Enquiry Now </h5>
      </div>
        
      <form id="enquiryForm" method="post">
                       @csrf
          <div class="modal-body">

            <div class="row">
              <div class="form-group col-sm-6">
                <label>Name</label>
                <input type="text" name="ename" class="form-control" placeholder="Enter name">
              </div>

              <div class="form-group col-sm-6">
                <label>Email </label>
                <input type="email" name="eemail" class="form-control" placeholder="Enter email">
              </div>
            </div>


              <div class="form-group">
                <label>Message</label>
                 <textarea name="emessage" class="form-control" placeholder="Message here ... "></textarea>
              </div>

          </div>
          <div class="modal-footer">
            <!--<button type="button" class="btn btn-primary">Save changes</button>-->
              <button type="submit" id="enquiry_btn" class="btn btn-primary btn-sm" style="width:210px;">Enquiry Send
                            <img id="enquiry_load" src="{{asset('public')}}/uploads/default/load.gif"  style="width:17px;float:right;">
              </button>
          </div>
      </form>
        
    </div>
  </div>
</div>
<!--Enquiry modal end-->

@endsection
@push('scripts')

<script>  
    /*enquiry form*/
$('#enquiry_load').hide();
  $('#enquiryForm').on('submit',function(e){
		e.preventDefault();
		 $.ajax({
			        url: "{{route('send-enquiry')}}",
				    type: "POST",
				    data:  new FormData(this),
					contentType: false,
		   		    cache: false,
					processData:false,
				    beforeSend : function()
							   {
								   $('#enquiry_load').show();
                                   $('#enquiry_btn').prop('disabled', true);
							   },
				    success: function(data) 
					  {
                           $('#enquiry_load').hide();
						  var res=JSON.parse(data);
                           if(res.err===1)
							{
                                $("[name='ename']").css(typeof res.msg.ename === 'undefined' ? {"outline": "2px solid #08ee27"} : {"outline": "2px solid red"});
                                $("[name='eemail']").css(typeof res.msg.eemail === 'undefined' ? {"outline": "2px solid #08ee27"} : {"outline": "2px solid red"});
                                $("[name='emessage']").css(typeof res.msg.emessage === 'undefined' ? {"outline": "2px solid #08ee27"} : {"outline": "2px solid red"});
                               
                                $('#enquiry_btn').prop('disabled', false);
							}
							else
							{
                                $.notify(res.msg, "success");
                                //swal("", res.msg , "success");
                                
                                $('#enquiryForm')[0].reset();
                                 $('#enquiry_btn').prop('disabled', false);
							}
					  }
		      });
	});
</script>

<script>  
    /*get contact*/
$('#contact_load').hide();
  $('#contactForm').on('submit',function(e){
		e.preventDefault();
		 $.ajax({
			        url: "{{route('send-contact')}}",
				    type: "POST",
				    data:  new FormData(this),
					contentType: false,
		   		    cache: false,
					processData:false,
				    beforeSend : function()
							   {
								   $('#contact_load').show();
                                   $('#contact_btn').prop('disabled', true);
							   },
				    success: function(data) 
					  {
                          //alert(data);
                           $('#contact_load').hide();
						  var res=JSON.parse(data);
                           if(res.err===1)
							{
                                $("[name='name']").css(typeof res.msg.name === 'undefined' ? {"outline": "2px solid #08ee27"} : {"outline": "2px solid red"});
                                $("[name='email']").css(typeof res.msg.email === 'undefined' ? {"outline": "2px solid #08ee27"} : {"outline": "2px solid red"});
                                $("[name='mobile_no']").css(typeof res.msg.mobile_no === 'undefined' ? {"outline": "2px solid #08ee27"} : {"outline": "2px solid red"});
                                $("[name='message']").css(typeof res.msg.message === 'undefined' ? {"outline": "2px solid #08ee27"} : {"outline": "2px solid red"});
                               
                              
                                $('#contact_btn').prop('disabled', false);
							}
							else
							{
                                $.notify(res.msg, "success");
                                //swal("", res.msg , "success");
                                $('.text-danger').html('');
                                
                                $('#contactForm')[0].reset();
                                 $('#contact_btn').prop('disabled', false);
							}
					  }
		      });
	});
</script>

<script>
         $(document).ready(function(){
         // Add smooth scrolling to all links
         $("a").on('click', function(event) {
         
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();
         
            // Store hash
            var hash = this.hash;
         
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 800, function(){
         
              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          } // End if
         });
         });
</script>
     
<script>
         /*(function ($) {
          $.fn.arctic_scroll = function (options) {
         
              var defaults = {
                  elem: $(this),
                  speed: 500
              };
              var options = $.extend(defaults, options);
         
              options.elem.click(function(event){     
                  event.preventDefault();
                  var offset = ($(this).attr('data-offset')) ? $(this).attr('data-offset') : false,
                      position = ($(this).attr('data-position')) ? $(this).attr('data-position') : false;         
                  if (offset) {
                      var toMove = parseInt(offset);
                      $('html,body').stop(true, false).animate({scrollTop: ($(this.hash).offset().top + toMove) }, options.speed);
                  } else if (position) {
                      var toMove = parseInt(position);
                      $('html,body').stop(true, false).animate({scrollTop: toMove }, options.speed);
                  } else {
                      $('html,body').stop(true, false).animate({scrollTop: ($(this.hash).offset().top) }, options.speed);
                  }
              });
         
          };
         })(jQuery);*/
         
        /* $(function(){
          $(".scroller").arctic_scroll({
              speed: 600
          });
         });*/
    
      </script>


<script>
console.log('home page');
</script>

@endpush