<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\voting;
use App\pasangan;

class Grafik_controller extends Controller
{
    public function index()
    {
    	$title = 'Hasil voting';

    	$vot =[];

    	$pasangan = pasangan::get();
    	foreach ($pasangan as $key => $kd) {
    		$id_pasangan = $kd->id;
    		$calon_id =$kd->id;
    		$total = voting::where('calon_id',$id_pasangan)->count();

    		$a['name'] = 'No Urut' . $calon_id;
    		$a['y'] = $total;
    		array_push($vot, $a);
    	}

    	return view('grafik.index', compact('title','vot'));
    }
}
