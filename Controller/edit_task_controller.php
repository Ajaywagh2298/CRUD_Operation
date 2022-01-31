<?php include "../Database/DBConnect.php" ;
if ( isset( $_POST[ "submit" ] ) ) {
    mysqli_query($con, "update task_t set end_date='$_POST[e_date]',details='$_POST[details]',url='$_POST[url]',status='$_POST[status]' where id='$_POST[id]'") or die(mysqli_error($con));

    ?>

    <script type="text/javascript">
        alert( "Task Edit successfully!" );
        window.location = "../pages/dashboard.php";
    </script>

    <?php
}
?>
