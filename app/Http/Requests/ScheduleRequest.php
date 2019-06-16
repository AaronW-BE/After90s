<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ScheduleRequest extends FormRequest
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
            //
            'title' => ['required'],
            'description' => ['required'],
            'tags' => ['required'],
            'price' => ['required'],
            'location' => ['required'],
            'duration' => ['required'],
            'people_count' => ['required'],
            'benefits' => ['required'],
            'cover' => ['required'],
            'albums' => ['required'],
        ];
    }
}
