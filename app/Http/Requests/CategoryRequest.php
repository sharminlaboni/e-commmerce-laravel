<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function messages(){
        return [
            'title.required' => 'Type is required',
        ];
    }

    public function rules()
    {
        // $id = NULL;
        // if ($this->isMethod('patch')) {
        //     $id = $this->category->id;
        // }
        return [
            'title' => 'required|min:2|max:20' .$this->id,
        ];
    }
}
