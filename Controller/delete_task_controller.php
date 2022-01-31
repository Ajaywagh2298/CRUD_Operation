<?php
include "../Database/DBConnect.php" ;
$id=$_GET["id"];
$true =mysqli_query($con,"delete from task_t where id=$id");

if($true){
    ?>
<script type="text/javascript">
    alert( "Task Delete successfully!" );
</script>

 <?php
}
?>
<script type="text/javascript">
    window.location="../pages/dashboard.php";
</script>
