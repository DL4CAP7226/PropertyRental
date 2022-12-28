@extends('admin/layout/master')
@section('title','News & Articles')
@section('body')


<form action="{{ url('admin/addNewsArticle') }}" method="post" enctype="multipart/form-data">
 @csrf 
<div class="row"  >
  <div class="col-sm-12 col-lg-12 col-md-12">
      <div class="card" >
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h6 class="card-title"> News & Articles </h6>
             </div>
          </div>
          <div class="card-body">
               <div class="row">
                  
                     <div class="col-sm-3" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text"> <b>Image</b> </label>
                            </div>
                            <input type="file" class="form-control" name="image">
                         </div>
                      </div>
                   
                      <div class="col-sm-3" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text">
                                 Article Type</label>
                            </div>
                            <input type="text" class="form-control" name="type"> 
                         </div>
                      </div>
                   
                      <div class="col-sm-4" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text">Article Heading</label>
                            </div>
                            <input type="text" class="form-control" name="name"> 
                         </div>
                      </div>
</div>
<div class="row">
                      <div class="col-sm-4" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text">Date</label>
                            </div>
                            <input type="date" class="form-control" name="date"> 
                         </div>
                      </div>

                      <div class="col-sm-4" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text">Creator</label>
                            </div>
                            <input type="text" class="form-control" name="creator"> 
                         </div>
                      </div>

                      <div class="col-sm-4" style="position:relative;">
                         <i id="categoryError" class="text-danger"></i>
                        <div class="input-group input-group-sm ">
                            <div class="input-group-prepend">
                               <label class="input-group-text">Content</label>
                            </div>
                            <input type="text" class="form-control" name="content"> 
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