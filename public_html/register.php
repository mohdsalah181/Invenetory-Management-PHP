<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management - Register</title>

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
    <br><br>
    <div class="container">
        <div class="card mx-auto" style="width: 30rem;">
            <div class="card-header"><h5>Register</h5></div>
            <div class="card-body">
                <form id="register_form">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone elese</small>
                    </div>
                    <div class="form-group">
                        <label for="Password1">Password</label>
                        <input type="password" class="form-control" id="Password1" name="Password2" placeholder="Enter password">
                    </div>
                    <div class="form-group">
                        <label for="Password2">Confirm the password</label>
                        <input type="password" class="form-control" id="Password2" name="Password2" placeholder="Confirm the password">
                    </div>
                    <div class="form-group">
                    <label for="usertype">Usertype</label>
                    <select name="usertype" id="usertype" class="form-control">
                        <option value="1">Admin</option>
                        <option value="0">Other</option>
                    </select>
                    </div>

                    <button type="submit" class="btn btn-primary"><i class="fa fa-user">&nbsp;</i>Register</button>
                    <span><a href="index.php">Login</a></span>
                </form>
            </div>
            <div class="card-footer">
        
            </div>
        </div>

    </div>
    <br>


</body>

</html>