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
        $isLoggedIn = backpack_auth()->check();

        if (!$isLoggedIn) {
            return false;
        }

        if (backpack_user()->hasRole(BackpackUser::ROLE_ADMIN)) {
            return true;
        }
    }
}
