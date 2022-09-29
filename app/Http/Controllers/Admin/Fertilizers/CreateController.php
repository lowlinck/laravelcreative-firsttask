<?php

namespace App\Http\Controllers\Admin\Fertilizers;

use App\Http\Controllers\Controller;
use App\Models\Fertilizer;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {

        return view('admin.fertilizers.create');
    }
}
