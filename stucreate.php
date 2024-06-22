<?php
  $showAlert = false;
  $showError = false;

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'partials/_dbconnect.php';
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $enrollno = $_POST["enrollno"];
    $email = $_POST["email"];
    $mobileno = $_POST["mobile"];
    $coursename = $_POST["course"];
    $courseid = $_POST["courseid"];
    $existSql = "SELECT * FROM `student` WHERE enrollno = '$enrollno'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows >0){
        $showError ="Student Already Exists";
    }
    else{
      $sql = "INSERT INTO `student` (`first name`, `last name`, `dob`, `address`, `coursename`, `courseid`, `enrollno`, `mobileno`, `email`, `gender`) VALUES ('$firstname', '$lastname', '$dob', '$address', '$coursename', '$courseid', '$enrollno', '$mobileno', '$email', '$gender');";
      $result = mysqli_query($conn, $sql);
      if($result){
          $showAlert=true;
      } 
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Add New Record</title>
  <link rel="stylesheet" href="stucreate.css" />
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
    if($showError){

      echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '. $showError.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>';
    }   
  ?>
  <section class="container">
    <header> Student Record Form</header>
    <form method="post" action="/clg_project/stucreate.php" class="form">
      <div class="column">
        <div class="input-box">
          <label>First Name</label>
          <input type="text" name="fname" placeholder="Enter fisrt name" required />
        </div>
        <div class="input-box">
          <label>Last Name</label>
          <input type="text" name="lname" placeholder="Enter last name" required />
        </div>
      </div>
      <div class="input-box">
        <label>Email Address</label>
        <input type="text" name="email" placeholder="Enter email address" required />
      </div>
      <div class="column">
        <div class="input-box">
          <label>Phone Number</label>
          <input type="number" name="mobile" placeholder="Enter phone number" required />
        </div>
        <div class="input-box">
          <label>Birth Date</label>
          <input type="date" name="dob" placeholder="Enter birth date" required />
        </div>
      </div>
      <div class="gender-box">
        <h3>Gender</h3>
        <div class="gender-option">
          <div class="gender">
            <input type="radio" id="male" name="gender" value="Male" />
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
        <input type="text" name="address" placeholder="Enter address" required />
      </div>
      <div class="column">
        <div class="input-box">
          <label>Enrollment No.</label>
          <input type="number" name="enrollno" placeholder="Enter enrollment number" required />
        </div>
        <div class="input-box">
          <label>Course ID</label>
          <input type="text" name="courseid" placeholder="Enter course id " required />
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
      </div>
      <div class="column">
        <button type="submit">Submit</button>
        <button><a href="stuRecordMain.php">Back</a></button>
      </div>
    </form>
  </section>
</body>
</html>
