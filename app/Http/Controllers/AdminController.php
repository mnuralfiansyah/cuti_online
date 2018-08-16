<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Jabatan;
use App\Models\JenisCuti;
use App\Models\LevelUser;
use App\Models\Pengajuan;
use App\Models\StatusKaryawan;
use Illuminate\Http\Request;

class AdminController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth:admin');
    }

// public function __construct(Kriteria $kriteria)
// {
//   $this->kriteria = $kriteria;
// }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // untuk menampilkan data
    public function index()
    {
        return view('admin.index',['data_user'=>User::all(),'auth'=>Auth::User()]);
    }

    public function data_karyawan()
    {
        return view('admin.data_karyawan',['data_user'=>User::all(),'auth'=>Auth::User()]);
    }

    public function data_pengajuan()
    {
        return view('admin.data_pengajuan',['data_pengajuan'=>Pengajuan::all(),'auth'=>Auth::User()]);
    }

    public function data_status_karyawan()
    {
        return view('admin.data_status_karyawan',['data_status_karyawan'=>StatusKaryawan::all(),'auth'=>Auth::User()]);
    }

    public function data_jabatan()
    {
        return view('admin.data_jabatan',['data_jabatan'=>Jabatan::all(),'auth'=>Auth::User()]);
    }


    //untuk memasukkan data
    public function tambah_data_karyawan(Request $request)
    {
        return view('admin.karyawan',['data_user'=>User::all(),'auth'=>Auth::User()]);
    }

    public function tambah_data_pengajuan(Request $request)
    {
        return view('admin.karyawan',['data_user'=>User::all(),'auth'=>Auth::User()]);
    }

    public function tambah_data_status_karyawan(Request $request)
    {
        return view('admin.karyawan',['data_user'=>User::all(),'auth'=>Auth::User()]);
    }

    public function tambah_data_jabatan(Request $request)
    {
        return view('admin.karyawan',['data_user'=>User::all(),'auth'=>Auth::User()]);
    }

    //untuk mengupdate data
    public function update_data_karyawan(Request $request, $id)
    {
        return view('admin.karyawan',['data_user'=>User::all(),'auth'=>Auth::User()]);
    }

    public function update_data_pengajuan(Request $request, $id)
    {
        return view('admin.karyawan',['data_user'=>User::all(),'auth'=>Auth::User()]);
    }

    public function update_data_status_karyawan(Request $request, $id)
    {
        return view('admin.karyawan',['data_user'=>User::all(),'auth'=>Auth::User()]);
    }

    public function update_data_jabatan(Request $request, $id)
    {
        return view('admin.karyawan',['data_user'=>User::all(),'auth'=>Auth::User()]);
    }

    //untuk menhapus data
    public function delete_data_karyawan($id)
    {
        return view('admin.karyawan',['data_user'=>User::all(),'auth'=>Auth::User()]);
    }

    public function delete_data_pengajuan($id)
    {
        return view('admin.karyawan',['data_user'=>User::all(),'auth'=>Auth::User()]);
    }

    public function delete_data_status_karyawan($id)
    {
        return view('admin.karyawan',['data_user'=>User::all(),'auth'=>Auth::User()]);
    }

    public function delete_data_jabatan($id)
    {
        return view('admin.karyawan',['data_user'=>User::all(),'auth'=>Auth::User()]);
    }













    public function data_cuti()
    {
        return view('admin.karyawan',['data_user'=>User::all(),'auth'=>Auth::User()]);
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
