@extends('layouts.app')

@section('title', 'Create Product')

@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="mb-0 font-weight-bold text-primary">ADD Service</h6>
        </div>
        <form action="{{ route('A-SERVICE.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <!-- Baris 1 -->
                <div class="row mb-3">
                    <div class="col">
                        <label for="startdate" class="form-label">Start Date</label>
                        <input type="date" name="startdate" class="form-control" placeholder="Start date">
                    </div>
                    <div class="col">
                        <label for="estdate" class="form-label">Est. Date</label>
                        <input type="date" name="estdate" class="form-control" placeholder="Est Date">
                    </div>
                    <div class="col">
                        <label for="finishdate" class="form-label">Finish Date</label>
                        <input type="date" name="finishdate" class="form-control" placeholder="Finish Date" readonly>
                        <!-- Menambahkan atribut "readonly" untuk membuatnya read-only -->
                    </div>
                </div>

                <!-- Baris 2 -->
                <div class="row mb-3">
                    <div class="col">
                        <label for="trouble" class="form-label">Trouble</label>
                        <input type="text" name="trouble" class="form-control" placeholder="Trouble">
                    </div>
                    <div class="col">
                        <label for="pic" class="form-label">PIC</label>
                        <input type="text" name="pic" class="form-control" placeholder="PIC">
                    </div>
                </div>

                <!-- Baris 3 -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="unit_id" class="form-label">Unit</label>
                        <select class="form-control select2" style="width: 100%;" name="unit_id" id="unit_id">
                            <option disabled selected value="">Pilih Unit</option>
                            @foreach ($units as $unit)
                                <option value="{{ $unit->id }}">{{ $unit->unit }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="location_id" class="form-label">Location</label>
                        <select class="form-control select2" style="width: 100%;" name="location_id" id="location_id">
                            <option disabled selected value="">Pilih Location</option>
                            @foreach ($locations as $location)
                                <option value="{{ $location->id }}">{{ $location->location }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Baris 4 -->
                <div class="row mb-3">
                    <div class="col">
                        <label for="merk" class="form-label">Merk</label>
                        <input type="text" name="merk" class="form-control" placeholder="Merk">
                    </div>
                    <div class="col">
                        <label for="ipcamera" class="form-label">IP CCTV.</label>
                        <input type="text" name="ipcamera" class="form-control" placeholder="IP CCTV.">
                    </div>
                </div>

                <!-- Baris 5 -->
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
