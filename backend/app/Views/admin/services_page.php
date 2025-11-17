<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Boostify | Services Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <style>
        /* General Styles - Copied from Dashboard for consistency */
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

        /* Sidebar Styles - Copied from Dashboard for consistency */
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
            margin-bottom: 5px;
        }

        /* Services Page Specific Styles */
        .header-controls {
            /* Modified to use flexbox for spacing */
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            border-bottom: 1px solid #ff4655;
            padding-bottom: 15px;
        }

        /* New style for the title inside the flex container */
        .page-title {
            font-family: 'Poppins';
            font-size: 2.2em;
            color: #ff4655;
        }


        .add-service-btn {
            background-color: #ff4655;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-family: 'Poppins';
            font-size: 1em;
            cursor: pointer;
            transition: 0.3s;
        }

        .add-service-btn:hover {
            background-color: #e13d4b;
        }

        .services-table {
            width: 100%;
            border-collapse: collapse;
        }

        .services-table th,
        .services-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #333;
        }

        .services-table th {
            background-color: #1e1e1e;
            color: #ff4655;
            font-family: 'Poppins';
            font-size: 1.05em;
        }

        .services-table tr:hover {
            background-color: #141416;
        }

        .services-table td {
            color: #ccc;
            font-size: 0.95em;
        }

        .status-badge {
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: 500;
            font-size: 0.85em;
        }

        .status-active {
            background-color: #1c7430;
            /* Green */
            color: white;
        }

        .status-disabled {
            background-color: #dc3545;
            /* Red */
            color: white;
        }

        .action-btns button {
            background: none;
            border: 1px solid #ff4655;
            color: #ff4655;
            padding: 5px 10px;
            margin-right: 5px;
            border-radius: 4px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 0.85em;
        }

        .action-btns button:hover {
            background-color: #ff4655;
            color: white;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>BOOSTIFY</h2>
        <a href="admin_dashboard.php">Dashboard</a>
        <a href="admin_services.php" class="active">Services</a>
        <a href="admin_accounts.php">Accounts</a>
        <a href="admin_requests.php">Requests</a>
        <button class="logout">Logout</button>
    </div>

    <div class="main-content">

        <div class="header-controls">
            <h1 class="page-title">Service Management</h1>
            <button class="add-service-btn">➕ Add New Service</button>
        </div>

        <table class="services-table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Price/Session</th>
                    <th>Requests</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Rank Boosting</td>
                    <td>₱1,500</td>
                    <td>125</td>
                    <td><span class="status-badge status-active">Active</span></td>
                    <td class="action-btns">
                        <button>Edit</button>
                        <button>Disable</button>
                    </td>
                </tr>

                <tr>
                    <td>Placement Coaching</td>
                    <td>₱800</td>
                    <td>89</td>
                    <td><span class="status-badge status-active">Active</span></td>
                    <td class="action-btns">
                        <button>Edit</button>
                        <button>Disable</button>
                    </td>
                </tr>

                <tr>
                    <td>Aim Training (Discontinued)</td>
                    <td>₱650</td>
                    <td>12</td>
                    <td><span class="status-badge status-disabled">Disabled</span></td>
                    <td class="action-btns">
                        <button>Re-enable</button>
                        <button style="border-color: red; color: red;">Delete</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>