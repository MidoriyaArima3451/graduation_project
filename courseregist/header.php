<?php
session_start();
?>
<html dir="rtl" >
<body>
        <ul>
                <?php
                if (isset($_SESSION["userName"])) {
                        echo "<li>" . $_SESSION['userName'] . "</li>";
                        // un done 
                        // echo "<li><a href='profile.php'>Profile</a></li>";
                        echo " <li><a href='dashboard.php'>Dashboard</a></li>";
                        echo "<li><a href='include/logout.inc.php'>Log Out</a></li>";
                        //TODO: courses
                        // echo "<li><a href='courses.php'>Courses</a></li>";
                } else {
                        //btro7 3la saf7at el sign up
                        // echo "<li><a href='signup.php'>Sign up</a></li>";
                        //btro7 3la saf7at el login

                        // echo "<li><a href='login.php'>Log in</a> <br> </li>";
                }
                // echo "<li><a href='index.php'>Home</a> <br> </li>";
                
                ?>
                <!--
        لو عايزين تضيفوا 
        about 
        ونبقا نملاها بعدين ماشي
        لو مش عايزين فاكس
        -->
        </ul>

</body>