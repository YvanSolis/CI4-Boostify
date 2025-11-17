<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Boostify | User Accounts Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@600;700&display=swap" rel="stylesheet">
    <style>
        /* General Styles - Shared */
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

        /* Sidebar Styles - Shared */
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

        /* Header Controls for Action Buttons */
        .header-controls {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
            border-bottom: 1px solid #ff4655;
            padding-bottom: 15px;
        }

        .page-title {
            font-family: 'Poppins';
            font-size: 2.2em;
            color: #ff4655;
        }

        /* Add Employee Button (User CRUD: Create for Employees) */
        .add-employee-btn {
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

        .add-employee-btn:hover {
            background-color: #e13d4b;
        }

        /* Accounts Table Styles (User CRUD: Read) */
        .accounts-table {
            width: 100%;
            border-collapse: collapse;
        }

        .accounts-table th,
        .accounts-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #333;
            font-size: 0.95em;
        }

        .accounts-table th {
            background-color: #1e1e1e;
            color: #ff4655;
            font-family: 'Poppins';
            font-size: 1.05em;
        }

        .accounts-table tr:hover {
            background-color: #141416;
        }

        .accounts-table td {
            color: #ccc;
        }

        /* Role and Status Badges */
        .badge {
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: 500;
            font-size: 0.85em;
        }

        .role-admin {
            background-color: #ff4655;
            color: white;
        }

        .role-booster {
            background-color: #6a0dad;
            /* Purple */
            color: white;
        }

        .role-customer {
            background-color: #4CAF50;
            /* Green */
            color: white;
        }

        .status-active {
            background-color: #1c7430;
            /* Dark Green */
            color: white;
        }

        .status-inactive {
            background-color: #ffc107;
            /* Yellow/Orange */
            color: #333;
        }


        /* Action Buttons (User CRUD: Update and Delete) */
        .action-btns button {
            background: none;
            border: 1px solid #007bff;
            /* Blue for Edit/Update */
            color: #007bff;
            padding: 5px 10px;
            margin-right: 5px;
            border-radius: 4px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 0.85em;
        }

        .action-btns .deactivate-btn {
            border: 1px solid #dc3545;
            /* Red for Deactivate */
            color: #dc3545;
        }

        .action-btns button:hover {
            background-color: #007bff;
            color: white;
        }

        .action-btns .deactivate-btn:hover {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>BOOSTIFY</h2>
        <a href="admin_dashboard.php">Dashboard</a>
        <a href="admin_services.php">Services</a>
        <a href="admin_accounts.php" class="active">Accounts</a>
        <a href="admin_requests.php">Requests</a>
        <button class="logout">Logout</button>
    </div>

    <div class="main-content">

        <div class="header-controls">
            <h1 class="page-title">User Accounts Management</h1>
            <button class="add-employee-btn">➕ Add New Employee</button>
        </div>

        <table class="accounts-table">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Last Active</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>AdminBoss</td>
                    <td>admin@boostify.com</td>
                    <td><span class="badge role-admin">Admin</span></td>
                    <td>Just Now</td>
                    <td><span class="badge status-active">Active</span></td>
                    <td class="action-btns">
                        <button>Edit</button>
                        <button class="deactivate-btn" disabled>Delete</button>
                    </td>
                </tr>

                <tr>
                    <td>ProBooster_X</td>
                    <td>boosterx@email.com</td>
                    <td><span class="badge role-booster">Employee</span></td>
                    <td>10 mins ago</td>
                    <td><span class="badge status-active">Active</span></td>
                    <td class="action-btns">
                        <button>Edit</button>
                        <button class="deactivate-btn">Deactivate</button>
                    </td>
                </tr>

                <tr>
                    <td>RankClimber99</td>
                    <td>climber@mail.com</td>
                    <td><span class="badge role-customer">Customer</span></td>
                    <td>3 days ago</td>
                    <td><span class="badge status-active">Active</span></td>
                    <td class="action-btns">
                        <button>Edit</button>
                        <button class="deactivate-btn">Deactivate</button>
                    </td>
                </tr>

                <tr>
                    <td>LapsedPlayer</td>
                    <td>lapsed@mail.com</td>
                    <td><span class="badge role-customer">Customer</span></td>
                    <td>5 months ago</td>
                    <td><span class="badge status-inactive">Inactive</span></td>
                    <td class="action-btns">
                        <button>Edit</button>
                        <button class="deactivate-btn">Delete</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>