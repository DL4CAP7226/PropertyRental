@extends('admin/layout/master')
@section('title','Explore Goa')
@section('body')


<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <a style="float:right" href="{{ url('admin/createExploreGoa') }}" class="btn btn-primary btn-sm">Add Explore Goa</a>
                        <h4 class="card-title"> Explore Goa </h4>
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
                                        <th>Image</th>
                                        <th>Type</th>
                                        <th>Heading</th>
                                        <th>Discription</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($goa as $items)
                                    <tr>
                                        <td> <img src="{{ asset('public/images') }}/{{ $items->image ?? '' }}" width="80px" height="80px" alt=""> </td>
                                        <td>{{ $items->type ?? '' }}</td>
                                        <td>{{ $items->heading ?? '' }}</td>
                                        <td>{{ $items->desc ?? '' }}</td>
                                        <td>{{ $items->date ?? '' }}</td>
                                        <td>
                                        <a  class="btn btn-warning btn-sm" href="{{ url('admin/editExploreGoa').'/'.$items->id ?? '' }}">Edit</a>
                                        <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm" href="{{ url('admin/deleteExploreGoa').'/'.$items->id ?? '' }}">Delete</a>
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