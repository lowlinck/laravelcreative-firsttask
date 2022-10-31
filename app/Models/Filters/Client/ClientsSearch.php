<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 01.12.2019
 * Time: 22:39
 */

namespace App\Models\Filters\Client;


use App\Services\Filters\Filterable;
use Illuminate\Database\Eloquent\Builder;

class ClientsSearch implements Filterable
{

    public static function apply(Builder $builder, $value)
    {
        return $builder->where('name', $value);
    }
}
