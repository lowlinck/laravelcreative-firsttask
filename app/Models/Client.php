<?php

namespace App\Models;

use App\Models\Filters\Client\ClientSeach;
use App\Models\Filters\Fertilizer\FertilizerSeach;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class Client extends Model
{
    use HasFactory;
    use softdeletes;

    protected $guarded = false;
    public function getUsersBySearch(Request $request) : Builder
    {
        $builder = (new ClientSeach())->apply($request);
        return $builder;
    }
}
