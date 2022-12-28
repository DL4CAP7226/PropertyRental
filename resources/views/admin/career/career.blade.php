@extends('admin/layout/master')
@section('title','Careers')
@section('body')


<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <a style="float:right" href="{{ url('admin/createCareer') }}" class="btn btn-primary btn-sm">Add Career</a>
                        <h4 class="card-title"> Careers </h4>
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
                                        <th>Post Name</th>
                                        <th>Location</th>
                                        <th>Job Type</th>
                                        <th>Job Description</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($career as $items)
                                    <tr>
                                        <td>{{ $items->postName ?? '' }}</td>
                                        <td>{{ $items->location ?? '' }}</td>
                                        <td>{{ $items->postType ?? '' }}</td>
                                        <td>{{ $items->jobDesc ?? '' }}</td>
                                        <td>
                                        <a  class="btn btn-warning btn-sm" href="{{ url('admin/editCareer').'/'.$items->id ?? '' }}">Edit</a>
                                        <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm" href="{{ url('admin/deleteCareer').'/'.$items->id ?? '' }}">Delete</a>
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