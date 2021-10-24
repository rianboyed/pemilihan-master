<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\pasangan;
use App\calon;

use auth;
use RealRashid\SweetAlert\Facades\Alert;


class pasanganController extends Controller
{

    public function index()
    {
        if (auth::check()) {
            if (auth::user()->role == "Admin") {

                $pasangan = pasangan::with('ketua', 'wakil')->get();
                $calon =calon::get();
                // return dd($pasangan);
                return view('backend.pasangan.index', compact('pasangan','calon'));
            }
        } else {
            return redirect('/home');
        }
    }

    public function create()
    {
        if (auth::check()) {
            if (auth::user()->role == "Admin") {
                $ketua = calon::where('role','Ketua')->where('status','Belum Aktif')->get();
                $wakil = calon::where('role','Wakil')->where('status','Belum Aktif')->get();
                return view('backend.pasangan.create', compact('ketua','wakil'));
            }
        } else {
            return redirect('/home');
        }
    }

    public function store(Request $request)
    {
        // return dd($request->all());
        //  $file = $request->file('photo');
        // if($file){
        //     $nama_file = $file->getClientOriginalName();
        //     $file->move('pasangan_images',$nama_file);
        //     $photo ='pasangan_images/'.$nama_file;
        // }
        

        if (auth::check()) {
            if (auth::user()->role == "Admin") {
                $pasangan = new pasangan();
                $pasangan->ketua_id = $request->ketua_id;
                $pasangan->ketua_nama = $request->ketua_nama;
                $pasangan->wakil_id = $request->wakil_id;
                $pasangan->wakil_nama = $request->wakil_nama;
                $pasangan->status = 'Aktif';
                // $pasangan->photo= $photo;
                $pasangan->save();

                if ($pasangan->save()) {
                    $calon = calon::findOrFail($pasangan->ketua_id);
                    $calon->status = 'Aktif';
                    $calon->save();
                } if ($calon->save()) {
                    $calons = calon::findOrFail($pasangan->wakil_id);
                    $calons->status = 'Aktif';
                    $calons->Save();
                Alert::alert('Pasangan Dibuat.!!!', 'Pasangan Berhasil Dibuat', '!!!');

                }
                return redirect()->route('pasangan.index');
            }
        } else {
            return redirect('/home');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function select_ketua(Request $request)
    {
        if (auth::check()) {
            if (auth::user()->role == "Admin") {
                $ketua = calon::select('id','nama_calon','role')
                ->where('id', $request->id)
                ->where('role','Ketua')
                ->get();

                $select = '';
                $select .= '
                            <select name="ketua_nama" hidden>';
                            foreach ($ketua as $item) {
                $select .= '<option value="'.$item->nama_calon.'">'.$item->nama_calon.'</option>';
                            }'
                            ';
                return $select;
            }
        }  else {
            return redirect('/home');
        }
    }

    public function select_wakil(Request $request)
    {
        if (auth::check()) {
            if (auth::user()->role == "Admin") {
                $wakil = calon::select('id','nama_calon')
                ->where('id', $request->id)
                ->where('role','Wakil')
                ->get();

                $select = '';
                $select .= '
                            <select name="wakil_nama" hidden>';
                            foreach ($wakil as $item) {
                $select .= '<option value="'.$item->nama_calon.'">'.$item->nama_calon.'</option>';
                            }'
                            ';
                return $select;
            }
        }  else {
            return redirect('/home');
        }
    }

    public function get_calon_by_id($id)
    {
        if (auth::check()) {
            if (auth::user()->role == "Admin") {
                $pasangan = pasangan::where('id', $id)->first();
                return $pasangan;
            }
        }  else {
            return redirect('/home');
        }
    }

    
}