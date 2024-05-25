<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'partials/_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    // $exixts=false;
    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows >0){
        $showError ="Username Already Exists";
    }
    else{
        if(($password == $cpassword)){
            $sql = "INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp());
            ";
            $result = mysqli_query($conn, $sql);
            if($result){
                $showAlert=true;
            }
        }
        else{
        $showError ="Passwords do not match";
        }
        
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<style>
    body{
    background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(237,3,32,0.3) 20.8%, rgba(242,121,1,0.3) 74.4% );
    width: 100%;
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
.form {
    width: 400px;
    height: 520px;
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
}
.form #frm{
    width: 440px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    
}
.form #register-form{
    position: relative;
    transition: none;
    display: flex;
    flex-direction: column;
    align-items: center;

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
    font-weight: bold;
}
.btnn:hover{
    background: #fff;
    color: #ff7200;
}

</style>
<body>
<div class="form" id="form">
            <span class="icon-close">
                <a href="welcome.php"><ion-icon name="close"></ion-icon></a>
            </span>
            <div class="register" id="frm">
                <div class="con">
                    <ion-icon name="person-circle"></ion-icon>
                </div>
                <form id="register-form" action="/clg_project/adminsignup.php" method="post">
                    <input type="text" name="username" placeholder="Enter Username Here">
                    <input type="password" name="password" placeholder="Enter Password Here">
                    <input type="password" name="cpassword" placeholder="Confirm Your Password Here">
                    <button class="btnn" type="submit">Submit</button>
                </form>
            </div>
        </div>
        <?php
     if($showAlert){

    echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account is created and now you can login
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