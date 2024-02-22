<?php
include "postal.php";

if(isset($_POST['submit'])){
    $Fname=$_POST['Fname'];
    $Lname=$_POST['Lname'];
    $Email=$_POST['Email'];
    $PhoneNo=$_POST['PhoneNo'];
    $AccBal=$_POST['AccBal'];

    $sql = "UPDATE bank SET `Fname`='$Fname',`Lname`='$Lname',`PhoneNo`='$PhoneNo',`Email`='$Email',`AccBal`='$AccBal' WHERE  Cust_ID= '4'";

    $result = mysqli_query($con,$sql);

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
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

        p{
            color:black;
        }
        </style> 
</head>
<body>
    
    <nav class = "navbar navbar-light justify-content-center fs-3 mb-5"style="color:black;">
        Information Update
    </nav>

    <div class = "container" style="color:black;">
        <div class ="text-center mb-4">
            <h3>Edit user information</h3>
            <p class ="text-muted"> click update after chaging the info</p>
        </div>
        <?php
        
        $sql="SELECT * from bank WHERE Cust_ID = '4'";
        $result=mysqli_query($con,$sql);
        $row=mysqli_fetch_assoc($result);
        ?>

        <div class = "container d-flex justify-content-center">
            <form action ="" method ="post" style="width:50vw; min-width:300px;">
                <div class= "row mb-3">
                    <div class = "col">
                        <label class ="form-label">First name:</label>
                        <input type ="text" class = "form-control" name="Fname" value="<?php echo $row['Fname']?>">
                    </div>

                    <div class = "col">
                        <label class ="form-label">Last name:</label>
                        <input type ="text" class = "form-control" name="Lname" value="<?php echo $row['Lname']?>">
                    </div>
                </div>
                
                <div class ="mb-3">
                    <label class ="form-label">Email</label>
                    <input type = "email" class="form-control" name="Email" value="<?php echo $row['Email']?>">
                </div>

                <div class ="mb-3">
                    <label class ="form-label">Phone Number</label>
                    <input type = "text" class="form-control" name="PhoneNo" value="<?php echo $row['PhoneNo']?>">
                </div>

                <div class ="mb-3">
                    <label class ="form-label">Account Balance</label>
                    <input type = "text" class="form-control" name="AccBal" value="<?php echo $row['AccBal']?>">
                </div>

                <div>
                    <button type="submit" class ="btn btn-success" name="submit">Update</button>
                    <a href ="cust4.php" class="btn btn-danger">Cancel</a>
                </div>
                
            </form>
        </div>  
    </div>        

                
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
</body>
</html