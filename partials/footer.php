<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
footer{
   position: relative;
   background-color: #f94327;
   background-image: linear-gradient(316deg, #f94327 0%, #ff7d14 74%);
   min-height: 200px;
   padding: 20px 50px;
   display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: column;
   width: 100%;
    
}
footer .social_icon, footer .fmenu{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10px 0;
    flex-wrap: wrap;
}
footer .social_icon li, footer .fmenu li{
    list-style: none;

}
footer .social_icon li a{
    font-size: 2em;
    margin: 0 10px;
    color: #fff;
    display: inline-block;
    transition: 0.5s;
}
footer .fmenu li a{
    font-size: 1.2em;
    margin: 0 10px;
    color: #fff;
    display: inline-block;
    text-decoration: none;
    opacity: 0.75;
}
footer .fmenu li a:hover{
    opacity: 1;
}
footer .social_icon li a:hover{
    transform: translateY(-10px);
}
footer p{
    color: #fff;
    text-align: center;
    margin-top: 15px;
    font-size: 1.1em;
    line-height: 30px;
}
</style>
<body>
    <footer>
            <ul class="social_icon">
                <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                <li><a href="#"><ion-icon name="logo-linkedin"></ion-icon></a></li>
                <li><a href="https://www.instagram.com/sscollegeofficial_spn/"><ion-icon name="logo-instagram"></ion-icon></a></li>
            </ul>
            <ul class="fmenu">
                <li><a href="index.php">Home</a></li>
                <li><a href="indexcourse.php">Courses</a></li>
                <li><a href="facilities.php">Facilities</a></li>
                <li><a href="faculty.php">Faculty</a></li>
                <li><a href="activities.php">Activities</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
            <p> Copyright &copy; 2024 Swami Shukdevanand Post Graduate College.
                <br>Website Design and Development by SoulSync Duo
            </p>
        </footer> 
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
</body>
</html>