<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StorePropertyRequest extends FormRequest
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
     * @return array
     */
    public function rules(Request $request)
    {
        return [


            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'type' => 'required|string|max:255',
            'feature' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'period_of_availability' => 'required|numeric',
            'urgency' => 'required|string|max:255',
            'description' => 'required|string|max:255',





        ];
    }
}
