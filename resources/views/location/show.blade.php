@extends('u_layouts.u_app')

@section('title', 'Show Product')

@section('contents')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DETAIL LOCATION</h6>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" placeholder="Title" value="{{ $uloc->location }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Unit</label>
                    <input type="text" name="unit" class="form-control" placeholder="Title" value="{{ $uloc->unit->unit }}" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Created At</label>
                    <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $uloc->created_at }}" readonly>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Updated At</label>
                    <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $uloc->updated_at }}" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
