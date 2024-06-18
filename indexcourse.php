<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <style>
        *{  
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        body{
            overflow-x: hidden;
        }
        ::-webkit-scrollbar {
            display: none;
        }
        .container{
            background-color: rgb(240, 239, 239);
        }
        .Programme{
            font-size: 40px;
            color: black;
            font-weight: 600;
            padding:2rem 1rem 1rem 5rem ;
            margin:0rem 1rem 00rem 3rem;
        }
        .graduate-postg-section{
            width:100%;
            background-color: orangered;
            height:fit-content;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            padding:3rem;
            margin-top:1rem;
        }
        .graduate{
            font-size: 30px;
            font-weight: 500;
            padding:2rem;   
        }
        .sec{
            text-decoration: none;
            color: white;;
        }
        .post-graduate{
            font-size: 30px;
            color:white;
            font-weight: 500;
            padding:2rem;
        }
        .both-course-container{
            width:1380px;
            height:fit-content;
            margin:5rem 3rem;
            display: flex;
            flex-direction: column;
            gap:4rem;
            padding:2em  
        }
        .course-short-info{
            width:1310px;
            height:200px;
            padding:2em;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            box-shadow: 1px 4px 4px gray;
            border-radius: 4px;
            background-color:white;
        }
        .course-info{
            display: flex;
            flex-direction: column;
            gap:1em;
        }
        .code_duration{
            display: flex;
            flex-direction: row;
            gap:2em;
            padding:1em;
            align-items: center;    
        }
        .part1{
            display:flex;
            gap:2em;
        }
        .part2{
            display:flex;
            gap:2em;
        }
        .horizontal-bar{
            width:2px;
            height:2.5rem;
            background-color: gray;
        }
        .bold{
            color:black;
            font-weight: 600;
            font-size: 20px;
        }
        .cd-info{
            color: rgb(51, 51, 51);
            font-size: 16px;
            padding-top:4px;
        }
        .full-form{
            font-size: 25px;
            font-weight: 600;
            color:rgb(7, 7, 59);
            padding-left:1rem;
        }
        .view-detail-option{
            padding:1em 3em;
        }
        .click-detail{
            font-size: 17px;
            padding:9px 2em;
            background-color: orangered;
            text-align: center;
            border-radius:2em ;
            border: none;
            position: relative;
            top:25px;
            font-weight: 300;   
        }
        .click-detail a{
            color:white;
            text-decoration: none;
        }
        @media screen and (min-width:1100px) and (max-width:1286px){    
           .course-short-info{
                width:1000px;
                height:180px;
            }
        }
        @media screen and (max-width:1100px){
            .course-short-info{      
               width:810px;
               height:160px;
            }
        }
        @media screen and (min-width:800px)and (max-width:931px){
            .course-short-info{
                width:700px;
                height:150px;
                padding:0.6em;
            }
            .horizontal-bar{
                display:none;
            }
            .code_duration{
                display: flex;
                flex-direction: column;
                gap:0.2em;
                padding:0.5em;
                justify-content: center;
                align-items:start;
            }
            .full-form{
                font-size: 20px;
                font-weight: 600;
                color:rgb(7, 7, 59);
                padding-left:0.4rem;
            }
        }

       @media screen and (min-width:600px)and (max-width:800px){
            .course-short-info{  
                width:500px;
                height:130px;    
            }
        }
    </style>
</head>
<body>

    <?php require 'partials/_navcourse.php'?>
    <div class="container">
        <div class="Programme">Programme</div>
        <div class="graduate-postg-section">
            <div class="graduate"><a class="sec" href="#graduate">Graduate Programme</a></div>
            <div class="post-graduate"><a class="sec" href="#post-graduate">Diploma Programme</a></div>
        </div>
        <div class="both-course-container">
            <div class="course-short-info " id="graduate">
                <div class="course-info">
                    <div class="code_duration">
                       <div class="part1">
                            <div class="bold">Programm Code</div>
                            <div class="cd-info">BCA-001</div>
                        </div>
                        <div class="horizontal-bar"></div>
                        <div class="part2">
                            <div class="bold">Duration</div>
                            <div class="cd-info">3 Years</div>
                        </div>
                    </div>
                    <div class="full-form">Bachelor of Computer Applications</div>
                </div>
                <div class="view-detail-option">
                    <button class="click-detail"><a href="indexback.php">View Detail</a></button>
                </div>
            </div>
            <div class="course-short-info" id="post-graduate">
                <div class="course-info">
                    <div class="code_duration">
                        <div class="part1">
                            <div class="bold">Programm Code</div>
                            <div class="cd-info">PGDCA-001</div>
                        </div>
                        <div class="horizontal-bar"></div>
                        <div class="part2">
                            <div class="bold">Duration</div>
                            <div class="cd-info">1 Year</div>
                        </div>
                    </div>
                    <div class="full-form">Post Graduate Diploma in Computer Application</div>
                </div>
                <div class="view-detail-option">
                    <button class="click-detail"><a href="pgdca.php">View Detail</a></button>
                </div>
            </div>
        </div>
        
        <?php require 'partials/footer.php'?>
    </div>

</body>
</html>