<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Admin;


class Test extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class,'patient_id');
    }
    public function admin(){
        return $this->belongsTo(Admin::class);
    }
}
