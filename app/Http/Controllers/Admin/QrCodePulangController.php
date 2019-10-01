<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\qr_code_pulang;
use DataTables;

class QrCodePulangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qr_out = qr_code_pulang::All();
        return view('admin.qr_pulang.index', compact('qr_out'));
    }

     public function QrCodeOutDatatables()
    {
        $qr_out = qr_code_pulang::all();
        return Datatables::of($qr_out)->addColumn('action', 'admin.qr_pulang.action')
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
        return view('admin.qr_pulang.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qr_out = new qr_code_pulang;
        $qr_out->kode_enkripsi = Hash::make($request->kode_enkripsi);
        $qr_out->save();
        return redirect()->route('qr_out');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $qr_out = qr_code_pulang::find($id);
        return view('admin.qr_pulang.lihat', compact('qr_out'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $qr_out = qr_code_pulang::find($id);
        return view('admin.qr_pulang.ubah', compact('qr_out'));
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
        $qr_out = qr_code_pulang::find($id);
        $qr_out->kode_enkripsi = $request->kode_enkripsi;
        $qr_out->save();
        return redirect()->route('qr_out');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $qr_out = qr_code_pulang::find($id);
        $qr_out->delete();
        return redirect()->route('qr_out');
    }
}
