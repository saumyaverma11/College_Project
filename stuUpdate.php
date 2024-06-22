<?php 
$showAlert = false; 
$showError=false;
?>
<h1>Update Record</h1>
<?php
  include 'partials/_dbconnect.php';
  if(isset($_POST['btn1'])){
      $enrollno = $_POST['enrollno'];
      $sql= "SELECT * FROM `student` WHERE enrollno = '$enrollno'; ";
      $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)>0){
          $row = mysqli_fetch_assoc($result);
          $fname= $row['first name'];
          $lname= $row['last name'];
          $email= $row['email'];
          $mobileno= $row['mobileno'];
          $dob= $row['dob'];
          $gender= $row['gender'];
          $address= $row['address'];
          $cid= $row['courseid'];
          $cname= $row['coursename'];
?>
<body>
  <?php
    if($showAlert){        
      echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Record Created.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>';
    }   
  ?>
  <section class="container">
    <header> Student Record Form</header>
    <form method="post" action="/clg_project/stuUpdate.php" class="form">
      <div class="column">
        <div class="input-box">
          <label>First Name</label>
          <input type="text" name="fname" placeholder="Enter fisrt name" required value="<?php echo $fname;?>" />
        </div>
        <div class="input-box">
          <label>Last Name</label>
          <input type="text" name="lname" placeholder="Enter last name" required value="<?php echo $lname;?>"/>
        </div>
      </div>
      <div class="input-box">
        <label>Email Address</label>
        <input type="text" name="email" placeholder="Enter email address" required value="<?php echo $email;?>"/>
      </div>
      <div class="column">
        <div class="input-box">
          <label>Phone Number</label>
          <input type="number" name="mobile" placeholder="Enter phone number" required value="<?php echo $mobileno;?>"/>
        </div>
        <div class="input-box">
          <label>Birth Date</label>
          <input type="date" name="dob" placeholder="Enter birth date" required value="<?php echo $dob;?>"/>
        </div>
      </div>
      <div class="gender-box">
        <h3>Gender</h3>
        <div class="gender-option">
          <div class="gender">
            <input type="radio" id="male" name="gender" value="Male" checked />
            <label for="male">male</label>
          </div>
          <div class="gender">
            <input type="radio" id="female" name="gender" value="Female" />
            <label for="female">Female</label>
          </div>
          <div class="gender">
            <input type="radio" id="other" name="gender" value="Other" />
            <label for="other">prefer not to say</label>
          </div>
        </div>
      </div>
      <div class="input-box address">
        <label>Address</label>
        <input type="text" name="address" placeholder="Enter address" required value="<?php echo $address;?>"/>
      </div>
      <div class="column">
        <div class="input-box">
          <label>Enrollment No.</label>
          <input type="number" name="enrollno" placeholder="Enter enrollment number" required value="<?php echo $enrollno;?>" readonly/>
        </div>
        <div class="input-box">
          <label>Course ID</label>
          <input type="text" name="courseid" placeholder="Enter course id " required value="<?php echo $cid;?>"/>
        </div>
      </div>
      <div class="course-box">
        <h3>Course</h3>
        <div class="course-option">
          <div class="course">
            <input type="radio" id="bca" name="course" value="BCA" checked />
            <label for="bca">BCA</label>
          </div>
          <div class="course">
            <input type="radio" id="pgdca" value="PGDCA" name="course" />
            <label for="pgdca">PGDCA</label>
          </div>
        </div>
      </div>
      <button type="submit" name="btn2">Update</button>
    </form>
  </section>
</body>
</html>
<?php
      }
      else{
        $showError = "Student Record Not Found";
      }            
  }
  if(isset($_POST['btn2'])){         
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $ndob = $_POST["dob"];
    $naddress = $_POST["address"];
    $ngender = $_POST["gender"];
    $enrollno = $_POST["enrollno"];
    $nemail = $_POST["email"];
    $nmobileno = $_POST["mobile"];
    $coursename = $_POST["course"];
    $courseid = $_POST["courseid"];        
    $sql = "UPDATE `student` SET `first name` = '$firstname', `last name` = '$lastname', `dob` = '$ndob', `address` = '$naddress', `gender` = '$ngender', `email` = '$nemail', `mobileno` = '$nmobileno', `coursename` = '$coursename', `courseid` = '$courseid' WHERE `student`.`enrollno` = '$enrollno';";
    $result = mysqli_query($conn, $sql);
    if($result){
      $showAlert=true;
    } 
  }
?>
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
  .form button a{
    text-decoration: none;
    font-size: 1rem;
    color: #fff;
    margin: 10px 255px;
  }
</style>
<section class="container">    
  <form action="/clg_project/stuUpdate.php" method="post" class="form">
    <div class="input-box">
      <label>Enrollment No.</label>
      <input type="number" name="enrollno" placeholder="Enter enrollment number" required />
    </div>
    <div class="column">
      <button type="submit" name="btn1">Submit</button>
      <button><a href="stuRecordMain.php">Back</a></button>
    </div>
  </form>
</section>
<?php
  if($showError){    
    echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Error!</strong> '. $showError.'
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
        </div>';
  }  
?> 
