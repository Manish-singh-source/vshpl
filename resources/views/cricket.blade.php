<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>VSH Cricket Premier League</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}">
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            padding: 1.5rem;
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
        .pt-50{
            padding-top: 10%;
        }
        
        /* Team logo positioning at bottom of card */
        .team-logo-container {
            position: absolute;
            bottom: 117px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            z-index: 2;
            background: linear-gradient(to top, rgba(255,255,255,0.9), transparent);
        }
        
        .team-logo-container img {
            padding: 2px;
            width: 100%;
            height: auto;
            border-radius: 6px;
        }
        
        /* Player card with overflow hidden for logo */
        .player-card {
            overflow: hidden;
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <div class="hero">
        <!-- Logo in top right -->
        <img src="{{ asset('assets/cricket/png.png') }}" class="logo" alt="Company Logo">
        <!-- Animated Cricket Elements -->

        <div class="container mn">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="player-slider pt-50">
                        <div style="margin-right: 15px;">
                            <div class="card player-card shadow">
                                <img src="{{ asset('assets/cricket/Untitled design (41).png') }}" class="card-img-top" alt="Player Image">
                                <div class="team-logo-container">
                                    <img src="{{ asset('assets/cricket/l4.jpeg') }}" alt="Logo">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fire-text">HANUMANJI KI SENA</h5>
                                    <button class="btn btn-primary mt-2 view-team-btn" data-bs-toggle="modal"
                                        data-bs-target="#teamModal1" data-group="group1"><i class="fas fa-users"></i> My Team</button>
                                </div>
                            </div>
                        </div>
                        <div style="margin-right: 15px;">
                            <div class="card player-card shadow">
                                <img src="{{ asset('assets/cricket/Untitled design 42.png') }}" class="card-img-top" alt="Player Image">
                                <div class="team-logo-container">
                                    <img src="{{ asset('assets/cricket/l1.jpeg') }}" alt="Logo">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fire-text">ARJUN LAKSHYA</h5>
                                    <button class="btn btn-primary mt-2 view-team-btn" data-bs-toggle="modal"
                                        data-bs-target="#teamModal2" data-group="group2"><i class="fas fa-users"></i> My Team</button>
                                </div>
                            </div>
                        </div>
                        <div style="margin-right: 15px;">
                            <div class="card player-card shadow">
                                <img src="{{ asset('assets/cricket/Untitled design (43).png') }}" class="card-img-top" alt="Player Image">
                                <div class="team-logo-container">
                                    <img src="{{ asset('assets/cricket/l3.jpeg') }}" alt="Logo">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fire-text">VANAR SENA</h5>
                                    <button class="btn btn-primary mt-2 view-team-btn" data-bs-toggle="modal"
                                        data-bs-target="#teamModal3" data-group="group3"><i class="fas fa-users"></i> My Team</button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card player-card shadow">
                                <img src="{{ asset('assets/cricket/Untitled design (44).png') }}" class="card-img-top" alt="Player Image">
                                <div class="team-logo-container">
                                    <img src="{{ asset('assets/cricket/l2.jpeg') }}" alt="Logo">
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title fire-text">KRISHNA AVENGERS</h5>
                                    <button class="btn btn-primary mt-2 view-team-btn" data-bs-toggle="modal"
                                        data-bs-target="#teamModal4" data-group="group4"><i class="fas fa-users"></i> My Team</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 kj mt-5">
                    <!-- Join Form Section -->
                    <div class="join-form-section mb-4">
                        <div class="card form-card" style="background: rgba(255, 255, 255, 0.9); max-width: 900px; margin: 0 auto;">
                            <h4 class="text-center mb-4" style="color: #374778; font-weight: 600;">
                                <i class="fas fa-user-plus me-2"></i>Join Our Cricket League
                            </h4>
                            <p class="text-center">Upload Your Profile Image to Get Started</p>
                            <form id="joinForm">
                                @csrf
                                <div class="row g-3 align-items-end">
                                    <div class="col-md-3">
                                        {{-- <label for="groupName" class="form-label" style="color: #374778; font-weight: 500;">
                                            <i class="fas fa-users me-2"></i>Group Name
                                        </label> --}}
                                        <select class="form-select" id="groupName" name="group_name" style="border-radius: 10px; border: 1px solid #ddd; padding: 0.75rem;" required>
                                            <option value="">Select Team</option>
                                            <option value="group1">HANUMANJI KI SENA</option>
                                            <option value="group2">ARJUN LAKSHYA</option>
                                            <option value="group3">VANAR SENA</option>
                                            <option value="group4">KRISHNA AVENGERS</option>
                                        </select>

                                    </div>
                                    <div class="col-md-3">
                                        {{-- <label for="userName" class="form-label" style="color: #374778; font-weight: 500;">
                                            <i class="fas fa-user me-2"></i>User Name
                                        </label> --}}
                                        <input type="text" class="form-control" id="userName" name="user_name" 
                                            placeholder="Enter your name" 
                                            style="border-radius: 10px; border: 1px solid #ddd; padding: 0.75rem;" required>
                                    </div>
                                    <div class="col-md-3">
                                        {{-- <label for="profileImage" class="form-label" style="color: #374778; font-weight: 500;">
                                            <i class="fas fa-image me-2"></i>Profile Image
                                        </label> --}}
                                        <input type="file" class="form-control" id="profileImage" name="profile_image" 
                                            accept="image/*" 
                                            style="border-radius: 10px; border: 1px solid #ddd; padding: 0.75rem;">
                                    </div>
                                    <div class="col-md-3">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-submit w-100" style="background: linear-gradient(135deg, #374778 0%, #2a3a5c 100%); border-radius: 10px; padding: 0.75rem; font-size: 1rem; font-weight: 600; color: white; margin-top: 10px;">
                                                <i class="fas fa-check-circle me-2"></i>Join
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    <!-- Footer -->
                    <footer class=" text-white text-center py-4">
                        <div class="container">
                            {{-- <p class="mb-2">Phone: 123-456-7890 | 098-765-4321 | 111-222-3333 | 444-555-6666</p> --}}
                            <p class="mb-0"><a href="mailto:info@veenasmarthomes.com">info@veenasmarthomes.com</a> | <a href="https://veenasmarthomes.com/" target="_blank">www.veenasmarthomes.com</a></p>
                        </div>
                    </footer>
                </div>
            </div>

        </div>

    </div>



    <!-- Team Modal 1 - HANUMANJI KI SENA -->
    <div class="modal fade" id="teamModal1" tabindex="-1" aria-labelledby="teamModal1Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="teamModal1Label">HANUMANJI KI SENA - Team Members</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <h6>Team Captain</h6>
                            <img src="{{ asset('assets/cricket/Untitled design (41).png') }}" class="img-fluid" alt="Team Captain" style="max-width: 150px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                            <p class="mt-2" style="color: #374778; font-weight: 500;">Team Leader</p>
                        </div>
                        <div class="col-md-8">
                            <h6>Team Members</h6>
                            <div class="row" id="teamMembers1">
                                <!-- Team members will be loaded here dynamically -->
                                <div class="col-12 text-center py-4">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Modal 2 - ARJUN LAKSHYA -->
    <div class="modal fade" id="teamModal2" tabindex="-1" aria-labelledby="teamModal2Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="teamModal2Label">ARJUN LAKSHYA - Team Members</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <h6>Team Captain</h6>
                            <img src="{{ asset('assets/cricket/Untitled design 42.png') }}" class="img-fluid" alt="Team Captain" style="max-width: 150px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                            <p class="mt-2" style="color: #374778; font-weight: 500;">Team Leader</p>
                        </div>
                        <div class="col-md-8">
                            <h6>Team Members</h6>
                            <div class="row" id="teamMembers2">
                                <!-- Team members will be loaded here dynamically -->
                                <div class="col-12 text-center py-4">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Modal 3 - VANAR SENA -->
    <div class="modal fade" id="teamModal3" tabindex="-1" aria-labelledby="teamModal3Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="teamModal3Label">VANAR SENA - Team Members</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <h6>Team Captain</h6>
                            <img src="{{ asset('assets/cricket/Untitled design (43).png') }}" class="img-fluid" alt="Team Captain" style="max-width: 150px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                            <p class="mt-2" style="color: #374778; font-weight: 500;">Team Leader</p>
                        </div>
                        <div class="col-md-8">
                            <h6>Team Members</h6>
                            <div class="row" id="teamMembers3">
                                <!-- Team members will be loaded here dynamically -->
                                <div class="col-12 text-center py-4">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Team Modal 4 - KRISHNA AVENGERS -->
    <div class="modal fade" id="teamModal4" tabindex="-1" aria-labelledby="teamModal4Label" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="teamModal4Label">KRISHNA AVENGERS - Team Members</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4 text-center">
                            <h6>Team Captain</h6>
                            <img src="{{ asset('assets/cricket/Untitled design (44).png') }}" class="img-fluid" alt="Team Captain" style="max-width: 150px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
                            <p class="mt-2" style="color: #374778; font-weight: 500;">Team Leader</p>
                        </div>
                        <div class="col-md-8">
                            <h6>Team Members</h6>
                            <div class="row" id="teamMembers4">
                                <!-- Team members will be loaded here dynamically -->
                                <div class="col-12 text-center py-4">
                                    <div class="spinner-border text-primary" role="status">
                                        <span class="visually-hidden">Loading...</span>
                                    </div>
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

        // Handle View Team Button Click
        $(document).on('click', '.view-team-btn', function() {
            var groupName = $(this).data('group');
            var modalId = $(this).data('bs-target');
            var teamMembersContainer = $(modalId).find('.modal-body .row[id^="teamMembers"]');
            
            // Show loading spinner
            teamMembersContainer.html('<div class="col-12 text-center py-4"><div class="spinner-border text-primary" role="status"><span class="visually-hidden">Loading...</span></div></div>');
            
            // Fetch team members from server
            $.ajax({
                url: '{{ route("team.members") }}',
                type: 'GET',
                data: { group_name: groupName },
                success: function(response) {
                    if (response.success && response.data.length > 0) {
                        var membersHtml = '';
                        response.data.forEach(function(member, index) {
                            var profileImage = member.profile_image ? 
                                '{{ asset('') }}' + member.profile_image : 
                                '{{ asset('assets/cricket/team.png') }}';
                            
                            membersHtml += '<div class="col-3 mb-3 text-center">' +
                                '<img src="' + profileImage + '" class="rounded-circle" style="width: 70px; height: 70px; object-fit: cover; border: 2px solid #374778; box-shadow: 0 2px 4px rgba(0,0,0,0.1);"' +
                                'alt="' + member.user_name + '">' +
                                '<p class="mt-2" style="font-size: 13px; color: #374778; font-weight: 500; margin-bottom: 0;">' + member.user_name + '</p>' +
                                '</div>';
                        });
                        teamMembersContainer.html(membersHtml);
                    } else {
                        teamMembersContainer.html('<div class="col-12 text-center py-4"><p class="text-muted">No members found in this team yet.</p></div>');
                    }
                },
                error: function() {
                    teamMembersContainer.html('<div class="col-12 text-center py-4"><p class="text-danger">Error loading team members.</p></div>');
                }
            });
        });

        // Handle Join Form Submission
        $('#joinForm').on('submit', function(e) {
            e.preventDefault();
            
            var formData = new FormData(this);
            var submitBtn = $(this).find('button[type="submit"]');
            var originalBtnText = submitBtn.html();
            
            submitBtn.prop('disabled', true).html('<i class="fas fa-spinner fa-spin me-2"></i>Joining...');
            
            $.ajax({
                url: '{{ route("team.join") }}',
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success!',
                            text: response.message,
                            timer: 3000,
                            showConfirmButton: false
                        });
                        $('#joinForm')[0].reset();
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error!',
                            text: response.message
                        });
                    }
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: xhr.responseJSON?.message || 'Something went wrong!'
                    });
                },
                complete: function() {
                    submitBtn.prop('disabled', false).html(originalBtnText);
                }
            });
        });
    </script>

</body>

</html>