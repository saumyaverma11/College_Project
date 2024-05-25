<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <button><a href="stuRecordMain.php">Back</a></button>
    <title>Student Record List</title>
</head>
<style>
    button{
        position: relative;
        left: 94%;
        top: 10px;
        padding: 10px;
        width: 80px;
        border: 2px solid rgba(38,51,97,1);
        border-radius: 5px;
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(38,51,97,0.9) 0%, rgba(65,143,222,0.9) 79% );
        transition: all 0.2s ease;
    }
    button:hover{
        background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(38,51,97,1) 0%, rgba(65,143,222,1) 79% );
        box-shadow: 0 0 10px #00000042;
        transform: scale(1.01);

    }
    button a{
        color: #fff;
        font-weight: bold;
        text-decoration: none;
        font-size: 1.2em;
    }
    body{
        overflow-x: hidden;
    }
    h1{
        text-align: center;
        margin: 30px 0;
        font-size: 5em;
    }
    ::-webkit-scrollbar {
    display: none;
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
        padding: 12px 10px;
    }
    .content-table tbody tr{
        border-bottom: 1px solid #dddddd;
    }
    tbody:nth-child(odd){
        background-color: #f3f3f3;
    }
    tbody:last-child{
        border-bottom: 2px solid rgba(38,51,97,1);
    }
</style>
<body>
    <h1>STUDENT RECORD LIST</h1>
    <table class="content-table">
        <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Name</th>
                <th>Date of Birth</th>
                <th>Gender</th>
                <th>Enrollment No.</th>
                <th>Roll No.</th>
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
    include 'partials/_dbconnect.php';
    $sql= "SELECT * FROM `student`;";
    $result= mysqli_query($conn,$sql);
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
                <td><?php echo $row['rollno']?></td>
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
    ?>
</body>
</html>