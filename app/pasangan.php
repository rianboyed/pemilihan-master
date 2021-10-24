<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasangan extends Model
{
    protected $fillable = [
        'ketua_id','wakil_id','ketua_nama','wakil_nama','status','point','photo'
    ];

    public function ketua(){
        return $this->belongsTo('App\calon', 'ketua_id');
    }

    public function wakil(){
        return $this->belongsTo('App\calon', 'wakil_id');
    }
}
