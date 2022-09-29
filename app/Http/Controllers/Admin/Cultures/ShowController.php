<?php

namespace App\Http\Controllers\Admin\Cultures;

use App\Http\Controllers\Controller;
use App\Models\Culture;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Culture $culture)
    {


        return view('admin.cultures.show', compact('culture'));
    }
}
