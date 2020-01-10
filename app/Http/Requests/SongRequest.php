<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SongRequest extends FormRequest
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
            'song_title' => 'required|string',
            'artist_id' => 'required|string',
            'song_lyrics' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'song_title.required' => 'The :attribute field is required',
            'artist_id.required' => 'The :attribute field is required',
            'song_lyrics.required' => 'The :attribute field is required',
        ];
    }

    public function attributes()
    {
        return [
            'song_title' => 'Song Title',
            'artist_id' => 'Artist',
            'song_lyrics' => 'Song Lyrics',
        ];
    }
}
