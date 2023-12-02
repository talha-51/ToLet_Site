<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoomRequest extends FormRequest
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
    public function rules()
    {
        return [
            'location' => 'required|max:30',
            'rent' => 'required|max:10',
            'dimention' => 'required|max:10',
            'washroom' => 'required|max:2',
            'bed' => 'required|max:2',
            'ac' => 'required|max:20',
            'electricity' => 'required|max:20',
            'phone' => 'required|min:11|max:11',
            'email' => 'required|max:30',
            'image_1' => 'required|max:2048|mimes:png,jpg',
            'image_2' => 'required|max:2048|mimes:png,jpg',
            'image_3' => 'required|max:2048|mimes:png,jpg',
        ];
    }
}
