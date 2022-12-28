@extends('admin/layout/master')
@section('title','Product Add')
@section('body')
<style>
    input#image {
    height: auto;
}
    input.rounded-0.btn.btn-primary {
    color: red;
}
    input.rounded-0.btn.btn-primary {
    color: red;
    padding: 4px !important;
}
    input#image {
    height: auto;
    /* padding: 0px; */
    max-height: 36px;
    line-height: 20px;
}
    input{background-color:white !important;}
</style>
<div class="row" >
  <div class="col-sm-12 col-lg-12 col-md-12" >
      <div class="card" >
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h4 class="card-title"> Sell or Rent your Property </h4>
                <h6 class="card-title"> We've over 15 Lac buyers and tenants for you! </h6>
             </div>
              <div class="header-title">
                    <div class="btn-group btn-group-toggle btn-group-sm  btn-group-edges"> 
                        <a class="button btn button-icon bg-primary" href="{{route('admin_property_list')}}"> <i class="las la-list"></i> List</a>
                        <a class="button btn button-icon bg-info" href="javascript:void()"> <i class="ri-eye-fill"></i> View</a>
                        <a class="button btn button-icon bg-success" href="{{route('admin_product_save')}}"> <i class="las la-plus"></i> Add</a>
                    </div>
             </div>
          </div>
          
       </div>  
  </div> 
</div>

<form id="propertySubmit" method="post" enctype="multipart/form-data">
 @csrf 
<div class="row"  >
  <div class="col-sm-12 col-lg-12 col-md-12">
      <div class="card" >
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h6 class="card-title"> Personal Details </h6>
             </div>
          </div>
          <div class="card-body">
               <div class="row">
                  
                     <div class="col-sm-3" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text"> <b>For</b> </label>
                            </div>
                            <select name="type"  class="custom-select  property_type" >
                                <option value="" >Choose...</option>
                                <option value="1">Rent-Lease</option>
                                <option value="2">Sale</option>
                            </select>
                         </div>
                      </div>
                   
                      <div class="col-sm-3" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text">Category</label>
                            </div>
                            <select name="category"  class="custom-select category" >
                               <option value="" >Choose...</option>
                            </select>
                         </div>
                      </div>
                   
                      <div class="col-sm-4" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text">Sub Category</label>
                            </div>
                            <select name="subcategory" id="subcategory" class="custom-select subcategory" >
                               <option value="" >----------</option>
                            </select>
                         </div>
                      </div>
                   
                      <div class="col-sm-2" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text" style="padding:2px 2px;"> <b>Type</b> </label>
                            </div>
                            <select name="property_type"  class="custom-select " >
                                <option value="" >Choose...</option>
                                <option value="exclusive">Exclusive</option>
                                <option value="trending">Trending</option>
                                <option value="explore">Explore</option>
                                <option value="top">Top</option>
                            </select>
                         </div>
                      </div>
                   
              </div>
          </div>
       </div>  
  </div> 
</div>

<span id="ajaxData">  
<!--ajax data-->
</span>

<div class="row"  >
  <div class="col-sm-12 col-lg-12 col-md-12">
      <div class="card" >
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h6 class="card-title"> Property Images </h6>
             </div>
          </div>
          <div class="card-body" id="add_more_wrapper">
           
              <div class="row" >
                   <div class="col-sm-5">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-10">
                                        <span id="imageError" class="text-danger"></span>
                                        <div class="input-group">
                                            <input type="file"  name="image[]" id="image" class="form-control form-control-sm" >
                                            <div class="input-group-btn">
                                                <input type="button" value="Add More" class="rounded-0 btn btn-primary add_more">
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

<div class="row"  >
  <div class="col-sm-12 col-lg-12 col-md-12">
      <div class="card" >
          <div class="card-body">
               <div class="row">
                   
                   <div class="col-sm-3">
                       <div class="form-group">
                           
                           <button type="submit" id="property_btn"  class="btn btn-primary" style="width:120px;">Submit
                              <img id="property_load" src="{{asset('public')}}/uploads/default/load.gif"  style="width:17px;float:right;">
                           </button>
                           
                           <button type="submit" class="btn bg-danger">Cancel</button>
                        </div>
                   </div>
                   
              </div>
          </div>
       </div>  
  </div> 
</div>
    
</form>

@endsection
@push('scripts')



<script>
    var count=1;
    $(document).on('click','.add_more',function(){
        count=count+1;
var myvar = '<div class="row" id="inputFormRow" >'+
'                   <div class="col-sm-5">'+
'                            <div class="form-group">'+
'                                <div class="row">'+
'                                    <div class="col-md-10">'+
'                                        <div class="input-group">'+
'                                            <input type="file" name="image[]" id="image" class="form-control form-control-sm" >'+
'                                            <div class="input-group-btn">'+
'                                                <input type="button" value="Remove" class="rounded-0 btn btn-primary remove_more">'+
'                                            </div>'+
'                                        </div>'+
'                                    </div>'+
'                                </div>'+
'                            </div>                        '+
'                </div>'+
'              </div>';
	

	
        $('#add_more_wrapper').append(myvar);
    });
     
     $(document).on('click','.remove_more',function(){
        $(this).closest('#inputFormRow').remove();
     });

</script>

<script>
function openCity(cityName) {
  var i;
  var x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  document.getElementById(cityName).style.display = "block";  
}
</script>

<script>
$(document).on('change','.subcategory',function(){
     var subcategory = $(this).val();
     $.get("{{route('get_property_field')}}",{subcategory:subcategory},function(ret){
        $('#ajaxData').html(ret); 
     });
});
</script>

<script>
$(document).on('change','.property_type',function(){
    var type = $(this).val();
    if(type == '')
              {
                  return false;
              }
    $.get("{{route('get_category')}}",{type:type},function(ret){
          $('.category').html(ret);
     });
});
</script>

<script>
$(document).on('change','.category',function(){
     var category = $(this).val();
     var type     = $('.property_type').val();
          if(category == '')
              {
                  return false;
              }
     $.get("{{route('get_sub_category')}}",{type:type,category:category},function(ret){
          $('#subcategory').html(ret);
     });
});
</script>


<script>    
$('#property_load').hide();
  $('#propertySubmit').on('submit',function(e){
		e.preventDefault();
		 $.ajax({
			        url: "{{route('admin_product_save')}}",
				    type: "POST",
				    data:  new FormData(this),
					contentType: false,
		   		    cache: false,
					processData:false,
				    beforeSend : function()
							   {
								   $('#property_load').show();
                                   $('#property_btn').prop('disabled', true);
							   },
				    success: function(data) 
					  {
                          //alert(data);
                           $('#property_load').hide();
						  var res=JSON.parse(data);
                           if(res.err===1)
							{
                                
                                $("[name='type']").css(typeof res.msg.type === 'undefined' ? {"outline": "2px solid #08ee27"} : {"outline": "2px solid red"});
                                
                                $("[name='category']").css(typeof res.msg.category === 'undefined' ? {"outline": "2px solid #08ee27"} : {"outline": "2px solid red"});
                                
                               $("[name='subcategory']").css(typeof res.msg.subcategory === 'undefined' ? {"outline": "2px solid #08ee27"} : {"outline": "2px solid red"});
                               $("[name='property_type']").css(typeof res.msg.property_type === 'undefined' ? {"outline": "2px solid #08ee27"} : {"outline": "2px solid red"});
                                
                                $("[name='property_name']").css(typeof res.msg.property_name === 'undefined' ? {"outline": "2px solid #08ee27"} : {"outline": "2px solid red"});
                                
                                $("[name='state']").css(typeof res.msg.state === 'undefined' ? {"outline": "2px solid #08ee27"} : {"outline": "2px solid red"});
                                
                                $("[name='city']").css(typeof res.msg.city === 'undefined' ? {"outline": "2px solid #08ee27"} : {"outline": "2px solid red"});
                                
                                $("[name='image[]']").css(typeof res.msg.image === 'undefined' ? {"outline": "2px solid #08ee27"} : {"outline": "2px solid red"});
                                
                                $('#property_btn').prop('disabled', false);
							}
							else
							{
                                $.notify(res.msg, "success");
                                
                                $(":input").removeAttr('style');
                                
                                //swal("", res.msg , "success");
                                
                                $('#propertySubmit')[0].reset();
                                $('#property_btn').prop('disabled', false);
							}
					  }
		      });
	});
</script>

 

@endpush