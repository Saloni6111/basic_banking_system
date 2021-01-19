<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rowdies:wght@700&display=swap');
    </style>
    <script src="https://kit.fontawesome.com/eae419465a.js" crossorigin="anonymous"></script>

    <link href="style/customer details.css" rel="stylesheet" type="text/css">
    <title>Customer Details</title>
    
</head>

<body>
    <div class="bg">


        <?php 

                session_start();
              
                $conn = mysqli_connect("localhost" , "root", "", "online_banking_system");
                if(isset($_GET['id'])){
                    $id = mysqli_real_escape_string($conn , $_GET['id']);

                    $sql = "SELECT * FROM customer WHERE id= $id";

                    $result = mysqli_query($conn ,$sql) ;

                    $res = mysqli_fetch_assoc($result) ;
                }
            ?>

        <ul class="list">
            <li class="list-content"><i class="fas fa-user"></i></li>
            <h2> Welcome
                <?php  echo $res['Name']; ?>
            </h2>
            <li class="list-content">Customer Id -
                <?php  echo $res['id']; ?>
            </li>
            <li class="list-content">Your Current Balance is - $
                <?php  echo $res['Balance']; ?>
            </li>
            <li class="list-content">Email :
                <?php  echo $res['Email']; ?>
            </li>

        </ul><br>
        <?php
       $conn->close() ;
    ?>
        </tbody>

    </div>

    <div class="button">
        <center><a href="transfer-money.php"><button class="click">Transfer Money</button></a></center>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>

</html>