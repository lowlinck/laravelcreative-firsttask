<?php

	namespace App\Models\Filters\Client;

	use App\Services\Filters\Filterable;
    use Illuminate\Database\Eloquent\Builder;

    class Region implements Filterable
	{
        public static function apply(Builder $builder, $value)
        {
            return $builder->whereIn('id',  $value);
        }
	}
