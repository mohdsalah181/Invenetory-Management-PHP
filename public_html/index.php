<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>

    <script src="./res/jquery/jquery.min.js"></script>
    <script src="./res/popper/popper.min.js"></script>
    <script src="./res/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./res/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="./res/bootstrap/css/bootstrap.min.css">

    <script src="./js/main.js"></script>

</head>

<body>

    <!-- Navbar -->
    <?php include_once("./templates/header.php"); ?>

    <div class="container">

        <div class="card mx-auto" style="width: 25rem; margin-top: 5rem;">
            <div class="card-header">
                <h5>Login</h5>
            </div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-lock">&nbsp;</i>Login</button>
                    <span><a href="register.php">Register</a></span>
                </form>
            </div>
            <div class="card-footer">
                <a href="">forget password?</a>
            </div>
        </div>

    </div>



</body>

</html>
