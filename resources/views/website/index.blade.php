<!DOCTYPE html>
<html lang="en">
   <head>
      <title> Property Rental</title>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Style CSS -->
      <link rel="stylesheet" type="text/css" href="{{asset('public/frontend')}}/css/style.css">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
   </head>
   <body class="cms-index-index index-opt-1">
      <div class="wrapper">
         
      <!--top navigation start here-->
      @include('website/layout/top_navigation') 
      <!--top navigation end here-->  
      <!--banner start here-->   
      <section class="search-banner">
            <div class="header-content">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12 center-sec">
                        <div class="left-list">
                           <div class="block-title">
                              <span class="title">
                              Welcome back! Let’s continue your search
                              </span>
                           </div>
                           <!-- block search -->
                           <ul>
                              <li role="presentation" class="active"><a href="#floor1-1" role="tab">Best Seller </a></li>
                              <span class="mb-search__tab__ani" style="width: 58.4531px; left: 77.8438px;"></span>
                              <li role="presentation"><a href="#floor1-2" role="tab" data-toggle="tab">Most Viewed </a></li>
                              <li role="presentation"><a href="#floor1-3" role="tab" data-toggle="tab">New Arrivals <span class="label-cat">12</span></a></li>
                              <li role="presentation"><a href="#floor1-4" role="tab" data-toggle="tab">Women </a></li>
                              <li role="presentation"><a href="#floor1-5" role="tab" data-toggle="tab">Men</a></li>
                              <li role="presentation"><a href="#floor1-6" role="tab" data-toggle="tab">Kids </a></li>
                              <li role="presentation"><a href="#floor1-7" role="tab" data-toggle="tab">Accessories</a></li>
                           </ul>
                        </div>
                        <div class="nav-mind">
                           <div class="block-search">
                              <div class="block-title">
                                 <span>Search</span>
                              </div>
                              <div class="block-content">
                                 <div class="categori-search  ">
                                    <select data-placeholder="All Categories" class="categori-search-option" style="display: none;">
                                       <option>All Categories</option>
                                       <option>Fashion</option>
                                       <option>Tops Blouses</option>
                                       <option>Clothing</option>
                                       <option>Furniture</option>
                                       <option>Bathtime Goods</option>
                                       <option>Shower Curtains</option>
                                    </select>
                                 </div>
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
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
      <!--banner end here--> 
      <!-- MAIN -->
      <main class="site-main" style="border:2px solid red;">
    <section class="services section-bg" id="services">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
    <div class="section-title section-header  left-text">
    <h2>Exclusive Owner Properties in Chennai</h2>
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-md-6 col-lg-3">
    <div class="box box-1">
    <!-- <div class="icon" style="background: #000;">
     <i class="fa fa-briefcase service-icon" style="color: #c59c35;"></i>
     </div>-->
    <h4 class="title"><a href="" class="title-text"><span>9K+</span>
    Properties listed for you
    </a></h4>
      <a href="">Continue last search <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      </div>  </div>

    <div class="col-md-6 col-lg-3">
    <div class="box box-2">
    <!-- <div class="icon" style="background: #000;">
     <i class="fa fa-briefcase service-icon" style="color: #c59c35;"></i>
     </div>-->
    <h4 class="title"><a href="" class="title-text">
    Get personalised property recommendations from us
    </a></h4>
      <a href="">See all<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>
    </div>
    <div class="col-md-6 col-lg-3">
    <div class="box box-3">
    <!-- <div class="icon" style="background: #000;">
     <i class="fa fa-briefcase service-icon" style="color: #c59c35;"></i>
     </div>-->
    <h4 class="title"><a href="" class="title-text"><span>9K+</span>
    Properties listed for you
    </a></h4>
      <a href="">See all<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>
    </div>
    <div class="col-md-6 col-lg-3">
    <div class="box box-4">
    <!-- <div class="icon" style="background: #000;">
     <i class="fa fa-briefcase service-icon" style="color: #c59c35;"></i>
     </div>-->
    <h4 class="title"><a href="" class="title-text"><span>9K+</span>
    Properties listed for you
    </a></h4>
      <a href="">See all<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    </div>
    </div>
    </div>
    </div>
    </section>
    <section class="popular_owner">
    <div class="clearfix" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">
    <!-- block -floor -products / floor 1 :Fashion-->
    <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
    <div class="section-title section-header  left-text">
    <h2>Exclusive Owner Properties in Chennai</h2>
    </div>
    </div>
    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
    <div class="section-title section-header text-center">
    <a href="https://klbtheme.com/bacola/shop/" class="button button-info-default xsmall rounded">See all Properties <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    <p></p>
    </div>
    </div>
    </div>
    <div class="block-content">
    <div class="col-products tab-content">
    <div class="owl-carousel" 
     data-nav="true" 
     data-dots="false" 
     data-margin="0" 
     data-responsive='{
     "0":{"items":1},
     "420":{"items":2},
     "600":{"items":3},
     "768":{"items":3},
     "992":{"items":3},
     "1200":{"items":4}
     }'>
    <div class=" product-item  product-item-opt-1 ">
    <div class="product-item-info">
    <div class="product-item-photo">
    <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/57808113_6_MG-20211212-WA0006_180_240.jpg"></a>
    <button type="button" class="btn btn-cart"><span>Contact Owner</span></button>
    <span class="product-item-label label-price">9</span>
    </div>
    <div class="product-item-detail">
    <strong class="product-item-name"><a href=""> 2 BHK
    </a></strong>
    <div class="clearfix">
    <div class="product-item-price">
    <span class="price">₹12,000 
    </span>
    <strong>
    Karayanchavadi,	Chennai
    </strong>
    <p>Ready to move
    </p>
    </div>
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
    <div class="product-item  product-item-opt-1 ">
    <div class="product-item-info">
    <div class="product-item-photo">
    <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/57808113_6_MG-20211212-WA0006_180_240.jpg"></a>
    <button type="button" class="btn btn-cart"><span>Contact Owner</span></button>
    </div>
    <div class="product-item-detail">
    <strong class="product-item-name"><a href=""> 2 BHK
    </a></strong>
    <div class="clearfix">
    <div class="product-item-price">
    <span class="price">₹12,000 
    </span>
    <strong>
    Karayanchavadi,	Chennai
    </strong>
    <p>Ready to move
    </p>
    </div>
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
    <div class="product-item  product-item-opt-1 ">
    <div class="product-item-info">
    <div class="product-item-photo">
    <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/57808113_6_MG-20211212-WA0006_180_240.jpg"></a>
    <button type="button" class="btn btn-cart"><span>Contact Owner</span></button>
    </div>
    <div class="product-item-detail">
    <strong class="product-item-name"><a href=""> 2 BHK
    </a></strong>
    <div class="clearfix">
    <div class="product-item-price">
    <span class="price">₹12,000 
    </span>
    <strong>
    Karayanchavadi,	Chennai
    </strong>
    <p>Ready to move
    </p>
    </div>
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
    <div class="product-item  product-item-opt-1 ">
    <div class="product-item-info">
    <div class="product-item-photo">
    <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/57808113_6_MG-20211212-WA0006_180_240.jpg"></a>
    <button type="button" class="btn btn-cart"><span>Contact Owner</span></button>
    </div>
    <div class="product-item-detail">
    <strong class="product-item-name"><a href=""> 2 BHK
    </a></strong>
    <div class="clearfix">
    <div class="product-item-price">
    <span class="price">₹12,000 
    </span>
    <strong>
    Karayanchavadi,	Chennai
    </strong>
    <p>Ready to move
    </p>
    </div>
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
    <div class="product-item  product-item-opt-1 ">
    <div class="product-item-info">
    <div class="product-item-photo">
    <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/57808113_6_MG-20211212-WA0006_180_240.jpg"></a>
    <button type="button" class="btn btn-cart"><span>Contact Owner</span></button>
    </div>
    <div class="product-item-detail">
    <strong class="product-item-name"><a href=""> 2 BHK
    </a></strong>
    <div class="clearfix">
    <div class="product-item-price">
    <span class="price">₹12,000 
    </span>
    <strong>
    Karayanchavadi,	Chennai
    </strong>
    <p>Ready to move
    </p>
    </div>
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
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <section class="details-card our_services">
    <div class="container"><div class="row justify-content-center"><a>
    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
    <div class="section-title section-header  left-text">
    <h2>Property Services</h2>
    </div>
    </div>
    </a>
    </div>
    <div class="row">
    <div class="col-md-3">
    <div class="card-content">
    <div class="card-img">
    <img src="{{asset('public/frontend')}}/images/graphic-home-loans.jpg" alt="">
    </div>
    <div class="card-desc">
    <div class="services-content">
    <h3>Home Loans</h3>
    <p>View & compare your best offers and apply online</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-3">
    <div class="card-content">
    <div class="card-img">
    <img src="{{asset('public/frontend')}}/images/graphic-home-loans.jpg" alt="">
    </div>
    <div class="card-desc">
    <div class="services-content">
    <h3>Home Loans</h3>
    <p>View & compare your best offers and apply online</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-3">
    <div class="card-content">
    <div class="card-img">
    <img src="{{asset('public/frontend')}}/images/graphic-home-loans.jpg" alt="">
    </div>
    <div class="card-desc">
    <div class="services-content">
    <h3>Home Loans</h3>
    <p>View & compare your best offers and apply online</p>
    </div>
    </div>
    </div>
    </div>
    <div class="col-md-3">
    <div class="card-content">
    <div class="card-img">
    <img src="{{asset('public/frontend')}}/images/graphic-home-loans.jpg" alt="">
    </div>
    <div class="card-desc">
    <div class="services-content">
    <h3>Home Loans</h3>
    <p>View & compare your best offers and apply online</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <section class="Top_Projects 
     ">
    <div class="clearfix" style="background-color: #eeeeee; padding-top:30px;">
    <!-- block -floor -products / floor 1 :Fashion-->
    <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
    <div class="section-title section-header  left-text">
    <h2>Top Projects 
    </h2>
    </div>
    </div>
    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
    <div class="section-title section-header text-center">
    <a href="https://klbtheme.com/bacola/shop/" class="button button-info-default xsmall rounded">See all Properties <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    <p></p>
    </div>
    </div>
    </div>
    <div class="block-content">
    <div class="col-products tab-content">
    <div class="owl-carousel" 
     data-nav="true" 
     data-dots="false" 
     data-margin="0" 
     data-responsive='{
     "0":{"items":1},
     "420":{"items":2},
     "600":{"items":3},
     "768":{"items":3},
     "992":{"items":3},
     "1200":{"items":4}
     }'>
    <div class=" product-item  product-item-opt-1 ">
    <div class="product-item-info">
    <div class="product-item-photo">
    <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/57808113_6_MG-20211212-WA0006_180_240.jpg"></a>
    <button type="button" class="btn btn-cart"><span>Contact Owner</span></button>
    <span class="product-item-label label-price">9</span>
    </div>
    <div class="product-item-detail">
    <strong class="product-item-name"><a href=""> 2 BHK
    </a></strong>
    <div class="clearfix">
    <div class="product-item-price product-sliderss">
    <span class="price">₹12,000 
    </span>
    <strong>
    Karayanchavadi,	Chennai
    </strong>
    <p>3 BHK Flats</p>
    <span class="lac-pro">80 Lac  onwards</span>
    <p>Ready to move
    </p>
    </div>
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
    <div class="product-item  product-item-opt-1 ">
    <div class="product-item-info">
    <div class="product-item-photo">
    <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/57808113_6_MG-20211212-WA0006_180_240.jpg"></a>
    <button type="button" class="btn btn-cart"><span>Contact Owner</span></button>
    </div>
    <div class="product-item-detail">
    <strong class="product-item-name"><a href=""> 2 BHK
    </a></strong>
    <div class="clearfix">
    <div class="product-item-price product-sliderss">
    <span class="price">₹12,000 
    </span>
    <strong>
    Karayanchavadi,	Chennai
    </strong>
    <p class="para">3 BHK Flats</p>
    <span class="lac-pro">80 Lac  onwards</span>
    <p>Ready to move
    </p>
    </div>
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
    <div class="product-item  product-item-opt-1 ">
    <div class="product-item-info">
    <div class="product-item-photo">
    <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/57808113_6_MG-20211212-WA0006_180_240.jpg"></a>
    <button type="button" class="btn btn-cart"><span>Contact Owner</span></button>
    </div>
    <div class="product-item-detail">
    <strong class="product-item-name"><a href=""> 2 BHK
    </a></strong>
    <div class="clearfix">
    <div class="product-item-price product-sliderss">
    <span class="price">₹12,000 
    </span>
    <strong>
    Karayanchavadi,	Chennai
    </strong>
    <p class="para">3 BHK Flats</p>
    <span class="lac-pro">80 Lac  onwards</span>
    <p>Ready to move
    </p>
    </div>
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
    <div class="product-item  product-item-opt-1 ">
    <div class="product-item-info">
    <div class="product-item-photo">
    <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/57808113_6_MG-20211212-WA0006_180_240.jpg"></a>
    <button type="button" class="btn btn-cart"><span>Contact Owner</span></button>
    </div>
    <div class="product-item-detail">
    <strong class="product-item-name"><a href=""> 2 BHK
    </a></strong>
    <div class="clearfix">
    <div class="product-item-price product-sliderss">
    <span class="price">₹12,000 
    </span>
    <strong>
    Karayanchavadi,	Chennai
    </strong>
    <p class="para">3 BHK Flats</p>
    <span class="lac-pro">80 Lac  onwards</span>
    <p>Ready to move
    </p>
    </div>
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
    <div class="product-item  product-item-opt-1 ">
    <div class="product-item-info">
    <div class="product-item-photo">
    <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/57808113_6_MG-20211212-WA0006_180_240.jpg"></a>
    <button type="button" class="btn btn-cart"><span>Contact Owner</span></button>
    </div>
    <div class="product-item-detail">
    <strong class="product-item-name"><a href=""> 2 BHK
    </a></strong>
    <div class="clearfix">
    <div class="product-item-price product-sliderss">
    <span class="price">₹12,000 
    </span>
    <strong>
    Karayanchavadi,	Chennai
    </strong>
    <p class="para">3 BHK Flats</p>
    <span class="lac-pro">80 Lac  onwards</span>
    <p>Ready to move
    </p>
    </div>
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
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <section class="Trending_sec
     ">
    <div class="clearfix" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">
    <!-- block -floor -products / floor 1 :Fashion-->
    <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
    <div class="section-title section-header  left-text">
    <h2>Trending in New Delhi
    </h2>
    </div>
    </div>
    <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
    <div class="section-title section-header text-center">
    <a href="https://klbtheme.com/bacola/shop/" class="button button-info-default xsmall rounded">See all Properties <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
    <p></p>
    </div>
    </div>
    </div>
    <div class="block-content">
    <div class="col-products tab-content">
    <div class="owl-carousel" 
     data-nav="true" 
     data-dots="false" 
     data-margin="0" 
     data-responsive='{
     "0":{"items":1},
     "420":{"items":2},
     "600":{"items":3},
     "768":{"items":3},
     "992":{"items":3},
     "1200":{"items":4}
     }'>
    <div class=" product-item  product-item-opt-1 ">
    <div class="product-item-info">
    <div class="product-item-photo">
    <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/57808113_6_MG-20211212-WA0006_180_240.jpg"></a>
    <button type="button" class="btn btn-cart"><span>Contact Owner</span></button>
    <span class="product-item-label label-price">9</span>
    </div>
    <div class="product-item-detail">
    <strong class="product-item-name"><a href=""> 2 BHK
    </a></strong>
    <div class="clearfix">
    <div class="product-item-price">
    <span class="price">₹12,000 
    </span>
    <strong>
    Karayanchavadi,	Chennai
    </strong>
    <p>Ready to move
    </p>
    </div>
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
    <div class="product-item  product-item-opt-1 ">
    <div class="product-item-info">
    <div class="product-item-photo">
    <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/57808113_6_MG-20211212-WA0006_180_240.jpg"></a>
    <button type="button" class="btn btn-cart"><span>Contact Owner</span></button>
    </div>
    <div class="product-item-detail">
    <strong class="product-item-name"><a href=""> 2 BHK
    </a></strong>
    <div class="clearfix">
    <div class="product-item-price">
    <span class="price">₹12,000 
    </span>
    <strong>
    Karayanchavadi,	Chennai
    </strong>
    <p>Ready to move
    </p>
    </div>
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
    <div class="product-item  product-item-opt-1 ">
    <div class="product-item-info">
    <div class="product-item-photo">
    <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/57808113_6_MG-20211212-WA0006_180_240.jpg"></a>
    <button type="button" class="btn btn-cart"><span>Contact Owner</span></button>
    </div>
    <div class="product-item-detail">
    <strong class="product-item-name"><a href=""> 2 BHK
    </a></strong>
    <div class="clearfix">
    <div class="product-item-price">
    <span class="price">₹12,000 
    </span>
    <strong>
    Karayanchavadi,	Chennai
    </strong>
    <p>Ready to move
    </p>
    </div>
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
    <div class="product-item  product-item-opt-1 ">
    <div class="product-item-info">
    <div class="product-item-photo">
    <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/57808113_6_MG-20211212-WA0006_180_240.jpg"></a>
    <button type="button" class="btn btn-cart"><span>Contact Owner</span></button>
    </div>
    <div class="product-item-detail">
    <strong class="product-item-name"><a href=""> 2 BHK
    </a></strong>
    <div class="clearfix">
    <div class="product-item-price">
    <span class="price">₹12,000 
    </span>
    <strong>
    Karayanchavadi,	Chennai
    </strong>
    <p>Ready to move
    </p>
    </div>
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
    <div class="product-item  product-item-opt-1 ">
    <div class="product-item-info">
    <div class="product-item-photo">
    <a class="product-item-img" href=""><img alt="product name" src="{{asset('public/frontend')}}/images/57808113_6_MG-20211212-WA0006_180_240.jpg"></a>
    <button type="button" class="btn btn-cart"><span>Contact Owner</span></button>
    </div>
    <div class="product-item-detail">
    <strong class="product-item-name"><a href=""> 2 BHK
    </a></strong>
    <div class="clearfix">
    <div class="product-item-price">
    <span class="price">₹12,000 
    </span>
    <strong>
    Karayanchavadi,	Chennai
    </strong>
    <p>Ready to move
    </p>
    </div>
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
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- block -floor -products / floor :Fashion->-->
    <!-- block -floor -products / floor 2 :Sports-->
    <div class="block-floor-products block-floor-products-opt1 floor-products2" id="floor0-2">
    <div class="container">
    <div class="block-content">
    <div class="col-banner box-banner">
    <span class="">Explore</span>
    <p>Popular Localities   in New Delhi</p>
    </div>
    <div class="col-products tab-content products-left">
    <div class="tab-pane active in  fade " id="floor2-1" role="tabpanel">
    <div class="owl-carousel" 
     data-nav="true" 
     data-dots="false" 
     data-margin="0" 
     data-responsive='{
     "0":{"items":1},
     "420":{"items":2},
     "600":{"items":3},
     "768":{"items":3},
     "992":{"items":3},
     "1200":{"items":3}
     }'>
    <div class="product-item  product-item-opt-1 ">
    <div class="product-item-info border-top">
    <div class="product-item-detail">
    <strong class="product-item-name"><a href="" class="title">
    Uttam Nagar
    </a></strong>
    <div class="price">
    <span class="rupees">?</span>3,497 - 
    <span class="rupees">?</span>10,887
    per sqft
    </div>	<div class="price price-slider">
    <span class="rupees rupe">3.6</span>
    <span class="rupees doller">? 10,887
    per sqft</span>
    </div>
    <div class="mb-home">
    <img class="swiper-lazy " ssrc="" src="https://cdn.staticmb.com/magicservicestatic/images/topLocality/topLocality01.png">
    </div>
    <div class="btn-search">
    <a href="" class="cont_btn">Continue last search <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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
    <div class="product-item  product-item-opt-1 ">
    <div class="product-item-info border-top">
    <div class="product-item-photo">
    </div>
    <div class="product-item-detail">
    <strong class="product-item-name"><a href="" class="title">
    Uttam Nagar
    </a></strong>
    <div class="price">
    <span class="rupees">?</span>3,497 - 
    <span class="rupees">?</span>10,887
    per sqft
    </div>
    <div class="price price-slider">
    <span class="rupees rupe">3.6</span>
    <span class="rupees doller">? 10,887
    per sqft</span>
    </div>
    <div class="mb-home">
    <img class="swiper-lazy " ssrc="" src="https://cdn.staticmb.com/magicservicestatic/images/topLocality/topLocality01.png">
    </div>
    <div class="btn-search">
    <a href="" class="cont_btn">Continue last search <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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
    <div class="product-item  product-item-opt-1 ">
    <div class="product-item-info border-top">
    <div class="product-item-photo">
    </div>
    <div class="product-item-detail">
    <strong class="product-item-name"><a href="" class="title">
    Uttam Nagar
    </a></strong>
    <div class="price">
    <span class="rupees">?</span>3,497 - 
    <span class="rupees">?</span>10,887
    per sqft
    </div>
    <div class="price price-slider">
    <span class="rupees rupe">3.6</span>
    <span class="rupees doller">? 10,887
    per sqft</span>
    </div>
    <div class="mb-home">
    <img class="swiper-lazy " ssrc="" src="https://cdn.staticmb.com/magicservicestatic/images/topLocality/topLocality01.png">
    </div>
    <div class="btn-search">
    <a href="" class="cont_btn">Continue last search <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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
    <div class="product-item  product-item-opt-1 ">
    <div class="product-item-info border-top">
    <div class="product-item-photo">
    </div>
    <div class="product-item-detail">
    <strong class="product-item-name"><a href="" class="title">
    Uttam Nagar
    </a></strong>
    <div class="price">
    <span class="rupees">?</span>3,497 - 
    <span class="rupees">?</span>10,887
    per sqft
    </div>
    <div class="price price-slider">
    <span class="rupees rupe">3.6</span>
    <span class="rupees doller">? 10,887
    per sqft</span>
    </div>
    <div class="mb-home">
    <img class="swiper-lazy " ssrc="" src="https://cdn.staticmb.com/magicservicestatic/images/topLocality/topLocality01.png">
    </div>
    <div class="btn-search">
    <a href="" class="cont_btn">Continue last search <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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
    <div class="product-item  product-item-opt-1 ">
    <div class="product-item-info border-top">
    <div class="product-item-photo">
    </div>
    <div class="product-item-detail">
    <strong class="product-item-name"><a href="" class="title">
    Uttam Nagar
    </a></strong>
    <div class="price">
    <span class="rupees">?</span>3,497 - 
    <span class="rupees">?</span>10,887
    per sqft
    </div>
    <div class="price price-slider">
    <span class="rupees rupe">3.6</span>
    <span class="rupees doller">? 10,887
    per sqft</span>
    </div>
    <div class="mb-home">
    <img class="swiper-lazy " ssrc="" src="https://cdn.staticmb.com/magicservicestatic/images/topLocality/topLocality01.png">
    </div>
    <div class="btn-search">
    <a href="" class="cont_btn">Continue last search <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
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
    <span>Post your Property for  Free</span>
    <h2>List it on Magicbricks and get genuine leads</h2>
    </div>
    </div>
    <div class="col-md-6">
    <div class="subscribe-wrapper subscribe2-wrapper mb-15">
    <div class="subscribe-form">
    <form action="#">
    <button>
    Post Property  <span>FREE</span></button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- Banner -->

    </main>
      <!-- end MAIN -->
     
      <!-- FOOTER -->
      @include('website/layout/footer')
      <!-- end FOOTER -->        
      <!--back-to-top  -->
      <a href="#" class="back-to-top">
      <i aria-hidden="true" class="fa fa-angle-up"></i>
      </a>
      </div>
      <!-- jQuery -->    
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.min.js"></script>
      <!-- sticky -->
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.sticky.js"></script>
      <!-- OWL CAROUSEL Slider -->    
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/owl.carousel.min.js"></script>
      <!-- Boostrap --> 
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/bootstrap.min.js"></script>
      <!-- Countdown --> 
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.countdown.min.js"></script>
      <!--jquery Bxslider  -->
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.bxslider.min.js"></script>
      <!-- actual --> 
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.actual.min.js"></script>
      <!-- Chosen jquery-->    
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/chosen.jquery.min.js"></script>
      <!-- parallax jquery--> 
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.parallax-1.1.3.js"></script>
      <!-- elevatezoom --> 
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/jquery.elevateZoom.min.js"></script>
      <!-- fancybox -->
      <script src="{{asset('public/frontend')}}/js/jquery.fancybox.pack.js"></script>
      <script src="{{asset('public/frontend')}}/js/jquery.fancybox-media.js"></script>
      <script src="{{asset('public/frontend')}}/js/jquery.fancybox-thumbs.js"></script>
      <!-- arcticmodal -->
      <script src="{{asset('public/frontend')}}/js/jquery.arcticmodal.js"></script>
      <!-- Main -->  
      <script type="text/javascript" src="{{asset('public/frontend')}}/js/main.js"></script>
   </body>
</html>