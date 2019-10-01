<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Absensipulang;
use App\Ketkehadiran;
use DataTables;

class AbsensiPulangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $absensi_pulang = Absensipulang::All();
        return view('admin.absensi_pulang.index', compact('absensi_pulang'));
    }

    public function AbsensiPulangDatatables()
    {
        $absensi_pulang = Absensipulang::All();
        return Datatables::of($absensi_pulang)->addColumn('action', 'admin.absensi_pulang.action')
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
        $absensi_pulangket = Ketkehadiran::All();
        return view('admin.absensi_pulang.add', compact('absensi_pulangket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $absensi_pulang = new Absensipulang;
        $absensi_pulang->enkripsi = $request->enkripsi;
        $absensi_pulang->waktu_scan = $request->waktu_scan;
        $absensi_pulang->guru_id = $request->guru_id;
        $absensi_pulang->kehadiran = $request->kehadiran;
        $absensi_pulang->save();
        return redirect()->route('absensi_pulang');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $absensi_pulang = Absensipulang::find($id);
        return view('admin.absensi_pulang.lihat', compact('absensi_pulang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $absensi_pulang = Absensipulang::find($id);
        return view('admin.absensi_pulang.ubah', compact('absensi_pulang'));
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
        $absensi_pulang = Absensipulang::find($id);
        $absensi_pulang->enkripsi = $request->enkripsi;
        $absensi_pulang->waktu_scan = $request->waktu_scan;
        $absensi_pulang->guru_id = $request->guru_id;
        $absensi_pulang->kehadiran = $request->kehadiran;
        $absensi_pulang->save();
        return redirect()->route('absensi_pulang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $absensi_pulang = Absensipulang::find($id);
        $absensi_pulang->delete();
        return redirect()->route('absensi_pulang');
    }
}
