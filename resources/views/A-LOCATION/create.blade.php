@extends('layouts.app')
  
@section('title', 'Create Product')
  
@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="mb-0 font-weight-bold text-primary">Add Unit</h6>
        </div>
            <form action="{{ route('A-LOCATION.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" id="location" placeholder="Location">
                </div>
                <div class="mb-3">
                    <label for="unit_id" class="form-label">UNIT</label>
                    <select class="form-control select2" style="width: 100%;" name="unit_id" id="unit_id">
                        <option disabled selected value="">Pilih Unit</option>
                        @foreach ($unt as $item)
                        <option value="{{ $item->id }}">{{ $item->unit }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>        
        </form>
    </div>
</div>
@endsection