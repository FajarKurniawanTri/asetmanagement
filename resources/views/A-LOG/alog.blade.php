@extends('layouts.app')
  
@section('title', 'Home Product')
  
@section('contents')
<!-- Custom styles for this page -->

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Log's</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Action</th>
                            <th>Role</th>
                            <th>Date</th>  
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Username</th>
                            <th>Action</th>
                            <th>Role</th>
                            <th>Date</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if($product->count() > 0)
                            @foreach($product as $rs)
                                <tr>
                                    <td class="align-middle">{{ $rs->email}}</td>
                                    <td class="align-middle">{{ $rs->action}}</td> 
                                    <td class="align-middle">{{ $rs->role}}</td>
                                    <td class="align-middle">{{ $rs->date}}</td>
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
    
