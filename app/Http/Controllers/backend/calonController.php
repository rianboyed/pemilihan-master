<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\calon;
use App\Urut;
use Carbon\carbon;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class calonController extends Controller
{
    
    public function index()
    {
        if (auth::check()) {
            if (auth::user()->role == "Admin") {
                $calon = calon::get();
                $cek = calon::first();
                $urut = Urut::get();
                return view('backend.calon.index', compact('calon','cek','urut'));
            }
        }
    }
    
    public function create()
    {
        if (auth::check()) {
            if (auth::user()->role == "Admin") {
                $urut = Urut::get();
                return view('backend.calon.create',compact('urut'));
            }
        }
    }

    
    public function store(Request $request)
    {
        $file = $request->file('photo');
        if($file){
            $nama_file = $file->getClientOriginalName();
            $file->move('produk_images',$nama_file);
            $photo ='produk_images/'.$nama_file;
        }
        else{
            $photo = null;
        }
        if (auth::check()) {
            if (auth::user()->role == "Admin") {
                foreach ($request->add_calon as $item) {

                  

                    $calon = new calon;
                    $calon->urut_id = $request ->urut_id;
                    $calon->nama_calon = $item['nama_calon'];
                    $calon->visi = $request->visi;
                    $calon->misi = $request->misi;
                    $calon->umur = $item['umur'];
                    $calon->kelamin = $item['kelamin'];
                    $calon->status = 'Belum Aktif';
                    $calon->role = $item['role'];
                    $calon->photo =$photo;
                    $calon->save();
                    Alert::success('Suksess', 'Berhasil Menambahkan Calon');

                }
                return redirect()->route('calon.index');
            }
        }
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
        $calon = Calon::find($id);
         $urut = Urut::get();

        return view('backend.calon.edit',compact('calon','urut'));
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
       
      $calon = Calon::find($id);
        $calon->update($request->all());
         Alert::success('Suksess Update', 'Berhasil Diupdate');
        return redirect('/calon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
         Calon::where('id',$id)->delete();
         Alert::alert('Calon Dihapus', 'Calon Berhasil Dihapus', '!!!');
        return redirect('/calon');
    }
}
