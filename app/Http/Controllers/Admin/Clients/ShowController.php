<?php

namespace App\Http\Controllers\Admin\Clients;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Client $client)
    {


        return view('admin.clients.show', compact('client'));
    }
}
