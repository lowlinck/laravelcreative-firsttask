<?php

namespace App\Http\Controllers\Admin\Fertilizers;

use App\Http\Controllers\Controller;
use App\Models\Fertilizer;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request, Fertilizer $fertilizer)
    {
       // $fertilizers = Fertilizer::paginate(10);


        $fertilizers = $fertilizer->getUsersBySearch($request)->get();



        return view('admin.fertilizers.index', compact('fertilizers'));
    }
}
