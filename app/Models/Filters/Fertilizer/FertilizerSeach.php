<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 01.12.2019
 * Time: 22:36
 */

namespace App\Models\Filters\Fertilizer;


use App\Services\Filters\BaseSeach;
use App\Services\Filters\Searchable;
use App\Models\Fertilizer;

class FertilizerSeach implements Searchable
{

    const MODEL = Fertilizer::class;

    use BaseSeach;

}
