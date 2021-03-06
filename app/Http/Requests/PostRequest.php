<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'title' => 'required|min:3|max:255',
            'content' => 'required|min:10'
        ];
    }

    public function messages() {
        return [
            'title.required' => 'Questo campo è obbligatorio',
            'title.min' => 'Questo campo deve essere minomo di :min caratteri',
            'title.max' => 'Questo campo deve essere massimo di :max caratteri',
            'content.required' => 'Questo campo è obbligatorio',
            'content.min' => 'Questo campo deve essere minomo di :min caratteri'
        ];
    }
}
