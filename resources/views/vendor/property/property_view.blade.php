@extends('vendor/layout/master')
@section('title','Property Details')
@section('body')
<style>
input{background-color:white !important;}
</style>

<div class="row" >
  <div class="col-sm-12 col-lg-12 col-md-12">
      <div class="card" >
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h4 class="card-title"> @yield('title') </h4>
             </div>
              <div class="header-title">
                    <div class="btn-group btn-group-toggle btn-group-sm  btn-group-edges"> 
                        <a class="button btn button-icon bg-primary" href="{{route('vendor_property_list')}}"> <i class="las la-list"></i> List</a>
                        <a class="button btn button-icon bg-info" href="javascript:void()"> <i class="ri-eye-fill"></i> View</a>
                        <a class="button btn button-icon bg-success" href="{{route('vendor_product_save')}}"> <i class="las la-plus"></i> Add</a>
                    </div>
              </div>
          </div>
          <div class="card-body" style="padding-bottom:14px;" >
            
             <div class="row">
                <div class="col-sm-3" style="position:relative;">
                    <i id="typeError" class="text-danger"></i>
                    <div class="input-group input-group-sm ">
                        <div class="input-group-prepend">
                           <label class="input-group-text">Type</label>
                        </div>
                        <select name="type" id="type" class="custom-select" >
                           <option value="" >Choose...</option>
                           <option value="1">Rent-Lease</option>
                           <option value="2">Sale</option>
                        </select>
                     </div>
                 </div>
                 
                 <div class="col-sm-3" style="position:relative;">
                     <i id="categoryError" class="text-danger"></i>
                    <div class="input-group input-group-sm ">
                        <div class="input-group-prepend">
                           <label class="input-group-text">Category</label>
                        </div>
                        <select name="category" id="categoryedit" class="custom-select" >
                           <option value="" >Choose...</option>
                           <option value="1">Residential</option>
                           <option value="2">Commercial</option>
                           <option value="3">Agricultural</option>
                        </select>
                     </div>
                 </div>
                 
                 <div class="col-sm-4" style="position:relative;">
                     <i id="subcategoryError" class="text-danger "></i>
                    <div class="input-group input-group-sm ">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="inputGroup-sizing-sm">Sub Category</span>
                        </div>
                        <input type="text" name="subcategory" id="subcategory" value="" placeholder="Enter Sub Category" class="form-control" style="background-color:white;" >
                     </div>
                 </div>
                 
              </div>
            
             
          </div>
       </div>  
  </div> 
</div>

 <div class="row">
    <div class="col-sm-12 col-lg-12">
       <div class="card">
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h4 class="card-title">Property Location</h4>
             </div>
          </div>
          <div class="card-body">
             
               <div class="row">
                        <div class="form-group col-sm-3">
                           <label>Name of Project/Society  </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->property_name}}" readonly >
                        </div>
                   
                        <div class="form-group col-sm-2">
                           <label>State  </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->state}}" readonly>
                        </div>
                         
                        <div class="form-group col-sm-2">
                           <label>City   </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->city}}" readonly>
                        </div>
             
                        <div class="form-group col-sm-2">
                           <label>Locality  </label>
                           <input type="text" name="locality" class="form-control form-control-sm" value="{{$property->locality}}" readonly>
                        </div>
          
 
                        <div class="form-group col-sm-3">
                           <label>Land Zone  </label>
                            <input type="text" name="locality" class="form-control form-control-sm" value="{{$property->land_zone}}" readonly>
                        </div>
                         
                        <div class="form-group col-sm-3">
                           <label>Nearby Businesses  </label>
                            <textarea class="form-control" name="near_by_business" readonly>{{$property->near_by_business}}</textarea>
                        </div>
                   
                   
               </div> 
              
          </div>
       </div>
     </div>
  </div>
  <!--property location end-->

<div class="row">
    <div class="col-sm-12 col-lg-12">
       <div class="card">
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h4 class="card-title">Property Features</h4>
             </div>
          </div>
          <div class="card-body">
             
               <div class="row">
        
                        <div class="form-group col-sm-3">
                           <label>Floor No </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->floor_no}}" readonly>
                        </div>
                     
                       <div class="form-group col-sm-2">
                           <label>Total Floors   </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->total_floor}}" readonly>
                        </div>
                   
                        <div class="form-group col-sm-3">
                           <label>Floors Allowed for construction   </label>
                            <input type="text" class="form-control form-control-sm" value="{{$property->floor_alow_for_constr}}" readonly>
                        </div>

                       <div class="form-group col-sm-2">
                           <label>No of open sides  </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->open_side}}" readonly>
                        </div>
              
                        <div class="form-group col-sm-2">
                           <label>Bathrooms  </label>
                            <input type="text" class="form-control form-control-sm" value="{{$property->bathrooms}}" readonly>
                        </div>
                   
                   
                        <div class="form-group col-sm-4">
                           <label>Width of road facing the plot (In Meter)  </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->width_of_road}}" readonly>
                        </div>
                 
                        <div class="form-group col-sm-2">
                           <label>Furnished Status </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->furnished_status}}" readonly>
                        </div>

                        <div class="form-group col-sm-2">
                           <label>Ac </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->ac}}" readonly>
                        </div>
                   
                        <div class="form-group col-sm-2">
                           <label>Bed  </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->bed}}" readonly>
                        </div>
                   
                        <div class="form-group col-sm-2">
                           <label>Wardrobe </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->wardrobe}}" readonly>
                        </div>
                 
                       <div class="form-group col-sm-2">
                           <label>Tv  </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->tv}}" readonly>
                        </div>
      
                       <div class="form-group col-sm-1">
                           <label>Fridge  </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->fridge}}" readonly>
                       </div>
                   
                       <div class="form-group col-sm-1">
                           <label>Sofa </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->sofa}}" readonly>
                       </div>

                       <div class="form-group col-sm-2">
                           <label>Microwave </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->microwave}}" readonly>
                       </div>

                       <div class="form-group col-sm-2">
                           <label>Dining Table </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->dining_table}}" readonly>
                       </div>

                       <div class="form-group col-sm-2">
                           <label>Washing Machine </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->washing_machine}}" readonly>
                       </div>
                   
                       <div class="form-group col-sm-2">
                           <label>Gas Connection </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->gas_connection}}" readonly>
                       </div>

                       <div class="form-group col-sm-2">
                           <label>1 BHK </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->one_bhk}}" readonly>
                       </div>

                       <div class="form-group col-sm-2">
                           <label>2 BHK </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->two_bhk}}" readonly>
                       </div>

                       <div class="form-group col-sm-2">
                           <label>3 BHK  </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->three_bhk}}" readonly>
                       </div>
                   
               </div> 
              
          </div>
       </div>
     </div>
  </div>
  <!--Property Features end-->

<div class="row">
    <div class="col-sm-12 col-lg-12">
       <div class="card">
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h4 class="card-title">Property Area</h4>
             </div>
          </div>
          <div class="card-body">
             
               <div class="row">

                        <div class="form-group col-sm-3" style="position:relative;">
                           <label>Covered Area  </label>
                            <input type="text" class="form-control form-control-sm" value="{{$property->cover_area}}" style="width:60%;" readonly>
                            
                            <input type="text" class="form-control form-control-sm" value="{{$property->cover_area_unit}}" style="width: 41%;position: absolute;right: 0;top: 36px;" readonly>
                           
                        </div>

                        <div class="form-group col-sm-3" style="position:relative;">
                           <label>Plot Area </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->plot_area}}" style="width:60%;" readonly>
                            
                            <input type="text" class="form-control form-control-sm" value="{{$property->plot_area_unit}}" style="width: 41%;position: absolute;right: 0;top: 36px;" readonly>
                        </div>

                       <div class="form-group col-sm-3" style="position:relative;">
                           <label>Plot Length  </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->plot_length}}" style="width:60%;" readonly>
                            
                            <input type="text" class="form-control form-control-sm" value="{{$property->plot_length_unit}}" style="width: 41%;position: absolute;right: 0;top: 36px;" readonly>
                        </div>
                   
                      <div class="form-group col-sm-3" style="position:relative;">
                           <label>Plot Breadth  </label>
                          <input type="text" class="form-control form-control-sm" value="{{$property->plot_breadth}}" style="width:60%;" readonly>
                            
                            <input type="text" class="form-control form-control-sm" value="{{$property->plot_breadth_unit}}" style="width: 41%;position: absolute;right: 0;top: 36px;" readonly>
                        </div>
                   
               </div> 
              
          </div>
       </div>
     </div>
  </div>
  <!--property area end-->

<div class="row">
    <div class="col-sm-12 col-lg-12">
       <div class="card">
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h4 class="card-title">Rent/ Lease Details</h4>
             </div>
          </div>
          <div class="card-body">
             
              <div class="row">

                        <div class="form-group col-sm-2">
                           <label>Monthly Rent </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->monthly_rent}}" readonly>
                        </div>

                        <div class="form-group col-sm-2">
                           <label for="colFormLabelSm">Daily Rent   </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->daily_rent}}" readonly>
                        </div>
              
                        <div class="form-group col-sm-4">
                           <label>Electricity & Water charges excluded   </label>
                            <input type="text" class="form-control form-control-sm" value="{{$property->electr_charge}}" readonly>
                        </div>

                        <div class="form-group col-sm-2">
                           <label>Other Charge  </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->other_charge}}" readonly>
                        </div>

                        <div class="form-group col-sm-3">
                           <label>Security Amount  </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->security_amount}}" readonly>
                        </div>

                        <div class="form-group col-sm-3" style="position:relative;">
                           <label>Maintenance Charges </label>
                           <input type="text" class="form-control form-control-sm" value="{{$property->maintenance_charge}}" style="width:60%;" readonly>
                            
                            <input type="text" class="form-control form-control-sm" value="{{$property->maintenance_charge_unit}}" style="width: 41%;position: absolute;right: 0;top: 36px;" readonly>
                        </div>
                  
               </div> 
              
          </div>
       </div>
     </div>
  </div>
  <!--Rent/ Lease Details end-->

<div class="row">
    <div class="col-sm-12 col-lg-12">
       <div class="card">
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h4 class="card-title">Property Images</h4>
             </div>
          </div>
          <div class="card-body">
             @php
               $original = asset('public/property_img/original').'/';
               $compress = asset('public/property_img/compress').'/';
             @endphp
              <ul class="list-unstyled p-0 m-0 row">
                @foreach($property_image as $img)
                <li class="col-sm-2">
                    <img src="{{$original.$img->image_name}}" class="img-thumbnail w-100 h-80 img-fluid rounded">
                </li>
                @endforeach
             </ul> 
              
          </div>
       </div>
     </div>
  </div>
  <!--property images end-->


@endsection
@push('scripts')


<script>
$(document).ready(function(){
   
 $('#category-list').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{route('admin_category_list')}}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'type', name: 'type'},
            {data: 'category', name: 'category'},
            {data: 'subcategory', name: 'subcategory'},
            {data: 'status', name: 'status'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ],
        dom: 'lBfrtip',
        initComplete: function () {
            this.api().columns().every(function (colIdx) {
                if (colIdx == 0||colIdx == 4||colIdx == 5) return;
                var column = this;
                var input = document.createElement('input');
                $(input).appendTo($(column.footer()).empty())
                .on('change', function () {
                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                    column.search(val ? val : '', true, false).draw();
                });
            });
        },
        buttons: [
                    { extend: 'excel', exportOptions: { columns: [0,1,2,3]} },
                    { extend: 'csv',   exportOptions: { columns: [0,1,2,3]} },
                    { extend: 'pdf',   exportOptions: { columns: [0,1,2,3]} },
                    { extend: 'print', exportOptions: { columns: [0,1,2,3]} },
                    { extend: 'copy',  exportOptions: { columns: [0,1,2,3]} },        
                ] 
    });
    
    
});
</script> 

@endpush