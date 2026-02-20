<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Registration Veena Smart Homes</title>
    <link rel="icon" href="{{ asset('assets/main.png') }}" type="image/png">
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
            background: linear-gradient(rgba(10, 25, 47, 0.62), rgba(15, 32, 63, 0.66)), 
                        url('https://housing-images.n7net.in/4f2250e8/7447c915f230fc0358675273b38911e2/v0/medium/veena_smart_homes-kandivali_west-mumbai-veena_developers.jpeg') center/cover;
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

        /* Form Title */
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
            width: 100%;
            margin-top: 2rem;
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
        }

        /* Mobile Scroll Optimization */
        @media (max-width: 768px) {
            body {
                -webkit-overflow-scrolling: touch;
            }
        }
    
        .site-credit {
            position: fixed;
            right: 12px;
            bottom: 10px;
            z-index: 20;
            font-size: 12px;
            color: #1f2a44;
            background: rgba(255, 255, 255, 0.78);
            border: 1px solid rgba(255, 255, 255, 0.95);
            padding: 6px 11px 5px;
            border-radius: 12px;
            backdrop-filter: blur(4px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.18);
            font-weight: 500;
            line-height: 1.2;
        }

        .site-credit a {
            color: #036;
            font-weight: 700;
            text-decoration: none;
        }

        .site-credit .tagline {
            display: block;
            margin-top: 4px;
            padding-top: 4px;
            border-top: 1px solid rgba(0, 51, 102, 0.25);
            font-size: 9px;
            font-weight: 700;
            color: #036;
            letter-spacing: .7px;
            text-transform: uppercase;
            background: linear-gradient(90deg, #036 0%, #00d0ff 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        @media (max-width: 768px) {
            .site-credit {
                font-size: 11px;
                right: 8px;
                bottom: 8px;
            }
        }
    </style>
</head>
<body>
    <div class="background-container"></div>

    <!-- Logo Section -->
    <div class="logo-container">
        <img src="{{ asset('assets/main.png') }}" alt="VSHPL Logo" class="logo">
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <form class="registration-form" action="{{ route('vehicle.services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @if(session('success'))
                <div style="background: rgba(76, 175, 80, 0.8); color: white; padding: 1rem; border-radius: 12px; margin-bottom: 1.5rem; text-align: center; font-weight: 600;">
                    {{ session('success') }}
                </div>
            @endif
            @if($errors->any())
                <div style="background: rgba(244, 67, 54, 0.85); color: white; padding: 1rem; border-radius: 12px; margin-bottom: 1.5rem; text-align: center; font-weight: 600;">
                    {{ $errors->first() }}
                </div>
            @endif
            <h1 class="form-title">Vehicle Registration </h1>
            <p class="form-subtitle">Register Your Vehicle for Building Parking</p>

            <!-- Single Form with All Fields -->
             <div class="form-group">
                <label for="wing">Select Wing *</label>
                <select id="wing" name="wing" class="form-select" required>
                    <option value="">Select Wing</option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
                    <option value="e">E</option>
                </select>
            </div>
 <div class="form-group">
                <label for="flatNumber">Flat / Apartment Number *</label>
                <input type="text" id="flatNumber" name="flatNumber" class="form-input" placeholder="Enter your flat/apartment number" required>
            </div>

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
                <input type="text" id="vehicleNumber" name="vehicleNumber" class="form-input" placeholder="Enter vehicle registration number" value="{{ old('vehicleNumber') }}" required>
                @error('vehicleNumber')
                    <small style="color: #ffb3b3; display: block; margin-top: 0.5rem; font-weight: 600;">
                        {{ $message }}
                    </small>
                @enderror
            </div>

            <div class="form-group">
                <label for="fullName">Full Name *</label>
                <input type="text" id="fullName" name="fullName" class="form-input" placeholder="Enter your full name" required>
            </div>

           
            <div class="form-group">
                <label for="mobileNumber">Mobile Number *</label>
                <input type="tel" id="mobileNumber" name="mobileNumber" class="form-input" placeholder="Enter your mobile number" required>
            </div>

            <div class="form-group">
                <label for="email">Email ID (Optional)</label>
                <input type="email" id="email" name="email" class="form-input" placeholder="Enter your email address">
            </div>

           

           

            <button type="submit" class="submit-btn">Submit Registration</button>
        </form>
    </div>

    <script>
        // Focus management for better mobile experience
        document.querySelectorAll('.form-input, .form-select').forEach(input => {
            input.addEventListener('focus', function() {
                window.setTimeout(() => {
                    this.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }, 300);
            });
        });
    </script>
    <div class="site-credit">
        Designed by <a href="https://technofra.com/" target="_blank">Technofra</a>
        <span class="tagline">Web Presence &amp; Branding</span>
    </div>
</body>
</html>

