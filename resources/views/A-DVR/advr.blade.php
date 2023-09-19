@extends('layouts.app')
  
@section('title', 'Home Product')
  
@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DVR</h6>
            <div class="d-flex">
                <a href="{{ route('A-DVR.create') }}" class="btn btn-primary ml-auto"><i class=""></i> Add</a>
                <a href="#" class="btn btn-success ml-2"><i class="fas fa-download"></i> Download CSV</a>
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
                            <th>Channel Qty</th>
                            <th>HDD Capacity</th>
                            <th>Local IP</th>
                            <th>PO Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($dv->count() > 0)
                            @foreach($dv as $rs)
                                <tr>
                                    <td class="align-middle">{{ $rs->unit->unit}}</td>
                                    <td class="align-middle">{{ $rs->location->location}}</td> 
                                    <td class="align-middle">{{ $rs->merk}}</td> 
                                    <td class="align-middle">{{ $rs->type}}</td>  
                                    <td class="align-middle">{{ $rs->firmware}}</td> 
                                    <td class="align-middle">{{ $rs->channel}}</td> 
                                    <td class="align-middle">{{ $rs->hdd }}</td> 
                                    <td class="align-middle">{{ $rs->localip}}</td> 
                                    <td class="align-middle">{{ $rs->ponumber }}</td> 
                                    <td class="align-middle">
                                        <div class="btn-group" role="nvr" aria-label="Basic example">
                                            <a href="{{ route('A-DVR.show', $rs->id ) }}" class="btn btn-secondary">
                                                <i class="fas fa-video"></i>
                                            </a>
                                            <a href="{{ route('A-DVR.edit', $rs->id) }}" class="btn btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('A-DVR.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="btn btn-danger p-0">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger m-0">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
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
