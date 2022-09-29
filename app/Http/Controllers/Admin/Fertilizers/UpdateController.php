<?php

namespace App\Http\Controllers\Admin\Fertilizers;

use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\Fertilizer\UpdateRequest;

use App\Models\Fertilizer;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Fertilizer $fertilizer)
    {

        $data = $request->validated();
        $fertilizer->update($data);
        return view('admin.fertilizers.show', compact('fertilizer'));
    }
}
