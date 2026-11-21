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
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300..700;1,9..40,300..700&family=Manrope:wght@500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
        :root {
            color-scheme: dark;
            --primary: #38bdf8;
            --accent: #34d399;
            --text-heading: #ffffff;
            --text-body: #ffffff;
            --text-muted: rgba(255, 255, 255, 0.85);
            --border-light: rgba(255, 255, 255, 0.45);
            --border-focus: #38bdf8;
            --required: #fbbf24;
            --error: #f87171;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            color: var(--text-body);
            font-family: 'DM Sans', sans-serif;
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url("{{ asset('assets/banner.png') }}") center center / cover no-repeat fixed;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 24px 16px 64px;
            overflow-x: hidden;
        }

        /* Top Brand Navigation Bar - Completely Transparent */
        .top-navbar {
            width: min(100%, 920px);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 0;
            margin-bottom: 24px;
            background: transparent;
            border-bottom: 1px solid var(--border-light);
        }

        .nav-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: inherit;
        }

        .nav-logo {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.15);
            padding: 5px;
            object-fit: contain;
            border: 1px solid var(--border-light);
        }

        .nav-brand-title {
            font-family: 'Manrope', sans-serif;
            font-size: 15px;
            font-weight: 800;
            letter-spacing: 0.06em;
            color: #ffffff;
            text-transform: uppercase;
            text-shadow: 0 2px 5px rgba(0, 0, 0, 0.8);
        }

        .nav-brand-sub {
            font-size: 11px;
            color: var(--text-muted);
            letter-spacing: 0.04em;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.8);
        }

        .nav-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 14px;
            border-radius: 999px;
            background: rgba(0, 0, 0, 0.35);
            border: 1px solid var(--primary);
            color: #7dd3fc;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.8);
        }

        /* Completely Transparent Form Container */
        .registration-card {
            width: min(100%, 920px);
            background: transparent;
            backdrop-filter: none;
            -webkit-backdrop-filter: none;
            border: none;
            box-shadow: none;
            padding: 10px 0 30px;
            animation: fadeIn 450ms ease-out both;
        }

        .form-heading {
            margin-bottom: 30px;
            padding-bottom: 22px;
            border-bottom: 1.5px solid var(--border-light);
        }

        .eyebrow {
            display: inline-block;
            color: var(--primary);
            font-size: 13px;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            margin-bottom: 8px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.8);
        }

        .form-title {
            font-family: 'Manrope', sans-serif;
            font-size: clamp(26px, 3.5vw, 36px);
            font-weight: 800;
            line-height: 1.25;
            letter-spacing: -0.03em;
            color: #ffffff;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.85);
        }

        .form-intro {
            margin-top: 10px;
            color: #ffffff;
            font-size: 15.5px;
            line-height: 1.65;
            text-shadow: 0 2px 6px rgba(0, 0, 0, 0.85);
        }

        /* Notices */
        .notice {
            padding: 14px 18px;
            border-radius: 12px;
            font-size: 14px;
            margin-bottom: 26px;
            backdrop-filter: blur(8px);
        }

        .notice-success {
            color: #ffffff;
            background: rgba(16, 185, 129, 0.45);
            border: 1.5px solid #10b981;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.8);
        }

        .notice-error {
            color: #ffffff;
            background: rgba(239, 68, 68, 0.45);
            border: 1.5px solid #ef4444;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.8);
        }

        /* Form Sections */
        .form-section {
            margin-bottom: 36px;
            padding-bottom: 32px;
            border-bottom: 1.5px solid var(--border-light);
        }

        .form-section:last-of-type {
            border-bottom: none;
            margin-bottom: 12px;
            padding-bottom: 0;
        }

        .section-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 22px;
        }

        .section-title {
            font-family: 'Manrope', sans-serif;
            font-size: 21px;
            font-weight: 700;
            color: #ffffff;
            display: flex;
            align-items: center;
            gap: 10px;
            text-shadow: 0 2px 8px rgba(0, 0, 0, 0.85);
        }

        .section-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background: rgba(0, 0, 0, 0.35);
            border: 1px solid var(--border-light);
            color: var(--primary);
            font-size: 16px;
        }

        /* Grid */
        .fields-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 22px 26px;
        }

        .field {
            min-width: 0;
            display: flex;
            flex-direction: column;
        }

        .field-full {
            grid-column: 1 / -1;
        }

        label,
        .legend-label {
            display: block;
            margin-bottom: 8px;
            color: #ffffff;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 0.01em;
            text-shadow: 0 1px 4px rgba(0, 0, 0, 0.85);
        }

        .required {
            color: var(--required);
            margin-left: 2px;
        }

        .optional-tag {
            color: rgba(255, 255, 255, 0.75);
            font-size: 12px;
            font-weight: 400;
            margin-left: 4px;
        }

        /* 100% Transparent Inputs, Selects, Textareas */
        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="url"],
        select,
        textarea {
            width: 100%;
            min-height: 50px;
            padding: 12px 16px;
            border: 1.5px solid var(--border-light);
            border-radius: 12px;
            background: transparent;
            color: #ffffff;
            font: 500 14.5px 'DM Sans', sans-serif;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.7);
            transition: all 0.2s ease;
        }

        input::placeholder,
        textarea::placeholder {
            color: rgba(255, 255, 255, 0.6);
            text-shadow: none;
        }

        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            background: rgba(0, 0, 0, 0.25);
            border-color: var(--border-focus);
            box-shadow: 0 0 0 3px rgba(56, 189, 248, 0.35);
        }

        select {
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%237dd3fc' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 16px center;
            background-size: 12px;
            padding-right: 42px;
        }

        select option {
            background: #0b1524;
            color: #ffffff;
            padding: 12px;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        /* Transparent File Upload Dropzone */
        .file-upload-box {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 18px 16px;
            border: 1.5px dashed var(--border-light);
            border-radius: 12px;
            background: transparent;
            cursor: pointer;
            transition: all 0.2s ease;
            text-align: center;
        }

        .file-upload-box:hover {
            background: rgba(0, 0, 0, 0.2);
            border-color: var(--primary);
        }

        .file-upload-box input[type="file"] {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .file-upload-icon {
            font-size: 24px;
            margin-bottom: 4px;
            color: var(--primary);
        }

        .file-upload-text {
            font-size: 13.5px;
            font-weight: 700;
            color: #ffffff;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.8);
        }

        .file-upload-hint {
            font-size: 11px;
            color: var(--text-muted);
            margin-top: 2px;
        }

        .file-preview-strip {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 8px;
            padding: 6px 12px;
            border-radius: 8px;
            background: rgba(0, 0, 0, 0.35);
            border: 1px solid var(--border-light);
            font-size: 12px;
            color: #7dd3fc;
        }

        .preview-thumb {
            width: 36px;
            height: 36px;
            border-radius: 6px;
            object-fit: cover;
            border: 1px solid var(--border-light);
        }

        /* Transparent Choice Checklist (Interested In) */
        .choice-list {
            display: flex;
            flex-wrap: wrap;
            gap: 12px 18px;
            padding-top: 4px;
        }

        .choice-item {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            color: #ffffff;
            font-size: 14.5px;
            font-weight: 600;
            cursor: pointer;
            background: transparent;
            padding: 9px 18px;
            border-radius: 10px;
            border: 1.5px solid var(--border-light);
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.8);
            transition: all 0.2s ease;
        }

        .choice-item:hover {
            background: rgba(0, 0, 0, 0.25);
            border-color: var(--primary);
        }

        .choice-item input[type="checkbox"] {
            width: 17px;
            height: 17px;
            min-height: 17px;
            accent-color: #0284c7;
            cursor: pointer;
        }

        .field-error {
            display: block;
            margin-top: 6px;
            color: var(--error);
            font-size: 12px;
            font-weight: 700;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.8);
        }

        /* Action Buttons */
        .form-actions {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 16px;
            margin-top: 32px;
            padding-top: 24px;
            border-top: 1.5px solid var(--border-light);
        }

        .btn-submit {
            min-height: 52px;
            padding: 0 40px;
            border: 0;
            border-radius: 12px;
            background: linear-gradient(135deg, #0284c7 0%, #0d9488 100%);
            color: #ffffff;
            font: 700 15px 'DM Sans', sans-serif;
            letter-spacing: 0.03em;
            cursor: pointer;
            box-shadow: 0 8px 24px rgba(2, 132, 199, 0.45);
            transition: all 0.2s ease;
        }

        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 30px rgba(2, 132, 199, 0.6);
            filter: brightness(1.1);
        }

        .btn-whatsapp {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            min-height: 52px;
            padding: 0 24px;
            border-radius: 12px;
            background: #25d366;
            color: #062b16;
            font-size: 15px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .btn-whatsapp svg {
            width: 18px;
            height: 18px;
            fill: none;
            stroke: currentColor;
            stroke-linecap: round;
            stroke-linejoin: round;
            stroke-width: 1.8;
            flex-shrink: 0;
        }

        .btn-whatsapp:hover {
            transform: translateY(-2px);
            background: #20bd5a;
        }

        .btn-cancel {
            color: #ffffff;
            font-weight: 600;
            font-size: 14.5px;
            text-decoration: none;
            padding: 0 14px;
            text-shadow: 0 1px 3px rgba(0, 0, 0, 0.8);
            transition: color 0.2s ease;
        }

        .btn-cancel:hover {
            color: var(--primary);
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(12px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            body {
                padding: 14px 10px 40px;
            }

            .fields-grid {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .form-actions {
                flex-direction: column-reverse;
                align-items: stretch;
            }

            .btn-submit {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <!-- Top Brand Navigation (Transparent) -->
    <header class="top-navbar">
        <a href="{{ url('/') }}" class="nav-brand">
            <img src="{{ asset('assets/main.png') }}" alt="Veena Smart Homes" class="nav-logo">
            <div>
                <div class="nav-brand-title">VEENA SMART HOMES</div>
                <div class="nav-brand-sub">Resident Business Directory</div>
            </div>
        </a>
    </header>

    <!-- Main Transparent Form -->
    <main class="registration-card">
        <header class="form-heading">
            <h1 class="form-title" id="form-title">
                {{ $registration ? 'Edit Business Directory Registration' : 'Business Directory Registration [VSH Members]' }}
            </h1>
        </header>

        <form id="businessForm"
            action="{{ $registration ? route('business-directory.update', $registration) : route('business-directory.store') }}"
            method="POST" enctype="multipart/form-data">
            @csrf
            @if ($registration)
                @method('PUT')
            @endif

            @if (session('success'))
                <div class="notice notice-success" role="status">
                    ✓ {{ session('success') }}
                </div>
            @endif

            @if (isset($errors) && $errors->any())
                <div class="notice notice-error" role="alert">
                    ⚠ Please review the highlighted fields below and try again.
                </div>
            @endif

            <!-- SECTION 1: Personal Details -->
            <section class="form-section" aria-labelledby="personal-heading">
                <div class="section-header">
                    <h2 class="section-title" id="personal-heading">
                        <span class="section-icon">👤</span>
                        Personal Details
                    </h2>
                </div>

                <div class="fields-grid">
                    <div class="field">
                        <label for="full_name">Full Name <span class="required">*</span></label>
                        <input id="full_name" name="full_name" type="text"
                            value="{{ old('full_name', $registration?->full_name) }}" placeholder="Enter your full name"
                            autocomplete="name" required>
                        @error('full_name')
                            <small class="field-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="wing">Select Wing <span class="required">*</span></label>
                        <select id="wing" name="wing" required>
                            <option value="">Select Wing</option>
                            @foreach (['A', 'B', 'C', 'D', 'E'] as $wing)
                                <option value="{{ $wing }}" @selected(old('wing', $registration?->wing) === $wing)>Wing
                                    {{ $wing }}</option>
                            @endforeach
                        </select>
                        @error('wing')
                            <small class="field-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="flat_number">Flat Number <span class="required">*</span></label>
                        <input id="flat_number" name="flat_number" type="text"
                            value="{{ old('flat_number', $registration?->flat_number) }}" placeholder="e.g. 502"
                            autocomplete="address-line2" required>
                        @error('flat_number')
                            <small class="field-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="your_image">Your Image <span class="optional-tag">(Resident Photo -
                                Optional)</span></label>
                        <div class="file-upload-box">
                            <span class="file-upload-icon">📷</span>
                            <span class="file-upload-text">Upload Your Photo</span>
                            <span class="file-upload-hint">PNG, JPG or WebP (Max 5MB)</span>
                            <input id="your_image" name="your_image" type="file"
                                accept="image/png,image/jpeg,image/webp">
                        </div>
                        <div id="your_image_name" class="file-preview-strip" style="display: none;"></div>
                        @if ($registration?->your_image)
                            <div class="file-preview-strip">
                                <img src="{{ asset($registration->your_image) }}" alt="Your photo"
                                    class="preview-thumb">
                                <span>Current photo attached</span>
                            </div>
                        @endif
                        @error('your_image')
                            <small class="field-error">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </section>

            <!-- SECTION 2: Business Details -->
            <section class="form-section" aria-labelledby="business-heading">
                <div class="section-header">
                    <h2 class="section-title" id="business-heading">
                        <span class="section-icon">💼</span>
                        Business Details
                    </h2>
                </div>

                <div class="fields-grid">
                    <div class="field">
                        <label for="company_name">Business Name <span class="required">*</span></label>
                        <input id="company_name" name="company_name" type="text"
                            value="{{ old('company_name', $registration?->company_name) }}"
                            placeholder="Enter your business, firm or brand name" autocomplete="organization"
                            required>
                        @error('company_name')
                            <small class="field-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="business_category">Business Category <span class="required">*</span></label>
                        <select id="business_category" name="business_category" required>
                            <option value="">Select Business Category</option>
                            @php
                                $categories = [
                                    'IT, Software & Digital Marketing',
                                    'Professional & Financial Services (CA, Legal, Tax, Wealth)',
                                    'Real Estate, Architecture & Interior Design',
                                    'Healthcare, Medical, Clinic & Pharmacy',
                                    'Education, Coaching, Tuition & Training',
                                    'Retail, Grocery & E-commerce',
                                    'Food, Bakery, Sweets & Catering',
                                    'Event Management, Photography & Entertainment',
                                    'Travel, Tours, Transport & Logistics',
                                    'Manufacturing & Industrial Supplies',
                                    'Beauty, Salon, Spa & Personal Care',
                                    'Home Services, Electrical, Plumbing & Maintenance',
                                    'Apparel, Fashion, Boutique & Jewellery',
                                    'Fitness, Yoga, Gym & Sports',
                                    'General Services',
                                    'Both (Products & Services)',
                                    'Other Business',
                                ];
                            @endphp
                            @foreach ($categories as $cat)
                                <option value="{{ $cat }}" @selected(old('business_category', $registration?->business_category) === $cat)>
                                    {{ $cat }}
                                </option>
                            @endforeach
                        </select>
                        @error('business_category')
                            <small class="field-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="business_logo">Business Logo <span class="optional-tag">(Optional)</span></label>
                        <div class="file-upload-box">
                            <span class="file-upload-icon">🏢</span>
                            <span class="file-upload-text">Upload Business Logo</span>
                            <span class="file-upload-hint">PNG, JPG, SVG or WebP (Max 5MB)</span>
                            <input id="business_logo" name="business_logo" type="file"
                                accept="image/png,image/jpeg,image/svg+xml,image/webp">
                        </div>
                        <div id="business_logo_name" class="file-preview-strip" style="display: none;"></div>
                        @if ($registration?->business_logo)
                            <div class="file-preview-strip">
                                <img src="{{ asset($registration->business_logo) }}" alt="Business logo"
                                    class="preview-thumb">
                                <span>Current logo attached</span>
                            </div>
                        @endif
                        @error('business_logo')
                            <small class="field-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="gst_number">GST Number <span class="optional-tag">(Optional)</span></label>
                        <input id="gst_number" name="gst_number" type="text" maxlength="30"
                            value="{{ old('gst_number', $registration?->gst_number) }}"
                            placeholder="e.g. 27AAAAA0000A1Z5" style="text-transform: uppercase;">
                        @error('gst_number')
                            <small class="field-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="field field-full">
                        <label for="short_description">Business Description <span
                                class="optional-tag">(Optional)</span></label>
                        <textarea id="short_description" name="short_description" maxlength="1000"
                            placeholder="Briefly describe what your business offers, key specialties, or services...">{{ old('short_description', $registration?->short_description) }}</textarea>
                        @error('short_description')
                            <small class="field-error">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </section>

            <!-- SECTION 3: Contact & Networking Details -->
            <section class="form-section" aria-labelledby="contact-heading">
                <div class="section-header">
                    <h2 class="section-title" id="contact-heading">
                        <span class="section-icon">🌐</span>
                        Contact & Networking Details
                    </h2>
                </div>

                <div class="fields-grid">
                    <div class="field">
                        <label for="mobile_number">Mobile Number <span class="required">*</span></label>
                        <input id="mobile_number" name="mobile_number" type="tel"
                            value="{{ old('mobile_number', $registration?->mobile_number) }}"
                            placeholder="e.g. 9876543210" autocomplete="tel" required>
                        @error('mobile_number')
                            <small class="field-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="email_address">Email Address <span class="required">*</span></label>
                        <input id="email_address" name="email_address" type="email"
                            value="{{ old('email_address', $registration?->email_address) }}"
                            placeholder="e.g. name@domain.com" autocomplete="email" required>
                        @error('email_address')
                            <small class="field-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="website_url">Website URL <span class="optional-tag">(Optional)</span></label>
                        <input id="website_url" name="website_url" type="url"
                            value="{{ old('website_url', $registration?->website_url) }}"
                            placeholder="https://example.com">
                        @error('website_url')
                            <small class="field-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="field">
                        <label for="business_profile">LinkedIn / Instagram / Social Profile <span
                                class="optional-tag">(Optional)</span></label>
                        <input id="business_profile" name="business_profile" type="text"
                            value="{{ old('business_profile', $registration?->business_profile) }}"
                            placeholder="Profile link or social handle">
                        @error('business_profile')
                            <small class="field-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="field field-full">
                        <span class="legend-label">Interested in <span class="required">*</span></span>
                        <div class="choice-list">
                            @foreach (['Networking', 'Referrals', 'Collaboration'] as $interest)
                                <label class="choice-item">
                                    <input type="checkbox" name="interested_in[]" value="{{ $interest }}"
                                        @checked(in_array($interest, old('interested_in', $registration?->interested_in ?? ['Networking', 'Referrals']), true))>
                                    <span>{{ $interest }}</span>
                                </label>
                            @endforeach
                        </div>
                        @error('interested_in')
                            <small class="field-error">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="field field-full">
                        <label for="preferred_contact_method">Preferred Contact Method <span
                                class="required">*</span></label>
                        <select id="preferred_contact_method" name="preferred_contact_method" required>
                            <option value="">Select Preferred Contact Method</option>
                            @foreach (['Phone', 'Email', 'WhatsApp'] as $method)
                                <option value="{{ $method }}" @selected(old('preferred_contact_method', $registration?->preferred_contact_method ?? 'WhatsApp') === $method)>
                                    {{ $method }}
                                </option>
                            @endforeach
                        </select>
                        @error('preferred_contact_method')
                            <small class="field-error">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
            </section>

            <!-- Form Submit Row -->
            <div class="form-actions">
                @if ($registration)
                    <a class="btn-cancel" href="{{ route('business-directory.admin') }}">Cancel</a>
                @endif
                <a class="btn-whatsapp" href="https://chat.whatsapp.com/GxxkxfrZU1c8YCsdrBAp4K" target="_blank"
                    rel="noopener noreferrer">
                    <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <path d="M20.3 11.6a8.3 8.3 0 0 1-12.4 7.2L3.7 20l1.2-4a8.3 8.3 0 1 1 15.4-4.4Z" />
                        <path
                            d="M9 8.5c.2-.4.4-.4.7-.4h.5c.2 0 .4.1.5.4l.7 1.7c.1.2.1.4 0 .6l-.5.6c-.1.1-.2.3-.1.4.4.7 1 1.3 1.7 1.7.2.1.3 0 .4-.1l.6-.7c.2-.2.4-.2.6-.1l1.7.8c.2.1.3.2.3.4 0 .3-.1.8-.4 1.1-.3.3-.7.5-1.1.5-.6 0-1.5-.3-2.7-1.1-1.4-.9-2.5-2.1-3.1-3.2-.6-.9-.8-1.6-.8-2.1 0-.4.2-.9.5-1.3Z" />
                    </svg>
                    Join the Veena Community 
                    
                    
                    / Refer Someone
                </a>
                <button type="submit" class="btn-submit">
                    {{ $registration ? 'Save Changes ✓' : 'Submit Registration ✓' }}
                </button>
            </div>
        </form>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // File input name preview indicators
            function bindFileInput(inputId, stripId) {
                const input = document.getElementById(inputId);
                const strip = document.getElementById(stripId);
                if (!input || !strip) return;

                input.addEventListener('change', function() {
                    if (this.files && this.files[0]) {
                        strip.style.display = 'flex';
                        strip.innerHTML = '<span>📎 Selected: <strong>' + this.files[0].name +
                            '</strong></span>';
                    }
                });
            }

            bindFileInput('your_image', 'your_image_name');
            bindFileInput('business_logo', 'business_logo_name');

            // Checkbox group validation on submit
            const form = document.getElementById('businessForm');
            if (form) {
                form.addEventListener('submit', function(event) {
                    const checkboxes = document.querySelectorAll('input[name="interested_in[]"]');
                    const isChecked = Array.from(checkboxes).some(cb => cb.checked);
                    if (!isChecked && checkboxes.length > 0) {
                        event.preventDefault();
                        checkboxes[0].setCustomValidity('Please select at least one networking interest.');
                        checkboxes[0].reportValidity();
                    } else if (checkboxes.length > 0) {
                        checkboxes[0].setCustomValidity('');
                    }
                });
            }
        });
    </script>
</body>

</html>
