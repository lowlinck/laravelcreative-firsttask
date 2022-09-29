<?php

namespace App\Http\Controllers\Admin\Fertilizers;

use App\Http\Controllers\Controller;
use App\Models\Fertilizer;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Fertilizer $fertilizer)
    {


        return view('admin.fertilizers.edit', compact('fertilizer'));
    }
}
