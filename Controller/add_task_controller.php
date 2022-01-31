<?php
include "../Database/DBConnect.php" ;
if ( isset( $_POST[ "submit" ] ) ) {
    mysqli_query($con, "INSERT INTO task_t VALUES (NULL ,'$_POST[name]','$_POST[s_date]','$_POST[e_date]','$_POST[details]','$_POST[url]','$_POST[status]')") or die(mysqli_error($conn));

    ?>

    <script type="text/javascript">
        alert( "Task Add successfully!" );
        window.location = "../pages/dashboard.php";
    </script>

    <?php
}else{
    ?>
    <script type="text/javascript">
        alert( "Data are NULL!" );
        window.location = "../pages/add_task.php";
    </script>
    <?php
}
?>

