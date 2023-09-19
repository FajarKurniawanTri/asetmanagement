<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th class="col">Start Date</th>
            <th class="col-3">Est.Date</th>
            <th class="col-3">Finish Date</th>
            <th class="col-3">Trouble</th>
            <th class="col-3">PIC</th>
            <th class="col-3">Unit</th>
            <th class="col-3">Location</th>
            <th class="col-3">Merk</th>
            <th class="col-3">IP CCTV</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($product->count() > 0)
            @foreach($product as $rs)
                <tr>
                    <td class="align-middle">{{ $rs->startdate}}</td>
                    <td class="align-middle">{{ $rs->estdate}}</td> 
                    <td class="align-middle">{{ $rs->finishdate}}</td>
                    <td class="align-middle">{{ $rs->trouble}}</td> 
                    <td class="align-middle">{{ $rs->pic}}</td>   
                    <td class="align-middle">{{ $rs->unit->unit}}</td>  
                    <td class="align-middle">{{ $rs->location->location}}</td> 
                    <td class="align-middle">{{ $rs->merk}}</td>
                    <td class="align-middle">{{ $rs->ipcamera}}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="nvr" aria-label="Basic example">
                            <a href="{{ route('A-SERVICE.show', $rs->id ) }}" class="btn btn-secondary">
                                <i class="fas fa-info-circle"></i>
                            </a>
                            <a href="{{ route('A-SERVICE.edit', $rs->id) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('A-SERVICE.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="btn btn-danger p-0">
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