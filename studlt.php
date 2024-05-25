<?php 

$showAlert = false; 
$showError=false;
?>
<h1>Delete Record</h1>
<?php
            include 'partials/_dbconnect.php';
        if(isset($_POST['btn1'])){
            $enrollno = $_POST['enrollno'];
            $sql= "SELECT * FROM `student` WHERE enrollno = '$enrollno'; ";
            $result = mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                $dltsql = "DELETE FROM `student` WHERE enrollno = '$enrollno'; ";
                $result = mysqli_query($conn,$dltsql);
                if($result)
                {
                    $showAlert = true;
                }
            }
            else{
            $showError = "Student Record Not Found";
            }
        }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Delete Record</title>
    <link rel="stylesheet" href="studlt.css" />
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

    <form action="/clg_project/studlt.php" method="post" class="form">
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
    if($showAlert){
    
           echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
           <strong>Success!</strong> "Record Deleted."
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
           </button>
           </div>';
       }  
    if($showError){
    
           echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>Error!</strong> '. $showError.'
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
           </button>
           </div>';
       }  
       ?>
</html>