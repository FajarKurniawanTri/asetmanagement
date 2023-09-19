@extends('layouts.app')
  
@section('title', 'Home Product')
  
@section('contents')
<!-- Custom styles for this page -->

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DATA</h6>
            <div class="d-flex">
                <a href="{{ route('A-DATA.create') }}" class="btn btn-primary ml-auto"><i class=""></i> Add</a>
                <a href="#" class="btn btn-success ml-2"><i class="fas fa-download"></i> Download</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if($product->count() > 0)
                            @foreach($product as $rs)
                                <tr>
                                    <td class="align-middle">{{ $rs->name}}</td>
                                    <td class="align-middle">{{ $rs->email}}</td> 
                                    <td class="align-middle">{{ $rs->role}}</td> 
                                    <td class="align-middle">
                                        <div class="btn-group" role="nvr" aria-label="Basic example">
                                            <a href="{{ route('A-DATA.show', $rs->id ) }}" class="btn btn-secondary">
                                                <i class="fas fa-info-circle"></i>
                                            </a>
                                            <a href="{{ route('A-DATA.edit', $rs->id) }}" class="btn btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('A-DATA.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="btn btn-danger p-0">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger m-0">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td class="text-center" colspan="3">Product not found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
