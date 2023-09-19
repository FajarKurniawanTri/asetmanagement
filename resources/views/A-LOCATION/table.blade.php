<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Location</th>
            <th>Unit</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @if($loc->count() > 0)
            @foreach($loc as $rs)
                <tr>
                    <td class="align-middle">{{ $rs->location }}</td>
                    <td class="align-middle">{{ $rs->unit->unit }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="location" aria-label="Basic example">
                            <a href="{{ route('A-LOCATION.show', $rs->id) }}" class="btn btn-secondary">
                                <i class="fas fa-info-circle"></i>
                            </a>
                            <a href="{{ route('A-LOCATION.edit', $rs->id) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('A-LOCATION.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Delete?')" class="btn btn-danger p-0">
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