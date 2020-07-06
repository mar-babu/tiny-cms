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

    public function messages()
    {
        return[
            'title.required' => 'Title is required!!',
            'title.unique' => 'Title Already Taken!!',
            'brief.required' => 'Brief is required!!',
            'type.required' => 'Type is required!!!!',
            'section.required' => 'Section is required!!!!',
            'file.required' => 'File is required!!!!',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title.*' => 'required|unique:posts,title,' . request()->id,
            'brief.*' => 'required',
            'type.*' => 'required',
            'section.*' => 'required',
            'file.*' => 'required'
        ];
    }
}
