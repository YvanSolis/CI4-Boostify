<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boostify: Moodboard</title>
    <link rel="shortcut icon" type="image/png" href="/assets/boostifyicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet">

    <style>
        /* ======= BASE STYLING ======= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Open Sans";
        }

        body {
            background: #0b0b0b;
            /* Plain static background */
            color: white;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ===== HEADER ===== */
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: #141416;
            padding: 15px 40px;
            border-bottom: 2px solid #ff4655;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 100;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.4);
        }

        header .left {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        header img {
            width: 50px;
            height: 50px;
            transition: transform 0.3s ease;
        }

        header img:hover {
            transform: scale(1.1);
        }

        header h1 {
            font-family: "Poppins";
            font-size: 2em;
            color: #ff4655;
            letter-spacing: 1px;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            transition: 0.3s ease;
            font-weight: 500;
            font-family: "Poppins";
        }

        nav a:hover {
            color: #ff4655;
        }

        .btn-login {
            padding: 8px 15px;
            background-color: #ff4655;
            border-radius: 5px;
            color: #fff;
            font-family: "Poppins";
        }

        .btn-login:hover {
            background-color: #ff6a75;
        }

        main {
            flex: 1;
            padding: 160px 40px 40px;
        }

        h2 {
            font-size: 1.8em;
            color: #ff4655;
            margin-bottom: 15px;
            font-family: "Poppins";
        }

        p.subtitle {
            text-align: center;
            color: #b1b1b1;
            font-size: 1.1em;
            margin-bottom: 50px;
        }

        /* ======= COLOR SYSTEM ======= */
        .color-system {
            display: flex;
            justify-content: center;
            gap: 60px;
            flex-wrap: wrap;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            padding: 40px 20px;
        }

        .color-column {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
        }

        .color-block {
            width: 240px;
            height: 70px;
            border-radius: 6px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .color-block:hover {
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(255, 70, 85, 0.4);
        }

        .color-codes {
            font-size: 0.9em;
            color: #bbb;
            margin-top: 5px;
        }

        .color-label {
            font-weight: 600;
            font-size: 1em;
            margin-top: 5px;
            text-align: center;
            color: #fff;
            font-family: "Poppins";
        }

        .color-role {
            font-size: 0.85em;
            color: #aaa;
        }

        /* ======= TYPOGRAPHY ======= */
        .typography {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 30px;
        }

        .heading-font {
            font-family: "Poppins";
            font-size: 2em;
            color: #ff4655;
        }

        .body-font {
            max-width: 400px;
            font-size: 1em;
            color: #ddd;
            line-height: 1.6;
        }

        /* ======= BUTTONS ======= */
        .button-set {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 25px;
        }

        .btn-group {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 10px 20px;
            border-radius: 6px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            font-family: "Poppins";
        }

        .btn:hover {
            transform: translateY(-3px);
        }

        .light .primary {
            background: #ff4655;
            color: #fff;
        }

        .light .secondary {
            background: #3a3a3a;
            color: #fff;
        }

        .light .border {
            background: transparent;
            border: 2px solid #ff4655;
            color: #ff4655;
        }

        .light .disabled {
            background: #555;
            color: #999;
            cursor: not-allowed;
        }

        .dark-mode {
            background: #0b0b0b;
            padding: 25px;
            border-radius: 10px;
            width: fit-content;
        }

        .dark-mode .primary {
            background: #ff4655;
            color: white;
        }

        .dark-mode .secondary {
            background: #1e1e1e;
            color: #fff;
        }

        .dark-mode .border {
            background: transparent;
            border: 2px solid #ff4655;
            color: #ff4655;
        }

        .dark-mode .disabled {
            background: #444;
            color: #999;
        }

        /* ======= CARDS ======= */
        .cards {
            display: flex;
            justify-content: center;
            gap: 25px;
            flex-wrap: wrap;
        }

        .card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            padding: 25px;
            width: 260px;
            transition: all 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: #ff4655;
            box-shadow: 0 0 15px rgba(255, 70, 85, 0.3);
        }

        .card h3 {
            color: #ff4655;
            margin-bottom: 10px;
            font-family: "Poppins";
        }

        .card p {
            color: #ccc;
        }

        .card a {
            color: #ff7a85;
            text-decoration: none;
            font-weight: 600;
            font-family: "Poppins";
        }

        .card a:hover {
            text-decoration: underline;
        }

        /* ======= LOGOS ======= */
        .logos {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 40px;
            flex-wrap: wrap;
        }

        .logo-box {
            text-align: center;
        }

        .logo-box img {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border: 3px solid #ff4655;
            background: #1e1e1e;
            transition: transform 0.3s;
        }

        .circle-logo {
            border-radius: 50%;
        }

        .square-logo {
            border-radius: 10px;
        }

        .logo-box img:hover {
            transform: scale(1.05);
        }

        .logo-label {
            color: #bbb;
            font-size: 0.9em;
            margin-top: 8px;
            font-family: "Poppins";
        }

        /* ======= FOOTER ======= */
        footer {
            background-color: #141416;
            text-align: center;
            padding: 15px 0;
            color: #999;
            font-size: 0.9em;
            border-top: 2px solid #ff4655;
            margin-top: 40px;
            font-family: "Poppins";
        }

        footer span {
            color: #ff4655;
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <?= view('components/header.php') ?>

    <main>
        <!-- COLOR SYSTEM -->
        <section>
            <h2>Color System</h2>
            <div class="color-system">
                <div class="color-column">
                    <div class="color-block" style="background-color:#B3202E;"></div>
                    <div class="color-block" style="background-color:#FF4655;"></div>
                    <div class="color-block" style="background-color:#FF7A85;"></div>
                    <p class="color-codes">#B3202E — #FF4655 — #FF7A85</p>
                    <p class="color-label">Crimson Red <span class="color-role">(Main Accent)</span></p>
                </div>

                <div class="color-column">
                    <div class="color-block" style="background-color:#0B0B0B;"></div>
                    <div class="color-block" style="background-color:#1E1E1E;"></div>
                    <div class="color-block" style="background-color:#3A3A3A;"></div>
                    <p class="color-codes">#0B0B0B — #1E1E1E — #3A3A3A</p>
                    <p class="color-label">Gunmetal Gray <span class="color-role">(Secondary Background)</span></p>
                </div>

                <div class="color-column">
                    <div class="color-block" style="background-color:#7B7B7B;"></div>
                    <div class="color-block" style="background-color:#B1B1B1;"></div>
                    <div class="color-block" style="background-color:#E2E2E2;"></div>
                    <p class="color-codes">#7B7B7B — #B1B1B1 — #E2E2E2</p>
                    <p class="color-label">Steel Silver <span class="color-role">(Neutral)</span></p>
                </div>
            </div>
        </section>

        <!-- TYPOGRAPHY -->
        <section>
            <h2>Typography</h2>
            <div class="typography">
                <div>
                    <p class="heading-font">Heading Font — Poppins Example</p>
                </div>
                <div>
                    <p class="body-font">Body Font — Open Sans Example. Boostify represents skill, speed, and confidence. This typography pairing ensures our brand feels both professional and competitive.</p>
                </div>
            </div>
        </section>

        <!-- BUTTONS -->
        <section>
            <h2>Buttons</h2>
            <div class="dark-mode">
                <div class="btn-group">
                    <?= view('components/buttons/button_primary', ['action' => 'primary', 'label' => 'Primary', 'href' => '#', 'dark' => true]) ?>
                    <?= view('components/buttons/button_secondary', ['label' => 'Secondary', 'href' => '#']) ?>
                    <?= view('components/buttons/button_border', ['label' => 'Border', 'href' => '#']) ?>
                    <?= view('components/buttons/button_primary', ['action' => 'primary', 'label' => 'Disabled', 'href' => '#', 'disable' => true]) ?>
                </div>
            </div>
            </div>
        </section>

        <!-- CARDS -->
        <section>
            <h2>Card Samples</h2>
            <div class="cards">
                <?= view('components/cards/moodboard_card', [
                    'title' => 'Elite Coaching',
                    'excerpt' => 'One-on-one Valorant coaching to help players improve aim, strategy, and mindset.',
                    'href' => '#'
                ]) ?>
                <?= view('components/cards/moodboard_card', [
                    'title' => 'Fast Boosting',
                    'excerpt' => 'Professional boosters available 24/7 to help you climb ranks safely and fast.',
                    'href' => '#'
                ]) ?>
                <?= view('components/cards/moodboard_card', [
                    'title' => 'Trusted by Gamers',
                    'excerpt' => 'Hundreds of satisfied clients with proven results across all regions.',
                    'href' => '#'
                ]) ?>
            </div>
        </section>


        <!-- LOGOS -->
        <section>
            <h2>Logos</h2>
            <div class="logos">
                <div class="logo-box">
                    <img src="/assets/boostifylogo.png" alt="Circle Logo" class="circle-logo">
                    <p class="logo-label">Boostify — Circle</p>
                </div>
                <div class="logo-box">
                    <img src="/assets/boostifylogo.png" alt="Square Logo" class="square-logo">
                    <p class="logo-label">Boostify — Square</p>
                </div>
            </div>
        </section>
    </main>

    <!-- FOOTER -->
    <?= view('components/footer') ?>

</body>

</html>