@extends('layouts.app')

@section('title', 'Edit Product')

@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="mb-0 font-weight-bold text-primary">CCTV</h6>
        </div>
        <form action="{{ route('A-CCTV.update', $cc->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Unit</label>
                        <select class="form-control" name="unit_id">
                            @foreach ($units as $unit)
                                <option value="{{ $unit->id }}" {{ $cc->unit_id == $unit->id ? 'selected' : '' }}>{{ $unit->unit }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Location</label>
                        <select class="form-control" name="location_id">
                            @foreach ($locations as $location)
                                <option value="{{ $location->id }}" {{ $cc->location_id == $location->id ? 'selected' : '' }}>{{ $location->location }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">IP Drive</label>
                        <select class="form-control" name="vr_id">
                            @foreach ($vr as $v)
                                <option value="{{ $v->id }}" {{ $cc->vr_id == $v->id ? 'selected' : '' }}>{{ $v->ip }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="form-row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">IP</label>
                        <input type="text" name="ip" class="form-control" placeholder="IP" value="{{ $cc->ip }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Merk</label>
                        <input type="text" name="merk" class="form-control" placeholder="Merk" value="{{ $cc->merk }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Type</label>
                        <select class="form-control" name="type">
                            <option value="IPCAM" {{ $cc->type === 'IPCAM' ? 'selected' : '' }}>IPCAM</option>
                            <option value="ANALOG" {{ $cc->type === 'ANALOG' ? 'selected' : '' }}>ANALOG</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">View Area</label>
                        <input type="text" name="view_area" class="form-control" placeholder="View Area" value="{{ $cc->view_area }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Condition</label>
                        <select class="form-control" name="condition">
                            <option value="Baik" {{ $cc->condition === 'Baik' ? 'selected' : '' }}>Baik</option>
                            <option value="Buruk" {{ $cc->condition === 'Buruk' ? 'selected' : '' }}>Buruk</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">PO Number</label>
                        <input type="text" name="ponumber" class="form-control" placeholder="PO Number" value="{{ $cc->ponumber }}">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="foto">Image</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                        @if ($cc->foto)
                            <img src="{{ asset('storage/' . $cc->foto) }}" alt="CCTV Foto" width="100">
                        @else
                            No Photo Available
                        @endif
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6">
                        <button class="btn btn-warning">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
