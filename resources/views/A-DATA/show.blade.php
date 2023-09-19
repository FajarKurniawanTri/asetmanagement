@extends('layouts.app')

@section('title', 'Show Product')

@section('contents')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DETAIL USER</h6>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Username</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $product->name }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $product->email }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Role</label>
                    <input type="text" name="role" class="form-control" placeholder="Role" value="{{ $product->role }}" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Created At</label>
                    <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Updated At</label>
                    <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
