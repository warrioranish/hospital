<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class imageRequest extends FormRequest
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
        switch($this->method())
        {
            case 'POST':
            {
                return  [
                    'title' => 'required',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                    'description' => 'required'
                ];
            }

            case 'PATCH':
            {
                return  [
                    'title' => 'required',
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
                    'description' => 'required'
                ];
            }
            default: break;


        }

    }
}
