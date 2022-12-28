@extends('admin/layout/master')
@section('title','Services')
@section('body')


<form action="{{ url('admin/updateService',['service'=>$service->id]) }}" method="post" enctype="multipart/form-data">
 @csrf 
<div class="row"  >
  <div class="col-sm-12 col-lg-12 col-md-12">
      <div class="card" >
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h6 class="card-title"> Edit Service Details </h6>
             </div>
          </div>
          <div class="card-body">
               <div class="row">
                  
                     <div class="col-sm-3" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text"> <b>Icon</b> </label>
                            </div>
                            <input type="file" class="form-control" name="icon" >
                         </div>
                      </div>
                   
                      <div class="col-sm-3" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text">Name</label>
                            </div>
                            <input type="text" class="form-control" name="name"  value="{{$service->name}}"> 
                         </div>
                      </div>
                   
                      <div class="col-sm-4" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text">Description</label>
                            </div>
                            <input type="text" class="form-control" name="desc"  value="{{$service->desc}}"> 
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