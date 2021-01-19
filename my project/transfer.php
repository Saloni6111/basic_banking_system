<?php
  session_start();
  
 $conn = mysqli_connect("localhost" , "root", "", "online_banking_system");
  if(!$conn){
    die("there was an error connecting to the database".mysqli_connect_error()) ;
  }
  if(isset($_POST['submit'])){

    $from=$_POST['SenderName'];
    $q="select Balance from customer where Name='$from'";
    $result=mysqli_query($conn,$q);
    $row = mysqli_fetch_assoc($result);
    $var = $row['Balance'];
    

    $to=$_POST['ReciverName'];
    $q1="select Balance from customer where Name='$to'";
    $result1=mysqli_query($conn,$q1);
    $row=mysqli_fetch_assoc($result1);
    $var1=$row['Balance'];
    session_destroy();

    if($from == $to){
      include 'customers list.php';
      $msg = "Reciver And Sender Can Not Be Same" ;
      echo"<script type='text/javascript'>alert('$msg');
      </script>";
    }
    else{
    if ( $var >= $_POST["Balance"] )
    {
        $sub=$var-$_POST["Balance"];
        $q="update customer set Balance='$sub' where name='$from' ";
        $result=mysqli_query($conn,$q);

        $sum=$var1+$_POST["Balance"];
        $q="update customer set Balance='$sum' where name='$to' ";
        $result=mysqli_query($conn,$q);

      $c=$_POST["Balance"];
      $q= "INSERT INTO transaction_history( SenderName, ReciverName, Balance) VALUES ('$from ', '$to' , '$c')";
      $result=mysqli_query($conn,$q);
        include 'customers list.php';
        $msg = "Successfully transfered" ;
       echo"<script type='text/javascript'>alert('$msg');
       </script>";
       
        
    }
    else
    {
      include 'customers list.php';
      $msg = "Insuficient Amount" ;
       echo"<script type='text/javascript'>alert('$msg');
       </script>";
    }

  }

  }







