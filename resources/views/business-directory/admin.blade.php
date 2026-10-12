<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Directory Registrations | Veena Smart Homes</title>
    <link rel="icon" href="{{ asset('assets/main.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@600;700;800&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --ink: #1d2333;
            --muted: #5d687d;
            --line: #e8e6f7;
            --canvas: #f5f3ff;
            --panel: #ffffff;
            --accent: #5d45d6;
            --accent-soft: #efeaff;
            --success: #1f9d76;
            --danger: #c4515d;
            --shadow: 0 18px 50px rgba(93, 69, 214, 0.12);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            padding: 0;
            color: var(--ink);
            background: #f7f8fc;
            font-family: 'DM Sans', sans-serif;
        }

        main {
            width: 100%;
        }

        .admin-layout {
            display: grid;
            grid-template-columns: 240px minmax(0, 1fr);
            align-items: start;
            min-height: 100vh;
        }

        .sidebar {
            position: sticky;
            top: 0;
            display: flex;
            flex-direction: column;
            height: 100vh;
            min-height: 100vh;
            padding: 22px 18px;
            border-right: 1px solid #e4e7ef;
            background: #fff;
            color: var(--ink);
        }

        .sidebar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding-bottom: 18px;
            border-bottom: 1px solid #eceef4;
        }

        .sidebar-brand img {
            width: 48px;
            height: 48px;
            padding: 2px;
            border-radius: 8px;
            object-fit: contain;
        }

        .sidebar-brand-name {
            font-family: 'Manrope', sans-serif;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 0.05em;
        }

        .sidebar-brand-caption {
            margin-top: 4px;
            color: var(--muted);
            font-size: 11px;
        }

        .sidebar-section-label {
            margin: 24px 0 9px;
            color: #8790a2;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .sidebar-title {
            margin: 0;
            font-family: 'Manrope', sans-serif;
            font-size: 21px;
            line-height: 1.2;
            letter-spacing: -0.04em;
        }

        .sidebar-description {
            margin: 9px 0 0;
            color: var(--muted);
            font-size: 12px;
            line-height: 1.55;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            min-height: 40px;
            padding: 0 12px;
            border: 0;
            border-radius: 8px;
            color: #475168;
            font-size: 12px;
            font-weight: 700;
            text-decoration: none;
            transition: background 160ms ease, transform 160ms ease;
        }

        .sidebar-link:hover {
            transform: translateY(-1px);
            background: #f2f1ff;
        }

        .topbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            margin-bottom: 24px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .brand img {
            width: 52px;
            height: 52px;
            object-fit: contain;
            border-radius: 14px;
            box-shadow: 0 12px 24px rgba(93, 69, 214, 0.12);
        }

        .brand-name {
            font-family: 'Manrope', sans-serif;
            font-size: 14px;
            font-weight: 800;
            letter-spacing: 0.08em;
        }

        .brand-caption {
            margin-top: 4px;
            color: var(--muted);
            font-size: 12px;
        }

        .page-link,
        .primary-btn,
        .secondary-btn,
        .danger-btn,
        .ghost-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 42px;
            padding: 0 16px;
            border-radius: 12px;
            font: 700 13px 'DM Sans', sans-serif;
            text-decoration: none;
            transition: 180ms ease;
        }

        .page-link,
        .secondary-btn,
        .ghost-btn {
            border: 1px solid var(--line);
            background: rgba(255, 255, 255, 0.7);
            color: var(--ink);
        }

        .primary-btn {
            border: 0;
            background: linear-gradient(135deg, var(--accent) 0%, #7a66f8 100%);
            color: #fff;
            box-shadow: 0 12px 26px rgba(93, 69, 214, 0.22);
        }

        .primary-btn:hover,
        .secondary-btn:hover,
        .ghost-btn:hover,
        .page-link:hover {
            transform: translateY(-1px);
        }

        .panel {
            min-width: 0;
            padding: 28px 30px;
            background: transparent;
        }

        .panel-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 28px 30px 20px;
            border-bottom: 1px solid var(--line);
        }

        .header-copy h1,
        .header-copy h2 {
            margin: 0;
            font-family: 'Manrope', sans-serif;
            font-size: clamp(26px, 3vw, 38px);
            letter-spacing: -0.06em;
        }

        .subtitle {
            margin: 8px 0 0;
            color: var(--muted);
            font-size: 14px;
        }

        .count {
            flex-shrink: 0;
            padding: 10px 14px;
            border: 1px solid rgba(93, 69, 214, 0.25);
            border-radius: 999px;
            background: var(--accent-soft);
            color: var(--accent);
            font-size: 13px;
            font-weight: 800;
        }

        .toolbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 20px 30px 0;
        }

        .page-size-control {
            display: flex;
            align-items: center;
            gap: 8px;
            flex-shrink: 0;
            color: var(--muted);
            font-size: 12px;
        }

        .page-size-control select {
            min-height: 40px;
            padding: 0 28px 0 10px;
            border: 1px solid var(--line);
            border-radius: 10px;
            background: #fff;
            color: var(--ink);
            font: 600 12px 'DM Sans', sans-serif;
        }

        .search-wrap {
            position: relative;
            flex: 1 1 420px;
        }

        .search-wrap input {
            width: 100%;
            min-height: 48px;
            padding: 0 16px 0 42px;
            border: 1px solid var(--line);
            border-radius: 14px;
            background: rgba(255, 255, 255, 0.9);
            color: var(--ink);
            font: 500 14px 'DM Sans', sans-serif;
        }

        .search-wrap::before {
            content: '⌕';
            position: absolute;
            top: 50%;
            left: 16px;
            transform: translateY(-50%);
            color: var(--muted);
            font-size: 18px;
        }

        .notice {
            margin: 20px 30px 0;
            padding: 12px 14px;
            border: 1px solid rgba(31, 157, 118, 0.2);
            border-radius: 12px;
            color: #14513c;
            background: #eafaf3;
            font-size: 14px;
        }

        .table-wrap {
            overflow-x: auto;
            padding: 12px 24px 4px;
        }

        .registration-table {
            width: 100%;
            min-width: 780px;
            border-collapse: separate;
            border-spacing: 0 8px;
            text-align: left;
        }

        .registration-table th {
            padding: 8px 14px;
            color: var(--muted);
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            white-space: nowrap;
        }

        .registration-table td {
            padding: 13px 14px;
            border-top: 1px solid #edf0f7;
            border-bottom: 1px solid #edf0f7;
            background: #fff;
            color: var(--ink);
            font-size: 12px;
            vertical-align: middle;
        }

        .registration-table td:first-child {
            border-left: 1px solid #edf0f7;
            border-radius: 12px 0 0 12px;
        }

        .registration-table td:last-child {
            border-right: 1px solid #edf0f7;
            border-radius: 0 12px 12px 0;
        }

        .registration-table tbody tr {
            filter: drop-shadow(0 4px 6px rgba(23, 35, 70, 0.035));
        }

        .registration-table tbody tr:hover td {
            background: #fbfaff;
        }

        .resident-name,
        .business-name {
            display: block;
            color: var(--ink);
            font-size: 13px;
            font-weight: 700;
        }

        .row-subtitle {
            display: block;
            margin-top: 4px;
            color: var(--muted);
            font-size: 11px;
            line-height: 1.4;
        }

        .table-contact a {
            display: block;
            color: var(--accent);
            line-height: 1.6;
            text-decoration: none;
            overflow-wrap: anywhere;
        }

        .row-actions {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 6px;
            white-space: nowrap;
        }

        .row-actions .secondary-btn,
        .row-actions .ghost-btn,
        .row-actions .danger-btn {
            min-height: 32px;
            padding: 0 9px;
            border-radius: 9px;
            font-size: 11px;
        }

        .secondary-btn,
        .ghost-btn,
        .danger-btn {
            cursor: pointer;
            border: 0;
        }

        .secondary-btn {
            background: var(--accent-soft);
            color: var(--accent);
        }

        .ghost-btn {
            background: #f5f6fb;
            color: var(--ink);
        }

        .danger-btn {
            background: rgba(196, 81, 93, 0.08);
            color: var(--danger);
        }

        .danger-btn:hover {
            background: rgba(196, 81, 93, 0.12);
        }

        .actions-form {
            margin: 0;
        }

        .table-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
            padding: 10px 30px 22px;
            color: var(--muted);
            font-size: 12px;
        }

        .pagination {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .pagination button {
            min-width: 34px;
            min-height: 34px;
            padding: 0 9px;
            border: 1px solid var(--line);
            border-radius: 9px;
            background: #fff;
            color: var(--ink);
            font: 600 12px 'DM Sans', sans-serif;
            cursor: pointer;
        }

        .pagination button[aria-current="page"] {
            border-color: var(--accent);
            background: var(--accent);
            color: #fff;
        }

        .pagination button:disabled {
            opacity: 0.45;
            cursor: default;
        }

        .empty {
            padding: 72px 30px 44px;
            text-align: center;
            color: var(--muted);
        }

        .empty strong {
            display: block;
            margin-bottom: 8px;
            color: var(--ink);
            font-family: 'Manrope', sans-serif;
            font-size: 24px;
        }

        .modal {
            position: fixed;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background: rgba(17, 24, 39, 0.45);
            opacity: 1;
            visibility: visible;
            transition: 180ms ease;
            z-index: 99;
        }

        .modal.hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .modal-card {
            position: relative;
            width: min(760px, 100%);
            max-height: 90vh;
            overflow: auto;
            padding: 24px;
            border-radius: 24px;
            background: #fff;
            box-shadow: 0 20px 60px rgba(15, 23, 42, 0.25);
        }

        .modal-close {
            position: absolute;
            top: 16px;
            right: 18px;
            border: 0;
            background: transparent;
            color: var(--muted);
            font-size: 30px;
            cursor: pointer;
            line-height: 1;
        }

        .modal-header {
            padding-right: 36px;
            margin-bottom: 18px;
        }

        .modal-header h3 {
            margin: 0;
            font-family: 'Manrope', sans-serif;
            font-size: 28px;
            letter-spacing: -0.05em;
        }

        .modal-header span {
            display: inline-block;
            margin-top: 8px;
            color: var(--accent);
            font-weight: 700;
        }

        .modal-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 14px 18px;
        }

        .detail-item {
            padding: 14px 15px;
            border: 1px solid var(--line);
            border-radius: 14px;
            background: #fafbfd;
        }

        .detail-item span {
            display: block;
            margin-bottom: 6px;
            color: var(--muted);
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 0.06em;
            text-transform: uppercase;
        }

        .detail-item strong {
            color: var(--ink);
            font-size: 14px;
            line-height: 1.5;
            overflow-wrap: anywhere;
        }

        .detail-item.wide {
            grid-column: 1 / -1;
        }

        @media (max-width: 700px) {
            .admin-layout {
                grid-template-columns: 1fr;
            }

            .sidebar {
                position: static;
                height: auto;
                min-height: auto;
                padding: 16px 18px;
                border-right: 0;
                border-bottom: 1px solid #e4e7ef;
            }

            .sidebar-section-label {
                margin-top: 20px;
            }

            .panel {
                padding: 20px 0;
            }

            .panel-header,
            .toolbar {
                flex-direction: column;
                align-items: stretch;
            }

            .topbar {
                align-items: flex-start;
                flex-direction: column;
            }

            .panel-header,
            .toolbar,
            .notice {
                padding-left: 18px;
                padding-right: 18px;
            }

            .table-wrap {
                padding-right: 10px;
                padding-left: 10px;
            }

            .table-footer {
                align-items: flex-start;
                flex-direction: column;
                padding-right: 18px;
                padding-left: 18px;
            }

            .modal-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <main class="admin-layout">
        <aside class="sidebar" aria-label="Business directory registration details">
            <div class="sidebar-brand">
                <img src="{{ asset('assets/main.png') }}" alt="Veena Smart Homes logo">
                <div>
                    <div class="sidebar-brand-name">VEENA SMART HOMES</div>
                    <div class="sidebar-brand-caption">Community directory</div>
                </div>
            </div>

            <p class="sidebar-section-label">Registration workspace</p>
            <h1 class="sidebar-title">Business directory</h1>
            <p class="sidebar-description">Review resident profiles and business details submitted through the
                registration form.</p>

        </aside>

        <section class="panel" id="registration-list" aria-label="Business registration submissions">
            <div class="panel-header">
                <div class="count">{{ $registrations->count() }}
                    {{ $registrations->count() === 1 ? 'registration' : 'registrations' }}</div>
            </div>

            <div class="toolbar">
                <label class="page-size-control" for="pageSize">
                    Show
                    <select id="pageSize" aria-label="Rows per page">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                    </select>
                    entries
                </label>
                <label class="search-wrap" aria-label="Search registrations">
                    <input id="registrationSearch" type="search" placeholder="Search registrations...">
                </label>
                <a class="primary-btn" href="{{ route('business-directory.create') }}">New registration</a>
            </div>

            @if (session('success'))
                <div class="notice" role="status">{{ session('success') }}</div>
            @endif

            @if ($registrations->isEmpty())
                <div class="empty"><strong>No registrations yet</strong>New form submissions will appear here.</div>
            @else
                <div class="table-wrap">
                    <table class="registration-table">
                        <thead>
                            <tr>
                                <th scope="col">Resident</th>
                                <th scope="col">Business</th>
                                <th scope="col">Contact</th>
                                <th scope="col">Registered</th>
                                <th scope="col" aria-label="Actions"></th>
                            </tr>
                        </thead>
                        <tbody id="registrationRows">
                            @foreach ($registrations as $registration)
                                <tr
                                    data-search="{{ strtolower(implode(' ', array_filter([$registration->full_name, $registration->role, $registration->wing, $registration->flat_number, $registration->company_name, $registration->business_category, $registration->short_description, $registration->mobile_number, $registration->email_address, $registration->website_url, $registration->business_profile, implode(' ', $registration->interested_in ?? []), $registration->preferred_contact_method]))) }}">
                                    <td>
                                        <span class="resident-name">{{ $registration->full_name }}</span>
                                        <span class="row-subtitle">{{ $registration->role }} · Wing
                                            {{ $registration->wing }}, Flat {{ $registration->flat_number }}</span>
                                    </td>
                                    <td>
                                        <span class="business-name">{{ $registration->company_name }}</span>
                                        <span class="row-subtitle">{{ $registration->business_category }}</span>
                                    </td>
                                    <td class="table-contact">
                                        <a
                                            href="tel:{{ $registration->mobile_number }}">{{ $registration->mobile_number }}</a>
                                        <a
                                            href="mailto:{{ $registration->email_address }}">{{ $registration->email_address }}</a>
                                    </td>
                                    <td>
                                        <span>{{ $registration->created_at?->format('d M Y') }}</span>
                                        <span
                                            class="row-subtitle">{{ $registration->created_at?->format('H:i') }}</span>
                                    </td>
                                    <td>
                                        <div class="row-actions">
                                            <button class="secondary-btn view-button" type="button"
                                                data-registration='@json($registration->toArray())'>View</button>
                                            <a class="ghost-btn"
                                                href="{{ route('business-directory.edit', $registration) }}">Edit</a>
                                            <form class="actions-form"
                                                action="{{ route('business-directory.destroy', $registration) }}"
                                                method="POST"
                                                onsubmit="return confirm('Delete this business directory registration?');">
                                                @csrf
                                                @method('DELETE')
                                                <button class="danger-btn" type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            <tr id="noResults" hidden>
                                <td colspan="5">No matching registrations found.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <footer class="table-footer">
                    <span id="tableSummary" aria-live="polite"></span>
                    <nav class="pagination" id="pagination" aria-label="Registration pages"></nav>
                </footer>
            @endif
        </section>
    </main>

    <div id="detailModal" class="modal hidden" aria-hidden="true">
        <div class="modal-card" role="dialog" aria-modal="true" aria-labelledby="detailTitle">
            <button class="modal-close" type="button" aria-label="Close detail view">&times;</button>
            <div class="modal-header">
                <h3 id="detailTitle">Registration details</h3>
                <span id="detailCompany"></span>
            </div>
            <div id="modalContent" class="modal-grid"></div>
        </div>
    </div>

    <script>
        const searchInput = document.getElementById('registrationSearch');
        const pageSizeSelect = document.getElementById('pageSize');
        const tableRows = Array.from(document.querySelectorAll('#registrationRows tr[data-search]'));
        const noResults = document.getElementById('noResults');
        const tableSummary = document.getElementById('tableSummary');
        const pagination = document.getElementById('pagination');
        let currentPage = 1;

        function renderTable() {
            if (!tableRows.length) return;

            const query = searchInput.value.trim().toLowerCase();
            const filteredRows = tableRows.filter((row) => (row.dataset.search || '').includes(query));
            const pageSize = Number(pageSizeSelect.value);
            const pageCount = Math.max(1, Math.ceil(filteredRows.length / pageSize));
            currentPage = Math.min(currentPage, pageCount);

            tableRows.forEach((row) => row.hidden = true);
            filteredRows.slice((currentPage - 1) * pageSize, currentPage * pageSize)
                .forEach((row) => row.hidden = false);
            noResults.hidden = filteredRows.length > 0;

            const firstResult = filteredRows.length ? (currentPage - 1) * pageSize + 1 : 0;
            const lastResult = Math.min(currentPage * pageSize, filteredRows.length);
            tableSummary.textContent = `Showing ${firstResult} to ${lastResult} of ${filteredRows.length} registrations`;

            pagination.replaceChildren();
            const addPageButton = (label, page, disabled, isCurrent = false) => {
                const button = document.createElement('button');
                button.type = 'button';
                button.textContent = label;
                button.disabled = disabled;
                button.dataset.page = page;
                if (isCurrent) button.setAttribute('aria-current', 'page');
                pagination.appendChild(button);
            };

            addPageButton('‹', currentPage - 1, currentPage === 1);
            const firstPage = Math.max(1, Math.min(currentPage - 2, pageCount - 4));
            const lastPage = Math.min(pageCount, firstPage + 4);
            for (let page = firstPage; page <= lastPage; page++) {
                addPageButton(String(page), page, false, page === currentPage);
            }
            addPageButton('›', currentPage + 1, currentPage === pageCount);
        }

        if (searchInput && pageSizeSelect) {
            searchInput.addEventListener('input', () => {
                currentPage = 1;
                renderTable();
            });
            pageSizeSelect.addEventListener('change', () => {
                currentPage = 1;
                renderTable();
            });
            pagination.addEventListener('click', (event) => {
                const button = event.target.closest('button[data-page]');
                if (!button || button.disabled) return;
                currentPage = Number(button.dataset.page);
                renderTable();
            });
            renderTable();
        }

        const modal = document.getElementById('detailModal');
        const modalClose = document.querySelector('.modal-close');

        function renderRegistrationModal(registration) {
            const interested = Array.isArray(registration.interested_in) ? registration.interested_in : [];
            const escapeHtml = (value) => String(value ?? 'Not provided').replace(/[&<>"']/g, (character) => ({
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#039;'
            })[character]);

            document.getElementById('detailTitle').textContent = registration.full_name || 'Registration details';
            document.getElementById('detailCompany').textContent = registration.company_name || 'Business profile';

            document.getElementById('modalContent').innerHTML = `
                <div class="detail-item"><span>Role</span><strong>${escapeHtml(registration.role)}</strong></div>
                <div class="detail-item"><span>Wing / Flat</span><strong>Wing ${escapeHtml(registration.wing || '-')} · Flat ${escapeHtml(registration.flat_number || '-')}</strong></div>
                <div class="detail-item"><span>Business category</span><strong>${escapeHtml(registration.business_category)}</strong></div>
                <div class="detail-item"><span>Preferred contact</span><strong>${escapeHtml(registration.preferred_contact_method)}</strong></div>
                <div class="detail-item"><span>Mobile</span><strong>${escapeHtml(registration.mobile_number)}</strong></div>
                <div class="detail-item"><span>Email</span><strong>${escapeHtml(registration.email_address)}</strong></div>
                <div class="detail-item"><span>Website</span><strong>${escapeHtml(registration.website_url)}</strong></div>
                <div class="detail-item"><span>Business profile</span><strong>${escapeHtml(registration.business_profile)}</strong></div>
                <div class="detail-item wide"><span>Description</span><strong>${escapeHtml(registration.short_description)}</strong></div>
                <div class="detail-item wide"><span>Interested in</span><strong>${escapeHtml(interested.length ? interested.join(', ') : null)}</strong></div>
            `;

            modal.classList.remove('hidden');
            modal.setAttribute('aria-hidden', 'false');
        }

        document.querySelectorAll('.view-button').forEach((button) => {
            button.addEventListener('click', function() {
                const registration = JSON.parse(this.dataset.registration || '{}');
                renderRegistrationModal(registration);
            });
        });

        function closeModal() {
            modal.classList.add('hidden');
            modal.setAttribute('aria-hidden', 'true');
        }

        modalClose.addEventListener('click', closeModal);
        modal.addEventListener('click', function(event) {
            if (event.target === modal) {
                closeModal();
            }
        });

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
                closeModal();
            }
        });
    </script>
</body>

</html>
