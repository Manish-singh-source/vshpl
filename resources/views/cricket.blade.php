<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>VSH Cricket Premier League</title>
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Slick Carousel -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
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

        .btn {
            background-color: #374778;
            border-color: #374778;
        }

        /* Hero section: Full-screen with background image and overlay */
        .hero {
            height: 100vh;
            background-image: url('https://www.shutterstock.com/image-photo/neon-3d-image-cricket-stadium-600nw-2588682129.jpg');
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
            z-index: 0;
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
            border-radius:5px;
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
                width: 100px;
                top: 10px;
                left: 10px;
            }

            .mn {
                margin-top: 50px;
            }
        }

        label.form-check-label {
            color: #fff;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }

            100% {
                transform: scale(1);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .logo {
            animation: fadeIn 1s ease-out;
        }

        .btn-submit {
            animation: pulse 2s infinite;
        }

        .form-card {
            animation: slideInLeft 1s ease-out 0.5s both;
        }

        /* Player card 3D effect */
        .player-card {
            transform: perspective(1000px) rotateY(-10deg);
            transition: transform 0.3s ease;
        }

        .player-card:hover {
            transform: perspective(1000px) rotateY(0deg);
        }

        .player-card img {
            transform: rotateX(5deg) rotateY(5deg);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.4);
        }

        /* Fire-like text effect */
        .fire-text {
            background: linear-gradient(45deg, #ff4500, #ff6347, #ffd700);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 10px rgba(255, 69, 0, 0.8), 0 0 20px rgba(255, 69, 0, 0.6);
            font-weight: bold;
            font-size: 1.2rem;
            text-transform: uppercase;
        }
        .kj{
            z-index: 1;
        }
        a{
            text-decoration: none;
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <div class="hero">
        <!-- Logo in top right -->
        <img src="{{ asset('assets/cricket/logo1.jpeg') }}" class="logo" alt="Company Logo">
        <!-- Animated Cricket Elements -->

        <div class="container mn">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="player-slider">
                        <div style="margin-right: 15px;">
                            <div class="card player-card shadow" style="position: relative;">
                                <img src="{{ asset('assets/cricket/p1.png') }}" class="card-img-top" alt="Player Image">
                                <img src="https://sportspundit.com/system/data/8430/new_logo/1088-mumbai-indians.webp?1662030661"
                                    alt="Logo"
                                    style="position: absolute; top: 10px; right: 10px; width: 50px; height: auto; z-index: 1;">
                                <div class="card-body text-center">
                                    <h5 class="card-title fire-text">bhishma pratigya</h5>
                                    <button class="btn btn-primary mt-2" data-bs-toggle="modal"
                                        data-bs-target="#teamModal"><i class="fas fa-users"></i> My Team</button>
                                </div>
                            </div>
                        </div>
                        <div style="margin-right: 15px;">
                            <div class="card player-card shadow" style="position: relative;">
                                <img src="{{ asset('assets/cricket/p2.png') }}" class="card-img-top" alt="Player Image">
                                <img src="https://sportspundit.com/system/data/8430/new_logo/1088-mumbai-indians.webp?1662030661"
                                    alt="Logo"
                                    style="position: absolute; top: 10px; right: 10px; width: 50px; height: auto; z-index: 1;">
                                <div class="card-body text-center">
                                    <h5 class="card-title fire-text">arjun lakshya</h5>
                                    <button class="btn btn-primary mt-2" data-bs-toggle="modal"
                                        data-bs-target="#teamModal"><i class="fas fa-users"></i> My Team</button>
                                </div>
                            </div>
                        </div>
                        <div style="margin-right: 15px;">
                            <div class="card player-card shadow" style="position: relative;">
                                <img src="{{ asset('assets/cricket/p3.png') }}" class="card-img-top" alt="Player Image">
                                <img src="https://sportspundit.com/system/data/8430/new_logo/1088-mumbai-indians.webp?1662030661"
                                    alt="Logo"
                                    style="position: absolute; top: 10px; right: 10px; width: 50px; height: auto; z-index: 1;">
                                <div class="card-body text-center">
                                    <h5 class="card-title fire-text">krishna basuri</h5>
                                    <button class="btn btn-primary mt-2"><i class="fas fa-users"></i> My Team</button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card player-card shadow" style="position: relative;">
                                <img src="{{ asset('assets/cricket/p4.png') }}" class="card-img-top" alt="Player Image">
                                <img src="https://sportspundit.com/system/data/8430/new_logo/1088-mumbai-indians.webp?1662030661"
                                    alt="Logo"
                                    style="position: absolute; top: 10px; right: 10px; width: 50px; height: auto; z-index: 1;">
                                <div class="card-body text-center">
                                    <h5 class="card-title fire-text">karna kundal</h5>
                                    <button class="btn btn-primary mt-2"><i class="fas fa-users"></i> My Team</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 kj">
                    <!-- Footer -->
                    <footer class=" text-white text-center py-4">
                        <div class="container">
                            <p class="mb-2">Phone: 123-456-7890 | 098-765-4321 | 111-222-3333 | 444-555-6666</p>
                            <p class="mb-0"><a href="mailto:info@veenasmarthomes.com">info@veenasmarthomes.com</a> | <a href="https://veenasmarthomes.com/" target="_blank">www.veenasmarthomes.com</a></p>
                        </div>
                    </footer>
                </div>
            </div>

        </div>

    </div>



    <!-- Team Modal -->
    <div class="modal fade" id="teamModal" tabindex="-1" aria-labelledby="teamModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="teamModalLabel">My Team</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <h6>Team Captain</h6>
                            <img src="{{ asset('assets/cricket/team.png') }}" class="img-fluid" alt="Team Captain" style="max-width: 200px;">
                        </div>
                        <div class="col-md-6">
                            <h6>Team Members</h6>
                            <div class="row">
                                <div class="col-4 mb-3 text-center">
                                    <img src="{{ asset('assets/cricket/p1.png') }}" class="rounded-circle" style="width: 50px; height: 50px;"
                                        alt="Player">
                                    <p class="mt-2" style="font-size: 14px;">Player 1</p>
                                </div>
                                <div class="col-4 mb-3 text-center">
                                    <img src="{{ asset('assets/cricket/p2.png') }}" class="rounded-circle" style="width: 50px; height: 50px;"
                                        alt="Player">
                                    <p class="mt-2" style="font-size: 14px;">Player 2</p>
                                </div>
                                <div class="col-4 mb-3 text-center">
                                    <img src="{{ asset('assets/cricket/p1.png') }}" class="rounded-circle" style="width: 50px; height: 50px;"
                                        alt="Player">
                                    <p class="mt-2" style="font-size: 14px;">Player 3</p>
                                </div>
                                <div class="col-4 mb-3 text-center">
                                    <img src="{{ asset('assets/cricket/p2.png') }}" class="rounded-circle" style="width: 50px; height: 50px;"
                                        alt="Player">
                                    <p class="mt-2" style="font-size: 14px;">Player 4</p>
                                </div>
                                <div class="col-4 mb-3 text-center">
                                    <img src="{{ asset('assets/cricket/p1.png') }}" class="rounded-circle" style="width: 50px; height: 50px;"
                                        alt="Player">
                                    <p class="mt-2" style="font-size: 14px;">Player 5</p>
                                </div>
                                <div class="col-4 mb-3 text-center">
                                    <img src="{{ asset('assets/cricket/p2.png') }}" class="rounded-circle" style="width: 50px; height: 50px;"
                                        alt="Player">
                                    <p class="mt-2" style="font-size: 14px;">Player 6</p>
                                </div>
                                <div class="col-4 mb-3 text-center">
                                    <img src="{{ asset('assets/cricket/p1.png') }}" class="rounded-circle" style="width: 50px; height: 50px;"
                                        alt="Player">
                                    <p class="mt-2" style="font-size: 14px;">Player 7</p>
                                </div>
                                <div class="col-4 mb-3 text-center">
                                    <img src="{{ asset('assets/cricket/p2.png') }}" class="rounded-circle" style="width: 50px; height: 50px;"
                                        alt="Player">
                                    <p class="mt-2" style="font-size: 14px;">Player 8</p>
                                </div>
                                <div class="col-4 mb-3 text-center">
                                    <img src="{{ asset('assets/cricket/p1.png') }}" class="rounded-circle" style="width: 50px; height: 50px;"
                                        alt="Player">
                                    <p class="mt-2" style="font-size: 14px;">Player 9</p>
                                </div>
                                <div class="col-4 mb-3 text-center">
                                    <img src="{{ asset('assets/cricket/p2.png') }}" class="rounded-circle" style="width: 50px; height: 50px;"
                                        alt="Player">
                                    <p class="mt-2" style="font-size: 14px;">Player 10</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery, Bootstrap and Slick JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.player-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        });
    </script>

</body>

</html>