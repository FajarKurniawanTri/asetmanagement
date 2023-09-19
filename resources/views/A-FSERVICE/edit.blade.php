@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">EDIT FORM</h6>
        </div>
        <form action="{{ route('A-FSERVICE.update', $fserv->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col">
                        <label for="startdate" class="form-label">Start Date</label>
                        <input type="date" name="startdate" class="form-control" placeholder="Start date" value="{{ $fserv->startdate }}">
                    </div>
                    <div class="col">
                        <label for="estdate" class="form-label">Est. Date</label>
                        <input type="date" name="estdate" class="form-control" placeholder="Est Date" value="{{ $fserv->estdate }}">
                    </div>
                    <div class="col">
                        <label for="finishdate" class="form-label">Finish Date</label>
                        <input type="date" name="finishdate" class="form-control" placeholder="Finish Date" value="{{ date('Y-m-d') }}">
                        <!-- Menyertakan PHP date() untuk menampilkan tanggal aktual -->
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <label for="trouble" class="form-label">Trouble</label>
                        <input type="text" name="trouble" class="form-control" placeholder="Trouble" value="{{ $fserv->trouble }}">
                    </div>
                    <div class="col">
                        <label for="pic" class="form-label">PIC</label>
                        <input type="text" name="pic" class="form-control" placeholder="PIC" value="{{ $fserv->pic }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Unit</label>
                            <select class="form-control" name="unit_id">
                                @foreach ($units as $unit)
                                    <option value="{{ $unit->id }}" {{ $fserv->unit_id == $unit->id ? 'selected' : '' }}>{{ $unit->unit }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Location</label>
                            <select class="form-control" name="location_id">
                                @foreach ($locations as $location)
                                    <option value="{{ $location->id }}" {{ $fserv->location_id == $location->id ? 'selected' : '' }}>{{ $location->location }}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="col">
                        <label for="merk" class="form-label">Merk</label>
                        <input type="text" name="merk" class="form-control" placeholder="Merk" value="{{ $fserv->merk }}">
                    </div>
                    <div class="col">
                        <label for="ipcamera" class="form-label">IP FACE Rec.</label>
                        <input type="text" name="ipcamera" class="form-control" placeholder="IP FACE rec." value="{{ $fserv->ipcamera }}">
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
