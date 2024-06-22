<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome-<?php echo $_SESSION['username']?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Asap+Condensed:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<style>
    ::-webkit-scrollbar {
    display: none;
    }
    body{
        background-color: #f3f3f3;
        width: 100%;
        height: 100vh;
        overflow-x: hidden;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    .type{
        position: relative;
        overflow: hidden;
    }
    .type h1{
        width: fit-content;
        font-size: 3rem;
        overflow: hidden;
        border-right: .15em solid orange;
        white-space: nowrap;
        margin: 0 auto;
        letter-spacing: .15em;
        font-family: "PT Serif", serif;
        font-weight: 700;
        font-style: normal;
        text-align: center;
        animation: typing 1.5s steps(40, end) forwards, blink-caret .5s step-end infinite;
        margin-bottom: 60px;
    }
    @keyframes typing {
        from { width: 0 }
        to { width: 100% }
    }
    @keyframes blink-caret {
        from, to { border-color: transparent }
        50% { border-color: orange }
    }
    .container{
        display: grid;
        row-gap: 80px;
        column-gap: 100px;
        grid-template-areas: 
        'item1 item1 img img item4 item4'
        'item2 item2 img img item5 item5'
        'item3 item3 img img item6 item6'
        ;
    }
    .img{
        grid-area: img;
        display: flex;
        align-items: center;
        justify-content: center;   
    }
    img{   
        width: 600px;
        height: 600px;
        filter: drop-shadow(1px 1px 2px rgb(7, 7, 7));
        animation: enter 2s linear ;
    }
    @keyframes enter {
        0%{
            opacity: 0;
        }
        100%{
            opacity: 1;
        }
    }
    .item1{
        grid-area: item1;
    }
    .item2{
        grid-area: item2;
    }
    .item3{
        grid-area: item3;
    }
    .item4{
        grid-area: item4;
    }
    .item5{
        grid-area: item5;
    }
    .item6{
        grid-area: item6;
    }
    .item1, .item2, .item3{
        background-image: linear-gradient( 288deg,  rgba(0,85,255,1) 1.5%, rgba(4,56,115,1) 91.6% );
        width: 225px;
        height: 125px;
        border-radius: 5px;
        border-bottom-right-radius: 50px;
        border-top-left-radius: 50px;
        border: 2px solid rgba(4,56,115,1);
        box-shadow: 0 0 30px rgba(0,0,0,0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        transition: all .2s ease-in;
        animation: popup 1s linear;
    }
    ::-webkit-scrollbar {
        display: none;
    }
    .item4, .item5, .item6{
        background-image: linear-gradient( 288deg,  rgba(0,85,255,1) 1.5%, rgba(4,56,115,1) 91.6% );
        width: 225px;
        height: 125px;
        border-radius: 5px;
        border-bottom-right-radius: 50px;
        border-top-left-radius: 50px;
        border: 2px solid rgba(4,56,115,1);
        box-shadow: 0 0 30px rgba(0,0,0,0.5);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        transition: all .2s ease-in;
        animation: popup1 1s linear; 
    }
    @keyframes popup {
        0%{
            transform: translateX(-400px);
            opacity: 0;
        }
        100%{
            transform: translateX(0);
            opacity: 1;
        }    
    }
    @keyframes popup1 {
        0%{
            transform: translateX(400px);
            opacity: 0;
        }
        100%{
            transform: translateX(0);
            opacity: 1;
        } 
    }
    .item1:hover{
        transform: scale(1.1);
        background-image: linear-gradient(288deg, rgb(0 85 255 / 0%) 1.5%, rgb(8 109 224 / 92%) 91.6%);
    }
    .item2:hover{
        background-image: linear-gradient(288deg, rgb(0 85 255 / 0%) 1.5%, rgb(8 109 224 / 92%) 91.6%);
        transform: scale(1.1);
    }
    .item3:hover{
        transform: scale(1.1);
        background-image: linear-gradient(288deg, rgb(0 85 255 / 0%) 1.5%, rgb(8 109 224 / 92%) 91.6%);
    }
    .item4:hover{
        transform: scale(1.1);
        background-image: linear-gradient(288deg, rgb(0 85 255 / 0%) 1.5%, rgb(8 109 224 / 92%) 91.6%);
    }
    .item5:hover{
        transform: scale(1.1);
        background-image: linear-gradient(288deg, rgb(0 85 255 / 0%) 1.5%, rgb(8 109 224 / 92%) 91.6%);
    }
    .item6:hover{
        transform: scale(1.1);
        background-image: linear-gradient(288deg, rgb(0 85 255 / 0%) 1.5%, rgb(8 109 224 / 92%) 91.6%);
    }
    a:hover{
        color: rgba(4,56,115,1);
    }
    a{
        text-decoration: none;
        font-family: "Asap Condensed", sans-serif;
        font-weight: 500;
        font-style: normal;
        color: #fff;
        text-align: center;
        padding: 50px 60px;
    }
</style>
<body>
    <div class="type">
        <h1>Welcome to the Students Record</h1>
    </div>
    <div class="container">
        <div class="img">
            <img src="https://www.trywebtec.com/wp-content/uploads/2023/07/web-developer-working-on-project.png" alt="">
        </div>
        <div class="item1">
            <a href="stucreate.php">ADD NEW RECORD</a>
        </div>
        <div class="item2">
            <a href="stuUpdate.php">UPDATE RECORD</a>
        </div>
        <div class="item3">
            <a href="studlt.php">DELETE RECORD</a>
        </div>
        <div class="item4">
            <a href="stuSearch_name.php">SEARCH RECORD</a>
        </div>
        <div class="item5">
            <a href="recordList.php">RECORD LIST</a>
        </div>
        <div class="item6">
            <a href="welcome.php">BACK</a>
        </div>
    </div>
</body>
</html>