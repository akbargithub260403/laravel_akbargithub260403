<?php

namespace App\Http\Controllers;

use App\Models\DataRumahSakit;
use Illuminate\Http\Request;

class DataRumahSakitControllers extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data   = DataRumahSakit::all();

        return view('home',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.insert-DRS');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'ID'                    => 'required',
            'nama_rumah_sakit'      => 'required',
            'alamat'                => 'required',
            'email'                 => 'required',
            'no_telepon'            => 'required',
        ]);

        DataRumahSakit::create([
            'ID'                    => $request->ID,
            'nama_rumah_sakit'      => $request->nama_rumah_sakit,
            'alamat'                => $request->alamat,
            'email'                 => $request->email,
            'no_telepon'            => $request->no_telepon
        ]);

        return redirect('/home')->with('status','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataRumahSakit  $dataRumahSakit
     * @return \Illuminate\Http\Response
     */
    public function show(DataRumahSakit $DataRumahSakit)
    {
        return view('pages.show-DRS',compact('DataRumahSakit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataRumahSakit  $dataRumahSakit
     * @return \Illuminate\Http\Response
     */
    public function edit(DataRumahSakit $DataRumahSakit)
    {
        return view('pages.update-DRS',compact('DataRumahSakit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataRumahSakit  $dataRumahSakit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataRumahSakit $DataRumahSakit)
    {
        $this->validate($request,[
            'ID'                    => 'required',
            'nama_rumah_sakit'      => 'required',
            'alamat'                => 'required',
            'email'                 => 'required',
            'no_telepon'            => 'required',
        ]);

        DataRumahSakit::where('ID','=',$DataRumahSakit->ID)
                        ->update([
                            'ID'                => $request->ID,
                            'nama_rumah_sakit'  => $request->nama_rumah_sakit,
                            'alamat'            => $request->alamat,
                            'email'             => $request->email,
                            'no_telepon'        => $request->no_telepon
                        ]);
        
        return redirect('/home')->with('status','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataRumahSakit  $dataRumahSakit
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataRumahSakit $DataRumahSakit)
    {
        DataRumahSakit::where('ID','=',$DataRumahSakit->ID)->delete();

        return redirect('/home')->with('status','Data Berhasil Dihapus');
    }
}
