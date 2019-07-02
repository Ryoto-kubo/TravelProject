<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TravelPlansRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == 'travel/plan/create')
        {
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'introduction' => 'required|max500',
            'price' => 'required|numeric',
            'area' => 'required',
            'place' => 'required',
            'travel_img01' => 'required|file|image',
            'travel_img02' => 'nullable|file|image',
            'travel_img03' => 'nullable|file|image',
            'travel_img04' => 'nullable|file|image',
            'travel_img05' => 'nullable|file|image',
        ];
    }
}
