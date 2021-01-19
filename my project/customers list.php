<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/eae419465a.js" crossorigin="anonymous"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rowdies:wght@700&display=swap');
    </style>

    <link href="style/customers list.css" rel="stylesheet" type="text/css">
    <title>Customer-List</title>
</head>

<body>

<nav class="navbar  navbar-expand-lg navbar-light bg-light" style="background-color: #edf1f7;">
        <div class="container-fluid">
            <i style=" margin:0px 20px; font-size:40px; color:black;" class="fas fa-university"></i>
            <h1 style="float:left; font-family: 'Rowdies', cursive;">Basic Banking System </h1>
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" >Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Transaction history.php">View Transaction Details</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="About.html">About</a>
                </li>

            </ul>
        </div>
    </nav>

    <div class="bg">

        <div class="container" style="padding-top:30px;">

            <table class="table table-dark table-hover" class="table-responsive" > 
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Balance</th>
                        <th scope="col">view</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
  session_start();

  $conn = mysqli_connect("localhost" , "root", "", "online_banking_system");
$q = "SELECT * FROM customer ";
$result = mysqli_query($conn, $q);
$row = mysqli_num_rows($result);
//echo $row ;
while($res = mysqli_fetch_array($result)){
 
   ?>


                    <tr>
                        <td>
                            <?php  echo $res['id']; ?>
                        </td>
                        <td>
                            <?php  echo $res['Name']; ?>
                        </td>
                        <td>
                            <?php  echo $res['Email']; ?>
                        </td>
                        <td>
                            <?php  echo $res['Balance']; ?>
                        </td>
                        <td>
                            <a href="customer details.php?id=<?php echo $res['id']?>" class="link" id="click"> <i
                                    class="fas fa-eye"></i> </a>
                        </td>

                    </tr>

                    <?php
  }

$conn->close() ;
  ?>


                </tbody>

            </table>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
            crossorigin="anonymous"></script>
    </div>
</div>
</body>

</html>