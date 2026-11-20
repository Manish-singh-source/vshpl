<?php

namespace App\Http\Controllers;

use App\Models\BusinessDirectoryRegistration;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
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

        $uploadPath = public_path('uploads/business_directory');
        File::ensureDirectoryExists($uploadPath);

        if ($request->hasFile('business_logo')) {
            $logo = $request->file('business_logo');
            $logoName = 'logo_' . time() . '_' . uniqid() . '.' . $logo->getClientOriginalExtension();
            $logo->move($uploadPath, $logoName);
            $validated['business_logo'] = 'uploads/business_directory/' . $logoName;
        }

        if ($request->hasFile('your_image')) {
            $image = $request->file('your_image');
            $imageName = 'user_' . time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($uploadPath, $imageName);
            $validated['your_image'] = 'uploads/business_directory/' . $imageName;
        }

        BusinessDirectoryRegistration::create($validated);

        return redirect()
            ->route('business-directory.create')
            ->with('success', 'Your business directory registration has been received successfully.');
    }

    public function update(Request $request, BusinessDirectoryRegistration $registration): RedirectResponse
    {
        $validated = $this->validatedFields($request);

        $uploadPath = public_path('uploads/business_directory');
        File::ensureDirectoryExists($uploadPath);

        if ($request->hasFile('business_logo')) {
            $logo = $request->file('business_logo');
            $logoName = 'logo_' . time() . '_' . uniqid() . '.' . $logo->getClientOriginalExtension();
            $logo->move($uploadPath, $logoName);
            $validated['business_logo'] = 'uploads/business_directory/' . $logoName;
        }

        if ($request->hasFile('your_image')) {
            $image = $request->file('your_image');
            $imageName = 'user_' . time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
            $image->move($uploadPath, $imageName);
            $validated['your_image'] = 'uploads/business_directory/' . $imageName;
        }

        $registration->update($validated);

        return redirect()
            ->route('business-directory.admin')
            ->with('success', 'Business directory registration updated successfully.');
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
            'your_image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:5120'],
            'company_name' => ['required', 'string', 'max:255'],
            'business_logo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,svg,webp', 'max:5120'],
            'business_category' => ['required', 'string', 'max:255'],
            'gst_number' => ['nullable', 'string', 'max:50'],
            'short_description' => ['nullable', 'string', 'max:1000'],
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
