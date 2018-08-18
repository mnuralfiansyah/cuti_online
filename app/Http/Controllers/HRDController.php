<?php

namespace App\Http\Controllers;

use Auth;
use DateTime;
use App\Models\User;
use App\Models\Jabatan;
use App\Models\JenisCuti;
use App\Models\LevelUser;
use App\Models\Pengajuan;
use App\Models\StatusKaryawan;
use Illuminate\Http\Request;

class HRDController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth:hrd');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Npermohonan = Pengajuan::where(['status'=>1])->count();
      $Ntolak = Pengajuan::where(['status'=>2])->count();
      $Nterima = Pengajuan::where(['status'=>3])->count();
      $Ntotal = Pengajuan::all()->count();

      return view('hrd.index',['data_pengajuan'=>Pengajuan::all(),
                               'auth'=>Auth::User(),
                               'jenis_cuti'=>JenisCuti::all(),
                               'Npermohonan'=>$Npermohonan,
                               'Nterima'=>$Nterima,
                               'Ntotal'=>$Ntotal,
                               'Ntolak'=>$Ntolak,
                            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/hrd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect('/hrd');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect('/hrd');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return redirect('/hrd');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $r, $id)
    {
        Pengajuan::where('id',$id)->update(['status'=>$r->keputusan,'penyetuju_id'=>Auth::User()->id]);
        return redirect('/hrd');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect('/hrd');
    }
}
