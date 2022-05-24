<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Location;
use App\Models\Test;

use App\Models\Certificate;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

   

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname',
        'email',
        
    ];

    protected $guarded =['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
      * @var array<int, string>
     */
    protected $hidden = [
        'password',
        
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function locations()
    {
        return $this->belongsToMany(Location::class,'histories','users_id','locations_id')->withTimestamps()->withPivot(['check_out']);
    }



   public function certificates()
   {
       return $this->hasMany(Certificate::class);
   }


   
   
   public function test()
   {
       
       return $this->hasmany(Test::class,'patient_id')->orderBy('created_at','DESC');
   }


}
