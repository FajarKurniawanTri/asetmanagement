@extends('layouts.app')
  
@section('title', 'Edit Product')
  
@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">EDIT UNIT</h6>
        </div>
        <form action="{{ route('A-UNIT.update', $unt->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row mb-3">    
                    <div class="col-md-6">
                        <label for="name" class="form-label">Unit</label>
                        <input type="text" name="unit" class="form-control" id="unit" placeholder="Name" value="{{ $unt->unit }}">
                    </div>
                    <div class="col-md-6">
                        <label for="group_id" class="form-label">Group</label>
                        <select class="form-control select2" style="width: 100%;" name="group_id" id="group_id">
                            <option disabled value=>Pilih Group</option>
                            <option value="{{ $unt->group_id }}">{{ $unt->group->group }}</option>
                            @foreach ($grp as $item)
                            <option value="{{ $item->id }}">{{ $item->group }}</option>
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



