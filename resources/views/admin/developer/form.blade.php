@extends('admin/layout/master')
@section('title','Developer Create')
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
    .card-body .row{margin-bottom:10px;}
    .input-group-text{width:140px;}
</style>
<div class="row" >
  <div class="col-sm-12 col-lg-12 col-md-12" >
      <div class="card" >
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h4 class="card-title"> Project Developer Details </h4>
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
                <h6 class="card-title"> Developer Details </h6>
             </div>
          </div>
          <div class="card-body">
              
               <div class="row">
                  
                     <div class="col-sm-6" >
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text"> <b>Developer Name</b> </label>
                            </div>
                            <input type="text" name="d_name" value="" class="form-control" placeholder="Developer Name">
                         </div>
                      </div>
                   
                   
                      <div class="col-sm-6">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text" > <b>Developer Contact</b> </label>
                            </div>
                            <input type="text" name="d_contact" value="" class="form-control" placeholder="Developer Contact">
                         </div>
                      </div>
                   
              </div>
              
               <div class="row">
                  
                     <div class="col-sm-6" >
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text"> <b>Project Name</b> </label>
                            </div>
                            <input type="text" name="dp_name" value="" class="form-control" placeholder="Project Name">
                         </div>
                      </div>
                   
                   
                      <div class="col-sm-6">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text" > <b>Company Name</b> </label>
                            </div>
                            <input type="text" name="dc_name" value="" class="form-control" placeholder="Company name">
                         </div>
                      </div>
                   
              </div>
              
              <div class="row">
                  
                     <div class="col-sm-6" >
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text"> <b>Project Location</b> </label>
                            </div>
                            <input type="text" name="dp_location" value="" class="form-control" placeholder="Project Location">
                         </div>
                      </div>
                   
                   
                      <div class="col-sm-6">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text" > <b>Project Type</b> </label>
                            </div>
                            <input type="text" name="dp_type" value="" class="form-control" placeholder="Project Type">
                         </div>
                      </div>
                   
              </div>
              
              <div class="row">
                  
                     <div class="col-sm-6" >
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text"> <b>Project Price</b> </label>
                            </div>
                            <input type="text" name="dp_price" value="" class="form-control" placeholder="Project Price">
                         </div>
                      </div>
                   
                   
                      <div class="col-sm-6">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text" > <b>Marketed By</b> </label>
                            </div>
                            <input type="text" name="d_marketed_by" value="" class="form-control" placeholder="Marketed By">
                         </div>
                      </div>
                   
              </div>
              
              <div class="row">
                  
                     <div class="col-sm-6" >
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text"> <b>Developer Logo</b> </label>
                            </div>
                            <input type="file" name="logo" id="image" class="form-control" >
                         </div>
                      </div>
                  
                     <div class="col-sm-6" >
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text"> <b>Display Position</b> </label>
                            </div>
                             <select name="display_location" class="form-control">
                               <option value="trending">Trending Project</option>
                               <option value="featured">Featured Project</option>
                               <option value="upcoming">Upcoming Project</option>
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
                <h6 class="card-title"> Project Images </h6>
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
$('#property_load').hide();
  $('#propertySubmit').on('submit',function(e){
		e.preventDefault();
		 $.ajax({
			        url: "{{route('admin_developer_create')}}",
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
                                
                                $("[name='d_name']").css(typeof res.msg.d_name === 'undefined' ? {"outline": "1px solid #08ee27"} : {"outline": "1px solid red"});
                                
                                $("[name='d_contact']").css(typeof res.msg.d_contact === 'undefined' ? {"outline": "1px solid #08ee27"} : {"outline": "1px solid red"});
                                
                               $("[name='dp_name']").css(typeof res.msg.dp_name === 'undefined' ? {"outline": "1px solid #08ee27"} : {"outline": "1px solid red"});
                               $("[name='dc_name']").css(typeof res.msg.dc_name === 'undefined' ? {"outline": "1px solid #08ee27"} : {"outline": "1px solid red"});
                                
                                $("[name='dp_location']").css(typeof res.msg.dp_location === 'undefined' ? {"outline": "1px solid #08ee27"} : {"outline": "1px solid red"});
                                
                                $("[name='dp_type']").css(typeof res.msg.dp_type === 'undefined' ? {"outline": "1px solid #08ee27"} : {"outline": "1px solid red"});
                                
                                $("[name='dp_price']").css(typeof res.msg.dp_price === 'undefined' ? {"outline": "1px solid #08ee27"} : {"outline": "1px solid red"});
                                
                                $("[name='d_marketed_by']").css(typeof res.msg.d_marketed_by === 'undefined' ? {"outline": "1px solid #08ee27"} : {"outline": "1px solid red"});
                                
                                $("[name='display_location']").css(typeof res.msg.display_location === 'undefined' ? {"outline": "1px solid #08ee27"} : {"outline": "1px solid red"});
                                
                                $("[name='logo']").css(typeof res.msg.logo === 'undefined' ? {"outline": "1px solid #08ee27"} : {"outline": "1px solid red"});
                                
                                $("[name='image[]']").css(typeof res.msg.image === 'undefined' ? {"outline": "1px solid #08ee27"} : {"outline": "1px solid red"});
                                
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