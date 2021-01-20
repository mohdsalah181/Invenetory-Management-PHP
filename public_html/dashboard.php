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
    <br>
    <br>

    <div class="container">
        <div class="row mx-auto" style="width:100%;">
            <div class="col-md-4">
                <div class="card mx-auto" style="height: 90%;">
                    <div class="card-header">
                        <h4>User Info</h4>
                    </div>
                    <div class="card-body">
                        <br>
                        <h5 class="card-title">Profile</h5>
                        <p class="card-text"><i class="fa fa-user">&nbsp;</i>Mohamed Salah</p>
                        <p class="card-text"><i class="fa fa-key">&nbsp;</i>Admin</p>
                        <p class="card-text">Last Login: xxxx-xx-xx</p>
                        <p class="card-text"></p>
                        <a href="#" class="btn btn-primary"><i class="fa fa-edit">&nbsp;</i>Edit Profile</a>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="jumbotron" style="height: 90%;">
                    <h2>Welcome Admin,</h2>
                    <div class="row">
                        <div class="col-sm-6">
                            <iframe
                                src="http://free.timeanddate.com/clock/i7mvmyud/n118/szw160/szh160/hoc09f/hbw0/hfc09f/cf100/hnce1ead6/fas30/fdi66/mqc000/mql15/mqw4/mqd98/mhc000/mhl15/mhw4/mhd98/mmc000/mml10/mmw1/mmd98/hhs2/hms2/hsv0"
                                frameborder="0" width="160" height="160"></iframe>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">New Orders</h5>
                                    <p class="card-text">Here you can make invoices and create new orders</p>
                                    <a href="#" class="btn btn-primary">New Orders</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Categoires</h5>
                            <p class="card-text">Here you can manage your categories and add new parent and categories</p>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form_categories">Add</a>
                            <a href="#" class="btn btn-success">Manage</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Brands</h5>
                            <p class="card-text">Here you can manage your brands and add new brands</p>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form_brands">Add</a>
                            <a href="#" class="btn btn-success">Manage</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Products</h5>
                            <p class="card-text">Here you can manage your products and add new products</p>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form_products">Add</a>
                            <a href="#" class="btn btn-success">Manage</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>


      <!-- to open the modals -->
      <?php 
        include_once("./templates/categories.php");
      ?>
      <?php 
        include_once("./templates/brands.php");
      ?>
      <?php 
        include_once("./templates/products.php");
      ?>

</body>

</html>