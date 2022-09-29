<?php

namespace App\Http\Controllers\Admin\Cultures;

use App\Http\Controllers\Controller;
use App\Models\Culture;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cultures = Culture::all();

        return view('admin.cultures.index', compact('cultures'));
    }
}
