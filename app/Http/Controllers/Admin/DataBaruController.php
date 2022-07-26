<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\DataNew;

class DataBaruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $new = DataNew::All();
        return view('admin/dataBaru',compact('new'))->with('i');
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
        $data = array(
            'opini' => $request->opini,
            'tgl_waktu' => $request->tgl_waktu,
            'predict_categorie' => $request->predict_categorie
        
        );
        DataNew::create($data);
        return redirect('data-baru')->with('success','Data berhasil ditambah');
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
        
        $data = array(
            'opini' => $request->opini,
            'tgl_waktu' => $request->tgl_waktu,
            'predict_categorie' => $request->predict_categorie
        
        );
        DataNew::whereId($id)->update($data);
        return redirect('data-baru')->with('success','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('new_datas')->where('id', $id)->delete();
        return redirect('data-baru')->with([
            'title' => 'Data Baru',
            'success' => 'Data Berhasil Dihapus'
        ]);
    }
}
