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
                    <h5 class="mb-4">Log Verification</h5>
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
                        <div class="d-md-flex d-grid align-items-center gap-3 d-flex justify-content-end">
                            <form method="post" action="{{route('verification.attemp')}}">
                                @csrf
                                <input class="data_id" type="hidden" name="data_id" id="data_id">
                                <button type="submit" name="status" value="false" class="btn btn-danger px-4"
                                        data-bs-dismiss="modal">Tolak
                                </button>
                            </form>

                            <form method="post" action="{{route('verification.attemp')}}">
                                @csrf
                                <input class="data_id" type="hidden" name="data_id" id="data_id">
                                <button type="submit" name="status" value="true" class="btn btn-success px-4"
                                        data-bs-dismiss="modal">Terima
                                </button>
                            </form>
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
                        <th>Staff name</th>
                        <th>Date</th>
                        <th>Message</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dataset as $data)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$data->dailyLog->user->name}}</td>
                            <td>{{$data->dailyLog->created_at}}</td>
                            <td style="max-width: 150px" class="text-truncate">
                                {{$data->dailyLog->message}}
                            </td>
                            <td>
                                @if($data->status == 'true')
                                    <span
                                        class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Disetujui<i
                                            class="bi bi-check2 ms-2"></i></span>
                                @elseif($data->status == 'pending')
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
                                   onclick="openLog('{{$data->dailyLog->id}}','{{$data->dailyLog->user->name}}','{{$data->dailyLog->user->email}}','{{$data->dailyLog->message}}','{{$data->status}}','{{$data->dailyLog->created_at}}','{{$data->user->name ?? '-'}}','{{$data->updated_at ?? '-'}}')">Confirmation</a>
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

        function openLog(id, name, email, message, status, date, admin, confirmDate) {
            $('.data_id').val(id);
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
