<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veena Smart Homes | Navratri Utsav</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/main.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Montserrat', sans-serif;
            color: #fff;
            overflow: hidden;
            background: #120706;
        }

        .video-bg {
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: 0;
        }

        .overlay {
            position: fixed;
            inset: 0;
            z-index: 1;
            background:
                radial-gradient(circle at 50% 45%, rgba(245, 160, 42, 0.18), transparent 34%),
                linear-gradient(135deg, rgba(18, 7, 6, 0.7), rgba(54, 10, 4, 0.35));
        }

        .logo {
            position: fixed;
            top: 22px;
            left: 22px;
            z-index: 3;
            width: 98px;
            height: auto;
            filter: drop-shadow(0 8px 20px rgba(0, 0, 0, 0.5));
        }

        .content {
            position: relative;
            z-index: 2;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 120px 22px 48px;
            text-align: center;
        }

        .content-inner {
            max-width: 860px;
            text-shadow: 0 8px 24px rgba(0, 0, 0, 0.58);
        }

        .eyebrow {
            margin: 0 0 12px;
            font-size: clamp(0.9rem, 2vw, 1.1rem);
            font-weight: 700;
            letter-spacing: 3px;
            text-transform: uppercase;
            color: #ffe2a8;
        }

        h1 {
            margin: 0;
            font-size: clamp(2.4rem, 8vw, 6.6rem);
            line-height: 0.95;
            font-weight: 800;
            letter-spacing: 0;
            text-transform: uppercase;
        }

        .subtext {
            margin: 22px auto 0;
            max-width: 640px;
            font-size: clamp(1rem, 2.4vw, 1.45rem);
            line-height: 1.6;
            font-weight: 600;
        }

        .home-link {
            position: fixed;
            right: 22px;
            top: 24px;
            z-index: 3;
            color: #fff;
            text-decoration: none;
            font-weight: 700;
            padding: 10px 18px;
            border: 1px solid rgba(255, 255, 255, 0.45);
            border-radius: 999px;
            background: rgba(0, 0, 0, 0.22);
            backdrop-filter: blur(5px);
        }

        .home-link:hover {
            background: rgba(255, 255, 255, 0.18);
        }

        @media (max-width: 640px) {
            .logo {
                width: 74px;
                top: 14px;
                left: 14px;
            }

            .home-link {
                top: 16px;
                right: 14px;
                padding: 9px 14px;
                font-size: 0.82rem;
            }

            .content {
                padding-top: 105px;
            }
        }
    </style>
</head>

<body>
    <video class="video-bg" autoplay muted loop playsinline>
        <source src="{{ asset('assets/durga.mp4') }}" type="video/mp4">
    </video>
    <div class="overlay" aria-hidden="true"></div>
    <img src="{{ asset('assets/main.png') }}" alt="Veena Smart Homes Logo" class="logo">
    <a class="home-link" href="{{ url('/') }}">Back Home</a>

    <main class="content">
        <div class="content-inner">
            <p class="eyebrow">Upcoming Event</p>
            <h1>Navratri Utsav</h1>
            <p class="subtext">Celebrate devotion, dance, music, and community togetherness at Veena Smart Homes.</p>
        </div>
    </main>
</body>

</html>
