<?php

namespace App\Http\Requests;

use App\Models\BackpackUser;

class AboutPageRequest extends AuthRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        parent::authorize();

        if (backpack_user()->can(BackpackUser::PERMISSION_PAGES_CREATE) || backpack_user()->can(BackpackUser::PERMISSION_PAGES_EDIT)) {
            return true;
        }

        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:2|max:255',
            'header' => 'required|min:3|max:150',
            'slug' => 'required|min:1|max:50',
            'content' => 'required',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [];
    }
}
