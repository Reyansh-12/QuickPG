<!-- filepath: /var/www/html/QuickPG/Admin/layouts/sidebar.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sidebar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        .sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #343a40;
            color: #fff;
            padding: 20px 15px;
        }
        .sidebar .logo {
            font-size: 1.5rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 30px;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px 15px;
            border-radius: 5px;
            margin-bottom: 10px;
        }
        .sidebar a:hover {
            background-color: #495057;
        }
        .sidebar a.active {
            background-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="logo">PG Hostel</div>
        <a href="dashboard.php" class="active">Dashboard</a>
        <a href="owners_list.php">Owners List</a>
        <a href="users_list.php">User List</a>
        <a href="history.php">History</a>
        <a href="settings.php">Settings</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>