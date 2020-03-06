<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\Models\Event;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:255',
            'start' => 'required',
            'end' => 'required',
            'location' => 'required|min:5|max:255',
            'type' => [
                'required',
                Rule::in([
                    Event::TYPE_ALL,
                    Event::TYPE_ACTION,
                    Event::TYPE_ACTIVITY,
                    Event::TYPE_EVENT,
                    Event::TYPE_MEETING,
                    Event::TYPE_TALK
                ])
            ],
            'hosted_by' => 'required|min:5|max:255',
            'description' => 'required|min:5|max:2000'
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
