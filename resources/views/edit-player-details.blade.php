<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Edit Player Details</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/main.png') }}">
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Custom CSS for responsive, premium UI */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            /* Prevent horizontal scroll */
        }

        .nav-link {
            color: #fff;
        }

        .nav-link:hover {
            color: #fff;
        }

        /* Hero section: Full-screen with background image and overlay */
        .hero {
            height: 100vh;
            background-image: url('https://www.shutterstock.com/image-photo/generate-image-background-inspired-by-600nw-2600403503.jpg');
            /* High-quality placeholder image */
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            /* Parallax effect for premium feel */
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Dark transparent overlay */
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.4);
            /* Adjustable opacity for dimming */
            z-index: 1;
        }

        /* Form card: Glassmorphism style, centered */
        .form-card {
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, 0.226);
            /* Semi-transparent white for glassmorphism */
            backdrop-filter: blur(15px);
            /* Blur effect for glassmorphism */
            -webkit-backdrop-filter: blur(15px);
            /* Safari support */
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            /* Soft shadow */
            padding: 2.5rem;
            /* max-width: 500px;
            width: 100%; */
            border: 1px solid rgba(255, 255, 255, 0.2);
            /* Subtle border for glass effect */
        }

        /* Form styling */
        .form-card h2 {
            color: #fff;
            font-weight: 600;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .form-label {
            font-weight: 500;
            color: #ffffff;
        }

        .form-control {
            border-radius: 10px;
            border: 1px solid #ddd;
            padding: 0.75rem;
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        }

        /* Submit button with smooth hover effects */
        .btn-submit {
            background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
            border: none;
            border-radius: 10px;
            padding: 0.75rem 1.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            transition: all 0.3s ease;
            width: 100%;
            margin-top: 15px;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0, 123, 255, 0.4);
            background: linear-gradient(135deg, #0056b3 0%, #004085 100%);
        }

        /* Logo styling */
        .logo {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 100px;
            height: auto;
            z-index: 3;
            filter: drop-shadow(0 2px 5px rgba(0, 0, 0, 0.3));
            /* Subtle shadow for visibility */
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .form-card {
                padding: 2rem;
                margin: 1rem;
            }

            .hero {
                background-attachment: scroll;
                /* Disable fixed attachment on mobile for performance */
            }

            .logo {
                width: 160px;
                top: 15px;
                left: 15px;
            }

            .nav-tabs {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .form-card {
                padding: 1.5rem;
                margin: 0.5rem;
            }

            .logo {
                width: 160px;
                top: 10px;
                left: 10px;
            }

            .mn {
                margin-top: 30px;
            }
        }

        label.form-check-label {
            color: #fff;
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
    <!-- Hero Section -->
    <div class="hero">
        <!-- Logo in top right -->
        <img src="{{ asset('assets/logo1.png') }}" class="logo" alt="Company Logo">
        <div class="container mn">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    <!-- Form Card -->
                    <div class="form-card">
                        <h2>Edit Player Details</h2>
                        <form action="{{ route('edit.registration') }}" method="POST" id="loginForm">
                            @csrf
                            <!-- Nav tabs -->
                            <div class="mb-3">
                                <label for="wing" class="form-label">Wing Name</label>
                                <input type="text" class="form-control" id="wing" name="wing"
                                    placeholder="Enter your wing" required>
                            </div>
                            <div class="mb-3">
                                <label for="house_number" class="form-label">Flat No</label>
                                <input type="text" class="form-control" id="house_number" name="house_number"
                                    placeholder="Enter your flat/house number" required>
                            </div>
                            <button type="submit" class="btn-submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-credit">
        Designed by <a href="https://technofra.com/" target="_blank">Technofra</a>
        <span class="tagline">Web Presence &amp; Branding</span>
    </div>
</body>

</html>

