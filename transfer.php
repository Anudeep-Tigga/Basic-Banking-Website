<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/transfer.css">
    <title>Banking Website</title>
    <?php
        include  'facvicon.php';
    ?>

</head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body>
    <?php
    // middle ware files
    include 'navbar.php';
    require "config/config.php";

    require "sql/transferget.php";
    ?>
    <!-- Form-->
    <div class="form">
        <div class="form-toggle"></div>
        <div class="form-panel one">
            <div class="form-header">
                <h1>Transfer Money</h1>
                <h4 class="h4-heading">Recieve and Transfer money with a single-click.</h4>
            </div>
            <div class="form-content">
                <form action="transfer2.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <select required class="upi" name="upi">
                            <option> @UPI</option>

                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                $upid = $row['upi'];
                            ?>
                                <!-- fetch record from db -->
                                <option value="<?php echo $upid ?>"> <?php echo  $upid ?> </option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group">

                        <label for="amount">Amount</label>
                        <input id="amount" type="text" name="amount" required="required" />
                    </div>

                    <div class="form-group">
                        <button type="submit" >Transfer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
    include 'footer.php';
    ?>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //upis -- selected upi
        $upis = $_POST['upi'];

        $amounts = $_POST['amount'];

        $sql= "SELECT balance FROM contact WHERE upi=$upis";
        $query=mysqli_query($conn,$sql);
        $sql1=mysqli_fetch_array($query);
        // take the input and save to db
        if($amounts <= $sql1['balance'])
        {
        $sql = "INSERT INTO `transaction` (`id`, `upi`, `amount`) VALUES ('NULL', '$upis', '$amounts');";
        $newbalance = $sql1['balance'] - $amounts;
        $sql = "UPDATE contact set balance = $newbalance where upi=$upis";
        mysqli_query($conn, $sql);
        $result = mysqli_query($conn, $sql);
        if ($result){
            echo "<script type='text/javascript'>";
            echo "alert('Transaction Done')";
            echo "</script>";
            echo "<script> location.href='dashboard.php'; </script>";
        }
        } else {
            echo "<script type='text/javascript'>";
            echo "alert('Insufficient Balance')";
            echo "</script>";
        }
    }
    ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>