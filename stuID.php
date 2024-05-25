<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){

    include 'partials/_dbconnect.php';
    $enrollno = $_POST["enrollno"];
    $stuID = $_POST["stuID"];
    $password = $_POST["password"];
    // $exixts=false;
    $existSql = "SELECT * FROM `student` WHERE enrollno = '$enrollno'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows ==0){
        $showError ="Student Not Found";
    }
    else{
        $exist1Sql = "SELECT * FROM `student` WHERE `student id` = '$stuID'";
        $result = mysqli_query($conn, $exist1Sql);
        $numExist1Rows = mysqli_num_rows($result);
        if($numExist1Rows >0){
            $showError ="Student ID is not available";
        }
        else{
        
            $sql = "UPDATE `student` SET `student id` = '$stuID', `password` = '$password' WHERE `student`.`enrollno` = '$enrollno';";
            $result = mysqli_query($conn, $sql);
            if($result){
                $showAlert=true;
            }
        }
    }    
        
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<style>
    body{
    background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(247,87,0,.2) 0%, rgba(249,0,0,.2) 90.1% ), url("https://www.capolicylab.org/wp-content/uploads/2022/07/Student-Supports-1150x550-1-1024x490.jpg");
    width: 100%;
    height: 100vh;
    background-position: center;
    background-size: cover;
    overflow: hidden;
    display: flex;
    /* flex-direction: column; */
    justify-content: space-around;
    align-items: center;
}
::-webkit-scrollbar {
    display: none;
}
.type{
        position: relative;
        overflow: hidden;
        /* width: 50%; */
    }
    .type p{
        width: fit-content;
        font-size: 7rem;
        overflow: hidden;
        border-right: .15em solid #ff7200;
        white-space: nowrap;
        margin: 0 0 0 auto;
        font-family: "PT Serif", serif;
        font-weight: 700;
        font-style: normal;
        text-align: left;
        animation: typing1 2s steps(40, end) forwards, blink-caret .5s step-end infinite;
        animation-delay: 1.5s;
        margin-bottom: 30px;
        opacity:0 ;
        color: #fff;
        filter: drop-shadow(0px 0px 2px #ff7200);
        
    }
    .type h1{
        width: fit-content;
        color: #fff;
        filter: drop-shadow(0px 0px 2px #ff7200);
        font-size: 7rem;
        overflow: hidden;
        border-right: .15em solid #ff7200;
        white-space: nowrap;
        margin: 0 auto;
        font-family: "PT Serif", serif;
        font-weight: 700;
        font-style: normal;
        text-align: left;
        animation: typing 1.5s steps(40, end) forwards, blink-caret .5s step-end infinite;
        margin-bottom: 30px;

    }
    @keyframes typing {
    from { width: 0 }
    to { width: 100% ;
        border: none;
    }
    }

    @keyframes blink-caret {
    from, to { border-color: transparent }
    50% { border-color: #ff7200 }
    }
    @keyframes typing1 {
    from { width: 0 ;
            opacity: 1;
        }
    to { width: 100% ;
        opacity: 1;
    }
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
    transition: all 0.5s ease-in;
}
::placeholder:hover{
    transform: translateY(-10px);
    content: "Enrollment No.";
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
.column{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
</style>
<body>
<div class="type">
    <h1>STUDENT</h1>
        <p>ID GENERATION</p>
    </div>
    <div class="column">
        <?php
     if($showAlert){

    echo  '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> ID & Password Generated Successfully.
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
        <div class="form" id="form" autocomplete="off">
            <span class="icon-close">
                <a href="welcome.php"><ion-icon name="close"></ion-icon></a>
            </span>
            <div class="register" id="frm">
                <div class="con">
                    <ion-icon name="person-circle-outline"></ion-icon>
                </div>
                <form id="register-form" action="/clg_project/stuID.php" method="post">
                    <input type="number" name="enrollno" placeholder="Enter Enrollment No. Here">
                    <input type="text" name="stuID" placeholder="Enter Student ID Here">
                    <input type="password" maxlength="8" name="password" placeholder="Enter Password Here">
                    <button class="btnn" type="submit">Submit</button>
                </form>
            </div>
        </div>
        </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
</html>