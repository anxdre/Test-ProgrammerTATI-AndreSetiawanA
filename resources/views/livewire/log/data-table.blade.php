<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dataset as $data)
                    <tr>
                        <td>{{$data->id}}</td>
                        <td>{{$data->created_at}}</td>
                        <td style="max-width: 150px" class="text-truncate">
                            {{$data->message}}
                        </td>
                        <td>
                            @if($data->verification->status == 'true')
                                <span
                                    class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Disetujui<i
                                        class="bi bi-check2 ms-2"></i></span>
                            @elseif($data->verification->status == 'pending')
                                <span
                                    class="lable-table bg-warning-subtle text-warning rounded border border-warning-subtle font-text2 fw-bold">Pending<i
                                        class="bi bi-info-circle ms-2"></i></span>
                            @else
                                <span
                                    class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Ditolak<i
                                        class="bi bi-x-lg ms-2"></i></span>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-primary" data-bs-toggle="modal"
                               data-bs-target="#exampleVerticallycenteredModal">Preview</a>
                            <button class="btn btn-warning" onclick="Livewire.dispatch('openModal', { component: 'log.show-log' })">Edit</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
