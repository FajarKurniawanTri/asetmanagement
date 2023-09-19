@extends('u_layouts.u_app')
  
@section('title', 'Edit Product')
  
@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DETAIL SERVICE</h6>
        </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col">
                        <label for="startdate" class="form-label">Start Date</label>
                        <input type="date" name="startdate" class="form-control" placeholder="Start date" value="{{ $product->startdate }}" readonly>
                    </div>
                    <div class="col">
                        <label for="estdate" class="form-label">Est. Date</label>
                        <input type="date" name="estdate" class="form-control" placeholder="Est Date" value="{{ $product->estdate }}" readonly>
                    </div>
                    <div class="col">
                        <label for="finishdate" class="form-label">Finish Date</label>
                        <input type="date" name="finishdate" class="form-control" placeholder="Finish Date" value="{{ $product->finishdate }}" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="trouble" class="form-label">Trouble</label>
                        <input type="text" name="trouble" class="form-control" placeholder="Trouble" value="{{ $product->trouble }}" readonly>
                    </div>
                    <div class="col">
                        <label for="pic" class="form-label">PIC</label>
                        <input type="text" name="pic" class="form-control" placeholder="PIC" value="{{ $product->pic }}" readonly>
                    </div>
                    <div class="col">
                        <label for="unit" class="form-label">Unit</label>
                        <input type="text" name="unit" class="form-control" placeholder="Unit" value="{{ $product->unit }}" readonly>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="channel" class="form-label">Location</label>
                        <input type="text" name="location" class="form-control" placeholder="Location" value="{{ $product->location}}" readonly>
                    </div>
                    <div class="col">
                        <label for="merk" class="form-label">Merk</label>
                        <input type="text" name="merk" class="form-control" placeholder="Merk" value="{{ $product->merk }}" readonly>
                    </div>
                    <div class="col">
                        <label for="camera" class="form-label">Camera</label>
                        <input type="text" name="camera" class="form-control" placeholder="Camera" value="{{ $product->camera }}" readonly>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
