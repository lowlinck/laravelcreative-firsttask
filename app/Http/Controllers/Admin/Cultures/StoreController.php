<?php

namespace App\Http\Controllers\Admin\Cultures;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Culture\StoreRequest;
use App\Models\Culture;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Culture::firstOrCreate($data);
        return redirect()->route('admin.cultures.index');
    }
}
