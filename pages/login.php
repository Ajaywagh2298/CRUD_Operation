<!DOCTYPE html>
<html xmlns:th="http://www.thymeleaf.org">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
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

<div class="main row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <div class="login-box card shadow">
            <form class="form-signin" action="../Controller/login_controller.php" method="post">
                <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>
                <div class="divider"></div>
                <div class="card-body">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" name="email" id="inputEmail" class="login-text form-control" placeholder="Email address"
                           required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name="mobile" class="login-text form-control" placeholder="mobile number"
                           required>
                    <button class="icon btn btn-primary" type="submit" name="submit"><i class="fad fa-sign-in-alt"></i>&nbsp; Sign in
                    </button>
                    <div class="divider"></div>
                </div>
            </form>
            <p class="mt-2 text-muted" style="font-size: 15px;font-weight: bold;"> New User ? </p>
            <div class="d-inline">
                <button class="icon btn btn-light" style="background-color: #E74C3C;color: white;"><i
                        class="fab fa-google-plus-g"></i>&nbsp; GOOGLE
                </button>&nbsp;&nbsp;
                <a href="register.php"> <button class="icon btn btn-light" style="background-color: #16A085;color: white;"><i
                            class="fas fa-user-plus"></i>&nbsp; Sign Up
                    </button></a>
            </div>
        </div>
    </div>
    <div class="col-sm-4"></div>
</div>
</body>
</html>
