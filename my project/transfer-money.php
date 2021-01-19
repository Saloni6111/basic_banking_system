<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transfer Money</title>
  <link href="style/transfer-money.css" rel="stylesheet" type="text/css">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <style>
        @import url('https://fonts.googleapis.com/css2?family=Rowdies:wght@700&display=swap');
    </style>
</head>

<body>
  <!--<img src="images/money.jpg" class="image">-->
  <div class="box">
    <form action="transfer.php" method="post">
      <fieldset>
        <legend><big>Transfer Money</big></legend>
        Sender's name :
        
        <select name="SenderName" value="SenderName">
           <option >Saloni</option>
           <option >Anjali</option>
           <option >Shalini</option>
           <option >Indra</option>
           <option >Dev</option>
           <option >Vikas</option>
           <option >Bittu</option>
           <option >Rishi</option>
           <option >Lado</option>
           <option >Preeti</option>
         </select>
        Reciver's name :
        
        <select name="ReciverName" value="ReciverName">
            <option >Saloni</option>
            <option >Anjali</option>
            <option >Shalini</option>
            <option >Indra</option>
            <option >Dev</option>
            <option >Vikas</option>
            <option >Bittu</option>
            <option >Rishi</option>
            <option >Lado</option>
            <option >Preeti</option>
          </select>
        Enter Amount :
        <input type="number" name="Balance" value="Balance" placeholder="-Enter Amount-">

        <input type="submit" name="submit" value="submit">
      </fieldset>
    </form>
  </div>
</body>

</html>