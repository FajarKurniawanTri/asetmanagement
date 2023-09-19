@extends('layouts.app')

@section('title', 'Tampilkan Produk')

@section('contents')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DETAIL VR</h6>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Unit</label>
                    <input type="text" name="unit" class="form-control" placeholder="Title" value="{{ $vr->unit->unit }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" placeholder="Title" value="{{ $vr->location->location }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Merk</label>
                    <input type="text" name="merk" class="form-control" placeholder="merk" value="{{ $vr->merk }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Type</label>
                    <input type="text" name="type" class="form-control" placeholder="Type" value="{{ $vr->type }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">View Area</label>
                    <input type="text" name="view_Area" class="form-control" placeholder="View Area" value="{{ $vr->view_area }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Channel</label>
                    <input type="text" name="channel" class="form-control" placeholder="Channel" value="{{ $vr->channel }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">HDD</label>
                    <input type="text" name="hdd" class="form-control" placeholder="Hdd" value="{{ $vr->hdd }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Local IP</label>
                    <input type="text" name="ip" class="form-control" placeholder="Local IP" value="{{ $vr->ip }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">PO Number</label>
                    <input type="text" name="ponumber" class="form-control" placeholder="Public IP" value="{{ $vr->ponumber }}" readonly>
                </div>
            </div>
            <!-- Lanjutkan dengan mengisi data yang sesuai -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    
                </div>
                <div class="col-md-6 mb-3">
                </div>
            </div>
            <!-- Tabel Channel Details -->
        </div>
    </div>
</div>

@endsection
