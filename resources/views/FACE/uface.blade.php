@extends('u_layouts.u_app')
  
@section('title', 'Home Product')
  
@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">FACE RECOGNITION</h6>
            <div class="d-flex">
                <a href="#" class="btn btn-success ml-2"><i class="fas fa-download"></i> Download</a>
            </div>
        </div>
        <hr />
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Unit</th>
                            <th>Location</th>
                            <th>Merk</th>
                            <th>Type</th>
                            <th>Firmware</th>
                            <th>Local IP</th>
                            <th>PO Number</th>
                            <th>Condition</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Unit</th>
                            <th>Location</th>
                            <th>Merk</th>
                            <th>Type</th>
                            <th>Firmware</th>
                            <th>Local IP</th>
                            <th>PO Number</th>
                            <th>Condition</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if($fc->count() > 0)
                            @foreach($fc as $rs)
                                <tr>
                                    <td class="align-middle">{{ $rs->unit->unit}}</td>
                                    <td class="align-middle">{{ $rs->location->location}}</td> 
                                    <td class="align-middle">{{ $rs->merk}}</td> 
                                    <td class="align-middle">{{ $rs->type}}</td>  
                                    <td class="align-middle">{{ $rs->firmware}}</td> 
                                    <td class="align-middle">{{ $rs->localip}}</td>
                                    <td class="align-middle">{{ $rs->ponumber}}</td>  
                                    <td class="align-middle">{{ $rs->condition}}</td> 
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="10">Product not found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
