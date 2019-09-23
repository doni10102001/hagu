<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Absensimasuk;
use DataTables;

class AbsensiMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensi_masuk = Absensimasuk::All();
        return view('admin.absensi_masuk.index', compact('absensi_masuk'));
    }

    public function AbsensiMasukDatatables()
    {
        $absensi_masuk = Absensimasuk::all();
        return Datatables::of($absensi_masuk)->addColumn('action', 'admin.absensi_masuk.action')
        ->addIndexColumn()
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $absensi_masuk = Absensimasuk::find($id);
        return view('admin.absensi_masuk.ubah', compact('absensi_masuk'));
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
        $absensi_masuk = Absensimasuk::find($id);
        $absensi_masuk->enkripsi = $request->enkripsi;
        $absensi_masuk->waktu_scan = $request->waktu_scan;
        $absensi_masuk->guru_id = $request->guru_id;
        $absensi_masuk->kehadiran = $request->kehadiran;
        $absensi_masuk->save();
        return redirect()->route('absensi_masuk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $absensi_masuk = Absensimasuk::find($id);
        $absensi_masuk->delete();
        return redirect()->route('absensi_masuk');
    }
}
