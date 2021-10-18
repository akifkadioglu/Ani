<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RemembranceData extends Model
{
    use HasFactory;
    public function remembrance()
    {
        return $this->belongsTo(Remembrance::class);
    }
}
