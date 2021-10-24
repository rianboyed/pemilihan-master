<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calon extends Model
{
    protected $fillable = [
        'nama_calon','umur','kelamin','role','status','pengalaman_id','visi','misi','photo',    
    ];

}
