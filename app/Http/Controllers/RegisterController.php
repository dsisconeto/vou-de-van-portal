<?php

namespace App\Http\Controllers;

use App\Company;
use App\Passenger;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{

    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function passenger(Request $request)
    {
        $this->validate($request, [
            'email' => array_merge($this->validateEmail(), [new Unique('passengers', 'email')]),
        ]);

        Passenger::create($request->all());

        return redirect()->route('thank-you', ['passenger' => 'passenger']);
    }

    public function company(Request $request)
    {
        $this->validate($request, [
            'email' => array_merge($this->validateEmail(), [new Unique('companies', 'email')]),
            'name' => 'required|string|max:191',
            'company_name' => 'required|string|max:191',
            'cnpj' => 'required|string|size:18',
            'phone' => 'required|string|max:14|min:13',
        ]);

        Company::create($request->all());

        return redirect()->route('thank-you');
    }

    private function validateEmail(): array
    {
        return ['string', 'email', 'required', 'max:190'];
    }

}
