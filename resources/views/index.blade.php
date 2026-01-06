<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>VSH Player Registration Form</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.png">
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
        .nav-link:hover{
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
            .mn{
                margin-top: 30px;
            }
        }
        label.form-check-label {
    color: #fff;
}
    </style>
</head>

<body>
    <!-- Hero Section -->
    <div class="hero">
        <!-- Logo in top right -->
        <img src="assets/logo1.png"
            class="logo" alt="Company Logo">
        <div class="container mn">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                    <!-- Form Card -->
                    <div class="form-card">
                        <h2>Player Registration</h2>
                        <form action="/register" method="POST" id="registrationForm">
                            @csrf
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs justify-content-center mb-4" id="registrationTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="basic-tab" data-bs-toggle="tab"
                                        data-bs-target="#basic" type="button" role="tab" aria-controls="basic"
                                        aria-selected="true">Basic Details</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="player-tab" data-bs-toggle="tab"
                                        data-bs-target="#player" type="button" role="tab" aria-controls="player"
                                        aria-selected="false">Player Information</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="declaration-tab" data-bs-toggle="tab"
                                        data-bs-target="#declaration" type="button" role="tab"
                                        aria-controls="declaration" aria-selected="false">Declaration</button>
                                </li>
                            </ul>
                            <!-- Tab content -->
                            <div class="tab-content" id="registrationTabsContent">
                                <!-- Basic Details Tab -->
                                <div class="tab-pane fade show active" id="basic" role="tabpanel"
                                    aria-labelledby="basic-tab">
                                    <!-- Full Name -->
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="fullName" name="full_name"
                                            placeholder="Enter your full name" required>
                                    </div>
                                    <!-- Flat / House Number -->
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="houseNumber" name="house_number"
                                            placeholder="Enter your flat/house number" required>
                                    </div>
                                    <!-- Wing -->
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="wing" name="wing" placeholder="Enter your wing"
                                            required>
                                    </div>
                                    <!-- Contact Number (Mobile) -->
                                    <div class="mb-3">
                                        <input type="tel" class="form-control" id="contactNumber" name="contact_number"
                                            placeholder="Enter your mobile number" required>
                                    </div>
                                    <!-- Email ID (optional) -->
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Enter your email">
                                    </div>
                                    <!-- Next Button -->
                                    <button class="btn btn-outline-light d-block mt-3" id="nextToPlayer">
                                        Next <i class="fas fa-arrow-right"></i>
                                    </button>
                                </div>
                                <!-- Player Information Tab -->
                                <div class="tab-pane fade" id="player" role="tabpanel" aria-labelledby="player-tab">
                                    <!-- Team Category -->
                                    <div class="mb-3">
                                        <label class="form-label">Team Category</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="team_category" id="men"
                                                value="Men" required>
                                            <label class="form-check-label" for="men">
                                                Men
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="team_category" id="women"
                                                value="Women" required>
                                            <label class="form-check-label" for="women">
                                                Women
                                            </label>
                                        </div>
                                    </div>
                                    <!-- Player Roles -->
                                    <div class="mb-3">
                                        <label class="form-label">Player Roles (Select all that apply)</label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="batsman" name="roles"
                                                value="Batsman">
                                            <label class="form-check-label" for="batsman">
                                                Batsman
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="bowler" name="roles"
                                                value="Bowler">
                                            <label class="form-check-label" for="bowler">
                                                Bowler
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="allrounder" name="roles"
                                                value="All-rounder">
                                            <label class="form-check-label" for="allrounder">
                                                All-rounder
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="wicketkeeper"
                                                name="roles" value="Wicket-keeper">
                                            <label class="form-check-label" for="wicketkeeper">
                                                Wicket-keeper
                                            </label>
                                        </div>
                                    </div>
                                    <!-- Navigation Buttons -->
                                    <div class="d-block mt-3 text-center">
                                        <button class="btn btn-outline-light me-2" id="prevToBasic">
                                            <i class="fas fa-arrow-left"></i> Previous
                                        </button>
                                        <button class="btn btn-outline-light" id="nextToDeclaration">
                                            Next <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                                <!-- Declaration Tab -->
                                <div class="tab-pane fade" id="declaration" role="tabpanel"
                                    aria-labelledby="declaration-tab">
                                    <!-- Agreement Checkbox -->
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="agreement" name="agreement" required>
                                            <label class="form-check-label" for="agreement">
                                                I agree to follow society and tournament rules
                                            </label>
                                        </div>
                                    </div>
                                    <!-- Previous Button -->
                                    <button class="btn btn-outline-light d-block mt-3 me-2" id="prevToPlayer">
                                        <i class="fas fa-arrow-left"></i> Previous
                                    </button>
                                    <!-- Submit Button -->
                                    <button type="button" id="registerBtn" class="btn-submit">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Thank You Modal -->
    <div class="modal fade" id="thankYouModal" tabindex="-1" aria-labelledby="thankYouModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="thankYouModalLabel">Thank You!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <p>Thank you for registering!</p>
                    <button class="btn btn-primary mt-3" id="showQrBtn">Proceed</button>
                </div>
            </div>
        </div>
    </div>

    <!-- QR Modal -->
    <div class="modal fade" id="qrModal" tabindex="-1" aria-labelledby="qrModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="qrModalLabel">Scan and Pay</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="assets/qr.png" alt="QR Code" style="max-width: 200px;">
                    <br>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
$(document).ready(function() {

    // Next to Player
    $('#nextToPlayer').on('click', function() {
        $('#player-tab').click();
    });

    // Previous to Basic
    $('#prevToBasic').on('click', function() {
        $('#basic-tab').click();
    });

    // Next to Declaration
    $('#nextToDeclaration').on('click', function() {
        $('#declaration-tab').click();
    });

    // Previous to Player
    $('#prevToPlayer').on('click', function() {
        $('#player-tab').click();
    });

    // Register Button Click
    $('#registerBtn').on('click', function(e) {
        e.preventDefault();

        // Collect form data
        var formData = new FormData($('#registrationForm')[0]);

        console.log(formData);

        // Handle player roles
        var roles = [];
        $('input[name="roles"]:checked').each(function() {
            roles.push($(this).val());
        });
        formData.set('player_roles', roles.join(', '));

        // Handle agreement
        formData.set('agreement', $('#agreement').is(':checked') ? 1 : 0);

        // Submit via AJAX
        $.ajax({
            url: '/vshpl/register',
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(data) {
                console.log(data);
                if (data.success) {
                    var thankYouModal = new bootstrap.Modal($('#thankYouModal')[0]);
                    thankYouModal.show();
                }
            },
            error: function(err) {
                console.error('Error:', err);
            }
        });
    });

    // Show QR Modal on Proceed
    $('#showQrBtn').on('click', function() {
        var thankYouModal = bootstrap.Modal.getInstance($('#thankYouModal')[0]);
        thankYouModal.hide();
        var qrModal = new bootstrap.Modal($('#qrModal')[0]);
        qrModal.show();
    });

});
</script>
<script>
document.getElementById("fullName").addEventListener("input", function () {
    this.value = this.value
        .toLowerCase()
        .replace(/\b\w/g, function (char) {
            return char.toUpperCase();
        });
});
</script>
<script>
document.getElementById("wing").addEventListener("input", function () {
    this.value = this.value.toUpperCase();
});
</script>
</body>

</html>