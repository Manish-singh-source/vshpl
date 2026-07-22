<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veena Smart Homes | Ganesh Utsav Celebration</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/main.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@500;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --cream: #fff5e7;
            --cream-deep: #f7e6ca;
            --saffron: #d87900;
            --maroon: #8f1217;
            --maroon-deep: #5f0e11;
            --gold: #efbf62;
            --brown: #42261d;
            --shadow: 0 24px 60px rgba(119, 52, 15, 0.18);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            color: var(--brown);
            background:
                radial-gradient(circle at top left, rgba(255, 185, 88, 0.28), transparent 30%),
                radial-gradient(circle at top right, rgba(177, 25, 34, 0.16), transparent 28%),
                linear-gradient(135deg, #fff8ef 0%, #fff1d8 48%, #f8e2bb 100%);
            overflow-x: hidden;
        }

        
        body::before {
            background:
                radial-gradient(circle at 15% 18%, rgba(217, 121, 0, 0.08), transparent 15%),
                radial-gradient(circle at 85% 15%, rgba(143, 18, 23, 0.08), transparent 18%),
                radial-gradient(circle at 80% 78%, rgba(217, 121, 0, 0.08), transparent 15%);
        }

        body::after {
            inset: 22px;
            border: 1.5px solid rgba(216, 121, 0, 0.24);
            border-radius: 28px;
        }

        .page {
            position: relative;
            z-index: 1;
            width: min(1400px, calc(100% - 40px));
            margin: 20px auto;
            padding: 28px;
            border-radius: 30px;
            background: rgba(255, 249, 239, 0.82);
            box-shadow: var(--shadow);
            backdrop-filter: blur(2px);
            overflow: hidden;
        }



        .corner-garland {
            position: absolute;
            top: 0;
            width: 200px;
            height: 140px;
            pointer-events: none;
            z-index: 2;
        }

        .corner-garland.left {
            left: 0;
            transform: scaleX(-1);
        }

        .corner-garland.right {
            right: 0;
        }

        .corner-garland::before,
        .corner-garland::after {
            content: "";
            position: absolute;
            inset: 0;
            border-radius: 0 0 90% 90%;
        }

        .corner-garland::before {
            background:
                radial-gradient(circle, #a70612 0 18px, transparent 19px) 0 0 / 44px 44px repeat-x,
                radial-gradient(circle, #f39a1f 0 18px, transparent 19px) 22px 14px / 44px 44px repeat-x,
                radial-gradient(circle, #f0ca4a 0 15px, transparent 16px) 10px 32px / 42px 42px repeat-x;
            filter: drop-shadow(0 7px 10px rgba(86, 27, 5, 0.2));
        }

        .corner-garland::after {
            width: 80px;
            height: 80px;
            right: 10px;
            top: -12px;
            left: auto;
            background:
                radial-gradient(circle at 50% 55%, #32622a 0 28px, transparent 29px),
                radial-gradient(circle at 45% 60%, #497d38 0 14px, transparent 15px);
            transform: rotate(18deg);
        }

        .layout {
            display: grid;
            grid-template-columns: 1.02fr 0.98fr;
            gap: 24px;
            align-items: stretch;
        }

        .visual-panel {
            position: relative;
            min-height: 760px;
            border-radius: 28px;
            overflow: hidden;
            background:
                linear-gradient(180deg, rgba(76, 28, 8, 0), rgba(76, 28, 8, 0)),
                url('{{ asset('assets/ganpti.png') }}') center/cover no-repeat;
            box-shadow: inset 0 0 0 1px rgba(255, 232, 198, 0.22);
        }
        .mantra-badge {
            position: absolute;
            top: 86px;
            right: 36px;
            width: 138px;
            aspect-ratio: 1;
            padding: 16px;
            display: grid;
            place-items: center;
            text-align: center;
            color: #ffe5a4;
            font-size: 20px;
            line-height: 1.35;
            background: linear-gradient(180deg, #b11a20 0%, #7d1014 100%);
            clip-path: polygon(50% 0%, 70% 8%, 88% 20%, 100% 50%, 88% 80%, 70% 92%, 50% 100%, 30% 92%, 12% 80%, 0% 50%, 12% 20%, 30% 8%);
            border: 4px solid rgba(246, 192, 95, 0.9);
            box-shadow: 0 16px 28px rgba(80, 14, 18, 0.28);
        }

        .mantra-badge span {
            display: block;
            font-size: 13px;
            color: #fff1cf;
        }

        .floating-diya {
            position: absolute;
            width: 76px;
            height: 110px;
            bottom: 88px;
            background:
                radial-gradient(circle at 50% 22%, #ffd77f 0 14px, transparent 15px),
                radial-gradient(circle at 50% 40%, rgba(255, 214, 118, 0.4), transparent 24px),
                linear-gradient(180deg, transparent 0 36%, #b26b10 36% 48%, transparent 48%),
                radial-gradient(circle at 50% 88%, #c98a2b 0 24px, #8f5510 25px, transparent 26px);
            filter: drop-shadow(0 10px 15px rgba(39, 16, 4, 0.25));
        }

        .floating-diya.left {
            left: 22px;
        }

        .floating-diya.right {
            right: 22px;
        }

        .bottom-banner {
            position: absolute;
            left: 24px;
            right: 24px;
            bottom: 18px;
            padding: 20px 28px 18px;
            border-radius: 24px;
            color: #ffe6a5;
            background: linear-gradient(180deg, #931017, #6a0d11);
            border: 2px solid rgba(239, 191, 98, 0.82);
            text-align: center;
            box-shadow: 0 16px 26px rgba(63, 12, 14, 0.22);
        }

        .bottom-banner .small {
            display: block;
            font-size: 17px;
            color: #fff9e8;
            margin-bottom: 4px;
        }

        .bottom-banner .big {
            display: block;
            font-family: 'Cinzel', serif;
            font-size: clamp(1.6rem, 2vw, 2.3rem);
            letter-spacing: 1px;
        }

        .content-panel {
            position: relative;
            
        }

        .mini-ornament {
            width: 140px;
            height: 18px;
            margin: 0 auto 16px;
            position: relative;
        }

        .mini-ornament::before,
        .mini-ornament::after,
        .mini-ornament span {
            content: "";
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .mini-ornament::before,
        .mini-ornament::after {
            width: 52px;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--saffron), transparent);
        }

        .mini-ornament::before {
            left: 0;
        }

        .mini-ornament::after {
            right: 0;
        }

        .mini-ornament span {
            left: 50%;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            background: linear-gradient(180deg, #ffcb6b, #d87900);
            transform: translate(-50%, -50%);
            box-shadow: 0 0 0 5px rgba(239, 191, 98, 0.16);
        }

        .eyebrow {
            font-size: 15px;
            font-weight: 600;
            letter-spacing: 2px;
            text-transform: uppercase;
            text-align: center;
            color: var(--saffron);
            margin: 0 0 6px;
        }

        .title {
            margin: 0;
            font-family: 'Cinzel', serif;
            font-size: clamp(2rem, 6vw, 3rem);
            line-height: 0.92;
            color: var(--maroon);
            text-align: center;
            text-shadow: 0 10px 24px rgba(104, 17, 20, 0.08);
        }

        .title strong {
            display: block;
            color: var(--maroon-deep);
        }

        .sub-mantra {
            margin: 18px auto 12px;
            text-align: center;
            font-size: clamp(1rem, 1.5vw, 1.35rem);
            font-weight: 600;
            color: #bc4c12;
        }

        .description {
            max-width: 560px;
            margin: 0 auto 22px;
            text-align: center;
            font-size: 1.12rem;
            color: rgba(66, 38, 29, 0.88);
        }

        .booking-card {
            max-width: 640px;
            margin: 18px auto 0;
            padding: 22px;
            border-radius: 30px;
            background: rgba(255, 251, 244, 0.94);
            border: 2px solid rgba(225, 159, 53, 0.45);
            box-shadow: 0 20px 50px rgba(111, 58, 14, 0.12);
        }

        .field-grid {
            display: grid;
            gap: 16px;
        }

        .field {
            display: grid;
            grid-template-columns: 1fr;
            gap: 8px;
            align-items: start;
        }

        .field-label {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 0 2px;
            font-weight: 600;
            color: #553227;
            font-size: 0.98rem;
        }

        .field-input,
        .field-upload,
        .payment-option,
        .payment-detail,
        .qr-panel {
            background: #fff;
            border: 1.5px solid rgba(188, 76, 18, 0.2);
            color: #4c3327;
            border-radius: 18px;
        }

        .field-control {
            position: relative;
        }

        .field-input,
        .field-upload {
            width: 100%;
            min-height: 58px;
            padding: 0 18px;
            font: inherit;
            outline: none;
        }

        select.field-input {
            appearance: none;
            background-image: linear-gradient(45deg, transparent 50%, #9b4a1a 50%), linear-gradient(135deg, #9b4a1a 50%, transparent 50%);
            background-position: calc(100% - 22px) 28px, calc(100% - 14px) 28px;
            background-size: 8px 8px, 8px 8px;
            background-repeat: no-repeat;
            cursor: pointer;
        }

        input.field-input,
        select.field-input {
            box-shadow: inset 0 0 0 1px rgba(255, 241, 219, 0.82);
        }

        .field-upload {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 12px 10px 18px;
            gap: 12px;
        }

        .field-upload span {
            color: rgba(76, 51, 39, 0.72);
        }

        .upload-btn,
        .qr-download {
            border: 0;
            border-radius: 999px;
            font: inherit;
            font-weight: 600;
            cursor: pointer;
            color: #fff8e8;
            background: linear-gradient(180deg, #bd1c22 0%, #8f1217 100%);
            box-shadow: 0 10px 18px rgba(106, 13, 17, 0.16);
        }

        .sponsor-check {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
            padding: 12px 14px;
            border-radius: 16px;
            background: rgba(255, 247, 233, 0.95);
            border: 1px solid rgba(216, 121, 0, 0.18);
            color: #553227;
            font-size: 0.95rem;
            font-weight: 500;
        }

        .sponsor-check input {
            width: 18px;
            height: 18px;
            accent-color: #8f1217;
        }



        .amount-summary {
            display: grid;
            gap: 12px;
            padding: 14px;
            border-radius: 18px;
            background: linear-gradient(180deg, rgba(255, 248, 236, 0.98), rgba(255, 240, 214, 0.92));
            border: 1px solid rgba(216, 121, 0, 0.18);
        }

        .summary-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            color: #553227;
            font-size: 0.95rem;
        }

        .summary-row strong {
            color: #7b1916;
        }

        .summary-row-select {
            display: grid;
            grid-template-columns: 1fr 180px;
            align-items: center;
        }

        .summary-row-select .field-input {
            min-height: 50px;
        }

        .summary-row.total {
            padding-top: 10px;
            border-top: 1px dashed rgba(188, 76, 18, 0.24);
            font-size: 1rem;
            font-weight: 700;
        }

        .upload-btn {
            padding: 12px 18px;
        }

        .payment-methods {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
        }

        .payment-option {
            min-height: 68px;
            padding: 14px 16px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 600;
        }

        .payment-option.active {
            border-color: rgba(143, 18, 23, 0.48);
            box-shadow: inset 0 0 0 1px rgba(239, 191, 98, 0.62);
            background: linear-gradient(180deg, rgba(255, 245, 231, 0.94), rgba(255, 234, 204, 0.9));
        }

        .payment-dot {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            border: 2px solid #b1551e;
            background: transparent;
            position: relative;
            flex: 0 0 18px;
        }

        .payment-option.active .payment-dot::after {
            content: "";
            position: absolute;
            inset: 3px;
            border-radius: 50%;
            background: #b21b1f;
        }

        .payment-layout {
            display: grid;
            grid-template-columns: 1fr;
            gap: 14px;
        }

        .payment-detail {
            padding: 16px;
        }

        .payment-detail h3 {
            margin: 0 0 12px;
            font-size: 1rem;
            color: #7b1916;
        }

        .payment-detail-grid {
            display: grid;
            gap: 12px;
        }

        .payment-row {
            display: grid;
            grid-template-columns: 1fr 220px;
            gap: 12px;
            align-items: stretch;
        }

        .qr-panel {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 14px;
            gap: 12px;
            background: linear-gradient(180deg, #fffdfa 0%, #fff4df 100%);
        }

        .qr-panel img {
            width: 94px;
            height: 94px;
            object-fit: contain;
            border-radius: 14px;
            border: 1px solid rgba(188, 76, 18, 0.18);
            background: #fff;
            padding: 8px;
        }

        .qr-panel p {
            margin: 0;
            font-size: 0.88rem;
            text-align: center;
            color: rgba(76, 51, 39, 0.82);
        }

        .qr-download {
            padding: 12px 16px;
            width: 100%;
        }

        .payment-note {
            margin: 8px 0 0;
            font-size: 0.87rem;
            color: rgba(76, 51, 39, 0.72);
        }

        .cta {
            margin-top: 18px;
            width: 100%;
            min-height: 72px;
            border: 0;
            border-radius: 999px;
            color: #fff8e8;
            font-size: 1.05rem;
            font-weight: 700;
            letter-spacing: 0.4px;
            cursor: pointer;
            background: linear-gradient(180deg, #be161d 0%, #920e13 100%);
            box-shadow: inset 0 0 0 2px rgba(255, 198, 85, 0.62), 0 14px 28px rgba(106, 13, 17, 0.24);
        }

        .cta span {
            display: inline-flex;
            align-items: center;
            gap: 14px;
        }

        .role-selector {
            margin-bottom: 20px;
            padding: 18px;
            border-radius: 22px;
            background: linear-gradient(180deg, rgba(255, 247, 233, 0.95), rgba(255, 239, 211, 0.88));
            border: 1px solid rgba(216, 121, 0, 0.18);
        }

        .role-selector h3 {
            margin: 0 0 6px;
            font-size: 1rem;
            color: #7b1916;
        }

        .role-selector p {
            margin: 0 0 14px;
            font-size: 0.9rem;
            color: rgba(76, 51, 39, 0.78);
        }

        .role-options {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 12px;
        }

        .role-option {
            display: flex;
            align-items: center;
            gap: 12px;
            min-height: 60px;
            padding: 0 16px;
            border-radius: 18px;
            cursor: pointer;
            background: #fff;
            border: 1.5px solid rgba(188, 76, 18, 0.2);
            font-weight: 600;
            color: #553227;
        }

        .role-option input {
            display: none;
        }

        .role-option.active {
            background: linear-gradient(180deg, #bd1c22 0%, #8f1217 100%);
            color: #fff7e4;
            border-color: rgba(255, 198, 85, 0.62);
            box-shadow: 0 12px 24px rgba(106, 13, 17, 0.14);
        }

        .role-dot {
            width: 18px;
            height: 18px;
            border-radius: 50%;
            border: 2px solid currentColor;
            position: relative;
            flex: 0 0 18px;
        }

        .role-option.active .role-dot::after {
            content: "";
            position: absolute;
            inset: 3px;
            border-radius: 50%;
            background: currentColor;
        }

        .booking-form-static {
            display: none;
        }

        .booking-form-static.visible {
            display: block;
        }

        .stepper {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
            margin-bottom: 22px;
        }

        .step-chip {
            padding: 12px 10px;
            border-radius: 16px;
            text-align: center;
            background: rgba(255, 242, 219, 0.88);
            border: 1px solid rgba(216, 121, 0, 0.18);
            color: #7d3d1c;
            font-size: 0.92rem;
            font-weight: 600;
        }

        .step-chip.active {
            background: linear-gradient(180deg, #bd1c22 0%, #8f1217 100%);
            color: #fff7e4;
            border-color: rgba(255, 198, 85, 0.62);
        }

        .form-step {
            display: none;
        }

        .form-step.active {
            display: block;
        }

        .step-title {
            margin: 0 0 16px;
            font-size: 1.08rem;
            font-weight: 700;
            color: #7b1916;
        }

        .step-actions {
            display: flex;
            justify-content: space-between;
            gap: 12px;
            margin-top: 18px;
        }

        .ghost-btn,
        .next-btn {
            min-height: 58px;
            padding: 0 24px;
            border-radius: 999px;
            border: 0;
            font: inherit;
            font-weight: 700;
            cursor: pointer;
        }

        .ghost-btn {
            background: rgba(255, 242, 219, 0.96);
            color: #7d3d1c;
            border: 1px solid rgba(216, 121, 0, 0.24);
        }

        .next-btn {
            color: #fff8e8;
            background: linear-gradient(180deg, #be161d 0%, #920e13 100%);
            box-shadow: 0 12px 24px rgba(106, 13, 17, 0.18);
        }

        .step-actions .cta {
            margin-top: 0;
            min-height: 58px;
        }

        .payment-choice-row {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
        }

        .payment-option {
            cursor: pointer;
        }

        .payment-option input {
            display: none;
        }

        .payment-preview {
            display: none;
            margin-top: 14px;
        }

        .payment-preview.active {
            display: block;
        }

        .static-help {
            margin: 10px 0 0;
            font-size: 0.86rem;
            color: rgba(76, 51, 39, 0.7);
        }

        .simple-form-stack {
            display: grid;
            gap: 16px;
        }

        .checkbox-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            padding: 14px 16px;
            border-radius: 18px;
            background: rgba(255, 247, 233, 0.95);
            border: 1px solid rgba(216, 121, 0, 0.18);
        }

        .checkbox-card label {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #553227;
            font-weight: 600;
        }

        .checkbox-card input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #8f1217;
        }

        .checkbox-note {
            color: #7b1916;
            font-weight: 700;
            white-space: nowrap;
        }

        .extra-coupon-panel,
        .sponsor-panel {
            display: none;
            gap: 12px;
            padding: 14px;
            border-radius: 18px;
            background: rgba(255, 248, 236, 0.96);
            border: 1px solid rgba(216, 121, 0, 0.18);
        }

        .extra-coupon-panel.visible,
        .sponsor-panel.visible {
            display: grid;
        }

        .sponsor-payment-preview {
            display: none;
        }

        .sponsor-payment-preview.visible {
            display: block;
        }

        .scanner-box {
            display: grid;
            justify-items: center;
            gap: 10px;
            margin-bottom: 12px;
            padding: 14px;
            border-radius: 18px;
            background: linear-gradient(180deg, #fffdfa 0%, #fff4df 100%);
            border: 1px solid rgba(188, 76, 18, 0.18);
        }

        .scanner-box img {
            width: 96px;
            height: 96px;
            object-fit: contain;
            border-radius: 14px;
            border: 1px solid rgba(188, 76, 18, 0.18);
            background: #fff;
            padding: 8px;
        }

        .scanner-box p {
            margin: 0;
            font-size: 0.88rem;
            text-align: center;
            color: rgba(76, 51, 39, 0.82);
        }

        .summary-card {
            display: grid;
            gap: 12px;
            padding: 16px;
            border-radius: 20px;
            background: linear-gradient(180deg, rgba(255, 248, 236, 0.98), rgba(255, 240, 214, 0.92));
            border: 1px solid rgba(216, 121, 0, 0.18);
        }

        .summary-title {
            margin: 0;
            color: #7b1916;
            font-size: 1rem;
            font-weight: 700;
        }

        .summary-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            color: #553227;
            font-size: 0.96rem;
        }

        .summary-row strong {
            color: #7b1916;
        }

        .summary-row.total {
            padding-top: 10px;
            border-top: 1px dashed rgba(188, 76, 18, 0.24);
            font-size: 1.02rem;
            font-weight: 700;
        }

        textarea.field-input {
            min-height: 120px;
            padding: 16px 18px;
            resize: vertical;
        }

        .feature-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 14px;
            margin-top: 26px;
        }

        .feature {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            padding: 16px 12px;
            border-top: 1px solid rgba(216, 121, 0, 0.16);
        }

        .feature-badge {
            width: 54px;
            height: 54px;
            flex: 0 0 54px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            color: #fff7e2;
            font-size: 21px;
            background: linear-gradient(180deg, #dc8f18, #a75e09);
            box-shadow: 0 10px 18px rgba(124, 69, 8, 0.18);
        }

        .feature:nth-child(3n) .feature-badge {
            background: linear-gradient(180deg, #b51f27, #7d1014);
        }

        .feature h3 {
            margin: 0 0 4px;
            font-size: 1.1rem;
            color: #3c2118;
        }

        .feature p {
            margin: 0;
            font-size: 0.95rem;
            line-height: 1.55;
            color: rgba(66, 38, 29, 0.85);
        }

        .site-credit {
            margin-top: 16px;
            text-align: right;
            font-size: 12px;
            color: #84513a;
        }

        .site-credit a {
            color: #8f1217;
            font-weight: 700;
            text-decoration: none;
        }

        @media (max-width: 1180px) {
            .layout {
                grid-template-columns: 1fr;
            }

            .visual-panel {
                min-height: 620px;
            }

            .content-panel {
                padding-top: 10px;
            }
        }

        @media (max-width: 768px) {
            body::after {
                inset: 10px;
                border-radius: 20px;
            }

            .page {
                width: min(100% - 18px, 100%);
                margin: 9px auto;
                padding: 16px;
                border-radius: 22px;
            }



            .role-selector {
                padding: 16px 14px;
            }

            .role-selector h3 {
                font-size: 0.95rem;
                line-height: 1.35;
            }

            .role-selector p {
                font-size: 0.9rem;
                line-height: 1.5;
                margin-bottom: 12px;
            }

            .role-options {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 10px;
            }

            .role-option {
                min-height: 52px;
                padding: 0 12px;
                gap: 8px;
                font-size: 0.95rem;
                justify-content: center;
            }

            .role-dot {
                width: 16px;
                height: 16px;
                flex-basis: 16px;
            }

            .corner-garland {
                width: 124px;
                height: 92px;
            }

            .visual-panel {
                min-height: 460px;
                background-position: center top;
            }

            .mantra-badge {
                top: 20px;
                right: 18px;
                width: 108px;
                font-size: 17px;
            }

            .floating-diya {
                width: 58px;
                height: 92px;
                bottom: 104px;
            }

            .bottom-banner {
                left: 14px;
                right: 14px;
                bottom: 14px;
                padding: 15px 18px;
            }

            .field {
                grid-template-columns: 1fr;
                gap: 10px;
            }

            .payment-methods,
            .payment-row {
                grid-template-columns: 1fr;
            }

            .payment-choice-row {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 10px;
            }

            .payment-choice-row .payment-option:last-child {
                grid-column: 1 / -1;
            }

            .payment-option {
                min-height: 54px;
                padding: 12px;
                gap: 8px;
                justify-content: center;
                font-size: 0.95rem;
                text-align: center;
            }

            .feature-row {
                grid-template-columns: 1fr;
            }

            .feature {
                padding: 14px 4px;
            }

            .site-credit {
                text-align: center;
                margin-top: 20px;
            }
        }
    </style>
</head>

<body>
    <main class="page">

        {{-- <div class="corner-garland left"></div>
        <div class="corner-garland right"></div> --}}

        <section class="layout">
            <div class="visual-panel">
                <div class="visual-overlay"></div>
                {{-- <div class="mantra-badge">श्री<span>॥ श्री गणेशाय नमः ॥</span></div> --}}

                {{-- <div class="bottom-banner">
                    <span class="small">Celebrate devotion. Create memories.</span>
                    <span class="big">Bappa Is Coming!</span>
                </div> --}}
            </div>

            <div class="content-panel">
                <div class="mini-ornament"><span></span></div>
                {{-- <p class="eyebrow">Ganesh Utsav Celebration</p> --}}
                <h1 class="title">VSH<br> <strong>Ganesh Utsav Celebration 2026</strong></h1>
                {{-- <p class="sub-mantra">|| मंगलमूर्ति मोरया, पुढच्या वर्षी लवकर या ||</p> --}}
                {{-- <p class="description">Book your Ganpati celebration with ease. Static preview ready hai, baad mein isi section ko dynamic form se connect kar sakte hain.</p> --}}

                <div class="booking-card">
                    {{-- <div class="stepper">
                        <div class="step-chip active" data-step-chip="0">Step 1<br>Basic Details</div>
                        <div class="step-chip" data-step-chip="1">Step 2<br>Profile & Method</div>
                        <div class="step-chip" data-step-chip="2">Step 3<br>Payment Details</div>
                    </div> --}}

                    <div class="role-selector">
                        <h3>Select Resident Type</h3>
                        <p>Please choose owner or tenant to continue with the booking form.</p>
                        <div class="role-options">
                            <label class="role-option" data-role-option="owner">
                                <input type="radio" name="resident_type" value="owner">
                                <span class="role-dot"></span>
                                <span>Owner</span>
                            </label>
                            <label class="role-option" data-role-option="tenant">
                                <input type="radio" name="resident_type" value="tenant">
                                <span class="role-dot"></span>
                                <span>Tenant</span>
                            </label>
                        </div>
                    </div>

                    <form class="booking-form-static" action="javascript:void(0);">
                        <p class="step-title">Basic details</p>
                        <div class="simple-form-stack">
                            <div class="field">
                                <div class="field-label">
                                    <span class="field-icon">🏢</span>
                                    <span>Select Wing</span>
                                </div>
                                <div class="field-control">
                                    <select class="field-input">
                                        <option>Select Wing</option>
                                        <option>Wing A</option>
                                        <option>Wing B</option>
                                        <option>Wing C</option>
                                        <option>Wing D</option>
                                        <option>Wing E</option>
                                    </select>
                                </div>
                            </div>

                            <div class="field">
                                <div class="field-label">
                                    <span class="field-icon">🏠</span>
                                    <span>Flat Number</span>
                                </div>
                                <div class="field-control">
                                    <input class="field-input" type="text" placeholder="Enter flat number">
                                </div>
                            </div>

                            <div class="field">
                                <div class="field-label">
                                    <span class="field-icon">👤</span>
                                    <span>Name</span>
                                </div>
                                <div class="field-control">
                                    <input class="field-input" type="text" placeholder="Enter full name">
                                </div>
                            </div>

                            <div class="field">
                                <div class="field-label">
                                    <span class="field-icon">📞</span>
                                    <span>Number</span>
                                </div>
                                <div class="field-control">
                                    <input class="field-input" type="tel" placeholder="Enter mobile number">
                                </div>
                            </div>

                            <div class="summary-card">
                                <div class="summary-row">
                                    <span class="summary-title">Base Amount</span>
                                    <strong>Rs 1000</strong>
                                </div>
                            </div>

                            <div class="checkbox-card">
                                <label>
                                    <input type="checkbox" data-extra-toggle>
                                    <span>Extra Amount</span>
                                </label>
                                <span class="checkbox-note">Rs 250</span>
                            </div>

                            <div class="extra-coupon-panel" data-extra-panel>
                                <div class="field">
                                    <div class="field-label">
                                        <span class="field-icon">🎟</span>
                                        <span>Select Extra Quantity</span>
                                    </div>
                                    <div class="field-control">
                                        <select class="field-input" data-extra-count>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="checkbox-card">
                                <label>
                                    <input type="checkbox" data-sponsor-toggle>
                                    <span>We are sponsor</span>
                                </label>
                            </div>

                            <div class="sponsor-panel" data-sponsor-panel>
                                 <div class="field">
                                    <div class="field-label">
                                        <span class="field-icon">📝</span>
                                        <span>Description</span>
                                    </div>
                                    <div class="field-control">
                                        <textarea class="field-input" placeholder="Write about the sponsor"></textarea>
                                    </div>
                                </div>

                                <div class="field">
                                    <div class="field-label">
                                        <span class="field-icon">💰</span>
                                        <span>Sponsor Amount</span>
                                    </div>
                                    <div class="field-control">
                                        <input class="field-input" type="number" min="0" step="1" placeholder="Enter sponsor amount" data-sponsor-amount>
                                    </div>
                                </div>

                              

                               
                                <div class="field">
                                    <div class="field-label">
                                        <span class="field-icon">💳</span>
                                        <span>Payment Method</span>
                                    </div>
                                    <div class="payment-layout">
                                        <div class="payment-choice-row">
                                            <label class="payment-option active" data-sponsor-payment-option="cash">
                                                <input type="radio" name="sponsor_payment_method" value="cash" checked>
                                                <span class="payment-dot"></span>
                                                <span>Cash</span>
                                            </label>
                                            <label class="payment-option" data-sponsor-payment-option="online">
                                                <input type="radio" name="sponsor_payment_method" value="online">
                                                <span class="payment-dot"></span>
                                                <span>Online</span>
                                            </label>
                                            <label class="payment-option" data-sponsor-payment-option="already-paid">
                                                <input type="radio" name="sponsor_payment_method" value="already_paid">
                                                <span class="payment-dot"></span>
                                                <span>Already Paid</span>
                                            </label>
                                        </div>

                                        <div class="sponsor-payment-preview" data-sponsor-payment-preview="online">
                                            <div class="scanner-box">
                                                <img src="{{ asset('assets/qr.png') }}" alt="Scanner QR Code">
                                                <p>Scan or download the QR code before uploading the payment screenshot.</p>
                                                <button class="qr-download" type="button">Download QR Code</button>
                                            </div>
                                            <div class="field-upload">
                                                <span>Upload payment screenshot</span>
                                                <button class="upload-btn" type="button">Upload Image</button>
                                            </div>
                                        </div>

                                        <div class="sponsor-payment-preview" data-sponsor-payment-preview="already-paid">
                                            <div class="scanner-box">
                                                <img src="{{ asset('assets/qr.png') }}" alt="Scanner QR Code">
                                                <p>Use this QR code reference before uploading your payment proof.</p>
                                                <button class="qr-download" type="button">Download QR Code</button>
                                            </div>
                                            <div class="field-upload">
                                                <span>Upload payment proof</span>
                                                <button class="upload-btn" type="button">Upload Image</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="summary-card">
                                <p class="summary-title">Total Amount</p>
                                <div class="summary-row">
                                    <span>Coupon Amount</span>
                                    <strong>Rs 1000</strong>
                                </div>
                                <div class="summary-row">
                                    <span>Extra Coupon Total</span>
                                    <strong data-extra-total>Rs 0</strong>
                                </div>
                                <div class="summary-row">
                                    <span>Sponsor Amount</span>
                                    <strong data-sponsor-total>Rs 0</strong>
                                </div>
                                <div class="summary-row total">
                                    <span>Grand Total</span>
                                    <strong data-grand-total>Rs 1000</strong>
                                </div>
                            </div>

                            <button class="cta" type="button">
                                <span>📩 Submit Booking</span>
                            </button>
                        </div>
                    </form>
                </div>

                

                {{-- <div class="site-credit">
                    Designed by <a href="https://technofra.com/" target="_blank">Technofra</a>
                </div> --}}
            </div>
        </section>
    </main>
        <script>
        const bookingForm = document.querySelector('.booking-form-static');
        const roleOptions = Array.from(document.querySelectorAll('[data-role-option]'));
        const extraToggle = document.querySelector('[data-extra-toggle]');
        const extraPanel = document.querySelector('[data-extra-panel]');
        const extraCount = document.querySelector('[data-extra-count]');
        const sponsorToggle = document.querySelector('[data-sponsor-toggle]');
        const sponsorPanel = document.querySelector('[data-sponsor-panel]');
        const sponsorAmountInput = document.querySelector('[data-sponsor-amount]');
        const sponsorPaymentOptions = Array.from(document.querySelectorAll('[data-sponsor-payment-option]'));
        const sponsorPaymentPreviews = Array.from(document.querySelectorAll('[data-sponsor-payment-preview]'));
        const extraTotalLabel = document.querySelector('[data-extra-total]');
        const sponsorTotalLabel = document.querySelector('[data-sponsor-total]');
        const grandTotalLabel = document.querySelector('[data-grand-total]');
        const baseCouponAmount = 1000;
        const extraCouponAmount = 250;

        function updateExtraPanel() {
            if (!extraToggle || !extraPanel) {
                return;
            }

            extraPanel.classList.toggle('visible', extraToggle.checked);
        }

        function updateSponsorPanel() {
            if (!sponsorToggle || !sponsorPanel) {
                return;
            }

            sponsorPanel.classList.toggle('visible', sponsorToggle.checked);
        }

        function updateSponsorPaymentPreview() {
            let activeSponsorPayment = 'cash';

            sponsorPaymentOptions.forEach((option) => {
                const input = option.querySelector('input');
                if (input && input.checked) {
                    activeSponsorPayment = option.dataset.sponsorPaymentOption;
                }
            });

            sponsorPaymentOptions.forEach((option) => {
                const input = option.querySelector('input');
                const isActive = option.dataset.sponsorPaymentOption === activeSponsorPayment;
                option.classList.toggle('active', isActive);
                if (input) {
                    input.checked = isActive;
                }
            });

            sponsorPaymentPreviews.forEach((preview) => {
                preview.classList.toggle('visible', preview.dataset.sponsorPaymentPreview === activeSponsorPayment && activeSponsorPayment !== 'cash');
            });
        }

        function updateTotals() {
            const extraCountValue = extraToggle && extraToggle.checked && extraCount ? Number(extraCount.value || 0) : 0;
            const extraTotal = extraCountValue * extraCouponAmount;
            const sponsorAmount = sponsorToggle && sponsorToggle.checked && sponsorAmountInput ? Number(sponsorAmountInput.value || 0) : 0;
            const grandTotal = baseCouponAmount + extraTotal + sponsorAmount;

            if (extraTotalLabel) {
                extraTotalLabel.textContent = `Rs ${extraTotal}`;
            }

            if (sponsorTotalLabel) {
                sponsorTotalLabel.textContent = `Rs ${sponsorAmount}`;
            }

            if (grandTotalLabel) {
                grandTotalLabel.textContent = `Rs ${grandTotal}`;
            }
        }

        roleOptions.forEach((option) => {
            option.addEventListener('click', () => {
                roleOptions.forEach((item) => item.classList.remove('active'));
                option.classList.add('active');
                const input = option.querySelector('input');
                if (input) {
                    input.checked = true;
                }
                if (bookingForm) {
                    bookingForm.classList.add('visible');
                }
            });
        });

        if (extraToggle) {
            extraToggle.addEventListener('change', () => {
                updateExtraPanel();
                updateTotals();
            });
        }

        if (extraCount) {
            extraCount.addEventListener('change', updateTotals);
        }

        if (sponsorToggle) {
            sponsorToggle.addEventListener('change', () => {
                updateSponsorPanel();
                updateTotals();
            });
        }

        if (sponsorAmountInput) {
            sponsorAmountInput.addEventListener('input', updateTotals);
        }

        sponsorPaymentOptions.forEach((option) => {
            option.addEventListener('click', () => {
                updateSponsorPaymentPreview();
            });
        });

        updateExtraPanel();
        updateSponsorPanel();
        updateSponsorPaymentPreview();
        updateTotals();
    </script>
</body>

</html>
