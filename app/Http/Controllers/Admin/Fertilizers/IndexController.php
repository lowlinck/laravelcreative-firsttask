<?php

namespace App\Http\Controllers\Admin\Fertilizers;

use App\Http\Controllers\Controller;
use App\Http\Filters\FertilizerFilter;
use App\Http\Filters\PostFilter;
use App\Http\Requests\Admin\Fertilizer\FilterRequest;
use App\Models\Fertilizer;
use Illuminate\Http\Request;

class IndexController extends Controller
{

       // $fertilizers = Fertilizer::paginate(10);

        public function __invoke(FilterRequest $request, Fertilizer $fertilizer)
    {
        $data = $request->validated();
        //  dd($data);
        $filter = app()->make(FertilizerFilter::class, ['queryParams' => array_filter($data)]);
        $fertilizers = Fertilizer::filter($filter)->paginate(10);

        return view('admin.fertilizers.index', compact('fertilizers'));
    }


}
