<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->path() == 'profile/create')
        {
            return true;
        } else {
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
            'name'          => 'required',
            'profile'       => 'nullable|max:160',
            'favorite_spot' => 'nullable|max:100',
            'user_img'      => 'nullable|file|image|mimes:jpeg,png,jpg,gif', 
        ];
    }
}
