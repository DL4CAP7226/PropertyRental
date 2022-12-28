@extends('website/layout/master')
@section('title','customer dashboard')
@section('body')

<style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }
   
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>

<!-- MAIN -->
<!--<main class="site-main" style="border:2px solid red;">-->
    
   <div class="container-fluid">
      <div class="row content">
          
         <div class="col-sm-3 sidenav">
            <h4>John's Blog</h4>
            <ul class="nav nav-pills nav-stacked">
               <li class="active"><a href="#section1">Home</a></li>
               <li><a href="#section2">Friends</a></li>
               <li><a href="#section3">Family</a></li>
               <li><a href="#section3">Photos</a></li>
            </ul>
            
         </div>
          
         <div class="col-sm-9">
            <h4><strong style="text-transform: capitalize;" > @yield('title') </strong></h4>
            <hr>
             

            
            
            
            
            
            
         </div><!--dashboard body end-->
      </div>
   </div>

<!--</main>-->
<!-- end MAIN -->

@endsection

@push('scripts')

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
</script> 


<script>
console.log('home page');
</script>
@endpush