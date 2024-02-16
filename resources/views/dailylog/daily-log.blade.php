@extends('layout.app')

@push('post-styles')
    <link href="{{asset('')}}assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
@endpush

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="exampleVerticallycenteredModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="p-4">
                    <h5 class="mb-4">Log Detail</h5>
                    <div class="row mb-3">
                        <label for="input42" class="col-sm-3 col-form-label">Staff Name</label>
                        <div class="col-sm-9">
                            <div class="position-relative input-icon">
                                <span type="text" class="form-control" id="log-name"></span>
                                <span class="d-flex position-absolute top-50 translate-middle-y"><i
                                            class="material-icons-outlined fs-5">person_outline</i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input44" class="col-sm-3 col-form-label">Email Address</label>
                        <div class="col-sm-9">
                            <div class="position-relative input-icon">
                                <p type="text" class="form-control" id="log-email"></p>
                                <span class=" d-flex position-absolute top-50 translate-middle-y"><i
                                            class="material-icons-outlined fs-5">send</i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input44" class="col-sm-3 col-form-label">Date</label>
                        <div class="col-sm-9">
                            <div class="position-relative input-icon">
                                <p type="text" class="form-control" id="log-date"></p>
                                <span class=" d-flex position-absolute top-50 translate-middle-y"><i
                                            class="lni lni-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input47" class="col-sm-3 col-form-label">Message</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="log-message" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9 d-flex align-items-center">
                            <span
                                    id="log-status"
                                    class="lable-table bg-warning-subtle text-warning rounded border border-warning-subtle font-text2 fw-bold">Pending<i
                                        class="bi bi-info-circle ms-2"></i></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input44" class="col-sm-3 col-form-label">Confirm Date</label>
                        <div class="col-sm-9">
                            <div class="position-relative input-icon">
                                <p type="text" class="form-control" id="log-confirm-date">-</p>
                                <span class=" d-flex position-absolute top-50 translate-middle-y"><i
                                            class="lni lni-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <div class="d-md-flex d-grid align-items-center gap-3 d-flex justify-content-end">
                                <button type="button" class="btn btn-danger px-4" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row">
        <h6 class="mb-0 text-uppercase flex-grow-1 align-items-center d-flex fw-bold">Daily Logs</h6>
        <a class="btn btn-primary" href="{{route('log.daily-log-create')}}">+ Add New Log</a>
    </div>
    <hr>
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
                                   data-bs-target="#exampleVerticallycenteredModal"
                                   onclick="openLog('{{$data->user->name}}','{{$data->user->email}}','{{$data->message}}','{{$data->verification->status}}','{{$data->created_at}}','{{$data->verification->user->name ?? '-'}}','{{$data->verification->updated_at ?? '-'}}')">Preview</a>

                                @if($data->verification->status == 'pending')
                                    <a href="{{route('log.daily-log-update',['data_id'=>$data->id])}}"
                                       class="btn btn-warning">Edit</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @if($errors->any())
                    {!! implode('', $errors->all('<p class="text-danger mt-3">:message</p>')) !!}
                @endif
            </div>
        </div>
    </div>

@endsection

@push('post-scripts')
    <script src="{{asset('')}}assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{asset('')}}assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });

        function openLog(name, email, message, status, date, admin, confirmDate) {
            document.getElementById('log-name').innerHTML = name;
            document.getElementById('log-email').innerHTML = email;
            document.getElementById('log-date').innerHTML = date;
            document.getElementById('log-message').innerHTML = message;

            let span = document.createElement('span');
            span.id = 'log-status';
            let i = document.createElement('i');

            if (status === 'true') {
                i.className = "bi bi-check2 ms-2";
                span.className = "lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold";
                span.innerHTML = "Disetujui By" + admin;
                span.appendChild(i);

                document.getElementById('log-confirm-date').innerHTML = confirmDate
                document.getElementById('log-status').replaceWith(span)
            } else if (status === 'false') {
                i.className = "bi bi-x-lg ms-2";
                span.className = "lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold";
                span.innerHTML = "Ditolak Oleh " + admin;
                span.appendChild(i);

                document.getElementById('log-confirm-date').innerHTML = confirmDate
                document.getElementById('log-status').replaceWith(span)
            } else {
                i.className = "bi bi-info-circle ms-2";
                span.className = "lable-table bg-warning-subtle text-warning rounded border border-warning-subtle font-text2 fw-bold";
                span.innerHTML = "Pending";
                span.appendChild(i);

                document.getElementById('log-confirm-date').innerHTML = '-'
                document.getElementById('log-status').replaceWith(span)
            }
        }
    </script>
@endpush
