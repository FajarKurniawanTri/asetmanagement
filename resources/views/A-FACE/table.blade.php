<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Unit</th>
            <th>Location</th>
            <th>Merk</th>
            <th>Type</th>
            <th>Firmware</th>
            <th>Local IP</th>
            <th>PO Number</th>
            <th>Condition</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($fc->count() > 0)
            @foreach($fc as $rs)
                <tr>
                    <td class="align-middle">{{ $rs->unit->unit}}</td>
                    <td class="align-middle">{{ $rs->location->location}}</td> 
                    <td class="align-middle">{{ $rs->merk}}</td> 
                    <td class="align-middle">{{ $rs->type}}</td>  
                    <td class="align-middle">{{ $rs->firmware}}</td> 
                    <td class="align-middle">{{ $rs->localip}}</td>
                    <td class="align-middle">{{ $rs->ponumber}}</td>  
                    <td class="align-middle">{{ $rs->condition}}</td> 
                    <td class="align-middle">
                        <div class="btn-group" role="face" aria-label="Basic example">
                            <a href="{{ route('A-FACE.show', $rs->id ) }}" class="btn btn-secondary">
                                <i class="fas fa-info-circle"></i>
                            </a>
                            <a href="{{ route('A-FACE.edit', $rs->id) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('A-FACE.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="btn btn-danger p-0">
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