@extends('admin/layout/master')
@section('title','properties')
@section('body')


<style>
  tr>th>input { width: 90%;}
    .action{padding: 2px 7px 2px 12px;}
</style>

<style>
.onoffswitch1 {
    position: relative; width: 95px;
    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
}
.onoffswitch1-checkbox1 {
    display: none;
}
.onoffswitch1-label1 {
    display: block; overflow: hidden; cursor: pointer;
    border-radius: 20px;
}
.onoffswitch1-inner1 {
    display: block; width: 200%; margin-left: -100%;
    transition: margin 0.3s ease-in 0s;
}
.onoffswitch1-inner1:before, .onoffswitch1-inner1:after {
    display: block; float: left; width: 50%; height: 20px; padding: 0; line-height: 20px;
    font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
    box-sizing: border-box;
}
.onoffswitch1-inner1:before { 
    content: "Active";
    padding-left: 10px;
    background-color: #45c24c; color: #FFFFFF;
}
.onoffswitch1-inner1:after {
    content: "Disable";
    background-color: #e50101;
    color: white;
    text-align: right;
    font-size: 10px;
    padding-right: 8px;
}
.onoffswitch1-switch1 {
    display: block; width: 18px; margin: 6px;
    background: #FFFFFF;
    position: absolute; top: 0; bottom: 0;
    right:65px;
    border: 2px solid #999999; border-radius: 20px;
    transition: all 0.3s ease-in 0s; 
}
.onoffswitch1-checkbox1:checked + .onoffswitch1-label1 .onoffswitch1-inner1 {
    margin-left: 0;
}
.onoffswitch1-checkbox1:checked + .onoffswitch1-label1 .onoffswitch1-switch1 {
    right: 0px; 
}
    
</style>

<div class="row">
    <div class="col-sm-12">
       <div class="card">
          <div class="card-header d-flex justify-content-between" style="padding:2px 30px;">
             <div class="header-title">
                <h4 class="card-title"> @yield('title') </h4>
             </div>
              <div class="header-title">
                    <div class="btn-group btn-group-toggle btn-group-sm  btn-group-edges"> 
                        <a class="button btn button-icon bg-primary" href="{{route('admin_property_list')}}"> <i class="las la-list"></i> List</a>
                        <a class="button btn button-icon bg-info" href="javascript:void()"> <i class="ri-eye-fill"></i> View</a>
                        <a class="button btn button-icon bg-success" href="{{route('admin_product_save')}}"> <i class="las la-plus"></i> Add</a>
                    </div>
             </div>
          </div>
          <div class="card-body">
             <div class="table-responsive">
                <table id="category-list"  class="table table-striped" style="width:100%" >
                   <thead>
                      <tr class="ligth">
                         <th style="width:20px;">#</th>
                         <th>Type</th>
                         <th>Category</th>
                         <th>Sub Category</th>
                         <th>Property Name</th>
                         <th style="width:100px;">Status</th>
                         <th style="width:130px;">Action</th>
                      </tr>
                   </thead>
                   <tfoot>
                      <tr>
                         <th>#</th>
                         <th>Type</th>
                         <th>Category</th>
                         <th>Sub Category</th>
                         <th>Property Name</th>
                         <th>Status</th>
                         <th>Action</th>
                      </tr>
                   </tfoot>
                </table>
             </div>
          </div>
       </div>
    </div>
</div>

@endsection
@push('scripts')

<script>
$(document).ready(function(){
   
 $('#category-list').DataTable({
        processing: true,
        serverSide: true,
        ajax: "",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'type', name: 'type'},
            {data: 'category', name: 'category'},
            {data: 'subcategory', name: 'subcategory'},
            {data: 'property_name', name: 'property_name'},
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