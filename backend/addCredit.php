<?php 
    include("../includes/database.php");
?>
<html>
    <head>
    <title>Credit-Debit</title>
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css"/>
        <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">-->
    </head>
<body>
<?php

?>
<?php
     if(isset($_POST["add-debit"]))
     {
        $transaction=mysqli_query($con,"insert into transaction_master (customer_id,transaction_date,credit) values ('".$_POST["id"]."',CURDATE(),'".$_POST["credit_amt"]."')");
        //echo $transaction."";
        echo '<script language="javascript">';
        echo 'alert("credit updated successfully");';
        echo '</script>';
        //header("location:test.php");
     }
?>
        <form method="post" action="../index.php">
            <br>
            <button style="width:150px; height:60px;" type="submit" id="cancel" name="cancel" class="btn btn-danger">Go To Home</button>   
        </form>    
</body>
</html>