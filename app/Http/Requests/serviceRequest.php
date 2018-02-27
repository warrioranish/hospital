<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;


class serviceRequest extends FormRequest
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
    public function rules(Request $request)
    {
        switch($this->method()) {
            case 'POST':
            {
                return [
                    'title' => 'required|unique:services',
                    'icon' => 'required|image|mimes:png',
                    'caption' => 'required',
                    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
                    'service_description' => 'required'
                ];
            }

            case 'PATCH':
            {
                return [
                    'title' => 'required|unique:services,title,'.$request->id->id,
                    'icon' => 'image|mimes:png',
                    'caption' => 'required',
                    'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
                    'service_description' => 'required'
                ];
            }
        }

    }
}
