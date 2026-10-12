<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $registration ? 'Edit Business Directory Registration' : 'Business Directory Registration' }} | Veena
        Smart Homes</title>
    <link rel="icon" href="{{ asset('assets/main.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        :root {
            color-scheme: light;
            --ink: #172b27;
            --muted: #5f726b;
            --line: rgba(22, 52, 45, 0.1);
            --surface: #ffffff;
            --canvas: #edf4ef;
            --accent: #176b58;
            --accent-dark: #104c40;
            --accent-soft: #eaf4ee;
            --highlight: #d98a4a;
            --error: #a53131;
            --shadow: 0 28px 60px rgba(20, 42, 35, 0.12);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            color: var(--ink);
            background: linear-gradient(135deg, #edf4ef 0%, #f7f5ef 100%);
            font-family: 'DM Sans', sans-serif;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .page-shell {
            width: min(100% - 32px, 1320px);
            min-height: calc(100vh - 64px);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            padding: 32px 0 56px;
        }

        .registration-layout {
            display: grid;
            grid-template-columns: 1fr 1fr;
            overflow: hidden;
            border: 1px solid rgba(23, 107, 88, 0.12);
            border-radius: 28px;
            background: var(--surface);
            box-shadow: var(--shadow);
            animation: arrive 450ms ease-out both;
            width: 100%;
        }

        .promo-panel {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0;
            background: linear-gradient(180deg, #fbf9ff 0%, #f2edff 52%, #e9e2ff 100%);
            color: #1e1734;
        }

        .promo-brand {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 18px;
            display: none;
        }

        .promo-brand img {
            width: 54px;
            height: 54px;
            border-radius: 16px;
            background: rgba(255, 255, 255, 0.08);
            padding: 8px;
            object-fit: contain;
        }

        .brand-name {
            font-family: 'Manrope', sans-serif;
            font-size: 15px;
            font-weight: 800;
            letter-spacing: 0.04em;
        }

        .brand-caption {
            margin-top: 3px;
            color: rgba(30, 23, 52, 0.72);
            font-size: 12px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
        }

        .promo-visual {
            position: relative;
            overflow: hidden;
            border-radius: 0;
            border: 0;
            background: none;
            box-shadow: none;
            height: 100%;
            min-height: 520px;
        }

        .promo-visual::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(246, 241, 255, 0.22), rgba(226, 217, 255, 0.08));
            z-index: 1;
        }

        .promo-visual img {
            width: 100%;
            height: 100%;
            min-height: 520px;
            object-fit: cover;
            display: block;
            filter: saturate(0.88) contrast(0.96) brightness(1.14);
        }

        .promo-logo-overlay {
            position: absolute;
            top: 22px;
            left: 22px;
            z-index: 2;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 16px;
            border: 1px solid rgba(255, 255, 255, 0.72);
            border-radius: 18px;
            background: rgba(255, 255, 255, 0.88);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
            box-shadow: 0 12px 30px rgba(51, 38, 91, 0.12);
        }

        .promo-logo-overlay img {
            width: 45px;
            height: 45px;
            min-height: auto;
            border-radius: 14px;
            padding: 7px;
            background: rgba(242, 237, 255, 0.9);
            filter: none;
            object-fit: contain;
        }

        .promo-logo-overlay .brand-name {
            font-size: 12px;
            letter-spacing: 0.08em;
            color: #342663;
        }

        .promo-logo-overlay .brand-caption {
            font-size: 10px;
            letter-spacing: 0.1em;
            color: #655b83;
        }

        .promo-banner-label {
            position: absolute;
            right: 18px;
            bottom: 18px;
            z-index: 2;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 14px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.82);
            border: 1px solid rgba(255, 255, 255, 0.9);
            color: #342663;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            backdrop-filter: blur(4px);
            -webkit-backdrop-filter: blur(4px);
            box-shadow: 0 8px 24px rgba(51, 38, 91, 0.12);
        }

        .promo-copy {
            margin-top: 20px;
            padding: 0 4px;
        }

        .eyebrow {
            margin: 0 0 10px;
            color: #d5f4e2;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .promo-copy h2 {
            margin: 0;
            font-family: 'Manrope', sans-serif;
            font-size: clamp(24px, 2vw, 36px);
            line-height: 1.1;
            letter-spacing: -0.04em;
        }

        .promo-copy p:last-child {
            margin: 12px 0 0;
            color: rgba(233, 248, 240, 0.8);
            font-size: 14px;
            line-height: 1.7;
        }

        .form-panel {
            background: #fffefc;
            padding: 28px 30px 34px;
        }

        .form-heading {
            margin-bottom: 22px;
            padding-bottom: 18px;
            border-bottom: 1px solid var(--line);
        }

        .form-heading .eyebrow {
            color: var(--accent);
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .form-heading h1 {
            margin: 0;
            font-family: 'Manrope', sans-serif;
            font-size: clamp(28px, 2vw, 42px);
            line-height: 1.15;
            letter-spacing: -0.05em;
        }

        .intro {
            margin: 10px 0 0;
            color: var(--muted);
            font-size: 15px;
            line-height: 1.7;
        }

        form {
            display: grid;
            gap: 18px;
        }

        .notice {
            padding: 12px 14px;
            border-radius: 12px;
            font-size: 14px;
        }

        .notice-success {
            color: #14513c;
            background: #e8f5ed;
            border: 1px solid #b9dfc6;
        }

        .notice-error {
            color: var(--error);
            background: #fff0ed;
            border: 1px solid #f0c3bc;
        }

        .section {
            padding: 20px 0 0;
        }

        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }

        .step-actions {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 12px;
            padding-top: 10px;
        }

        .step-actions .secondary {
            min-height: 50px;
            padding: 0 20px;
            border: 1px solid #cfe0d9;
            border-radius: 12px;
            background: #f4faf7;
            color: var(--accent);
            font: 700 14px 'DM Sans', sans-serif;
            cursor: pointer;
        }

        .step-actions .secondary:hover {
            background: #ebf6f0;
        }

        .section-title {
            display: flex;
            align-items: baseline;
            gap: 8px;
            margin: 0 0 16px;
            font-family: 'Manrope', sans-serif;
            font-size: 19px;
            letter-spacing: -0.04em;
        }

        .section-title span {
            color: var(--muted);
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        .fields {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px 20px;
        }

        .field {
            min-width: 0;
        }

        .field-wide {
            grid-column: 1 / -1;
        }

        label,
        .legend {
            display: block;
            margin-bottom: 8px;
            color: #2e433e;
            font-size: 13px;
            font-weight: 700;
        }

        .required {
            color: var(--highlight);
        }

        input,
        select,
        textarea {
            width: 100%;
            min-height: 48px;
            padding: 12px 14px;
            border: 1px solid #ccd9d2;
            border-radius: 12px;
            background: #fff;
            color: var(--ink);
            font: 400 14px 'DM Sans', sans-serif;
            transition: border-color 160ms ease, box-shadow 160ms ease;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 4px rgba(23, 107, 88, 0.12);
            outline: none;
        }

        .choice-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px 18px;
            padding: 8px 2px 0;
        }

        .choice {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #334b45;
            font-size: 14px;
            cursor: pointer;
        }

        .choice input {
            width: 17px;
            min-height: 17px;
            height: 17px;
            margin: 0;
            accent-color: var(--accent);
        }

        .field-error {
            display: block;
            margin-top: 7px;
            color: var(--error);
            font-size: 12px;
        }

        .submit-row {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 14px;
            padding-top: 10px;
        }

        .page-link {
            color: var(--accent);
            font-weight: 700;
            text-decoration: none;
        }

        button {
            min-height: 50px;
            padding: 0 24px;
            border: 0;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--accent) 0%, #1b8a73 100%);
            color: #fff;
            font: 700 14px 'DM Sans', sans-serif;
            letter-spacing: 0.03em;
            cursor: pointer;
            transition: transform 160ms ease, box-shadow 160ms ease;
            box-shadow: 0 12px 20px rgba(23, 107, 88, 0.2);
        }

        button:hover {
            transform: translateY(-1px);
            box-shadow: 0 16px 24px rgba(23, 107, 88, 0.24);
        }

        button:focus-visible {
            outline: 3px solid rgba(23, 107, 88, 0.25);
            outline-offset: 3px;
        }

        @keyframes arrive {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 980px) {
            .registration-layout {
                grid-template-columns: 1fr;
            }

            .promo-panel {
                padding-bottom: 18px;
            }
        }

        @media (max-width: 620px) {
            .page-shell {
                width: min(100% - 18px, 1320px);
                margin-top: 18px;
            }

            .promo-panel,
            .form-panel {
                padding-left: 18px;
                padding-right: 18px;
            }

            .fields {
                grid-template-columns: 1fr;
            }

            .submit-row {
                flex-direction: column-reverse;
                align-items: stretch;
            }

            .submit-row button {
                width: 100%;
            }
        }

        @media (prefers-reduced-motion: reduce) {

            *,
            *::before,
            *::after {
                animation-duration: .01ms !important;
                transition-duration: .01ms !important;
            }
        }
    </style>
</head>

<body>
    <main class="page-shell">
        <section class="registration-layout" aria-labelledby="form-title">
            <aside class="promo-panel">
                <div class="promo-visual">
                    <div class="promo-logo-overlay">
                        <img src="{{ asset('assets/main.png') }}" alt="Veena Smart Homes logo">
                        <div>
                            <div class="brand-name">VEENA SMART HOMES</div>
                            <div class="brand-caption">Community network</div>
                        </div>
                    </div>
                    <img src="{{ asset('assets/bannerimg.png') }}" alt="Business banner image">
                    <div class="promo-banner-label">Business Network</div>
                </div>
            </aside>

            <div class="form-panel">
                <header class="form-heading">
                    <p class="eyebrow">{{ $registration ? 'Manage registration' : 'Resident registration' }}</p>
                    <h1 id="form-title">
                        {{ $registration ? 'Edit business details' : 'Business Directory Registration Form [VSH Team]' }}
                    </h1>
                    <p class="intro">
                        {{ $registration ? 'Update this resident and business listing.' : 'Share your business to connect with your neighbours.' }}
                    </p>
                </header>

                <form
                    action="{{ $registration ? route('business-directory.update', $registration) : route('business-directory.store') }}"
                    method="POST">
                    @csrf
                    @if ($registration)
                        @method('PUT')
                    @endif

                    @if (session('success'))
                        <div class="notice notice-success" role="status">{{ session('success') }}</div>
                    @endif
                    @if ($errors->any())
                        <div class="notice notice-error" role="alert">Please check the highlighted fields and submit
                            again.</div>
                    @endif

                    <section class="section form-step active" data-step="1" aria-labelledby="personal-heading">
                        <h2 class="section-title" id="personal-heading">Personal details</h2>
                        <div class="fields">
                            <div class="field">
                                <label for="full_name">Full name <span class="required">*</span></label>
                                <input id="full_name" name="full_name"
                                    value="{{ old('full_name', $registration?->full_name) }}" autocomplete="name"
                                    data-required-visible="1" required>
                                @error('full_name')
                                    <small class="field-error">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="field">
                                <label for="role">Your role <span class="required">*</span></label>
                                <input id="role" name="role" value="{{ old('role', $registration?->role) }}"
                                    placeholder="e.g. Founder, Consultant" data-required-visible="1" required>
                                @error('role')
                                    <small class="field-error">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="field">
                                <label for="wing">Wing <span class="required">*</span></label>
                                <select id="wing" name="wing" data-required-visible="1" required>
                                    <option value="">Select wing</option>
                                    @foreach (['A', 'B', 'C', 'D', 'E'] as $wing)
                                        <option value="{{ $wing }}" @selected(old('wing', $registration?->wing) === $wing)>
                                            {{ $wing }}</option>
                                    @endforeach
                                </select>
                                @error('wing')
                                    <small class="field-error">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="field">
                                <label for="flat_number">Flat number <span class="required">*</span></label>
                                <input id="flat_number" name="flat_number"
                                    value="{{ old('flat_number', $registration?->flat_number) }}"
                                    autocomplete="address-line2" data-required-visible="1" required>
                                @error('flat_number')
                                    <small class="field-error">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="step-actions">
                            <button type="button" class="next-step">Next</button>
                        </div>
                    </section>

                    <section class="section form-step" data-step="2" aria-labelledby="business-heading">
                        <h2 class="section-title" id="business-heading">Business details</h2>
                        <div class="fields">
                            <div class="field">
                                <label for="company_name">Company name <span class="required">*</span></label>
                                <input id="company_name" name="company_name"
                                    value="{{ old('company_name', $registration?->company_name) }}"
                                    autocomplete="organization" data-required-visible="2" required>
                                @error('company_name')
                                    <small class="field-error">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="field">
                                <label for="business_category">Business category <span
                                        class="required">*</span></label>
                                <select id="business_category" name="business_category" data-required-visible="2"
                                    required>
                                    <option value="">Choose a category</option>
                                    @foreach (['Services', 'Manufacturing', 'Both'] as $category)
                                        <option value="{{ $category }}" @selected(old('business_category', $registration?->business_category) === $category)>
                                            {{ $category }}</option>
                                    @endforeach
                                </select>
                                @error('business_category')
                                    <small class="field-error">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="field field-wide">
                                <label for="short_description">Short description <span
                                        class="required">*</span></label>
                                <textarea id="short_description" name="short_description" maxlength="1000"
                                    placeholder="What does your business offer?" data-required-visible="2" required>{{ old('short_description', $registration?->short_description) }}</textarea>
                                @error('short_description')
                                    <small class="field-error">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="step-actions">
                            <button type="button" class="secondary back-step">Back</button>
                            <button type="button" class="next-step">Next</button>
                        </div>
                    </section>

                    <section class="section form-step" data-step="3" aria-labelledby="contact-heading">
                        <h2 class="section-title" id="contact-heading">Contact details <span>networking</span></h2>
                        <div class="fields">
                            <div class="field">
                                <label for="mobile_number">Mobile number <span class="required">*</span></label>
                                <input id="mobile_number" name="mobile_number" type="tel"
                                    value="{{ old('mobile_number', $registration?->mobile_number) }}"
                                    autocomplete="tel" data-required-visible="3" required>
                                @error('mobile_number')
                                    <small class="field-error">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="field">
                                <label for="email_address">Email address <span class="required">*</span></label>
                                <input id="email_address" name="email_address" type="email"
                                    value="{{ old('email_address', $registration?->email_address) }}"
                                    autocomplete="email" data-required-visible="3" required>
                                @error('email_address')
                                    <small class="field-error">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="field">
                                <label for="website_url">Website URL</label>
                                <input id="website_url" name="website_url" type="url"
                                    value="{{ old('website_url', $registration?->website_url) }}"
                                    placeholder="https://example.com">
                                @error('website_url')
                                    <small class="field-error">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="field">
                                <label for="business_profile">LinkedIn / Instagram / other business profile</label>
                                <input id="business_profile" name="business_profile"
                                    value="{{ old('business_profile', $registration?->business_profile) }}"
                                    placeholder="Profile link or handle">
                                @error('business_profile')
                                    <small class="field-error">{{ $message }}</small>
                                @enderror
                            </div>

                            <fieldset class="field field-wide" style="margin: 0; padding: 0; border: 0;">
                                <legend class="legend">Interested in <span class="required">*</span></legend>
                                <div class="choice-list">
                                    @foreach (['Networking', 'Referrals', 'Collaboration'] as $interest)
                                        <label class="choice">
                                            <input type="checkbox" name="interested_in[]"
                                                value="{{ $interest }}" @checked(in_array($interest, old('interested_in', $registration?->interested_in ?? []), true))>
                                            {{ $interest }}
                                        </label>
                                    @endforeach
                                </div>
                                @error('interested_in')
                                    <small class="field-error">{{ $message }}</small>
                                @enderror
                            </fieldset>

                            <div class="field">
                                <label for="preferred_contact_method">Preferred contact method <span
                                        class="required">*</span></label>
                                <select id="preferred_contact_method" name="preferred_contact_method"
                                    data-required-visible="3" required>
                                    <option value="">Choose a method</option>
                                    @foreach (['Phone', 'Email', 'WhatsApp'] as $method)
                                        <option value="{{ $method }}" @selected(old('preferred_contact_method', $registration?->preferred_contact_method) === $method)>
                                            {{ $method }}</option>
                                    @endforeach
                                </select>
                                @error('preferred_contact_method')
                                    <small class="field-error">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="step-actions">
                            <button type="button" class="secondary back-step">Back</button>
                            @if ($registration)
                                <a class="page-link" href="{{ route('business-directory.admin') }}">Cancel</a>
                            @endif
                            <button
                                type="submit">{{ $registration ? 'Save changes' : 'Submit registration' }}</button>
                        </div>
                    </section>
                </form>
            </div>
        </section>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const steps = Array.from(document.querySelectorAll('.form-step'));
            const nextButtons = Array.from(document.querySelectorAll('.next-step'));
            const backButtons = Array.from(document.querySelectorAll('.back-step'));
            const requiredFields = Array.from(document.querySelectorAll('[data-required-visible]'));
            let currentStep = 0;

            function updateStep() {
                steps.forEach((step, index) => {
                    const isActive = index === currentStep;
                    step.classList.toggle('active', isActive);
                    step.hidden = !isActive;
                });

                requiredFields.forEach((field) => {
                    const belongsToCurrentStep = field.closest('.form-step') && field.closest('.form-step')
                        .classList.contains('active');
                    field.required = belongsToCurrentStep;
                });
            }

            nextButtons.forEach((button) => {
                button.addEventListener('click', function() {
                    const currentSection = steps[currentStep];
                    const requiredInputs = Array.from(currentSection.querySelectorAll(
                        'input[required], select[required], textarea[required]'));
                    const invalidInput = requiredInputs.find((input) => !input.checkValidity());

                    if (invalidInput) {
                        invalidInput.reportValidity();
                        return;
                    }

                    currentStep = Math.min(currentStep + 1, steps.length - 1);
                    updateStep();
                });
            });

            backButtons.forEach((button) => {
                button.addEventListener('click', function() {
                    currentStep = Math.max(currentStep - 1, 0);
                    updateStep();
                });
            });

            updateStep();
        });
    </script>
</body>

</html>
