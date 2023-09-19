@extends('u_layouts.u_app')
  
@section('title', 'Home Product')
  
@section('contents')
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">CCTV</h6>
            <div class="d-flex">
                <a href="{{ url('A-CCTV/export/excel') }}" class="btn btn-success ml-2"><i class="fas fa-download"></i> Download</a>
            </div>
        </div>
        <hr />
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Unit</th>
                            <th>Location</th>
                            <th>IP Driver</th>
                            <th>IP</th>
                            <th>Merk</th>
                            <th>Type</th>
                            <th>View Area</th>
                            <th>PO Number</th>
                            <th>Condition</th>
                            <th>Img</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($cc->count() > 0)
                        @foreach($cc as $cctv)
                            <tr>
                                <td class="align-middle">{{ $cctv->unit->unit }}</td>
                                <td class="align-middle">{{ $cctv->location->location }}</td>
                                <td class="align-middle">{{ $cctv->vr->ip }}</td>
                                <td class="align-middle">{{ $cctv->ip }}</td>
                                <td class="align-middle">{{ $cctv->merk }}</td>
                                <td class="align-middle">{{ $cctv->type }}</td>
                                <td class="align-middle">{{ $cctv->view_area }}</td>
                                <td class="align-middle">{{ $cctv->ponumber }}</td>
                                <td class="align-middle">{{ $cctv->condition }}</td>
                                <td class="align-middle">
                                    <a href="#" data-toggle="modal" data-target="#viewImageModal{{ $cctv->id }}">
                                        @if ($cctv->foto)
                                            <img src="{{ asset('storage/' . $cctv->foto) }}" alt="CCTV Foto" width="100">
                                        @else
                                            No Photo Available
                                        @endif
                                    </a>
                                </td>
                            </tr>
                            <!-- Modal untuk Menampilkan Gambar Lebih Besar -->
                            <div class="modal fade" id="viewImageModal{{ $cctv->id }}" tabindex="-1" role="dialog" aria-labelledby="viewImageModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="viewImageModalLabel">CCTV Image</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-center">
                                            @if ($cctv->foto)
                                                <img src="{{ asset('storage/' . $cctv->foto) }}" alt="CCTV Foto" style="max-width: 100%;">
                                            @else
                                                No Photo Available
                                            @endif
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Modal -->
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
    </div>
</div>
@endsection
