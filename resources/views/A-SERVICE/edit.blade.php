@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">EDIT FORM</h6>
        </div>
        <form action="{{ route('A-SERVICE.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col">
                        <label for="startdate" class="form-label">Start Date</label>
                        <input type="date" name="startdate" class="form-control" placeholder="Start date" value="{{ $product->startdate }}">
                    </div>
                    <div class="col">
                        <label for="estdate" class="form-label">Est. Date</label>
                        <input type="date" name="estdate" class="form-control" placeholder="Est Date" value="{{ $product->estdate }}">
                    </div>
                    <div class="col">
                        <label for="finishdate" class="form-label">Finish Date</label>
                        <input type="date" name="finishdate" class="form-control" placeholder="Finish Date" value="{{ date('Y-m-d') }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="trouble" class="form-label">Trouble</label>
                        <input type="text" name="trouble" class="form-control" placeholder="Trouble" value="{{ $product->trouble }}">
                    </div>
                    <div class="col">
                        <label for="pic" class="form-label">PIC</label>
                        <input type="text" name="pic" class="form-control" placeholder="PIC" value="{{ $product->pic }}">
                    </div>
                    <div class="col">
                        <label for="unit" class="form-label">Unit</label>
                        <input type="text" name="unit" class="form-control" placeholder="Unit" value="{{ $product->unit->unit}}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="channel" class="form-label">Location</label>
                        <input type="text" name="location" class="form-control" placeholder="Location" value="{{ $product->location->location}}">
                    </div>
                    <div class="col">
                        <label for="merk" class="form-label">Merk</label>
                        <input type="text" name="merk" class="form-control" placeholder="Merk" value="{{ $product->merk }}">
                    </div>
                    <div class="col">
                        <label for="ipcamera" class="form-label">IP CCTV</label>
                        <input type="text" name="ipcamera" class="form-control" placeholder="IP CCTV" value="{{ $product->ipcamera }}">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
