@extends('u_layouts.u_app')
  
@section('title', 'Home Product')

@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">LOCATION</h6>
            <div class="d-flex">
                <a href="{{ url('A-LOCATION/export/excel') }}" class="btn btn-success ml-2"><i class="fas fa-download"></i> Download</a>
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
                            <th>Location</th>
                            <th>Unit</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Location</th>
                            <th>Unit</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if($uloc->count() > 0)
                            @foreach($uloc as $rs)
                                <tr>
                                    <td class="align-middle">{{ $rs->location }}</td>
                                    <td class="align-middle">{{ $rs->unit->unit }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="3">Product not found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
    
