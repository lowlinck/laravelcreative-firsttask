<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fertilizer extends Model
{
    use HasFactory;
    use softdeletes;

    protected $guarded = false;

    public function culture(){
        return $this->belongsTo(Culture::class);
    }
}
