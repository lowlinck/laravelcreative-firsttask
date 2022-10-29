<?php

	namespace App\Models\Filters\Fertilizer;

	use App\Services\Filters\Filterable;
    use Illuminate\Database\Eloquent\Builder;

    class PriceAfter implements Filterable
	{
        public static function apply(Builder $builder, $value)
        {
            return $builder->where('price', '<', $value);
        }
	}
