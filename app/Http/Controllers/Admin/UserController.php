<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use App\User;
use DataTables;
use Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = User::All();
        return view('admin.guru.index', compact('guru'));
    }

    public function GuruDataTables()
    {
        $guru = User::All();
        return Datatables::of($guru)->addColumn('action', 'admin.guru.action')
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
        return view('admin.guru.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $guru = new User;
     $guru->name = $request->name;
     $guru->email = $request->email;
     $guru->password = Hash::make($request->password);

     $foto = $request->file('foto');
     $filename = time() .'.'. $foto->getClientOriginalExtension();
     Image::make($foto)->resize(400, 400)->save(public_path('image/guru/' .$filename));
     $guru->foto = $filename;
     $guru->nik = $request->nik;
     $guru->tmpat_lahir = $request->tmpat_lahir;
     $guru->tgl_lahir = $request->tgl_lahir;
     $guru->alamat = $request->alamat;
     $guru->rt = $request->rt;
     $guru->rw = $request->rw;
     $guru->desa = $request->desa;
     $guru->kec = $request->kec;
     $guru->kab = $request->kab;
     $guru->jenis_kelamin = $request->jenis_kelamin;
     $guru->jabatan = $request->jabatan;
     $guru->save();
     return redirect()->route('guru');
 }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $guru = User::find($id);
       return view('admin.guru.lihat', compact('guru'));
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = User::find($id);
        return view('admin.guru.ubah', compact('guru'));
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
        $guru = User::find($id);
        $guru->name = $request->name;
        $guru->email = $request->email;
        $guru->password = Hash::make($request->password);

        $foto = $request->file('foto');
        $filename = time() .'.'. $foto->getClientOriginalExtension();
        Image::make($foto)->resize(400, 400)->save(public_path('image/guru/' .$filename));
        $guru->foto = $filename;
        $guru->nik = $request->nik;
        $guru->tmpat_lahir = $request->tmpat_lahir;
        $guru->tgl_lahir = $request->tgl_lahir;
        $guru->alamat = $request->alamat;
        $guru->rt = $request->rt;
        $guru->rw = $request->rw;
        $guru->desa = $request->desa;
        $guru->kec = $request->kec;
        $guru->kab = $request->kab;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->jabatan = $request->jabatan;
        $guru->save();
        return redirect()->route('guru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = User::find($id);
        $guru->delete();
        return redirect()->route('guru');
    }
}
