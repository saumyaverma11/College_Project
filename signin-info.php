<?php 
session_start();
if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=1){
    header("location: adminlogin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *
        {
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            overflow: hidden;
            scroll-behavior:smooth;
        }
        body{
            background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%), url("Images/loginpagepic.jpg");
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
            background-repeat:no-repeat;
        }
        .type{
            display:flex;
            justify-content:center;
            align-items:center;
        }
        .type h1{
            overflow: hidden;
            border-right: .15em solid orange;
            white-space: nowrap;
            margin: 0 auto;
            letter-spacing: .15em;
            font-family: "PT Serif", serif;  
            width:fit-content;
            font-size:3rem;
            color:white;
            font-weight:500;
            padding:0.8em;
            animation: typing 1.5s steps(40, end) forwards, blink-caret .5s step-end infinite;
        }
        @keyframes typing {
        from { width: 0 }
        to { width: 40% ;
        }
        }

        @keyframes blink-caret {
        from, to { border-color: transparent }
        50% { border-color: transparent }
        }
        .container{
            height:fit-content;
            width:100%;
            display: flex;
            flex-direction: column;
            gap:1rem;
            margin:0 2rem;
        
        }
        .item1{
            width:400px;
            height:160px;
            background-color: orangered;
            border-radius: 2px 50% 2px 50%;
            border:rgb(102, 38, 15); 
            padding:20px;
            color:white;
            font-size: 40px;
            font-weight: 300;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .box1{
            justify-content: left;
            position: relative;
            left:50px;
            transition: all 1s;
        }
        .box2{
            justify-content: center;
            position: relative;
            left:500px;
            transition: 1s;
        }
        .box3{
            justify-content: right;
            position: relative;
            left:950px;
            transition: all 1s;
        }

        .box1:hover{
            transform: scale(1.051);
            background-image: linear-gradient(288deg, rgba(209, 153, 115, 0.953) 1.5%, rgba(224, 30, 8, 0.92) 91.6%);
            box-shadow:8px 8px 8px rgba(209,153,115,0.953);
        }
        .box2:hover{
            transform: scale(1.051);
            background-image: linear-gradient(288deg, rgba(209, 153, 115, 0.953) 1.5%, rgba(224, 30, 8, 0.92) 91.6%);
            box-shadow:8px 8px 8px rgba(209,153,115,0.953);
        }
        .box3:hover{
            transform: scale(1.051);
            background-image: linear-gradient(288deg, rgba(209, 153, 115, 0.953) 1.5%, rgba(224, 30, 8, 0.92) 91.6%);
            box-shadow:8px 8px 8px rgba(209,153,115,0.953);
        
        }
        a{
            text-decoration:none;
            color:white;
            transition:all 1s;
        }
        .item1:hover a{
            color:black;
        }
    </style>
</head>
<body>
    <div class="type">
        <h1>Hello, <?php echo $_SESSION['username']?></h1>
    </div>
    <div class="container">
       <div class="item1 box1">
             <a href="student-information.php"> VIEW PROFILE</a>
       </div>
       <div class="item1 box2">
              <a href="https://mjpruiums.in/(S(u40jqafzm2efqw4zvoch4jit))/Results/ExamResult.aspx">VIEW RESULT</a>
       </div>
       <div class="item1 box3">
              <a href=logout.php>LOG OUT</a>
       </div>


    </div>
    
</body>
</html>