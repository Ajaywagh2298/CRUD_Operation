<?php
include "../Database/DBConnect.php" ;
if ( isset( $_POST[ "submit" ] ) ) {
    mysqli_query($con, "INSERT INTO `admin` VALUES (NULL ,'$_POST[name]','$_POST[email]','$_POST[mobile]')") or die(mysqli_error($conn));

    ?>

    <script type="text/javascript">
        alert( "Registered successfully!" );
        window.location = "../pages/login.php";
    </script>

    <?php
}else{
    ?>
    <script type="text/javascript">
        alert( "Data are NULL!" );
        window.location = "../pages/register.php";
    </script>
    <?php
}
?>
