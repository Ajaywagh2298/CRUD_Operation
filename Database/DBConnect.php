<?php
$con = mysqli_connect("localhost","root","","sample");

// Check connection
if (mysqli_connect_errno()) {
    ?>
    <script type="text/javascript">console.log("Database Server Not Connected Successfully :<?echo mysqli_connect_error(); ?> ");</script>
    <?php
}else{
    ?>
    <script type="text/javascript">console.log("Database Server  Connected Successfully ");</script>
    <?php
}
?>
