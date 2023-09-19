@extends('layouts.app')
  
@section('title', 'Create Group Unit')
  
@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-3">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="mb-0 font-weight-bold text-primary">Add Group Unit</h6>
        </div>
            <form action="{{ route('A-GROUP.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="card-body">
                    <div class="mb-3">
                        <label for="grooup" class="form-label">Group</label>
                        <input type="text" name="group" class="form-control" id="group" placeholder="Enter Group Name">
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
    </div>
</div>
@endsection
