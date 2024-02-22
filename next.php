<?php

require_once('postal.php');
$query = "select * from bank";
$result = mysqli_query($con,$query);

?>

<!DOCTYPE html>   
<html>   
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">  
<title> BANK LOGIN PORTAL </title>  
</head>    
<body bgcolor="grey">    
    <center> <h1> HDFC WANK CUSTOMER IDZ </h1> </center>   
    <form>  
        <div class="container">   
            <label>Customer ID : </label>   
            <input type="text" placeholder="Customer ID" name="Cust_ID">    
            <button type="submit">Login</button>

            <?php
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <?php echo $row['Cust_ID'];?>
                    <?php
                }
            ?>
        </div>   
    </form>     
</body>     
</html>  