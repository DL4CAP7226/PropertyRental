@extends('website/layout/master')
@section('title','home')
@section('body')
@php
$original = asset('public/property_img/original').'/';
$compress = asset('public/property_img/compress').'/';
@endphp
<!--banner start here--> 


<!doctype html>
<html>
<head>
<title>Property in Noida | Real Estate in Noida | Noida Property - MagicBricks</title>
<meta name="description" content="Search Real Estate in Noida - Buy, Sell and Rent Best Residential Properties in Noida by Real Property owners, Dealers, Builders and Real Estate Agents."/>
<meta name="keywords" content="Real Estate, Property in Noida, Properties, Property sites India"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, minimum-scale=1.0"/>
<meta name="Owner" content="MagicBricks.com"/>
<meta name="Copyright" content="MagicBricks.com"/>
<meta name="classification" content="Real Estate Property Search"/>
<meta name="distribution" content="India"/>
<meta name="rating" content="General"/>
<meta name="subject" content="Search Property for Sale And Rent, Search New	Projects, Builders And Property Dealers in India"/>
<meta name="audience" content="All"/>
<meta name="facebook-domain-verification" content="q58qv9gyuix40iixcpquxukhrfpsw5"/>
<link rel="preconnect dns-prefetch" href="https://cdn.staticmb.com"/>
<link rel="preconnect dns-prefetch" href="https://img.staticmb.com"/>
<link rel="preconnect dns-prefetch" href="https://ingestor.magicbricks.com"/>
<link rel="canonical" href="https://www.magicbricks.com/property-for-sale-rent-in-Noida/residential-real-estate-Noida"/>
<link rel="preload" as="image" href="https://cdn.staticmb.com/magicservicestatic/images/revamp/web-header-footer.svg"/>
<link rel="preload" as="image" href="https://cdn.staticmb.com/magicservicestatic/images/mb-home-web/mb-home-sprite-web.svg"/>
<link rel="preload" as="style" defer href="https://cdn.staticmb.com/magicservicestatic/1661869427873/css/mb-home-web.css"/>
<link rel="preload" as="font" crossorigin="crossorigin" type="font/woff2" href="https://cdn.staticmb.com/mbfonts/montserrat-regular.woff2"/>
<link rel="preload" as="font" crossorigin="crossorigin" type="font/woff2" href="https://cdn.staticmb.com/mbfonts/montserrat-semibold.woff2"/>
<link rel="preload" as="font" crossorigin="crossorigin" type="font/woff2" href="https://cdn.staticmb.com/font/damion-regular.woff2"/>
<link type="text/css" rel="stylesheet" href="https://cdn.staticmb.com/magicservicestatic/1661869427873/css/mb-home-web.css" media="all"/>
<style type="text/css">
	@font-face {
		font-family: 'Montserrat';
		src: url(https://cdn.staticmb.com/mbfonts/montserrat-regular.woff2) format('woff2'),
			url(https://cdn.staticmb.com/mbfonts/montserrat-regular.woff) format('woff'),
			url(https://cdn.staticmb.com/mbfonts/montserrat-regular.ttf) format('ttf');
		font-display:block;
		font-weight:400;
		font-style:normal;
	}
	@font-face{
		font-family: 'Montserrat';
  		src: 	url(https://cdn.staticmb.com/mbfonts/montserrat-semibold.woff2) format('woff2'),
       			url(https://cdn.staticmb.com/mbfonts/montserrat-semibold.woff) format('woff'),
       			url(https://cdn.staticmb.com/mbfonts/montserrat-semibold.ttf) format('ttf');
       	font-display:block;
       	font-weight:600;
       	font-style:normal;
	}
	@font-face {
		font-family: 'Damion';
		src: url(https://cdn.staticmb.com/font/damion-regular.woff2) format('woff2'),
			url(https://cdn.staticmb.com/font/damion-regular.woff) format('woff');
		font-display:block;
		font-weight: normal;
		font-style: normal;
	}
	
</style>

<script type="text/javascript">
			var cityCode ="6403";
			var refreshCounter ="126";
			var pagename="homeRevampBannerWeb.jsp";
			var cityName="Noida";
			var localityCode="82358";
			var category="B";
			var domainURL = "https://www.magicbricks.com/";
			dataLayer = [];
			var contextPath="https://www.magicbricks.com/";
			var geocityCode="6403";
			var geoCity="";
			var geoGroupCity=""
			var geoGrouped="N";
			var geoTargeted="N";
			var onlySubrub="Y";
			var isNRI="N";
			var countryLevel = "N";
			var fromPage = "cityHome";
			var suburbCode="";
			var suburb="";
			var npsUrl = "https://nps.magicbricks.com";
			var npsUrlJS= "https://nps.magicbricks.com/npsScript/";
			var version = '1661869427873';
			var userValue= "";
			var topDownBanner="N";
			var searchFormBanner = "Y";
			var jacketAdCookie = "";

            var reactivatePropertyBannerConfig = 'Y';
            var reactivatePropertyBannerDuration = '14';
            var firstNameForReactivation = '';
            var propertyNameForReactivation = '';
            var propListType = '';
            var numberOfProperties = '';
            var encryptedUserRef = '';
            var encryptedPropertyId = '';
            var reactivationBanner = 'N';
		</script>
</head>
<body class="mb-home homeIndex " id="commercialIndex" onload="loadExtJS();">
<style>
   span.cart-icon {
   display: none !important;
   }
   .dropdown.setting {
   display: none !important;
   }
   .social-information {
   display: flex;
   align-items: center; 
   }
   .contact-info h3 {
   font-size: 14px;
   font-weight: bold;
   }
   .box-seccc {
   box-shadow: 1px 5px 5px 0 rgb(0 0 0 / 9%);
   background: #fff;
   border-top: 2px solid #ff6237;
   border-radius: 6px;
   min-height: 370px;
   padding: 15px;
   }
   .carousel {
   /*width: 650px;*/
   margin: 0 auto;
   padding-bottom: 50px
   }
   .carousel .item {
   color: #999;
   font-size: 14px;
   /*text-align: center;*/
   overflow: hidden;
   }
   .klb-readmore.entry-button a {
   padding-left: 12px;
   color: #ff6237;
   }
   .item p {
   /* margin-bottom: 12px; */
   margin-top: 10px;
   }
   .right-title {
   margin-bottom: 20px;
   }
   .carousel .item a {
   color: #eb7245
   }
   .carousel .img-box {
   width: 145px;
   height: 145px;
   margin: 0 auto;
   border-radius: 50%
   }
   .carousel .img-box img {
   width: 100%;
   height: 100%;
   display: block;
   border-radius: 50%
   }
   section.video-partssss {
   padding: 30px 0 30px;
   }
   .social-information p {
   margin-left: 8px;
   }
   .klb-readmore.entry-button a i {
   margin-left: 2px;
   }
   .social-information i {
   border: 1px solid #000;
   margin-bottom: 15px;
   width: 25px;
   height: 25px;
   text-align: center;
   line-height: 22px;
   marghin-le: 15px;
   /* margin-left: 15px; */
   font-size: 21px;
   border-radius: 30px;
   color: #ff623 30px;
   color: #ff6237;
   }
   h2.entry-title {
   margin-top: 0;
   margin-bottom: 3px !important;
   }
   .widget-posts iframe {
   height: 63px;
   width: 100px;
   }
   h2.entry-title a {
   font-size: 15px;
   color: #000;
   margin-left: 12px;
   }
   figure.post-thumbnail a img {
   height: 63px;
   width: 100px;
   object-fit: cover;
   }
   h3.title {
   font-size: 15px;
   font-weight: bold;
   margin-top: 0px !important;
   }
   .carousel .testimonial {
   padding: 30px 0 10px
   }
   .testimonial {
   color: #000000;
   font: Times Roman
   }
   .carousel .overview {
   text-align: center;
   padding-bottom: 5px
   }
   .box-border {
   -webkit-box-shadow: 1px 5px 5px 0 rgb(0 0 0 / 9%);
   box-shadow: 1px 5px 5px 0 rgb(0 0 0 / 9%);
   background: #fff;
   border-top: 2px solid #ff6237;
   border-radius: 6px;
   }
   .carousel .overview b {
   color: #333;
   font-size: 15px;
   text-transform: uppercase;
   display: block;
   padding-bottom: 5px
   }
   .carousel .star-rating i {
   font-size: 18px;
   color: #ffdc12
   }
   .carousel .carousel-control {
   width: 30px;
   height: 30px;
   border-radius: 50%;
   background: #999;
   text-shadow: none;
   top: 4px
   }
   .carousel-control i {
   font-size: 20px;
   margin-right: 2px
   }
   .carousel-control.left {
   left: auto;
   right: 40px
   }
   article.post {
   display: flex;
   margin-bottom: 20px;
   }
   .carousel-control.right i {
   margin-right: -2px
   }
   .carousel .carousel-indicators {
   bottom: 15px
   }
   .carousel-indicators li,
   .carousel-indicators li.active {
   width: 11px;
   height: 11px;
   margin: 1px 5px;
   border-radius: 50%
   }
   .carousel-indicators li {
   background: #e2e2e2;
   border-color: transparent
   }
   .carousel-indicators li.active {
   border: none;
   background: #888
   }
   button.btn.btn-default.btn-sm.dropdown-toggle {
   height: 49px !important;
   }
   button.collapsible i {
   margin-left: 12px;
   }
   .tablink {
   background-color: #555;
   color: white;
   border: none;
   outline: none;
   cursor: pointer;
   font-size: 12px;
   color: #606060;
   border-radius: 32px px;
   font-family: Montserrat;
   border: 1px solid #d7d7d7;
   background-color: #fff;
   padding: 0 3;
   border-radius: 16px;
   height: 30px;
   /*padding: 0 10px;*/
   text-align: left;
   }
   .nav-mind {
   box-shadow: none !important;
   }
   /* Style the tab content (and add height:100% for full page content) */
   .tabcontent {
   display: none;
   }
   #Contact {background-color: blue;}
   #About {background-color: orange;}
   .collapsible {
   background-color: #777; */
   /* color: white; */
   cursor: pointer;
   padding: 13px;
   width: 100%;
   border: none;
   text-align: center;
   outline: none;
   font-size: 15px;
   border: 1px solid #ccc !important;
   background: 0;
   }
   div#Home {
   text-align: left;
   }
   .content {
   width: 100%;
   display: none;
   overflow: hidden;
   background-color: #f1f1f1;
   box-shadow: rgb(0 0 0 / 16%) 0px 8px 11px;
   background: #fff;
   overflow-y: scroll;
   scroll-behavior: smooth;
   height: 257px;
   position: absolute;
   z-index: 1;
   }
   div#News {
   margin-left: 110px;
   }
   .collapsible{
   display: flex;
   justify-content: space-between;
   }
   .range-button {
           display: flex;
    justify-content: space-between;
}
   .tabcontent a.tab-a{
        font-size: 14px!important;
        color: #606060!important;
        line-height: 32px!important;
        cursor: pointer!important;
        display:block!important;
        text-decoration:none;
    }
     .tabcontent a.tab-a:hover{
         background-color:grey;
     }
     .mb-search__budget__fld-min-max {
    height: 32px;
    line-height: 32px;
    font-size: 14px;
    color: #606060;
    border-radius: 32px;
    font-family: Montserrat;
    border: 1px solid #d7d7d7;
    background-color: #fff;
    outline: none;
    width: 96px;
    padding-left: 12px;
    cursor: pointer;
}
.padd.border-css {
    border: 1px solid #ccc;
}
.mb-search__budget:before {
   
    left: 39px !important;
    

}
.mb-search__budget {
    width: 100% !important;
    margin: 11px 0 0;
}
.mb-search__budget:before{
	display:none;
	
}
.mb-search__title:after {
    content: "";
    position: absolute;
    right: 15px !important;
    top: 14px;
    width: 11px;
    height: 6px;

}
.mb-home {

    overflow-y: inherit !IMPORTANT;
}
.mb-search__tab__ani {
  
    background: transparent !important;
}

.menu-1 {
    display: none;
}
.mb-search__budget .mb-search__dropdown {
    left: -22px !important;
 
    width: 276px;
}
.mb-search__dropdown {

    top: -10px !important;
  
}
.mb-search__budget__fld-min-max {
 
    margin-right: 20px !important;
}
.mb-search__min-max__item {
 
    text-align: left !important;

    margin-left: 15px !important;
}
.mb-search__title:after {

    top: 11px; 
}
.mb-search__title {

    line-height: 26px;
	    font-size: 15px !important;
}
</style>
<section class="search-banner">
   <div class="header-content">
      <div class="container">
         <div class="row">
            <div class="col-md-12 center-sec">
               <div class="left-list">
                  <div class="block-title">
                     <span class="title">
                     Search for property with Nestray ?
                     </span>
                  </div>
                  <!-- block search -->
                  <div class="list-center">
                     <ul>
                        <li role="presentation" class="active"><a href="#" role="tab">Buy </a></li>
                        <li role="presentation" class="active"><a href="#" role="tab">Rent </a></li>
                        <li role="presentation" class="active"><a href="#" role="tab">PG / Co-living </a></li>
                        <span class="mb-search__tab__ani" style="width: 58.4531px; left: 77.8438px;"></span>
                        <li role="presentation" class="active"><a href="#floor1-1" role="tab">Commercial </a></li>
                        <li role="presentation"><a href="#floor1-2" role="tab" data-toggle="tab">Coworking </a></li>
                        <li role="presentation"><a href="#floor1-4" role="tab" data-toggle="tab"> Projects</a></li>
                        <li role="presentation"><a href="#floor1-4" role="tab" data-toggle="tab">Dealers </a></li>
                        <!--- <li role="presentation" class="price-new"><a href="#floor1-3" role="tab" data-toggle="tab" class="price-secc">Price(Budget)  </a></li>-->
                     </ul>
                  </div>
               </div>
               <div class="nav-mind">
                  <div class="block-search">
                     <div class="block-title">
                        <span>Search</span>
                     </div>
                     <div class="block-content">
                        <div class="row border-parts">
                           <div class="col-md-2 padd ">
                              <div class="categori-search ">
                                 <select data-placeholder="All Categories" class="categori-search-option raddius-search" style="display: none;">
                                    <option>Buy</option>
                                    <option>Rent</option>
                                    <option>Commercial</option>
                                    <option>PG</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-2 padd ">
                              <div class="categori-search  ">
                                 <select data-placeholder="All Categories" class="categori-search-option" style="display: none;">
                                    <option>Apartment</option>
                                 </select>
                              </div>
                           </div>
                           <div class="col-md-3 padd border-css ">
                            <input type="hidden" id="categoryType" name="categoryType" value="B">
<div class="mb-search__budget">
<div class="mb-search__title" onclick="showBudgetDropDown(event, this);fireSearchBoxClickedGTM();">
<span id="rent_budget_lbl" class="buy_budget_lbl">Budget</span>
</div>
<div class="mb-search__relative">
<div class="mb-search__dropdown" onclick="event.stopPropagation();">
<div class="mb-search__budget__wrap">
<input type="text" class="mb-search__budget__fld-min-max" id="budgetMin" maxlength="8" onclick="homeRangeMinLinkClick(this);" onblur="validateBudget();" value="" placeholder="Min Price"> <input type="text" class="mb-search__budget__fld-min-max" id="budgetMax" maxlength="9" value="" onclick="homeRangeMaxLinkClick(this);" onblur="validateBudget();" placeholder="Max Price">
</div>
<div class="mb-search__min-max webkit__scroll-search" id="minBudjet">
<div class="mb-search__min-max__item" onclick="updateHomeBudgetForHomePage('min','Min',0,'')">Min</div>
<div class="mb-search__min-max__item" data-actualIndex="0" onclick="updateHomeBudgetForHomePage('min', ' 500000','0','');">&#8377;5 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="1" onclick="updateHomeBudgetForHomePage('min', ' 1000000','1','');">&#8377;10 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="2" onclick="updateHomeBudgetForHomePage('min', ' 2000000','2','');">&#8377;20 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="3" onclick="updateHomeBudgetForHomePage('min', ' 3000000','3','');">&#8377;30 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="4" onclick="updateHomeBudgetForHomePage('min', ' 4000000','4','');">&#8377;40 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="5" onclick="updateHomeBudgetForHomePage('min', ' 5000000','5','');">&#8377;50 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="6" onclick="updateHomeBudgetForHomePage('min', ' 6000000','6','');">&#8377;60 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="7" onclick="updateHomeBudgetForHomePage('min', ' 7000000','7','');">&#8377;70 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="8" onclick="updateHomeBudgetForHomePage('min', ' 8000000','8','');">&#8377;80 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="9" onclick="updateHomeBudgetForHomePage('min', ' 9000000','9','');">&#8377;90 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="10" onclick="updateHomeBudgetForHomePage('min', ' 10000000','10','');">&#8377;1 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="11" onclick="updateHomeBudgetForHomePage('min', ' 12000000','11','');">&#8377;1.2 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="12" onclick="updateHomeBudgetForHomePage('min', ' 14000000','12','');">&#8377;1.4 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="13" onclick="updateHomeBudgetForHomePage('min', ' 16000000','13','');">&#8377;1.6 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="14" onclick="updateHomeBudgetForHomePage('min', ' 18000000','14','');">&#8377;1.8 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="15" onclick="updateHomeBudgetForHomePage('min', ' 20000000','15','');">&#8377;2 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="16" onclick="updateHomeBudgetForHomePage('min', ' 23000000','16','');">&#8377;2.3 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="17" onclick="updateHomeBudgetForHomePage('min', ' 26000000','17','');">&#8377;2.6 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="18" onclick="updateHomeBudgetForHomePage('min', ' 30000000','18','');">&#8377;3 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="19" onclick="updateHomeBudgetForHomePage('min', ' 35000000','19','');">&#8377;3.5 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="20" onclick="updateHomeBudgetForHomePage('min', ' 40000000','20','');">&#8377;4 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="21" onclick="updateHomeBudgetForHomePage('min', ' 45000000','21','');">&#8377;4.5 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="22" onclick="updateHomeBudgetForHomePage('min', ' 50000000','22','');">&#8377;5 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="23" onclick="updateHomeBudgetForHomePage('min', ' 100000000','23','');">&#8377;10 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="24" onclick="updateHomeBudgetForHomePage('min', ' 200000000','24','');">&#8377;20 Cr</div>
</div>
<div class="mb-search__min-max webkit__scroll-search" id="maxBudjet" style="display: none; margin-left: 110px;">
<div class="mb-search__min-max__item" onclick="updateHomeBudgetForHomePage('max','Max','24','')">Max</div>
<div class="mb-search__min-max__item" data-actualIndex="0" id="maxBhkIndex_0" onclick="updateHomeBudgetForHomePage('max', ' 500000','0','');">&#8377;5 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="1" id="maxBhkIndex_1" onclick="updateHomeBudgetForHomePage('max', ' 1000000','1','');">&#8377;10 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="2" id="maxBhkIndex_2" onclick="updateHomeBudgetForHomePage('max', ' 2000000','2','');">&#8377;20 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="3" id="maxBhkIndex_3" onclick="updateHomeBudgetForHomePage('max', ' 3000000','3','');">&#8377;30 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="4" id="maxBhkIndex_4" onclick="updateHomeBudgetForHomePage('max', ' 4000000','4','');">&#8377;40 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="5" id="maxBhkIndex_5" onclick="updateHomeBudgetForHomePage('max', ' 5000000','5','');">&#8377;50 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="6" id="maxBhkIndex_6" onclick="updateHomeBudgetForHomePage('max', ' 6000000','6','');">&#8377;60 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="7" id="maxBhkIndex_7" onclick="updateHomeBudgetForHomePage('max', ' 7000000','7','');">&#8377;70 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="8" id="maxBhkIndex_8" onclick="updateHomeBudgetForHomePage('max', ' 8000000','8','');">&#8377;80 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="9" id="maxBhkIndex_9" onclick="updateHomeBudgetForHomePage('max', ' 9000000','9','');">&#8377;90 Lac</div>
<div class="mb-search__min-max__item" data-actualIndex="10" id="maxBhkIndex_10" onclick="updateHomeBudgetForHomePage('max', ' 10000000','10','');">&#8377;1 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="11" id="maxBhkIndex_11" onclick="updateHomeBudgetForHomePage('max', ' 12000000','11','');">&#8377;1.2 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="12" id="maxBhkIndex_12" onclick="updateHomeBudgetForHomePage('max', ' 14000000','12','');">&#8377;1.4 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="13" id="maxBhkIndex_13" onclick="updateHomeBudgetForHomePage('max', ' 16000000','13','');">&#8377;1.6 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="14" id="maxBhkIndex_14" onclick="updateHomeBudgetForHomePage('max', ' 18000000','14','');">&#8377;1.8 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="15" id="maxBhkIndex_15" onclick="updateHomeBudgetForHomePage('max', ' 20000000','15','');">&#8377;2 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="16" id="maxBhkIndex_16" onclick="updateHomeBudgetForHomePage('max', ' 23000000','16','');">&#8377;2.3 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="17" id="maxBhkIndex_17" onclick="updateHomeBudgetForHomePage('max', ' 26000000','17','');">&#8377;2.6 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="18" id="maxBhkIndex_18" onclick="updateHomeBudgetForHomePage('max', ' 30000000','18','');">&#8377;3 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="19" id="maxBhkIndex_19" onclick="updateHomeBudgetForHomePage('max', ' 35000000','19','');">&#8377;3.5 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="20" id="maxBhkIndex_20" onclick="updateHomeBudgetForHomePage('max', ' 40000000','20','');">&#8377;4 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="21" id="maxBhkIndex_21" onclick="updateHomeBudgetForHomePage('max', ' 45000000','21','');">&#8377;4.5 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="22" id="maxBhkIndex_22" onclick="updateHomeBudgetForHomePage('max', ' 50000000','22','');">&#8377;5 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="23" id="maxBhkIndex_23" onclick="updateHomeBudgetForHomePage('max', ' 100000000','23','');">&#8377;10 Cr</div>
<div class="mb-search__min-max__item" data-actualIndex="24" id="maxBhkIndex_24" onclick="updateHomeBudgetForHomePage('max', ' 200000000','24','');">&#8377;20 Cr</div>
</div>
</div>
</div>
</div>
                           </div>
                           <!--<div class="btn-group" role="group">
                              <button type="button" data-toggle="dropdown" value="1" class="btn btn-default btn-sm dropdown-toggle">
                                Option 1 <span >
                              
                              <i class="fa fa-angle-down"></i>
                              
                              </span>
                              </button>
                              
                              
                              
                              <div class="dropdown-menu">
                               <button class="tablink" onclick="openPage('Home', this, 'red')">Home</button>
                              <button class="tablink" onclick="openPage('News', this, 'green')" id="defaultOpen">News</button>
                              <button class="tablink" onclick="openPage('Contact', this, 'blue')">Contact</button>
                              <button class="tablink" onclick="openPage('About', this, 'orange')">About</button>
                              
                              <div id="Home" class="tabcontent">
                              <h3>Home</h3>
                              <p>Home is where the heart is..</p>
                              </div>
                              
                              <div id="News" class="tabcontent">
                              <h3>News</h3>
                              <p>Some news this fine day!</p> 
                              </div>
                              
                              <div id="Contact" class="tabcontent">
                              <h3>Contact</h3>
                              <p>Get in touch, or swing by for a cup of coffee.</p>
                              </div>
                              
                              <div id="About" class="tabcontent">
                              <h3>About</h3>
                              <p>Who we are and what we do.</p>
                              </div>
                              
                              </div>
                              </div> -->
							  <script>
	var _gaq = _gaq || [];
	var selectedTab="B";
	var budgetList="500000,1000000,2000000,3000000,4000000,5000000,6000000,7000000,8000000,9000000,10000000,12000000,14000000,16000000,18000000,20000000,23000000,26000000,30000000,35000000,40000000,45000000,50000000,100000000,200000000,";
	var isNRISearchWidget = "";
	var homeLoanBannerCityList="[4320, 3327, 2060, 4378, 6403, 2951, 6146, 2944, 7045, 2624]";
	function fireGARetarget(source){
		window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
		ga('create', 'UA-492553-10', 'auto');
        ga('send', 'pageview');
		ga('send', 'event', 'MB Prime Entry Point Clicked',source);
	}

</script>
                           <div class="col-md-5 padd">
                              <div class="form-search">
                                 <form>
                                    <div class="box-group">
                                       <input type="text" class="form-control" placeholder="Locality...">
                                       <i class="fa fa-map-marker"> Near Me</i>
                                       <button class="btn btn-search" type="button"><span>search</span></button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
</section>
<!--banner end here--> 
<!-- MAIN -->
<main class="site-main" style="">
<section class="services section-bg" id="services">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
<div class="section-title section-header  left-text">
<h2>Exclusive Owner Properties in Goa</h2>
</div>
</div>
</div>
<div class="row" >
<div class="col-md-6 col-lg-3">
<div class="box box-1">
<!-- <div class="icon" style="background: #000;">
   <i class="fa fa-briefcase service-icon" style="color: #c59c35;"></i>
   </div>-->
<h4 class="title">
<a href="javascript:void()" class="title-text"><span>9K+</span> Properties listed for you </a>
</h4>
<!--<a href="javascript:void()">Continue last search <i class="fa fa-arrow-right" aria-hidden="true"></i>
   </a>-->
</div> 
</div>
<div class="col-md-6 col-lg-3">
<div class="box box-2">
<h4 class="title">
<a href="javascript:void()" class="title-text">
<span>9K+</span>Personalised property 
</a>
</h4>
<!--<a href="">See all<i class="fa fa-arrow-right" aria-hidden="true"></i></a>-->
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="box box-3">
<!-- <div class="icon" style="background: #000;">
   <i class="fa fa-briefcase service-icon" style="color: #c59c35;"></i>
   </div>-->
<h4 class="title">
<a href="javascript:void()" class="title-text"><span>9K+</span>
Properties listed for you
</a>
</h4>
<!--<a href="">See all<i class="fa fa-arrow-right" aria-hidden="true"></i></a>-->
</div>
</div>
<div class="col-md-6 col-lg-3">
<div class="box box-4">
<!-- <div class="icon" style="background: #000;">
   <i class="fa fa-briefcase service-icon" style="color: #c59c35;"></i>
   </div>-->
<h4 class="title">
<a href="javascript:void()" class="title-text"><span>9K+</span>
Properties listed for you
</a>
</h4>
<!--<a href="">See all<i class="fa fa-arrow-right" aria-hidden="true"></i></a>-->
</div>
</div>
</div>
</div>
</section>
<section class="popular_owner">
<div class="clearfix space-remv" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">
<!-- block -floor -products / floor 1 :Fashion-->
<div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1">
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
<div class="block-content" >
<div class="col-products tab-content">
<div class="owl-carousel" data-nav="true"  data-dots="false" data-margin="0" 
   data-responsive='{"0":{"items":1},"420":{"items":2},"600":{"items":3},"768":{"items":3},
   "992":{"items":3},
   "1200":{"items":4}
   }'>
@foreach($top_property as $property)
<div class=" product-item  product-item-opt-1">
<div class="product-item-info" >
<div class="product-item-photo">
<a class="product-item-img" href="{{route('property_details',['id'=>$property->id])}}">
<img src="{{$compress.'/'.getPrimaryImage($property->id)}}" style="height:180px;"></a>
<button type="button" class="btn btn-cart"><span> {{$property->property_name}} </span></button>
<span class="product-item-label label-price">9</span>
</div>
<div class="product-item-detail">
<strong class="product-item-name">
<a href=""> 2 BHK</a>
</strong>
<div class="clearfix">
<div class="product-item-price">
<span class="price">
₹{{!empty($property->monthly_rent) ? $property->monthly_rent : ''}}
</span>
<p> {{!empty($property->city) ? $property->city : ''}} ,	{{!empty($property->state) ? $property->state : ''}}</p>
</div>
<div class="product-reviews-summary">
<div class="rating-summary">
<div title="80%" class="rating-result">
<span style="width:80%">
<span>
<span>80</span>% of     <span>100</span>
</span>
</span>
</div>
</div>
</div>
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
<section class="Trending_sec">
<div class="clearfix  space-remv" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">
<!-- block -floor -products / floor 1 :Fashion-->
<div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
<div class="section-title section-header  left-text">
<h2>Trending Properties
</h2>
</div>
</div>
<div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
<div class="section-title section-header text-center">
<a href="" class="button button-info-default xsmall rounded">See all Properties <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
<p></p>
</div>
</div>
</div>
<div class="block-content">
<div class="col-products tab-content">
<div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0" 
   data-responsive='{"0":{"items":1},"420":{"items":2},"600":{"items":3},"768":{"items":3},
   "992":{"items":3}, "1200":{"items":4}}'>
@foreach($top_property as $property)
<div class=" product-item  product-item-opt-1">
<div class="product-item-info" >
<div class="product-item-photo">
<a class="product-item-img" href="{{route('property_details',['id'=>$property->id])}}">
<img src="{{$compress.'/'.getPrimaryImage($property->id)}}" style="height:180px;"></a>
<button type="button" class="btn btn-cart"><span> {{$property->property_name}} </span></button>
<span class="product-item-label label-price">9</span>
</div>
<div class="product-item-detail">
<strong class="product-item-name">
<a href=""> 2 BHK</a>
</strong>
<div class="clearfix">
<div class="product-item-price">
<span class="price">
₹{{!empty($property->monthly_rent) ? $property->monthly_rent : ''}}
</span>
<p> {{!empty($property->city) ? $property->city : ''}} ,	{{!empty($property->state) ? $property->state : ''}}</p>
</div>
<div class="product-reviews-summary">
<div class="rating-summary">
<div title="80%" class="rating-result">
<span style="width:80%">
<span>
<span>80</span>% of     <span>100</span>
</span>
</span>
</div>
</div>
</div>
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
<section class="feature_project">
<div class="clearfix  space-remv" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">
<div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
<div class="section-title section-header  left-text">
<h2> Featured Projects </h2>
</div>
</div>
<div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
<div class="section-title section-header text-center">
<a href="" class="button button-info-default xsmall rounded">See all Properties <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
<p></p>
</div>
</div>
</div>
<div class="block-content" >
<div class="col-products tab-content">
<div class="owl-carousel" data-nav="true"  data-dots="false" data-margin="0" 
   data-responsive='{"0":{"items":1},"420":{"items":2}}'>
@foreach($top_property as $property)
<div class=" product-item  product-item-opt-1">
<div class="product-item-info" >
<div class="product-item-photo">
<a class="product-item-img" href="{{route('property_details',['id'=>$property->id])}}">
<img src="{{$compress.'/'.getPrimaryImage($property->id)}}" style="height:180px;"></a>
<button type="button" class="btn btn-cart"><span> {{$property->property_name}} </span></button>
<span class="product-item-label label-price">9</span>
</div>
<div class="product-item-detail">
<strong class="product-item-name">
<a href=""> 2 BHK</a>
</strong>
<div class="clearfix">
<div class="product-item-price">
<span class="price">
₹{{!empty($property->monthly_rent) ? $property->monthly_rent : ''}}
</span>
<p> {{!empty($property->city) ? $property->city : ''}} ,	{{!empty($property->state) ? $property->state : ''}}</p>
</div>
<div class="product-reviews-summary">
<div class="rating-summary">
<div title="80%" class="rating-result">
<span style="width:80%">
<span>
<span>80</span>% of     <span>100</span>
</span>
</span>
</div>
</div>
</div>
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
<section class="Top_Projects">
<div class="clearfix  space-remv" style="background-color: #eeeeee; padding-top:30px;">
<!-- block -floor -products / floor 1 :Fashion-->
<div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
<div class="section-title section-header  left-text">
<h2>Top Properties 
</h2>
</div>
</div>
<div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
<div class="section-title section-header text-center">
<a href="" class="button button-info-default xsmall rounded">See all Properties <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
<p></p>
</div>
</div>
</div>
<div class="block-content">
<div class="col-products tab-content">
<div class="owl-carousel"data-nav="true" data-dots="false" data-margin="0" 
   data-responsive='{"0":{"items":1},"420":{"items":2},"600":{"items":3},"768":{"items":3},
   "992":{"items":3},"1200":{"items":4}}'>
@foreach($top_property as $property)
<div class=" product-item  product-item-opt-1">
<div class="product-item-info" >
<div class="product-item-photo">
<a class="product-item-img" href="{{route('property_details',['id'=>$property->id])}}">
<img src="{{$compress.'/'.getPrimaryImage($property->id)}}" style="height:180px;"></a>
<button type="button" class="btn btn-cart"><span> {{$property->property_name}} </span></button>
<span class="product-item-label label-price">9</span>
</div>
<div class="product-item-detail">
<strong class="product-item-name">
<a href=""> 2 BHK</a>
</strong>
<div class="clearfix">
<div class="product-item-price">
<span class="price">
₹{{!empty($property->monthly_rent) ? $property->monthly_rent : ''}}
</span>
<p> {{!empty($property->city) ? $property->city : ''}} ,	{{!empty($property->state) ? $property->state : ''}}</p>
</div>
<div class="product-reviews-summary">
<div class="rating-summary">
<div title="80%" class="rating-result">
<span style="width:80%">
<span>
<span>80</span>% of     <span>100</span>
</span>
</span>
</div>
</div>
</div>
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
<div class="block-floor-products block-floor-products-opt1 floor-products2" id="floor0-2">
<div class="container">
<div class="block-content">
<div class="col-banner box-banner">
<p class="text-center"> Top locality in  </p>
<span class="text-center">Goa</span>
</div>
<div class="col-products tab-content products-left">
<div class="tab-pane active in  fade " id="floor2-1" role="tabpanel">
<div class="owl-carousel" data-nav="true" data-dots="false" data-margin="0" 
   data-responsive='{"0":{"items":1},"420":{"items":2},"600":{"items":3},"768":{"items":3},
   "992":{"items":3},"1200":{"items":3}}'>
@foreach($top_property as $property)
<div class="product-item  product-item-opt-1 ">
<div class="product-item-info border-top">
<div class="product-item-detail">
<strong class="product-item-name"><a href="" class="title">
{{$property->property_name}}
</a></strong>
<div class="price">
<span class="rupees">₹</span>3,497 - 
<span class="rupees">₹</span>10,887
per sqft
</div>
<div class="price price-slider">
<span class="rupees rupe">3.6</span>
<span class="rupees doller">₹ 10,887
per sqft</span>
</div>
<div class="mb-home">
<img class="swiper-lazy " src="{{$compress.'/'.getPrimaryImage($property->id)}}" style="border-radius:25px;">
</div>
<div class="btn-search">
<a href="{{route('property_details',['id'=>$property->id])}}" class="cont_btn">View Details <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
</div>
<div class="clearfix">
<div class="product-reviews-summary">
<div class="rating-summary">
<div title="80%" class="rating-result">
<span style="width:80%">
<span><span>80</span>% of <span>100</span></span>
</span>
</div>
</div>
</div>
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
<section class="subscribe-area pb-50 pt-70">
<div class="container">
<div class="news-letter">
<div class="row">
<div class="col-md-6">
<div class="subscribe-text mb-15">
<span> Looking to sell your home ?. </span>
<h2> Post your property Ad for free. </h2>
</div>
</div>
<div class="col-md-6">
<div class="subscribe-wrapper subscribe2-wrapper mb-15">
<div class="subscribe-form">
<a href="javascript:void()" class="postProperty">
<button>
Post Property  <span>FREE </span></button>
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="upcoming_project_gallery_1">
<div class="clearfix  space-remv" style="background-color: #eeeeee;">
<div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
<div class="section-title section-header  left-text">
<h2> Upcoming Project Gallery </h2>
</div>
</div>
<div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
<div class="section-title section-header text-center">
<a href="" class="button button-info-default xsmall rounded">See all Properties <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
<p></p>
</div>
</div>
</div>
<div class="block-content" >
<div class="col-products tab-content">
<div class="owl-carousel" data-nav="true"  data-dots="false" data-margin="0" 
   data-responsive='{"0":{"items":1},"420":{"items":2},"420":{"items":3}}'>
@foreach($top_property as $property)
<div class="product-item-info"  >
<div class="row">
<div class="col-sm-5" style="padding:0px;">
<img src="{{$compress.'/'.getPrimaryImage($property->id)}}" style="border-radius: 8px 0px 0px 8px;height:200px;object-fit: contain; width: 152px; padding-left: 30px;"> 
</div>
<div class="col-sm-7" style="padding-left:15px;border-left: 1px dashed lightgray;">
<p> <b> TGC Gliff Gardens CV  </b> </p>
<p>  TGC Real State </p>
<p>  Ghaziabad </p>
<br>
<p>  1,2 BHK Flats </p>
<p>  3 Lac onwards </p>
<p>  Marketed By Real State </p>
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
<section class="upcoming_project_gallery_2">
<div class="clearfix  space-remv" style="background-color: #eeeeee;margin-bottom:40px;margin-top:-20px;">
<div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1">
<div class="container">
<div class="block-content" >
<div class="col-products tab-content">
<div class="owl-carousel" data-nav="true"  data-dots="false" data-margin="0" 
   data-responsive='{"0":{"items":1},"420":{"items":2},"420":{"items":3}}'>
@foreach($top_property as $property)
<div class="product-item-info"  >
<div class="row">
<div class="col-sm-5" style="padding:0px;">
<img src="{{$compress.'/'.getPrimaryImage($property->id)}}" style="border-radius: 8px 0px 0px 8px;height:200px;object-fit: contain; width: 152px; padding-left: 30px;"> 
</div>
<div class="col-sm-7" style="padding-left:15px;border-left: 1px dashed lightgray;">
<p> <b> TGC Gliff Gardens CV  </b> </p>
<p>  TGC Real State </p>
<p>  Ghaziabad </p>
<br>
<p>  1,2 BHK Flats </p>
<p>  3 Lac onwards </p>
<p>  Marketed By Real State </p>
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
<section class="upcoming_project_gallery_1">
<div class="clearfix  space-remv" style="background-color: #eeeeee;">
<div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
<div class="section-title section-header  left-text">
<h2> Featured Developers </h2>
</div>
</div>
<div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
<div class="section-title section-header text-center">
<a href="" class="button button-info-default xsmall rounded">See all Properties <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
<p></p>
</div>
</div>
</div>
<div class="block-content" >
<div class="col-products tab-content">
<div class="owl-carousel" data-nav="true"  data-dots="false" data-margin="0" 
   data-responsive='{"0":{"items":1},"420":{"items":2},"420":{"items":3}}'>
@foreach($top_property as $property)
<div class="product-item-info"  >
<div class="row">
<div class="col-sm-5" style="padding:0px;">
<img src="{{$compress.'/'.getPrimaryImage($property->id)}}" style="border-radius: 8px 0px 0px 8px;height:200px;object-fit: contain; width: 152px; padding-left: 30px;"> 
</div>
<div class="col-sm-7 padd-parts" style="padding-left:15px;border-left: 1px dashed lightgray;">
<p> <b> TGC Gliff Gardens CV  </b> </p>
<p>  TGC Real State </p>
<p>  Ghaziabad </p>
<br>
<p>  1,2 BHK Flats </p>
<p>  3 Lac onwards </p>
<p>  Marketed By Real State </p>
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
<section class="upcoming_project_gallery_2">
<div class="clearfix  space-remv" style="background-color: #eeeeee;margin-bottom:40px;margin-top:-20px;">
<div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1">
<div class="container">
<div class="block-content" >
<div class="col-products tab-content">
<div class="owl-carousel" data-nav="true"  data-dots="false" data-margin="0" 
   data-responsive='{"0":{"items":1},"420":{"items":2},"420":{"items":3}}'>
@foreach($top_property as $property)
<div class="product-item-info"  >
<div class="row">
<div class="col-sm-5" style="padding:0px;">
<img src="{{$compress.'/'.getPrimaryImage($property->id)}}" style="border-radius: 8px 0px 0px 8px;height:200px;object-fit: contain; width: 152px; padding-left: 30px;"> 
</div>
<div class="col-sm-7" style="padding-left:15px;border-left: 1px dashed lightgray;">
<p> <b> TGC Gliff Gardens CV  </b> </p>
<p>  TGC Real State </p>
<p>  Ghaziabad </p>
<br>
<p>  1,2 BHK Flats </p>
<p>  3 Lac onwards </p>
<p>  Marketed By Real State </p>
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
</main>
<!-- end MAIN -->
<section class="video-partssss">
<div class="container">
<div class="row">
<div class="section-title section-header  left-text right-title">
<h2> Your Goa Guide</h2>
</div>
<div class="col-lg-4 col-md-12 ">
<div id="myCarousel" class="carousel slide box-seccc" data-ride="carousel">
<p> <b> Locality Video </b> </p>
<!-- Carousel indicators -->
<ol class="carousel-indicators">
<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
<li data-target="#myCarousel" data-slide-to="1"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
<li data-target="#myCarousel" data-slide-to="4"></li>
<li data-target="#myCarousel" data-slide-to="5"></li>
<li data-target="#myCarousel" data-slide-to="6"></li>
<li data-target="#myCarousel" data-slide-to="7"></li>
</ol> <!-- Wrapper for carousel items -->
<div class="carousel-inner">
<div class="item carousel-item active">
<iframe width="100%" height="200" src="https://www.youtube.com/embed/-ZtDsf65d0I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p> Looking to sell your home ?.Looking to sell your home ?. </p>
</div>
<div class="item carousel-item">
<iframe width="100%" height="200" src="https://www.youtube.com/embed/-ZtDsf65d0I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p> Looking to sell your home ?.Looking to sell your home ?. </p>
</div>
<div class="item carousel-item">
<iframe width="100%" height="200" src="https://www.youtube.com/embed/-ZtDsf65d0I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p> Looking to sell your home ?.Looking to sell your home ?. </p>
</div>
<div class="item carousel-item">
<iframe width="100%" height="200" src="https://www.youtube.com/embed/-ZtDsf65d0I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p> Looking to sell your home ?.Looking to sell your home ?. </p>
</div>
<div class="item carousel-item">
<iframe width="100%" height="200" src="https://www.youtube.com/embed/-ZtDsf65d0I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p> Looking to sell your home ?.Looking to sell your home ?. </p>
</div>
<div class="item carousel-item">
<iframe width="100%" height="200" src="https://www.youtube.com/embed/-ZtDsf65d0I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p> Looking to sell your home ?.Looking to sell your home ?. </p>
</div>
<div class="item carousel-item">
<iframe width="100%" height="200" src="https://www.youtube.com/embed/-ZtDsf65d0I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p> Looking to sell your home ?.Looking to sell your home ?. </p>
</div>
<div class="item carousel-item">
<iframe width="100%" height="200" src="https://www.youtube.com/embed/-ZtDsf65d0I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p> Looking to sell your home ?.Looking to sell your home ?. </p>
</div>
<div class="item carousel-item">
<iframe width="100%" height="200" src="https://www.youtube.com/embed/-ZtDsf65d0I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<p> Looking to sell your home ?.Looking to sell your home ?. </p>
</div>
</div> 
</div>
</div>
<div class="col-lg-4 col-md-12 ">
<div class="contact-info box-seccc">
<h3 class="title">Industry insight</h3>
<div class="info">
<div class="social-information"> <i class="fa fa-volume-off" aria-hidden="true"></i>
<p>NPM,NY,USA</p>
</div>
<div class="social-information"> <i class="fa fa-volume-off" aria-hidden="true"></i>
<p>contact@bbbootstrap.com</p>
</div>
<div class="social-information"> <i class="fa fa-volume-off" aria-hidden="true"></i>
<p>+1 989 989 9898 </p>
</div>
</div>
<div class="social-information"> <i class="fa fa-volume-off" aria-hidden="true"></i>
<p>+1 989 989 9898 </p>
</div>
<div class="social-information"> <i class="fa fa-volume-off" aria-hidden="true"></i>
<p>+1 989 989 9898 </p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12 ">
<div class="box-seccc">
<h3 class="title">Legal Updates</h3>
<div class="widget-body">
<div class="widget-posts">
<article class="post">
<figure class="post-thumbnail">
<a href="https://klbtheme.com/bacola/blog/but-i-must-explain-to-you-how-all-this-mistaken-idea/">          <iframe width="100%" height="200" src="https://www.youtube.com/embed/-ZtDsf65d0I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></a>
</figure>
<div class="post-wrapper">
<h2 class="entry-title"><a href="https://klbtheme.com/bacola/blog/but-i-must-explain-to-you-how-all-this-mistaken-idea/" title="But I must explain to you how all this mistaken idea">But I must explain to you how all </a></h2>
<div class="klb-readmore entry-button"><a class="button" href="https://klbtheme.com/bacola/blog/but-i-must-explain-to-you-how-all-this-mistaken-idea/">Watch video <i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
</div>
</article>
<article class="post">
<figure class="post-thumbnail">
<a href="https://klbtheme.com/bacola/blog/the-problem-with-typefaces-on-the-web/"><img src="https://klbtheme.com/bacola/wp-content/uploads/2021/05/blog-5-100x100.jpg" alt="The Problem With Typefaces on the Web"></a>
</figure>
<div class="post-wrapper">
<h2 class="entry-title"><a href="https://klbtheme.com/bacola/blog/the-problem-with-typefaces-on-the-web/" title="The Problem With Typefaces on the Web">The Problem With Typefaces  </a></h2>
<div class="klb-readmore entry-button"><a class="button" href="https://klbtheme.com/bacola/blog/but-i-must-explain-to-you-how-all-this-mistaken-idea/">Read article <i class="fa fa-arrow-right" aria-hidden="true"></i></a></div>
</div>
</article>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section>
   <div class="container">
      <p style="background-color:whitesmoke;">
         Launched in 2022, Nestray is Goa's online Property marketplace to buy, sell, and rent residential commercial properties. Adjudged as the most preferred real estate portal in India by various independent surveys.
         <br>
         <b>Disclaimer:</b> Magicbricks Realty Services Limited is only an intermediary offering its platform to advertise properties of Seller for a Customer/Buyer/User coming on its Website and is not and cannot be a party to or control in any manner any transitions between the Seller and the Customer/Buyer/User. All the offers and discounts on this.
      </p>
   </div>
</section>
<br>
<div class="mb-home__modal" id="mb-home__modal">
<div class="mb-home__modal__box">
<a href="javascript:void(0); " class="mb-home__modal--close" onclick="mbHomeWeb.modalBoxClose(event);"></a>
<div class="mb-home__modal__body"></div>
</div>
</div>
<div id="mbNps"> </div>
<script type="text/javascript">
	// var campaignForSrp = "";
	// if(typeof campaignForSrp !== 'undefined' && campaignForSrp != null && campaignForSrp != '' && campaignForSrp == 'true'){
	// 	window.location.assign('https://www.magicbricks.com/'+'mbsrp/homesearchfilter-sell?from=home&category=S&propertyType=10002,10003,10021,10022,10001,10017&bedrooms=11701,11702&city=7058&tab=buy&campaignForSrp=true&utm_source=&utm_medium=&utm_campaign=')
	// }
	function loadJS(file) {
		var jsElm = document.createElement("script");
		jsElm.type = "application/javascript";
		jsElm.src = file;
		document.body.appendChild(jsElm);
	}
	function loadExtJS(){
		loadJS("https://cdn.staticmb.com/magicservicestatic/1661869427873/js/mb-home-web.js");
		setTimeout(function(){
			loadTracking();
		}, 3500);
	}
	
	function loadTracking(){
		var _comscore = _comscore || [];
		_comscore.push({
		c1: "2",
		c2: "6036484"
		});
		(function () {
		var s = document.createElement("script"),
		el = document.getElementsByTagName("script")[0];
		s.async = true;
		s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
		el.parentNode.insertBefore(s, el);
		})();
	
// 		loadJS("https://www.google-analytics.com/analytics.js");
		
// 		(function (w, d, s, l, i) {
// 		  w[l] = w[l] || [];
// 		  w[l].push({ 'gtm.start': new Date().getTime(), event: 'gtm.js' });
// 		  var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
// 		  j.async = true;
// 		  j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
// 		  f.parentNode.insertBefore(j, f);
// 		})(window, document, 'script', 'MB_GTM_dataLayer', 'GTM-N7Q8HKZ');
		
		/*--Start of Zendesk Chat Script--*/
		
		if(isNRI == 'Y'){
			let myScript = document.createElement("script");
			myScript.setAttribute("id", "ze-snippet");
			myScript.setAttribute("src", "https://static.zdassets.com/ekr/snippet.js?key=0a1546fa-b1f0-46eb-9400-f08b4f00549b");
			document.body.appendChild(myScript);
		}
		
	
	}
</script>


<script type="text/javascript">
function openRentUrlInNewTab(url) {
	window.open(url, "_blank");
}
</script>
@endsection
@push('scripts')
<script>
   console.log('home page');
</script>

@endpush