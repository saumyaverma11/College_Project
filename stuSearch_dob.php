<?php 

$showAlert = false; 
$showError=false;
?>
<h1>Search Record</h1>
<?php require 'partials/_navsearch_dob.php'?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Registration Form in HTML CSS</title>
    <link rel="stylesheet" href="stuUpdate.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  </head>
  <style>
    h1{
        text-align: center;
        margin: 30px 0;
        font-size: 5em;
    }
    .content-table{
        border-collapse: collapse;
        margin: 25px 0;
        width: 100%;
        font-size: 1em;
        border-radius: 10px 10px 0 0;
        overflow: hidden;
        box-shadow: 0 0 20px #00000042;
    }
    .content-table thead tr{
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(38,51,97,1) 0%, rgba(65,143,222,1) 79% );
        color: #fff;
        text-align: left;
        font-weight: bold;
    }
    .content-table th,
    .content-table td{
        padding: 12px 15px;
    }
    .content-table tbody tr{
        border-bottom: 1px solid #dddddd;
        background-color: #fff;
    }
    tbody:nth-child(odd){
        background-color: #f3f3f3;
    }
    tbody:last-child{
        border-bottom: 2px solid rgba(38,51,97,1);
    }
</style>
<section class="container">

    <form action="/clg_project/stuSearch_dob.php" method="post" class="form">
        <div class="input-box">
            <label>Birth Date</label>
            <input type="date" name="dob" placeholder="Enter birth date" required />
        </div>
        <button type="submit" name="btn1">Submit</button>
        
      </form>
    </section>
<?php
            include 'partials/_dbconnect.php';
        if(isset($_POST['btn1'])){
            $dob = $_POST['dob'];
            $sql= "SELECT * FROM `student` WHERE dob = '$dob'; ";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                ?>
                <h2>STUDENT RECORD LIST</h2>
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Sr. No.</th>
                            <th>Name</th>
                            <th>Date of Birth</th>
                            <th>Gender</th>
                            <th>Enrollment No.</th>
                            <th>Mobile No.</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Course Id</th>
                            <th>Course</th>
                            <th>Student ID</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                <?php
                while($row=mysqli_fetch_assoc($result))
                {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['sno']?></td>
                        <td><?php echo $row['first name']," ", $row['last name']?></td>
                        <td><?php echo $row['dob']?></td>
                        <td><?php echo $row['gender']?></td>
                        <td><?php echo $row['enrollno']?></td>
                        <td><?php echo $row['mobileno']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['address']?></td>
                        <td><?php echo $row['courseid']?></td>
                        <td><?php echo $row['coursename']?></td>
                        <td><?php echo $row['student id']?></td>
                        <td><?php echo $row['password']?></td>
                    </tr>
                </tbody>
                <?php
                }
            }
            else{
              $showError = "Student Record Not Found";
            }
    
        }


?>
    <?php
    if($showError){
    
           echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>Error!</strong> '. $showError.'
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
           </button>
           </div>';
       }  
    ?> 
