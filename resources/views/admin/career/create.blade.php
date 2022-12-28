@extends('admin/layout/master')
@section('title','Careers')
@section('body')


<form action="{{ url('admin/addCareer') }}" method="post" enctype="multipart/form-data">
 @csrf 
<div class="row"  >
  <div class="col-sm-12 col-lg-12 col-md-12">
      <div class="card" >
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h6 class="card-title"> Career Details </h6>
             </div>
          </div>
          <div class="card-body">
               <div class="row">
                  
                     <div class="col-sm-3" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text"> <b>Post Name</b> </label>
                            </div>
                            <input type="text" class="form-control" name="postName">
                         </div>
                      </div>
                   
                      <div class="col-sm-3" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text">Location</label>
                            </div>
                            <input type="text" class="form-control" name="location"> 
                         </div>
                      </div>
                   
                      <div class="col-sm-4" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text">Job Type</label>
                            </div>
                            <input type="text" class="form-control" name="postType"> 
                         </div>
                      </div>
</div>
<div class="row">
                      <div class="col-sm-4" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text">Job Description</label>
                            </div>
                            <input type="text" class="form-control" name="jobDesc"> 
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