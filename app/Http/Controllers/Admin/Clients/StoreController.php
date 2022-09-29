<?php

namespace App\Http\Controllers\Admin\Clients;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Client\StoreRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Client::firstOrCreate($data);
        return redirect()->route('admin.clients.index');
    }
}
