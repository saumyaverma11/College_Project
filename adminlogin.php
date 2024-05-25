<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "Select * from users where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if($num == 1){
        $login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['username']= $username;
        header("location: welcome.php");
    }
    else{
        $showError ="Invalid Credentials";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin|Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<style>
body{
    background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(237,3,32,0.3) 20.8%, rgba(242,121,1,0.3) 74.4% ),url("Images/—Pngtree—contemporary\ authentic\ 3d\ renderings\ of_8832124.jpg");
    width: 100%;
    background-position: center;
    background-size: cover;
    height: 100vh;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}
::-webkit-scrollbar {
    display: none;
}
.typewriter {
  position: relative;
  overflow: hidden;
  top: -50px;
}

.typewriter h1 {
  overflow: hidden;
  border-right: .15em solid orange;
  white-space: nowrap;
  color: #fff;
  text-align: center;
  margin: 0 auto;
  letter-spacing: .15em;
  animation: typing 1.5s steps(40, end) forwards, blink-caret .75s step-end infinite;
}

@keyframes typing {
  from { width: 0 }
  to { width: 100% ;
}
}

@keyframes blink-caret {
  from, to { border-color: transparent }
  50% { border-color: orange }
}


@keyframes typing-reverse {
  from { width: 100% }
  to { width: 0 }
}

.typewriter h1:nth-child(2) {
  animation-delay: 4s; /* Delay for the next text */
}
.form {
    width: 400px;
    height: 440px;
    display: flex;
    /* flex-direction: column; */
    align-items: center;
    background: #1111116e;
    backdrop-filter: blur(20px);
    border: 2px solid rgba(255,255,255,0.5);
    box-shadow: 0 0 30px rgba(0,0,0,0.5);
    position: relative;
    border-radius: 20px;
    padding: 4px;
    color: #f5f1f1;
    transition: transform .5s ease,height .2s ease;
    overflow: hidden;
    margin-bottom: 20px;
}
.form #frm{
    width: 440px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;

}

.form #frm.login{
    transition: transform .18s ease;
    transform: translateX(0);
}

.form .icon-close a{
    position: absolute;
    top: 0;
    right: 0;
    width: 40px;
    height: 40px;
    color: #fff;
    background: #ff7200;
    display: flex;
    font-size: 2rem;
    align-items: center;
    justify-content: center;
    border-bottom-left-radius: 20px;
    cursor: pointer;
    z-index: 1;
}
.form .con{
    height: 80px;
    font-size: 5rem;
    color: #ff7200;
    margin: 2px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 30px;
}

.form input{
    width: 300px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    border-top: none;
    border-right: none;
    border-left: none;
    color: #fdfcfc;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}

.form input:focus{
    outline: none;
}

::placeholder{
    color: #f7f3f3;
    font-family: Arial;
}

.btnn{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border: none;
    /* margin-left: %; */

    margin-top: 80px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color: #fff;
    transition: 0.4s ease;
}
#login-form{
    display: flex;
    flex-direction: column;
    align-items: center;
}
.btnn:hover{
    background: #fff;
    color: #ff7200;
}


</style>
<body>
        <div class="typewriter">
            <h1>Welcome Admin...</h1>
            <!-- <h1>Admin Login</h1> -->
        </div>
        <div class="form" id="form">
            <span class="icon-close">
                <a href="index.php"><ion-icon name="close"></ion-icon></a>
            </span>
            <div class="login" id="frm">
                <div class="con">
                    <ion-icon name="person-circle"></ion-icon>
                </div>
                <form id="login-form" action="/clg_project/adminlogin.php" method="post">
                    <input type="text" id="username" name="username" placeholder="Enter Username Here">
                    <input type="password" id="password" name="password" placeholder="Enter Password Here">
                    <button class="btnn" type="submit">Login</button>
                </form>
            </div>
        </div>
    <?php
     if($login){

    echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> You are logged in
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
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>