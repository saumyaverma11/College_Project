<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Document</title>
</head>
<style>
    .navbar{
    backdrop-filter: blur(20px);
    background: linear-gradient(to top, rgba(255,255,255,0.8)50%,rgba(255,255,255,0.8)50%);
    position: sticky;
    width: 100%;
    height: 75px;
    top: 0;
    /* margin-left: 100px; */
    border-radius: 10px;
    padding-bottom: 15px;
    z-index: 100;
    
    
}
.menu{
    width: 100%;
    float: left;
    height: 70px;
    display: flex;
    justify-content: center;
    
}

#nav{
    position: relative;
    
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

#nav li{
    position: relative;
    list-style: none;
    margin-left: 25px;
    margin-right: 30px;
    margin-top: 27px;
    font-size: 14px;
}

#nav li a{
    position: relative;
    text-decoration: none;
    color: rgba(38,51,97,1);
    font-size: 1.1em;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
    opacity: .5;
}

#nav li a::after{
    content: '';
    position: absolute;
    width: 100%;
    left: 0;
    bottom: -6px;
    height: 3px;
    background: rgba(38,51,97,1);
    transform-origin: right;
    border-radius: 5px;
    transform: scaleX(0);
    transition: transform .5s;
}

#nav li a:hover::after{
    transform-origin: left;
    transform: scaleX(1);
}

#nav li a:hover{
    opacity: 1;
}
</style>
<body>
<div class="navbar">
        
        <div class="menu">
            <ul id="nav">
                <li><a href="stuSearch_name.php">By Name</a></li>
                <li><a href="stuSearch_dob.php">By D.O.B.</a></li>
                <li><a href="stuSearch_gender.php" style="opacity: 1;">By Gender</a></li>
                <li><a href="stuSearch_enroll.php">By Enrollment No.</a></li>
                <li><a href="stuSearch_mobile.php">By Mobile No.</a></li>
                <li><a href="stuSearch_course.php">By Course</a></li>
            </ul>
        </div>
        
    </div> 
</body>
</html>