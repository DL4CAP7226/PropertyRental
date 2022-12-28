<div class="data-scrollbar" data-scroll="1" >
   <nav class="iq-sidebar-menu">
      <h6 class="sidebar-text text-uppercase ">main</h6>
      <ul id="iq-sidebar-toggle" class="iq-menu">
         <li class="active">
            <a href="{{route('vendor_dashboard')}}">
               <i class="ri-dashboard-fill "></i>
               <span class="ml-3">Dashboard</span>
            </a>
         </li>
          
         <li class="">
            <a href="{{route('home')}}" target="_blank">
               <i class="ri-home-fill "></i>
               <span class="ml-3">Home</span>
            </a>
         </li>
          
         <li>
            <h6 class=" text-uppercase sidebar-text">Pre-build Pages</h6>
         </li>
          
         <li>
            <a href="#user" class="collapsed" data-toggle="collapse" aria-expanded="false">
               <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                  width="20" height="20">
                 <path d="M8 3a1 1 0 011-1h2a1 1 0 110 2H9a1 1 0 01-1-1z" />
                  <path
                     d="M6 3a2 2 0 00-2 2v11a2 2 0 002 2h8a2 2 0 002-2V5a2 2 0 00-2-2 3 3 0 01-3 3H9a3 3 0 01-3-3z" />
               </svg>
               <span class="ml-3">Property Details</span>
               <i class="las la-angle-right iq-arrow-right arrow-active"></i>
               <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
            </a>
            <ul id="user" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
               <li class="">
                  <a href="{{route('vendor_product_save')}}">
                  <i class="las la-minus"></i><span>Post Property</span>
                  </a>
               </li>
                
               <li class="">
                  <a href="{{route('vendor_property_list')}}">
                  <i class="las la-minus"></i><span>Property List</span>
                  </a>
               </li>
                
            </ul>
         </li>
          
        
          
      </ul>
   </nav>
   <!--<div id="sidebar-bottom" class="position-relative sidebar-bottom">
      <div class="card border-none  shadow-none">
         <div class="card-body rounded-pill bg-secondary">
            <div class="sidebarbottom-content">
               <div class="image"><img src="{{asset('public/admin')}}/assets/images/sidebar.png" class="img-fluid" alt="sidebar">
               </div>
               <p class="mb-0 mt-3 text-capitalize">Check out more feature<br> by getting upgrade</p>
               <button type="button" class="btn sidebar-bottom-btn mt-3">Go Premium</button>
            </div>
         </div>
      </div>
   </div>-->
   <div class="pt-5 pb-2"></div>
</div>