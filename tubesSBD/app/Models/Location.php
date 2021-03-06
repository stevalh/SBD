<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\User;

class Location extends Model
{
    use HasFactory;
    public $timestamps=false;

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'histories','locations_id','users_id')->withTimestamps()->withPivot(['check_out']);
    }
    
}
