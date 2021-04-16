<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamber extends Model
{
    protected $fillable=[
        'doctor_id','division_id','district_id','category_id','location','map_code','start_time','end_time','day','name'
    ];

    public function division(){
        return $this->belongsTo(Division::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function district(){
        return $this->belongsTo(District::class);
    }

     public function doctor(){
        return $this->belongsTo(Doctor::class);
    }

    public function assistant(){
        return $this->hasOne(Assistant::class);
    }


    public function appoinments(){
        return $this->hasMany(Apoinment::class)->orderBy('serial_number','ASC');
    }




}
