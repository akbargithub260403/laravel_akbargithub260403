@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('Data Rumah Sakit') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <a href="{{('/insert-data/DRS')}}" class="btn btn-outline-primary">Insert Data</a>
                    <hr>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">ID</th>
                                <th scope="col">Nama Rumah Sakit</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Email</th>
                                <th scope="col">Telepon</th>
                                <th scope="col"><center>Action</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key)
                            <tr>
                                <th scope="row">{{$loop->iteration}}</th>
                                <td>{{$key->ID}}</td>
                                <td>{{$key->nama_rumah_sakit}}</td>
                                <td>{{$key->alamat}}</td>
                                <td>{{$key->email}}</td>
                                <td>{{$key->no_telepon}}</td>
                                <td>
                                   <center> <a href="{{('/show-data/'.$key->ID.'/DRS')}}" class="btn btn-outline-info ">Detail</a>
                                   </center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
