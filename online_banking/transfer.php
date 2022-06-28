<?php 
session_start();
include "./functions.php";
?>
<style>
    input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}   
</style>
<!-- <a href="./profile.php">Back to Home</a> -->
<!-- <form method="post">
    <label for="from">From: </label>
    <input id="from" type="text" value="<?php echo $_SESSION['acc_no']?>" name="from_ac" disabled>
    <label for="to">To Ac/No: </label>
    <input id="to" type="number" name="to_ac" required>
    <label for="amnt">Amount: </label>
    <input id="amnt" type="number" name="amnt">
    <input type="submit" name="transfer_amnt" required>
</form> -->
<html lang="en">
<head>
    <link rel="stylesheet" href="transfer.css">
    <title>Transfer</title>
</head>
<body>
    <div class="marquee">
    <marquee direction="right"><h2>TRANSACTIONS PAGE</h2></marquee>
    
</div>
<a href="./profile.php"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
  </svg></a>

    

<div class="box">

<form method="post">
    <div class="info">
    
    <label for="from">From: </label>
    <input id="from" type="text" value="xxxxxxxxxxxxxx" disabled><br> <br>
    <div class="acc">
    
    <label for="to">To Account No: </label>
    <input id="to" type="number" name="to_ac" required><br> <br>
    
    <label for="amnt">Amount: </label>
    <input id="amnt" type="number" name="amnt"><br> <br>
</div>
</div>
    

    <div class="submit" align="center">
         <input type="submit"  name="transfer_amnt" required><br> <br>
    </div>
</div>
    
</form>
</body>
</html>