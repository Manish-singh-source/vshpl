<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holi Admin - Veena Smart Homes</title>
    <link rel="icon" href="{{ asset('assets/main.png') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css?v={{ time() }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f8f9fa;
            min-height: 100vh;
            padding: 2rem;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
        }

        /* Header */
        .header {
            background: #ffffff;
            color: #212529;
            padding: 2rem;
            text-align: center;
            border-bottom: 1px solid #dee2e6;
        }

        .header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            letter-spacing: -1px;
        }

        .header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Table Container */
        .table-container {
            padding: 2rem;
            overflow-x: auto;
        }

        /* Table */
        .data-table {
            width: 100%;
            margin-top: 1rem;
        }

        .data-table thead {
            background: #e9ecef;
            color: #495057;
        }

        .data-table th {
            padding: 1rem;
            text-align: left;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .data-table td {
            padding: 1rem;
            border-bottom: 1px solid #e5e7eb;
            color: #374151;
        }

        .data-table tbody tr {
            transition: background-color 0.2s ease;
        }

        .data-table tbody tr:hover {
            background-color: #f3f4f6;
        }

        .action-buttons {
            display: flex;
            gap: 0.5rem;
        }

        .btn-danger {
            background: #dc3545;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 0.4rem 0.8rem;
            font-size: 0.82rem;
            font-weight: 600;
        }

        .btn-danger:hover {
            background: #c82333;
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
            color: #6b7280;
        }

        .empty-state svg {
            width: 120px;
            height: 120px;
            margin-bottom: 1.5rem;
            opacity: 0.5;
        }

        .empty-state h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: #374151;
        }

        /* Success Message */
        .success-message {
            background: rgba(76, 175, 80, 0.9);
            color: white;
            padding: 1rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            text-align: center;
            font-weight: 600;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            body {
                padding: 1rem;
            }

            .container {
                border-radius: 15px;
            }

            .header {
                padding: 1.5rem;
            }

            .header h1 {
                font-size: 2rem;
            }

            .table-container {
                padding: 1rem;
            }

            .data-table {
                font-size: 0.85rem;
            }

            .data-table th,
            .data-table td {
                padding: 0.75rem 0.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>Vehicle Registrations Data</h1>
            <p>Manage Holi Vehicle Registrations</p>
        </div>

        <!-- Success Message -->
        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif        <!-- Export Button -->
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('export.holi.vehicles') }}" class="btn btn-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-excel me-1" viewBox="0 0 16 16">
                    <path d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z"/>
                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z"/>
                </svg>
                Export to Excel
            </a>
        </div>

        <!-- Table Container -->
        <div class="table-container">
            @if($holiVehicles->count() > 0)
                <div class="table-responsive">
                    <table id="holiVehiclesTable" class="table table-striped table-bordered data-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Wing</th>
                                <th>Full Name</th>
                                <th>Flat Number</th>
                                <th>Mobile Number</th>
                                <th>Email</th>
                                <th>Vehicle Type</th>
                                <th>Vehicle Number</th>
                                <th>Created At</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($holiVehicles as $holiVehicle)
                                <tr>
                                    <td>{{ $holiVehicle->id }}</td>
                                    <td>{{ strtoupper($holiVehicle->wing) }}</td>
                                    <td>{{ $holiVehicle->full_name }}</td>
                                    <td>{{ $holiVehicle->flat_number }}</td>
                                    <td>{{ $holiVehicle->mobile_number }}</td>
                                    <td>{{ $holiVehicle->email ?? 'N/A' }}</td>
                                    <td>{{ ucfirst($holiVehicle->vehicle_type) }}</td>
                                    <td>{{ $holiVehicle->vehicle_number }}</td>
                                    <td>{{ $holiVehicle->created_at->format('d-m-Y H:i') }}</td>
                                    <td>
                                        <div class="action-buttons">
                                            <form action="{{ route('holi.destroy', $holiVehicle) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this registration?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="empty-state">
                    <h3>No Holi Vehicle Registrations Found</h3>
                    <p>There are currently no Holi vehicle registrations in the database.</p>
                </div>
            @endif
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#holiVehiclesTable').DataTable({
                paging: true,
                lengthChange: true,
                searching: true,
                ordering: true,
                info: true,
                autoWidth: false,
                responsive: true,
                language: {
                    lengthMenu: 'Show _MENU_ records per page',
                    zeroRecords: 'No holi vehicle records found',
                    info: 'Showing page _PAGE_ of _PAGES_',
                    infoEmpty: 'No records available',
                    infoFiltered: '(filtered from _MAX_ total records)',
                    search: 'Search:',
                    paginate: {
                        first: 'First',
                        last: 'Last',
                        next: 'Next',
                        previous: 'Previous'
                    }
                }
            });
        });
    </script>
</body>
</html>
