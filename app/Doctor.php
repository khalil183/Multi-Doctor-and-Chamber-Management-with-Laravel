<?php
namespace App;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Doctor extends Authenticatable
{
    use Notifiable;




    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable=[
        'name','email','phone','password','address','category_id','institute','education','experience','bio','image'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function district(){
        return $this->belongsTo(District::class);
    }
    public function division(){
        return $this->belongsTo(Division::class);
    }

    public function chamber(){
        return $this->hasOne(Chamber::class);
    }

}
