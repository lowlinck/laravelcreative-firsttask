<?php
/**
 * Created by PhpStorm.
 * User: Viktor
 * Date: 01.12.2019
 * Time: 22:36
 */

namespace App\Models\Filters\Client;


use App\Models\Client;
use App\Services\Filters\BaseSeach;
use App\Services\Filters\Searchable;
use App\Models\Fertilizer;

class ClientSeach implements Searchable
{

    const MODEL = Client::class;

    use BaseSeach;

}
