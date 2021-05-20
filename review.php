<?php
include('includes/config.php');
include('includes/server.php');
include('includes/header.php');
$event_id = $_GET['event_id'];
$event = "";

if ($event_id == 1) {
    $event = "TechHack";
}
if ($event_id == 2) {
    $event = "Tech 1.0";
}
if ($event_id == 3) {
    $event = "CookIt 6.0";
}
if (isset($_POST['login'])) {
    $email = $_SESSION['email'];
    $regno = $_SESSION['regno'];
    if (!empty($email) && !empty($regno)) {
        $_SESSION['logged_in'] = true;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>TechNetics | Reviews</title>
    <meta name="viewport" coantent="width=device-width, initial-scale=1" />
    <script src="scripts/script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style>
        .revmain {
            width: 100%;
            padding: 25px;
            background-color: #fafafa;
            display: block;
            justify-content: space-between;
        }

        .revmain .rev {
            padding: 10px;
            border: 0.5px #ccc;
            margin-bottom: 10px;
            border-radius: 25px;
        }

        .addrev {
            width: 100%;
            padding: 25px;
            padding-top: 5px;
            display: block;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            line-height: 2rem;
        }

        .addrev .rform {
            width: 100%;
        }

        .addrev:hover {
            box-shadow: 0 16px 32px 0 rgba(0, 0, 0, 0.2);
        }

        .addrev .rform textarea {
            width: 100%;
            padding: 10px;
            overflow: auto;
        }

        .addrev .rbtn {
            font-size: 18px;
            font-weight: bold;
            background: #111;
            width: 100px;
            padding: 8px;
            text-align: center;
            text-decoration: none;
            color: #fafafa;
            border: #000;
            border-radius: 20px;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            -webkit-transition-duration: 0.3s;
            transition-duration: 0.3s;
            -webkit-transition-property: box-shadow, transform;
            transition-property: box-shadow, transform;
        }

        .rbtn:hover,
        .rbtn:focus,
        .rbtn:active {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            background: linear-gradient(57deg, #4760e9, #11cdde);
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }

        .cont {
            font-size: 24px;
        }
    </style>
</head>

<body>

    <section>
        <div id="event1">
            <h2><?php echo $event; ?></h2>
            <div class="content">
                <p>Students attended the event have posted some reviews
                    which may be helpful to you.<br>
                    If you have any FAQ you can contact us.
                </p>
            </div>
            <div class="gall">
                <div class="imag">
                    <img src="images/events/event1(1).jpg">
                </div>
                <div class="imag">
                    <img src="images/events/event1(2).jpg">
                </div>
                <div class="imag">
                    <img src="images/events/event1(3).jpg">
                </div>
            </div>
            <hr>
        </div>

    </section>
    <section>
        <div class="revmain">
            <?php
            $sql = "SELECT * FROM reviews WHERE event='$event' or event='reply' ORDER BY id";
            $result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $name = $row['name'];
                    $regno = $row['regno'];
                    $cont = $row['content'];
            ?>
                    <div class="rev">
                        <h3><?php echo $name; ?> || <?php echo $regno ?></h3>
                        <p class=".cont"><?php echo $cont; ?> </p>
                    </div>
            <?php
                }
            } else {
                echo "<h3>No Reviews yet!!</h3>";
            }
            ?>
        </div>
    </section>
    <?php
    if (!empty($_SESSION['logged_in'])) { ?>
        <section>
            <div class="addrev">
                <h2 style="color: black; text-align:left; padding-bottom:10px;">Add Review</h2>
                <form action="" method="POST" class="rform">
                    <textarea name="content" id="rcontent" rows="5" placeholder="Write your review here!!" required></textarea>
                    <input type="submit" value="Submit" name="rsubmit" class="rbtn">
                </form>
                <?php
                if (isset($_POST['rsubmit'])) {
                    $content = trim($_POST['content']);
                    $email = $_SESSION['email'];
                    $regno = $_SESSION['regno'];
                    $sql = "SELECT * from users where email='$email' and register_no='$regno'";
                    $rsql = mysqli_query($con, $sql);
                    if (mysqli_num_rows($rsql) > 0) {
                        $fetch = mysqli_fetch_assoc($rsql);
                        $fetch_name = $fetch['name'];
                        $sql2 = "INSERT INTO reviews(regno,name,email,event,content)
        VALUES ('$regno','$fetch_name','$email','$event','$content')";
                        $data = mysqli_query($con, $sql2);
                        if ($data) {
                            echo "<script type='text/javascript'>alert('Review Submitted!');</script>";
                            echo "<script type='text/javascript'>document.location='review.php?event_id=$event_id';</script>";
                        } else {
                            echo mysqli_errno($con) . ": " . mysqli_error($con) . "\n";
                            echo "<script type='text/javascript'>alert('Error!');</script>";
                            header('Location: reviews.php');
                        }
                    }
                }
                ?>
            </div>
        </section>
    <?php
    }
    ?>
    <?php include("includes/footer.php"); ?>
</body>
</html>