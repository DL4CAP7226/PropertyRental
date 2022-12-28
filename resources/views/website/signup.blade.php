@extends('website/layout/master')
@section('title','signup')
@section('body')
<style>
        .notifyjs-bootstrap-base{
            background-color:black;
            color:white;width:300px;
            text-align: center;
            z-index: 2000;
            position:absolute;
            top:0px;
          } 
</style>
<section class="services section-bg" >
 <div class="container">
     <br>
    <div class="row justify-content-center">
        <!-- <div class="col-lg-6 col-md-12 ">
            <div class="section-title section-header  left-text">
            <h2>Login Here .... </h2>
            </div>
        </div> -->
        <div class="col-lg-6 col-md-12 ">
            <div class="section-title section-header  left-text">
            <h2>Register Here .... </h2>
            </div>
        </div>
    </div>
        
    <div class="row" >
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
        
        <div class="col-md-6">
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
                   <div class="form-group mb-4">
                      <label class="text-white">Name  <i id="nameError" class="text-danger"></i> </label>
                      <input type="text" id="name" name="name" class="form-control" placeholder="Your name" value="">
                   </div>
                   <div class="form-group mb-4">
                      <label class="text-white">Email <i id="emailError" class="text-danger"></i> </label>
                      <input type="email" id="email" name="email" class="form-control" placeholder="Your email" value="">
                   </div>
                   <div class="form-group mb-4">
                      <label class="text-white">Mobile No  <i id="mobile_noError" class="text-danger"></i> </label>
                      <input type="number" id="mobile_no" name="mobile_no" class="form-control" placeholder="Your mobile no" onkeypress="if(this.value.length==10) return false;">
                   </div>
                   <div class="form-group mb-4">
                      <label class="text-white">Create Password <i id="passwordError" class="text-danger"></i> </label>
                      <input type="password" id="password" name="password" class="form-control" placeholder="Your password" value="">
                   </div>
                   <div class="form-group mb-4">
                      <label class="text-white">Confirm Password <i id="cpasswordError" class="text-danger"></i> </label>
                      <input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="Your Confirm password" value="">
                   </div>
                   <button type="submit" id="signup_btn" class="btn btn-success btn-sm" style="width:210px;">Create Account
                   <img id="signup_load" src="{{asset('public')}}/uploads/default/load.gif"  style="width:17px;float:right;">
                   </button>
                </form>
        </div>
    </div>
</div>
<br><br>
</section>

@endsection

@push('scripts')

<!-- <script>
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
</script>  -->

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
console.log('home page');
</script>

@endpush