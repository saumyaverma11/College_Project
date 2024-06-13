<?php
    include 'partials/_dbconnect.php';
    $sql= "SELECT * FROM `faculty` Where `name`= 'Rajat Singh';";
    $result= mysqli_query($conn,$sql);
    $row= mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rajat Singh</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap+Condensed:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Mukta:wght@200;300;400;500;600;700;800&family=Noto+Serif:ital,wdth,wght@0,95.4,100..900;1,95.4,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="facultymem.css">
</head>
<body>
    <?php require "partials\_navfaculty.php"?>
    <div class="container">
        <div class="leftbox">
            <h3><?php echo $row['name']?></h3>
            <p><?php echo $row['department']?></p>
            <span><?php echo $row['designation']?></span>
            <hr>
            <div class="info">
                <div class="item">
                    <p>Department</p>
                    <span><?php echo $row['department']?></span>
                </div>
                <div class="item">
                    <p>Qualification</p>
                    <span><?php echo $row['qualification']?></span>
                </div>
                <div class="item">
                    <p>Experience</p>
                    <span id="ex"><?php echo $row['experience']?></span>
                </div>
            </div>
            <hr>
        </div>
        <div class="rightbox">
            <img style="width: 70%;" src="Images/Rajat .jpg" alt="">
            <hr>
        </div>
    </div>
    <?php require "partials/footer.php"?>
    
</body>
</html>