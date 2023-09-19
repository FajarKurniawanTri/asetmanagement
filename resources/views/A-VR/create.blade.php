@extends('layouts.app')

@section('title', 'Create Product')

@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="mb-0 font-weight-bold text-primary">NVR</h6>
        </div>
        <form action="{{ route('A-VR.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="unit_id" class="form-label">Unit</label>
                        <select class="form-control select2" style="width: 100%;" name="unit_id" id="unit_id">
                            <option disabled selected value="">Pilih Unit</option>
                            @foreach ($units as $unit)
                            <option value="{{ $unit->id }}">{{ $unit->unit }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="location_id" class="form-label">Location</label>
                        <select class="form-control select2" style="width: 100%;" name="location_id" id="location_id">
                            <option disabled selected value="">Pilih Location</option>
                            @foreach ($locations as $location)
                            <option value="{{ $location->id }}">{{ $location->location }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="merk" class="form-label">Merk</label>
                        <input type="text" name="merk" class="form-control" placeholder="Merk">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" name="type" class="form-control" placeholder="Type">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="firmware" class="form-label">Firmware</label>
                        <input type="text" name="firmware" class="form-control" placeholder="Firmware">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="channel" class="form-label">Channel</label>
                        <input type="text" name="channel" class="form-control" placeholder="Channel Qty">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="hdd" class="form-label">HDD</label>
                        <input type="text" name="hdd" class="form-control" placeholder="HDD Capacity">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="ip" class="form-label">Local IP</label>
                        <input type="text" name="ip" class="form-control" placeholder="Local IP">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="ponumber" class="form-label">PO Number</label>
                        <input type="text" name="ponumber" class="form-control" placeholder="PO Number">
                    </div>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
