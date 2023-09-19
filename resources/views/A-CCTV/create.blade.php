@extends('layouts.app')

@section('title', 'Create Product')

@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="mb-0 font-weight-bold text-primary">CCTV</h6>
        </div>
        <form action="{{ route('A-CCTV.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="unit_id" class="form-label">Unit</label>
                            <select class="form-control select2" style="width: 100%;" name="unit_id" id="unit_id">
                                <option disabled selected value="">Pilih Unit</option>
                                @foreach ($units as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->unit }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="location_id" class="form-label">Location</label>
                            <select class="form-control select2" style="width: 100%;" name="location_id" id="location_id">
                                <option disabled selected value="">Pilih Location</option>
                                @foreach ($locations as $location)
                                <option value="{{ $location->id }}">{{ $location->location }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="vr_id" class="form-label">Vid Rec.</label>
                            <select class="form-control select2" style="width: 100%;" name="vr_id" id="vr_id">
                                <option disabled selected value="">Pilih Video Rec.</option>
                                @foreach ($vr as $vr)
                                <option value="{{ $vr->id }}">{{ $vr->ip }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="ip" class="form-label">IP</label>
                        <input type="text" name="ip" class="form-control" placeholder="IP">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="merk" class="form-label">Merk</label>
                        <input type="text" name="merk" class="form-control" placeholder="Merk">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select name="type" class="form-control">
                            <option disabled selected value="">Type</option>
                            <option value="IPCAM">IPCAM</option>
                            <option value="ANALOG">ANALOG</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="view_area" class="form-label">View Area</label>
                        <input type="text" name="view_area" class="form-control" placeholder="View Area">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="condition" class="form-label">Condition</label>
                        <select name="condition" class="form-control">
                            <option disabled selected value="">Condition</option>
                            <option value="Baik">Baik</option>
                            <option value="Buruk">Buruk</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="ponumber" class="form-label">PO Number</label>
                        <input type="text" name="ponumber" class="form-control" placeholder="PO Number">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="foto" class="form-label">Image</label>
                        <input type="file" class="form-control" name="foto" id="foto">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
