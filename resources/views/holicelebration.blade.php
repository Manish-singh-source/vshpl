<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holi Celebration 2026 Registration</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --pink: #ff4f9a;
            --yellow: #ffd83e;
            --blue: #2aa9ff;
            --green: #37d486;
            --orange: #ff8b3d;
            --ink: #1f2240;
            --soft-white: rgba(255, 255, 255, 0.84);
            --glass-border: rgba(255, 255, 255, 0.55);
            --shadow: 0 18px 45px rgba(28, 36, 70, 0.2);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            color: var(--ink);
            background:
                radial-gradient(circle at 12% 10%, rgba(255, 79, 154, 0.36), transparent 32%),
                radial-gradient(circle at 87% 16%, rgba(42, 169, 255, 0.35), transparent 34%),
                radial-gradient(circle at 20% 84%, rgba(255, 212, 62, 0.32), transparent 36%),
                radial-gradient(circle at 82% 76%, rgba(55, 212, 134, 0.28), transparent 34%),
                linear-gradient(135deg, #fff5ce 0%, #ffe0f0 34%, #dff2ff 66%, #e5ffef 100%);
            overflow-x: hidden;
            position: relative;
            cursor: none;
        }

        /* Custom Cursor Styles - Holi Water Colors */
        #cursor-dot {
            position: fixed;
            top: 0;
            left: 0;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: conic-gradient(from 0deg, #00d0ff, #036, #7df9ff, #31d2a2, #ffb86b, #00d0ff);
            z-index: 10000;
            pointer-events: none;
            mix-blend-mode: lighten;
            transition: transform 0.2s ease;
            transform: translate(-50%, -50%);
            box-shadow: 0 0 8px rgba(0, 208, 255, 0.6), 0 0 12px rgba(0, 51, 102, 0.45);
            animation: holiPulse 2s ease-in-out infinite;
        }

        #cursor-outline {
            position: fixed;
            top: 0;
            left: 0;
            width: 40px;
            height: 40px;
            border-radius: 53% 47% 52% 48% / 48% 52% 48% 52%;
            background: linear-gradient(135deg, rgba(0, 208, 255, 0.4), rgba(0, 51, 102, 0.35), rgba(125, 249, 255, 0.35));
            z-index: 10000;
            pointer-events: none;
            mix-blend-mode: lighten;
            transition: transform 0.15s ease;
            transform: translate(-50%, -50%);
            border: 2px solid rgba(49, 210, 162, 0.5);
            filter: blur(1px);
            animation: holiSplash 3s ease-in-out infinite;
        }

        @keyframes holiPulse {
            0%, 100% { 
                box-shadow: 0 0 8px rgba(0, 208, 255, 0.6), 0 0 12px rgba(0, 51, 102, 0.45);
            }
            50% { 
                box-shadow: 0 0 12px rgba(125, 249, 255, 0.7), 0 0 18px rgba(49, 210, 162, 0.5);
            }
        }

        @keyframes holiSplash {
            0%, 100% { 
                transform: translate(-50%, -50%) rotate(0deg) scale(1);
            }
            50% { 
                transform: translate(-50%, -50%) rotate(45deg) scale(1.1);
            }
        }

        .splash {
            position: fixed;
            border-radius: 53% 47% 62% 38% / 43% 36% 64% 57%;
            filter: blur(1px);
            opacity: 0.45;
            pointer-events: none;
            z-index: 0;
            animation: float 10s ease-in-out infinite;
        }

        .splash.s1 {
            top: 6%;
            left: -30px;
            width: 160px;
            height: 120px;
            background: linear-gradient(120deg, rgba(255, 79, 154, 0.85), rgba(255, 255, 255, 0.2));
        }

        .splash.s2 {
            top: 24%;
            right: -40px;
            width: 190px;
            height: 130px;
            background: linear-gradient(120deg, rgba(42, 169, 255, 0.85), rgba(255, 255, 255, 0.18));
            animation-duration: 13s;
        }

        .splash.s3 {
            bottom: 9%;
            left: 11%;
            width: 150px;
            height: 100px;
            background: linear-gradient(120deg, rgba(255, 216, 62, 0.85), rgba(255, 255, 255, 0.2));
            animation-duration: 9s;
        }

        .splash.s4 {
            bottom: 12%;
            right: 8%;
            width: 170px;
            height: 120px;
            background: linear-gradient(120deg, rgba(55, 212, 134, 0.85), rgba(255, 255, 255, 0.18));
            animation-duration: 12s;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-12px) rotate(7deg); }
        }

        .page {
            width: min(960px, 93%);
            margin: 1.8rem auto 2.2rem;
            position: relative;
            z-index: 1;
        }

        .hero {
            text-align: center;
            padding: 1.2rem 1rem;
            animation: fadeUp .7s ease;
        }

        #building-logo {
            width: 102px;
            height: 102px;
            object-fit: cover;
            border-radius: 20px;
            border: 4px solid rgba(255, 255, 255, 0.95);
            box-shadow: var(--shadow);
            background: #fff;
        }

        .building-name {
            font-family: 'Baloo 2', cursive;
            font-size: clamp(1.5rem, 2.8vw, 2.1rem);
            margin-top: .7rem;
            letter-spacing: .3px;
        }

        .hero h1 {
            margin-top: .45rem;
            font-family: 'Baloo 2', cursive;
            font-size: clamp(2rem, 5vw, 3.1rem);
            line-height: 1.05;
            color: #1b224a;
        }

        .hero p {
            margin-top: .35rem;
            font-weight: 600;
            color: #3f4b70;
            font-size: clamp(.97rem, 2.4vw, 1.08rem);
        }

        .countdown {
            margin: 1rem auto 0;
            display: grid;
            grid-template-columns: repeat(4, minmax(58px, 1fr));
            gap: .6rem;
            width: min(520px, 100%);
        }

        .timer-box {
            background: rgba(255, 255, 255, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.8);
            border-radius: 14px;
            box-shadow: 0 8px 18px rgba(27, 34, 74, 0.12);
            padding: .65rem .4rem;
        }

        .timer-box b {
            font-size: clamp(1rem, 3vw, 1.4rem);
            color: #1d2450;
            display: block;
            font-family: 'Baloo 2', cursive;
        }

        .timer-box span {
            font-size: .76rem;
            font-weight: 600;
            color: #4b5574;
            text-transform: uppercase;
            letter-spacing: .6px;
        }

        .card {
            background: var(--soft-white);
            backdrop-filter: blur(12px);
            border: 1px solid var(--glass-border);
            box-shadow: var(--shadow);
            border-radius: 24px;
            padding: clamp(1rem, 2vw, 2rem);
            animation: fadeUp .9s ease;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: .95rem;
            margin-top: 1rem;
        }

        .form-group {
            position: relative;
        }

        .form-group.full {
            grid-column: 1 / -1;
        }

        .field,
        .textarea {
            width: 100%;
            border: 2px solid rgba(32, 38, 78, .16);
            border-radius: 14px;
            background: rgba(255, 255, 255, .9);
            color: #20274f;
            font: 500 .97rem/1.2 'Poppins', sans-serif;
            padding: 1.05rem .9rem .45rem;
            transition: .2s ease;
        }

        .textarea {
            min-height: 122px;
            resize: vertical;
            padding-top: 1.15rem;
        }

        .field:focus,
        .textarea:focus {
            outline: none;
            border-color: var(--orange);
            box-shadow: 0 0 0 4px rgba(255, 139, 61, 0.2);
            transform: translateY(-1px);
        }

        .floating {
            position: absolute;
            left: .88rem;
            top: .82rem;
            color: #5e6785;
            font-size: .86rem;
            font-weight: 600;
            pointer-events: none;
            transition: .2s ease;
            background: linear-gradient(180deg, rgba(255,255,255,0), rgba(255,255,255,0.94));
            padding: 0 .25rem;
        }

        .field:focus + .floating,
        .field:not(:placeholder-shown) + .floating,
        .textarea:focus + .floating,
        .textarea:not(:placeholder-shown) + .floating {
            top: -0.55rem;
            left: .68rem;
            font-size: .73rem;
            color: #262f57;
        }

        .radio-wrap {
            display: flex;
            flex-wrap: wrap;
            gap: .6rem;
            padding: .85rem .7rem;
            border: 2px solid rgba(32, 38, 78, .14);
            border-radius: 14px;
            background: rgba(255, 255, 255, .82);
        }

        .radio-wrap legend {
            width: 100%;
            font-size: .86rem;
            font-weight: 700;
            color: #293360;
            margin-bottom: .2rem;
        }

        .chip {
            display: inline-flex;
            align-items: center;
            gap: .35rem;
            padding: .38rem .6rem;
            border-radius: 999px;
            background: rgba(255, 255, 255, .95);
            border: 1px solid rgba(43, 57, 90, .17);
            font-size: .88rem;
            font-weight: 600;
        }

        .chip input {
            accent-color: var(--pink);
        }

        .actions {
            margin-top: 1rem;
        }

        .btn {
            width: 100%;
            border: 0;
            border-radius: 14px;
            padding: .9rem 1rem;
            font-family: 'Baloo 2', cursive;
            font-size: 1.18rem;
            color: #1f2347;
            background: linear-gradient(100deg, var(--yellow), var(--orange), var(--pink), var(--blue));
            background-size: 220% 220%;
            box-shadow: 0 12px 24px rgba(255, 79, 154, .35);
            cursor: pointer;
            transition: transform .25s ease, box-shadow .25s ease;
            animation: btnFlow 7s ease infinite;
        }

        .btn:hover {
            transform: translateY(-2px) scale(1.01);
            box-shadow: 0 16px 30px rgba(255, 79, 154, .44);
        }

        @keyframes btnFlow {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .error {
            color: #a32121;
            font-size: .78rem;
            margin-top: .28rem;
            min-height: 1rem;
            font-weight: 600;
            display: block;
        }

        .price-note {
            display: block;
            margin-top: .3rem;
            font-size: .8rem;
            font-weight: 600;
            color: #2f3a63;
        }

        footer {
            margin-top: 1.3rem;
            text-align: center;
            color: #2f3a63;
            padding: .8rem .4rem;
        }

        .site-credit {
            position: fixed;
            right: 12px;
            bottom: 10px;
            z-index: 20;
            font-size: 12px;
            color: #1f2a44;
            background: rgba(255, 255, 255, 0.78);
            border: 1px solid rgba(255, 255, 255, 0.95);
            padding: 6px 11px 5px;
            border-radius: 12px;
            backdrop-filter: blur(4px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.18);
            font-weight: 500;
            line-height: 1.2;
        }

        .site-credit a {
            color: #036;
            font-weight: 700;
            text-decoration: none;
        }

        .site-credit .tagline {
            display: block;
            margin-top: 4px;
            padding-top: 4px;
            border-top: 1px solid rgba(0, 51, 102, 0.25);
            font-size: 9px;
            font-weight: 700;
            color: #036;
            letter-spacing: .7px;
            text-transform: uppercase;
            background: linear-gradient(90deg, #036 0%, #00d0ff 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .socials {
            margin: .45rem 0;
            display: flex;
            justify-content: center;
            gap: .55rem;
            flex-wrap: wrap;
        }

        .icon {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.84);
            border: 1px solid rgba(255, 255, 255, 0.9);
            display: grid;
            place-items: center;
            font-size: .92rem;
            font-weight: 700;
            box-shadow: 0 6px 15px rgba(35, 45, 80, 0.16);
        }

        .contact {
            font-size: .9rem;
            font-weight: 500;
        }

        .popup,
        .confetti-layer {
            position: fixed;
            inset: 0;
            z-index: 50;
            display: none;
        }

        .popup.active,
        .confetti-layer.active {
            display: block;
        }

        .popup {
            background: rgba(13, 18, 38, .45);
            backdrop-filter: blur(3px);
        }

        .popup-card {
            width: min(450px, 92%);
            background: #fff;
            border-radius: 20px;
            padding: 1.2rem 1rem;
            text-align: center;
            box-shadow: 0 20px 44px rgba(13, 18, 38, .35);
            position: absolute;
            inset: 0;
            margin: auto;
            height: fit-content;
            animation: zoomIn .3s ease;
        }

        .popup-card h3 {
            font-family: 'Baloo 2', cursive;
            font-size: 1.6rem;
            color: #18204a;
        }

        .popup-card p {
            margin-top: .35rem;
            color: #465073;
            font-weight: 500;
        }

        .popup-card button {
            margin-top: .9rem;
            border: 0;
            border-radius: 10px;
            padding: .55rem 1rem;
            font-weight: 700;
            color: #fff;
            background: linear-gradient(90deg, #ff5b95, #ff8b3d);
            cursor: pointer;
        }

        .confetti-piece {
            position: absolute;
            width: 10px;
            height: 16px;
            opacity: .95;
            animation: confettiFall 2.7s linear forwards;
        }

        @keyframes confettiFall {
            0% {
                transform: translateY(-12vh) rotate(0deg);
            }
            100% {
                transform: translateY(110vh) rotate(700deg);
            }
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(15px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes zoomIn {
            from { transform: scale(.88); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        /* Let's Play Holi Button */
        .holi-play-btn {
            display: inline-block;
            margin-top: 1.2rem;
            padding: 1rem 2.5rem;
            font-family: 'Baloo 2', cursive;
            font-size: 1.35rem;
            font-weight: 700;
            color: white;
            background: linear-gradient(135deg, #ff4f9a 0%, #ffd83e 25%, #2aa9ff 50%, #37d486 75%, #ff8b3d 100%);
            background-size: 300% 300%;
            border: none;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(255, 79, 154, 0.4), inset 0 -2px 8px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: all 0.3s ease;
            animation: holiBtnPulse 2s ease-in-out infinite;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            position: relative;
            overflow: hidden;
        }

        .holi-play-btn::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, transparent 70%);
            animation: holiShine 3s ease-in-out infinite;
            pointer-events: none;
        }

        .holi-play-btn:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 12px 35px rgba(255, 79, 154, 0.5), inset 0 -2px 8px rgba(0,0,0,0.15);
        }

        .holi-play-btn:active {
            transform: translateY(-1px) scale(1.02);
        }

        @keyframes holiBtnPulse {
            0%, 100% { 
                background-position: 0% 50%;
                box-shadow: 0 8px 25px rgba(255, 79, 154, 0.4), inset 0 -2px 8px rgba(0,0,0,0.1);
            }
            50% { 
                background-position: 100% 50%;
                box-shadow: 0 12px 30px rgba(255, 79, 154, 0.5), inset 0 -2px 8px rgba(0,0,0,0.15);
            }
        }

        @keyframes holiShine {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Holi Form Modal */
        .holi-form-modal {
            display: none;
            position: fixed;
            inset: 0;
            background: rgba(13, 18, 38, 0.55);
            backdrop-filter: blur(4px);
            z-index: 100;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .holi-form-modal.active {
            display: flex;
            animation: fadeIn 0.3s ease;
        }

        .holi-form-container {
            background: var(--soft-white);
            backdrop-filter: blur(12px);
            border: 1px solid var(--glass-border);
            box-shadow: var(--shadow);
            border-radius: 28px;
            padding: clamp(1.5rem, 3vw, 2.5rem);
            width: min(500px, 95%);
            max-height: 90vh;
            overflow-y: auto;
            animation: slideUp 0.4s ease;
            position: relative;
        }

        .holi-form-header {
            text-align: center;
            margin-bottom: 1.8rem;
            animation: fadeUp 0.5s ease;
        }

        .holi-form-header h2 {
            font-family: 'Baloo 2', cursive;
            font-size: 2rem;
            background: linear-gradient(135deg, #ff4f9a, #ffd83e, #2aa9ff, #37d486);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin: 0;
        }

        .holi-form-header p {
            color: #465073;
            margin-top: 0.5rem;
            font-size: 0.95rem;
            font-weight: 500;
        }

        .close-holi-form {
            position: absolute;
            top: 1.2rem;
            right: 1.2rem;
            width: 40px;
            height: 40px;
            border: none;
            background: rgba(255, 79, 154, 0.15);
            color: #ff4f9a;
            font-size: 1.5rem;
            border-radius: 50%;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .close-holi-form:hover {
            background: rgba(255, 79, 154, 0.3);
            transform: rotate(90deg);
        }

        .holi-btn-submit {
            width: 100%;
            border: 0;
            border-radius: 14px;
            padding: 1rem 1rem;
            font-family: 'Baloo 2', cursive;
            font-size: 1.1rem;
            color: white;
            background: linear-gradient(135deg, #ff4f9a 0%, #2aa9ff 100%);
            box-shadow: 0 8px 20px rgba(255, 79, 154, 0.35);
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }

        .holi-btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 28px rgba(255, 79, 154, 0.45);
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            from { 
                opacity: 0;
                transform: translateY(30px);
            }
            to { 
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .countdown {
                gap: .45rem;
            }

            .card {
                border-radius: 18px;
            }

            .site-credit {
                font-size: 11px;
                right: 8px;
                bottom: 8px;
            }
        }
        canvas {
	position: fixed;
	top:0;
	left:0;
	width:100%;
	height:100%;
	z-index:0.5;
	opacity:1;
}
    </style>
</head>
<body>
    <canvas></canvas>
    <span class="splash s1" aria-hidden="true"></span>
    <span class="splash s2" aria-hidden="true"></span>
    <span class="splash s3" aria-hidden="true"></span>
    <span class="splash s4" aria-hidden="true"></span>
    
    <div id="cursor-dot"></div>
    <div id="cursor-outline"></div>

    <main class="page" id="top">
        <header class="hero">
            <img id="building-logo" src="{{ asset('assets/main.png') }}" alt="Building logo placeholder">
            <h2 class="building-name">Veena Smart Homes</h2>
            <h1>Holi Celebration 2026</h1>
            <p>Register Now to Join the Celebration</p>

            <section class="countdown" aria-label="Countdown to Holi 2026">
                <div class="timer-box"><b id="days">00</b><span>Days</span></div>
                <div class="timer-box"><b id="hours">00</b><span>Hours</span></div>
                <div class="timer-box"><b id="minutes">00</b><span>Minutes</span></div>
                <div class="timer-box"><b id="seconds">00</b><span>Seconds</span></div>
            </section>

            <button class="holi-play-btn" id="openHoliFormBtn">Let's Play Holi</button>
        </header>

        <footer>
            <p><strong>Organized by Veena Smart Homes</strong></p>
            {{-- <div class="socials" aria-label="Social media links placeholders">
                <span class="icon" title="Facebook">f</span>
                <span class="icon" title="Instagram">ig</span>
                <span class="icon" title="WhatsApp">wa</span>
                <span class="icon" title="YouTube">yt</span>
            </div> --}}
            {{-- <p class="contact">Contact: +91 90000 00000 | celebration@sunriseheights.test</p> --}}
        </footer>
    </main>

    <div class="confetti-layer" id="confettiLayer" aria-hidden="true"></div>

    <div class="popup" id="successPopup" role="dialog" aria-modal="true" aria-labelledby="popupTitle">
        <div class="popup-card">
            <h3 id="popupTitle">Registration Successful!</h3>
            <p>See you at the Holi Celebration 2026.</p>
            <button type="button" id="closePopup">Awesome</button>
        </div>
    </div>

    <div class="holi-form-modal" id="holiFormModal">
        <div class="holi-form-container">
            <button class="close-holi-form" id="closeHoliFormBtn" aria-label="Close form">&times;</button>
            
            <div class="holi-form-header">
                <h2>🎨 Let's Play Holi!</h2>
                <p>Join us for a colorful celebration & fill in your details</p>
            </div>

            <form id="quickHoliForm" class="holi-quick-form" novalidate>
                <div class="form-grid">
                    <fieldset class="form-group radio-wrap full">
                        <legend>I will be part of the Holi Celebration *</legend>
                        <label class="chip">
                            <input type="radio" name="participationStatus" value="IN"> I'm In
                        </label>
                        <label class="chip">
                            <input type="radio" name="participationStatus" value="OUT"> I'm Out
                        </label>
                        <small class="error" data-error-for="participationStatus"></small>
                    </fieldset>

                    <div class="form-group full" id="participationDetails" style="display: none;">
                        <div class="form-grid">
                            <div class="form-group">
                                <select class="field" id="quickWing" name="wing" required>
                                    <option value="" disabled selected>Select Wing *</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                </select>
                                <small class="error" data-error-for="quickWing"></small>
                            </div>

                            <div class="form-group">
                                <input class="field" type="text" id="quickFlatNumber" name="flatNumber" placeholder=" " required>
                                <label class="floating" for="quickFlatNumber">Flat Number *</label>
                                <small class="error" data-error-for="quickFlatNumber"></small>
                            </div>

                            <div class="form-group">
                                <input class="field" type="text" id="quickFullName" name="fullName" placeholder=" " required>
                                <label class="floating" for="quickFullName">Name *</label>
                                <small class="error" data-error-for="quickFullName"></small>
                            </div>

                            <div class="form-group">
                                <input class="field" type="tel" id="quickMobileNumber" name="mobileNumber" placeholder=" " required>
                                <label class="floating" for="quickMobileNumber">Mobile Number *</label>
                                <small class="error" data-error-for="quickMobileNumber"></small>
                            </div>

                            <div class="form-group">
                                <input class="field" type="number" id="quickCoupons" name="coupons" min="1" max="10" placeholder=" " required>
                                <label class="floating" for="quickCoupons">Number of Coupons *</label>
                                <small class="price-note">Price: Rs. 300 per coupon</small>
                                <small class="error" data-error-for="quickCoupons"></small>
                            </div>

                            <fieldset class="form-group radio-wrap full">
                                <legend>Payment Mode *</legend>
                                <label class="chip">
                                    <input type="radio" name="paymentMode" value="COD" required> COD
                                </label>
                                <label class="chip">
                                    <input type="radio" name="paymentMode" value="ONLINE" required> Online
                                </label>
                                <small class="error" data-error-for="paymentMode"></small>
                            </fieldset>

                            <div class="form-group full" id="paymentScreenshotGroup" style="display: none;">
                                <input class="field" type="file" id="paymentScreenshot" name="paymentScreenshot" accept="image/*">
                                <label class="floating" for="paymentScreenshot">Upload Payment Screenshot *</label>
                                <small class="error" data-error-for="paymentScreenshot"></small>
                            </div>

                            <div class="form-group full">
                                <label class="chip" style="margin-top: .35rem;">
                                    <input type="checkbox" id="paymentDone" name="paymentDone">
                                    Payment Done
                                </label>
                                <small class="error" data-error-for="paymentDone"></small>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="holi-btn-submit" type="submit">Play With Us! 🎉</button>
            </form>
        </div>
    </div>

    <div class="site-credit">
        Designed by <a href="https://technofra.com/" target="_blank">Technofra</a>
        <span class="tagline">Web Presence &amp; Branding</span>
    </div>

    <script>
        const popup = document.getElementById('successPopup');
        const closePopup = document.getElementById('closePopup');
        const confettiLayer = document.getElementById('confettiLayer');
        
        // Holi Form Modal Elements
        const holiFormModal = document.getElementById('holiFormModal');
        const openHoliFormBtn = document.getElementById('openHoliFormBtn');
        const closeHoliFormBtn = document.getElementById('closeHoliFormBtn');
        const quickHoliForm = document.getElementById('quickHoliForm');

        const errorMap = {
            participationStatus: 'Please choose whether you are in or out.',
            wing: 'Please select your wing.',
            fullName: 'Please enter your name.',
            flatNumber: 'Please enter your flat number.',
            mobileNumber: 'Please enter a valid 10-digit mobile number.',
            coupons: 'Please enter number of coupons between 1 and 10.',
            paymentMode: 'Please select payment mode.',
            paymentScreenshot: 'Please upload payment screenshot for online payment.',
            paymentDone: 'Please confirm payment is done for online mode.'
        };

        // Holi Form Modal Functions
        function openHoliForm() {
            holiFormModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeHoliForm() {
            holiFormModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }

        openHoliFormBtn.addEventListener('click', openHoliForm);
        closeHoliFormBtn.addEventListener('click', closeHoliForm);

        holiFormModal.addEventListener('click', (e) => {
            if (e.target === holiFormModal) {
                closeHoliForm();
            }
        });

        const participationDetails = document.getElementById('participationDetails');
        const participationInputs = quickHoliForm.querySelectorAll('input[name="participationStatus"]');
        const paymentScreenshotGroup = document.getElementById('paymentScreenshotGroup');
        const paymentScreenshotInput = document.getElementById('paymentScreenshot');
        const paymentDoneInput = document.getElementById('paymentDone');
        const paymentModeInputs = quickHoliForm.querySelectorAll('input[name="paymentMode"]');

        function updatePaymentSection() {
            const participationStatus = quickHoliForm.querySelector('input[name="participationStatus"]:checked');
            const paymentMode = quickHoliForm.querySelector('input[name="paymentMode"]:checked');
            const shouldShowPaymentProof = participationStatus && participationStatus.value === 'IN' && paymentMode && paymentMode.value === 'ONLINE';

            if (shouldShowPaymentProof) {
                paymentScreenshotGroup.style.display = 'block';
                paymentScreenshotInput.required = true;
                paymentDoneInput.required = true;
                return;
            }

            paymentScreenshotGroup.style.display = 'none';
            paymentScreenshotInput.required = false;
            paymentScreenshotInput.value = '';
            paymentDoneInput.required = false;
            setError('paymentScreenshot', '');
            setError('paymentDone', '');
        }

        participationInputs.forEach((radio) => {
            radio.addEventListener('change', () => {
                participationDetails.style.display = radio.value === 'IN' ? 'block' : 'none';
                setError('participationStatus', '');
                if (radio.value === 'OUT') {
                    quickHoliForm.querySelectorAll('.error').forEach((el) => {
                        if (el.dataset.errorFor !== 'participationStatus') {
                            el.textContent = '';
                        }
                    });
                }
                updatePaymentSection();
            });
        });

        paymentModeInputs.forEach((radio) => {
            radio.addEventListener('change', () => {
                if (radio.checked) updatePaymentSection();
            });
        });

        // Quick Holi Form Validation and Submit
        quickHoliForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            const wing = quickHoliForm.querySelector('#quickWing').value;
            const fullName = quickHoliForm.querySelector('#quickFullName').value.trim();
            const flatNumber = quickHoliForm.querySelector('#quickFlatNumber').value.trim();
            const mobileNumber = quickHoliForm.querySelector('#quickMobileNumber').value.trim();
            const coupons = Number(quickHoliForm.querySelector('#quickCoupons').value);
            const participationStatus = quickHoliForm.querySelector('input[name="participationStatus"]:checked');
            const paymentMode = quickHoliForm.querySelector('input[name="paymentMode"]:checked');

            let isValid = true;

            // Clear previous errors
            quickHoliForm.querySelectorAll('.error').forEach(el => el.textContent = '');

            if (!participationStatus) {
                quickHoliForm.querySelector('[data-error-for="participationStatus"]').textContent = errorMap.participationStatus;
                isValid = false;
            }

            if (participationStatus && participationStatus.value === 'IN') {
                if (!wing) {
                    quickHoliForm.querySelector('[data-error-for="quickWing"]').textContent = errorMap.wing;
                    isValid = false;
                }

                if (!fullName) {
                    quickHoliForm.querySelector('[data-error-for="quickFullName"]').textContent = errorMap.fullName;
                    isValid = false;
                }

                if (!flatNumber) {
                    quickHoliForm.querySelector('[data-error-for="quickFlatNumber"]').textContent = errorMap.flatNumber;
                    isValid = false;
                }

                if (!/^\d{10}$/.test(mobileNumber)) {
                    quickHoliForm.querySelector('[data-error-for="quickMobileNumber"]').textContent = errorMap.mobileNumber;
                    isValid = false;
                }

                if (Number.isNaN(coupons) || coupons < 1 || coupons > 10) {
                    quickHoliForm.querySelector('[data-error-for="quickCoupons"]').textContent = errorMap.coupons;
                    isValid = false;
                }

                if (!paymentMode) {
                    quickHoliForm.querySelector('[data-error-for="paymentMode"]').textContent = errorMap.paymentMode;
                    isValid = false;
                }

                if (paymentMode && paymentMode.value === 'ONLINE' && paymentScreenshotInput.files.length === 0) {
                    quickHoliForm.querySelector('[data-error-for="paymentScreenshot"]').textContent = errorMap.paymentScreenshot;
                    isValid = false;
                }

                if (paymentMode && paymentMode.value === 'ONLINE' && !paymentDoneInput.checked) {
                    quickHoliForm.querySelector('[data-error-for="paymentDone"]').textContent = errorMap.paymentDone;
                    isValid = false;
                }
            }

            if (!isValid) return;

            // Close modal and reset
            closeHoliForm();
            quickHoliForm.reset();
            participationDetails.style.display = 'none';
            updatePaymentSection();
            
            // Show success popup
            createConfetti();
            popup.classList.add('active');
        });

        function setError(name, message) {
            const node = document.querySelector(`[data-error-for="${name}"]`);
            if (node) {
                node.textContent = message || '';
            }
        }

        function createConfetti() {
            const palette = ['#ff4f9a', '#ffd83e', '#2aa9ff', '#37d486', '#ff8b3d'];
            confettiLayer.innerHTML = '';
            confettiLayer.classList.add('active');

            for (let i = 0; i < 95; i++) {
                const piece = document.createElement('span');
                piece.className = 'confetti-piece';
                piece.style.left = `${Math.random() * 100}%`;
                piece.style.background = palette[Math.floor(Math.random() * palette.length)];
                piece.style.animationDelay = `${Math.random() * 0.9}s`;
                piece.style.opacity = (Math.random() * 0.45 + 0.55).toFixed(2);
                piece.style.transform = `translateY(-12vh) rotate(${Math.random() * 360}deg)`;
                confettiLayer.appendChild(piece);
            }

            setTimeout(() => {
                confettiLayer.classList.remove('active');
                confettiLayer.innerHTML = '';
            }, 3200);
        }

        closePopup.addEventListener('click', function () {
            popup.classList.remove('active');
            document.getElementById('top').scrollIntoView({ behavior: 'smooth' });
        });

        popup.addEventListener('click', function (event) {
            if (event.target === popup) {
                popup.classList.remove('active');
            }
        });

        // Countdown for Holi date in 2026.
        const holiDate = new Date('March 4, 2026 00:00:00').getTime();

        function updateCountdown() {
            const now = Date.now();
            const diff = holiDate - now;

            if (diff <= 0) {
                document.getElementById('days').textContent = '00';
                document.getElementById('hours').textContent = '00';
                document.getElementById('minutes').textContent = '00';
                document.getElementById('seconds').textContent = '00';
                return;
            }

            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff / (1000 * 60 * 60)) % 24);
            const minutes = Math.floor((diff / (1000 * 60)) % 60);
            const seconds = Math.floor((diff / 1000) % 60);

            document.getElementById('days').textContent = String(days).padStart(2, '0');
            document.getElementById('hours').textContent = String(hours).padStart(2, '0');
            document.getElementById('minutes').textContent = String(minutes).padStart(2, '0');
            document.getElementById('seconds').textContent = String(seconds).padStart(2, '0');
        }

        updateCountdown();
        setInterval(updateCountdown, 1000);
        
        // Custom Cursor Animation - Holi Water Effect
        const cursorDot = document.getElementById('cursor-dot');
        const cursorOutline = document.getElementById('cursor-outline');
        const holiColors = ['#00d0ff', '#036', '#7df9ff', '#31d2a2', '#ffb86b'];
        let colorIndex = 0;
        
        window.addEventListener('mousemove', (e) => {
            const posX = e.clientX;
            const posY = e.clientY;
            
            cursorDot.style.left = `${posX}px`;
            cursorDot.style.top = `${posY}px`;
            
            cursorOutline.animate({
                left: `${posX}px`,
                top: `${posY}px`
            }, { duration: 150, fill: 'forwards' });
            
            // Create occasional water splash effect
            if (Math.random() < 0.08) {
                createWaterSplash(posX, posY);
            }
        });
        
        function createWaterSplash(x, y) {
            const splash = document.createElement('div');
            splash.style.position = 'fixed';
            splash.style.left = x + 'px';
            splash.style.top = y + 'px';
            splash.style.width = '20px';
            splash.style.height = '20px';
            splash.style.borderRadius = '50% 40% 50% 60% / 50% 50% 50% 50%';
            splash.style.background = holiColors[colorIndex % holiColors.length];
            splash.style.pointerEvents = 'none';
            splash.style.zIndex = '9999';
            splash.style.opacity = '0.7';
            splash.style.filter = 'blur(2px)';
            splash.style.transform = 'translate(-50%, -50%)';
            
            document.body.appendChild(splash);
            
            colorIndex++;
            
            let opacity = 0.7;
            let size = 20;
            const interval = setInterval(() => {
                opacity -= 0.08;
                size += 3;
                splash.style.opacity = opacity;
                splash.style.width = size + 'px';
                splash.style.height = size + 'px';
                
                if (opacity <= 0) {
                    clearInterval(interval);
                    splash.remove();
                }
            }, 30);
        }
        
        // Hover effects for interactive elements
        const interactiveElements = document.querySelectorAll('a, button, input, textarea, select, .btn');
        
        interactiveElements.forEach(element => {
            element.addEventListener('mouseenter', () => {
                cursorDot.style.transform = 'translate(-50%, -50%) scale(2)';
                cursorOutline.style.transform = 'translate(-50%, -50%) scale(1.8)';
            });
            
            element.addEventListener('mouseleave', () => {
                cursorDot.style.transform = 'translate(-50%, -50%) scale(1)';
                cursorOutline.style.transform = 'translate(-50%, -50%) scale(1)';
            });
        });
    </script>
    <script>
        /*
ORIGINAL WORK
https://codepen.io/PavelDoGreat/pen/zdWzEL
*/

'use strict';

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var canvas = document.getElementsByTagName('canvas')[0];
canvas.width = canvas.clientWidth;
canvas.height = canvas.clientHeight;

var params = { alpha: true, depth: false, stencil: false, antialias: false };
var gl = canvas.getContext('webgl2', params);
var isWebGL2 = !!gl;
if (!isWebGL2) {
    gl = canvas.getContext('webgl', params) || canvas.getContext('experimental-webgl', params);
}
gl.clearColor(1, 0.96, 0.98, 0);

var halfFloat = gl.getExtension('OES_texture_half_float');
var support_linear_float = gl.getExtension('OES_texture_half_float_linear');
if (isWebGL2) {
    gl.getExtension('EXT_color_buffer_float');
    support_linear_float = gl.getExtension('OES_texture_float_linear');
}

var TEXTURE_DOWNSAMPLE = 1;
var DENSITY_DISSIPATION = 0.98;
var VELOCITY_DISSIPATION = 0.99;
var SPLAT_RADIUS = 0.005;
var CURL = 30;
var PRESSURE_ITERATIONS = 25;

var GLProgram = function () {
    function GLProgram(vertexShader, fragmentShader) {
        _classCallCheck(this, GLProgram);

        this.uniforms = {};
        this.program = gl.createProgram();

        gl.attachShader(this.program, vertexShader);
        gl.attachShader(this.program, fragmentShader);
        gl.linkProgram(this.program);

        if (!gl.getProgramParameter(this.program, gl.LINK_STATUS)) throw gl.getProgramInfoLog(this.program);

        var uniformCount = gl.getProgramParameter(this.program, gl.ACTIVE_UNIFORMS);
        for (var i = 0; i < uniformCount; i++) {
            var uniformName = gl.getActiveUniform(this.program, i).name;
            this.uniforms[uniformName] = gl.getUniformLocation(this.program, uniformName);
        }
    }

    GLProgram.prototype.bind = function bind() {
        gl.useProgram(this.program);
    };

    return GLProgram;
}();

function compileShader(type, source) {
    var shader = gl.createShader(type);
    gl.shaderSource(shader, source);
    gl.compileShader(shader);

    if (!gl.getShaderParameter(shader, gl.COMPILE_STATUS)) throw gl.getShaderInfoLog(shader);

    return shader;
};

var baseVertexShader = compileShader(gl.VERTEX_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    attribute vec2 aPosition;\n    varying vec2 vUv;\n    varying vec2 vL;\n    varying vec2 vR;\n    varying vec2 vT;\n    varying vec2 vB;\n    uniform vec2 texelSize;\n\n    void main () {\n        vUv = aPosition * 0.5 + 0.5;\n        vL = vUv - vec2(texelSize.x, 0.0);\n        vR = vUv + vec2(texelSize.x, 0.0);\n        vT = vUv + vec2(0.0, texelSize.y);\n        vB = vUv - vec2(0.0, texelSize.y);\n        gl_Position = vec4(aPosition, 0.0, 1.0);\n    }\n');

var displayShader = compileShader(gl.FRAGMENT_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    varying vec2 vUv;\n    varying vec2 vL;\n    varying vec2 vR;\n    varying vec2 vT;\n    varying vec2 vB;\n    uniform sampler2D uTexture;\n\n    void main () {\n        vec4 col = texture2D(uTexture, vUv);\n        float alpha = max(max(col.r, col.g), col.b);\n        gl_FragColor = vec4(col.rgb, alpha);\n    }\n');

var splatShader = compileShader(gl.FRAGMENT_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    varying vec2 vUv;\n    uniform sampler2D uTarget;\n    uniform float aspectRatio;\n    uniform vec3 color;\n    uniform vec2 point;\n    uniform float radius;\n\n    void main () {\n        vec2 p = vUv - point.xy;\n        p.x *= aspectRatio;\n        vec3 splat = exp(-dot(p, p) / radius) * color;\n        vec3 base = texture2D(uTarget, vUv).xyz;\n        gl_FragColor = vec4(base + splat, 1.0);\n    }\n');

var advectionManualFilteringShader = compileShader(gl.FRAGMENT_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    varying vec2 vUv;\n    uniform sampler2D uVelocity;\n    uniform sampler2D uSource;\n    uniform vec2 texelSize;\n    uniform float dt;\n    uniform float dissipation;\n\n    vec4 bilerp (in sampler2D sam, in vec2 p) {\n        vec4 st;\n        st.xy = floor(p - 0.5) + 0.5;\n        st.zw = st.xy + 1.0;\n        vec4 uv = st * texelSize.xyxy;\n        vec4 a = texture2D(sam, uv.xy);\n        vec4 b = texture2D(sam, uv.zy);\n        vec4 c = texture2D(sam, uv.xw);\n        vec4 d = texture2D(sam, uv.zw);\n        vec2 f = p - st.xy;\n        return mix(mix(a, b, f.x), mix(c, d, f.x), f.y);\n    }\n\n    void main () {\n        vec2 coord = gl_FragCoord.xy - dt * texture2D(uVelocity, vUv).xy;\n        gl_FragColor = dissipation * bilerp(uSource, coord);\n        gl_FragColor.a = 1.0;\n    }\n');

var advectionShader = compileShader(gl.FRAGMENT_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    varying vec2 vUv;\n    uniform sampler2D uVelocity;\n    uniform sampler2D uSource;\n    uniform vec2 texelSize;\n    uniform float dt;\n    uniform float dissipation;\n\n    void main () {\n        vec2 coord = vUv - dt * texture2D(uVelocity, vUv).xy * texelSize;\n        gl_FragColor = dissipation * texture2D(uSource, coord);\n    }\n');

var divergenceShader = compileShader(gl.FRAGMENT_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    varying vec2 vUv;\n    varying vec2 vL;\n    varying vec2 vR;\n    varying vec2 vT;\n    varying vec2 vB;\n    uniform sampler2D uVelocity;\n\n    vec2 sampleVelocity (in vec2 uv) {\n        vec2 multiplier = vec2(1.0, 1.0);\n        if (uv.x < 0.0) { uv.x = 0.0; multiplier.x = -1.0; }\n        if (uv.x > 1.0) { uv.x = 1.0; multiplier.x = -1.0; }\n        if (uv.y < 0.0) { uv.y = 0.0; multiplier.y = -1.0; }\n        if (uv.y > 1.0) { uv.y = 1.0; multiplier.y = -1.0; }\n        return multiplier * texture2D(uVelocity, uv).xy;\n    }\n\n    void main () {\n        float L = sampleVelocity(vL).x;\n        float R = sampleVelocity(vR).x;\n        float T = sampleVelocity(vT).y;\n        float B = sampleVelocity(vB).y;\n        float div = 0.5 * (R - L + T - B);\n        gl_FragColor = vec4(div, 0.0, 0.0, 1.0);\n    }\n');

var curlShader = compileShader(gl.FRAGMENT_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    varying vec2 vUv;\n    varying vec2 vL;\n    varying vec2 vR;\n    varying vec2 vT;\n    varying vec2 vB;\n    uniform sampler2D uVelocity;\n\n    void main () {\n        float L = texture2D(uVelocity, vL).y;\n        float R = texture2D(uVelocity, vR).y;\n        float T = texture2D(uVelocity, vT).x;\n        float B = texture2D(uVelocity, vB).x;\n        float vorticity = R - L - T + B;\n        gl_FragColor = vec4(vorticity, 0.0, 0.0, 1.0);\n    }\n');

var vorticityShader = compileShader(gl.FRAGMENT_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    varying vec2 vUv;\n    varying vec2 vL;\n    varying vec2 vR;\n    varying vec2 vT;\n    varying vec2 vB;\n    uniform sampler2D uVelocity;\n    uniform sampler2D uCurl;\n    uniform float curl;\n    uniform float dt;\n\n    void main () {\n        float L = texture2D(uCurl, vL).y;\n        float R = texture2D(uCurl, vR).y;\n        float T = texture2D(uCurl, vT).x;\n        float B = texture2D(uCurl, vB).x;\n        float C = texture2D(uCurl, vUv).x;\n        vec2 force = vec2(abs(T) - abs(B), abs(R) - abs(L));\n        force *= 1.0 / length(force + 0.00001) * curl * C;\n        vec2 vel = texture2D(uVelocity, vUv).xy;\n        gl_FragColor = vec4(vel + force * dt, 0.0, 1.0);\n    }\n');

var pressureShader = compileShader(gl.FRAGMENT_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    varying vec2 vUv;\n    varying vec2 vL;\n    varying vec2 vR;\n    varying vec2 vT;\n    varying vec2 vB;\n    uniform sampler2D uPressure;\n    uniform sampler2D uDivergence;\n\n    vec2 boundary (in vec2 uv) {\n        uv = min(max(uv, 0.0), 1.0);\n        return uv;\n    }\n\n    void main () {\n        float L = texture2D(uPressure, boundary(vL)).x;\n        float R = texture2D(uPressure, boundary(vR)).x;\n        float T = texture2D(uPressure, boundary(vT)).x;\n        float B = texture2D(uPressure, boundary(vB)).x;\n        float C = texture2D(uPressure, vUv).x;\n        float divergence = texture2D(uDivergence, vUv).x;\n        float pressure = (L + R + B + T - divergence) * 0.25;\n        gl_FragColor = vec4(pressure, 0.0, 0.0, 1.0);\n    }\n');

var gradientSubtractShader = compileShader(gl.FRAGMENT_SHADER, '\n    precision highp float;\n    precision mediump sampler2D;\n\n    varying vec2 vUv;\n    varying vec2 vL;\n    varying vec2 vR;\n    varying vec2 vT;\n    varying vec2 vB;\n    uniform sampler2D uPressure;\n    uniform sampler2D uVelocity;\n\n    vec2 boundary (in vec2 uv) {\n        uv = min(max(uv, 0.0), 1.0);\n        return uv;\n    }\n\n    void main () {\n        float L = texture2D(uPressure, boundary(vL)).x;\n        float R = texture2D(uPressure, boundary(vR)).x;\n        float T = texture2D(uPressure, boundary(vT)).x;\n        float B = texture2D(uPressure, boundary(vB)).x;\n        vec2 velocity = texture2D(uVelocity, vUv).xy;\n        velocity.xy -= vec2(R - L, T - B);\n        gl_FragColor = vec4(velocity, 0.0, 1.0);\n    }\n');

var blit = function () {
    gl.bindBuffer(gl.ARRAY_BUFFER, gl.createBuffer());
    gl.bufferData(gl.ARRAY_BUFFER, new Float32Array([-1, -1, -1, 1, 1, 1, 1, -1]), gl.STATIC_DRAW);
    gl.bindBuffer(gl.ELEMENT_ARRAY_BUFFER, gl.createBuffer());
    gl.bufferData(gl.ELEMENT_ARRAY_BUFFER, new Uint16Array([0, 1, 2, 0, 2, 3]), gl.STATIC_DRAW);
    gl.vertexAttribPointer(0, 2, gl.FLOAT, false, 0, 0);
    gl.enableVertexAttribArray(0);

    return function (destination) {
        gl.bindFramebuffer(gl.FRAMEBUFFER, destination);
        gl.drawElements(gl.TRIANGLES, 6, gl.UNSIGNED_SHORT, 0);
    };
}();

function clear(target) {
    gl.bindFramebuffer(gl.FRAMEBUFFER, target);
    gl.clear(gl.COLOR_BUFFER_BIT);
}

function createFBO(texId, w, h, internalFormat, format, type, param) {
    gl.activeTexture(gl.TEXTURE0 + texId);
    var texture = gl.createTexture();
    gl.bindTexture(gl.TEXTURE_2D, texture);
    gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_MIN_FILTER, param);
    gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_MAG_FILTER, param);
    gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_WRAP_S, gl.CLAMP_TO_EDGE);
    gl.texParameteri(gl.TEXTURE_2D, gl.TEXTURE_WRAP_T, gl.CLAMP_TO_EDGE);
    gl.texImage2D(gl.TEXTURE_2D, 0, internalFormat, w, h, 0, format, type, null);

    var fbo = gl.createFramebuffer();
    gl.bindFramebuffer(gl.FRAMEBUFFER, fbo);
    gl.framebufferTexture2D(gl.FRAMEBUFFER, gl.COLOR_ATTACHMENT0, gl.TEXTURE_2D, texture, 0);
    gl.viewport(0, 0, w, h);
    gl.clear(gl.COLOR_BUFFER_BIT);

    return [texture, fbo, texId];
}

function createDoubleFBO(texId, w, h, internalFormat, format, type, param) {
    var fbo1 = createFBO(texId, w, h, internalFormat, format, type, param);
    var fbo2 = createFBO(texId + 1, w, h, internalFormat, format, type, param);

    return {
        get first() {
            return fbo1;
        },
        get second() {
            return fbo2;
        },
        swap: function swap() {
            var temp = fbo1;
            fbo1 = fbo2;
            fbo2 = temp;
        }
    };
}

var textureWidth = undefined;
var textureHeight = undefined;
var density = undefined;
var velocity = undefined;
var divergence = undefined;
var curl = undefined;
var pressure = undefined;

function initFramebuffers() {
    textureWidth = gl.drawingBufferWidth >> TEXTURE_DOWNSAMPLE;
    textureHeight = gl.drawingBufferHeight >> TEXTURE_DOWNSAMPLE;

    var internalFormat = isWebGL2 ? gl.RGBA16F : gl.RGBA;
    var internalFormatRG = isWebGL2 ? gl.RG16F : gl.RGBA;
    var formatRG = isWebGL2 ? gl.RG : gl.RGBA;
    var texType = isWebGL2 ? gl.HALF_FLOAT : halfFloat.HALF_FLOAT_OES;

    density = createDoubleFBO(0, textureWidth, textureHeight, internalFormat, gl.RGBA, texType, support_linear_float ? gl.LINEAR : gl.NEAREST);
    velocity = createDoubleFBO(2, textureWidth, textureHeight, internalFormatRG, formatRG, texType, support_linear_float ? gl.LINEAR : gl.NEAREST);
    divergence = createFBO(4, textureWidth, textureHeight, internalFormatRG, formatRG, texType, gl.NEAREST);
    curl = createFBO(5, textureWidth, textureHeight, internalFormatRG, formatRG, texType, gl.NEAREST);
    pressure = createDoubleFBO(6, textureWidth, textureHeight, internalFormatRG, formatRG, texType, gl.NEAREST);
}

initFramebuffers();

var displayProgram = new GLProgram(baseVertexShader, displayShader);
var splatProgram = new GLProgram(baseVertexShader, splatShader);
var advectionProgram = new GLProgram(baseVertexShader, support_linear_float ? advectionShader : advectionManualFilteringShader);
var divergenceProgram = new GLProgram(baseVertexShader, divergenceShader);
var curlProgram = new GLProgram(baseVertexShader, curlShader);
var vorticityProgram = new GLProgram(baseVertexShader, vorticityShader);
var pressureProgram = new GLProgram(baseVertexShader, pressureShader);
var gradienSubtractProgram = new GLProgram(baseVertexShader, gradientSubtractShader);

function pointerPrototype() {
    this.id = -1;
    this.x = 0;
    this.y = 0;
    this.dx = 0;
    this.dy = 0;
    this.down = false;
    this.moved = false;
    this.color = [30, 0, 300];
}

var pointers = [];
pointers.push(new pointerPrototype());

for (var i = 0; i < 10; i++) {
    var color = [Math.random() * 10, Math.random() * 10, Math.random() * 10];
    var x = canvas.width * Math.random();
    var y = canvas.height * Math.random();
    var dx = 1000 * (Math.random() - 0.5);
    var dy = 1000 * (Math.random() - 0.5);
    splat(x, y, dx, dy, color);
}

var lastTime = Date.now();
Update();

function Update() {
    resizeCanvas();

    var dt = Math.min((Date.now() - lastTime) / 1000, 0.016);
    lastTime = Date.now();

    gl.viewport(0, 0, textureWidth, textureHeight);

    advectionProgram.bind();
    gl.uniform2f(advectionProgram.uniforms.texelSize, 1.0 / textureWidth, 1.0 / textureHeight);
    gl.uniform1i(advectionProgram.uniforms.uVelocity, velocity.first[2]);
    gl.uniform1i(advectionProgram.uniforms.uSource, velocity.first[2]);
    gl.uniform1f(advectionProgram.uniforms.dt, dt);
    gl.uniform1f(advectionProgram.uniforms.dissipation, VELOCITY_DISSIPATION);
    blit(velocity.second[1]);
    velocity.swap();

    gl.uniform1i(advectionProgram.uniforms.uVelocity, velocity.first[2]);
    gl.uniform1i(advectionProgram.uniforms.uSource, density.first[2]);
    gl.uniform1f(advectionProgram.uniforms.dissipation, DENSITY_DISSIPATION);
    blit(density.second[1]);
    density.swap();

    for (var i = 0; i < pointers.length; i++) {
        var pointer = pointers[i];
        if (pointer.moved) {
            splat(pointer.x, pointer.y, pointer.dx, pointer.dy, pointer.color);
            pointer.moved = false;
        }
    }

    curlProgram.bind();
    gl.uniform2f(curlProgram.uniforms.texelSize, 1.0 / textureWidth, 1.0 / textureHeight);
    gl.uniform1i(curlProgram.uniforms.uVelocity, velocity.first[2]);
    blit(curl[1]);

    vorticityProgram.bind();
    gl.uniform2f(vorticityProgram.uniforms.texelSize, 1.0 / textureWidth, 1.0 / textureHeight);
    gl.uniform1i(vorticityProgram.uniforms.uVelocity, velocity.first[2]);
    gl.uniform1i(vorticityProgram.uniforms.uCurl, curl[2]);
    gl.uniform1f(vorticityProgram.uniforms.curl, CURL);
    gl.uniform1f(vorticityProgram.uniforms.dt, dt);
    blit(velocity.second[1]);
    velocity.swap();

    divergenceProgram.bind();
    gl.uniform2f(divergenceProgram.uniforms.texelSize, 1.0 / textureWidth, 1.0 / textureHeight);
    gl.uniform1i(divergenceProgram.uniforms.uVelocity, velocity.first[2]);
    blit(divergence[1]);

    clear(pressure.first[1]);
    pressureProgram.bind();
    gl.uniform2f(pressureProgram.uniforms.texelSize, 1.0 / textureWidth, 1.0 / textureHeight);
    gl.uniform1i(pressureProgram.uniforms.uDivergence, divergence[2]);
    for (var i = 0; i < PRESSURE_ITERATIONS; i++) {
        gl.uniform1i(pressureProgram.uniforms.uPressure, pressure.first[2]);
        blit(pressure.second[1]);
        pressure.swap();
    }

    gradienSubtractProgram.bind();
    gl.uniform2f(gradienSubtractProgram.uniforms.texelSize, 1.0 / textureWidth, 1.0 / textureHeight);
    gl.uniform1i(gradienSubtractProgram.uniforms.uPressure, pressure.first[2]);
    gl.uniform1i(gradienSubtractProgram.uniforms.uVelocity, velocity.first[2]);
    blit(velocity.second[1]);
    velocity.swap();

    gl.viewport(0, 0, gl.drawingBufferWidth, gl.drawingBufferHeight);
    displayProgram.bind();
    gl.uniform1i(displayProgram.uniforms.uTexture, density.first[2]);
    blit(null);

    requestAnimationFrame(Update);
}

function splat(x, y, dx, dy, color) {
    splatProgram.bind();
    gl.uniform1i(splatProgram.uniforms.uTarget, velocity.first[2]);
    gl.uniform1f(splatProgram.uniforms.aspectRatio, canvas.width / canvas.height);
    gl.uniform2f(splatProgram.uniforms.point, x / canvas.width, 1.0 - y / canvas.height);
    gl.uniform3f(splatProgram.uniforms.color, dx, -dy, 1.0);
    gl.uniform1f(splatProgram.uniforms.radius, SPLAT_RADIUS);
    blit(velocity.second[1]);
    velocity.swap();

    gl.uniform1i(splatProgram.uniforms.uTarget, density.first[2]);
    gl.uniform3f(splatProgram.uniforms.color, color[0] * 0.3, color[1] * 0.3, color[2] * 0.3);
    blit(density.second[1]);
    density.swap();
}

function resizeCanvas() {
    if (canvas.width != canvas.clientWidth || canvas.height != canvas.clientHeight) {
        canvas.width = canvas.clientWidth;
        canvas.height = canvas.clientHeight;
        initFramebuffers();
    }
}

canvas.addEventListener('mousemove', function (e) {
    pointers[0].moved = pointers[0].down;
    pointers[0].dx = (e.offsetX - pointers[0].x) * 10.0;
    pointers[0].dy = (e.offsetY - pointers[0].y) * 10.0;
    pointers[0].x = e.offsetX;
    pointers[0].y = e.offsetY;
	pointers[0].down = true;
});

canvas.addEventListener('touchmove', function (e) {
    e.preventDefault();
    var touches = e.targetTouches;
    for (var i = 0; i < e.touches.length; i++) {
        var pointer = pointers[i];
        pointer.moved = pointer.down;
        pointer.dx = (touches[i].pageX - pointer.x) * 10.0;
        pointer.dy = (touches[i].pageY - pointer.y) * 10.0;
        pointer.x = touches[i].pageX;
        pointer.y = touches[i].pageY;
    }
}, false);

canvas.addEventListener('mousedown', function () {
    pointers[0].down = true;
    pointers[0].color = [Math.random() + 0.2, Math.random() + 0.2, Math.random() + 0.2];
});

canvas.addEventListener('touchstart', function (e) {
    var touches = e.targetTouches;
    for (var i = 0; i < touches.length; i++) {
        if (i >= pointers.length) pointers.push(new pointerPrototype());

        pointers[i].id = touches[i].identifier;
        pointers[i].down = true;
        pointers[i].x = touches[i].pageX;
        pointers[i].y = touches[i].pageY;
        pointers[i].color = [Math.random() + 0.2, Math.random() + 0.2, Math.random() + 0.2];
    }
});

window.addEventListener('mouseup', function () {
    pointers[0].down = true;
});

window.addEventListener('touchend', function (e) {
    var touches = e.changedTouches;
    for (var i = 0; i < touches.length; i++) {
        for (var j = 0; j < pointers.length; j++) {
            if (touches[i].identifier == pointers[j].id) pointers[j].down = false;
        }
    }
});
    </script>
</body>
</html>
