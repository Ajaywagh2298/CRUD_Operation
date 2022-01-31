<?php
include "../Database/DBConnect.php" ;
 //session_start();
//$num = $_SESSION['id'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css"
          integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css"
          integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
            integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</head>

<body class="text-center">
<nav class="head navbar navbar-light">
    <div class="title d-inline">
        <i class="logo fas fa-user-graduate"></i>&nbsp;&nbsp;STUDENT TASK
    </div>

    <div class="login form-inline">
        <a href="../Controller/logout_controller.php"> <button class="btn btn-light btn-block" type="submit"><i style="color: #F5B041" class="fas fa-sign-out-alt"></i> Logout</button></a>
    </div>
</nav>
<br>
<div class="table-box">
    <div class="login form-inline row">
        <div class="col-2">
        <a href="./add_task.php"> <button class="btn btn-success" type="submit"><i class="fas fa-plus-circle"></i> Add</button></a>
        </div>
        <div class="col-2"></div>
        <div class="col-2"></div>
        <div class="col-4">
                <form action="">
                    <div class="input-group mb-4">
                        <input type="search" placeholder="Search here..." aria-describedby="button-addon5" class="form-control"> &nbsp;
                            <button id="button-addon5" type="submit" class="btn btn-primary"> <i class="fa fa-search"> </i> </button>

                    </div>
                </form>
        </div>
    </div>
<table class="test box table table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Start Date</th>
        <th scope="col">End Date</th>
        <th scope="col">Details</th>
        <th scope="col">URL</th>
        <th scope="col">Status</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $res=mysqli_query($con,"select * from task_t");
    $rows = mysqli_fetch_all($res,MYSQLI_ASSOC);
    $count=0;
    function getProperColor($status)
    {
        if ($status == 'Complete' || $status == 'complete' )
            return '#22A276';
        else if($status == 'Incomplete' || $status == 'incomplete')
            return  '#FF1F00';
        else
            return ' #212F3C';
}
    foreach($rows as $row ){
        $count=$count+1;
        ?>
    <tr>
        <th scope="row"><?php echo $count; ?></th>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['start_date']; ?></td>
        <td><?php echo $row['end_date']; ?></td>
        <td><?php echo $row['details']; ?></td>
        <td ><a style="color: #F5B041;" href="<?php echo $row['url']; ?>"><i class="fas fa-link"></i></a></td>
        <td><p style="font-weight:bolder;color: <?=getProperColor($row['status'])?>;"><?php echo $row['status']; ?></p></td>
        <td><a href="edit_task.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-primary">Update</button></a> </td>
        <td><a href="../Controller/delete_task_controller.php?id=<?php echo $row["id"]; ?>"><button class="btn btn-danger">Delete</button></a></td>
    </tr>
    <?php }
    ?>
    </tbody>

</table>
</div>

</body>
</html>

