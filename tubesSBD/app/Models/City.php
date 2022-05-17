<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Location;
class City extends Model
{
    use HasFactory;
    public $timestamps=false;

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
}
