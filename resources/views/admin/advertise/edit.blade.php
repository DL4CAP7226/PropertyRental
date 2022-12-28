@extends('admin/layout/master')
@section('title','Advertise With Us')
@section('body')

<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>

<form action="{{ url('admin/updateAdvertise',['advertise'=>$advertise->id]) }}" method="post" enctype="multipart/form-data">
 @csrf 
<div class="row"  >
  <div class="col-sm-12 col-lg-12 col-md-12">
      <div class="card" >
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h6 class="card-title"> Advertise With Us Details </h6>
             </div>
          </div>
          <div class="card-body">
               <div class="row">
             	
                     <div class="col-sm-3" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text"> <b>Plan Name</b> </label>
                            </div>
                            <select name="plan">
                              <option value="Silver">Silver</option>
                              <option value="Gold">Gold</option>
                              <option value="Diamond">Diamond</option>
                              <option value="Titanium">Titanium</option>
                            </select>
                         </div>
                      </div>
                   
                      <div class="col-sm-3" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text">Ratings</label>
                            </div>
                            <input type="number" class="form-control" name="rating" value="{{$advertise->rating}}"> 
                         </div>
                      </div>

                      <div class="col-sm-3" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text">Purchased Count</label>
                            </div>
                            <input type="number" class="form-control" name="purchase" value="{{$advertise->purchase}}"> 
                         </div>
                      </div>

                      <div class="col-sm-3" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text">% Off</label>
                            </div>
                            <input type="number" class="form-control" name="off" value="{{$advertise->off}}"> 
                         </div>
                      </div>

                  
            </div>

            <div class="row">

                      <div class="col-sm-3" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text">Actual Price</label>
                            </div>
                            <input type="number" class="form-control" name="actualPrice" value="{{$advertise->actualPrice}}"> 
                         </div>
                      </div>

                      <div class="col-sm-3" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text">Discount Price</label>
                            </div>
                            <input type="number" class="form-control" name="disPrice" value="{{$advertise->disPrice}}"> 
                         </div>
                      </div>

                      <div class="col-sm-3" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text">Visibility %</label>
                            </div>
                            <input type="text" class="form-control" name="visible" value="{{$advertise->visible}}"> 
                         </div>
                      </div>
</div>
<div class="row">
                      <div class="col-sm-4" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text">Content</label>
                               <div style="width:850px;">
                               <textarea name="content" >{{$advertise->content}}</textarea>
                <script>
                        CKEDITOR.replace( 'content' );
                </script>
                               </div>
 
                              </div>
                         </div>
                      </div>
              </div>
              
              
              <div class="row">
                 
                 <div class="col-sm-4" style="position:relative;">
                  <div class="form-group">
                     
                     <button type="submit" id="property_btn"  class="btn btn-primary" style="width:120px;">Submit
                        
                     </button>
                     
                     
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



@endpush