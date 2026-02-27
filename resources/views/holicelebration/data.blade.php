<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holi Celebration Data</title>
    <link rel="icon" href="{{ asset('assets/main.png') }}" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">
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
        .summary-pill {
            display: inline-flex;
            align-items: center;
            min-height: 31px;
            padding: 0.375rem 0.75rem;
            font-size: 0.875rem;
            font-weight: 600;
            border-radius: 0.375rem;
        }
    </style>
</head>
<body>
    @php
        $recordsCollection = $records instanceof \Illuminate\Pagination\AbstractPaginator
            ? $records->getCollection()
            : collect($records);
        $totalCoupons = $recordsCollection->sum(fn($record) => (int) ($record->coupons ?? 0));
        $totalAmount = $recordsCollection->sum(fn($record) => (float) ($record->total_amount ?? 0));
    @endphp

    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="mb-0">Holi Celebration Registrations</h3>
                    <div class="d-flex align-items-center gap-2 flex-wrap justify-content-end">
                        <span class="summary-pill text-bg-info">Total Coupons: {{ number_format($totalCoupons) }}</span>
                        <span class="summary-pill text-bg-secondary">Total Amount: Rs. {{ number_format($totalAmount, 2) }}</span>
                        <a href="{{ route('holicelebration.export') }}" class="btn btn-success btn-sm">Export to Excel</a>
                        <a href="{{ url('/holicelebration') }}" class="btn btn-primary btn-sm">Back to Form</a>
                    </div>
                </div>

                @if(session('success'))
                    <div class="alert alert-success py-2">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="table-responsive">
                    <table id="holiDataTable" class="table table-bordered table-striped align-middle mb-0">
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
                                <th>Action</th>
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
                                    <td>
                                        <form action="{{ route('holicelebration.destroy', $record) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this record?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="13" class="text-center">No records found.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(function () {
        $('#holiDataTable').DataTable({
            pageLength: 25,
            order: [[0, 'desc']],
            columnDefs: [
                { orderable: false, targets: [10, 12] }
            ]
        });
    });
</script>
</html>
