@extends('layouts.app')
  
@section('title', 'Home Product')
  
@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">CCTV STATUS</h6>
            <div class="d-flex">
                <a href="{{ route('A-CCTV.create') }}" class="btn btn-primary ml-auto"><i class=""></i> Add</a>
                <a href="{{ url('A-CCTV/export/excel') }}" class="btn btn-success ml-2"><i class="fas fa-download"></i> Download</a>
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
                @include('A-CCTV.table', $cc)
            </div>
        </div>
    </div>
</div>
@endsection
