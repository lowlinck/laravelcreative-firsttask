<?php

namespace App\Http\Controllers\Admin\Fertilizers;

use App\Http\Controllers\Controller;


use App\Models\Fertilizer;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke( Fertilizer $fertilizer)
    {
        $fertilizer->delete();
        return redirect()->route('admin.fertilizers.index');
    }
}
