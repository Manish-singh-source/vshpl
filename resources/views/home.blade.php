<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VEENA SMART HOMES</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/main.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 10px;
            z-index: 10;
        }

        .logo {
            width: 100px;
            height: auto;
        }

        .container {
            display: flex;
            width: 100%;
            height: 100vh;
        }

        .column {
            flex: 1;
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 20px;
            box-sizing: border-box;
            color: white;
            text-align: center;
        }

        .column h1 {
            margin: 0 0 10px 0;
            font-size: 3em;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .column p {
            margin: 0 0 20px 0;
            font-size: 1.2em;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            line-height: 1.5;
        }

        .column button {
            padding: 10px 40px 10px 20px;
            font-size: 1em;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            position: relative;
        }

        .column button::after {
            content: " →";
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-weight: bold;
        }

        .column button:hover {
            background-color: #0056b3;
        }

        .column {
            position: relative;
        }

        .column::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3));
            z-index: 1;
        }

        .column h1,
        .column p,
        .column button {
            position: relative;
            z-index: 2;
        }

        .column:nth-child(2)::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.3));
            z-index: 1;
        }

        .column:nth-child(2) h2,
        .column:nth-child(2) p,
        .column:nth-child(2) button {
            position: relative;
            z-index: 2;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                height: auto;
            }

            .column {
                height: 50vh;
                padding-top: 150px;
                padding-bottom: 100px;
            }

            .column1 {
                height: 50vh;
                padding-top: 100px !important;
                padding-bottom: 100px;
            }

            .column h1 {
                font-size: 28px;
            }

            .column p {
                font-size: 1em;
            }
        }

        a {
            text-decoration: none;
            color: white;
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
            background: linear-gradient(1deg, #036 0%, #00d0ff 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        @media (max-width: 768px) {
            .site-credit {
                font-size: 11px;
                right: 8px;
                bottom: 8px;
            }
        }
    </style>
</head>

<body>
    <div class="header">
        <img src="{{ asset('assets/main.png') }}" alt="Logo" class="logo">
    </div>
    <div class="container">
        <div class="column"
            style="background-image: url('https://t4.ftcdn.net/jpg/10/33/79/25/360_F_1033792563_Ulsd6x24CQKcztYySpupwIQofgPHcmL1.jpg');">
            <h1>Celebrate Holi With Us</h1>
            <p>Join us for a vibrant Holi celebration filled with colors, music, and endless fun. Create beautiful
                memories with your friends and enjoy the festival in its purest joy.</p>
            <button><a href="https://veenasmarthomes.com/holicelebration" target="_blank">Let's Play Holi</a> </button>
        </div>
        <div class="column column1" style="background-image: url('assets/team.jpg');">
            <h1>Join Our Sponsor Team</h1>
            <p>Be a valued member of our sponsor team, ready to respond whenever needed. Collaborate, learn, and make an
                impact.</p>
            <button> <a href="https://veenasmarthomes.com/cricket" target="_blank">Join Now</a></button>
        </div>
    </div>
    <div class="site-credit">
        Designed by <a href="https://technofra.com/" target="_blank">Technofra</a>
        <span class="tagline">Web Presence &amp; Branding</span>
    </div>
</body>

</html>
