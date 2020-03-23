<?php

namespace App\Http\Requests;

use App\Models\BackpackUser;
use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        abort_if(!backpack_auth()->check(), 403);

        if (backpack_user()->hasRole(BackpackUser::ROLE_ADMIN)) {
            return true;
        }
    }
}
