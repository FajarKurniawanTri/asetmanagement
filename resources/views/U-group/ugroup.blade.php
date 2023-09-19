@extends('u_layouts.u_app')

@section('title', 'Home Product')

@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">GROUP UNIT</h6>
            <div class="d-flex">
                <a href="{{ url('A-GROUP/export/excel') }}" class="btn btn-success ml-2"><i class="fas fa-download"></i> Download</a>
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
                        </tr>
                            <th>ID</th>
                            <th>Group</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Group</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if($ugrp->count() > 0)
                            @foreach($ugrp as $rs)
                                <tr>
                                    <td class="align-middle">{{ $rs->id }}</td>
                                    <td class="align-middle">{{ $rs->group }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="5">Product not found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
