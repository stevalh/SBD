<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Location;

class history extends Model
{
    use HasFactory;

    public $timestamps=false;
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

   
   
}
