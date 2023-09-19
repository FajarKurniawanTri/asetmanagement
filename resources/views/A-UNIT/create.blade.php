@extends('layouts.app')

@section('title', 'Create Product')

@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="mb-0 font-weight-bold text-primary">Add Unit</h6>
        </div>
            <form action="{{ route('A-UNIT.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="mb-3">                      
                            <label for="unit" class="form-label">Unit</label>
                            <input type="text" name="unit" class="form-control" id="unit" placeholder="Unit">
                    </div>
                    <div class="mb-3">
                        <label for="group_id" class="form-label">Group</label>
                        <select class="form-control select2" style="width: 100%;" name="group_id" id="group_id">
                            <option disabled selected value="">Pilih Group</option>
                            @foreach ($grp as $item)
                            <option value="{{ $item->id }}">{{ $item->group }}</option>
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
