<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veena Smart Homes | Home</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/main.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --brand-primary: #0d4a8d;
            --brand-accent: #00a8d7;
            --text-light: #f6fbff;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: 'Montserrat', sans-serif;
            color: var(--text-light);
            min-height: 100vh;
            background: #0a1f35;
        }

        .hero {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-image: linear-gradient(145deg, rgba(4, 24, 43, 0.75), rgba(11, 57, 102, 0.45)), url('{{ asset('assets/home.jpg') }}');
            background-size: cover;
            background-position: center;
            padding: 24px;
            text-align: center;
            box-sizing: border-box;
        }

        .floating-logo {
            position: absolute;
            top: 24px;
            left: 24px;
            width: 96px;
            height: auto;
            filter: drop-shadow(0 6px 20px rgba(0, 0, 0, 0.45));
        }

        .content {
            max-width: 720px;
            padding: 34px 30px;
            border-radius: 18px;
            background: rgba(7, 28, 48, 0.42);
            backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.24);
            box-shadow: 0 18px 40px rgba(0, 0, 0, 0.28);
        }

        .content-logo {
            width: 140px;
            max-width: 34vw;
            height: auto;
            margin-bottom: 14px;
            filter: drop-shadow(0 4px 12px rgba(0, 0, 0, 0.36));
        }

        .building-name {
            margin: 0 0 8px;
            font-size: clamp(1.9rem, 3.4vw, 3rem);
            font-weight: 800;
            letter-spacing: 1px;
            text-transform: uppercase;
            text-shadow: 0 8px 18px rgba(0, 0, 0, 0.34);
        }

        .subtitle {
            margin: 0;
            font-size: clamp(0.95rem, 1.6vw, 1.2rem);
            font-weight: 500;
            opacity: 0.96;
        }

        .past-event-btn {
            margin-top: 28px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: linear-gradient(120deg, var(--brand-primary), var(--brand-accent));
            color: #fff;
            text-decoration: none;
            font-weight: 700;
            letter-spacing: 0.3px;
            border-radius: 999px;
            padding: 12px 28px;
            border: 1px solid rgba(255, 255, 255, 0.35);
            box-shadow: 0 10px 24px rgba(0, 0, 0, 0.28);
            transition: transform .25s ease, box-shadow .25s ease;
        }

        .past-event-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 30px rgba(0, 0, 0, 0.34);
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

        @media (max-width: 768px) {
            .hero {
                padding: 20px;
            }

            .floating-logo {
                width: 72px;
                top: 14px;
                left: 14px;
            }

            .content {
                padding: 24px 18px;
            }

            .site-credit {
                font-size: 11px;
                right: 8px;
                bottom: 8px;
            }
        }
    </style>
</head>

<body>
    <section class="hero">
        <img src="{{ asset('assets/main.png') }}" alt="Veena Smart Homes Logo" class="floating-logo">
        <div class="content">
            <img src="{{ asset('assets/main.png') }}" alt="VSH Emblem" class="content-logo">
            <h1 class="building-name">Veena Smart Homes</h1>
            <p class="subtitle">Community Life, Celebrations, and Memorable Moments</p>
            <a class="past-event-btn" href="{{ route('event.page') }}">Past Event</a>
        </div>
    </section>

    <div class="site-credit">
        Designed by <a href="https://technofra.com/" target="_blank">Technofra</a>
        <span class="tagline">Web Presence &amp; Branding</span>
    </div>
</body>

</html>
