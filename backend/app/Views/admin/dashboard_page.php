<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Boostify | Admin Dashboard</title>
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
            font-family: 'Open Sans', sans-serif;
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background-color: #141416;
            border-right: 2px solid #ff4655;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .sidebar h2 {
            color: #ff4655;
            font-family: 'Poppins';
            font-size: 1.8em;
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar a {
            text-decoration: none;
            color: #e5e5e5;
            font-size: 1.05em;
            padding: 10px 15px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background-color: #ff4655;
            color: white;
        }

        .logout {
            margin-top: auto;
            padding: 10px 15px;
            background-color: #ff4655;
            color: white;
            border: none;
            border-radius: 5px;
            font-family: 'Poppins';
            cursor: pointer;
            transition: 0.3s;
        }

        .logout:hover {
            background-color: #e13d4b;
        }

        .main-content {
            flex: 1;
            padding: 40px 60px;
        }

        .main-content h1 {
            font-family: 'Poppins';
            font-size: 2.2em;
            color: #ff4655;
            margin-bottom: 15px;
        }

        .cards {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            margin-top: 30px;
        }

        .card {
            background-color: #1e1e1e;
            border-left: 4px solid #ff4655;
            border-radius: 10px;
            padding: 25px;
            width: 280px;
            transition: 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            background-color: #222;
        }

        .card h3 {
            font-family: 'Poppins';
            color: #ff4655;
            font-size: 1.4em;
            margin-bottom: 10px;
        }

        .card p {
            font-size: 0.95em;
            color: #ccc;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>BOOSTIFY</h2>
        <a href="admin_dashboard.php" class="active">Dashboard</a>
        <a href="admin_services.php">Services</a>
        <a href="admin_accounts.php">Accounts</a>
        <a href="admin_requests.php">Requests</a>
        <button class="logout">Logout</button>
    </div>

    <div class="main-content">
        <h1>Dashboard Overview</h1>
        <p>Welcome to the Boostify Admin Dashboard. Manage operations and track statistics efficiently.</p>

        <div class="cards">
            <div class="card">
                <h3>Total Members</h3>
                <p>1,240 Active</p>
            </div>
            <div class="card">
                <h3>Reservations Today</h3>
                <p>35 Pending</p>
            </div>
            <div class="card">
                <h3>Revenue</h3>
                <p>₱58,400</p>
            </div>
        </div>
    </div>
</body>

</html>