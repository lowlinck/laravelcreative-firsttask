<?php

namespace App\Http\Controllers\Admin\Clients;

use App\Http\Controllers\Controller;


use App\Models\Client;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke( Client $client)
    {
        $client->delete();
        return redirect()->route('admin.clients.index');
    }
}
