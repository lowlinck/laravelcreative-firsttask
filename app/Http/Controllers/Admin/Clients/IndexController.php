<?php

namespace App\Http\Controllers\Admin\Clients;

use App\Http\Controllers\Controller;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Admin\Client\FilterRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request, Client $client)
    {
        $data = $request->validated();
      //  dd($data);
        $filter = app()->make(PostFilter::class, ['queryParams' => array_filter($data)]);
        $clients = Client::filter($filter)->paginate(10);

        return view('admin.clients.index', compact('clients'));
    }
}

