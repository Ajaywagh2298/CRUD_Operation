<?php include "../Database/DBConnect.php" ;

if(isset($_POST["submit"])){
    $count=0;
    $res= mysqli_query($con,"select * from admin where email='$_POST[email]' && mobile='$_POST[mobile]'");
    $count=mysqli_num_rows($res);

    if($count==0)
    {
        ?>
        <script type="text/javascript">
            alert( "Invalid EMAIL AND PASSWORD !" );
            window.location.href="../pages/login.php";
        </script>
        <?php
    }
    else
    {
        $_SESSION['id'] = $_POST['id'];
        ?>
        <script type="text/javascript">
            window.location.href="../pages/dashboard.php";
        </script>
        <?php
    }
}
?>
