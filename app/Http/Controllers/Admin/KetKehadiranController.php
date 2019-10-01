<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ketkehadiran;
use DataTables;

class KetKehadiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ketKeh = Ketkehadiran::All();
        return view('admin.ket_kehadiran.index', compact('ketKeh'));
    }

    public function KetKehadiranDatatables() 
    {
       $ketKeh = Ketkehadiran::All();
       return Datatables::of($ketKeh)->addColumn('action', 'admin.ket_kehadiran.action')
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
        $ket = Ketkehadiran::All();
        return view('admin.ket_kehadiran.add', compact('ket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ketKeh = new Ketkehadiran;
        $ketKeh->kehadiran = $request->kehadiran;
        $ketKeh->ket = $request->ket;
        $ketKeh->save();
        return redirect()->route('ketKeh');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
