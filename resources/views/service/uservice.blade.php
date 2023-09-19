@extends('u_layouts.u_app')
  
@section('title', 'Home Product')
  
@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Service Form</h6>
            <a href="{{ url('A-SERVICE/export/excel') }}" class="btn btn-success ml-2"><i class="fas fa-download"></i> Download</a>
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
                            <th class="col">Start Date</th>
                            <th class="col-3">Est.Date</th>
                            <th class="col-3">Finish Date</th>
                            <th class="col-3">Trouble</th>
                            <th class="col-3">PIC</th>
                            <th class="col-3">Unit</th>
                            <th class="col-3">Location</th>
                            <th class="col-3">Merk</th>
                            <th class="col-3">IP CCTV</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($product->count() > 0)
                            @foreach($product as $rs)
                                <tr>
                                    <td class="align-middle">{{ $rs->startdate}}</td>
                                    <td class="align-middle">{{ $rs->estdate}}</td> 
                                    <td class="align-middle">{{ $rs->finishdate}}</td>
                                    <td class="align-middle">{{ $rs->trouble}}</td> 
                                    <td class="align-middle">{{ $rs->pic}}</td>   
                                    <td class="align-middle">{{ $rs->unit->unit}}</td>  
                                    <td class="align-middle">{{ $rs->location->location}}</td> 
                                    <td class="align-middle">{{ $rs->merk}}</td>
                                    <td class="align-middle">{{ $rs->ipcamera}}</td>
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

    
