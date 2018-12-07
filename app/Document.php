<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{

    protected $fillable =['serialNumber','name','location','owner'];
    //
    // public function scopeSearch($query, $s){
    //     return $query->where('serialNumber','like','%'.$s. '%')
    //      ->orWhere('name','like','%'.$s. '%');
    // }
}
