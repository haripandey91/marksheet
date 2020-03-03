<!DOCTYPE html>
<html>
<title>Homapage</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link type="text/css" rel="stylesheet" href="style.css">   
<body>
<?php include 'connection.php';?>
<div class="img-container">
    <img src="academy_logo.png" width="300" height="300" >
</div> 
<div class=" form_div">
<form method="post" action="#">
    First name: <input type="text" name="fname"><br>
    Last name: <input type="text" name="lname"><br>
    <input type="submit">
</form>
</div>

  <?php
    if ($_SERVER["REQUEST_METHOD"]== "POST"){
        $firstname = $_POST['fname'];
        $lastname  = $_POST['lname'];
        if(empty($firstname) || empty($lastname)){
            echo "Please enter name and lastname";
        }else{
            echo  "Hi there! " .$firstname ." " . $lastname;
        }
    }
        
    ?>
<?php 
    $data = "Select * from users";
    $result = $conn->query($data);
    if($result->num_rows > 0){
        echo "<table><tr><th>Firstname</th><th>Lastname</th></tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr><td>".$row['firstname']."</td><td>".$row['lastname']."</td></tr>";
        }
    }
    
    
    ?>
</body>
</html>