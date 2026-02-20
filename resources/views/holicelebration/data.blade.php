<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holi Celebration Data</title>
    <link rel="icon" href="{{ asset('assets/main.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background: #f5f7fb;
            font-family: Arial, sans-serif;
            padding: 24px;
        }
        .card {
            border: 0;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(20, 30, 60, 0.12);
        }
        .table th {
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="mb-0">Holi Celebration Registrations</h3>
                    <div class="d-flex gap-2">
                        <a href="{{ route('holicelebration.export') }}" class="btn btn-success btn-sm">Export to Excel</a>
                        <a href="{{ url('/holicelebration') }}" class="btn btn-primary btn-sm">Back to Form</a>
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table table-bordered table-striped align-middle mb-0">
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Status</th>
                                <th>Wing</th>
                                <th>Flat Number</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Coupons</th>
                                <th>Total Amount</th>
                                <th>Payment Mode</th>
                                <th>Payment Done</th>
                                <th>Screenshot</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($records as $record)
                                <tr>
                                    <td>{{ $record->id }}</td>
                                    <td>{{ $record->participation_status }}</td>
                                    <td>{{ $record->wing ?? '-' }}</td>
                                    <td>{{ $record->flat_number ?? '-' }}</td>
                                    <td>{{ $record->full_name ?? '-' }}</td>
                                    <td>{{ $record->mobile_number ?? '-' }}</td>
                                    <td>{{ $record->coupons ?? '-' }}</td>
                                    <td>Rs. {{ number_format($record->total_amount) }}</td>
                                    <td>{{ $record->payment_mode ?? '-' }}</td>
                                    <td>{{ $record->payment_done ? 'Yes' : 'No' }}</td>
                                    <td>
                                        @if($record->payment_screenshot)
                                            <a href="{{ route('holicelebration.screenshot', $record) }}" target="_blank">View</a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>{{ $record->created_at?->format('d-m-Y H:i') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="12" class="text-center">No records found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
