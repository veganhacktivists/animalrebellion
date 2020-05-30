<?php

namespace App\Http\Controllers;

use App\Models\JoinPage;
use Illuminate\Http\Request;

class JoinResponseController extends Controller
{
    public function store(Request $request)
    {
        $joinPage = JoinPage::findOrFail(request()->page_id);

        $this->validate($request, $this->buildValidationRules($joinPage));

        $jsonResponse = $request->except(['_token', 'page_id']);

        $joinPage->addResponse($jsonResponse);

        return back('201')->with('success', 'response created successfully');
    }

    private function buildValidationRules(JoinPage $joinPage)
    {
        $validationRules = ['has_gdpr_consent' => 'required|string'];

        foreach ($joinPage->formInputs as $formInput) {
            if ($formInput->required) {
                $validationRules[$formInput->formName] = 'required';
            }
        }

        return $validationRules;
    }
}
