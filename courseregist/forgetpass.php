<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta http-equiv="refresh" content="3"> -->
    <!-- refresh every 3 second -->
    <!-- comment it while testing -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORGET_PASS</title>
</head>

<body>
    <?php
    include_once "header.php";
    ?>
    <h1>Forget password</h1>
    enter your email<br>
    <form action="include/forget.inc.php" method="post">
        <input type = "email" name="email">
        <br>
        <br>
        <input type="submit" name="forget" value ="Continue">
        <!-- check if email exists in database or not -->
    </form>
    <?php
    if (isset($_GET["error"]))
    echo "Email doesn't exist";
    ?>
    <?php
    include_once "footer.php";
    ?>
</body>

</html>