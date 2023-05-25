<?php
session_start();
if (isset($_SESSION['is_login']) && $_SESSION['is_admin'] == 1) {
} else {
    header('Location: ../login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Admin Dashboard</title>
    <style>
        /* Basic Styles */
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            position: fixed;
            height: 100%;
            transition: all 0.3s ease;
            z-index: 1;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar ul li {
            padding: 10px;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
        }

        .sidebar ul li a:hover {
            color: #ff0;
        }

        /* Main Content Styles */
        .content {
            margin-left: 250px;
            padding: 20px;
            transition: all 0.3s ease;
        }

        /* Responsive Styles */
        @media only screen and (max-width: 768px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: static;
                display: none;
                transition: none;
            }

            .sidebar.open {
                display: block;
            }

            .content {
                margin-left: 0;
            }

            .toggle-btn {
                display: block;
                background-color: #333;
                color: #fff;
                text-align: center;
                padding: 10px;
                cursor: pointer;
            }

            .toggle-btn:hover {
                background-color: #444;
            }
        }
    </style>
    <script>
        function toggleSidebar() {
            var sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('open');
        }
    </script>
</head>

<body>

    <div class="sidebar">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="lihat_user.php">Lihat User</a></li>
            <li><a href="layanan_imei.php">Layanan IMEI</a></li>
            <li><a href="daftar_deposit.php">Daftar Deposit</a></li>
        </ul>
        <form action="../action/logout.php" method="post">
            <input type="submit" value="Logout">
        </form>
    </div>

    <div class="content">
        <div class="toggle-btn" onclick="toggleSidebar()">Toggle Sidebar</div>
        <h1>Welcome to the Admin Dashboard <?php echo $_SESSION['username']; ?></h1>
        <p>This is the main content area.</p>
    </div>

    <script>
        // JavaScript code or additional scripts can be placed here.
    </script>
</body>

</html>