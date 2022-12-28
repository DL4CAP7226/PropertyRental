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
    .col1{
        float:left;
        width:50%;
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



</style>

<section class="search-banner banners-search">
            <div class="header-content">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12 center-sec">
                        <div class="left-list">
                           <div class="block-title">
                              <span class="title">
                              Lets us find  some to help you
                              </span>
                           </div>
                           <!-- block search -->
                          
                        </div>
                        <div class="row">
                  <div class="nav-mind">
                           <div class="block-search">
                              <div class="block-title">
                                 <span>Search</span>
                              </div>
                              <div class="block-content">
                                  
                                  <div class="col-md-4">
                                 <div class="categori-search radius ">
                                    <select data-placeholder="All Categories" class="categori-search-option" style="display: none;">
                                       <option>select your city</option>
                                       <option>Rent</option>
                                       <option>Commercial</option>
                                       <option>PG</option>
                                     
                                    </select>
                                   
                                  </div> </div>
                                 
                                 <div class="col-md-8">
                                 <div class="form-search">
                                    <form>
                                       <div class="box-group">
                                          <input type="text" class="form-control" placeholder="Search for services...">
                                 
                                          <button class="btn btn-search" type="button"><span>search</span></button>
                                       </div>
                                    </form>
                                 </div></div>
                              </div>
                           </div></div>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </section>
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
<!-- <div class="col-md-2  width-20-top">
<a href="/bangalore/electrician" class="back1 demo">
<div id="card-2" class=" cards2 text-center">
<div class="card-image">
<img src="	https://static.thenounproject.com/png/2349593-200.png">
</div>
<p>ELECTRICIAN</p>
<span>Fan Repair, Light Fitting, Wiring</span>
</div></a>
</div>
<div class="col-md-2  width-20-top">
<a href="/bangalore/carpenter" class="back1 demo">
<div id="card-3" class=" cards2 text-center">
<div class="card-image">
<img src="	https://static.thenounproject.com/png/2349593-200.png">
</div>
<p>CARPENTER</p>
<span>Custom Wardrobe, Modular Kitchen</span>
</div></a>
</div>
<div class="col-md-2  width-20-top">
<a href="/bangalore/mason" class="back1 demo">
<div id="card-4" class=" cards2 text-center">
<div class="card-image">
<img src="	https://static.thenounproject.com/png/2349593-200.png">
</div>
<p>MASON</p>
<span>Demolition, Civil work, Plastering</span>
</div></a>
</div>
<div class="col-md-2  width-20-top">
<a href="/bangalore/plumber" class="back1 demo"><div id="card-8" class=" cards2 text-center">
<div class="card-image">
<img src="	https://static.thenounproject.com/png/2349593-200.png">
</div>
<p>PLUMBER</p>
<span>Leakage, Blockage, Seepage</span>
</div></a>
</div>
<div class="col-md-2 width-20 margin-top-30">
<a href="/bangalore/pest-control" class="back1 demo"><div id="card-6" class=" cards2 text-center">
<div class="card-image">
<img src="	https://static.thenounproject.com/png/2349593-200.png">
</div>
<p>PEST CONTROL</p>
<span>GPC, Cockroach, Bed-bugs</span>
</div></a>
 </div>
<div class="col-md-2 width-20 margin-top-30">
<a href="/bangalore/painting" class="back1 demo"><div id="card-7" class=" cards2 text-center">
<div class="card-image">
<img src="	https://static.thenounproject.com/png/2349593-200.png">
</div>
<p>PAINTING</p>
<span>Interior, Exterior, Texture</span>
</div></a>
</div>
<div class="col-md-2 width-20 margin-top-30">
<a href="/bangalore/house-cleaning" class="back1 demo"><div id="card-5" class=" cards2 text-center">
<div class="card-image">
<img src="	https://static.thenounproject.com/png/2349593-200.png">
</div>
<p>HOUSE CLEANING</p>
<span>Deep cleaning, Bathroom, Scrubbing</span>
</div></a>
</div>
<div class="col-md-2 width-20 margin-top-30">
<a href="/bangalore/appliance-repair" class="back1 demo"><div id="card-9" class=" cards2 text-center">
<div class="card-image">
<img src="	https://static.thenounproject.com/png/2349593-200.png">
</div>
<p>APPLIANCE REPAIR</p>
<span>Washing Machine, Refrigerator, Microwave</span>
</div></a>
</div>
<div class="col-md-2 width-20 margin-top-30">
<a href="/bangalore/sofa-cleaning" class="back1 demo"><div id="card-10" class=" cards2 text-center">
<div class="card-image">
<img src="	https://static.thenounproject.com/png/2349593-200.png">
</div>
<p>SOFA CLEANING</p>
<span>Shampooing, Vacuuming, Steaming</span>
</div></a>
</div>
<div class="col-md-2 width-20 margin-top-30">
<a href="/bangalore/tiles-flooring" class="back1 demo"><div id="card-11" class=" cards2 text-center">
<div class="card-image">
<img src="	https://static.thenounproject.com/png/2349593-200.png">
</div>
<p>TILES &amp; FLOORING</p>
<span>Wooden flooring, Wall/ Vitrified tiles</span>
</div></a>
</div>
</div>
</div>
</div></section>







<section class="services how-to-work ">
<div class="container ">
<h2 class="home-h2">how-to-work
<div class="section-header-underline"></div>
</h2>

<div class="row margin-top-40">
<div class="servc-container-box text-center">
<div class="col-md-4  ">
<a href="/bangalore/ac-repair" class="back1 demo">
<div id="card-1" class=" cards2 text-center">
<div class="card-image">
<img src="	https://static.thenounproject.com/png/2349593-200.png">
</div>
<p>A.C. REPAIR</p>
<span>Installation, Repair, Gas refill</span>
</div></a>
</div>
<div class="col-md-4 ">
<a href="/bangalore/electrician" class="back1 demo">
<div id="card-2" class=" cards2 text-center">
<div class="card-image">
<img src="	https://static.thenounproject.com/png/2349593-200.png">
</div>
<p>ELECTRICIAN</p>
<span>Fan Repair, Light Fitting, Wiring</span>
</div></a>
</div>
<div class="col-md-4 ">
<a href="/bangalore/carpenter" class="back1 demo">
<div id="card-3" class=" cards2 text-center">
<div class="card-image">
<img src="	https://static.thenounproject.com/png/2349593-200.png">
</div>>
<p>CARPENTER</p>
<span>Custom Wardrobe, Modular Kitchen</span>
</div></a>
</div> -->




</div>
</div>
</div>
</section>

        
<section class="lacation-icon">
<div class="container">

	
		<div class="row mbr-justify-content-center">

            <div class="col-lg-6 mbr-col-md-10">
                <div class="wrap">
                    <div class="ico-wrap">
                   <div class="card-image">
<img src="{{asset('public')}}/property_img/compress/16425752410.jpg">
</div>   
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Mohan kumar</h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply </p>
                         <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy </p>
                          <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply </p>
                    
                    </div>
                      <div class="text-wrap ">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5 bottom">Location</h2>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </a>
                          <a href="">
                          <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        </a>
                        
                    </div>
                </div>
                <!-- <div class="wrap">
                    <div class="ico-wrap">
                   <div class="card-image">
<img src="https://dev.gazingtechnosoft.com/jatin/property/public/property_img/compress//16425752410.jpg">
</div>   
                    </div>
                    <div class="text-wrap vcenter">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">Mohan kumar</h2>
                        <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply </p>
                         <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply dummy </p>
                          <p class="mbr-fonts-style text1 mbr-text display-6">Lorem Ipsum is simply </p>
                    
                    </div>
                      <div class="text-wrap ">
                        <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5 bottom">Location</h2>
                        <a href="">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                        </a>
                          <a href="">
                          <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        </a>
                        
                    </div>
                </div> -->
            </div>
          
         
           

            

            
        </div>

</div>

</section>


<section class="services section-bg why-choose" id="services">
            <div class="container">
              <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="section-title section-header  left-text">
                        <h2>why-choose us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="box ">
                            <!-- <div class="icon" style="background: #000;">
                             <i class="fa fa-briefcase service-icon" style="color: #c59c35;"></i>
                             </div>-->
                            <h4 class="title">
                                <a href="javascript:void()" class="title-text"><span><i class="fa fa-heart" aria-hidden="true"></i></span> Properties listed for you </a>
                            </h4>
                              <!--<a href="javascript:void()">Continue last search <i class="fa fa-arrow-right" aria-hidden="true"></i>
                              </a>-->
                        </div> 
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="box box-">
                            <h4 class="title">
                                <a href="javascript:void()" class="title-text">
                                    <span><i class="fa fa-heart" aria-hidden="true"></i></span>Get personalised property recommendations from us
                                </a>
                            </h4>
                              <!--<a href="">See all<i class="fa fa-arrow-right" aria-hidden="true"></i></a>-->
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="box box-">
                        <!-- <div class="icon" style="background: #000;">
                         <i class="fa fa-briefcase service-icon" style="color: #c59c35;"></i>
                         </div>-->
                        <h4 class="title">
                            <a href="javascript:void()" class="title-text"><span><i class="fa fa-heart" aria-hidden="true"></i></span>
                                Properties listed for you
                            </a>
                            </h4>
                          <!--<a href="">See all<i class="fa fa-arrow-right" aria-hidden="true"></i></a>-->
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="box box-">
                        <!-- <div class="icon" style="background: #000;">
                         <i class="fa fa-briefcase service-icon" style="color: #c59c35;"></i>
                         </div>-->
                        <h4 class="title">
                            <a href="javascript:void()" class="title-text"><span><i class="fa fa-heart" aria-hidden="true"></i></span>
                                    Properties listed for you
                            </a>
                        </h4>
                          <!--<a href="">See all<i class="fa fa-arrow-right" aria-hidden="true"></i></a>-->
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
<!--<div class="container">
    <div class="row">
        <div class="col1">
            <br>
        <div class="prop-service__banner__column">

						<div class="prop-service__banner__title">
							<div class="prop-service__banner__title--text2">Introducing</div>
							<div class="prop-service__banner__title--text1"><h1>Property Services</h1></div>
							<div class="prop-service__banner__title--text3">One-stop destination for all your property-related needs</div>
						</div>
					
					<ul class="prop-service__banner__list">
						<li class="prop-service__banner__list--item">
							<a href="" target="_blank" data-icon="home-loans" class="">Home Loans</a>
						</li>
						<li class="prop-service__banner__list--item">
							<a href="" target="_blank" data-icon="pay-rent" class="">Pay Rent</a>
						</li>
						<!-- <li class="prop-service__banner__list--item">
							<a href="" target="_blank" data-icon="" class="">Property Valuation <span class="badge">FREE</span></a>
						</li>
						<li class="prop-service__banner__list--item">
							<a href="" target="_blank" data-icon="rent-agreement" class="">FREE Rent Agreement</a>
						</li>	
						<li class="prop-service__banner__list--item">
							<a href="" target="_blank" data-icon="legal-title-check" class="">Legal Title Check <span class="badge">FREE</span></a>
						</li>
						<li class="prop-service__banner__list--item">
							<a href="" target="_blank" data-icon="tenant-verification" class="active">Tenant Verification</a>
						</li>
						<li class="prop-service__banner__list--item">
							<a href="" target="_blank" data-icon="legal-services">Property Lawyers</a>
						</li>
						<li class="prop-service__banner__list--item">
							<a href="" data-icon="rent-receipt" class="">Generate Rent Receipt</a>
						</li>
						<li class="prop-service__banner__list--item">
							<a href="" target="_blank" data-icon="packers-movers" class="">Packers &amp; Movers</a>
						</li>
						<li class="prop-service__banner__list--item">
							<a href="" target="_blank" data-icon="home-cleaning">Home Cleaning</a>
						</li>
						<li class="prop-service__banner__list--item">
							<a href="" target="_blank" data-icon="property-inspection">Home Inspection</a>
						</li>
						<li class="prop-service__banner__list--item">
							<a href="" target="_blank" data-icon="pest-control" class="">Pest Control</a>
						</li>
						<li class="prop-service__banner__list--item">
							<a href="" target="_blank" data-icon="vastu">Vastu</a>
						</li>
						
						<li class="prop-service__banner__list--item">
							<a href="" target="_blank" data-icon="sanitization" class="">Sanitization</a>
						</li> 
						
					</ul>
				
				
				</div>

        </div>

        <div class="col2">
        <br><br><br>

        <img src="https://cdn.staticmb.com/propertyservicestatic/marketplacestatic/images/prop-service-home/banner/v2/pay-rent.png" alt="">

        </div>
    </div>
    <br><br><br>
    <div>
    <div class="row">
    <div class="col1">
    <h3>Pay your rent using credit card</h3>
    <div class="prop-service__payrent__column">
<div class="prop-service__payrent__title">
<div class="prop-service__payrent__title--text1">It's fast, easy, and the most rewarding way to pay rent.</div>
</div>
<ul class="prop-service__payrent__list">
<li class="prop-service__payrent__list--item">Get upto 45 days of interest-free credit period</li>
<li class="prop-service__payrent__list--item">Ensure safe, hassle-free money transfer</li>
<li class="prop-service__payrent__list--item">Earn cashback, reward points, or air miles*</li>
</ul>
<div class="prop-service__action">
<span class="prop-service__action--btn btn-red xmedium">Pay Rent Now</span>
</div>
</div>
    
    </div>
    <div class="col2">
    <img src="https://cdn.staticmb.com/property/microsite/images/PropServicesImages/banner-pay-rent.jpg" alt="">
    <br><br>
    </div>
    
    </div>
    </div>

    <div class="container-fluid">
	<div class="container">
		<section class="prop-service__section">
			<div class="prop-service__section__title">
				<div class="prop-service__section__title--text1">Nestray</div>
			</div>
			<div class="prop-service__mb-promise">
					
            
            
            
            
            <ul class="prop-service__mb-promise__list">
              <li class="prop-service__mb-promise__list--item">
                <div class="prop-service__mb-promise__list--item--graphic">
                  <span class="svg-ico ico-convenience">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                      <ellipse fill="#403E56" cx="16.2" cy="27" rx="14.8" ry="1"></ellipse>
                      <path fill="#A0626B" d="M28.6,24.6l0.1,1.1L28,25.8l0.1-1.3L28.6,24.6z M24.2,10.6c0,0,0.1,1.3,0.1,1.3c0,0-0.7,3.2-0.7,3.2
                        s-1,1.8,0,1.7c1,0,0.7-1.7,0.7-1.7l1-2.7l-0.4-1.9H24.2z M25.8,24.6l-0.1,1.1l0.8,0.1l-0.1-1.3L25.8,24.6z"></path>
                      <path fill="#302E41" d="M24.5,15.2l-0.2,0.3c0,0-0.1,1.4,0,1.9c0.1,0.5,0.4,2.6,0.4,2.7s0,0.2,0,0.3c0,0-0.2,0-0.1,0.1
                        c0.1,0.1,0.1,0.4,0.1,0.4v0.2l0.6,3.4c0,0-0.4,0.4-0.1,0.4c0.3,0,1.3,0,1.3-0.5l-0.1,0c0,0-0.1-3.1-0.1-3.2c0-0.1,0-0.4,0-0.4
                        s-0.1-0.1,0-0.2c0.1,0,0.1-0.4,0.1-0.4l0.4-2.8c0,0,0.4,1.9,0.6,2.1c0.2,0.2,0.2,0.7,0.2,0.7l0.2,4.1c0,0-0.2,0.5,0,0.6
                        c0.2,0.1,1,0.4,1,0c0-0.5,0.3-4.5,0.3-4.7s0-0.3,0-0.4c0-0.1,0-0.1,0-0.1c0,0-0.1-0.1-0.1-0.2V17c0,0,0-0.5,0.1-0.6
                        c0-0.1,0-0.2,0-0.3c0-0.1-0.1-0.6-0.1-0.6L26.9,15C26.9,15,24.5,15.2,24.5,15.2z M26.3,25.6c0,0,0.2-0.2-0.1-0.2
                        c-0.2,0-0.4,0.1-0.6,0.1l-0.2,0.9c0,0-1,0.8,0.1,0.7c1.1-0.1,1,0,1,0s0.3-0.1,0.4-0.2c0-0.1-0.1-1.5-0.1-1.5S26.6,25.8,26.3,25.6
                        L26.3,25.6z M28.1,25.6c0,0-0.3-0.2,0.1-0.2c0.2,0,0.4,0.1,0.7,0.1l0.3,0.9c0,0,1,0.8-0.1,0.7c-1.2-0.1-1.1,0-1.1,0
                        s-0.4-0.1-0.4-0.2c-0.1-0.1,0.3-1.5,0.3-1.5S27.8,25.8,28.1,25.6L28.1,25.6z"></path>
                      <circle fill="#A0626B" cx="25.1" cy="6" r="1.1"></circle>
                      <path fill="#A0626B" d="M24.7,6.7c0,0,0.2,0.9,0.2,1.1s0.8,0.6,0.8,0.6l0.9-1.1c0,0-0.6-0.8-0.6-1C26.1,6.2,24.7,6.7,24.7,6.7z"></path>
                      <path fill="#D1CDE1" d="M25.4,8.1c0,0-0.4-0.1-0.5-0.3c0,0-1.3,1.2-1.3,1.5l1,1.8c0,0,0,0.6,0.1,0.7c0.1,0,0,0,0,0.2
                        c0,0.2-0.3,1.4-0.2,1.6c0.1,0.2,0.2,0,0.1,0.3c-0.1,0.3-0.3,1.7-0.3,1.7s0.8-0.3,2,0.2c1.2,0.5,2.6-0.2,2.6-0.2s-0.4-0.8-0.3-1.1
                        c0.1-0.3-0.2-0.8-0.2-0.8l-0.2-4.2c0,0,0.3-1.9,0.1-2l-0.5-0.2l-1.5-0.2C26.3,7.2,26,8.1,25.4,8.1L25.4,8.1z"></path>
                      <path fill="#D1CDE1" d="M24.2,8.9l-0.5,0.3c0,0-0.2,0.7,0,1C23.9,10.5,24,11,24,11l0.9-0.1L24.2,8.9z"></path>
                      <path fill="#302E41" d="M24.2,4.6L24,4.6c0,0,0.5-0.5,1.1-0.4L24.9,4c0,0,0.4-0.2,0.8,0.3C26,4.4,26.2,4.7,26.3,5h0.2l-0.1,0.2
                        l0.3,0.2l-0.4,0c0,0.2,0,0.3,0,0.5l0,0.2c0,0-0.4-0.6-0.4-0.6v0.2c0,0-0.2-0.2-0.2-0.3l-0.1,0.1l-0.1-0.2l-0.7,0.2L25,5.2l-0.5,0.1
                        l0.2-0.2c0,0-0.5,0.3-0.5,0.5c0,0.2-0.3,0.5-0.3,0.5l-0.1-0.2C23.8,5.8,23.6,4.9,24.2,4.6z"></path>
                      <path fill="#F3F3F3" d="M6.1,14.2h18.4v12.7H6.1V14.2z"></path>
                      <path fill="#009782" d="M7.8,18.8h4.6v8.2H7.8V18.8z"></path>
                      <path fill="#F3F3F3" d="M8.6,19.3h1.3v1.1H8.6V19.3z M10.3,19.3h1.3v1.1h-1.3V19.3z M8.6,20.8h1.3V22H8.6V20.8z M10.3,20.8h1.3V22
                        h-1.3V20.8z"></path>
                      <circle fill="#6466AF" cx="11.8" cy="23.5" r="0.4"></circle>
                      <path fill="#009782" d="M13.9,18.2H23v7.6h-9.1V18.2z"></path>
                      <path fill="#303030" d="M26.4,16.3H4.2l1.5-3L6,12.6l0.4-0.9L6.8,11l0.4-0.8h17.5l0.2,0.8l0.2,0.7l0.3,0.9l0.2,0.7L26.4,16.3z"></path>
                      <path fill="#F3F3F3" d="M13.9,23.3H23v0.2h-9.1V23.3z M18.3,18h0.2v1.9h-0.2V18z"></path>
                      <circle fill="#F3F3F3" cx="18.4" cy="19.8" r="0.3"></circle>
                      <path fill="#A0626B" d="M27.6,9.4c0,0-0.3,0.7-0.2,1.3c0,0.1,0.1,0.2,0.1,0.3l-3.3,1.5c0,0-1.5,0.1-1.1,0.8c0.4,0.6,1.7-0.3,1.7-0.3
                        s3.5-0.5,3.8-1c0.3-0.5,0.5-2.6,0.5-2.6L27.6,9.4z"></path>
                      <path fill="#D1CDE1" d="M27.7,7.6h0.7c0,0,0.5,0.1,0.7,1c0.1,0.9,0.3,1.1,0.1,1.1c-0.1,0-1.8,0-1.8-0.1C27.4,9.5,27.7,7.6,27.7,7.6z
                        "></path>
                      <circle fill="#D8262A" cx="4.6" cy="17.6" r="3.6"></circle>
                      <path fill="#F3F3F3" d="M4.3,19.5v-0.4c-0.2,0-0.5-0.1-0.6-0.2l0.1-0.3c0.2,0.1,0.4,0.2,0.6,0.2c0.3,0,0.5-0.2,0.5-0.4
                        c0-0.2-0.2-0.4-0.5-0.5c-0.4-0.2-0.7-0.4-0.7-0.8c0-0.4,0.2-0.6,0.6-0.7v-0.4h0.3v0.4c0.2,0,0.4,0.1,0.5,0.2L5,16.8
                        c-0.2-0.1-0.3-0.2-0.5-0.1C4.2,16.6,4,16.8,4,17c0,0.2,0.2,0.3,0.5,0.5c0.4,0.2,0.6,0.4,0.6,0.8c0,0.3-0.2,0.7-0.6,0.7v0.5
                        C4.5,19.5,4.3,19.5,4.3,19.5z"></path>
                      </svg>
                  </span>
                </div>
                <div class="prop-service__mb-promise__list--item__content">
                  <div class="prop-service__mb-promise__list--item--title">Convenience</div>
                  <div class="prop-service__mb-promise__list--item--text">One-stop destination for all<br> property-related services</div>
                </div>
              </li>
              <li class="prop-service__mb-promise__list--item">
                <div class="prop-service__mb-promise__list--item--graphic">
                  <span class="svg-ico ico-trusted-service-partners">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                      <linearGradient gradientUnits="userSpaceOnUse" x1="0.9396" y1="32.8341" x2="0.9396" y2="33.0354" gradientTransform="matrix(149.0001 0 0 -225.9995 -124.0001 7466.9844)">
                        <stop offset="0" style="stop-color:#818181;stop-opacity:0.25"></stop>
                        <stop offset="0.54" style="stop-color:#818181;stop-opacity:0.12"></stop>
                        <stop offset="1" style="stop-color:#818181;stop-opacity:0.1"></stop>
                      </linearGradient>
                      <path fill="url(#SVGID_1_)" d="M31,17.9c-0.2-1.5-0.8-2.9-0.8-2.9l0.1-0.5c0,0,0-0.2,0-0.6c0-0.2,0-0.5,0.1-0.7c0.1-0.4-0.2-1-0.2-1
                        s0-1-0.3-1.5c-0.3-0.5-2.3-1.3-2.3-1.3S27.3,9.2,27.2,9l0,0c-0.1-0.2-0.3-0.4-0.5-0.6c-0.1-0.1-0.2-0.2-0.3-0.2
                        c0-0.1-0.1-0.3-0.1-0.4c0,0,0,0,0.1,0c0.1,0,0.2,0,0.3,0c0.2,0,0.3-0.2,0.4-0.4c0.5-0.8,1-1.7,1.1-2.6c0-0.2,0-0.4,0-0.6
                        C28,4,28,3.9,27.9,3.8c-0.1-0.3-0.3-0.5-0.5-0.8C27,2.6,26.5,2.4,26,2.2c-0.6-0.2-1.2-0.2-1.8-0.1c-0.2,0-0.3,0-0.5,0.1
                        c-0.2,0-0.4,0-0.6,0l-1-0.1l0,0l-0.2,0c-0.1,0.1,0,0.3,0.1,0.4c0.1,0.1,0.2,0.3,0.2,0.4c0,0.1-0.1,0.3-0.2,0.4
                        C22,3.4,21.9,3.6,22,3.7c0,0,0,0,0,0c0.1,0.1,0.2,0.1,0.4,0.1h0c-0.3,0.4-0.5,1-0.5,1.5c0,1,0.5,1.8,1.4,2.3c0,0.1,0,0.1,0,0.2
                        c0.2,0.5,0.2,1.1,0.2,1.7l0,0l0,0c0,0-1.2,0.8-1.6,1c-0.4,0.2-0.7,0.9-0.7,1.1c0,0.2-0.6,3.2-0.6,3.2c-0.1,0.3-0.2,0.6-0.3,0.9
                        l-0.7,0.6c0,0-1.5,0.1-1.9,0l0,0.1c-0.4-0.1-0.8-0.1-1.1-0.2c-0.2,0-0.4,0-0.6,0.1l0,0l0,0c-0.2,0-0.4,0.1-0.7,0.2c0,0,0,0-0.1,0
                        l0-0.1l-1.6-0.1l-0.8-0.2c0,0-0.3-0.2-0.5-0.2c-0.2,0-0.5-0.2-0.5-0.2c-0.1-0.1-0.2-0.1-0.3-0.2l0-0.3c0,0-0.6-2.5-1.1-4
                        c-0.3-1-0.8-1.5-1-1.7C9.3,9.6,9.2,9.4,9.2,9.4C9.1,9.2,8.8,8.8,8.8,8.8c0,0,0,0,0,0c0,0,0,0,0,0c-0.1-0.7-0.2-1.5,0-2.2
                        c0.6-0.5,0.9-1.2,0.9-1.9v0v0C9.6,4,9.4,3.5,9,3l0,0c0,0,0,0,0,0c0.1-0.1,0.2-0.3,0.1-0.4c0-0.1-0.2-0.3-0.2-0.4
                        c0-0.1-0.1-0.2-0.1-0.3c0-0.2-0.1-0.3-0.2-0.4l0,0C8.3,1.1,7.8,0.9,7.3,1C7,1.1,6.7,1.2,6.3,1.3c-0.3,0-0.5,0-0.8,0
                        c-0.2,0-0.5,0.1-0.7,0.2c-0.1,0-0.1,0.1-0.1,0.1c0,0.1-0.1,0.1-0.1,0.2C4.6,2.1,4.3,2.4,4.1,2.6c-0.2,0.3-0.4,0.7-0.4,1
                        c0,0.1,0,0.2,0,0.3c0,0.1,0,0.1,0.1,0.2c0,0.2-0.1,0.3-0.1,0.5c-0.1,0.2,0,0.4,0.1,0.6C4.1,6,5.1,6.2,5.3,6.9C5.4,7,5.6,7,5.8,7.1
                        c0,0.1,0,0.1,0,0.2c0,0,0,0,0,0C5.5,7.6,5.5,8.1,5.5,8.1l0,0C5.3,8.2,5,8.5,4.6,8.7C4.2,9,3.5,10,3,10.2c-0.5,0.3-0.9,2-0.8,2.7
                        c0.1,0.6,0.5,2.4,0.4,3.1c-0.2,0.6,0.3,3.6,0.3,3.6c0.3,0.1,0.6,0.1,0.8,0.2l0,0.1l0,0.4c0,0-0.8,2.8-0.5,4.9
                        c0.3,2.1-0.1,2.4-0.1,2.4s0.1,1-0.1,1.3c-0.2,0.3-0.3,1.1-0.3,1.1s0,1.6,0,2.1c0,0.5,0.1,1.3-0.1,1.5c-0.2,0.2-0.5,1.5-0.4,1.9
                        c0,0.4-0.6,1.3-0.2,2.5C2.2,39.1,1,39.1,1,39.1s0.2,1.8,0.5,2.3l0,0.1c0,0,0,0.1,0,0.1C1.4,42,1.2,42.8,1.3,43
                        c0.2,0.3,0.3,0.2,0.3,0.2l0.1,1.2c0,0,1.4,1.1,2.4,1.1c1,0,0.8-1.1,0.8-1.1L4,42.1L4,42l1-1.9c0,0,0.3-0.8,0.3-1.1
                        c0.1-0.3,0.4-1.3,0.4-1.3s0.9-2.2,0.9-2.5c0-0.3,0.1-1.7,0.3-2c0.2-0.3,0.7-1.9,0.7-1.9l0,0c0.2,0.2,0.2,0.4,0.2,0.7
                        c-0.1,0.4,0,1.3,0,1.3s0,0.7-0.1,1.1s-0.1,3.4,0,4.2c0.1,0.6,0.1,1.7,0.1,2.1c-0.1,0.4-0.2,1,0,1c0.3,0.1,1.8,0.1,1.8,0.1
                        s0.6-0.2,1.5,0.6c0.9,0.8,3.5-0.2,3.5-0.2s0.8-0.2-0.8-0.9c-1.1-0.4-1.8-0.7-2.3-1.1c0,0,0,0,0-0.1c0,0-0.7-0.6-0.1-1.7
                        c0.5-1.1,0.5-2,0.5-2l0.1-3.7l-0.3-4.9l-0.2-5.2l0,0c0,1,0.2,3.2,1.2,2.8c1.2-0.6,0.2-2,0.2-2l-0.5-1.1l0.2-0.1l-0.6-2
                        c-0.1-0.4-0.1-0.8,0-1.2c0-0.2,0-0.5,0-0.7c0.8-0.1,1.6-0.3,1.7-0.3c0.2,0,1.1,0,1.4,0c-0.1,0.1-0.2,0.2-0.2,0.2l1.5,1
                        c0,0,0.5-0.3,0.6-0.6c0.1,0,0.2-0.1,0.3-0.1c0,0.3,0.1,0.7,0.4,0.7c0.1,0,0.2,0,0.2,0l2.4-0.5L20,20.1l0.1,0.3
                        c-0.1,1.1-0.2,2.2-0.2,3.2l0,0.2l0,0c-0.1,1.6-0.2,2.7-0.2,2.7c0.1-0.3,0.3-0.5,0.6-0.6l0,2.3c0,0,0.1,3.6,0.1,4.1
                        c0,0.5,0,1.6,0,1.6s0.3,1.4,0.4,1.8c0.2,0.4,0.3,2.5,0.3,2.5s0.4,0.6,0.2,0.8c-0.2,0.2,0.6,0.7,0.6,0.7s-0.5,0.6-0.5,1.1
                        c0,0,0,0.1,0.1,0.2c0,0-0.1,0-0.1,0.1c-0.2,0.1-0.5,0.3-1,0.2c-1.3-0.1-2.3,1.1-1.4,1.4s3.3,0.3,3.3,0.3s0.7-0.5,1.3-0.3
                        c0,0.5,0,0.9,0,1l0,0c-0.3,0.3-1,0.8-1.7,1.1c-0.9,0.3-1.1,1.6,0.1,1.8c1.2,0.2,3-0.2,3-0.2s0.9-0.7,1.6-0.8
                        c0.7-0.1,1.3-0.5,1.2-0.9c-0.1-0.3-0.3-0.9-0.4-1.4c0,0,0-0.1,0-0.1c0,0,0-0.1,0.1-0.1c0,0-0.4-1.9-0.1-2.3c0.3-0.5,0.1-5.1,0.1-5.1
                        s-0.5-1.2-0.2-1.9c0.3-0.7-0.4-1.7-0.4-1.7s0.1-2,0.3-3.2l0-0.1c0.3-0.1,0.6-0.2,0.9-0.4c0,0,0.2-2.6,0.3-3.1c0-0.1,0-0.1,0-0.3
                        l0.1-0.4l0.1-0.5l0.3-1.6l0.6-0.7l1.4-1.5C30.8,20.2,31.1,19.4,31,17.9L31,17.9z M8.7,8.8L8.7,8.8C8.7,8.8,8.7,8.8,8.7,8.8
                        C8.7,8.8,8.7,8.8,8.7,8.8L8.7,8.8z M23,10.6l-0.1,0.1l0.2-0.2l-0.3,0.3L23,10.6C22.9,10.7,23,10.6,23,10.6z M21.6,13.5
                        c-0.1,0.1-0.1,0.3-0.2,0.5l0.1-0.3L21.6,13.5z"></path>
                      <path fill="#068996" d="M17.1,18.2c0,0-0.2,1.3,0.4,1.3c0.6,0,1-1,1-1l-0.2-0.8L17.1,18.2z"></path>
                      <path fill="#FCD6D6" d="M12.3,22.1l0.7,1.4c0,0,1.1,1.4-0.2,2c-1.2,0.5-1.2-3.1-1.2-3.1L12.3,22.1z"></path>
                      <path fill="#DCE5F1" d="M9.5,9.9c0,0,0.8,0.4,1.2,1.9c0.5,1.5,1.1,4,1.1,4s0.4,2.9,0.3,3.6c0,0.4,0,0.8,0,1.2l0.6,2l-1.2,0.4
                        l-1.8-7.1L9.5,9.9z"></path>
                      <path opacity="5.000000e-002" fill="#010101" enable-background="new    " d="M9.5,9.9c0,0,0.8,0.4,1.2,1.9c0.5,1.5,1.1,4,1.1,4
                        s0.4,2.9,0.3,3.6c0,0.4,0,0.8,0,1.2l0.6,2l-1.2,0.4l-1.8-7.1L9.5,9.9z"></path>
                      <path fill="#303030" d="M11.5,38.5c-0.5,1.1,0.1,1.7,0.1,1.7c-0.6,1.5-2.8,0.9-3.4,0.7C8.1,41,8,41,8,41s0-1.5-0.1-2.3
                        c-0.2-0.7-0.1-3.8,0-4.2C7.9,34.1,8,33.4,8,33.4s-0.1-0.9,0-1.3c0.1-0.2,0-0.5-0.2-0.7l0,0c0,0-0.5,1.7-0.7,2
                        c-0.2,0.3-0.2,1.7-0.3,2c0,0.3-0.9,2.5-0.9,2.5s-0.4,1-0.4,1.3c-0.1,0.3-0.3,1.1-0.3,1.1l-1.1,2.1c-0.5,0.2-1.8,0-1.8,0
                        s-0.2-0.3-0.6-0.8c-0.3-0.5-0.5-2.3-0.5-2.3s1.2,0,0.9-1.2C2,36.9,2.6,36,2.5,35.6c0-0.4,0.3-1.7,0.4-1.9c0.2-0.2,0.1-1,0.1-1.5
                        C3,31.7,3,30,3,30s0-0.7,0.3-1.1c0.2-0.3,0.1-1.3,0.1-1.3s0.4-0.2,0.1-2.4c-0.3-2.2,0.5-5,0.5-5l0-0.4l0-0.6c0,0,6.3-0.4,6.8,0.1
                        c0.1,0.1,0.2,0.3,0.3,0.5c0.2,0.4,0.3,0.8,0.4,1.2l0.3,6.8l0.3,5L12,36.5C12,36.5,12,37.4,11.5,38.5L11.5,38.5z"></path>
                      <path opacity="0.1" fill="#010101" enable-background="new    " d="M9.5,25.4L8.8,39.8L8,41.1c-0.1,0-0.2,0-0.2,0s0-1.5-0.1-2.3
                        c-0.2-0.7-0.1-3.8,0-4.2c0.1-0.4,0.1-1.1,0.1-1.1s-0.1-0.9,0-1.3c0.1-0.2,0-0.5-0.2-0.7l0-0.1L9.5,25.4z"></path>
                      <path fill="#FCD6D6" d="M5.8,6.2c0,0,0.5,1.3,0.3,2c-0.3,0.7,3.1,1.8,3.1,1.8s-1-2.6,0-4C10.1,4.6,5.8,6.2,5.8,6.2z"></path>
                      <path fill="#3A3939" d="M20.1,23.6l0,4.9c0,0,0.1,3.7,0.1,4.2c0,0.5,0,1.6,0,1.6s0.2,1.4,0.4,1.8c0.1,0.4,0.3,2.5,0.3,2.5
                        s0.3,0.6,0.2,0.8c-0.1,0.2,0.6,0.7,0.6,0.7s-0.5,0.6-0.5,1.1c0,0.4,3.7,1,3.7,1l-1.5-15l-1.2-3.8L20.1,23.6z"></path>
                      <path fill="#303030" d="M27.1,43.3c-1.1,2.7-3.7,0.7-3.7,0.7s-0.1-1.4,0.1-2.1s-0.2-2.6-0.2-2.6s-0.2-1.7-0.4-2.1
                        c-0.2-0.4-0.2-1.2-0.2-1.3s0.1-0.6-0.1-1c-0.2-0.4-0.2-1.3-0.2-1.3s0-1.3-0.2-2L21.7,29l-0.9-5.3l0.3-0.1l5.3-0.9c0,0,1,5,0.7,5.5
                        c-0.1,0.1-0.1,0.4-0.2,0.7c-0.2,1.1-0.3,3.2-0.3,3.2s0.7,1,0.4,1.7c-0.3,0.7,0.2,1.9,0.2,1.9s0.2,4.7-0.1,5.1
                        C26.7,41.4,27.1,43.3,27.1,43.3L27.1,43.3z"></path>
                      <path fill="#D38690" d="M26.4,9.1c0,0-4.7,3.3-3.6,1.7c0.6-0.9,0.5-2,0.2-2.9c-0.1-0.4-0.3-0.9-0.5-1.3c0,0,4-1.7,3.4-0.2
                        c-0.1,0.4-0.2,0.7-0.2,1.1C25.9,8.1,26,8.7,26.4,9.1z M18,16.8c0,0-2-0.6-2.3,0c-0.3,0.6,0.1,1.9,0.7,2.1c0.6,0.2,2-0.7,2-0.7
                        L18,16.8z"></path>
                      <path fill="#04ACBC" d="M20.3,15.9l-0.8,0.8c0,0-1.4,0.1-1.8,0c0,0,0.4,2.5-0.2,2.8l3.2-0.7L20.3,15.9z"></path>
                      <path opacity="0.1" fill="#010101" enable-background="new    " d="M9.7,4.8c0,1.4-1.1,2.5-2.4,2.5C6,6.6,4.8,6.1,4.8,4.8
                        C4.8,3.9,5.2,3,6,2.6c0.8-0.5,1.7-0.5,2.5,0C9.2,3,9.7,3.9,9.7,4.8L9.7,4.8z"></path>
                      <path fill="#FCD6D6" d="M9.7,4.8c0,1.2-0.8,2.2-2,2.4C6.5,7.4,5.4,6.7,5,5.6C4.6,4.5,5,3.3,6.1,2.7s2.3-0.3,3.1,0.6
                        C9.5,3.7,9.7,4.3,9.7,4.8z"></path>
                      <path opacity="0.1" fill="#010101" enable-background="new    " d="M11.1,20c-0.2,0.2-0.5,0.3-0.8,0.4c0,0-1.3-0.2-1.5,0
                        C8.7,20.6,7,20.7,7,20.7s-2.5-0.1-2.8-0.4c-0.1-0.1-0.2-0.2-0.4-0.2l0-0.6c0,0,6.4-0.4,6.9,0.1C10.9,19.7,11,19.8,11.1,20z"></path>
                      <path fill="#DCE5F1" d="M11.5,19.7c-0.1,0.3-1.1,0.7-1.1,0.7s-1.3-0.2-1.5,0c-0.2,0.2-1.8,0.3-1.8,0.3s-2.5-0.1-2.9-0.4
                        C3.9,20,3,19.8,3,19.8s-0.4-3-0.3-3.6c0.2-0.7-0.3-2.4-0.4-3.1c-0.1-0.6,0.3-2.4,0.8-2.7c0.5-0.3,1.1-1.2,1.5-1.5
                        c0.3-0.2,0.7-0.5,0.8-0.6l0,0c0,0,0.1-0.5,0.3-0.8c0.3-0.3,2.7,1.7,2.7,1.7s0,0.2,0.2-0.1c0-0.1,0.4,0.4,0.4,0.6
                        c0,0,1.3,2.3,1.4,2.8c0.1,0.5,0.4,2.1,0.5,2.4c0,0.1,0,0.4,0.1,0.9c0,0.1,0,0.2,0,0.3c0,0.8,0.1,1.8,0.1,2.5c0,0.1,0,0.2,0,0.2
                        C11.5,19.1,11.5,19.4,11.5,19.7L11.5,19.7z"></path>
                      <path opacity="0.1" fill="#010101" enable-background="new    " d="M3,13.5c0,0,0.9,1.2,1.2,1.2S3,13.5,3,13.5z M5,15.9
                        c0,0-1.6,1.7-1.4,2C3.9,18.2,5,15.9,5,15.9z M3.8,19.1c0,0,1.7-1.9,1.8-2.6L3.8,19.1z M6,19.3c0,0,2-1,2.2-1.9
                        C8.4,16.6,6,19.3,6,19.3z M8.5,9.3L8.2,9.9l0.5,0.2l0.4,1.3c0,0,1.2,2.5,1.2,3.8c0,1.3,0.2,3.3,0.2,3.3l0.7-0.1l-0.3-3.8
                        c-0.1-0.6-0.2-1.2-0.4-1.7c-0.6-1.3-1.6-3.8-1.7-3.8c-0.1,0,0,0,0,0L8.5,9.3L8.5,9.3z"></path>
                      <path fill="#585A8A" d="M8.5,9.1L8.2,9.7L8.7,10l0.4,1.3c0,0,1.2,2.5,1.2,3.8c0,1.3,0.2,3.3,0.2,3.3l0.7-0.1l-0.3-3.8
                        c-0.1-0.6-0.2-1.2-0.4-1.7c-0.6-1.3-1.6-3.8-1.7-3.8c-0.1,0,0,0,0,0S8.5,9.1,8.5,9.1z"></path>
                      <path fill="#FCD6D6" d="M16.6,18.9c-0.4,0-1.2-0.5-1.6-0.7l-0.1-0.1l0-1.3c0.1-0.1,0.2-0.1,0.3-0.1c0.5-0.2,1.4-0.5,1.9,0.4
                        C17.7,18.3,17.1,18.9,16.6,18.9z"></path>
                      <path opacity="0.1" fill="#010101" enable-background="new    " d="M9.1,3.1c0,0-0.1,0-0.1,0C8.6,3.2,8.3,3,8.1,3.1
                        C7.9,3.2,7.9,3.4,7.9,3.6c0,0.3-0.1,0.6-0.1,0.9c0,0.1,0,0.2-0.1,0.3C7.6,5.1,7.2,5.3,6.9,5.3c-0.1,0-0.2,0-0.3-0.1
                        C6.5,5.1,6.5,5,6.5,5C6.1,4.6,5.9,5.4,6,5.7C6.2,6,6.8,6.4,6.6,6.9C6.5,6.9,6.4,7,6.4,7c-1-0.3-1.7-1.2-1.7-2.3c0-1.1,0.6-2,1.6-2.4
                        C7.3,2,8.4,2.3,9.1,3.1L9.1,3.1z"></path>
                      <path fill="#363045" d="M6.5,5.1c0.1,0,0.1,0.1,0.1,0.2C6.7,5.3,6.9,5.4,7,5.4c0.3,0,0.6-0.1,0.7-0.4c0-0.1,0.1-0.2,0.1-0.3l0.1-0.9
                        c0-0.2,0.1-0.4,0.2-0.5c0.2-0.2,0.6,0.1,0.8,0C9.2,3.2,9.3,3,9.2,2.8c0-0.1-0.1-0.3-0.2-0.4C9,2.3,9,2.2,9,2.1
                        C8.8,1.5,8.1,1.1,7.5,1.2c-0.3,0.1-0.6,0.2-1,0.3c-0.2,0-0.5,0-0.7,0c-0.2,0-0.4,0.1-0.6,0.2C5.1,1.7,5.1,1.8,5,1.8C5,1.9,5,2,5,2
                        C4.9,2.3,4.6,2.6,4.4,2.8c-0.2,0.3-0.3,0.7-0.4,1c0,0.1,0,0.2,0,0.3c0,0.1,0,0.1,0.1,0.2c0,0.2,0,0.3-0.1,0.5C4,5,4,5.3,4.1,5.5
                        c0.3,0.7,1.3,0.9,1.5,1.6c0.2,0.1,0.4,0.1,0.6,0.2c0.2,0,0.4-0.1,0.5-0.3c0.2-0.5-0.3-0.8-0.5-1.2C6,5.6,6.1,4.8,6.5,5.1L6.5,5.1z"></path>
                      <path opacity="0.1" fill="#010101" enable-background="new    " d="M26.1,6.5C26,6.8,25.9,7.2,26,7.6c-0.1,0.1-0.2-0.2-0.4-0.1
                        c-0.4,0.2-0.8,0.8-1.3,0.8c-0.4,0-0.8-0.1-1.1-0.3c-0.1-0.4-0.3-0.9-0.5-1.3C22.7,6.7,26.6,4.9,26.1,6.5z"></path>
                      <path fill="#D38690" d="M27,5.4C27,6.9,25.8,8,24.5,8s-2.5-1.2-2.5-2.6s1.1-2.6,2.5-2.6c0.7,0,1.3,0.3,1.8,0.8
                        C26.7,4.1,27,4.7,27,5.4z"></path>
                      <path fill="#F1F3F6" d="M26.8,9.7c0,0-0.5,0.5-0.6,0.6c-0.1,0-1.5,6-1.5,6.1c0,0.1-1.7,5.5-1.7,5.5l-2.7,1.3l0.2-6.6l2-5.4
                        c0,0,0.6-0.7,0.8-1c0.2-0.3,2.7-1.9,2.7-1.9l0.4,0.9L26.8,9.7z"></path>
                      <path opacity="0.1" fill="#010101" enable-background="new    " d="M26.6,9.4l-3.2,2.3l-0.1-1.3c0.2-0.3,2.8-2,2.8-2L26.6,9.4z"></path>
                      <path fill="#F1F3F6" d="M26.6,9.2l-3.2,2.3l0-1.3c0.2-0.3,2.8-2,2.8-2L26.6,9.2z"></path>
                      <path fill="#1CBFD2" d="M23.2,9.7l0.1,0.5l-0.7,0.7L23.2,9.7c0,0-1.2,0.8-1.5,1c-0.3,0.2-0.7,0.9-0.7,1.1c0,0.2-0.6,3.2-0.6,3.2
                        s-0.4,1.1-0.3,1.4c0.1,0.3-0.6,10.2-0.6,10.2c0.2-0.4,0.6-0.7,1-0.8L20.2,20c0,0,0.3-3.9,0.3-3.9l0.7-2.3L23.2,9.7z"></path>
                      <path opacity="0.1" fill="#010101" enable-background="new    " d="M23.3,10.3l-0.1,1.1c0,0-0.7,2.3-0.9,2.7c-0.2,0.4-1,2.6-1,2.6
                        L21,20.6l-0.7,0.3l-0.3-0.7l0.6-3.8c0,0,1.1-3.2,1.2-3.5l0.8-1.7L23.3,10.3z"></path>
                      <path fill="#D8262A" d="M23.3,10.3l-0.1,1.1c0,0-0.7,2.3-0.9,2.7c-0.2,0.4-1,2.6-1,2.6L21,20.6l-0.7,0.3l-0.4-0.7l0.6-3.8
                        c0,0,1.1-3.2,1.2-3.5l0.8-1.7L23.3,10.3z"></path>
                      <path fill="#D38690" d="M14.7,18.3l1.4,1c0,0,1-0.6,0.4-1c-0.6-0.4-1.1-0.4-1.3-0.4S14.7,18.3,14.7,18.3z M15.8,16.6
                        c-0.1,0-0.1,0.1-0.1,0.2c0,0.3,0,1.1,0.3,0.7c0.3-0.4,0.3-0.8,0.7-0.6c0.3,0.2,0.6,0.4,0.8,0.7l-0.1-1
                        C17.4,16.8,16.4,16.3,15.8,16.6z"></path>
                      <path opacity="0.1" fill="#010101" enable-background="new    " d="M26.9,28.3c-0.1,0.1-0.1,0.4-0.2,0.7c-2.9,0.9-4.9-1-4.9-1
                        c-0.3-0.9-0.5-1.8-0.6-2.7c-0.1-0.3,0-0.9,0-1.6l5.1-0.9C26.3,22.7,27.2,27.8,26.9,28.3L26.9,28.3z"></path>
                      <path fill="#1CBFD2" d="M30,13.4c-0.1,0.4-0.1,1.3-0.1,1.3l-1.2,5.6c0,0-0.6,4.3-0.7,4.9c-0.1,0.6-0.3,3.1-0.3,3.1
                        c-3.4,1.7-6.1-0.6-6.1-0.6c-0.3-0.9-0.5-1.8-0.6-2.7c-0.2-1,0.3-4.9,0.6-6.7c0.1-0.5,0.1-0.8,0.1-0.8l0.9-3.2c0,0,1.1-2.7,1.5-3.5
                        c0.4-0.8,2-2.6,2-2.6c0.2-0.1,0.5,0.3,0.8,0.7c0.2,0.3,0.3,0.6,0.3,0.6s2,0.9,2.3,1.3c0.3,0.5,0.3,1.4,0.3,1.5
                        C29.8,12.4,30.1,12.9,30,13.4L30,13.4z"></path>
                      <path opacity="0.1" fill="#010101" enable-background="new    " d="M25.3,11.5c0,0,0.2,0.9-0.2,1.1c-0.4,0.3-3.1,5.6-3.3,5.9
                        c0.1-0.5,0.1-0.8,0.1-0.8l0.9-3.2c0,0,1.1-2.7,1.5-3.5c0.4-0.8,2-2.5,2-2.5c0.2-0.1,0.5,0.3,0.8,0.7C26.6,9.9,25.9,11.3,25.3,11.5z"></path>
                      <path fill="#02ABBB" d="M25.3,11.3c0,0,0.1,0.9-0.2,1.1c-0.4,0.3-3.1,5.6-3.3,5.9c0.1-0.5,0.1-0.8,0.1-0.8l0.9-3.2
                        c0,0,1.1-2.7,1.5-3.5c0.4-0.8,2-2.5,2-2.5C26.4,8.1,26.7,8.6,27,9C26.6,9.7,25.9,11.1,25.3,11.3z"></path>
                      <path fill="#6466AF" d="M29.2,19.2l-0.9,4.8v0l-0.1,0.5v0l-0.2,1l-0.9-0.2l-0.4-0.1l-5.6-1.2L20.7,24l-0.9-0.2l0.2-1.2l0.1-0.5
                        l0.7-4.4L29.2,19.2z"></path>
                      <path fill="#D38690" d="M23.9,23.3c0,0-2.2,0.8-1.7,1.7c0.5,0.9,3.6-0.7,3.6-0.7L23.9,23.3z"></path>
                      <path opacity="0.1" fill="#010101" enable-background="new    " d="M26.8,5.6c0,0.9-0.5,1.8-1.3,2.2c-0.1-0.1-0.3-0.2-0.4-0.3
                        C25,7.4,24.9,7.2,25,7c0.1-0.1,0.2-0.2,0.2-0.4c0-0.1,0-0.2,0-0.3c0-0.1-0.1-0.3-0.1-0.4c0-0.1-0.1-0.2-0.2-0.3
                        c-0.1,0-0.2,0.1-0.3,0.1c-0.2,0.2-0.6,0.3-0.8,0.1c-0.2-0.1-0.2-0.6-0.2-0.8c0,0,0-0.1-0.1-0.1c0,0-0.1,0-0.1,0
                        c-0.1,0-0.2-0.1-0.3-0.3c0-0.1,0-0.3,0-0.4c0-0.1-0.1-0.3-0.2-0.3c-0.1,0-0.2-0.1-0.3,0l-0.5,0C22.8,3.2,24,2.8,25,3.1
                        C26.1,3.5,26.8,4.5,26.8,5.6L26.8,5.6L26.8,5.6z"></path>
                      <path fill="#303030" d="M24.8,5.8c0.1-0.1,0.2-0.2,0.3-0.1c0.1,0,0.2,0.2,0.2,0.3l0.1,0.4c0,0.1,0,0.2,0,0.2c0,0.1-0.2,0.2-0.2,0.3
                        c-0.1,0.2,0,0.3,0.1,0.5c0.2,0.2,0.5,0.4,0.8,0.5c0.1,0,0.2,0,0.3,0c0.2,0,0.3-0.2,0.4-0.4c0.5-0.8,1-1.7,1-2.6c0-0.2,0-0.4,0-0.6
                        c0-0.1-0.1-0.3-0.2-0.4c-0.1-0.3-0.3-0.5-0.5-0.7c-0.4-0.4-0.8-0.6-1.3-0.7c-0.6-0.2-1.2-0.2-1.7-0.1c-0.2,0-0.3,0-0.5,0.1
                        c-0.2,0-0.4,0-0.6,0l-1.1-0.1c-0.1,0.1,0,0.3,0.1,0.4C21.9,2.7,22,2.9,22,3c0,0.1-0.1,0.3-0.2,0.4s-0.1,0.3-0.1,0.4
                        c0.1,0.1,0.2,0.1,0.4,0.1l0.6,0c0.1,0,0.2,0,0.3,0c0.1,0.1,0.2,0.2,0.2,0.3c0,0.1,0,0.3,0,0.4c0,0.1,0.1,0.2,0.3,0.2
                        c0,0,0.1,0,0.1,0c0,0,0.1,0.1,0.1,0.1c0,0.2,0,0.7,0.2,0.8C24.2,6,24.6,5.9,24.8,5.8L24.8,5.8z"></path>
                      <path opacity="0.1" fill="#010101" enable-background="new    " d="M28,10.9c-0.6-0.1-1.1,0.3-1.3,0.9c-0.3,0.9-0.8,2.5-0.7,3.1
                        c0.2,0.9,0.4,2.4,0.4,2.4s0.9,0.5,0.5,1.1c-0.5,0.6-0.6,1.3-0.6,1.3s-0.6,0.3-0.7,0.8c-0.1,0.6-1,1.3-1,1.3l-1.3,1.3
                        c0,0,2.2,2.3,2.7,2.4l1.4-1.6l1.6-2.2l1.4-1.5c0,0,0.3-0.8,0.2-2.3c-0.2-1.5-0.8-2.9-0.8-2.9l0-0.5C29.6,14.7,29.7,11.1,28,10.9
                        L28,10.9z"></path>
                      <path fill="#1CBFD2" d="M28.2,10.9c-0.6-0.1-1.1,0.3-1.3,0.9c-0.3,0.9-0.8,2.5-0.7,3.1c0.2,0.9,0.4,2.4,0.4,2.4s0.9,0.5,0.5,1.1
                        c-0.5,0.6-0.6,1.3-0.6,1.3s-0.6,0.3-0.7,0.8c-0.1,0.6-1,1.3-1,1.3l-1.3,1.3c0,0,2.2,2.3,2.7,2.4l1.4-1.6l1.6-2.2l1.4-1.5
                        c0,0,0.3-0.8,0.2-2.3c-0.2-1.5-0.8-2.9-0.8-2.9l0-0.5C29.8,14.7,29.9,11.1,28.2,10.9L28.2,10.9z"></path>
                      <path opacity="0.1" fill="#010101" enable-background="new    " d="M26.8,16.1c0,0,1.5,1.7,2.1,1.4C29.5,17.1,26.8,16.1,26.8,16.1z
                        M27.2,14.7c0.2,0.1,1.4,1.8,2.1,1.6C29.9,16.1,27.2,14.7,27.2,14.7z M27.6,17.5c0,0,0.1,0.9,1.1,0.8C29.7,18.2,27.6,17.5,27.6,17.5
                        z M23.2,9.9l-0.5,1.2l0.6-0.7L23.2,9.9z"></path>
                      <path fill="#F1F3F6" d="M23.2,9.7l-0.5,1.2l0.6-0.7L23.2,9.7z"></path>
                      <path opacity="0.3" fill="#010101" enable-background="new    " d="M21.1,24.4l-0.4-0.1l-0.8-1.4l0.1-0.5L21.1,24.4z M28.2,24
                        l-0.1,0.5v0L27,25.4l-0.4-0.1L28.2,24z"></path>
                      <path opacity="0.1" fill="#010101" enable-background="new    " d="M11.5,18.6c-0.2,0-0.4,0.1-0.6,0.1c-1,0.1-3.4-1.1-3.4-1.1
                        s-3-2.5-3.8-4.8c-0.9-2.3,1-2.7,1-2.7c0.7-0.4,2.2,0.7,2.5,0.9c0.2,0.2,0.4,0.7,0.4,1c0,0.3,0.5,0.7,0.5,0.7s0.9,1.5,1.1,1.7
                        c0.2,0.2,0.3,0.3,0.3,0.6c0.1,0.3,0.7,0.5,0.9,0.5c0.3,0,0.5,0.1,0.5,0.2c0,0.1,0.2,0.2,0.4,0.2C11.4,16.7,11.4,17.9,11.5,18.6z"></path>
                      <path opacity="0.1" fill="#010101" enable-background="new    " d="M11.5,18.6c-0.2,0-0.3,0-0.4,0.1c-1,0.1-3.4-1.1-3.4-1.1
                        s-2.9-2.5-3.8-4.8c-0.8-2.3,1-2.7,1-2.7c0.7-0.4,2.2,0.7,2.4,0.9c0.2,0.2,0.4,0.7,0.4,1c0,0.3,0.5,0.7,0.5,0.7s0.9,1.5,1.1,1.7
                        c0.2,0.2,0.3,0.3,0.3,0.6c0.1,0.3,0.6,0.5,0.9,0.5c0.2,0,0.5,0.1,0.5,0.2c0,0.1,0.1,0.1,0.3,0.2c0,0.1,0,0.2,0,0.3
                        C11.4,16.9,11.4,17.9,11.5,18.6L11.5,18.6z M15.1,16.9l0,1.6H15l-0.1-0.1l0-1.4C15,17,15,16.9,15.1,16.9z"></path>
                      <path fill="#DCE5F1" d="M4.6,10.1c0,0-1.8,0.4-1,2.7c0.8,2.3,3.7,4.8,3.7,4.8s2.4,1.2,3.4,1.1c1-0.1,2.5-0.5,2.7-0.4
                        c0.2,0.1,1.5,0.1,1.5,0.1l0.1-1.6l-1.5-0.1l-0.8-0.2c0,0-0.3-0.2-0.4-0.2c-0.2,0-0.5-0.2-0.5-0.2s-0.3-0.2-0.5-0.2
                        c-0.2,0-0.6-0.1-0.6-0.2s-0.3-0.2-0.5-0.2c-0.2,0-0.8-0.2-0.9-0.5c-0.1-0.3-0.1-0.4-0.3-0.6c-0.2-0.2-1.1-1.7-1.1-1.7
                        S7.4,12.3,7.4,12c0-0.3-0.2-0.8-0.4-1C6.8,10.9,5.3,9.7,4.6,10.1L4.6,10.1z"></path>
                      <path opacity="0.1" fill="#010101" enable-background="new    " d="M9.5,15.5c0,0-0.8,0.7-0.6,0.8L9.5,15.5z M10.3,16.1
                        c0,0-1,0.8-0.8,0.8C9.8,17,10.3,16.1,10.3,16.1z M8.4,17.1c0.1,0.1,2.2,1.2,3,1.2L8.4,17.1z M8.9,9.2c0,0-0.4,1.2-0.5,1.2
                        c-0.1,0-1.9-1.5-2.7-2.1l0,0c0,0,0.1-0.5,0.3-0.8C6.3,7.2,8.9,9.2,8.9,9.2z"></path>
                      <path fill="#DCE5F1" d="M8.9,9.2c0,0-0.4,1.2-0.5,1.2c-0.1,0-1.9-1.5-2.7-2.1l0,0c0,0,0.1-0.5,0.3-0.8C6.3,7.2,8.9,9.2,8.9,9.2z"></path>
                      <g opacity="0.15">
                        <path fill="#010101" d="M4,5.5C4.3,6,4.9,6.2,5.3,6.7C5.1,6.1,4.4,5.9,4,5.5z M6.4,6.7C6.3,6.8,6.1,6.9,5.9,6.9
                          c-0.2,0-0.3-0.1-0.5-0.1C5.4,6.9,5.5,7,5.5,7.1c0.2,0.1,0.4,0.1,0.6,0.2c0.2,0,0.4-0.1,0.5-0.3c0.1-0.3,0-0.5-0.2-0.8
                          C6.4,6.4,6.4,6.5,6.4,6.7z M9.2,2.8C9.2,2.7,9,2.5,9,2.4c0-0.1-0.1-0.2-0.1-0.3c0-0.2-0.1-0.3-0.2-0.4c0,0,0,0.1,0,0.1
                          c0,0.1,0,0.2,0.1,0.3C8.8,2.2,9,2.3,9,2.5C9,2.7,8.9,2.9,8.7,3C8.4,3,8.1,2.8,7.8,3C7.7,3,7.7,3.3,7.6,3.4c0,0.3-0.1,0.6-0.1,0.9
                          c0,0.1,0,0.2-0.1,0.3C7.4,4.9,7,5.1,6.7,5.1C6.6,5.1,6.5,5,6.4,5c0-0.1-0.1-0.1-0.1-0.2C5.9,4.5,5.8,5.3,5.9,5.5
                          C5.9,5.6,6,5.7,6.1,5.8c-0.1-0.3,0-1,0.4-0.7c0,0.1,0.1,0.1,0.1,0.2c0.1,0.1,0.2,0.1,0.3,0.1c0.3,0,0.6-0.1,0.7-0.4
                          c0-0.1,0.1-0.2,0.1-0.3c0-0.3,0.1-0.6,0.1-0.9c0-0.2,0.1-0.4,0.2-0.5c0.2-0.2,0.6,0.1,0.8,0C9.1,3.2,9.2,3,9.2,2.8z"></path>
                      </g>
                      <path opacity="0.1" fill="#010101" enable-background="new    " d="M26.6,7.7c-0.1,0-0.2,0-0.2,0c-0.3-0.1-0.6-0.2-0.8-0.5
                        c-0.1-0.1-0.2-0.3-0.1-0.5c0.1-0.1,0.2-0.2,0.2-0.3c0-0.1,0-0.2,0-0.2l-0.1-0.4c0-0.1-0.1-0.2-0.2-0.3c-0.1,0-0.2,0.1-0.3,0.1
                        c-0.2,0.2-0.6,0.3-0.8,0.1c-0.2-0.1-0.2-0.6-0.2-0.8c0,0,0-0.1-0.1-0.1c0,0-0.1,0-0.1,0c-0.1,0-0.2-0.1-0.3-0.2c0-0.1,0-0.3,0-0.4
                        c0-0.1-0.1-0.3-0.2-0.3c-0.1,0-0.2-0.1-0.3-0.1l-0.6,0c-0.1,0-0.3,0-0.4-0.1c-0.1-0.1,0-0.3,0.1-0.4c0.1-0.1,0.2-0.2,0.2-0.4
                        c0-0.1-0.1-0.3-0.2-0.4c0-0.1-0.1-0.1-0.1-0.2l-0.2,0c-0.1,0.1,0,0.3,0.1,0.4c0.1,0.1,0.2,0.3,0.2,0.4c0,0.1-0.1,0.3-0.2,0.4
                        C22,3.5,21.9,3.7,22,3.8c0.1,0.1,0.2,0.1,0.4,0.1l0.6,0c0.1,0,0.2,0,0.3,0.1c0.1,0.1,0.2,0.2,0.2,0.3c0,0.1,0,0.3,0,0.4
                        c0,0.1,0.1,0.2,0.3,0.2c0,0,0.1,0,0.1,0c0,0,0.1,0.1,0.1,0.1c0,0.2,0,0.7,0.2,0.8c0.3,0.1,0.6,0,0.8-0.1c0.1-0.1,0.2-0.2,0.3-0.1
                        s0.1,0.2,0.2,0.3l0.1,0.4c0,0.1,0,0.2,0,0.2c0,0.1-0.2,0.2-0.2,0.3c-0.1,0.2,0,0.3,0.1,0.5c0.2,0.2,0.5,0.4,0.8,0.5
                        c0.1,0,0.2,0,0.2,0c0.1,0,0.2-0.1,0.3-0.2C26.7,7.6,26.7,7.6,26.6,7.7z"></path>
                      </svg>
                  </span>
                </div>
                <div class="prop-service__mb-promise__list--item__content">
                  <div class="prop-service__mb-promise__list--item--title">Trusted Service Partners</div>
                  <div class="prop-service__mb-promise__list--item--text">Choose from our curated partners<br> for a smooth experience</div>
                </div>
              </li>
              <li class="prop-service__mb-promise__list--item">
                <div class="prop-service__mb-promise__list--item--graphic">
                  <span class="svg-ico ico-service-quality">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                      <path fill="#302E41" d="M20.8,1c-2.3,0-4.2,2.1-4.2,4.6v3.2h1l0.6-1.2L18,8.9h6.5l0.5-1.1l-0.1,1.1h0.7V6.3C25.7,3.4,23.5,1,20.8,1z
                        "></path>
                      <path fill="#F9B7B8" d="M18.7,6.8c0,0,1.3,3.1-0.4,3.7l1.8,5.8l3-0.2l0.8-1.9l-0.2-2.9l-0.3-1.9c0,0-1.9,0.4-1.7-2.8
                        C21.7,6.6,18.7,6.8,18.7,6.8z M18,10.5c0,0-2.9-0.3-2.6,1.9c0.3,2.1,0.5,2.6,0.5,2.6l0.3,3.2l-1.6,1h-1.5c0,0-4.6,1.1-2.3,2.2
                        c2.3,1.2,3.1-0.9,3.1-0.9s4.2,0,4.5-0.7S18,10.5,18,10.5L18,10.5z M23.6,9.5c0,0,2.7-1,2.9,1.1c0.2,2.1,0.2,2.3,0.2,2.3l0.5,3
                        c0,0,1,2.7,1,3.4c0,0.8,0.8,3.3,0.8,3.3s1,3.4-0.1,3.4c-1.1-0.1-1.3-3.7-1.3-3.7l-2.3-4.8l-0.7-2.9L23.6,9.5z"></path>
                      <path fill="#009782" d="M18.4,10h-0.7l-0.1,3.7c0,0-1.2,1.6,0.3,3l0.4,2.3l6.5-0.3l0.4-2.4c0,0,0.9-1.9-0.4-3.7l-1.2-3.6H23
                        c0,0,1.4,5.3-1.6,5.4C19,14.5,18.4,10,18.4,10L18.4,10z"></path>
                      <path fill="#302E41" d="M28.8,31h-7.2l0.1-1.7L20.9,31H12c4-6.8,6.1-10.3,6.1-10.5l0,0l0.2-0.7l0.1-0.3l0.1-0.3l0.1-0.4l5.8-0.2
                        l0.2,0.4l0.5,1.2c0,0,0.1,0,0.1,0.1C26,20.7,27.1,24.3,28.8,31L28.8,31z"></path>
                      <path fill="#403E56" d="M25,17.8L18.2,18c0,0-0.3,2.3,0,2.3c0.1,0,7.2,0.6,7.1-0.4C25.2,18.8,25,17.8,25,17.8z"></path>
                      <circle fill="#F9B7B8" cx="20.1" cy="5.3" r="2.5"></circle>
                      <path fill="#302E41" d="M22,2.3c-0.4-0.6-1.1-0.9-1.8-0.9h-0.1c-1.6,0-2.9,1.5-2.9,3.3h0.5L17.8,4l0.1,0.7h3.2l0.3-0.6l-0.1,0.6H22
                        c0.3,1.5-0.1,2.9-1.3,4.4h1.1l0.5-1.1l-0.1,1.1h2l0.4-2.6C24.6,4.5,23.5,2.9,22,2.3z"></path>
                      <circle opacity="0.1" fill="#1CBFD2" enable-background="new    " cx="16.4" cy="19" r="9.5"></circle>
                      <path fill="#FFFFFF" stroke="#E8E8E8" d="M3.1,22h20.5c0.3,0,0.5,0.2,0.5,0.5v5.8c0,0.3-0.2,0.5-0.5,0.5H3.1c-0.3,0-0.5-0.2-0.5-0.5
                        v-5.8C2.6,22.2,2.8,22,3.1,22z"></path>
                      <path fill="#FFC82F" d="M7.5,26.7c-0.1,0-0.1,0-0.2-0.1l-0.4-0.3c-0.1-0.1-0.2-0.1-0.2,0l-0.4,0.3c-0.1,0.1-0.2,0.1-0.3,0
                        c-0.1-0.1-0.1-0.2-0.1-0.3L6,25.8c0-0.1,0-0.2-0.1-0.2l-0.4-0.3c-0.1-0.1-0.1-0.2-0.1-0.3c0-0.1,0.2-0.2,0.3-0.2h0.5
                        c0.1,0,0.2-0.1,0.2-0.1l0.2-0.5c0-0.1,0.2-0.2,0.3-0.2c0.1,0,0.2,0.1,0.3,0.2l0.2,0.5c0,0.1,0.1,0.1,0.2,0.1h0.5
                        c0.1,0,0.2,0.1,0.3,0.2c0,0.1,0,0.3-0.1,0.3l-0.4,0.3c-0.1,0.1-0.1,0.1-0.1,0.2l0.2,0.5c0,0.1,0,0.3-0.1,0.3
                        C7.6,26.7,7.6,26.7,7.5,26.7z M11,26.7c-0.1,0-0.1,0-0.2-0.1l-0.4-0.3c-0.1-0.1-0.2-0.1-0.2,0l-0.4,0.3c-0.1,0.1-0.2,0.1-0.3,0
                        c-0.1-0.1-0.1-0.2-0.1-0.3l0.2-0.5c0-0.1,0-0.2-0.1-0.2L9,25.3c-0.1-0.1-0.1-0.2-0.1-0.3c0-0.1,0.2-0.2,0.3-0.2h0.5
                        c0.1,0,0.2-0.1,0.2-0.1l0.2-0.5c0-0.1,0.2-0.2,0.3-0.2c0.1,0,0.2,0.1,0.3,0.2l0.2,0.5c0,0.1,0.1,0.1,0.2,0.1h0.5
                        c0.1,0,0.2,0.1,0.3,0.2c0,0.1,0,0.3-0.1,0.3l-0.4,0.3c-0.1,0.1-0.1,0.1-0.1,0.2l0.2,0.5c0,0.1,0,0.3-0.1,0.3
                        C11.1,26.7,11.1,26.7,11,26.7z M14.4,26.7c-0.1,0-0.1,0-0.2-0.1l-0.4-0.3c-0.1-0.1-0.2-0.1-0.2,0l-0.4,0.3c-0.1,0.1-0.2,0.1-0.3,0
                        c-0.1-0.1-0.1-0.2-0.1-0.3l0.2-0.5c0-0.1,0-0.2-0.1-0.2l-0.4-0.3c-0.1-0.1-0.1-0.2-0.1-0.3c0-0.1,0.2-0.2,0.3-0.2h0.5
                        c0.1,0,0.2-0.1,0.2-0.1l0.2-0.5c0-0.1,0.2-0.2,0.3-0.2c0.1,0,0.2,0.1,0.3,0.2l0.2,0.5c0,0.1,0.1,0.1,0.2,0.1h0.5
                        c0.1,0,0.2,0.1,0.3,0.2c0,0.1,0,0.3-0.1,0.3l-0.4,0.3c-0.1,0.1-0.1,0.1-0.1,0.2l0.2,0.5c0,0.1,0,0.3-0.1,0.3
                        C14.5,26.7,14.5,26.7,14.4,26.7z M17.9,26.7c-0.1,0-0.1,0-0.2-0.1l-0.4-0.3c-0.1-0.1-0.2-0.1-0.2,0l-0.4,0.3c-0.1,0.1-0.2,0.1-0.3,0
                        c-0.1-0.1-0.1-0.2-0.1-0.3l0.2-0.5c0-0.1,0-0.2-0.1-0.2l-0.4-0.3c-0.1-0.1-0.1-0.2-0.1-0.3c0-0.1,0.2-0.2,0.3-0.2h0.5
                        c0.1,0,0.2-0.1,0.2-0.1l0.2-0.5c0-0.1,0.2-0.2,0.3-0.2s0.2,0.1,0.3,0.2l0.2,0.5c0,0.1,0.1,0.1,0.2,0.1h0.5c0.1,0,0.2,0.1,0.3,0.2
                        c0,0.1,0,0.3-0.1,0.3l-0.4,0.3C18,25.6,18,25.7,18,25.8l0.2,0.5c0,0.1,0,0.3-0.1,0.3C18,26.7,18,26.7,17.9,26.7z M21.3,26.7
                        c-0.1,0-0.1,0-0.2-0.1l-0.4-0.3c-0.1-0.1-0.2-0.1-0.2,0l-0.4,0.3c-0.1,0.1-0.2,0.1-0.3,0c-0.1-0.1-0.1-0.2-0.1-0.3l0.2-0.5
                        c0-0.1,0-0.2-0.1-0.2l-0.4-0.3c-0.1-0.1-0.1-0.2-0.1-0.3c0-0.1,0.2-0.2,0.3-0.2H20c0.1,0,0.2-0.1,0.2-0.1l0.2-0.5
                        c0-0.1,0.2-0.2,0.3-0.2s0.2,0.1,0.3,0.2l0.2,0.5c0,0.1,0.1,0.1,0.2,0.1h0.5c0.1,0,0.2,0.1,0.3,0.2c0,0.1,0,0.3-0.1,0.3l-0.4,0.3
                        c-0.1,0.1-0.1,0.1-0.1,0.2l0.2,0.5c0,0.1,0,0.3-0.1,0.3C21.5,26.7,21.4,26.7,21.3,26.7z"></path>
                      </svg>
                  </span>
                </div>
                <div class="prop-service__mb-promise__list--item__content">
                  <div class="prop-service__mb-promise__list--item--title">Service Quality</div>
                  <div class="prop-service__mb-promise__list--item--text">We're committed to ensuring<br> quality service delivery, everytime</div>
                </div>
              </li>
              <li class="prop-service__mb-promise__list--item">
                <div class="prop-service__mb-promise__list--item--graphic">
                  <span class="svg-ico ico-value-for-money">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
                      <path fill="#F9B7B8" d="M24.9,21.6c0,0,3.6,0.2,2.8,1.3c-0.8,1.1-3-0.7-3-0.7S24.9,21.6,24.9,21.6z"></path>
                      <path fill="#FFC82F" d="M18.4,10.8l0.7,0.2c0,0,0.4,1.3,0.7,2.5c0.3,1.2,0.9,4.7,0.9,4.7l4.7,3.3l-0.6,1.3l-6.2-2.5l-1.4-5.6
                        L18.4,10.8z"></path>
                      <path opacity="0.2" fill="#010101" enable-background="new    " d="M19.1,13l-0.3,5.7l0.6,1.7l-1.7-1.2L19.1,13z"></path>
                      <path fill="#302E41" d="M20.1,23.5c0,0,0.8,2.1,0.9,3.5c0.1,1.4,0.2,2.6,0.2,2.6h-3.7l-0.7-1.1v1.1h-4.4c0,0-1.2-3.9-0.7-4.4
                        c0.5-0.5,5.2-2.5,5.2-2.5S20.1,23.5,20.1,23.5z"></path>
                      <path fill="#403E56" d="M5.7,29.6h21.6v0.2H5.7V29.6z"></path>
                      <circle fill="#F9B7B8" cx="15.3" cy="6.2" r="2.3"></circle>
                      <path fill="#F9B7B8" d="M13.7,7.1l-0.2,2.7l2.4,3.1L17,9.9c0,0-1.1-0.7-0.4-2.1L13.7,7.1z"></path>
                      <path fill="#FFC82F" d="M20.2,23.8c0,0.6-1.5,1.4-1.5,1.4v0.3l-0.6,0.3l-1.3-2.7l-0.4,3c0,0-2.6,0.4-3.5,0c-0.8-0.4-1.3-0.2-2.5-0.7
                        C9.3,25,11,19.1,11,19.1l-1.2-9l2.6-1.4l0.1-0.1l0.4-0.1l0.6-0.1l1.8,1.3l0.1,0.8l0.1,0.5l0.5-0.6l0.4-1.2l2.6,1.5l-0.7,5.9
                        C18.2,16.8,20.2,23.2,20.2,23.8z"></path>
                      <path fill="#F9B7B8" d="M11.5,25.7c0,0,2.8,2.3,1.5,2.7c-1.3,0.4-2.1-2.4-2.1-2.4L11.5,25.7z"></path>
                      <path fill="#FFC82F" d="M10.3,10.6l-0.6-0.1c0,0-0.9,0.5-1,1.5c-0.1,1-0.9,7.8-0.9,7.8l2.6,6.9l2.1-0.8l-2-6.5l1.5-5.6
                        C12.1,13.7,10.3,10.6,10.3,10.6z"></path>
                      <circle fill="#302E41" cx="15.6" cy="12" r="0.3"></circle>
                      <circle fill="#302E41" cx="15.6" cy="13.7" r="0.3"></circle>
                      <circle fill="#302E41" cx="16.9" cy="23" r="0.3"></circle>
                      <path fill="#302E41" d="M13.3,3.7l-0.4-0.2c0,0,0.9-1,2.1-0.9l-0.3-0.4c0,0,0.8-0.3,1.6,0.5c0.4,0.5,0.9,1,1.2,1.6h0.4l-0.2,0.4
                        l0.7,0.4l-0.7-0.1c0,0.2,0,0.5,0,0.7c0,0.2-0.1,0.4-0.3,0.6c0,0-0.5-1.1-0.5-1.2v0.4c0,0-0.4-0.4-0.4-0.6l-0.2,0.3h-1.5l0.2-0.4
                        L14,5.1l0.3-0.5L13,6.5C13,6.5,12.2,4.4,13.3,3.7z"></path>
                      <circle fill="#D8262A" cx="27.3" cy="16.6" r="3.7"></circle>
                      <path fill="#FFFFFF" d="M27.1,18.4V18c-0.2,0-0.5-0.1-0.6-0.2l0.1-0.3c0.2,0.1,0.4,0.2,0.6,0.2c0.3,0,0.5-0.2,0.5-0.5
                        c0-0.3-0.2-0.4-0.5-0.6c-0.4-0.2-0.7-0.4-0.7-0.8c0-0.4,0.2-0.7,0.6-0.8v-0.5h0.2V15c0.2,0,0.4,0.1,0.5,0.2l-0.1,0.3
                        c-0.1-0.1-0.3-0.2-0.5-0.2c-0.3,0-0.4,0.2-0.4,0.4c0,0.2,0.1,0.4,0.5,0.5c0.4,0.2,0.6,0.4,0.6,0.9c0,0.4-0.2,0.7-0.6,0.8v0.5H27.1
                        L27.1,18.4z"></path>
                      <path opacity="0.2" fill="#010101" enable-background="new    " d="M11.1,21.1l1.5,4.7l-1.2-4.8L11.1,21.1z"></path>
                      <path fill="#403E56" d="M2.7,13.8h-1c-0.1,0-0.2-0.1-0.2-0.2v-1.4c0-0.1,0.1-0.2,0.2-0.2h1c0.1,0,0.2,0.1,0.2,0.2v1.4
                        C2.9,13.7,2.8,13.8,2.7,13.8z M1.7,12.2C1.7,12.2,1.6,12.2,1.7,12.2l-0.1,1.4c0,0,0,0.1,0.1,0.1h1c0,0,0.1,0,0.1-0.1v-1.4
                        c0,0,0-0.1-0.1-0.1C2.7,12.2,1.7,12.2,1.7,12.2z M4.5,14H3.6c-0.1,0-0.2-0.1-0.2-0.2V11c0-0.1,0.1-0.2,0.2-0.2h0.9
                        c0.1,0,0.2,0.1,0.2,0.2v2.8C4.7,13.9,4.6,14,4.5,14L4.5,14z M3.6,10.9c-0.1,0-0.1,0.1-0.1,0.1v2.8c0,0.1,0.1,0.1,0.1,0.1h0.9
                        c0.1,0,0.1-0.1,0.1-0.1V11c0-0.1-0.1-0.1-0.1-0.1C4.5,10.9,3.6,10.9,3.6,10.9z M6.2,13.8H5.3c-0.1,0-0.2-0.1-0.2-0.2v-4
                        c0-0.1,0.1-0.2,0.2-0.2h0.8c0.1,0,0.2,0.1,0.2,0.2v4C6.4,13.7,6.3,13.8,6.2,13.8z M5.3,9.4c-0.1,0-0.2,0.1-0.2,0.2v4
                        c0,0.1,0.1,0.2,0.2,0.2h0.8c0.1,0,0.2-0.1,0.2-0.2v-4c0-0.1-0.1-0.2-0.2-0.2C6.2,9.4,5.3,9.4,5.3,9.4z"></path>
                      <path fill="#009782" d="M1.9,12.5h0.7v1.1H1.9V12.5z M3.6,11h0.7v2.6H3.6V11z M5.5,9.7h0.7v4.1H5.5V9.7z"></path>
                      <path fill="#403E56" d="M6.9,14.3H1c0,0,0,0,0,0c0,0,0,0,0,0V8.4c0,0,0,0,0,0s0,0,0,0v5.9L6.9,14.3C6.9,14.3,7,14.3,6.9,14.3
                        C7,14.3,6.9,14.3,6.9,14.3z"></path>
                      <path fill="#403E56" d="M27.6,9.9h-5c0,0,0,0,0,0c0,0,0,0,0,0V4.7c0,0,0,0,0,0s0,0,0,0v5.1L27.6,9.9C27.6,9.8,27.6,9.8,27.6,9.9
                        C27.6,9.9,27.6,9.9,27.6,9.9z"></path>
                      <path fill="#403E56" d="M24.3,9.1h-1c-0.1,0-0.2-0.1-0.2-0.2V7.6c0-0.1,0.1-0.2,0.2-0.2h1c0.1,0,0.2,0.1,0.2,0.2V9
                        C24.5,9.1,24.4,9.1,24.3,9.1z M23.3,7.5C23.3,7.5,23.3,7.6,23.3,7.5L23.3,9c0,0,0,0.1,0.1,0.1h1c0,0,0.1,0,0.1-0.1V7.6
                        c0,0,0-0.1-0.1-0.1L23.3,7.5L23.3,7.5z M26.3,9.3h-0.9c-0.1,0-0.2-0.1-0.2-0.2V6.5c0-0.1,0.1-0.2,0.2-0.2h0.9c0.1,0,0.2,0.1,0.2,0.2
                        v2.6C26.5,9.2,26.4,9.3,26.3,9.3z M25.4,6.4c-0.1,0-0.1,0.1-0.1,0.1v2.6c0,0.1,0.1,0.1,0.1,0.1h0.9c0.1,0,0.1-0.1,0.1-0.1V6.5
                        c0-0.1-0.1-0.1-0.1-0.1H25.4L25.4,6.4z"></path>
                      <path fill="#009782" d="M23.4,7.8h0.7v1.1h-0.7V7.8z M25.4,6.7h0.7v2.2h-0.7V6.7z"></path>
                      <ellipse fill="#009782" cx="23.8" cy="6.9" rx="0.3" ry="0.4"></ellipse>
                      <ellipse fill="#009782" cx="25.9" cy="5.6" rx="0.3" ry="0.4"></ellipse>
                      </svg>
                  </span>
                </div>
                <div class="prop-service__mb-promise__list--item__content">
                  <div class="prop-service__mb-promise__list--item--title">Value for Money</div>
                  <div class="prop-service__mb-promise__list--item--text">Best price guaranteed with<br> our exclusive offers</div>
                </div>
              </li>
            </ul>
            
          
        
			</div>
		</section>		
	</div>
</div>

</div>-->


@endsection
