<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subservicios extends Model
{
    use HasFactory;
    public function subservices(){
        return $this->belongsTo(Servicios::class);
    }
}
