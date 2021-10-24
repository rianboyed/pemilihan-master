<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\pasangan;
use App\calon;

class Calon_controller extends Controller
{
    public function detail($id)
    {
    	$dt = pasangan::with('ketua','wakil')->where('id', $id)->get();
    	// return dd($dt);

    	return view('user.detail',compact('dt'));
    }
}
