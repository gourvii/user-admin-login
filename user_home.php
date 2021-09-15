<?php 
session_start();
if(isset($_SESSION['ID']) && isset($_SESSION['USERNAME'])) {
   ?>
    <?php include "header.php"; ?>
    <title>HOME</title>

    </head>
    <body style="text-align:center;">
        <h3>Hello, <?php echo $_SESSION["NAME"];?> </h3>
        <h4><a href="user_logout.php">Logout</a></h4>

        <?php include "footer.php"; ?>
    </body>
    </html>
    <?php
}
else {
    header("Location: index.php");
    exit();
}
?>