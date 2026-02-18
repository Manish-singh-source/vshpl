<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Registration Veena Smart Homes</title>
    <link rel="icon" href="{{ asset('assets/main.png') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@500;600;700;800&family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --gulal-pink: #ff5c8a;
            --gulal-yellow: #ffd43b;
            --gulal-blue: #2fb7ff;
            --gulal-orange: #ff8a3d;
            --gulal-green: #49d17d;
            --ink: #1f1f2e;
            --card: rgba(255, 255, 255, 0.88);
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Nunito', sans-serif;
            color: var(--ink);
            min-height: 100vh;
            overflow-x: hidden;
            background:
                radial-gradient(circle at 12% 12%, rgba(255, 92, 138, 0.42), transparent 32%),
                radial-gradient(circle at 85% 18%, rgba(47, 183, 255, 0.38), transparent 36%),
                radial-gradient(circle at 18% 80%, rgba(255, 212, 59, 0.35), transparent 35%),
                radial-gradient(circle at 82% 78%, rgba(73, 209, 125, 0.32), transparent 34%),
                linear-gradient(135deg, #fff4cc 0%, #ffe1ef 35%, #daf2ff 68%, #e8ffef 100%);
            position: relative;
        }

        .splash-shape {
            position: fixed;
            z-index: 0;
            border-radius: 46% 54% 62% 38% / 44% 38% 62% 56%;
            opacity: 0.35;
            filter: blur(0.2px);
            animation: floaty 11s ease-in-out infinite;
        }

        .splash-shape.s1 {
            top: 9%;
            right: 6%;
            width: 140px;
            height: 95px;
            background: linear-gradient(120deg, rgba(47, 183, 255, 0.72), rgba(255, 255, 255, 0.22));
        }

        .splash-shape.s2 {
            top: 38%;
            left: -20px;
            width: 120px;
            height: 88px;
            background: linear-gradient(120deg, rgba(73, 209, 125, 0.65), rgba(255, 255, 255, 0.22));
            animation-duration: 13s;
        }

        .splash-shape.s3 {
            top: 18%;
            left: 20%;
            width: 90px;
            height: 70px;
            background: linear-gradient(120deg, rgba(255, 212, 59, 0.6), rgba(255, 255, 255, 0.22));
            animation-duration: 9s;
        }

        @keyframes floaty {
            0% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(7deg); }
            100% { transform: translateY(0) rotate(0deg); }
        }

        .powder {
            position: fixed;
            width: 16px;
            height: 16px;
            border-radius: 50%;
            opacity: 0.55;
            filter: blur(0.3px);
            animation: drift 8s ease-in-out infinite alternate;
            z-index: 0;
        }

        .powder.p1 { top: 12%; left: 8%; background: var(--gulal-pink); }
        .powder.p2 { top: 23%; right: 10%; background: var(--gulal-blue); animation-duration: 9s; }
        .powder.p3 { bottom: 16%; left: 14%; background: var(--gulal-orange); animation-duration: 10s; }
        .powder.p4 { bottom: 24%; right: 15%; background: var(--gulal-green); }
        .powder.p5 { top: 56%; left: 50%; background: var(--gulal-yellow); animation-duration: 11s; }

        @keyframes drift {
            from { transform: translateY(-8px) scale(1); }
            to { transform: translateY(10px) scale(1.3); }
        }

        .water-waves {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 180px;
            z-index: 0;
            pointer-events: none;
        }

        .wave {
            position: absolute;
            width: 200%;
            left: -30%;
            border-radius: 42%;
            background: rgba(47, 183, 255, 0.22);
            animation: waveMove 14s linear infinite;
        }

        .wave.w1 {
            bottom: -74px;
            height: 170px;
        }

        .wave.w2 {
            bottom: -82px;
            height: 145px;
            background: rgba(73, 209, 125, 0.2);
            animation-duration: 18s;
            animation-direction: reverse;
        }

        .wave.w3 {
            bottom: -98px;
            height: 140px;
            background: rgba(255, 255, 255, 0.3);
            animation-duration: 22s;
        }

        @keyframes waveMove {
            0% { transform: translateX(0); }
            100% { transform: translateX(-22%); }
        }

        .page {
            position: relative;
            z-index: 1;
            width: min(950px, 92%);
            margin: 2rem auto;
            padding: 1.5rem;
        }

        .brand {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.8rem;
            margin-bottom: 1rem;
        }

        .brand img {
            width: 100px;
            height: 100px;
            border-radius: 10px;
            object-fit: contain;
            background: var(--white);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.14);
            padding: 8px;
        }

        .brand h1 {
            font-family: 'Baloo 2', cursive;
            font-size: clamp(1.6rem, 2.5vw, 2.1rem);
            letter-spacing: 0.3px;
        }

        .form-card {
            background: rgb(255 255 255 / 31%);
            border: 2px solid rgba(255, 255, 255, 0.75);
            border-radius: 24px;
            padding: clamp(1.2rem, 2vw, 2rem);
            box-shadow: 0 18px 55px rgba(26, 30, 66, 0.18);
            backdrop-filter: blur(9px);
            animation: riseIn 0.7s ease-out;
        }

        @keyframes riseIn {
            from { opacity: 0; transform: translateY(14px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .title {
            text-align: center;
            margin-bottom: 1.2rem;
        }

        .title h2 {
            font-family: 'Baloo 2', cursive;
            font-size: clamp(1.5rem, 2.8vw, 2.2rem);
            color: #1b2340;
            line-height: 1.1;
        }

        .title p {
            margin-top: 0.35rem;
            color: #3e4968;
            font-weight: 600;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 1rem;
        }

        .field {
            display: flex;
            flex-direction: column;
            gap: 0.45rem;
        }

        .field.full {
            grid-column: 1 / -1;
        }

        label {
            font-weight: 700;
            color: #273152;
            font-size: 0.95rem;
        }

        .input,
        .select {
            border: 2px solid rgba(27, 35, 64, 0.14);
            border-radius: 13px;
            background: rgba(255, 255, 255, 0.95);
            padding: 0.82rem 0.9rem;
            font-size: 0.98rem;
            font-family: 'Nunito', sans-serif;
            color: #1f2742;
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .input:focus,
        .select:focus {
            outline: none;
            border-color: var(--gulal-orange);
            box-shadow: 0 0 0 4px rgba(255, 138, 61, 0.17);
        }

        .submit {
            margin-top: 1.2rem;
            width: 100%;
            border: 0;
            border-radius: 14px;
            padding: 0.95rem 1rem;
            font-family: 'Baloo 2', cursive;
            font-size: 1.1rem;
            color: #19203b;
            background: linear-gradient(90deg, var(--gulal-yellow), var(--gulal-orange), var(--gulal-pink));
            box-shadow: 0 10px 22px rgba(255, 92, 138, 0.35);
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 28px rgba(255, 92, 138, 0.45);
        }

        .note {
            text-align: center;
            font-size: 0.9rem;
            margin-top: 0.7rem;
            color: #46506f;
            font-weight: 600;
        }

        .toast {
            display: none;
            margin-bottom: 1rem;
            padding: 0.82rem 1rem;
            border-radius: 12px;
            background: linear-gradient(90deg, #d8ffd8, #ebfff1);
            border: 1px solid #91d09f;
            font-weight: 700;
            color: #1f6b2f;
            text-align: center;
        }

        .toast.show {
            display: block;
        }

        @media (max-width: 768px) {
            .page {
                width: 95%;
                margin: 1.2rem auto;
                padding: 0.6rem;
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .brand h1 {
                font-size: 1.5rem;
            }

            .water-waves {
                height: 130px;
            }
        }
    </style>
</head>
<body>
    <span class="powder p1" aria-hidden="true"></span>
    <span class="powder p2" aria-hidden="true"></span>
    <span class="powder p3" aria-hidden="true"></span>
    <span class="powder p4" aria-hidden="true"></span>
    <span class="powder p5" aria-hidden="true"></span>
    <span class="splash-shape s1" aria-hidden="true"></span>
    <span class="splash-shape s2" aria-hidden="true"></span>
    <span class="splash-shape s3" aria-hidden="true"></span>

    <div class="water-waves" aria-hidden="true">
        <div class="wave w1"></div>
        <div class="wave w2"></div>
        <div class="wave w3"></div>
    </div>

    <main class="page">
        <div class="brand">
            <img src="{{ asset('assets/main.png') }}" alt="VSHPL logo">
           
        </div>

        <section class="form-card">
            <div id="toast" class="toast">Registration captured in frontend demo mode.</div>

            <div class="title">
                <h2>Vehicle Registration</h2>
                <p class="form-subtitle">Register Your Vehicle for Building Parking</p>
            </div>

            <form id="holiVehicleForm" action="{{ route('holi.store') }}" method="post" novalidate>
                @csrf
                <div class="grid">
                    <div class="field">
                        <label for="wing">Select Wing *</label>
                        <select id="wing" name="wing" class="select" required>
                            <option value="">Select Wing</option>
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                            <option value="e">E</option>
                        </select>
                    </div>

                    <div class="field">
                        <label for="vehicleType">Vehicle Type *</label>
                        <select id="vehicleType" name="vehicleType" class="select" required>
                            <option value="">Select Vehicle Type</option>
                            <option value="car">Car</option>
                            <option value="bike">Bike</option>
                            <option value="scooter">Scooter</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="field full">
                        <label for="fullName">Full Name *</label>
                        <input type="text" id="fullName" name="fullName" class="input" placeholder="Enter your full name" required>
                    </div>

                    <div class="field">
                        <label for="flatNumber">Flat / Apartment Number *</label>
                        <input type="text" id="flatNumber" name="flatNumber" class="input" placeholder="Enter your flat/apartment number" required>
                    </div>

                    <div class="field">
                        <label for="mobileNumber">Mobile Number *</label>
                        <input type="tel" id="mobileNumber" name="mobileNumber" class="input" placeholder="Enter your mobile number" required>
                    </div>

                    <div class="field">
                        <label for="email">Email ID (Optional)</label>
                        <input type="email" id="email" name="email" class="input" placeholder="Enter your email address">
                    </div>

                    <div class="field">
                        <label for="vehicleNumber">Vehicle Number (Registration No.) *</label>
                        <input type="text" id="vehicleNumber" name="vehicleNumber" class="input" placeholder="Enter vehicle registration number" required>
                    </div>
                </div>

                <button type="submit" class="submit">Celebrate & Submit</button>
            </form>
        </section>
    </main>

    <script>
        const form = document.getElementById('holiVehicleForm');
        const toast = document.getElementById('toast');

        // Show success message if session has it
        @if(session('success'))
            toast.textContent = '{{ session('success') }}';
            toast.classList.add('show');
            setTimeout(() => toast.classList.remove('show'), 2200);
        @endif

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            // Submit the form
            form.submit();
        });
    </script>
</body>
</html>
