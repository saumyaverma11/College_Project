<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
    }
    body{
        overflow-x:hidden;
    }
    .navbar{
    backdrop-filter: blur(20px);
    background: linear-gradient(to top, rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
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
.dropdown:hover ul.dropdown-content {
    display: block;
  }
  
ul.dropdown-content {
display: none;
position: absolute;
top: 25px;
background: #3333339d;
min-width: 150px;
padding-bottom: 10px;
z-index: 1;
}

ul.dropdown-content li {
display: block;
}

ul.dropdown-content li a {
color: white;
padding: 10px 10px 0px 10px;
text-decoration: none;
display: block;
top: -16px;
}

ul.dropdown-content li a:hover {
background-color: #555;
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
    color: #fff;
    font-size: 1.1em;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;
}

#nav li a::after{
    content: '';
    position: absolute;
    width: 100%;
    left: 0;
    bottom: -6px;
    height: 3px;
    background: #fff;
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
    color: #ff7200;
}

    
    
</style>
<body>
<div class="navbar">
        
        <div class="menu">
            <ul id="nav">
                <li><a href="index.php">HOME</a></li>
                <li><a href="indexcourse.php">COURSES</a></li>
                <li><a href="facilities.php" style="color: #ff7200;">FACILITIES</a></li>
                <li><a href="faculty.php">FACULTY</a></li>
                <li><a href="activities.php">ACTIVITIES</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="contact.php">CONTACT&nbsp;&nbsp;US</a></li>
                <div class="dropdown">

                    <li><a href="#">LOGIN <ion-icon name="caret-down-outline"></ion-icon></a>
                        <ul class="dropdown-content">
                            <li><a href="studentlogin.php" id="cn2">Student Login</a></li>
                            <li><a href="adminlogin.php">Admin Login</a></li>
                        </ul>
                    </li>
                </div>
            </ul>
        </div>
        
    </div> 
</body>
</html>