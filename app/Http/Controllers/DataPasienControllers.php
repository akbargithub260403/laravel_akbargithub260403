<?php

namespace App\Http\Controllers;

use App\Models\DataPasien;
use Illuminate\Http\Request;

class DataPasienControllers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data   = DataPasien::all();

        return view('home-DP',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.insert-DP');
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
            'nama_pasien'           => 'required',
            'alamat'                => 'required',
            'ID_rumahsakit'         => 'required',
            'no_telepon'            => 'required',
        ]);

        DataPasien::create([
            'ID'                    => $request->ID,
            'nama_pasien'           => $request->nama_pasien,
            'alamat'                => $request->alamat,
            'ID_rumahsakit'         => $request->ID_rumahsakit,
            'no_telepon'            => $request->no_telepon
        ]);

        return redirect('/home/DP')->with('status','Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPasien  $dataPasien
     * @return \Illuminate\Http\Response
     */
    public function show(DataPasien $DataPasien)
    {
        return view('pages.show-DP',compact('DataPasien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPasien  $dataPasien
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPasien $DataPasien)
    {
        return view('pages.update-DP',compact('DataPasien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataPasien  $dataPasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataPasien $DataPasien)
    {
        $this->validate($request,[
            'ID'                    => 'required',
            'nama_pasien'           => 'required',
            'alamat'                => 'required',
            'ID_rumahsakit'         => 'required',
            'no_telepon'            => 'required',
        ]);

        DataPasien::where('ID','=',$DataPasien->ID)
                        ->update([
                            'ID'                => $request->ID,
                            'nama_pasien'       => $request->nama_pasien,
                            'alamat'            => $request->alamat,
                            'ID_rumahsakit'     => $request->ID_rumahsakit,
                            'no_telepon'        => $request->no_telepon
                        ]);
        
        return redirect('/home/DP')->with('status','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPasien  $dataPasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPasien $DataPasien)
    {
        DataPasien::where('ID','=',$DataPasien->ID)->destroy();

        return response()->json(['success','berhsail']);
    }
}
