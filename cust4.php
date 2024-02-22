<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Fetch data</title>
    <style>
        
    * { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }
     body{
        width: 100%;
  height:100%;
  font-family: 'Open Sans', sans-serif;
  background: #092756;
  background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
  background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
  background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
  background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
  background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
    }   
    </style>   
</head>
<body class ="bg-dark">
    <div class = "container">
    <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class = "row mt-5">
            <div class = "col">
                <div class ="card mt-5">
                    <div class ="class-header">
                        <h2 class= "display-6 text-center">Your Information</h2>
                    </div>
                    <?php
                    $con = mysqli_connect("localhost","root","","bankinfo");
                    $query = "SELECT * from bank WHERE Cust_ID='4'";
                    $query_run = mysqli_query($con,$query);

                    ?>
                    <div class = "card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <td>First name</td>
                                <td>Last name</td>
                                <td>Customer Id</td>
                                <td>Account type</td>
                                <td>Email </td>
                                <td>Phone number</td>
                                <td>Account number </td>
                                <td>Account balance</td>
                                <td>Update</td>
                            </tr>
                            <tbody>
                                <?php
                                if(mysqli_num_rows($query_run)>0){
                                    while($row= mysqli_fetch_array($query_run)){
                                        ?>
                                    
                                
                            <tr>
                                <td><?php echo $row['Fname'];?></td>
                                <td><?php echo $row['Lname'];?></td>
                                <td><?php echo $row['Cust_ID'];?></td>
                                <td><?php echo $row['AccType'];?></td>
                                <td><?php echo $row['Email'];?></td>
                                <td><?php echo $row['PhoneNo'];?></td>
                                <td><?php echo $row['AccNo'];?></td>
                                <td><?php echo $row['AccBal'];?></td>
                                <td><a href="update4.php" target="_blank" class="btn btn-primary">Update Details</a></td>

                            
                            </tr>
                            <?php
                                    }
                                }
                            ?>
                        </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>