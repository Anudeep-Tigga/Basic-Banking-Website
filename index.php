<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homepage.css">
    <title>Banking Website</title>
   <?php
   include  'facvicon.php';
   ?>

</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<body>

<div class="jumbotron " style="background-color: #fff;color:#177584;text-align:center;">
            <h6 class="display-4 font-weight-bold ">WELCOME TO A.T BANK</h6>






        <!-- cards  -->
        <div class="jumbotron jumbotron-fluid bg-light">
            <div class="container">

                <div class="row">
                    <div class="col-sm-6">
                        <div class="card bg-info">
                            <div class="card-body text-white">
                                <h5 class="card-title">TRANSFER</h5>
                                <p class="card-text">The simple way to send or receive money with anyone</p>
                                <a href="transfer.php" class=" btn  btn-light ">Proceed </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card  bg-success  ">
                            <div class="card-body text-white ">
                                <h5 class="card-title ">TRANSACTIONS HISTORY</h5>
                                <p class="card-text">Manage all of your transactions at one place. </p>
                                <a href="dashboard.php" class="btn btn-light">View </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- footer -->
        <?php
        include 'footer.php';
        ?>
        <!-- footer end  -->





        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>



</body>

</html>