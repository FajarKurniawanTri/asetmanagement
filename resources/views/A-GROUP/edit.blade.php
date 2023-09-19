@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">EDIT GROUP UNIT</h6>
        </div>
        <form action="{{ route('A-GROUP.update', $grp->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" name="group" class="form-control" placeholder="Name" value="{{ $grp->group }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <button class="btn btn-warning">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
