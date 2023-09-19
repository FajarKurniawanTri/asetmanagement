@extends('u_layouts.u_app')

@section('title', 'Tampilkan Produk')

@section('contents')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DETAIL FACE RECOGNITION</h6>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Unit</label>
                    <input type="text" name="unit" class="form-control" placeholder="Title" value="{{ $fc->unit->unit }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" placeholder="Title" value="{{ $fc->location->location }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Merk</label>
                    <input type="text" name="merk" class="form-control" placeholder="merk" value="{{ $fc->merk }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Type</label>
                    <input type="text" name="type" class="form-control" placeholder="Type" value="{{ $fc->type }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Firmware</label>
                    <input type="text" name="firmware" class="form-control" placeholder="Firmware" value="{{ $fc->firmware }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Local IP</label>
                    <input type="text" name="localip" class="form-control" placeholder="Local IP" value="{{ $fc->localip }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">PO Number</label>
                    <input type="text" name="ponumber" class="form-control" placeholder="PO Number" value="{{ $fc->ponumber }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Condition</label>
                    <input type="text" name="condition" class="form-control" placeholder="Condition" value="{{ $fc->condition }}" readonly>
                </div>
            </div>
            <!-- Lanjutkan dengan mengisi data yang sesuai -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    
                </div>
                <div class="col-md-6 mb-3">
                </div>
            </div>

@endsection
