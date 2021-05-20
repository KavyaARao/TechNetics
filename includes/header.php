<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <header class="site-header">
        <div style="background-color: #fafafa; width: 100%; height: 20px"></div>
        <nav>
            <div class="logo">
                <h1>
                    <span style="font-size: 35px">T</span>ech<span style="font-size: 35px">N</span>etics
                </h1>
            </div>
            <div class="menu">
                <ul>
                    <?php
                    if (!empty($_SESSION['logged_in'])) { ?>
                        <a href="../Technetics-full/index2.php">
                            <li>Home</li>
                        </a>
                    <?php } else { ?>
                        <a href="../Technetics-full/index.php">
                            <li>Home</li>
                        </a>
                    <?php }
                    ?>
                    <a href="#events">
                        <li>Events</li>
                    </a>
                    <a href="#project">
                        <li>Projects</li>
                    </a>
                    <a href="#sponsors">
                        <li>Sponsors</li>
                    </a>
                    <a href="team.php">
                        <li>Team</li>
                    </a>
                    <?php
                    if (!empty($_SESSION['logged_in'])) { ?>
                        <a href="../Technetics-full/launchquiz.php">
                        <li>Quiz</li>
                        </a>
                        <a href="includes/logout.php" onclick="return confirm('Are you sure you want to logout')">
                            <li>Logout</li>
                        </a>

                    <?php } else { ?>
                        <a href="login.php">
                            <li>Login</li>
                        </a>
                        <a href="../Technetics-full/admin/adminlogin.php">
                        <li>Admin Login</li>
                    </a>
                    <?php }
                    ?>
                </ul>
            </div>
        </nav>
    </header>
</body>

</html>