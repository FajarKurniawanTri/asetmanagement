@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">EDIT Data User</h6>
        </div>
        <form action="{{ route('A-DATA.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Username</label>
                        <input type="text" name="name" class="form-control" placeholder="Username" value="{{ $product->name }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $product->email }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Role</label>
                        <input type="text" name="role" class="form-control" placeholder="Role" value="{{ $product->role }}">
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
