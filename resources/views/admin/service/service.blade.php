@extends('admin/layout/master')
@section('title','Property Services')
@section('body')


<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <a style="float:right" href="{{ url('admin/createService') }}" class="btn btn-primary btn-sm">Add Service</a>
                        <h4 class="card-title"> Property Services </h4>
                        <hr>
                        <div class="table-responsive">
                            <div class="row grid-margin" style="display:none;" id="del">
                                <div class="col-12">
                                    <div class="alert alert-warning" role="alert">
                                        <strong id="msg">
                                    </div>
                                </div>
                                @if(\Session::has('success'))
                                <div class="alert alert-info">
                                    {!! \Session::get('success') !!} </ul>
                                </div>
                                @endif
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Icon</th>
                                        <th>Service Name</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($service as $items)
                                    <tr>
                                        <td> <img src="{{ asset('public/images') }}/{{ $items->icon ?? '' }}" width="80px" height="80px" alt=""> </td>
                                        <td>{{ $items->name ?? '' }}</td>
                                        <td>{{ $items->desc ?? '' }}</td>
                                        <td>
                                        <a  class="btn btn-warning btn-sm" href="{{ url('admin/editService').'/'.$items->id ?? '' }}">Edit</a>
                                        <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm" href="{{ url('admin/deleteService').'/'.$items->id ?? '' }}">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
@push('scripts')


@endpush