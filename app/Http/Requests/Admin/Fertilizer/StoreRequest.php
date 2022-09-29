<?php

namespace App\Http\Requests\Admin\Fertilizer;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name"=>'',
            "azot_norm"=>'',
            "phosphor_norm"=>'',
            "kali_norm"=>'',
            "culture_id"=>'',
            "rigeon"=>'',
            "price"=>'',
            "description"=>'',
            "purpose"=>'',
        ];
    }
}
