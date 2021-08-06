<?php
//session_start();

if(!isset$_COOKIE["loggeduser"])
    {
        header("Location: login.php");
    }
?>
<html>
    <body>
        <h1 align="center">Welcome<?php echo $_COOKIE["loggeduser"]; ?></h1>

    </body>
</html>