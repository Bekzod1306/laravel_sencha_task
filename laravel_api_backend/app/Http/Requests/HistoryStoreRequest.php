<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HistoryStoreRequest extends FormRequest
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
            'cat_type'=>'required|max:255',
            'cat_name'=>'required|max:255',
            'sum'=>'required|max:255',
            'total'=>'required|max:255',
            'comments'=>'required|max:255',
        ];
    }
}
