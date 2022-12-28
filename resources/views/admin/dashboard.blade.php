@extends('admin/layout/master')
@section('title','Dashboard')
@section('body')
<!-- <div class="row" >
   <div class="col-lg-12 col-md-12 col-xl-6">
      <div class="card card-block card-stretch card-height">
         <div class="card-header d-flex justify-content-between  align-items-start ">
            <div class="header-title">
               <h4 class="card-title">Sales Summary</h4>
            </div>
            <div class="card-header-toolbar d-flex align-items-center">
               <button class="btn btn-outline-secondary btn-sm bg-secondary">Download</button>
            </div>
         </div>
         <div class="card-body ">
            <div class="d-flex  ">
               $82,944.60
               <div class="text-success ml-2">
                  75 %
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="18px" width="18px">
                     <path fill-rule="evenodd"
                        d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                        clip-rule="evenodd"></path>
                  </svg>
               </div>
            </div>
            <div id="summary-chart-01" class="summary-chart-01">
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-12 col-md-12 col-xl-6">
      <div class="row">
         <div class="col-lg-6 col-md-6">
            <div class="card card-block card-stretch card-height">
               <div class="card-body">
                  <div class=" rounded m-auto  align-items-center">
                     <p>Total Visitor’s</p>
                     <h2>18,267.00</h2>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mt-3">
                     <div class="text-success mr-2">
                        75 %
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="18px" width="18px">
                           <path fill-rule="evenodd"
                              d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"></path>
                        </svg>
                     </div>
                     <p class=" mb-0">Last 15 Day’s</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-6 col-md-6">
            <div class="card card-block card-stretch card-height">
               <div class="card-body">
                  <div class=" rounded m-auto  align-items-center">
                     <p>Total Order’s</p>
                     <h2>45,789.00</h2>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mt-3">
                     <div class="text-primary mr-2">
                        35 %
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="18px" width="18px">
                           <path fill-rule="evenodd"
                              d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z"
                              clip-rule="evenodd" />
                        </svg>
                     </div>
                     <p class=" mb-0">Last month</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12 col-md-12 ">
            <div class="card card-block card-stretch ">
               <div class="card-body ">
                  <div class="row">
                     <div class="col-lg-6 col-md-6">
                        <div class=" d-flex align-items-center">
                           <div class="border bg-primary rounded iq-icon-box">
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="26px" width="26px" class="mb-1">
                                 <path fill-rule="evenodd"
                                    d="M12 7a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0V8.414l-4.293 4.293a1 1 0 01-1.414 0L8 10.414l-4.293 4.293a1 1 0 01-1.414-1.414l5-5a1 1 0 011.414 0L11 10.586 14.586 7H12z"
                                    clip-rule="evenodd" />
                              </svg>
                           </div>
                        </div>
                        <div class="d-flex mt-3 ">
                           <h4> 18,267.00</h4>
                           <div class="text-primary ml-2">
                              35 %
                              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="18px" width="18px">
                                 <path fill-rule="evenodd"
                                    d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                              </svg>
                           </div>
                        </div>
                        <p class=" mt-0 mb-1">Revenue From last 30 days</p>
                     </div>
                     <div class="col-lg-6 ml-auto pl-0 pr-0 col-md-6">
                        <div class="bottom-img ">
                           <img src="{{asset('public/admin')}}/assets/images/product/131.png" class="" alt="image">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-6 col-md-6">
      <div class="card ">
         <div class="card-header d-flex justify-content-between ">
            <div class="header-title">
               <h4 class="card-title">Top Rated Items</h4>
            </div>
            <div class="card-header-toolbar d-flex align-items-center">
               <button class="btn btn-outline-secondary btn-sm bg-secondary">View All</button>
            </div>
         </div>
         <div class="card-body">
            <ul class="list-inline p-0 mb-0">
               <li class="mb-4">
                  <div class="d-flex justify-content-between">
                     <div class="iq-icon-box1  rounded mr-3">
                        <img src="{{asset('public/admin')}}/assets/images/product/1.png" class="img-fluid rounded avatar-45 m-auto" alt="image">
                     </div>
                     <div class="w-100  p-md-0">
                        <h6>Bitcoin</h6>
                        <div class="d-flex align-items-center ">
                           <div class="iq-progress-bar ">
                              <span class="bg-primary iq-progress progress-1" data-percent="54"></span>
                           </div>
                           <span class="ml-3">54%</span>
                        </div>
                     </div>
                  </div>
               </li>
               <li class="mb-4">
                  <div class="d-flex align-items-center justify-content-between ">
                     <div class="iq-icon-box1 rounded mr-3">
                        <img src="{{asset('public/admin')}}/assets/images/product/3.png" class="img-fluid rounded avatar-45 m-auto" alt="image">
                     </div>
                     <div class="w-100  p-md-0">
                        <h6>Boult</h6>
                        <div class="d-flex align-items-center ">
                           <div class="iq-progress-bar ">
                              <span class="bg-secondary iq-progress progress-1" data-percent="96"></span>
                           </div>
                           <span class="ml-3">96%</span>
                        </div>
                     </div>
                  </div>
               </li>
               <li>
                  <div class="d-flex align-items-center justify-content-between">
                     <div class="iq-icon-box1  rounded mr-3">
                        <img src="{{asset('public/admin')}}/assets/images/product/2.png" class="img-fluid rounded avatar-45 m-auto" alt="image">
                     </div>
                     <div class="w-100  p-md-0">
                        <h6>Arning</h6>
                        <div class="d-flex align-items-center ">
                           <div class="iq-progress-bar ">
                              <span class="bg-warning iq-progress progress-1" data-percent="66"></span>
                           </div>
                           <span class="ml-3">66%</span>
                        </div>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
      </div>
   </div>
   <div class="col-lg-6 col-md-6">
      <div class="card card-block card-stretch card-height ">
         <div class="card-header d-flex justify-content-between  align-items-start ">
            <div class="header-title">
               <h4 class="card-title">Customers</h4>
            </div>
            <div class="card-header-toolbar d-flex align-items-center">
               <button class="btn btn-outline-secondary btn-sm bg-secondary">Monthly</button>
            </div>
         </div>
         <div class="card-body ">
            <div class="d-flex justify-content-between ">
               <div class="d-flex align-items-center ">
                  $82,944.60
                  <div class="text-success ml-2">
                     75%
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" height="18px" width="18px">
                        <path fill-rule="evenodd"
                           d="M3.293 9.707a1 1 0 010-1.414l6-6a1 1 0 011.414 0l6 6a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L4.707 9.707a1 1 0 01-1.414 0z"
                           clip-rule="evenodd"></path>
                     </svg>
                  </div>
               </div>
               <p class="mb-0 ">For last 15 Days</p>
            </div>
            <div id="customer-chart-02" class="customer-chart-02">
            </div>
         </div>
      </div>
   </div>
   <div class="col-lg-12 col-md-12 col-xl-4">
      <div class="card ">
         <div class="card-header d-flex justify-content-between ">
            <div class="header-title">
               <h4 class="card-title">User’s</h4>
            </div>
         </div>
         <div class="card-body">
            <div id="user-chart-03" class="user-chart-03"></div>
         </div>
      </div>
   </div>
   <div class="col-lg-12 col-md-12 col-xl-8">
      <div class="card card-block card-stretch card-height">
         <div class="card-header d-flex justify-content-between ">
            <div class="header-title">
               <h4 class="card-title">Transaction</h4>
            </div>
            <div class="card-header-toolbar d-flex align-items-center">
               <button class="btn  btn-sm bg-secondary">View All</button>
            </div>
         </div>
         <div class="card-body rec-pat p-0">
            <div class="table-responsive">
               <table class="table table-striped mb-0 table-borderless">
                  <thead class="">
                     <tr>
                        <th>Order No</th>
                        <th>Costomer Name</th>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Status</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <td>
                           #12458
                        </td>
                        <td>
                           Evan Shlee
                        </td>
                        <td>
                           31/12/2020
                        </td>
                        <td>
                           $458.00
                        </td>
                        <td>
                           <span class="badge badge-secondary">Paid</span>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           #12459
                        </td>
                        <td>
                           Randy Vaccaro
                        </td>
                        <td>
                           25/12/2020
                        </td>
                        <td>
                           $357.00
                        </td>
                        <td>
                           <span class="badge badge-primary">Pending</span>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           #12460
                        </td>
                        <td>
                           Gretchen Philips
                        </td>
                        <td>
                           22/12/2020
                        </td>
                        <td>
                           $159.00
                        </td>
                        <td>
                           <span class="badge badge-secondary">Paid</span>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           #12461
                        </td>
                        <td>
                           Ashlynn Press
                        </td>
                        <td>
                           29/11/2020
                        </td>
                        <td>
                           $167.00
                        </td>
                        <td>
                           <span class="badge badge-warning">Cancelled</span>
                        </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div> -->
<div class="text-center">
   <!--<img src="{{asset('public/frontend/images')}}/property.jpg" width="1000px" height="600px" alt="">-->
</div>
@endsection
@push('scripts')
<script>
  console.log("script running !");
</script>
@endpush