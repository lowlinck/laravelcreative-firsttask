<?php

namespace App\Models;

use App\Models\Filters\Clients\ClientSeach;
use App\Models\Filters\Clients\ClientSearch;
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
    use Filterable;

    protected $guarded = false;

}

