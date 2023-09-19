@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">EDIT NVR</h6>
        </div>
        <form action="{{ route('A-NVR.update', $nv->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Unit</label>
                        <select class="form-control" name="unit_id">
                            @foreach ($units as $unit)
                                <option value="{{ $unit->id }}" {{ $nv->unit_id == $unit->id ? 'selected' : '' }}>{{ $unit->unit }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Location</label>
                        <select class="form-control" name="location_id">
                            @foreach ($locations as $location)
                                <option value="{{ $location->id }}" {{ $nv->location_id == $location->id ? 'selected' : '' }}>{{ $location->location }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Merk</label>
                        <input type="text" name="merk" class="form-control" placeholder="Merk" value="{{ $nv->merk }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Type</label>
                        <input type="text" name="type" class="form-control" placeholder="Type" value="{{ $nv->type }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Firmware</label>
                        <input type="text" name="firmware" class="form-control" placeholder="Firmware" value="{{ $nv->firmware }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Channel</label>
                        <input type="text" name="channel" class="form-control" placeholder="Channel" value="{{ $nv->channel }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">HDD</label>
                        <input type="text" name="hdd" class="form-control" placeholder="HDD" value="{{ $nv->hdd }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Local IP</label>
                        <input type="text" name="localip" class="form-control" placeholder="Local IP" value="{{ $nv->localip }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">PO Number</label>
                        <input type="text" name="ponumber" class="form-control" placeholder="PO Number" value="{{ $nv->ponumber }}">
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
