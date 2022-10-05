@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Show Pages Data Pasien') }}</div>
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">ID</label>
                            <input type="text" value="{{$DataPasien->ID}}"
                                class="form-control"disabled>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nama Rumah Sakit</label>
                            <input type="text" value="{{$DataPasien->nama_pasien}}"
                                class="form-control" disabled>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Alamat</label>
                            <input type="text" value="{{$DataPasien->alamat}}"
                                class="form-control" disabled>
                        </div>
                        <div class="col-12">
                            <label class="form-label">ID Rumah Sakit</label>
                            <input type="email" value="{{$DataPasien->ID_rumahsakit}}"
                                class="form-control" disabled>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">No Telepon</label>
                            <input type="text" value="{{$DataPasien->no_telepon}}"
                                class="form-control" disabled>
                        </div>
                    </form>
                    <br>
                        <div class="col-12">
                            <a href="{{('/update-data/'.$DataPasien->ID.'/DP')}}"
                                class="btn btn-outline-warning">Update
                                Data</a>
                                <br><br>
                            <form action="{{('/delete-data/'.$DataPasien->ID.'/DP')}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-outline-danger" type="submit">Delete Data</button>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
