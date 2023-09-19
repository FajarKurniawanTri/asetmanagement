@extends('layouts.app')

@section('title', 'Tampilkan Produk')

@section('contents')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DETAIL NVR</h6>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Unit</label>
                    <input type="text" name="unit" class="form-control" placeholder="Title" value="{{ $nv->unit->unit }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" placeholder="Title" value="{{ $nv->location->location }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Merk</label>
                    <input type="text" name="merk" class="form-control" placeholder="merk" value="{{ $nv->merk }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Type</label>
                    <input type="text" name="type" class="form-control" placeholder="Type" value="{{ $nv->type }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">View Area</label>
                    <input type="text" name="view_Area" class="form-control" placeholder="View Area" value="{{ $nv->view_area }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Channel</label>
                    <input type="text" name="channel" class="form-control" placeholder="Channel" value="{{ $nv->channel }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">HDD</label>
                    <input type="text" name="hdd" class="form-control" placeholder="Hdd" value="{{ $nv->hdd }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Local IP</label>
                    <input type="text" name="localip" class="form-control" placeholder="Local IP" value="{{ $nv->localip }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">PO Number</label>
                    <input type="text" name="ponumber" class="form-control" placeholder="Public IP" value="{{ $nv->ponumber }}" readonly>
                </div>
            </div>
            <!-- Lanjutkan dengan mengisi data yang sesuai -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    
                </div>
                <div class="col-md-6 mb-3">
                </div>
            </div>
            
            <!-- Tabel Channel Details -->
            <div class="card mt-4">
                <div class="card-header py-3 d-flex align-items-center justify-content-between">
                    <h6 class="card-header"> Channel Details  </h6>
                        <div class="d-flex">
                            <a href="{{ route('A-NVR.create') }}" class="btn btn-primary ml-auto"><i class=""></i> Add Product</a>
                        </div>
                </div>

                <div class="card-body">
                    <!-- Tambahkan tombol "Tambah nvTV" di atas tabel -->
                    
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>

                                    <th>Unit</th>
                                    <th>Location</th>
                                    <th>IP</th>
                                    <th>Merk</th>
                                    <th>Type</th>
                                    <th>View Area</th>
                                    <th>PO Number</th>
                                    <th>Condition</th>
                                    <th>Action</th>
                                <!-- Tambahkan kolom lain sesuai kebutuhan -->
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>

                                    <th>Unit</th>
                                    <th>Location</th>
                                    <th>IP</th>
                                    <th>Merk</th>
                                    <th>Type</th>
                                    <th>View Area</th>
                                    <th>PO Number</th>
                                    <th>Condition</th>
                                    <th>Action</th>
                                <!-- Tambahkan kolom lain sesuai kebutuhan -->
                                </tr>
                            </tfoot>
                            <tbody>
                                @if($cc->count() > 0)
                                @foreach($cc as $cc)
                                    <tr>
                                        <td class="align-middle">{{ $cc->unit->unit }}</td> 
                                        <td class="align-middle">{{ $cc->location->location }}</td> 
                                        <td class="align-middle">{{ $cc->ip }}</td>  
                                        <td class="align-middle">{{ $cc->merk }}</td> 
                                        <td class="align-middle">{{ $cc->type }}</td> 
                                        <td class="align-middle">{{ $cc->view_area }}</td>
                                        <td class="align-middle">{{ $cc->ponumber }}</td>  
                                        <td class="align-middle">{{ $cc->condition }}</td> 
                                        <td class="align-middle">
                                            <div class="btn-group" role="nvr" aria-label="Basic example">
                                                <a href="" class="btn btn-warning">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <form action="" method="POST" onsubmit="return confirm('Delete?')" class="btn btn-danger p-0">
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
                                            <td class="text-center" colspan="10">Product not found</td>
                                        </tr>
                                    @endif
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Akhir Tabel Channel Details -->
            </div>
        </div>
    </div>
</div>

@endsection
