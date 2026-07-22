<?php

namespace App\Http\Controllers;

use App\Models\GaneshUtsavRegistration;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GaneshUtsavController extends Controller
{
    public function index(): View
    {
        $registrations = GaneshUtsavRegistration::latest()->get();

        return view('ganesh-utsav.data', compact('registrations'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'resident_type' => ['required', 'in:owner,tenant'],
            'wing' => ['required', 'string', 'max:20'],
            'flat_number' => ['required', 'string', 'max:50'],
            'full_name' => ['required', 'string', 'max:255'],
            'mobile_number' => ['required', 'string', 'max:20'],
            'has_extra_coupon' => ['nullable', 'boolean'],
            'extra_coupon_quantity' => ['nullable', 'integer', 'min:1', 'max:20'],
            'is_sponsor' => ['nullable', 'boolean'],
            'sponsor_about' => ['nullable', 'string'],
            'sponsor_amount' => ['nullable', 'integer', 'min:0'],
            'sponsor_payment_method' => ['nullable', 'in:cash,online,already_paid'],
            'sponsor_payment_screenshot' => ['nullable', 'image', 'max:4096'],
        ]);

        $hasExtraCoupon = $request->boolean('has_extra_coupon');
        $extraCouponQuantity = $hasExtraCoupon ? (int) $request->input('extra_coupon_quantity', 1) : 0;
        $extraCouponUnitAmount = 250;
        $extraCouponTotal = $extraCouponQuantity * $extraCouponUnitAmount;

        $isSponsor = $request->boolean('is_sponsor');
        $sponsorAmount = $isSponsor ? (int) $request->input('sponsor_amount', 0) : 0;
        $sponsorPaymentMethod = $isSponsor ? $request->input('sponsor_payment_method', 'cash') : null;

        if ($isSponsor && in_array($sponsorPaymentMethod, ['online', 'already_paid'], true)) {
            $request->validate([
                'sponsor_payment_screenshot' => ['required', 'image', 'max:4096'],
            ]);
        }

        $screenshotPath = null;

        if ($request->hasFile('sponsor_payment_screenshot')) {
            $file = $request->file('sponsor_payment_screenshot');
            $fileName = 'sponsor-payment-' . time() . '-' . uniqid() . '.' . $file->getClientOriginalExtension();
            $destination = public_path('uploads/ganesh-utsav');

            if (! is_dir($destination)) {
                mkdir($destination, 0777, true);
            }

            $file->move($destination, $fileName);
            $screenshotPath = 'uploads/ganesh-utsav/' . $fileName;
        }

        GaneshUtsavRegistration::create([
            'resident_type' => $validated['resident_type'],
            'wing' => $validated['wing'],
            'flat_number' => $validated['flat_number'],
            'full_name' => $validated['full_name'],
            'mobile_number' => $validated['mobile_number'],
            'contribution_amount' => 1000,
            'has_extra_coupon' => $hasExtraCoupon,
            'extra_coupon_quantity' => $extraCouponQuantity,
            'extra_coupon_unit_amount' => $extraCouponUnitAmount,
            'extra_coupon_total' => $extraCouponTotal,
            'is_sponsor' => $isSponsor,
            'sponsor_description' => null,
            'sponsor_about' => $isSponsor ? $request->input('sponsor_about') : null,
            'sponsor_amount' => $sponsorAmount,
            'sponsor_payment_method' => $sponsorPaymentMethod,
            'sponsor_payment_screenshot' => $screenshotPath,
            'grand_total' => 1000 + $extraCouponTotal + $sponsorAmount,
        ]);

        return back()->with('success', 'Ganesh Utsav contribution submitted successfully.');
    }
}
