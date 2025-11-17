<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Boostify | Request Management</title>
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

        /* Header Controls */
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

        /* Filter/Search Bar (Placeholder) */
        .filter-options {
            display: flex;
            gap: 15px;
        }

        .filter-options select {
            padding: 8px 12px;
            border-radius: 5px;
            border: 1px solid #333;
            background-color: #1e1e1e;
            color: #e5e5e5;
            font-size: 0.95em;
        }


        /* Requests Table Styles (REQUEST CRUD: Read) */
        .requests-table {
            width: 100%;
            border-collapse: collapse;
        }

        .requests-table th,
        .requests-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #333;
            font-size: 0.9em;
        }

        .requests-table th {
            background-color: #1e1e1e;
            color: #ff4655;
            font-family: 'Poppins';
            font-size: 1.05em;
        }

        .requests-table tr:hover {
            background-color: #141416;
        }

        .requests-table td {
            color: #ccc;
        }

        /* Status Badges */
        .status-badge {
            padding: 5px 10px;
            border-radius: 4px;
            font-weight: 500;
            font-size: 0.85em;
        }

        /* Status Colors (REQUEST CRUD: Update) */
        .status-pending {
            background-color: #ffc107;
            /* Orange/Yellow */
            color: #333;
        }

        .status-approved {
            background-color: #007bff;
            /* Blue */
            color: white;
        }

        .status-inprogress {
            background-color: #6a0dad;
            /* Purple */
            color: white;
        }

        .status-completed {
            background-color: #28a745;
            /* Green */
            color: white;
        }

        .status-canceled {
            background-color: #dc3545;
            /* Red */
            color: white;
        }


        /* Action Buttons (REQUEST CRUD: Update and Delete) */
        .action-btns button,
        .action-btns select {
            background-color: #1e1e1e;
            border: 1px solid #ff4655;
            color: #ff4655;
            padding: 6px 10px;
            margin-right: 5px;
            border-radius: 4px;
            cursor: pointer;
            transition: 0.3s;
            font-size: 0.85em;
        }

        .action-btns select {
            width: 110px;
            /* Adjust width for selection */
            background-color: #141416;
            color: #ccc;
        }

        .action-btns button:hover {
            background-color: #ff4655;
            color: white;
        }

        .action-btns .delete-btn {
            border: 1px solid #dc3545;
            color: #dc3545;
        }

        .action-btns .delete-btn:hover {
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
        <a href="admin_accounts.php">Accounts</a>
        <a href="admin_requests.php" class="active">Requests</a>
        <button class="logout">Logout</button>
    </div>

    <div class="main-content">

        <div class="header-controls">
            <h1 class="page-title">Service Requests & Bookings</h1>

            <div class="filter-options">
                <select>
                    <option>Filter by Status</option>
                    <option>Pending</option>
                    <option>Approved</option>
                    <option>Completed</option>
                </select>
                <select>
                    <option>Filter by Booster</option>
                    <option>ProBooster_X</option>
                    <option>Coach_Alpha</option>
                </select>
            </div>
        </div>

        <table class="requests-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Customer</th>
                    <th>Service</th>
                    <th>Assigned To</th>
                    <th>Schedule</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#1004</td>
                    <td>NewGamer01</td>
                    <td>Rank Boosting</td>
                    <td>Unassigned</td>
                    <td>ASAP</td>
                    <td><span class="status-badge status-pending">Pending</span></td>
                    <td class="action-btns">
                        <button>Assign/Approve</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>

                <tr>
                    <td>#1003</td>
                    <td>RankClimber99</td>
                    <td>Placement Coaching</td>
                    <td>ProBooster_X</td>
                    <td>Nov 17, 4:00 PM</td>
                    <td><span class="status-badge status-inprogress">Game in Progress</span></td>
                    <td class="action-btns">
                        <select>
                            <option>Update Status</option>
                            <option>Completed</option>
                            <option>Schedule Change</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>#1002</td>
                    <td>VIP_Player</td>
                    <td>Aim Training</td>
                    <td>Coach_Alpha</td>
                    <td>Nov 15, 7:00 PM</td>
                    <td><span class="status-badge status-completed">Completed</span></td>
                    <td class="action-btns">
                        <button>View Details</button>
                        <button class="delete-btn">Archive</button>
                    </td>
                </tr>

                <tr>
                    <td>#1001</td>
                    <td>LapsedPlayer</td>
                    <td>Rank Boosting</td>
                    <td>Unassigned</td>
                    <td>Nov 16, 8:00 PM</td>
                    <td><span class="status-badge status-canceled">Canceled</span></td>
                    <td class="action-btns">
                        <button>View Log</button>
                        <button class="delete-btn">Delete</button>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
</body>

</html>