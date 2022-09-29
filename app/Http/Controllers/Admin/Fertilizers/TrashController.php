<?php

namespace App\Http\Controllers\Admin\Fertilizers;

use App\Http\Controllers\Controller;
use App\Models\Fertilizer;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function __invoke()
    {
        $trashs = Fertilizer::onlyTrashed()->get();

        return view('admin.fertilizers.trash', compact('trashs'));
    }
}
