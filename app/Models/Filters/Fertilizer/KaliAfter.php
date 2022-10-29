<?php

	namespace App\Models\Filters\Fertilizer;

	use App\Services\Filters\Filterable;
    use Illuminate\Database\Eloquent\Builder;

    class KaliAfter implements Filterable
	{
        public static function apply(Builder $builder, $value)
        {
            return $builder->where('kali_norm', '<', $value);
        }
	}
