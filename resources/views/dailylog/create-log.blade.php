@extends('layout.app')
@section('content')
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Create Daily Log</h5>
            <form class="row g-3" method="post"
                  @if(isset($data)) action="{{route('log.daily-log-update-attempt')}}"
                  @else action="{{route('log.daily-log-create-attempt')}}" @endif>

                @csrf

                @if(isset($data))
                    <input type="hidden" name="data_id" value="{{$data->id}}">
                @endif
                <div class="col-md-12">
                    <label for="name" class="form-label">Name</label>
                    <input disabled type="text" value="{{$user->name}}" name="name" class="form-control" id="name"
                           placeholder="name">
                </div>
                <div class="col-md-12">
                    <label for="email" class="form-label">Email</label>
                    <input disabled type="email" class="form-control" id="email" value="{{$user->email}}">
                </div>

                <div class="col-md-12">
                    <label for="input6" class="form-label">Jabatan</label>
                    <input disabled type="text" class="form-control" id="input6" value="{{$user->role->name}}">
                </div>

                <div class="col-md-12">
                    <label for="message" class="form-label">Address</label>
                    <textarea class="form-control" name="message" id="message" placeholder="Tuliskan Log Hari Ini"
                              rows="3">{{$data->message ?? ''}}</textarea>
                </div>
                <div class="col-md-12">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <input type="submit" class="btn btn-primary px-4">
                    </div>
                </div>
            </form>

            @if($errors->any())
                {!! implode('', $errors->all('<p class="text-danger mt-3">:message</p>')) !!}
            @endif
        </div>
    </div>
@endsection
