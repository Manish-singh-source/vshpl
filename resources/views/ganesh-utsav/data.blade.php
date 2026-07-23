<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganesh Utsav Contributions</title>
    <link rel="icon" href="{{ asset('assets/main.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Fraunces:opsz,wght@9..144,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap5.min.css">
    <style>
        :root {
            --page-bg: #f6f7fb;
            --surface: #ffffff;
            --ink: #20242c;
            --muted: #6d7480;
            --line: #e6e8ee;
            --brand: #a50f18;
            --brand-dark: #7e0910;
            --gold: #d99a2b;
            --soft-red: #fff0f1;
            --soft-gold: #fff8e9;
        }

        * { box-sizing: border-box; }

        body {
            min-height: 100vh;
            margin: 0;
            color: var(--ink);
            background:
                radial-gradient(circle at 92% 0%, rgba(217, 154, 43, 0.13), transparent 25rem),
                var(--page-bg);
            font-family: "DM Sans", sans-serif;
        }

        .admin-shell {
            width: min(1600px, calc(100% - 40px));
            margin: 0 auto;
            padding: 28px 0 48px;
        }

        .page-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 22px;
        }

        .eyebrow {
            margin: 0 0 5px;
            color: var(--brand);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.14em;
            text-transform: uppercase;
        }

        h1 {
            margin: 0;
            color: var(--brand-dark);
            font-family: "Fraunces", serif;
            font-size: clamp(28px, 3vw, 42px);
            line-height: 1.08;
        }

        .page-copy {
            margin: 8px 0 0;
            color: var(--muted);
            font-size: 14px;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 44px;
            padding: 0 18px;
            border: 1px solid var(--line);
            border-radius: 12px;
            color: var(--ink);
            background: var(--surface);
            font-weight: 700;
            text-decoration: none;
            box-shadow: 0 5px 18px rgba(24, 29, 39, 0.05);
        }

        .back-link:hover {
            border-color: var(--brand);
            color: var(--brand);
        }
        .page-actions {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .export-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 44px;
            padding: 0 18px;
            border: 1px solid #17603a;
            border-radius: 12px;
            color: #fff;
            background: #17603a;
            font-weight: 700;
            text-decoration: none;
            box-shadow: 0 5px 18px rgba(23, 96, 58, 0.18);
        }

        .export-link:hover {
            color: #fff;
            background: #104b2d;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 14px;
            margin-bottom: 20px;
        }

        .stat-card {
            position: relative;
            overflow: hidden;
            min-height: 112px;
            padding: 20px;
            border: 1px solid var(--line);
            border-radius: 16px;
            background: var(--surface);
            box-shadow: 0 7px 24px rgba(24, 29, 39, 0.05);
        }

        .stat-card::after {
            position: absolute;
            right: -18px;
            bottom: -34px;
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: var(--soft-gold);
            content: "";
        }

        .stat-label {
            display: block;
            margin-bottom: 9px;
            color: var(--muted);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .stat-value {
            position: relative;
            z-index: 1;
            color: var(--ink);
            font-size: clamp(24px, 2vw, 31px);
            line-height: 1;
        }

        .stat-card.primary {
            border-color: var(--brand);
            background: linear-gradient(135deg, var(--brand), var(--brand-dark));
        }

        .stat-card.primary .stat-label,
        .stat-card.primary .stat-value { color: #fff; }
        .stat-card.primary::after { background: rgba(255, 255, 255, 0.08); }

        .data-card {
            overflow: hidden;
            border: 1px solid var(--line);
            border-radius: 18px;
            background: var(--surface);
            box-shadow: 0 12px 36px rgba(24, 29, 39, 0.07);
        }

        .card-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 20px 22px;
            border-bottom: 1px solid var(--line);
        }

        .card-heading h2 {
            margin: 0;
            color: var(--ink);
            font-size: 20px;
            font-weight: 700;
        }

        .card-heading p {
            margin: 4px 0 0;
            color: var(--muted);
            font-size: 13px;
        }

        .record-count {
            flex: 0 0 auto;
            padding: 7px 11px;
            border-radius: 999px;
            color: var(--brand);
            background: var(--soft-red);
            font-size: 12px;
            font-weight: 700;
        }

        .table-area { padding: 18px 20px 20px; }

        div.dataTables_wrapper div.dataTables_length select {
            min-width: 72px;
            margin: 0 6px;
            border-color: var(--line);
            border-radius: 9px;
        }

        div.dataTables_wrapper div.dataTables_filter input {
            min-width: 250px;
            min-height: 40px;
            margin-left: 8px;
            border-color: var(--line);
            border-radius: 10px;
            box-shadow: none;
        }

        div.dataTables_wrapper div.dataTables_filter input:focus {
            border-color: var(--brand);
            box-shadow: 0 0 0 3px rgba(165, 15, 24, 0.1);
        }

        table.dataTable { width: 100% !important; margin-top: 16px !important; }

        #ganeshDataTable thead th {
            padding: 13px 12px;
            border-top: 0;
            border-bottom: 1px solid #dcc58f;
            color: #6f3915;
            background: #fff8e9;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            white-space: nowrap;
        }

        #ganeshDataTable tbody td {
            padding: 14px 12px;
            border-color: #eef0f4;
            color: #3a3f47;
            font-size: 13px;
            vertical-align: middle;
        }

        #ganeshDataTable tbody tr:hover td { background: #fffdf8; }

        .cell-main {
            display: block;
            color: var(--ink);
            font-weight: 700;
            white-space: nowrap;
        }

        .cell-sub {
            display: block;
            margin-top: 3px;
            color: var(--muted);
            font-size: 12px;
            line-height: 1.4;
        }

        .description-cell {
            max-width: 220px;
            white-space: normal;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            padding: 5px 9px;
            border-radius: 999px;
            font-size: 11px;
            font-weight: 700;
            white-space: nowrap;
        }

        .status-badge.owner,
        .status-badge.sponsor { color: #8b1017; background: #ffe8ea; }
        .status-badge.tenant { color: #80510a; background: #fff1cf; }
        .status-badge.standard { color: #555e6c; background: #edf0f4; }
        .status-badge.cash { color: #17603a; background: #e6f6ed; }
        .status-badge.online { color: #1552a1; background: #e9f2ff; }
        .status-badge.already-paid { color: #6544a8; background: #f1ebff; }

        .proof-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 32px;
            margin-top: 7px;
            padding: 0 11px;
            border-radius: 8px;
            color: #fff;
            background: var(--brand);
            font-size: 11px;
            font-weight: 700;
            text-decoration: none;
        }

        .proof-link:hover { color: #fff; background: var(--brand-dark); }
        .grand-total { color: var(--brand-dark); font-size: 15px; font-weight: 700; white-space: nowrap; }

        .page-link { color: var(--brand); }
        .active > .page-link, .page-link.active {
            border-color: var(--brand);
            background: var(--brand);
        }

        div.dataTables_wrapper div.dataTables_info,
        div.dataTables_wrapper div.dataTables_length,
        div.dataTables_wrapper div.dataTables_filter {
            color: var(--muted);
            font-size: 13px;
        }

        table.dataTable.dtr-inline.collapsed > tbody > tr > td.dtr-control::before {
            background-color: var(--brand);
        }

        @media (max-width: 991px) {
            .stats-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); }
        }

        @media (max-width: 640px) {
            .admin-shell { width: min(100% - 24px, 1600px); padding-top: 18px; }
            .page-bar { align-items: flex-start; flex-direction: column; }
            .page-actions { width: 100%; }
            .back-link, .export-link { width: 100%; }
            .stats-grid { gap: 10px; }
            .stat-card { min-height: 98px; padding: 16px; }
            .card-heading { align-items: flex-start; padding: 17px; }
            .table-area { padding: 13px; }
            div.dataTables_wrapper div.dataTables_length,
            div.dataTables_wrapper div.dataTables_filter { text-align: left; }
            div.dataTables_wrapper div.dataTables_filter { margin-top: 12px; }
            div.dataTables_wrapper div.dataTables_filter input { width: 100%; min-width: 0; margin: 6px 0 0; }
            div.dataTables_wrapper div.dataTables_paginate ul.pagination { justify-content: flex-start !important; margin-top: 12px !important; }
        }
    </style>
</head>
<body>
    @php
        $totalCollection = $registrations->sum('grand_total');
        $sponsorCount = $registrations->where('is_sponsor', true)->count();
        $sponsorCollection = $registrations->sum('sponsor_amount');
        $digitalPayments = $registrations->whereIn('sponsor_payment_method', ['online', 'already_paid'])->count();
    @endphp

    <main class="admin-shell">
        <header class="page-bar">
            <div>
                <p class="eyebrow">Admin Records</p>
                <h1>Ganesh Utsav Contributions 2026</h1>
                <p class="page-copy">Search, sort and review all resident contribution records.</p>
            </div>
            <div class="page-actions">
                <a class="export-link" href="{{ route('ganesh.utsav.export') }}">Download Excel</a>
                <a class="back-link" href="{{ route('ganesh.utsav.celebration') }}">Back to Contribution Form</a>
            </div>
        </header>

        <section class="stats-grid" aria-label="Contribution summary">
            <article class="stat-card primary">
                <span class="stat-label">Total Collection</span>
                <strong class="stat-value">Rs {{ number_format($totalCollection) }}</strong>
            </article>
            <article class="stat-card">
                <span class="stat-label">Total Records</span>
                <strong class="stat-value">{{ number_format($registrations->count()) }}</strong>
            </article>
            <article class="stat-card">
                <span class="stat-label">Sponsors</span>
                <strong class="stat-value">{{ number_format($sponsorCount) }}</strong>
            </article>
            <article class="stat-card">
                <span class="stat-label">Sponsor Collection</span>
                <strong class="stat-value">Rs {{ number_format($sponsorCollection) }}</strong>
            </article>
        </section>

        <section class="data-card">
            <div class="card-heading">
                <div>
                    <h2>Contribution Records</h2>
                    <p>Resident, coupon, sponsorship and payment details.</p>
                </div>
                <span class="record-count">{{ $digitalPayments }} digital payments</span>
            </div>

            <div class="table-area">
                <table id="ganeshDataTable" class="table table-hover align-middle nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Resident</th>
                            <th>Name &amp; Contact</th>
                            <th>Contribution</th>
                            <th>Sponsorship</th>
                            <th>Sponsor Amount</th>
                            <th>Payment</th>
                            <th>Grand Total</th>
                            <th>Submitted At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($registrations as $registration)
                            @php
                                $paymentClass = match ($registration->sponsor_payment_method) {
                                    'online' => 'online',
                                    'already_paid' => 'already-paid',
                                    default => 'cash',
                                };
                            @endphp
                            <tr>
                                <td data-order="{{ $registration->id }}">
                                    <span class="cell-main">#{{ $registration->id }}</span>
                                </td>
                                <td>
                                    <span class="status-badge {{ $registration->resident_type === 'owner' ? 'owner' : 'tenant' }}">
                                        {{ ucfirst($registration->resident_type) }}
                                    </span>
                                    <span class="cell-main mt-2">{{ $registration->wing }} - {{ $registration->flat_number }}</span>
                                    <span class="cell-sub">Wing / Flat</span>
                                </td>
                                <td>
                                    <span class="cell-main">{{ $registration->full_name }}</span>
                                    <span class="cell-sub">{{ $registration->mobile_number }}</span>
                                </td>
                                <td data-order="{{ $registration->contribution_amount + $registration->extra_coupon_total }}">
                                    <span class="cell-main">Base: Rs {{ number_format($registration->contribution_amount) }}</span>
                                    @if ($registration->has_extra_coupon)
                                        <span class="cell-sub">Extra: {{ $registration->extra_coupon_quantity }} x Rs {{ number_format($registration->extra_coupon_unit_amount) }} = Rs {{ number_format($registration->extra_coupon_total) }}</span>
                                    @else
                                        <span class="cell-sub">No extra coupon</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($registration->is_sponsor)
                                        <span class="status-badge sponsor">Sponsor</span>
                                        <span class="cell-sub description-cell">{{ $registration->sponsor_about ?: 'No description' }}</span>
                                    @else
                                        <span class="status-badge standard">Standard</span>
                                        <span class="cell-sub">No sponsorship</span>
                                    @endif
                                </td>
                                <td data-order="{{ $registration->sponsor_amount }}">
                                    <span class="cell-main">Rs {{ number_format($registration->sponsor_amount) }}</span>
                                </td>
                                <td>
                                    @if ($registration->sponsor_payment_method)
                                        <span class="status-badge {{ $paymentClass }}">
                                            {{ ucwords(str_replace('_', ' ', $registration->sponsor_payment_method)) }}
                                        </span>
                                    @else
                                        <span class="cell-sub">Not applicable</span>
                                    @endif

                                    @if ($registration->sponsor_payment_screenshot)
                                        <a class="proof-link" href="{{ asset($registration->sponsor_payment_screenshot) }}" target="_blank" rel="noopener">View Payment Proof</a>
                                    @endif
                                </td>
                                <td data-order="{{ $registration->grand_total }}">
                                    <span class="grand-total">Rs {{ number_format($registration->grand_total) }}</span>
                                </td>
                                <td data-order="{{ $registration->created_at?->timestamp }}">
                                    <span class="cell-main">{{ $registration->created_at?->format('d M Y') }}</span>
                                    <span class="cell-sub">{{ $registration->created_at?->format('h:i A') }}</span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap5.min.js"></script>
    <script>
        $(function () {
            $('#ganeshDataTable').DataTable({
                responsive: true,
                autoWidth: false,
                pageLength: 10,
                lengthMenu: [[10, 25, 50, 100], [10, 25, 50, 100]],
                order: [[0, 'desc']],
                language: {
                    search: '',
                    searchPlaceholder: 'Search name, flat, mobile...',
                    lengthMenu: 'Show _MENU_ records',
                    info: 'Showing _START_ to _END_ of _TOTAL_ records',
                    infoEmpty: 'No contribution records found',
                    zeroRecords: 'No matching contribution records found',
                    emptyTable: 'No Ganesh Utsav contributions submitted yet'
                }
            });
        });
    </script>
</body>
</html>
