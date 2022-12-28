@extends('website/layout/master')
@section('title','category')
@section('body')
<style>
    /*new */
.servc-container-box {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
.servc-container-box>div>a {
    display: block;
    height: 100%;
}
.content {
    padding: 0px !important;
    padding: 30px 0 0 !important;
}
.servc-container-box {
    text-align: center;

}
.page h3 {
    margin-bottom: 21px;
}
.servc-container-box>div {
    margin: 15px 0;
}
.width-20-top {
    width: 16.8%!important;
}
section.services {
    min-height: 400px;
    padding: 40px 20px 50px;
    background: #f8fafc;
}
.cards p, .cards2 p {
    font-size: 11pt;
    font-weight: 600;
    color: #333;
    margin-top: 10px;
}
/*.card-image {*/
/*    position: relative;*/
/*    width: 56px;*/
/*    height: 56px;*/
/*    margin: 0 auto;*/
/*}*/
.cards2 {
    box-shadow: 0 8px 12px -1px rgb(0 0 0 / 10%);
    -webkit-box-shadow: 0 8px 12px -1px rgb(0 0 0 / 10%);
    -moz-box-shadow: 0 8px 12px -1px rgba(0,0,0,.1);
    padding: 15px 10px;
    background: #fff;
    margin: 0 auto;
    color: grey;
   
    text-align: center;
    border-radius: 4px;
    display: block;
    height: 100%;
    min-height: 160px;
}
.image-holder {
    margin-right: 12px;
}
span.top-read-item.onclick-link {
    display: flex;
	margin-bottom: 15px;
}
.top-read-content a {
    font-size: 16px;
}
.why-choose .box a span i {
    border-radius: 39px;
    background: !important;
    webkit-text-fill-color: none !important;
    -webkit-background-clip: inherit;
    -webkit-text-fill-color: #fff;
    background: blue;
    width: 39px !important;
    height: 39px;
    text-align: center;
    line-height: 39px;
    font-size: 22px;
        margin-right: 12px;
}
.mbr-justify-content-center {
    justify-content: center;
    display: flex;
}

.why-choose .title a {
    color: #111;
    font-size: 14px;
    display: flex;
    align-items: center;
}
.bottom {
    margin-bottom: 30px;
}

.why-choose .box {
    padding: 15px !important;
}
.page img {
    width: 100%;
}
.ico-wrap img {
    width: 100px;
    border-radius: 100px;
    height: 100px;
    min-width: 100px;
    margin-right: 30px;
}
.page {
    border: 1px solid #eee;
    box-shadow: 10px 10px 5px 0px rgb(220 209 209 / 88%);
    -webkit-box-shadow: 10px 10px 5px 0px rgb(220 209 209 / 88%);
    -moz-box-shadow: 10px 10px 5px 0px rgba(220, 209, 209, 0.88);
    background: #fff;
    margin-bottom: 30px;
    padding: 20px;
}
.why-choose {
    min-height: inherit !important;
}
section.search-banner.banners-search .center-sec {
    bax: 0 !important;
    box-shadow: none !important;
}

@media only screen and (min-device-width: 320px) and (max-device-width: 768px){
.width-20, .width-20-top {
    width: 50%!important;
    float: left;
    padding: 0!important;
    margin-top: 10px;
}
.cards2 {
    margin: 0 9px;
}
.servc-container-box {
    
    display: inherit !important;
}
}
.wrap {
       display: flex;
    background: white;
    padding: 1rem 1rem 1rem 1rem;
    border-radius: 20px;
    box-shadow: 7px 7px 30px -5px rgb(0 0 0 / 10%);
    margin-bottom: 2rem;
    border: 2px solid #ddd;
}
.text-wrap i {
    background: #52bc00;
    width: 40px;
    height: 40px;
    text-align: center;
    line-height: 40px;
    color: white;
    font-size: 26px;
    border-radius: 40px;
}



.ico-wrap {
    margin: auto;
}

.mbr-iconfont {
    font-size: 4.5rem !important;
    color: #313131;
    margin: 1rem;
    padding-right: 1rem;
}
.vcenter {
    margin: auto;
}

.mbr-section-title3 {
    text-align: left;
}

.display-5 {
    font-family: 'Source Sans Pro',sans-serif;
    font-size: 1.4rem;
}

.mbr-bold {
    font-weight: 700;
}

 
.display-6 {
    font-family: 'Source Sans Pro',sans-serif;
    font-size: 1re}
    section.lacation-icon {
    padding: 50px 0 50px;
}
/*new*/

.blog-post-meta span {
    color: #000;
}
a.btn.btn-more {
    background: #29aae1;
    line-height: 28px;
    color: white;
}
.blog-post-content a {
    color: #000;
    text-decoration: none;
   
}
.top-box h3 {
    margin-bottom: 20px;
}
h3.head {
    margin-bottom: 30px;
    font-weight: 700;
    text-align: center;
}
.col1{
        float:left;
        width:50%;
    }
    .display-6 {
    font-family: 'Source Sans Pro',sans-serif;
    font-size: 1re}
    section.lacation-icon {
    padding: 50px 0 50px;
}

    .col2{
        float:right;
        width:50%;
    }

    .prop-service__banner__title {
    width: 100%;
    height: auto;
    padding-bottom: 40px;
}
.prop-service__banner__title--text2 {
    color: #303030;
    font-size: 24px;
    font-weight: 600;
}
.prop-service__banner__title--text1 {
    color: #d8232a;
    font-size: 40px;
    font-weight: 600;
}
.prop-service__banner__list {
    width: 100%;
    height: auto;
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    flex-direction: column;
    flex-flow: wrap;
    margin-left: -8px;
}
.prop-service__banner__list--item {
    width: 50%;
    height: auto;
    padding-bottom: 8px;
    z-index: 3;
}
.prop-service__banner__list--item>a {
    width: 272px;
    display: block;
    color: #303030;
    font-size: 16px;
    font-weight: 500;
    padding: 14px 0 14px 62px;
    position: relative;
    transition: all .3s ease;
}
.prop-service__payrent__column {
    width: 48%;
    height: auto;
    float: left;
    padding: 12px 0 0 48px;
}

.prop-service__payrent__title {
    padding-bottom: 24px;
}

.prop-service__payrent__title--text1 {
    color: #303030;
    font-size: 18px;
    font-weight: 500;
}
.prop-service__payrent__list--item {
    color: #303030;
    font-size: 16px;
    font-weight: 400;
    position: relative;
    padding: 0 0 16px 28px;
}
.prop-service__payrent__list--item:before {
    content: "";
    display: block;
    position: absolute;
    width: 16px;
    height: 16px;
    left: 0;
    top: 0;
    background-color: #00c1d4;
    border-radius: 50%;
    background-clip: padding-box;
}
.prop-service__payrent__list--item:after {
    content: "";
    display: block;
    position: absolute;
    width: 7px;
    height: 3px;
    left: 4px;
    top: 5px;
    border-left: 1px solid #fff;
    border-bottom: 1px solid #fff;
    transform: rotate(-45deg);
}
.prop-service__action {
    width: 100%;
    height: auto;
}
.prop-service__action--btn.xmedium {
    padding: 0 24px;
    height: 40px;
    line-height: 38px;
}
.prop-service__action--btn.btn-red {
    color: #fff;
    background-color: #d8232a;
    border: 1px solid #d8232a;
}
.prop-service__action--btn {
    width: auto;
    text-align: center;
    display: inline-block;
    font-size: 14px;
    cursor: pointer;
    font-weight: 600;
    text-decoration: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 20px;
    background-clip: padding-box;
    transition: all .3s ease;
}

.prop-service__banner__list--item>a[data-icon=home-loans]:before {
    background-position: -8px -788px;
}

.prop-service__banner__list--item>a:before {
    content: "";
    display: block;
    position: absolute;
    width: 32px;
    height: 32px;
    top: 7px;
    left: 16px;
    background: url(https://cdn.staticmb.com/propertyservicestatic/marketplacestatic/07202022121134/images/prop-service-home/prop-services-sprite-web-v2.svg) no-repeat;
}

.container-fluid .container {
    width: 1200px;
    margin-right: auto;
    margin-left: auto;
    display: table;
    padding: 0;
}

.prop-service__section {
    width: 100%;
    height: auto;
    padding: 56px 0;
}
.prop-service__section__title {
    width: 100%;
    height: auto;
    padding-bottom: 32px;
}
.prop-service__section__title--text1, .prop-service__section__title--text1>h2, .prop-service__section__title--text1>h3 {
    color: #303030;
    font-size: 32px;
    font-weight: 600;
}
.prop-service__mb-promise {
    width: 100%;
    height: auto;
}
.prop-service__mb-promise__list {
    width: 100%;
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    padding-bottom: 32px;
}
.prop-service__mb-promise__list--item {
    width: 25%;
    height: 312px;
    text-align: center;
    padding: 38px 12px 24px;
    margin-right: 16px;
    background-color: hsla(0,0%,96.1%,.3);
    border-radius: 12px;
    background-clip: padding-box;
}
.prop-service__mb-promise__list--item--graphic {
    width: 100%;
    height: 148px;
    margin-bottom: 24px;
}
.prop-service__mb-promise__list--item--graphic .svg-ico.ico-convenience {
    font-size: 170px;
}

.prop-service__mb-promise__list--item--graphic .svg-ico {
    line-height: 0;
}
.svg-ico>svg {
    height: 1em;
    font-size: inherit;
    vertical-align: middle;
    color: inherit;
    fill: currentColor;
}
.prop-service__mb-promise__list--item--graphic .svg-ico.ico-trusted-service-partners {
    font-size: 150px;
}
.prop-service__mb-promise__list--item--graphic .svg-ico.ico-service-quality {
    font-size: 154px;
}
.prop-service__mb-promise__list--item--graphic .svg-ico.ico-value-for-money {
    font-size: 160px;
}
.prop-service__mb-promise__list--item__content {
    width: 100%;
}
.prop-service__mb-promise__list--item--title {
    color: #303030;
    font-size: 16px;
    font-weight: 600;
    padding-bottom: 8px;
}
.prop-service__mb-promise__list--item--text {
    color: #303030;
    font-size: 14px;
    font-weight: 400;
    line-height: 24px;
}


/*new */
.servc-container-box {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}
.servc-container-box>div>a {
    display: block;
    height: 100%;
}
.servc-container-box {
    text-align: center;

}
.servc-container-box>div {
    margin: 15px 0;
}
.width-20-top {
    width: 16.8%!important;
}
section.services {
    min-height: 400px;
    padding: 40px 20px 50px;
    background: #f8fafc;
}
.cards p, .cards2 p {
    font-size: 11pt;
    font-weight: 600;
    color: #333;
    margin-top: 10px;
}
.card-image {
    position: relative;
    width: 56px;
    height: 56px;
    margin: 0 auto;
}
.cards2 {
    box-shadow: 0 8px 12px -1px rgb(0 0 0 / 10%);
    -webkit-box-shadow: 0 8px 12px -1px rgb(0 0 0 / 10%);
    -moz-box-shadow: 0 8px 12px -1px rgba(0,0,0,.1);
    padding: 15px 10px;
    background: #fff;
    margin: 0 auto;
    color: grey;
   
    text-align: center;
    border-radius: 4px;
    display: block;
    height: 100%;
    min-height: 160px;
}



.why-choose .box a span i {
    border-radius: 39px;
    background: !important;
    webkit-text-fill-color: none !important;
    -webkit-background-clip: inherit;
    -webkit-text-fill-color: #fff;
    background: blue;
    width: 39px !important;
    height: 39px;
    text-align: center;
    line-height: 39px;
    font-size: 22px;
        margin-right: 12px;
}


.why-choose .title a {
    color: #111;
    font-size: 14px;
    display: flex;
    align-items: center;
}

.why-choose .box {
    padding: 15px !important;
}
.why-choose {
    min-height: inherit !important;
}
section.search-banner.banners-search .center-sec {
    bax: 0 !important;
    box-shadow: none !important;
}

@media only screen and (min-device-width: 320px) and (max-device-width: 768px){
.width-20, .width-20-top {
    width: 50%!important;
    float: left;
    padding: 0!important;
    margin-top: 10px;
}
.cards2 {
    margin: 0 9px;
}
.servc-container-box {
    
    display: inherit !important;
}
}
/*new*/

.top-box {
    /* border: 1px solid #eee; */
    box-shadow: 10px 10px 5px 0px rgb(220 209 209 / 88%);
    -webkit-box-shadow: 10px 10px 5px 0px rgb(220 209 209 / 88%);
    -moz-box-shadow: 10px 10px 5px 0px rgba(220, 209, 209, 0.88);
    background: #fff;
    margin-bottom: 30px;
    padding: 20px;
}
.blog-post-meta span {
    color: #000;
    font-size: 16px;
}
.blog-post-content p {
    font-size: 16px;
}
.post-widgets {
    padding: 50px 0 50px;
}

.content p {
    font-size: 16px;
}
section.blog {
    background: #f6f8fb;
}
section.blog {
    background: #f6f8fb;
    padding: 50px 0 50px;
}
</style>
<section class="blog">
<div class="container">
<div class="row justify-content-center">
                            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <div class="section-title section-header  left-text">
                                <h2>Exclusive  Properties <!--in Chennai--> </h2>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <div class="section-title section-header text-center">
                                    <a href="" class="button button-info-default xsmall rounded">See all Properties <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                    <p></p>
                                </div>
                            </div>
                        </div>
        <div class="row">
            @php

            $goa = DB::table('explores')->get();

            @endphp
            @foreach($goa as $items)
            <div class="col-sm-3">
              <section class="blog-post">

                <div class="panel panel-default">
                <img class="lazy" src="{{asset('public')}}/images/{{$items->image ?? ''}}" alt="vastu-remedies-for-south-west-facing-house">
                  <div class="panel-body">
                    <div class="blog-post-meta">
                      <span class="label label-light">{{$items->type ?? ''}}</span>
                      <p class="blog-post-date pull-right">{{$items->date ?? ''}}</p>
                    </div>
                    <div class="blog-post-content">
                      <a href="https://peexaweb.com" target="_blank">
                        <h2 class="blog-post-title">{{$items->heading ?? ''}}</h2>
                      </a>
                      <p>{{$items->desc ?? ''}}</p>
                      <a class="btn btn-more" href="https://peexaweb.com">Read more</a>
                      <a class="blog-post-share pull-right" href="#">
                       
                      </a>
                    </div>
                  </div>
                </div>
            </section><!-- /.blog-post -->
        </div>
        @endforeach
			   <!-- <div class="col-sm-3">
              <section class="blog-post">
                <div class="panel panel-default">
                <img class="lazy" src="https://img.staticmb.com/mbcontent//images/uploads/2022/6/vastu-remedies-for-south-west-facing-house.jpg" alt="vastu-remedies-for-south-west-facing-house">
                  <div class="panel-body">
                    <div class="blog-post-meta">
                      <span class="label label-light">News</span>
                      <p class="blog-post-date pull-right">February 16, 2016</p>
                    </div>
                    <div class="blog-post-content">
                      <a href="https://peexaweb.com" target="_blank">
                        <h2 class="blog-post-title">Materialize Tutorial for Beginners</h2>
                      </a>
                      <p>Materialize is a responsive front-end development framework based on Google’s</p>
                      <a class="btn btn-more" href="https://peexaweb.com">Read more</a>
                      <a class="blog-post-share pull-right" href="#">
                       
                      </a>
                    </div>
                  </div>
                </div>
              </section> -->
              <!-- /.blog-post -->
            <!-- </div>
			   <div class="col-sm-3">
              <section class="blog-post">
                <div class="panel panel-default">
                <img class="lazy" src="https://img.staticmb.com/mbcontent//images/uploads/2022/6/vastu-remedies-for-south-west-facing-house.jpg" alt="vastu-remedies-for-south-west-facing-house">
                  <div class="panel-body">
                    <div class="blog-post-meta">
                      <span class="label label-light">News</span>
                      <p class="blog-post-date pull-right">February 16, 2016</p>
                    </div>
                    <div class="blog-post-content">
                      <a href="https://peexaweb.com" target="_blank">
                        <h2 class="blog-post-title">Materialize Tutorial for Beginners</h2>
                      </a>
                      <p>Materialize is a responsive front-end development framework based on Google’s</p>
                      <a class="btn btn-more" href="https://peexaweb.com">Read more</a>
                      <a class="blog-post-share pull-right" href="#">
                       
                      </a>
                    </div>
                  </div>
                </div>
              </section> -->
              <!-- /.blog-post -->
            <!-- </div>
			   <div class="col-sm-3">
              <section class="blog-post">
                <div class="panel panel-default">
                <img class="lazy" src="https://img.staticmb.com/mbcontent//images/uploads/2022/6/vastu-remedies-for-south-west-facing-house.jpg" alt="vastu-remedies-for-south-west-facing-house">
                  <div class="panel-body">
                    <div class="blog-post-meta">
                      <span class="label label-light">News</span>
                      <p class="blog-post-date pull-right">February 16, 2016</p>
                    </div>
                    <div class="blog-post-content">
                      <a href="https://peexaweb.com" target="_blank">
                        <h2 class="blog-post-title">Materialize Tutorial for Beginners</h2>
                      </a>
                      <p>Materialize is a responsive front-end development framework based on Google’s</p>
                      <a class="btn btn-more" href="https://peexaweb.com">Read more</a>
                      <a class="blog-post-share pull-right" href="#">
                       
                      </a>
                    </div>
                  </div>
                </div>
              </section> -->
              <!-- /.blog-post -->
            <!-- </div> -->
        </div>
    </div>
</section>
<!--  -->
 

</div><!-- main-page -->
   
   
   
   
   
<section class="services">
<div class="container text-center">
<h2 class="home-h2">Explore Our Services
<div class="section-header-underline"></div>
</h2>

@php

$service = DB::table('services')->get();

@endphp

<div class="row margin-top-40">
<div class="servc-container-box text-center">
  @foreach($service as $items)
<div class="col-md-2  width-20-top">
<a href="#" class="back1 demo">
<div id="card-1" class=" cards2 text-center">
<div class="card-image">
<img src="{{ asset('public/images') }}/{{ $items->icon ?? '' }}">
</div>
<p>{{ $items->name ?? '' }}</p>
<span>{{ $items->desc ?? '' }}</span>
</div></a>
</div>
  @endforeach

</div>
</div>
</div></section>
       
<section class="trending">
   <div class="clearfix  space-remv" style="background-color: #eeeeee; padding-top:30px;">
      <!-- block -floor -products / floor 1 :Fashion-->
      <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                  <div class="section-title section-header  left-text">
                     <h2>Trending Project In Goa 
                     </h2>
                  </div>
               </div>
            </div>
             
            <div class="block-content">
               <div class="col-products tab-content">
                  <div class="owl-carousel"data-nav="true" data-dots="false" data-margin="0" 
                     data-responsive='{"0":{"items":1}}'>
                      
                      @foreach($trending_project as $property)
                        <div class=" product-item  product-item-opt-1">
                            <div class="product-item-info" >
                                <div class="product-item-photo" style="position:relative;">
                                    <a class="product-item-img" href="{{route('property_details',['id'=>$property->id])}}">
                                        <img src="{{asset('public/trending_project/1.jpg')}}"  style="height:250px; object-fit: cover!important;">
                                    </a>
                                     <div style="position:absolute;bottom:0px; " class="box-banner">
                                       <h1 style="background-color:yellow;display:inline-block;padding:5px;"> Venkatesh Graffiti Glover </h1>
                                       <p style="color:white;text-align:left;"> 2 BHK Flats at Keshav Nagar </p>
                                        <h4 style="color:white;text-align:left;">
                                         Starting From 62.2 Lac | Exclusive benefits worth 2Lac for limited units with No Stamp duty & Registration Fees . 
                                        </h4>
                                         <h6 style="color:white;text-align:left;"> Marketed By Shree Venkatesh Buildcon Pvt. Ltd. </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach 
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>


@endsection
