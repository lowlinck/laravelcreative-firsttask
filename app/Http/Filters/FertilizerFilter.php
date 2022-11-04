<?php

	namespace App\Http\Filters;

    use Illuminate\Database\Eloquent\Builder;

    class FertilizerFilter extends AbstractFilter
    {
        public const NAMESEARCH = 'nameSearch';
        public const DESCRIPTIONSEARCH = 'descriptionSearch';
        public const PURPOSESEARCH = 'purposeSearch';
        public const NITROBEFOR = 'nitroBefor';
        public const NITROAFTER = 'nitroAfter';
        public const PHOSFORBEFOR = 'phosforBefor';
        public const PHOSFORAFTER = 'phosforAfter';
        public const KALIBEFOR = 'kaliBefor';
        public const KALIAFTER = 'kaliAfter';
        public const PRICEBEFOR = 'priceBefor';
        public const PRICEAFTER = 'priceAfter';
        public const REGION = 'Region';
        public const CULTUREC = 'Culturec';

        protected function getCallbacks(): array
        {
            return [
                self:: NAMESEARCH => [$this,'nameSearch'],
                self:: DESCRIPTIONSEARCH => [$this,'descriptionSearch'],
                self:: PURPOSESEARCH => [$this,'purposeSearch'],
                self:: NITROBEFOR => [$this,'nitroBefor'],
                self:: NITROAFTER => [$this,'nitroAfter'],
                self:: PHOSFORBEFOR => [$this,'phosforBefor'],
                self:: PHOSFORAFTER => [$this,'phosforAfter'],
                self:: KALIBEFOR => [$this,'kaliBefor'],
                self:: KALIAFTER => [$this,'kaliAfter'],
                self:: PRICEBEFOR => [$this,'priceBefor'],
                self:: PRICEAFTER => [$this,'priceAfter'],
                self:: REGION => [$this,'Region'],
                self:: CULTUREC => [$this,'Culturec'],
            ];
        }

        public function nameSearch(Builder $builder, $value)
        {

            $builder->where('name', 'like', "%{$value}%");
        }

        public function descriptionSearch(Builder $builder, $value)
        {
            $builder->where('description', 'like', "%{$value}%");
        }

        public function purposeSearch(Builder $builder, $value)
        {
            $builder->where('purpose', 'like', "%{$value}%");
        }

        public function nitroBefor(Builder $builder, $value)

        {
            $builder->where('azot_norm','>', $value);
        }

        public function nitroAfter(Builder $builder, $value)
        {

            $builder->where('azot_norm','<', $value);
        }

        public function phosforBefor(Builder $builder, $value)

        {
            $builder->where('phosphor_norm','>', $value);
        }

        public function phosforAfter(Builder $builder, $value)
        {

            $builder->where('phosphor_norm','<', $value);
        }

        public function kaliBefor(Builder $builder, $value)

        {
            $builder->where('kali_norm','>', $value);
        }

        public function kaliAfter(Builder $builder, $value)
        {

            $builder->where('kali_norm','<', $value);
        }

        public function priceBefor(Builder $builder, $value)

        {
            $builder->where('price','>', $value);
        }

        public function priceAfter(Builder $builder, $value)
        {

            $builder->where('price','<', $value);
        }

        public function Region(Builder $builder, $value)
        {

            $builder->whereIn('rigeon', $value);
        }

        public function Culturec(Builder $builder, $value)
        {

            $builder->whereIn('id', $value);
        }
    }
