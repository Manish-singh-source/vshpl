<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Business Directory Registrations | Veena Smart Homes</title>
    <link rel="icon" href="{{ asset('assets/main.png') }}" type="image/png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400..700;1,9..40,400..700&family=Manrope:wght@600;700;800&family=JetBrains+Mono:wght@500;600&display=swap" rel="stylesheet">
    <style>
        :root {
            --slate-950: #020617;
            --slate-900: #0f172a;
            --slate-800: #1e293b;
            --slate-700: #334155;
            --slate-600: #475569;
            --slate-500: #64748b;
            --slate-400: #94a3b8;
            --slate-300: #cbd5e1;
            --slate-200: #e2e8f0;
            --slate-100: #f1f5f9;
            --slate-50: #f8fafc;
            --indigo-600: #4f46e5;
            --indigo-700: #4338ca;
            --indigo-50: #eef2ff;
            --indigo-100: #e0e7ff;
            --emerald-600: #059669;
            --emerald-50: #ecfdf5;
            --emerald-100: #d1fae5;
            --amber-600: #d97706;
            --amber-50: #fffbeb;
            --rose-600: #e11d48;
            --rose-50: #fff1f2;
            --rose-100: #ffe4e6;
            --sky-600: #0284c7;
            --sky-50: #f0f9ff;
            --radius-xl: 18px;
            --radius-lg: 14px;
            --radius-md: 10px;
            --radius-sm: 6px;
            --shadow-xs: 0 1px 2px 0 rgba(15, 23, 42, 0.04);
            --shadow-sm: 0 1px 3px 0 rgba(15, 23, 42, 0.06), 0 1px 2px -1px rgba(15, 23, 42, 0.06);
            --shadow-card: 0 4px 6px -1px rgba(15, 23, 42, 0.05), 0 2px 4px -2px rgba(15, 23, 42, 0.03);
            --shadow-lg: 0 10px 15px -3px rgba(15, 23, 42, 0.08), 0 4px 6px -4px rgba(15, 23, 42, 0.04);
            --shadow-float: 0 20px 25px -5px rgba(15, 23, 42, 0.1), 0 8px 10px -6px rgba(15, 23, 42, 0.04);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            color: var(--slate-800);
            background: #f8fafc;
            font-family: 'DM Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        .admin-layout {
            display: grid;
            grid-template-columns: 260px minmax(0, 1fr);
            min-height: 100vh;
            background: #f8fafc;
        }

        /* Modern Sleek Sidebar */
        .sidebar {
            position: sticky;
            top: 0;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            padding: 24px 18px;
            background: #ffffff;
            border-right: 1px solid var(--slate-200);
            z-index: 20;
        }

        .sidebar-brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding-bottom: 20px;
            border-bottom: 1px solid var(--slate-100);
            text-decoration: none;
            color: inherit;
        }

        .sidebar-brand img {
            width: 42px;
            height: 42px;
            border-radius: 10px;
            object-fit: contain;
            background: var(--slate-50);
            padding: 4px;
            border: 1px solid var(--slate-200);
            box-shadow: var(--shadow-xs);
        }

        .sidebar-brand-name {
            font-family: 'Manrope', sans-serif;
            font-size: 13.5px;
            font-weight: 800;
            letter-spacing: 0.03em;
            color: var(--slate-900);
            text-transform: uppercase;
        }

        .sidebar-brand-sub {
            font-size: 11px;
            color: var(--slate-500);
            margin-top: 1px;
        }

        .sidebar-desc-box {
            margin-top: 20px;
            padding: 12px 14px;
            background: var(--slate-50);
            border: 1px solid var(--slate-200);
            border-radius: var(--radius-md);
        }

        .sidebar-desc-label {
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--slate-400);
            margin-bottom: 4px;
        }

        .sidebar-desc-text {
            font-size: 12px;
            color: var(--slate-600);
            line-height: 1.5;
        }

        .sidebar-nav {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .nav-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 14px;
            border-radius: var(--radius-md);
            font-size: 13.5px;
            font-weight: 600;
            color: var(--slate-600);
            text-decoration: none;
            transition: all 0.18s ease;
        }

        .nav-item-left {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-item:hover {
            color: var(--indigo-600);
            background: var(--indigo-50);
        }

        .nav-item.active {
            color: var(--indigo-600);
            background: var(--indigo-50);
            font-weight: 700;
            box-shadow: inset 3px 0 0 var(--indigo-600);
        }

        .nav-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 20px;
            height: 20px;
        }

        .nav-external {
            font-size: 11px;
            color: var(--slate-400);
        }

        /* Main Workspace Content */
        .workspace {
            padding: 32px 36px 64px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            min-width: 0;
        }

        /* Top Header */
        .workspace-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .header-title-box {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .header-title-row {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .header-title-box h1 {
            font-family: 'Manrope', sans-serif;
            font-size: 26px;
            font-weight: 800;
            color: var(--slate-900);
            letter-spacing: -0.025em;
        }

        .badge-count {
            display: inline-flex;
            align-items: center;
            padding: 4px 11px;
            border-radius: 999px;
            background: var(--indigo-50);
            color: var(--indigo-600);
            font-size: 12px;
            font-weight: 700;
            border: 1px solid var(--indigo-100);
        }

        .header-title-box p {
            font-size: 13.5px;
            color: var(--slate-500);
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .btn-primary {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 9px 18px;
            border-radius: var(--radius-md);
            background: var(--indigo-600);
            color: #ffffff;
            font: 700 13px 'DM Sans', sans-serif;
            text-decoration: none;
            border: 0;
            cursor: pointer;
            box-shadow: 0 4px 12px rgba(79, 70, 229, 0.22);
            transition: all 0.2s ease;
        }

        .btn-primary:hover {
            background: var(--indigo-700);
            transform: translateY(-1px);
            box-shadow: 0 6px 16px rgba(79, 70, 229, 0.32);
        }

        .btn-secondary {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            padding: 9px 15px;
            border-radius: var(--radius-md);
            background: #ffffff;
            color: var(--slate-700);
            font: 600 13px 'DM Sans', sans-serif;
            text-decoration: none;
            border: 1px solid var(--slate-200);
            cursor: pointer;
            box-shadow: var(--shadow-xs);
            transition: all 0.18s ease;
        }

        .btn-secondary:hover {
            background: var(--slate-50);
            border-color: var(--slate-300);
            color: var(--slate-900);
        }

        /* Main Data Card */
        .data-card {
            background: #ffffff;
            border: 1px solid var(--slate-200);
            border-radius: var(--radius-xl);
            box-shadow: var(--shadow-card);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        /* Toolbar */
        .card-toolbar {
            padding: 18px 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 14px;
            border-bottom: 1px solid var(--slate-100);
            flex-wrap: wrap;
            background: #ffffff;
        }

        .toolbar-filters {
            display: flex;
            align-items: center;
            gap: 10px;
            flex-wrap: wrap;
        }

        .select-filter {
            min-height: 38px;
            padding: 6px 30px 6px 12px;
            border: 1px solid var(--slate-200);
            border-radius: var(--radius-sm);
            background: var(--slate-50);
            color: var(--slate-700);
            font: 600 12.5px 'DM Sans', sans-serif;
            cursor: pointer;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%2364748b' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 10px center;
            transition: all 0.15s ease;
        }

        .select-filter:focus {
            outline: none;
            background-color: #ffffff;
            border-color: var(--indigo-600);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .search-box {
            position: relative;
            flex: 1 1 320px;
            max-width: 440px;
        }

        .search-box input {
            width: 100%;
            min-height: 38px;
            padding: 8px 36px 8px 36px;
            border: 1px solid var(--slate-200);
            border-radius: var(--radius-sm);
            background: var(--slate-50);
            color: var(--slate-800);
            font: 500 13px 'DM Sans', sans-serif;
            transition: all 0.2s ease;
        }

        .search-box input:focus {
            outline: none;
            background: #ffffff;
            border-color: var(--indigo-600);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--slate-400);
            display: flex;
            align-items: center;
            pointer-events: none;
        }

        .search-clear {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border: 0;
            background: var(--slate-200);
            color: var(--slate-600);
            font-size: 11px;
            display: none;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.15s ease;
        }

        .search-clear:hover {
            background: var(--slate-300);
            color: var(--slate-900);
        }

        /* Success Notice */
        .notice {
            margin: 18px 22px 0;
            padding: 12px 16px;
            border-radius: var(--radius-md);
            background: var(--emerald-50);
            border: 1px solid var(--emerald-100);
            color: var(--emerald-600);
            font-size: 13px;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* Table */
        .table-responsive {
            width: 100%;
            overflow-x: auto;
        }

        .data-table {
            width: 100%;
            min-width: 900px;
            border-collapse: collapse;
            text-align: left;
        }

        .data-table thead {
            background: #fafbfc;
            border-bottom: 1px solid var(--slate-200);
        }

        .data-table th {
            padding: 12px 20px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 0.07em;
            text-transform: uppercase;
            color: var(--slate-500);
            white-space: nowrap;
        }

        .data-table td {
            padding: 14px 20px;
            border-bottom: 1px solid var(--slate-100);
            font-size: 13.5px;
            vertical-align: middle;
            color: var(--slate-700);
            transition: background 0.12s ease;
        }

        .data-table tbody tr:hover td {
            background: #f8faff;
        }

        .data-table tbody tr:last-child td {
            border-bottom: none;
        }

        /* Resident Cell */
        .resident-cell {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .resident-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #ffffff;
            box-shadow: 0 0 0 1px var(--slate-200);
            flex-shrink: 0;
        }

        .avatar-initial {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--indigo-50), var(--indigo-100));
            color: var(--indigo-600);
            font-weight: 800;
            font-size: 14.5px;
            flex-shrink: 0;
            border: 2px solid #ffffff;
            box-shadow: 0 0 0 1px var(--slate-200);
        }

        .entity-name {
            font-weight: 700;
            color: var(--slate-900);
            font-size: 14px;
            line-height: 1.3;
        }

        .badges-row {
            display: flex;
            align-items: center;
            gap: 6px;
            margin-top: 4px;
            flex-wrap: wrap;
        }

        .badge-wing {
            display: inline-flex;
            align-items: center;
            padding: 1.5px 7px;
            border-radius: 4px;
            background: var(--indigo-50);
            color: var(--indigo-700);
            font-size: 11px;
            font-weight: 700;
            border: 1px solid var(--indigo-100);
        }

        .badge-flat {
            display: inline-flex;
            align-items: center;
            padding: 1.5px 7px;
            border-radius: 4px;
            background: var(--slate-100);
            color: var(--slate-700);
            font-size: 11px;
            font-weight: 700;
        }

        .role-tag {
            font-size: 11px;
            color: var(--slate-500);
            font-weight: 500;
        }

        /* Business Cell */
        .business-cell {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .business-logo-thumb {
            width: 40px;
            height: 40px;
            border-radius: var(--radius-sm);
            object-fit: contain;
            background: #ffffff;
            border: 1px solid var(--slate-200);
            padding: 3px;
            flex-shrink: 0;
            box-shadow: var(--shadow-xs);
        }

        .badge-cat {
            display: inline-flex;
            align-items: center;
            gap: 4px;
            margin-top: 4px;
            padding: 2px 8px;
            border-radius: 6px;
            background: var(--emerald-50);
            color: var(--emerald-600);
            font-size: 11px;
            font-weight: 700;
            border: 1px solid var(--emerald-100);
        }

        .badge-cat-dot {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: var(--emerald-600);
        }

        .badge-gst {
            display: inline-flex;
            align-items: center;
            gap: 3px;
            margin-top: 4px;
            margin-left: 4px;
            padding: 2px 7px;
            border-radius: 6px;
            background: var(--slate-100);
            color: var(--slate-600);
            font-size: 10.5px;
            font-family: 'JetBrains Mono', monospace;
            font-weight: 600;
            letter-spacing: 0.02em;
            border: 1px solid var(--slate-200);
        }

        /* Contact Cell */
        .contact-links {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .contact-item {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            color: var(--slate-700);
            text-decoration: none;
            font-size: 12.5px;
            font-weight: 500;
            transition: color 0.15s ease;
        }

        .contact-item svg {
            width: 14px;
            height: 14px;
            color: var(--slate-400);
            flex-shrink: 0;
            transition: color 0.15s ease;
        }

        .contact-item:hover {
            color: var(--indigo-600);
        }

        .contact-item:hover svg {
            color: var(--indigo-600);
        }

        /* Date Cell */
        .date-main {
            display: block;
            font-weight: 600;
            color: var(--slate-800);
            font-size: 13px;
        }

        .date-sub {
            display: block;
            color: var(--slate-400);
            font-size: 11px;
            margin-top: 1px;
        }

        /* Action Buttons */
        .actions-flex {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 6px;
            white-space: nowrap;
        }

        .btn-act {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            min-height: 30px;
            padding: 0 10px;
            border-radius: var(--radius-sm);
            font: 700 11.5px 'DM Sans', sans-serif;
            text-decoration: none;
            cursor: pointer;
            border: 1px solid transparent;
            transition: all 0.15s ease;
        }

        .btn-act svg {
            width: 13px;
            height: 13px;
        }

        .btn-act-view {
            background: var(--indigo-50);
            color: var(--indigo-600);
            border-color: var(--indigo-100);
        }

        .btn-act-view:hover {
            background: var(--indigo-600);
            color: #ffffff;
            border-color: var(--indigo-600);
            transform: translateY(-1px);
        }

        .btn-act-edit {
            background: var(--slate-100);
            color: var(--slate-700);
            border-color: var(--slate-200);
        }

        .btn-act-edit:hover {
            background: var(--slate-800);
            color: #ffffff;
            border-color: var(--slate-800);
            transform: translateY(-1px);
        }

        .btn-act-del {
            background: var(--rose-50);
            color: var(--rose-600);
            border-color: var(--rose-100);
        }

        .btn-act-del:hover {
            background: var(--rose-600);
            color: #ffffff;
            border-color: var(--rose-600);
            transform: translateY(-1px);
        }

        /* Card Footer & Pagination */
        .card-footer {
            padding: 14px 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-top: 1px solid var(--slate-100);
            color: var(--slate-500);
            font-size: 13px;
            flex-wrap: wrap;
            gap: 12px;
            background: #ffffff;
        }

        .pagination {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .pagination button {
            min-width: 32px;
            min-height: 32px;
            padding: 0 8px;
            border: 1px solid var(--slate-200);
            border-radius: var(--radius-sm);
            background: #ffffff;
            color: var(--slate-700);
            font: 600 12px 'DM Sans', sans-serif;
            cursor: pointer;
            transition: all 0.15s ease;
        }

        .pagination button:hover:not(:disabled) {
            border-color: var(--indigo-600);
            color: var(--indigo-600);
            background: var(--indigo-50);
        }

        .pagination button[aria-current="page"] {
            border-color: var(--indigo-600);
            background: var(--indigo-600);
            color: #ffffff;
        }

        .pagination button:disabled {
            opacity: 0.4;
            cursor: not-allowed;
        }

        /* Empty State */
        .empty-box {
            padding: 56px 20px;
            text-align: center;
            color: var(--slate-400);
        }

        .empty-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: var(--slate-100);
            color: var(--slate-500);
            margin-bottom: 14px;
        }

        .empty-box strong {
            display: block;
            color: var(--slate-800);
            font-family: 'Manrope', sans-serif;
            font-size: 18px;
            margin-bottom: 4px;
        }

        .empty-box p {
            font-size: 13.5px;
            color: var(--slate-500);
            max-width: 380px;
            margin: 0 auto 16px;
        }

        /* High-End Inspection Modal */
        .modal {
            position: fixed;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            background: rgba(15, 23, 42, 0.55);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
            opacity: 1;
            visibility: visible;
            transition: all 0.2s ease;
            z-index: 999;
        }

        .modal.hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        .modal-card {
            position: relative;
            width: min(720px, 100%);
            max-height: 88vh;
            overflow-y: auto;
            border-radius: var(--radius-xl);
            background: #ffffff;
            border: 1px solid var(--slate-200);
            box-shadow: var(--shadow-float);
            animation: modalArrive 240ms cubic-bezier(0.16, 1, 0.3, 1) both;
            display: flex;
            flex-direction: column;
        }

        .modal-close {
            position: absolute;
            top: 16px;
            right: 16px;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            border: 1px solid var(--slate-200);
            background: #ffffff;
            color: var(--slate-500);
            font-size: 18px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            line-height: 1;
            transition: all 0.15s ease;
            z-index: 2;
        }

        .modal-close:hover {
            background: var(--rose-50);
            color: var(--rose-600);
            border-color: var(--rose-100);
        }

        .modal-hero {
            padding: 24px 28px;
            background: linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%);
            border-bottom: 1px solid var(--slate-200);
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .modal-hero-avatar {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid #ffffff;
            box-shadow: var(--shadow-sm);
        }

        .modal-hero-initial {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: var(--indigo-600);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 24px;
            border: 3px solid #ffffff;
            box-shadow: var(--shadow-sm);
        }

        .modal-hero-info {
            flex: 1;
            min-width: 0;
        }

        .modal-hero-name {
            font-family: 'Manrope', sans-serif;
            font-size: 20px;
            font-weight: 800;
            color: var(--slate-900);
            line-height: 1.2;
        }

        .modal-hero-company {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 5px;
            font-size: 14px;
            font-weight: 600;
            color: var(--indigo-600);
        }

        .modal-hero-logo {
            max-height: 28px;
            max-width: 60px;
            object-fit: contain;
            border-radius: 4px;
            background: #ffffff;
            padding: 2px 4px;
            border: 1px solid var(--slate-200);
        }

        .modal-body {
            padding: 24px 28px;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .modal-section-title {
            font-size: 11px;
            font-weight: 800;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--slate-400);
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .modal-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px 14px;
        }

        .detail-item {
            padding: 12px 14px;
            border: 1px solid var(--slate-200);
            border-radius: var(--radius-md);
            background: var(--slate-50);
            position: relative;
        }

        .detail-item-label {
            display: block;
            margin-bottom: 4px;
            color: var(--slate-500);
            font-size: 10.5px;
            font-weight: 700;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        .detail-item-val {
            color: var(--slate-900);
            font-size: 13.5px;
            font-weight: 600;
            line-height: 1.45;
            overflow-wrap: anywhere;
        }

        .detail-item-val a {
            color: var(--indigo-600);
            text-decoration: none;
            transition: color 0.15s ease;
        }

        .detail-item-val a:hover {
            text-decoration: underline;
        }

        .detail-item.wide {
            grid-column: 1 / -1;
        }

        .copy-pill {
            margin-left: 6px;
            padding: 2px 6px;
            border-radius: 4px;
            background: var(--slate-200);
            color: var(--slate-700);
            font-size: 10px;
            font-weight: 700;
            border: 0;
            cursor: pointer;
            transition: all 0.15s ease;
        }

        .copy-pill:hover {
            background: var(--indigo-600);
            color: #ffffff;
        }

        /* Toast feedback */
        .toast {
            position: fixed;
            bottom: 24px;
            right: 24px;
            background: var(--slate-900);
            color: #ffffff;
            padding: 10px 18px;
            border-radius: var(--radius-md);
            font-size: 13px;
            font-weight: 600;
            box-shadow: var(--shadow-lg);
            z-index: 10000;
            display: flex;
            align-items: center;
            gap: 8px;
            animation: toastIn 0.2s ease-out;
        }

        @keyframes modalArrive {
            from {
                opacity: 0;
                transform: scale(0.96) translateY(12px);
            }
            to {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        @keyframes toastIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 980px) {
            .admin-layout {
                grid-template-columns: 1fr;
            }

            .sidebar {
                position: static;
                height: auto;
                border-right: none;
                border-bottom: 1px solid var(--slate-200);
                padding: 16px 20px;
            }

            .workspace {
                padding: 20px 16px;
            }
        }

        @media (max-width: 640px) {
            .workspace-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .card-toolbar {
                flex-direction: column;
                align-items: stretch;
            }

            .toolbar-filters {
                width: 100%;
            }

            .toolbar-filters select {
                flex: 1;
            }

            .search-box {
                max-width: 100%;
            }

            .modal-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <main class="admin-layout">
        <!-- Sidebar Navigation -->
        <aside class="sidebar" aria-label="Admin Navigation">
            <a href="{{ url('/') }}" class="sidebar-brand">
                <img src="{{ asset('assets/main.png') }}" alt="Veena Smart Homes Logo">
                <div>
                    <div class="sidebar-brand-name">Veena Homes</div>
                    <div class="sidebar-brand-sub">Community Portal</div>
                </div>
            </a>

            <nav class="sidebar-nav" aria-label="Main navigation">
                <a href="{{ route('business-directory.admin') }}" class="nav-item active">
                    <div class="nav-item-left">
                        <span class="nav-icon">
                            <svg width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                            </svg>
                        </span>
                        <span>Directory Records</span>
                    </div>
                </a>
            </nav>
        </aside>

        <!-- Main Workspace Area -->
        <div class="workspace">
            <!-- Header -->
            <div class="workspace-header">
                <div class="header-title-box">
                    <div class="header-title-row">
                        <h1>Directory Registrations</h1>
                        <span class="badge-count" id="recordCountBadge">{{ $registrations->count() }} {{ $registrations->count() === 1 ? 'record' : 'records' }}</span>
                    </div>
                    <p>Review, search, and manage verified resident profiles and business directory listings.</p>
                </div>
            </div>

            <!-- Data Table Card -->
            <section class="data-card" aria-label="Registration submissions table">
                <!-- Toolbar -->
                <div class="card-toolbar">
                    <div class="toolbar-filters">
                        <select id="wingFilter" class="select-filter" aria-label="Filter by wing">
                            <option value="">All Wings</option>
                        </select>

                        <select id="categoryFilter" class="select-filter" aria-label="Filter by category">
                            <option value="">All Categories</option>
                        </select>

                        <select id="pageSize" class="select-filter" aria-label="Rows per page">
                            <option value="10">10 rows</option>
                            <option value="25">25 rows</option>
                            <option value="50">50 rows</option>
                        </select>
                    </div>

                    <div class="search-box">
                        <span class="search-icon">
                            <svg width="15" height="15" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </span>
                        <input id="registrationSearch" type="search" placeholder="Search resident, business, flat, GST or phone...">
                        <button type="button" id="searchClear" class="search-clear" aria-label="Clear search">&times;</button>
                    </div>
                </div>

                @if (session('success'))
                    <div class="notice" role="status">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                @if ($registrations->isEmpty())
                    <div class="empty-box">
                        <div class="empty-icon">
                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                            </svg>
                        </div>
                        <strong>No registrations yet</strong>
                        <p>New resident directory submissions will automatically populate here.</p>
                    </div>
                @else
                    <div class="table-responsive">
                        <table class="data-table">
                            <thead>
                                <tr>
                                    <th scope="col">Resident</th>
                                    <th scope="col">Business Details</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Registered</th>
                                    <th scope="col" style="text-align: right;">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="registrationRows">
                                @foreach ($registrations as $registration)
                                    <tr data-wing="{{ $registration->wing }}"
                                        data-category="{{ $registration->business_category }}"
                                        data-search="{{ strtolower(implode(' ', array_filter([
                                        $registration->full_name,
                                        $registration->wing,
                                        $registration->flat_number,
                                        $registration->company_name,
                                        $registration->business_category,
                                        $registration->gst_number,
                                        $registration->short_description,
                                        $registration->mobile_number,
                                        $registration->email_address,
                                        $registration->website_url,
                                        $registration->business_profile,
                                        implode(' ', $registration->interested_in ?? []),
                                        $registration->preferred_contact_method
                                    ]))) }}">
                                        <td>
                                            <div class="resident-cell">
                                                @if ($registration->your_image)
                                                    <img src="{{ asset($registration->your_image) }}" alt="{{ $registration->full_name }}" class="resident-avatar">
                                                @else
                                                    <div class="avatar-initial">
                                                        {{ strtoupper(substr($registration->full_name, 0, 1)) }}
                                                    </div>
                                                @endif
                                                <div>
                                                    <div class="entity-name">{{ $registration->full_name }}</div>
                                                    <div class="badges-row">
                                                        <span class="badge-wing">Wing {{ $registration->wing }}</span>
                                                        <span class="badge-flat">#{{ $registration->flat_number }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="business-cell">
                                                @if ($registration->business_logo)
                                                    <img src="{{ asset($registration->business_logo) }}" alt="Logo" class="business-logo-thumb">
                                                @endif
                                                <div>
                                                    <div class="entity-name">{{ $registration->company_name }}</div>
                                                    <div>
                                                        <span class="badge-cat">
                                                            <span class="badge-cat-dot"></span>
                                                            {{ $registration->business_category }}
                                                        </span>
                                                        @if ($registration->gst_number)
                                                            <span class="badge-gst" title="GST Number">GST: {{ $registration->gst_number }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="contact-links">
                                            <a href="tel:{{ $registration->mobile_number }}" class="contact-item" title="Call {{ $registration->mobile_number }}">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                                </svg>
                                                <span>{{ $registration->mobile_number }}</span>
                                            </a>
                                            <a href="mailto:{{ $registration->email_address }}" class="contact-item" title="Email {{ $registration->email_address }}">
                                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                                </svg>
                                                <span>{{ $registration->email_address }}</span>
                                            </a>
                                        </td>
                                        <td>
                                            <span class="date-main">{{ $registration->created_at?->format('d M Y') }}</span>
                                            <span class="date-sub">{{ $registration->created_at?->format('h:i A') }}</span>
                                        </td>
                                        <td>
                                            <div class="actions-flex">
                                                <button class="btn-act btn-act-view view-button" type="button" data-registration='@json($registration->toArray())' title="View complete details">
                                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                    </svg>
                                                    View
                                                </button>
                                                <a class="btn-act btn-act-edit" href="{{ route('business-directory.edit', $registration) }}" title="Edit registration">
                                                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                    </svg>
                                                    Edit
                                                </a>
                                                <form action="{{ route('business-directory.destroy', $registration) }}" method="POST" onsubmit="return confirm('Delete this business directory registration permanently?');" style="margin: 0;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn-act btn-act-del" type="submit" title="Delete record">
                                                        <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr id="noResults" hidden>
                                    <td colspan="5">
                                        <div class="empty-box" style="padding: 40px 20px;">
                                            <strong>No matching registrations</strong>
                                            <p>No records found matching your selected filters or search terms.</p>
                                            <button type="button" id="resetFiltersBtn" class="btn-secondary" style="display: inline-flex;">Reset Filters</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Footer & Pagination -->
                    <footer class="card-footer">
                        <span id="tableSummary" aria-live="polite">Showing records</span>
                        <nav class="pagination" id="pagination" aria-label="Pagination"></nav>
                    </footer>
                @endif
            </section>
        </div>
    </main>

    <!-- High-End Inspection Detail Modal -->
    <div id="detailModal" class="modal hidden" aria-hidden="true">
        <div class="modal-card" role="dialog" aria-modal="true" aria-labelledby="detailTitle">
            <button class="modal-close" type="button" aria-label="Close modal">&times;</button>
            
            <div class="modal-hero">
                <div id="modalHeroAvatarBox"></div>
                <div class="modal-hero-info">
                    <h3 id="detailTitle" class="modal-hero-name">Resident Details</h3>
                    <div id="detailCompanyRow" class="modal-hero-company"></div>
                </div>
            </div>

            <div class="modal-body">
                <div>
                    <div class="modal-section-title">
                        <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Resident & Residence
                    </div>
                    <div id="modalResidentGrid" class="modal-grid"></div>
                </div>

                <div>
                    <div class="modal-section-title">
                        <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        Business Information
                    </div>
                    <div id="modalBusinessGrid" class="modal-grid"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const searchInput = document.getElementById('registrationSearch');
        const searchClear = document.getElementById('searchClear');
        const pageSizeSelect = document.getElementById('pageSize');
        const wingFilter = document.getElementById('wingFilter');
        const categoryFilter = document.getElementById('categoryFilter');
        const resetFiltersBtn = document.getElementById('resetFiltersBtn');
        const tableRows = Array.from(document.querySelectorAll('#registrationRows tr[data-search]'));
        const noResults = document.getElementById('noResults');
        const tableSummary = document.getElementById('tableSummary');
        const pagination = document.getElementById('pagination');
        const recordCountBadge = document.getElementById('recordCountBadge');
        let currentPage = 1;

        // Populate Wing and Category dropdown options automatically from the data
        if (tableRows.length) {
            const wings = Array.from(new Set(tableRows.map(r => r.dataset.wing).filter(Boolean))).sort();
            wings.forEach(wing => {
                const opt = document.createElement('option');
                opt.value = wing;
                opt.textContent = `Wing ${wing}`;
                wingFilter.appendChild(opt);
            });

            const categories = Array.from(new Set(tableRows.map(r => r.dataset.category).filter(Boolean))).sort();
            categories.forEach(cat => {
                const opt = document.createElement('option');
                opt.value = cat;
                opt.textContent = cat;
                categoryFilter.appendChild(opt);
            });
        }

        function getFilteredRows() {
            const query = (searchInput ? searchInput.value : '').trim().toLowerCase();
            const selectedWing = wingFilter ? wingFilter.value : '';
            const selectedCat = categoryFilter ? categoryFilter.value : '';

            return tableRows.filter((row) => {
                const matchesQuery = !query || (row.dataset.search || '').includes(query);
                const matchesWing = !selectedWing || row.dataset.wing === selectedWing;
                const matchesCat = !selectedCat || row.dataset.category === selectedCat;
                return matchesQuery && matchesWing && matchesCat;
            });
        }

        function renderTable() {
            if (!tableRows.length) return;

            const filteredRows = getFilteredRows();
            const pageSize = pageSizeSelect ? Number(pageSizeSelect.value) : 10;
            const pageCount = Math.max(1, Math.ceil(filteredRows.length / pageSize));
            currentPage = Math.min(currentPage, pageCount);

            tableRows.forEach((row) => row.hidden = true);
            filteredRows.slice((currentPage - 1) * pageSize, currentPage * pageSize)
                .forEach((row) => row.hidden = false);

            if (noResults) noResults.hidden = filteredRows.length > 0;

            const firstResult = filteredRows.length ? (currentPage - 1) * pageSize + 1 : 0;
            const lastResult = Math.min(currentPage * pageSize, filteredRows.length);
            if (tableSummary) {
                tableSummary.textContent = `Showing ${firstResult} to ${lastResult} of ${filteredRows.length} filtered entries (${tableRows.length} total)`;
            }

            if (recordCountBadge) {
                recordCountBadge.textContent = `${filteredRows.length} of ${tableRows.length} ${tableRows.length === 1 ? 'record' : 'records'}`;
            }

            if (searchClear) {
                searchClear.style.display = searchInput && searchInput.value ? 'flex' : 'none';
            }

            if (!pagination) return;
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

        // Search & Filters Listeners
        if (searchInput) {
            searchInput.addEventListener('input', () => {
                currentPage = 1;
                renderTable();
            });
        }

        if (searchClear) {
            searchClear.addEventListener('click', () => {
                if (searchInput) searchInput.value = '';
                currentPage = 1;
                renderTable();
                if (searchInput) searchInput.focus();
            });
        }

        if (wingFilter) {
            wingFilter.addEventListener('change', () => {
                currentPage = 1;
                renderTable();
            });
        }

        if (categoryFilter) {
            categoryFilter.addEventListener('change', () => {
                currentPage = 1;
                renderTable();
            });
        }

        if (pageSizeSelect) {
            pageSizeSelect.addEventListener('change', () => {
                currentPage = 1;
                renderTable();
            });
        }

        if (pagination) {
            pagination.addEventListener('click', (event) => {
                const button = event.target.closest('button[data-page]');
                if (!button || button.disabled) return;
                currentPage = Number(button.dataset.page);
                renderTable();
            });
        }

        if (resetFiltersBtn) {
            resetFiltersBtn.addEventListener('click', () => {
                if (searchInput) searchInput.value = '';
                if (wingFilter) wingFilter.value = '';
                if (categoryFilter) categoryFilter.value = '';
                currentPage = 1;
                renderTable();
            });
        }

        // Modal Functionality
        const modal = document.getElementById('detailModal');
        const modalClose = document.querySelector('.modal-close');

        function showToast(message) {
            const existing = document.querySelector('.toast');
            if (existing) existing.remove();

            const toast = document.createElement('div');
            toast.className = 'toast';
            toast.innerHTML = `<span>✓</span><span>${message}</span>`;
            document.body.appendChild(toast);
            setTimeout(() => toast.remove(), 2600);
        }

        function copyToClipboard(text, label) {
            navigator.clipboard.writeText(text).then(() => {
                showToast(`Copied ${label} to clipboard!`);
            }).catch(() => {
                showToast(`Copy failed`);
            });
        }

        function renderRegistrationModal(registration) {
            const interested = Array.isArray(registration.interested_in) ? registration.interested_in : [];
            const escapeHtml = (value) => String(value ?? 'Not provided').replace(/[&<>"']/g, (character) => ({
                '&': '&amp;',
                '<': '&lt;',
                '>': '&gt;',
                '"': '&quot;',
                "'": '&#039;'
            })[character]);

            // Hero Avatar
            const avatarBox = document.getElementById('modalHeroAvatarBox');
            if (registration.your_image) {
                avatarBox.innerHTML = `<img src="/${escapeHtml(registration.your_image)}" alt="${escapeHtml(registration.full_name)}" class="modal-hero-avatar">`;
            } else {
                const initial = (registration.full_name || 'R').charAt(0).toUpperCase();
                avatarBox.innerHTML = `<div class="modal-hero-initial">${initial}</div>`;
            }

            document.getElementById('detailTitle').textContent = registration.full_name || 'Resident Details';
            
            // Company + Logo
            let companyHtml = `<span>${escapeHtml(registration.company_name)}</span>`;
            if (registration.business_logo) {
                companyHtml = `<img src="/${escapeHtml(registration.business_logo)}" alt="Logo" class="modal-hero-logo"> ` + companyHtml;
            }
            document.getElementById('detailCompanyRow').innerHTML = companyHtml;

            // Resident Details Section
            document.getElementById('modalResidentGrid').innerHTML = `
                <div class="detail-item">
                    <span class="detail-item-label">Residence</span>
                    <strong class="detail-item-val">Wing ${escapeHtml(registration.wing || '-')} · Flat #${escapeHtml(registration.flat_number || '-')}</strong>
                </div>
                <div class="detail-item">
                    <span class="detail-item-label">Mobile Number</span>
                    <strong class="detail-item-val">
                        <a href="tel:${escapeHtml(registration.mobile_number)}">${escapeHtml(registration.mobile_number)}</a>
                        <button type="button" class="copy-pill" onclick="copyToClipboard('${escapeHtml(registration.mobile_number)}', 'Mobile')">Copy</button>
                    </strong>
                </div>
                <div class="detail-item wide">
                    <span class="detail-item-label">Email Address</span>
                    <strong class="detail-item-val">
                        <a href="mailto:${escapeHtml(registration.email_address)}">${escapeHtml(registration.email_address)}</a>
                        <button type="button" class="copy-pill" onclick="copyToClipboard('${escapeHtml(registration.email_address)}', 'Email')">Copy</button>
                    </strong>
                </div>
            `;

            // Business Details Section - Only show fields that have values
            let bizHtml = `
                <div class="detail-item">
                    <span class="detail-item-label">Category</span>
                    <strong class="detail-item-val">${escapeHtml(registration.business_category)}</strong>
                </div>
            `;

            if (registration.gst_number) {
                bizHtml += `
                    <div class="detail-item">
                        <span class="detail-item-label">GST Number</span>
                        <strong class="detail-item-val">
                            ${escapeHtml(registration.gst_number)} 
                            <button type="button" class="copy-pill" onclick="copyToClipboard('${escapeHtml(registration.gst_number)}', 'GST')">Copy</button>
                        </strong>
                    </div>
                `;
            }

            if (registration.website_url) {
                bizHtml += `
                    <div class="detail-item">
                        <span class="detail-item-label">Website</span>
                        <strong class="detail-item-val">
                            <a href="${escapeHtml(registration.website_url)}" target="_blank" rel="noopener">${escapeHtml(registration.website_url)} ↗</a>
                        </strong>
                    </div>
                `;
            }

            if (registration.business_profile) {
                bizHtml += `
                    <div class="detail-item">
                        <span class="detail-item-label">LinkedIn / Social Profile</span>
                        <strong class="detail-item-val">
                            ${registration.business_profile.startsWith('http') 
                                ? `<a href="${escapeHtml(registration.business_profile)}" target="_blank" rel="noopener">${escapeHtml(registration.business_profile)} ↗</a>`
                                : `${escapeHtml(registration.business_profile)}`}
                        </strong>
                    </div>
                `;
            }

            if (registration.short_description) {
                bizHtml += `
                    <div class="detail-item wide">
                        <span class="detail-item-label">Business Description</span>
                        <strong class="detail-item-val">${escapeHtml(registration.short_description)}</strong>
                    </div>
                `;
            }

            document.getElementById('modalBusinessGrid').innerHTML = bizHtml;

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
            if (modal) {
                modal.classList.add('hidden');
                modal.setAttribute('aria-hidden', 'true');
            }
        }

        if (modalClose) modalClose.addEventListener('click', closeModal);
        if (modal) {
            modal.addEventListener('click', function(event) {
                if (event.target === modal) {
                    closeModal();
                }
            });
        }

        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape' && modal && !modal.classList.contains('hidden')) {
                closeModal();
            }
        });

        // Initialize table
        renderTable();
    </script>
</body>

</html>