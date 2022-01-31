<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Task</title>
    <link rel="stylesheet" href="../css/task.css">
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
<div class="main row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="login-box card shadow">
            <form class="form-signin" action="../Controller/add_task_controller.php" method="post">
                <h1 class="h3 mb-3 font-weight-normal">ADD NEW TASK</h1>
                <div class="divider"></div>
                <div class="card-body text-left">
                    <label for="inputFirstName">Name</label>
                    <input type="text" id="inputFirstName" name="name" class="login-text form-control" required autofocus>

                    <label for="inputEmail" >Start Date</label>
                    <input type="date" id="inputEmail" name="s_date" class="login-text form-control" placeholder="Email address"
                           required autofocus>

                    <label for="inputEmail" >End Date</label>
                    <input type="date" id="inputEmail" name="e_date" class="login-text form-control" placeholder="Email address"
                           required autofocus>

                    <label for="inputMobile">Details of Task</label>
                    <textarea id="inputMobile" name="details" class="login-text form-control"> </textarea>

                    <label for="inputFirstName">URL of File</label>
                    <input type="text" id="inputFirstName" name="url" class="login-text form-control" required autofocus>

                    <input type="hidden" id="inputFirstName" name="status" class="login-text form-control" value="Incomplete" required autofocus>

                    <button class="icon btn btn-light"  name="submit" type="submit" style="background-color: #16A085;color: white;"><i class="fad fa-plus"></i> &nbsp; ADD TASK</button>
                    <div class="divider"></div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="col-sm-4"></div>
</div>
</body>
</html>
