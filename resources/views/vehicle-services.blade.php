<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Services - VSHPL</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            min-height: 100vh;
            position: relative;
            overflow-x: hidden;
        }

        /* Background Image with Overlay */
        .background-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(10, 25, 47, 0.85), rgba(15, 32, 63, 0.88)), 
                        url('https://s.alicdn.com/@sc02/kf/Hcd47f16faa5a4474b4c53aff9257adf6o.jpg') center/cover;
            z-index: -1;
            animation: fadeIn 0.8s ease-in;
        }

        /* Logo Section */
        .logo-container {
            padding: 2rem 5%;
            animation: slideDown 0.8s ease-out;
        }

        .logo {
            width: 100px;
            height: auto;
            filter: drop-shadow(0 2px 10px rgba(255, 255, 255, 0.3));
            transition: transform 0.3s ease;
        }

        .logo:hover {
            transform: scale(1.05);
        }

        /* Main Content */
        .main-content {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 70vh;
            padding: 1rem;
        }

        /* Registration Form */
        .registration-form {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            border-radius: 20px;
            padding: 2rem 1.5rem;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 900px;
            width: 100%;
            animation: slideUp 0.8s ease-out;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        /* Tabs - Mobile Optimized */
        .tabs {
            display: flex;
            gap: 0.5rem;
            margin-bottom: 2rem;
            border-bottom: 2px solid #e8eaed;
            padding-bottom: 0.75rem;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .tabs::-webkit-scrollbar {
            display: none;
        }

        .tab-button {
            flex: 0 0 auto;
            padding: 0.75rem 1.25rem;
            background: transparent;
            border: none;
            border-radius: 8px 8px 0 0;
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            font-family: 'Inter', sans-serif;
            white-space: nowrap;
        }

        .tab-button:hover {
            color: #53d6ff;
            background: rgba(100, 255, 218, 0.1);
        }

        .tab-button.active {
            color: #53d6ff;
            background: rgba(100, 255, 218, 0.15);
        }

        .tab-button.active::after {
            content: '';
            position: absolute;
            bottom: -0.75rem;
            left: 0;
            right: 0;
            height: 2px;
            background: #53d6ff;
        }

        /* Tab Content */
        .tab-content {
            display: none;
            animation: fadeIn 0.3s ease;
        }

        .tab-content.active {
            display: block;
        }

        .form-title {
            text-align: center;
            color: rgba(255, 255, 255, 0.95);
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            letter-spacing: -0.5px;
        }

        .form-subtitle {
            text-align: center;
            color: #53d6ff;
            font-size: 1rem;
            font-weight: 500;
            margin-bottom: 2rem;
            letter-spacing: 0.5px;
        }

        /* Form Groups - Mobile Optimized */
        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }

        .form-group label {
            display: block;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 600;
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            letter-spacing: 0.3px;
        }

        .form-input {
            width: 100%;
            padding: 1rem 1rem;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
            background: rgba(255, 255, 255, 0.2);
            color: rgba(255, 255, 255, 0.95);
        }

        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .form-input:focus {
            outline: none;
            border-color: #53d6ff;
            box-shadow: 0 0 0 4px rgba(100, 255, 218, 0.1);
            background: rgba(255, 255, 255, 0.3);
        }

        /* Select Styles */
        .form-select {
            width: 100%;
            padding: 1rem 1rem;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
            background: rgba(255, 255, 255, 0.2);
            cursor: pointer;
            color: rgba(255, 255, 255, 0.95);
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .form-select option {
            background-color: rgba(10, 25, 47, 0.9);
            color: rgba(255, 255, 255, 0.95);
        }

        .form-select:focus {
            outline: none;
            border-color: #53d6ff;
            box-shadow: 0 0 0 4px rgba(100, 255, 218, 0.1);
            background: rgba(255, 255, 255, 0.3);
        }

        /* Radio Buttons - Mobile Optimized */
        .radio-group {
            display: flex;
            gap: 1.5rem;
            margin-top: 0.5rem;
            flex-wrap: wrap;
        }

        .radio-label {
            display: flex;
            align-items: center;
            cursor: pointer;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .radio-label:hover {
            color: #53d6ff;
        }

        .radio-label input[type="radio"] {
            margin-right: 0.75rem;
            width: 20px;
            height: 20px;
            cursor: pointer;
            accent-color: #53d6ff;
        }

        /* Checkboxes - Mobile Optimized */
        .checkbox-group {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1rem;
            margin-top: 0.5rem;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            cursor: pointer;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
            transition: color 0.3s ease;
            padding: 0.75rem;
            background: rgba(100, 255, 218, 0.05);
            border-radius: 8px;
        }

        .checkbox-label:hover {
            color: #53d6ff;
            background: rgba(100, 255, 218, 0.1);
        }

        .checkbox-label input[type="checkbox"] {
            margin-right: 0.75rem;
            width: 20px;
            height: 20px;
            cursor: pointer;
            accent-color: #53d6ff;
        }

        /* File Upload - Mobile Optimized */
        .file-upload {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .file-upload-input {
            position: absolute;
            left: -9999px;
        }

        .file-upload-button {
            padding: 0.875rem 1.5rem;
            background: linear-gradient(135deg, #53d6ff 0%, #5eead4 100%);
            color: #0a192f;
            border: none;
            border-radius: 12px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
            width: 100%;
        }

        .file-upload-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(100, 255, 218, 0.6);
        }

        .file-name {
            margin-top: 0.5rem;
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.85rem;
            text-align: center;
        }

        /* Button Group - Mobile Optimized */
        .button-group {
            display: flex;
            gap: 0.75rem;
            margin-top: 2rem;
            flex-wrap: wrap;
        }

        /* Navigation Buttons */
        .nav-button {
            padding: 0.875rem 1.5rem;
            background: rgba(255, 255, 255, 0.2);
            color: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 12px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
            flex: 1;
            min-width: 120px;
        }

        .nav-button:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-2px);
        }

        /* Submit Button */
        .submit-btn {
            padding: 0.875rem 1.5rem;
            background: linear-gradient(135deg, #53d6ff 0%, #5eead4 100%);
            color: #0a192f;
            border: none;
            border-radius: 12px;
            font-size: 0.95rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: 'Inter', sans-serif;
            box-shadow: 0 4px 15px rgba(100, 255, 218, 0.4);
            flex: 1;
            min-width: 120px;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(100, 255, 218, 0.6);
            background: linear-gradient(135deg, #5eead4 0%, #53d6ff 100%);
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Responsive Design - Mobile First */
        @media (max-width: 768px) {
            .registration-form {
                padding: 1.5rem 1rem;
                margin: 0.5rem;
            }

            .form-title {
                font-size: 1.75rem;
            }

            .logo {
                width: 100px;
            }

            .logo-container {
                padding: 1.5rem 5%;
                text-align: center;
            }

            .tabs {
                gap: 0.5rem;
            }

            .tab-button {
                padding: 0.625rem 1rem;
                font-size: 0.85rem;
            }

            .radio-group {
                flex-direction: column;
                gap: 0.75rem;
            }

            .button-group {
                flex-direction: column;
            }

            .nav-button,
            .submit-btn {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .form-title {
                font-size: 1.5rem;
            }

            .form-subtitle {
                font-size: 0.9rem;
            }

            .main-content {
                padding: 0.5rem;
            }

            .form-input,
            .form-select {
                padding: 0.875rem;
                font-size: 0.95rem;
            }

            .checkbox-label {
                padding: 0.625rem;
                font-size: 0.9rem;
            }
        }

        /* Mobile Scroll Optimization */
        @media (max-width: 768px) {
            body {
                -webkit-overflow-scrolling: touch;
            }
        }
    </style>
</head>
<body>
    <div class="background-container"></div>

    <!-- Logo Section -->
    <div class="logo-container">
        <img src="{{ asset('assets/favicon.png') }}" alt="VSHPL Logo" class="logo">
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <form class="registration-form" action="#" method="POST" enctype="multipart/form-data">
            <h1 class="form-title">Vehicle Services</h1>
            <p class="form-subtitle">Register Your Vehicle for Building Access</p>

            <!-- Tabs -->
            <div class="tabs">
                <button class="tab-button active" onclick="showTab(0)">1. Resident Details</button>
                <button class="tab-button" onclick="showTab(1)">2. Vehicle Details</button>
                <button class="tab-button" onclick="showTab(2)">3. Service Type</button>
            </div>

            <!-- Resident Details Tab -->
            <div class="tab-content active" id="tab0">
                <div class="form-group">
                    <label for="fullName">Full Name *</label>
                    <input type="text" id="fullName" name="fullName" class="form-input" placeholder="Enter your full name" required>
                </div>

                <div class="form-group">
                    <label for="flatNumber">Flat / Apartment Number *</label>
                    <input type="text" id="flatNumber" name="flatNumber" class="form-input" placeholder="Enter your flat/apartment number" required>
                </div>

                <div class="form-group">
                    <label for="mobileNumber">Mobile Number *</label>
                    <input type="tel" id="mobileNumber" name="mobileNumber" class="form-input" placeholder="Enter your mobile number" required>
                </div>

                <div class="form-group">
                    <label for="email">Email ID (Optional)</label>
                    <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email address">
                </div>

                

                <div class="button-group">
                    <button type="button" class="submit-btn" onclick="showTab(1)">Next →</button>
                </div>
            </div>

            <!-- Vehicle Details Tab -->
            <div class="tab-content" id="tab1">
                <div class="form-group">
                    <label for="vehicleType">Vehicle Type *</label>
                    <select id="vehicleType" name="vehicleType" class="form-select" required>
                        <option value="">Select Vehicle Type</option>
                        <option value="car">Car</option>
                        <option value="bike">Bike</option>
                        <option value="scooter">Scooter</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="vehicleNumber">Vehicle Number (Registration No.) *</label>
                    <input type="text" id="vehicleNumber" name="vehicleNumber" class="form-input" placeholder="Enter vehicle registration number" required>
                </div>

                <div class="form-group">
                    <label for="vehicleModel">Vehicle Model & Company *</label>
                    <input type="text" id="vehicleModel" name="vehicleModel" class="form-input" placeholder="Enter vehicle model and company" required>
                </div>

                <div class="form-group">
                    <label for="vehicleColor">Vehicle Color *</label>
                    <input type="text" id="vehicleColor" name="vehicleColor" class="form-input" placeholder="Enter vehicle color" required>
                </div>

                <div class="form-group">
                    <label for="parkingSlot">Parking Slot Number (Optional)</label>
                    <input type="text" id="parkingSlot" name="parkingSlot" class="form-input" placeholder="Enter parking slot number">
                </div>

                

                <div class="button-group">
                    <button type="button" class="nav-button" onclick="showTab(0)">← Previous</button>
                    <button type="button" class="submit-btn" onclick="showTab(2)">Next →</button>
                </div>
            </div>

            <!-- Service Type Tab -->
            <div class="tab-content" id="tab2">
                <div class="form-group">
                    <label>🧼 Cleaning Services *</label>
                    <div class="checkbox-group" style="grid-template-columns: repeat(2, 1fr);">
                        <label class="checkbox-label">
                            <input type="checkbox" name="services[]" value="exterior-wash">
                            <span>Exterior Wash</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="services[]" value="interior-cleaning">
                            <span>Interior Cleaning</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="services[]" value="full-cleaning">
                            <span>Full Cleaning</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="services[]" value="dry-cleaning">
                            <span>Dry Cleaning</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="services[]" value="foam-wash">
                            <span>Foam Wash</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="services[]" value="waterless-wash">
                            <span>Waterless Wash</span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label>🛠 Maintenance Services *</label>
                    <div class="checkbox-group" style="grid-template-columns: repeat(2, 1fr);">
                        <label class="checkbox-label">
                            <input type="checkbox" name="services[]" value="general-service">
                            <span>General Service</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="services[]" value="engine-checkup">
                            <span>Engine Checkup</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="services[]" value="oil-change">
                            <span>Oil Change</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="services[]" value="brake-check">
                            <span>Brake Check</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="services[]" value="battery-check">
                            <span>Battery Check</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="services[]" value="ac-service">
                            <span>AC Service</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="services[]" value="wheel-alignment">
                            <span>Wheel Alignment</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="services[]" value="puncture-repair">
                            <span>Puncture Repair</span>
                        </label>
                    </div>
                </div>

                <div class="form-group">
                    <label>⚡ Other Services *</label>
                    <div class="checkbox-group" style="grid-template-columns: repeat(2, 1fr);">
                        <label class="checkbox-label">
                            <input type="checkbox" name="services[]" value="driver-entry">
                            <span>Driver Entry</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="services[]" value="pickup-drop">
                            <span>Pickup & Drop</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="services[]" value="ev-charging">
                            <span>EV Charging</span>
                        </label>
                        <label class="checkbox-label">
                            <input type="checkbox" name="services[]" value="other">
                            <span>Other (Mention)</span>
                        </label>
                    </div>
                </div>

                <div class="form-group" id="otherServiceField" style="display: none;">
                    <label for="otherService">Other Service Details</label>
                    <input type="text" id="otherService" name="otherService" class="form-input" placeholder="Please describe the service">
                </div>

                <div class="button-group">
                    <button type="button" class="nav-button" onclick="showTab(1)">← Previous</button>
                    <button type="submit" class="submit-btn">Submit Registration</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        // Tab functionality
        function showTab(tabIndex) {
            // Hide all tabs
            const tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(content => content.classList.remove('active'));
            
            // Remove active class from all buttons
            const tabButtons = document.querySelectorAll('.tab-button');
            tabButtons.forEach(button => button.classList.remove('active'));
            
            // Show selected tab
            document.getElementById(`tab${tabIndex}`).classList.add('active');
            tabButtons[tabIndex].classList.add('active');
        }

        // File upload functionality
        document.getElementById('rcCopy').addEventListener('change', function(e) {
            const fileName = e.target.files[0] ? e.target.files[0].name : 'No file chosen';
            document.getElementById('fileName').textContent = fileName;
        });

        // Other service field functionality
        const otherCheckbox = document.querySelector('input[value="other"]');
        const otherServiceField = document.getElementById('otherServiceField');
        
        if (otherCheckbox) {
            otherCheckbox.addEventListener('change', function() {
                otherServiceField.style.display = this.checked ? 'block' : 'none';
            });
        }

        // Mobile scroll optimization
        if ('ontouchstart' in window) {
            document.body.style.overflow = 'auto';
        }

        // Focus management for better mobile experience
        document.querySelectorAll('.form-input, .form-select').forEach(input => {
            input.addEventListener('focus', function() {
                window.setTimeout(() => {
                    this.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }, 300);
            });
        });
    </script>
</body>
</html>