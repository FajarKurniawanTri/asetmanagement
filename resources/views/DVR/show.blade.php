@extends('u_layouts.u_app')

@section('title', 'Tampilkan Produk')

@section('contents')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">DETAIL DVR</h6>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Unit</label>
                    <input type="text" name="unit" class="form-control" placeholder="Title" value="{{ $udv->unit->unit }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Location</label>
                    <input type="text" name="location" class="form-control" placeholder="Title" value="{{ $udv->location->location }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Merk</label>
                    <input type="text" name="merk" class="form-control" placeholder="merk" value="{{ $udv->merk }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Type</label>
                    <input type="text" name="type" class="form-control" placeholder="Type" value="{{ $udv->type }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Firmware</label>
                    <input type="text" name="firmware" class="form-control" placeholder="Firmware" value="{{ $udv->firmware }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Channel</label>
                    <input type="text" name="channel" class="form-control" placeholder="Channel" value="{{ $udv->channel }}" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">HDD</label>
                    <input type="text" name="hdd" class="form-control" placeholder="Hdd" value="{{ $udv->hdd }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Local IP</label>
                    <input type="text" name="localip" class="form-control" placeholder="Local IP" value="{{ $udv->localip }}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">Public IP</label>
                    <input type="text" name="publicip" class="form-control" placeholder="Public IP" value="{{ $udv->publicip }}" readonly>
                </div>
            </div>
            <!-- Lanjutkan dengan mengisi data yang sesuai -->
            <div class="row">
                <div class="col-md-6 mb-3">
                    
                </div>
                <div class="col-md-6 mb-3">
                </div>
            </div>

            <!-- Tambahkan tombol "Tambah CCTV" di atas tabel -->
            <button class="btn btn-success mb-3" id="openAddCctvModal">Tambah CCTV</button>

            <div class="table-responsive">
                <table class="table table-bordered" id="infoTable">
                    <thead>
                        <tr>
                            <th>Location</th>
                            <th>IP CCTV</th>
                            <th>Merk</th>
                            <th>Type</th>
                            <th>View Area</th>
                            <th>Condition</th>
                            <th>Gambar</th>
                            <th>Aksi</th> <!-- Tambahkan kolom untuk tombol Edit -->
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Isi tabel dengan data dari tabel 'Cctv' -->
                        @foreach ($cctvData as $cctv)
                        <tr class="cctv-row">
                            <td>{{ $cctv->location }}</td>
                            <td>{{ $cctv->ip }}</td>
                            <td>{{ $cctv->merk }}</td>
                            <td>{{ $cctv->type }}</td>
                            <td>{{ $cctv->view_area }}</td>
                            <td>{{ $cctv->condition }}</td>
                            <td>
                                @if ($cctv->gambar)
                                    <a href="#" data-toggle="modal" data-target="#cctvModal{{ $cctv->id }}">
                                        <img src="{{ asset('admin_asset/img/2.jpeg') }}" alt="Gambar" width="100">
                                    </a>
                                @else
                                    Tidak ada gambar
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group">
                                    <button class="btn btn-primary" data-toggle="modal" data-target="#editCctvModal{{ $cctv->id }}">Edit</button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Akhir Tabel Informasi Tambahan -->
        </div>
    </div>
</div>

@foreach ($cctvData as $cctv)
<!-- Modal untuk menambah data CCTV -->
<div class="modal fade" id="addCctvModal{{ $cctv->id }}" tabindex="-1" role="dialog" aria-labelledby="addCctvModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addCctvModalLabel">Tambah CCTV</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('cctv.store', ['id' => $udv->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <!-- Tampilkan formulir untuk menambah data CCTV -->
                    <div class="form-group">
                        <label for="addLocation">Location</label>
                        <input type="text" class="form-control" id="addLocation" name="addLocation" required>
                    </div>
                    <div class="form-group">
                        <label for="addIp">IP CCTV</label>
                        <input type="text" class="form-control" id="addIp" name="addIp" required>
                    </div>
                    <div class="form-group">
                        <label for="addMerk">Merk</label>
                        <input type="text" class="form-control" id="addMerk" name="addMerk" required>
                    </div>
                    <div class="form-group">
                        <label for="addType">Type</label>
                        <input type="text" class="form-control" id="addType" name="addType" required>
                    </div>
                    <div class="form-group">
                        <label for="addViewArea">View Area</label>
                        <input type="text" class="form-control" id="addViewArea" name="addViewArea" required>
                    </div>
                    <div class="form-group">
                        <label for="addCondition">Condition</label>
                        <input type="text" class="form-control" id="addCondition" name="addCondition" required>
                    </div>
                    <div class="form-group">
                        <label for="addGambar">Gambar</label>
                        <input type="file" class="form-control-file" id="addGambar" name="addGambar">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal untuk mengedit data CCTV -->
<div class="modal fade" id="editCctvModal{{ $cctv->id }}" tabindex="-1" role="dialog" aria-labelledby="editCctvModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCctvModalLabel">Edit CCTV</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('cctv.update', ['id' => $cctv->id]) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <!-- Tampilkan formulir untuk mengedit data CCTV -->
                    <div class="form-group">
                        <label for="editLocation">Location</label>
                        <input type="text" class="form-control" id="editLocation" name="editLocation" value="{{ $cctv->location }}">
                    </div>
                    <div class="form-group">
                        <label for="editIp">IP CCTV</label>
                        <input type="text" class="form-control" id="editIp" name="editIp" value="{{ $cctv->ip }}">
                    </div>
                    <div class="form-group">
                        <label for="editMerk">Merk</label>
                        <input type="text" class="form-control" id="editMerk" name="editMerk" value="{{ $cctv->merk }}">
                    </div>
                    <div class="form-group">
                        <label for="editType">Type</label>
                        <input type="text" class="form-control" id="editType" name="editType" value="{{ $cctv->type }}">
                    </div>
                    <div class="form-group">
                        <label for="editViewArea">View Area</label>
                        <input type="text" class="form-control" id="editViewArea" name="editViewArea" value="{{ $cctv->view_area }}">
                    </div>
                    <div class="form-group">
                        <label for="editCondition">Condition</label>
                        <input type="text" class="form-control" id="editCondition" name="editCondition" value="{{ $cctv->condition }}">
                    </div>
                    <div class="form-group">
                        <label for="editGambar">Gambar</label>
                        <input type="file" class="form-control-file" id="editGambar" name="editGambar">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

<!-- JavaScript to trigger the modal -->
<script>
    document.getElementById("openAddCctvModal").addEventListener("click", function() {
        $('#addCctvModal{{ $cctv->id }}').modal('show');
    });
</script>

@endsection
