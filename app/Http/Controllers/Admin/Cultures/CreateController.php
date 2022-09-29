<?php

namespace App\Http\Controllers\Admin\Cultures;

use App\Http\Controllers\Controller;
use App\Models\Culture;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {

        return view('admin.cultures.create');
    }
}
