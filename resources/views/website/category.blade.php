@extends('website/layout/master')
@section('title','category')
@section('body')
@php
    $original = asset('public/property_img/original').'/';
    $compress = asset('public/property_img/compress').'/';
    $property_type = @$properties[0]->types->name;
    $category = @$properties[0]->cat->name;
    $subcat = @$properties[0]->subcat->subcategory_name;
 @endphp
 <style>
.product-box {
    margin-bottom: 30px;
}
     .product-box img {
    width: 100% !important;
}
     .product-item-photo.top-sec {
    padding-top: 0px !important;
}
</style>

    <!-- MAIN -->
    <main class="site-main">
        <section class="popular_owner">
            <div class="clearfix" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">
                <!-- block -floor -products / floor 1 :Fashion-->
                <div class="block-floor-products block-floor-products-opt1 floor-products1" id="floor0-1">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <div class="section-title section-header  left-text">
                                <h2> {{@$property_type}} / {{@$category}} / {{@$subcat}} </h2>
                                </div>
                            </div>
                            
                            <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <div class="section-title section-header text-center">
                                    <a href="{{route('home')}}" class="button button-info-default xsmall rounded">See all Properties <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                    <p></p>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="block-content" >
                            <div class="col-products tab-content">
                                <div class=" row">
                                    
                                @foreach($properties as $property)
                                <div class="  product-box product-item-opt-1 col-lg-3">
                                    <div class="product-item-info" >
                                        <div class="product-item-photo top-sec">
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
                                                    <p>
                                                      
                                                    </p>
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
  
    
</main>
<!-- end MAIN -->

@endsection
@push('scripts')

<script>
console.log('home page');
</script>

@endpush