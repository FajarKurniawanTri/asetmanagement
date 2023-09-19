@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">EDIT LOCATION</h6>
        </div>
        <form action="{{ route('A-LOCATION.update', $loc->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row mb-3">    
                    <div class="col-md-6">
                        <label for="name" class="form-label">Location</label>
                        <input type="text" name="location" class="form-control" id="location" placeholder="Name" value="{{ $loc->location }}">
                    </div>
                    <div class="col-md-6">
                        <label for="group_id" class="form-label">Unit</label>
                        <select class="form-control select2" style="width: 100%;" name="unit_id" id="unit_id">
                            <option disabled value=>Pilih UNIT</option>
                            <option value="{{ $loc->unit_id }}">{{ $loc->unit->unit }}</option>
                            @foreach ($unt as $item)
                            <option value="{{ $item->id }}">{{ $item->unit }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="text-center">
                    <button class="btn btn-warning">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection