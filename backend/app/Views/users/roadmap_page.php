<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Boostify: Roadmap</title>
    <link rel="shortcut icon" type="image/png" href="/assets/boostifyicon.ico" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet">

    <style>
        /* ======= BASE STYLING ======= */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins";
            background-color: #0f0f10;
            /* Plain background */
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
            font-family: "Open Sans";
            font-size: 2em;
            color: #ff4655;
            letter-spacing: 1px;
        }

        nav a {
            font-family: "Poppins";
            color: #fff;
            text-decoration: none;
            margin: 0 15px;
            transition: 0.3s ease;
            font-weight: 500;
        }

        nav a:hover {
            color: #ff4655;
        }

        .btn-login {
            padding: 8px 15px;
            background-color: #ff4655;
            border-radius: 5px;
            color: #fff;
        }

        .btn-login:hover {
            background-color: #ff6a75;
        }

        /* ===== MAIN CONTENT ===== */
        main {
            flex: 1;
            padding: 160px 40px 40px;
        }

        p.subtitle {
            font-family: "Open Sans";
            color: #b0b0b0;
            margin-bottom: 30px;
            font-size: 1em;
            text-align: center;
        }

        .roadmap-container {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        /* ===== CARD STYLE ===== */
        .roadmap-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-left: 5px solid #ff4655;
            border-radius: 10px;
            padding: 20px 25px;
            transition: all 0.3s ease;
            position: relative;
            font-family: "Poppins";
        }

        .roadmap-card:hover {
            transform: translateY(-5px);
            border-color: #ff6a75;
            box-shadow: 0 0 15px rgba(255, 70, 85, 0.25);
        }

        .roadmap-card h3 {
            font-family: "Open Sans";
            color: #fff;
            margin: 0 0 10px 0;
            font-size: 1.3em;
        }

        .roadmap-card p {
            color: #ccc;
            margin: 0 0 8px 0;
            line-height: 1.5;
        }

        /* ===== STATUS BADGE ===== */
        .status {
            position: absolute;
            top: 20px;
            right: 25px;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.8em;
            font-weight: 600;
            font-family: "Poppins";
        }

        .InProgress {
            background: #10b98122;
            color: #10b981;
            border: 1px solid #10b981;
        }

        .Planned {
            background: #2563eb22;
            color: #3b82f6;
            border: 1px solid #3b82f6;
        }

        .Backlog {
            background: #6b728022;
            color: #9ca3af;
            border: 1px solid #9ca3af;
        }

        .Done {
            background: #16a34a22;
            color: #16a34a;
            border: 1px solid #16a34a;
        }

        .priority {
            font-size: 0.9em;
            color: #aaa;
            margin-top: 8px;
            font-style: italic;
        }

        /* ===== FOOTER ===== */
        footer {
            font-family: "Open Sans";
            background-color: #141416;
            text-align: center;
            padding: 15px 0;
            color: #999;
            font-size: 0.9em;
            border-top: 2px solid #ff4655;
            margin-top: 40px;
        }

        footer span {
            color: #ff4655;
        }

        /* ===== ANIMATION ===== */
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(15px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .roadmap-card {
            animation: slideIn 0.6s ease forwards;
        }
    </style>
</head>

<body>

    <!-- HEADER -->
    <?= view('components/header.php') ?>

    <main>
        <div class="roadmap-container">
            <?= view('components/cards/roadmap_card', [
                'title' => 'User CRUD',
                'description' => 'Manage user accounts for customers, boosters, and admins (create, view, update, delete).',
                'status' => 'Planned',
                'priority' => 'High'
            ]) ?>

            <?= view('components/cards/roadmap_card', [
                'title' => 'Service CRUD',
                'description' => 'Add and manage boosting or coaching services with prices and detailed descriptions.',
                'status' => 'Planned',
                'priority' => 'High'
            ]) ?>

            <?= view('components/cards/roadmap_card', [
                'title' => 'Request CRUD',
                'description' => 'Handle bookings, schedules, and progress tracking for customer requests efficiently.',
                'status' => 'Planned',
                'priority' => 'High'
            ]) ?>

            <?= view('components/cards/roadmap_card', [
                'title' => 'Email Verification',
                'description' => 'Verify user emails during signup for security and spam prevention.',
                'status' => 'Planned',
                'priority' => 'Medium'
            ]) ?>

            <?= view('components/cards/roadmap_card', [
                'title' => 'Account Info Update',
                'description' => 'Allow users to edit profile information, passwords, and payment details.',
                'status' => 'Planned',
                'priority' => 'Medium'
            ]) ?>

            <?= view('components/cards/roadmap_card', [
                'title' => 'Booking Progress Tracker',
                'description' => 'Show customers real-time updates on their current service or coaching session.',
                'status' => 'Planned',
                'priority' => 'Medium'
            ]) ?>

            <?= view('components/cards/roadmap_card', [
                'title' => 'Booster Management',
                'description' => 'Assign boosters to clients and track their activities and performance metrics.',
                'status' => 'Backlog',
                'priority' => 'Medium'
            ]) ?>

            <?= view('components/cards/roadmap_card', [
                'title' => 'Payment History',
                'description' => 'Record and display all transactions for customers and boosters.',
                'status' => 'Backlog',
                'priority' => 'High'
            ]) ?>

            <?= view('components/cards/roadmap_card', [
                'title' => 'Image Upload & Middleware',
                'description' => 'Implement secure file uploads and middleware authorization for images and files.',
                'status' => 'Backlog',
                'priority' => 'High'
            ]) ?>

            <?= view('components/cards/roadmap_card', [
                'title' => 'Employee & Admin Accounts (RBAC)',
                'description' => 'Role-based access for staff and admin functions for secure system control.',
                'status' => 'Backlog',
                'priority' => 'High'
            ]) ?>
        </div>
    </main>


    <!-- FOOTER -->
    <?= view('components/footer') ?>

</body>

</html>