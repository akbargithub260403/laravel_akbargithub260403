@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Insert Pages Data Rumah Sakit') }}</div>
                <div class="card-body">
                    <form class="row g-3" action="{{'/insert-data/DRS/progress'}}" method="POST">
                    @csrf
                        <div class="col-md-3">
                            <label class="form-label">ID</label>
                            <input type="text" class="form-control @error('ID')is-invalid @enderror" name="ID">
                                @error('ID')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="col-md-6">
                            <label  class="form-label">Nama Rumah Sakit</label>
                            <input type="text" class="form-control @error('nama_rumah_sakit')is-invalid @enderror" name="nama_rumah_sakit">
                                @error('nama_rumah_sakit')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label">Alamat</label>
                            <input type="text" class="form-control @error('alamat')is-invalid @enderror" name="alamat">
                                @error('alamat')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="col-12">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control @error('email')is-invalid @enderror" name="email">
                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">No Telepon</label>
                            <input type="text" class="form-control @error('no_telepon')is-invalid @enderror" name="no_telepon">
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
