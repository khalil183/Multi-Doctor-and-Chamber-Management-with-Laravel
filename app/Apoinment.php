<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apoinment extends Model
{
    protected $fillable=[
        'chamber_id','serial_number','date','name','phone','address','status'
    ];


    public function chamber(){
        return $this->belongsTo(Chamber::class);
    }
}
