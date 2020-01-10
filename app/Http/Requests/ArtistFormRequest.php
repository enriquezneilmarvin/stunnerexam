<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistFormRequest extends FormRequest
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
            'artist_name' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'artist_name.required' => 'The :attribute field is required'
        ];
    }

    public function attributes()
    {
        return [
            'artist_name' => 'Artist Name'
        ];
    }
}
