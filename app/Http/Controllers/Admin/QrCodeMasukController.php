<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\qr_code_masuk;
use DataTables;

class QrCodeMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qr_in = qr_code_masuk::All();
        return view('admin.qr_masuk.index', compact('qr_in'));
    }
    public function QrCodeDatatables()
    {
        $qr_in = qr_code_masuk::all();
        return Datatables::of($qr_in)->addColumn('action', 'admin.qr_masuk.action')
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
        return view('admin.qr_masuk.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $qr_in = new qr_code_masuk;
        $qr_in->kode_enkripsi = Hash::make($request->kode_enkripsi);
        $qr_in->save();
        return redirect()->route('qr');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $qr_in = qr_code_masuk::find($id);
        return view('admin.qr_masuk.lihat', compact('qr_in'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $qr_in = qr_code_masuk::find($id);
        return view('admin.qr_masuk.ubah', compact('qr_in'));
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
        $qr_in = qr_code_masuk::find($id);
        $qr_in->kode_enkripsi = $request->kode_enkripsi;
        $qr_in->save();
        return redirect()->route('qr');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $qr_in = qr_code_masuk::find($id);
        $qr_in->delete();
        return redirect()->route('qr');
    }
}
