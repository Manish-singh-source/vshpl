<?php

namespace App\Http\Controllers;

use App\Models\BusinessDirectoryRegistration;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BusinessDirectoryController extends Controller
{
    public function create(): View
    {
        return view('business-directory', ['registration' => null]);
    }

    public function edit(BusinessDirectoryRegistration $registration): View
    {
        return view('business-directory', compact('registration'));
    }

    public function admin(): View
    {
        $registrations = BusinessDirectoryRegistration::latest()->get();

        return view('business-directory.admin', compact('registrations'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $this->validatedFields($request);

        BusinessDirectoryRegistration::create($validated);

        return redirect()
            ->route('business-directory.create')
            ->with('success', 'Your business directory registration has been received.');
    }

    public function update(Request $request, BusinessDirectoryRegistration $registration): RedirectResponse
    {
        $registration->update($this->validatedFields($request));

        return redirect()
            ->route('business-directory.admin')
            ->with('success', 'Business directory registration updated.');
    }

    public function destroy(BusinessDirectoryRegistration $registration): RedirectResponse
    {
        $registration->delete();

        return redirect()
            ->route('business-directory.admin')
            ->with('success', 'Business directory registration deleted.');
    }

    private function validatedFields(Request $request): array
    {
        return $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'wing' => ['required', 'string', 'in:A,B,C,D,E'],
            'flat_number' => ['required', 'string', 'max:50'],
            'role' => ['required', 'string', 'max:255'],
            'company_name' => ['required', 'string', 'max:255'],
            'business_category' => ['required', 'string', 'in:Services,Manufacturing,Both'],
            'short_description' => ['required', 'string', 'max:1000'],
            'mobile_number' => ['required', 'string', 'max:20'],
            'email_address' => ['required', 'email', 'max:255'],
            'website_url' => ['nullable', 'url', 'max:255'],
            'business_profile' => ['nullable', 'string', 'max:255'],
            'interested_in' => ['required', 'array', 'min:1'],
            'interested_in.*' => ['string', 'in:Networking,Referrals,Collaboration'],
            'preferred_contact_method' => ['required', 'string', 'in:Phone,Email,WhatsApp'],
        ]);
    }
}
