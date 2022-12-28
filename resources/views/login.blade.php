<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('public/admin')}}/assets/images/favicon.ico" />
    <link rel="stylesheet" href="{{asset('public/admin')}}/assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="{{asset('public/admin')}}/assets/css/backend.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/admin')}}/assets/vendor/tui-calendar/tui-calendar/dist/tui-calendar.css">
    <link rel="stylesheet" href="{{asset('public/admin')}}/assets/vendor/tui-calendar/tui-date-picker/dist/tui-date-picker.css">
    <link rel="stylesheet" href="{{asset('public/admin')}}/assets/vendor/tui-calendar/tui-time-picker/dist/tui-time-picker.css">
    
    
    
</head>

<body class=" ">
  <!-- loader Start -->
  <div id="loading">
        <div id="loading-center">
        </div>
  </div>
  <!-- loader END -->

  <div class="wrapper"
    style="background: url({{asset('public/admin')}}/assets/images/background.png); background-attachment: fixed; background-size: cover;">
      <section class="login-content">
         <div class="container">
            <div class="row align-items-center justify-content-center height-self-center">
               <div class="col-lg-8">
                  <div class="card auth-card">
                     <div class="card-body p-0">
                        <div class="d-flex align-items-center auth-content">
                           <div class="col-lg-6  content-left">
                              <div class="p-3">
                                 <h2 class="mb-2 ">Sign In</h2>
                                 <p>Login to stay connected.</p>
                                 <br>
                                 <form id="loginForm" method="post">
                                     @csrf 
                                    <div class="row">
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input type="email" name="email" class="floating-input form-control"  placeholder="">
                                             <label>Email <i id="emailError" class="text-danger"></i> </label>
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="floating-label form-group">
                                             <input type="password" name="password" class="floating-input form-control"  placeholder="">
                                             <label>Password <i id="passwordError" class="text-danger"></i> </label>
                                          </div>
                                       </div>
                                        
                                       <!--<div class="col-lg-6">
                                          <div class="custom-control custom-checkbox mb-3">
                                             <input type="checkbox" class="custom-control-input" id="customCheck1">
                                             <label class="custom-control-label control-label-1 " for="customCheck1">Remember Me</label>
                                          </div>
                                       </div>
                                        
                                       <div class="col-lg-6">
                                          <a href="auth-recoverpw.html" class=" float-right">Forgot Password?</a>
                                       </div>-->
                                        
                                    </div>
                                     
                                    <!--<button type="submit" class="btn btn-primary">Sign In</button>-->
                                     <button type="submit" id="login_btn" class="btn btn-primary" > SIGN IN
                                      <img id="login_load" class="pull-right" src="{{asset('public')}}/uploads/default/load.gif" width="20">
                                    </button>
                                     
                                    <!-- <p class="mt-3">
                                       Create an Account <a href="auth-sign-up.html" class=" text-underline">Sign Up</a>
                                    </p> -->
                                 </form>
                              </div>
                           </div>
                           <div class="col-lg-6 content-right">
                              <img src="{{asset('public/admin')}}/assets/images/login/01.png" class="img-fluid image-right" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
  </div>

  <!-- Backend Bundle JavaScript -->
    <script src="{{asset('public/admin')}}/assets/js/backend-bundle.min.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="{{asset('public/admin')}}/assets/js/table-treeview.js"></script>


    <!-- Chart Custom JavaScript -->
    <script async src="{{asset('public/admin')}}/assets/js/chart-custom.js"></script>
    <script src="{{asset('public/admin')}}/assets/js/charts/01.js"></script>
    <script src="{{asset('public/admin')}}/assets/js/charts/02.js"></script>
    <!-- Chart Custom JavaScript -->
    <script async src="{{asset('public/admin')}}/assets/js/slider.js"></script>

    <!-- app JavaScript -->
    <script src="{{asset('public/admin')}}/assets/js/app.js"></script>
    
    <!-- Notify.min.js for notification -->
     <script src="https://www.gazingtechnosoft.com/erp/public/template/dist/js/notify.min.js"></script>
    <!-- sweetalert.min.js for notification -->
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
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
                                $('#emailError').html(typeof res.msg.email === 'undefined' ? '' : res.msg.email);
                                $('#passwordError').html(typeof res.msg.password === 'undefined' ? '' : res.msg.password);
                                
                                
                                $('#login_btn').prop('disabled', false);
							}
							else
							{
                        
                                $('.text-danger').html('');
                                //swal("", res.msg , "success");
                                
                                Swal.fire({
                                  title: 'Action is processing.',
                                  width: 600,
                                  padding: '1em',
                                  color: '#716add',
                                  showConfirmButton: false,
                                  background: "url({{asset('public/uploads/default/processing.gif')}})",
                                  backdrop: `
                                            rgba(0,0,123,0.4)
                                            url("{{asset('public/uploads/default')}}/nyan-cat.gif")
                                            left top
                                            no-repeat
                                            `
                                });
                                
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
    
</body>

</html>