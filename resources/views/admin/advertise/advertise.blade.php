@extends('admin/layout/master')
@section('title','Advertise With Us')
@section('body')


<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                    <a style="float:right" href="{{ url('admin/createAdvertise') }}" class="btn btn-primary btn-sm">Add Plan</a>
                        <h4 class="card-title"> Advertise With Us (Plans) </h4>
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
                                        <th>Plan</th>
                                        <th>Rating</th>
                                        <th>Purchase</th>
                                        <th>Off</th>
                                        <th>Actual Price</th>
                                        <th>Discount Price</th>
                                        <th>Visible</th>
                                        <!-- <th>Content</th> -->
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($advertise as $items)
                                    <tr>
                                        <td>{{ $items->plan ?? '' }}</td>
                                        <td>{{ $items->rating ?? '' }}</td>
                                        <td>{{ $items->purchase ?? '' }}</td>
                                        <td>{{ $items->off ?? '' }}</td>
                                        <td>{{ $items->actualPrice ?? '' }}</td>
                                        <td>{{ $items->disPrice ?? '' }}</td>
                                        <td>{{ $items->visible ?? '' }}</td>
                                        <!-- <td>{{ $items->content ?? '' }}</td> -->
                                        <td>
                                        <a  class="btn btn-warning btn-sm" href="{{ url('admin/editAdvertise').'/'.$items->id ?? '' }}">Edit</a>
                                        <a onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm" href="{{ url('admin/deleteAdvertise').'/'.$items->id ?? '' }}">Delete</a>
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