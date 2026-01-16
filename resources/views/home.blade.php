<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VSH Cricket Premier League</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}">
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
                padding-top: 100px!important;
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
    </style>
</head>

<body>
    <div class="header">
        <img src="{{ asset('assets/png.png') }}" alt="Logo" class="logo">
    </div>
    <div class="container ">
        <div class="column"
            style="background-image: url('https://www.shutterstock.com/image-photo/generate-image-background-inspired-by-600nw-2600403503.jpg');">
            <h1>Register as a Cricket Player</h1>
            <p>Register now to join our cricket community and showcase your skills. Be part of exciting matches,
                tournaments, and a growing network of cricket enthusiasts.</p>
            <button><a href="https://veenasmarthomes.com/vshpl" target="_blank">Register Now</a> </button>
        </div>
        <div class="column column1"
            style="background-image: url('https://www.shutterstock.com/image-photo/neon-3d-image-cricket-stadium-600nw-2588682129.jpg');">
            <h1>Join Our Sponsor Team</h1>
            <p>Be a valued member of our sponsor team, ready to respond whenever needed. Collaborate, learn, and make an
                impact.</p>
            <button> <a href="https://veenasmarthomes.com/cricket" target="_blank">Join Now</a></button>
        </div>
    </div>
</body>

</html>
