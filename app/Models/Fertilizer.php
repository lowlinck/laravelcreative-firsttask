<?php

namespace App\Models;

use App\Models\Filters\Fertilizer\FertilizerSeach;
use App\Models\Filters\User\UserSeach;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class Fertilizer extends Model
{
    use HasFactory;
    use softdeletes;

    protected $guarded = false;

    public function culture(){
        return $this->belongsTo(Culture::class);
    }

    public function getUsersBySearch(Request $request) : Builder
    {
        $builder = (new FertilizerSeach())->apply($request);
        return $builder;
    }
}
