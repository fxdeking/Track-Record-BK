<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use App\Models\Tindak;

class TindakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function input(Request $request, $id)
    {
        $laporan = Laporan::find($id);
        return view ('tindaklanjut.create', compact('laporan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function tambah(Request $request)
    {
        $this->validate($request,[
            'pertemuan'=>'required|min:1',
            'status'=>'required',
            'tindakan'=>'required|min:3',
            'laporan_id'=>'required'
        ], ['pertemuan.required'=>'Isi kali pertemuan terlebih dahulu',
            'pertemuan.min'=>'Minimal 1 karakter',
            'status.required'=>'Isi status terlebih dahulu',
            'tindakan.required'=>'Isi tindak lanjut terlebih dahulu',
            'tindakan.min'=>'Minimal 3 karakter']);

            Tindak::create([
                'pertemuan'=>$request->get('pertemuan'),
                'tindakan'=>$request->get('tindakan'),
                'laporan_id'=>$request->get('laporan_id'),
                'konselor_id'=>$request->get('konselor_id')
            ]);

            Laporan::where('id', $request->laporan_id)->update([
                'status'=>$request->get('status'),
            ]);
    
            return redirect()->route('lap')->with('message', 'Tindak Lanjut Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tindak = Tindak::find($id);
        return view ('tindaklanjut.edit', compact('tindak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'pertemuan'=>'required|min:1',
            'status'=>'required',
            'tindakan'=>'required|min:3',
            'laporan_id'=>'required'
        ], ['pertemuan.required'=>'Isi kali pertemuan terlebih dahulu',
            'pertemuan.min'=>'Minimal 1 karakter',
            'status.required'=>'Isi status terlebih dahulu',
            'tindakan.required'=>'Isi tindak lanjut terlebih dahulu',
            'tindakan.min'=>'Minimal 3 karakter']);

            Tindak::find($id)->update([
                'pertemuan'=>$request->get('pertemuan'),
                'tindakan'=>$request->get('tindakan'),
                'laporan_id'=>$request->get('laporan_id'),
                'konselor_id'=>$request->get('konselor_id')
            ]);

            Laporan::where('id', $request->laporan_id)->update([
                'status'=>$request->get('status'),
            ]);
    
            return redirect()->route('lap')->with('message', 'Tindak Lanjut Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
    }
}
