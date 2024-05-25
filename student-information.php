<?php 
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=1){
header("location: studentlogin.php");
exit;
}
else {
    include 'partials/_dbconnect.php';
    $stuid=$_SESSION['username'];
    $sql= "SELECT * FROM `student` Where `student id`= '$stuid';";
    $result= mysqli_query($conn,$sql);
    $row= mysqli_fetch_assoc($result);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:arial;
            overflow:hidden;
        }
        .container{
            background-image:url("Images/student-info-pic.jpg");
            background-position:center;
            background-repeat:no-repeat;
            background-size:cover;
            width:100%;
            height:fit-content;
            padding-bottom:1.50rem;
            overflow:hidden;

        }
        .type{
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .type h1{
            font-size:3rem;
            color:black;
            font-weight:500;
            margin:1rem;
            padding:0.8em;
        }
        .student-info{
            
            display:flex;
            flex-direction:row;
            align-items:center;
            justify-content:center;
            gap:1em;
            margin:1em 1em;
            padding-bottom:1rem;

        }
    
        img{
            height:300px;
            width:300px;
        }
        .info-section{
            
            display:flex;
            justify-content:space-evenly;
            align-items:space-evenly;

        }
        li{
            text-decoration:none;
            list-style-type: none;
            color:black;
            font-size:20px;
           padding: 0.5em;
        }
        a{
            text-decoration:none;
        }
        .print-page{
            display:flex;
            justify-content:center;
        }
        button{
            background-color:orangered;
            text-align:center;
            color:white;
            font-weight:500;
            font-size:16px;
            border:none;
            margin:0.8em;
            padding:12px 2rem;
        }
    </style>
</head>
<body>
    <div class="container">
    <div class="type">
        <h1>YOUR PROFILE<?php //echo $_SESSION['username']  ?></h1>

    </div>

    <div class="student-info">
        <!-- <div class="img1">
            <img src="Assest/Images/hand-image.webp">
        </div> -->
        <div class="info-section">
        <div class="left-content">
        <li>Name:</li>
        <li>Date of Birth:</li>
        <li>Gender:</li>
        <li>Enrollment No.:</li>
        <li>Mobile No.:</li>
        <li>Email:</li>
        <li>Address:</li>
        <li>Course</li>
        <li>Course ID:</li>
        <li>Result</li>
        </div>
        <div class="right-content">
        <li><?php echo $row['first name']," ", $row['last name']?></li>
        <li><?php echo $row['dob']?></li>
        <li><?php echo $row['gender']?></li>
        <li><?php echo $row['enrollno']?></li>
        <li><?php echo $row['mobileno']?></li>
        <li><?php echo $row['email']?></li>
        <li><?php echo $row['address']?></li>
        <li><?php echo $row['coursename']?></li>
        <li><?php echo $row['courseid']?></li>
        <li><a href="https://mjpruiums.in/(S(u40jqafzm2efqw4zvoch4jit))/Results/ExamResult.aspx">MJPRU Examination Result</a></li>
        </div>
        </div>
        <!-- <div class="img2">
            <img src="Assest/Images/hand-image-2.webp">
        </div> -->
    </div>

    <div class="print-page">
        <button onclick="printpage()">PRINT</button>
    </div>
    </div>


</body>
<script type="text/javascript">
    function printpage(){
        window.print();
        // var body=document.getElementById('body').innerHTML;
        // var data=document.getElementById('data').innerHTML;
        // document.getElementById('body').innerHTML = data;
        // window.print();
        // document.getElementById('body').innerHTML = body;
    }
</script>
</html>