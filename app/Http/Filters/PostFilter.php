<?php

	namespace App\Http\Filters;

    use Illuminate\Database\Eloquent\Builder;

    class PostFilter extends AbstractFilter
    {
        public const NAME = 'name';
        public const DATASTART = 'datastart';
        public const DATAEND = 'dataend';
        public const PRICEBEFOR = 'Pricebefor';
        public const PRICEAFTER = 'Priceafter';
        public const REGION = 'region';


        protected function getCallbacks(): array
        {
            return [
                self::NAME => [$this, 'name'],
                self::DATASTART => [$this, 'datastart'],
                self::DATAEND => [$this, 'dataend'],
                self::PRICEBEFOR => [$this, 'Pricebefor'],
                self::PRICEAFTER => [$this, 'Priceafter'],
                self::REGION => [$this, 'region'],
            ];
        }

        public function name(Builder $builder, $value)
        {

            $builder->where('name', 'like', "%{$value}%");
        }

        public function data(Builder $builder, $value)
        {
            $builder->where('data', 'like', "%{$value}%");
        }

        public function Pricebefor(Builder $builder, $value)

        {
            $builder->where('delivery_cost','>', $value);
        }
        public function Priceafter(Builder $builder, $value)
        {

            $builder->where('delivery_cost','<', $value);
        }

        public function datastart(Builder $builder, $value)

        {
            $builder->where('data','>', $value);
        }
        public function dataend(Builder $builder, $value)
        {

            $builder->where('data','<', $value);
        }

        public function region(Builder $builder, $value)
        {

            $builder->whereIn('id', $value);
        }
    }
