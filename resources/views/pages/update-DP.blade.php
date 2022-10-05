@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Update Pages Data Pasien') }}</div>
                <div class="card-body">
                    <form class="row g-3" action="{{'/update-data/'.$DataPasien->ID.'/DP/progress'}}" method="POST">
                    @method('patch')
                    @csrf
                        <div class="col-md-3">
                            <label class="form-label">ID</label>
                            <input type="text" value="{{$DataPasien->ID}}" class="form-control @error('ID')is-invalid @enderror" name="ID">
                                @error('ID')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <label  class="form-label">Nama Pasien</label>
                            <input type="text" value="{{$DataPasien->nama_pasien}}" class="form-control @error('nama_pasien')is-invalid @enderror" name="nama_pasien">
                                @error('nama_pasien')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label">Alamat</label>
                            <input type="text" value="{{$DataPasien->alamat}}" class="form-control @error('alamat')is-invalid @enderror" name="alamat">
                                @error('alamat')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label">ID Rumah Sakit</label>
                            <input type="text" value="{{$DataPasien->ID_rumahsakit}}" class="form-control @error('ID_rumahsakit')is-invalid @enderror" name="ID_rumahsakit">
                                @error('ID_rumahsakit')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">No Telepon</label>
                            <input type="text" value="{{$DataPasien->no_telepon}}" class="form-control @error('no_telepon')is-invalid @enderror" name="no_telepon">
                                @error('no_telepon')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
