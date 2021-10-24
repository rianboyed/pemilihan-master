<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Urut;
use Carbon\carbon;
use Auth;
use RealRashid\SweetAlert\Facades\Alert;

class Nomor_urutController extends Controller
{
    public function index()
    {
    	 if (auth::check()) {
            if (auth::user()->role == "Admin") {

            	$isi = Urut::get();
    
    			return view('backend.nomorurut.index', compact('isi'));
            }
           }
    }

     public function create() 
    {
        if (auth::check()) {
            if (auth::user()->role == "Admin") {
                return view('backend.nomorurut.create');
            }
        }
    }

    public function store(Request $request)
    {
        
                    $urut = new Urut;
                    $urut->isi = $request->isi;
                   
                    $urut->save();
                    Alert::alert('Nomor Urut Dibuat.!!!', 'Nomor Urut Berhasil Dibuat', '!!!');

                return redirect()->route('urutan.index');
         
    }

    //  public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
        
    //      $urut = Urut::get();
    //     return dd($urut);
    //     // return view('backend.nomorurut.edit',compact('urut'));
    // }

    // *
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    // public function update(Request $request, $id)
    // {
       
    //   $urut = Urut::find($id);
    //     $urut->update($request->all());
    //     return redirect('/urutan')->with('success', 'Data calon berhasil Update!');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    public function delete($id)
{
    $item = Urut::find($id);
    // return dd($item);
    $item->delete();
     Alert::alert('Nomor Urut Dihapus.!!!', 'Nomor Urut Berhasil Dihapus', '!!!');

    return redirect('/urutan');
}


}



