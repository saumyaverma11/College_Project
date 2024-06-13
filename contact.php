<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'partials/_dbconnect.php';
        $name = $_POST["name"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $address = $_POST["address"];
        $review = $_POST["review"];
        $sql="INSERT INTO `review` (`Name`, `Email`, `Mobile`, `Address`, `Review`, `Date`) VALUES ('$name', '$email', '$mobile', '$address', '$review', current_timestamp());";
        $result=mysqli_query($conn, $sql);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="contact.css">

</head>

<body>
    <?php require 'partials/_navcontact.php'?>
    <div class="main-container">
        <section class="contact">
            <h2>CONTACT US</h2>
            <form action="contact.php" method ="POST" >
                <div class="input-box">
                    <div class="input-field field">
                        <input type="text" placeholder="Enter your name" name="name" id="name" class="item" autocomplete="off">
                    </div>
                    <div class="input-field field">
                        <input type="text" placeholder="Email email address" name="email" id="Email" class="item" autocomplete="off">
                    </div>
                </div>
                <div class="input-box">
                    <div class="input-field field">
                        <input type="text" placeholder="Enter phone number" name="mobile" id="Phone" class="item" autocomplete="off">
                    </div>
                    <div class="input-field field">
                        <input type="text" placeholder="Enter your Address" name="address"id="subject" class="item" autocomplete="off">
                    </div>
                </div>
                <div class="textarea-field field">
                    <textarea id="massage" cols="30" rows="20" placeholder="your massage" style="color: black;"  name="review"
                        class="item" autocomplete="off">
                </textarea>
                </div>
                <button type="submit">SEND MESSAGE</button>
            </form>
        </section>
        <div class="contact-info">
            <h3> CONTACT INFO</h3>
            <div class="info">
                <div>
                    <span><ion-icon name="location-outline"></ion-icon></span>
                    <p> SS College Shahjahanpur, UTTAR PRADESH, INDIA</p>
                </div>
                <div>
                    <span><ion-icon name="mail-outline"></ion-icon></span>
                    <a href="#">SS college@gmail.com</a>
                </div>
                <div>
                    <span><ion-icon name="call-outline"></ion-icon></span>
                    <a href="tel:+918303771407">+91 830 377 1407</a>
                </div>
            </div>

            <div class="contact-map"><iframe
                    src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3527.508027005128!2d79.89161926496276!3d27.855660492255275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sss%20college%20shahjahanpur!5e0!3m2!1sen!2sin!4v1713200271824!5m2!1sen!2sin"
                    style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe></div>
        </div>
    </div>
    <?php require 'partials/footer.php'?>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
