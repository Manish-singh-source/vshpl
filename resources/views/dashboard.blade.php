<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}">
    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!-- FontAwesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.6/css/dataTables.dataTables.css">
    <style>
        /* Custom CSS for responsive, premium UI */
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .nav-link {
            color: #fff;
        }

        .nav-link:hover {
            color: #fff;
        }

        /* Hero section: Full-screen with background image and overlay */
        .hero {
            min-height: 100vh;
            background-image: url('https://www.shutterstock.com/image-photo/generate-image-background-inspired-by-600nw-2600403503.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
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
            z-index: 1;
        }

        /* Table card: Glassmorphism style, centered */
        .table-card {
            position: relative;
            z-index: 2;
            background: rgba(255, 255, 255, 0.226);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            padding: 2.5rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Table styling */
        .table-card h2 {
            color: #fff;
            font-weight: 600;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .table {
            color: #fff;
        }

        .table th {
            background-color: rgba(0, 123, 255, 0.5);
            color: #fff;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .table td {
            border: 1px solid rgba(255, 255, 255, 0.2);
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
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .table-card {
                padding: 2rem;
                margin: 1rem;
            }

            .hero {
                background-attachment: scroll;
            }

            .logo {
                width: 160px;
                top: 15px;
                left: 15px;
            }
        }

        @media (max-width: 576px) {
            .table-card {
                padding: 1.5rem;
                margin: 0.5rem;
            }

            .logo {
                width: 160px;
                top: 10px;
                left: 10px;
            }
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <div class="hero">
        <!-- Logo in top right -->
        <img src="{{ asset('assets/logo1.png') }}" class="logo" alt="Company Logo">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <!-- Table Card -->
                    <div class="table-card">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2>Player Dashboard</h2>
                            <a href="{{ route('export.registrations.list') }}" class="btn btn-primary">Download as
                                CSV</a>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Profile Image</th>
                                        <th>Reservation Code</th>
                                        <th>Full Name</th>
                                        <th>Flat No</th>
                                        <th>Wing</th>
                                        <th>Contact No</th>
                                        <th>Email</th>
                                        <th>Team Category</th>
                                        <th>Player Roles</th>
                                        <th>T-Shirt Size</th>
                                        <th>Agreement</th>
                                        <th>Payment Status</th>
                                        <th>Sponsor PDF</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($registrations as $registration)
                                        <tr>
                                            <td>
                                                @if (str_contains($registration->profile_image, 'http') ||
                                                        str_contains($registration->profile_image, 'https') ||
                                                        $registration->profile_image == null)
                                                    <img src="{{ Avatar::create($registration->full_name)->toBase64() }}"
                                                        alt="Profile Image" width="50">
                                                @else
                                                    <img src="{{ asset($registration->profile_image) }}"
                                                        alt="Profile Image" width="50" height="50"
                                                        style="border-radius: 50%;">
                                                @endif
                                            </td>
                                            <td>{{ $registration->customer_code }}</td>
                                            <td>{{ $registration->full_name }}</td>
                                            <td>{{ $registration->house_number }}</td>
                                            <td>{{ $registration->wing }}</td>
                                            <td>{{ $registration->contact_number }}</td>
                                            <td>{{ $registration->email }}</td>
                                            <td>{{ $registration->team_category }}</td>
                                            <td>{{ $registration->player_roles }}</td>
                                            <td>{{ $registration->tshirt_size }}</td>
                                            <td>{{ $registration->agreement ? 'Yes' : 'No' }}</td>
                                            <td class="text-success">{{ ucfirst($registration->payment) }}</td>
                                            <td>
                                                @if ($registration->sponsor_pdf)
                                                    <a href="{{ asset($registration->sponsor_pdf) }}"
                                                        target="_blank">View PDF</a>
                                                @else
                                                    No PDF
                                                @endif
                                            </td>
                                            <td>
                                                <button class="btn btn-sm btn-outline-light edit-btn"
                                                    data-id="{{ $registration->id }}"
                                                    data-payment="{{ $registration->payment }}"
                                                    data-tshirt_size="{{ $registration->tshirt_size }}">
                                                    <i class="fas fa-edit" style="color: #000000;"></i>
                                                </button>
                                                <button class="btn btn-sm btn-outline-danger delete-btn ms-1"
                                                    data-id="{{ $registration->id }}">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for updating details -->
        <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Update Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="editForm">
                            <div class="mb-3">
                                <label for="paymentStatus" class="form-label">Payment Status</label>
                                <select class="form-select" id="paymentStatus" name="payment" required>
                                    <option value="pending">Pending</option>
                                    <option value="done">Done</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="tshirtSize" class="form-label">T-Shirt Size</label>
                                <select class="form-select" id="tshirtSize" name="tshirt_size" required>
                                    <option value="XS">XS</option>
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                    <option value="XXL">XXL</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="saveChanges">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.3.6/js/dataTables.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
    <script>
        new DataTable('#example', {
            pageLength: 5,
        });


        let currentId = null;

        // Handle edit button click
        $(document).on('click', '.edit-btn', function() {
            currentId = $(this).data('id');
            const currentPayment = $(this).data('payment');
            const currentTshirtSize = $(this).data('tshirt_size');

            $('#paymentStatus').val(currentPayment);
            $('#tshirtSize').val(currentTshirtSize);
            $('#editModal').modal('show');
        });

        // Handle delete button click
        $(document).on('click', '.delete-btn', function() {
            const id = $(this).data('id');
            if (confirm('Are you sure you want to delete this registration?')) {
                $.ajax({
                    url: `/vshpl/delete/${id}`,
                    type: 'DELETE',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.success) {
                            location.reload(); // Reload to show updated data
                        } else {
                            alert('Error: ' + response.message);
                        }
                    },
                    error: function(xhr) {
                        alert('Error deleting registration');
                    }
                });
            }
        });

        // Handle save button click
        $('#saveChanges').on('click', function() {
            const payment = $('#paymentStatus').val();
            const tshirt_size = $('#tshirtSize').val();
            if (!currentId) return;

            $.ajax({
                url: `/vshpl/update-registration/${currentId}`,
                type: 'PUT',
                data: {
                    payment: payment,
                    tshirt_size: tshirt_size,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.success) {
                        $('#editModal').modal('hide');
                        location.reload(); // Reload to show updated data
                    } else {
                        alert('Error: ' + response.message);
                    }
                },
                error: function(xhr) {
                    alert('Error updating registration');
                }
            });
        });
    </script>
</body>

</html>
