    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boostify: Valorant</title>
        <link rel="shortcut icon" type="image/png" href="/assets/boostifyicon.ico" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet">

        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                background-color: #0f0f10;
                color: #e5e5e5;
                overflow-x: hidden;
                font-family: 'Open Sans';
                letter-spacing: 0.3px;
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
                font-family: 'Poppins';
                font-size: 2.3em;
                color: #ff4655;
                letter-spacing: 1.5px;
                font-weight: 700;
            }

            nav a {
                color: #fff;
                text-decoration: none;
                margin: 0 15px;
                transition: 0.3s ease;
                font-size: 1.05em;
                font-family: 'Open Sans';
            }

            nav a:hover {
                color: #ff4655;
            }

            .btn-login {
                padding: 8px 15px;
                background-color: #ff4655;
                border-radius: 5px;
                color: #fff;
                font-family: 'Poppins';
                font-size: 1em;
                transition: 0.3s;
            }

            .btn-login:hover {
                background-color: #ff6a75;
            }

            .btn-learn-more {
                display: inline-block;
                padding: 10px 20px;
                background-color: #ff4655;
                color: white;
                border-radius: 6px;
                font-family: 'Poppins';
                font-weight: 500;
                font-size: 0.95em;
                text-decoration: none;
                transition: 0.3s ease;
            }

            .btn-learn-more:hover {
                background-color: #ff6a75;
                transform: translateY(-2px);
            }


            /* ===== SECTIONS ===== */
            section {
                padding-top: 120px;
            }

            /* HERO SECTION */
            .hero {
                height: 100vh;
                background: url('https://images.unsplash.com/photo-1604079628040-94301bb21b91?auto=format&fit=crop&w=1600&q=80') no-repeat center center/cover;
                display: flex;
                align-items: center;
                justify-content: center;
                text-align: center;
                position: relative;
            }

            .hero::after {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.6);
            }

            .hero-content {
                position: relative;
                z-index: 2;
                max-width: 700px;
                padding: 20px;
            }

            .hero-content h2 {
                font-family: 'Poppins';
                font-size: 3em;
                color: #ff4655;
                margin-bottom: 15px;
                letter-spacing: 1px;
            }

            .hero-content p {
                font-family: 'Open Sans';
                font-size: 1.2em;
                line-height: 1.7em;
                color: #ddd;
            }

            /* SERVICES SECTION */
            .services {
                background-color: #111;
                text-align: center;
                padding: 80px 20px;
            }

            .services h2 {
                font-family: 'Poppins';
                color: #ff4655;
                font-size: 2.3em;
                margin-bottom: 20px;
            }

            .services p {
                font-family: 'Open Sans';
                color: #b1b1b1;
                margin-bottom: 40px;
                font-size: 1.1em;
            }

            .service-boxes {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                gap: 30px;
            }

            .service {
                background-color: #1e1e1e;
                padding: 25px;
                border-radius: 10px;
                width: 300px;
                transition: all 0.3s ease;
                border-left: 4px solid transparent;
            }


            .service h3 {
                font-family: 'Poppins';
                color: #ff4655;
                margin-bottom: 10px;
                font-size: 1.4em;
            }

            .service p {
                font-family: 'Open Sans';
                color: #ccc;
                font-size: 1em;
            }


            /* CTA SECTION */
            .cta {
                background: linear-gradient(135deg, #ff4655, #e63946);
                color: #fff;
                text-align: center;
                padding: 80px 20px;
                margin-top: 60px;
                border-top: 3px solid #ff6a75;
                border-bottom: 3px solid #ff6a75;
                position: relative;
                overflow: hidden;
            }

            .cta::before {
                content: "";
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: url('https://images.unsplash.com/photo-1604079628040-94301bb21b91?auto=format&fit=crop&w=1600&q=80') center/cover;
                opacity: 0.15;
                z-index: 0;
            }

            .cta-content {
                position: relative;
                z-index: 2;
                max-width: 700px;
                margin: 0 auto;
            }

            .cta h2 {
                font-family: 'Poppins';
                font-size: 2.5em;
                margin-bottom: 20px;
                letter-spacing: 1px;
            }

            .cta p {
                font-family: 'Open Sans';
                font-size: 1.1em;
                margin-bottom: 35px;
                line-height: 1.7em;
            }

            /* CTA Button */
            .btn-cta {
                display: inline-block;
                background-color: #1e1e1e;
                color: #ff4655;
                font-family: 'Poppins';
                font-weight: 600;
                font-size: 1.05em;
                padding: 12px 28px;
                border-radius: 6px;
                text-decoration: none;
                transition: 0.3s ease;
            }

            .btn-cta:hover {
                background-color: #ff6a75;
                color: #fff;
                transform: translateY(-2px);
            }


            /* FOOTER */
            footer {
                background-color: #141416;
                text-align: center;
                padding: 15px 0;
                color: #999;
                font-size: 1em;
                border-top: 2px solid #ff4655;
                margin-top: 40px;
                font-family: 'Open Sans';
            }

            footer span {
                color: #ff4655;
                font-family: 'Poppins';
            }
        </style>
    </head>

    <body>
        <!-- HEADER -->
        <?= view('components/header.php') ?>

        <!-- HERO -->
        <section class="hero" id="about">
            <div class="hero-content">
                <h2>What is Boostify?</h2>
                <p>Boostify is your trusted Valorant boosting and coaching partner. We help players level up their gameplay
                    and achieve their dream ranks through personalized coaching and secure boosting services.</p>
            </div>
        </section>

        <!-- SERVICES -->
        <section class="services" id="services">
            <h2>Our Services</h2>
            <p>Choose from a variety of services tailored to match your gaming goals.</p>
            <div class="service-boxes">
                <?= view('components/cards/landing_card', [
                    'title' => '🏆 Rank Boosting',
                    'excerpt' => 'Climb to your desired rank quickly and safely with expert boosters.'
                ]) ?>

                <?= view('components/cards/landing_card', [
                    'title' => '🎮 Placement Coaching',
                    'excerpt' => 'Learn competitive strategies and improve your placements with pro-level guidance.'
                ]) ?>

                <?= view('components/cards/landing_card', [
                    'title' => '🎯 Aim Training',
                    'excerpt' => 'Sharpen your aim, reaction time, and crosshair control through structured drills.'
                ]) ?>
            </div>
        </section>

        <!-- CTA SECTION -->
        <?= view('components/cta', [
            'title' => 'Ready to Boost Your Valorant Journey?',
            'description' => 'Join thousands of players who trust Boostify to reach their dream rank and improve their gameplay. Whether you need rank boosting or personalized coaching, we’ve got your back.',
            'buttonHref' => '/login',
            'buttonLabel' => 'Get Started Now'
        ]) ?>

        <!-- FOOTER -->
        <?= view('components/footer') ?>

    </body>

    </html>