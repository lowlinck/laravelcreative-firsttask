<?php

namespace App\Http\Controllers\Admin\Clients;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request, Client $client)
    {
//        $clients = Client::all();
        //dd($request);
        $clients = $client->getUsersBySearch($request)->get();
        return view('admin.clients.index', compact('clients'));
    }
}
