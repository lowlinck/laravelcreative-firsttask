<?php

namespace App\Http\Controllers\Admin\Fertilizers;

use App\Http\Controllers\Controller;
use App\Models\Fertilizer;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $fertilizers = Fertilizer::paginate(10);


        return view('admin.fertilizers.index', compact('fertilizers'));
    }
}
