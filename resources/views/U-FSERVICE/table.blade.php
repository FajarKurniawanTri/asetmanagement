<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>Start Date</th>
            <th>Est.Date</th>
            <th>Finish Date</th>
            <th>Trouble</th>
            <th>PIC</th>
            <th>Unit</th>
            <th>Location</th>
            <th>Merk</th>
            <th>IP Face Recognitiom</th>
        </tr>
    </thead>
    <tbody>
        @if($fserv->count() > 0)
            @foreach($fserv as $rs)
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
                </tr>
            @endforeach
        @else
            <tr>
                <td class="text-center" colspan="10">Product not found</td>
            </tr>
        @endif
    </tbody>
</table>