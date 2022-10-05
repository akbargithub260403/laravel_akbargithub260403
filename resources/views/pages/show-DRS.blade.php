@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Show Pages Data Rumah Sakit') }}</div>
                <div class="card-body">
                    <form class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">ID</label>
                            <input type="text" value="{{$DataRumahSakit->ID}}"
                                class="form-control"disabled>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Nama Rumah Sakit</label>
                            <input type="text" value="{{$DataRumahSakit->nama_rumah_sakit}}"
                                class="form-control" disabled>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Alamat</label>
                            <input type="text" value="{{$DataRumahSakit->alamat}}"
                                class="form-control" disabled>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Email</label>
                            <input type="email" value="{{$DataRumahSakit->email}}"
                                class="form-control" disabled>
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">No Telepon</label>
                            <input type="text" value="{{$DataRumahSakit->no_telepon}}"
                                class="form-control" disabled>
                        </div>
                    </form>
                    <br>
                        <div class="col-12">
                            <a href="{{('/update-data/'.$DataRumahSakit->ID.'/DRS')}}"
                                class="btn btn-outline-warning">Update
                                Data</a>
                                <br><br>
                            <form action="{{('/delete-data/'.$DataRumahSakit->ID.'/DRS')}}" method="post">
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
