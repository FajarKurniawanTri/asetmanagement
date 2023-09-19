<!-- Tabel dengan Kolom Img -->
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
            <th>Action</th>
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
            <td class="align-middle">
                <div class="btn-group" role="cctv" aria-label="Basic example">
                    <a href="{{ route('A-CCTV.edit', $cctv->id) }}" class="btn btn-warning">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('A-CCTV.destroy', $cctv->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="btn btn-danger p-0">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger m-0">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                    <a href="{{ route('A-SERVICE.create', ['cctv_id' => $cctv->id]) }}" class="btn btn-success">
                        <i class="fas fa-wrench"></i>
                    </a>
                </div>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td class="text-center" colspan="11">Product not found</td>
        </tr>
        @endif
    </tbody>
</table>

<!-- Modal untuk Menampilkan Gambar Lebih Besar -->
@foreach($cc as $cctv)
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
@endforeach
