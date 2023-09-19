@extends('layouts.app')
  
@section('title', 'Create Product')
  
@section('contents')
<div class="container-fluid">
    <h6 class="mb-0">Add Product</h6>
    <hr />
    <form action="{{ route('A-GROUP.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection