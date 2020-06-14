<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Form and MySql</title>
</head>

<body>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $des = $_POST['des'];


        // Connecting to database
        $severname = "localhost";
        $username = "root";
        $password = "";
        $databse = "contacts";   //name of databse which you want to use 

        // Create Connection
        $con = mysqli_connect($severname, $username, $password, $databse);

        // Die if connection was not sucessfull
        if (!$con) {
            die("Sorry we failed to connect : " . mysqli_connect_error());
        } else {
            // Query to insert record into table

            $sql = "INSERT INTO `contactus` (`Name`, `Email`, `Concern`, `Date`) VALUES ('$name', '$email', '$des', current_timestamp())";
            $reult = mysqli_query($con, $sql);

            // Check for record insertion is done or fail
            if ($reult) {
                echo '<div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Sucess!</strong> Your entry has been submitted sucessfully!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button></div>';
            } else {
                //echo "Record is not inserted sucessfully." . "<br>ERROR---->" . mysqli_error($con);
                //echo "<br>";
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">×</span>
                                </button>
                              </div>';
            }
        }
    }
    ?>

    <div class="container mt-3">
        <h2>Contact Us For Your Concern</h2>
        <form action="/PROGRAMS/027_MysqlAndForm.php" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>

            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label for="des">Description</label>
                <textarea type="textarea" cols="30" rows="5" class="form-control" id="des" name="des"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>