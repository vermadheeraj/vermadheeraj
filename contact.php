
<?php

if(isset($_POST['name'])){
 


    $server = "localhost";
    $username = "root";
    $password = "";


    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" .
        mysqli_connect_error());
    }

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `dheeraj_website`.`dheeraj_website` (`name`, `email`, `number`, `subject`, `message`) VALUES
         ('$name', '$email', '$number','$subject', '$message');";

    if($con->query($sql) == true){
        //echo "successfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    $con->close();

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            outline: none;
            border: none;
            text-transform: capitalize;
        }

        html {
            font-size: 62%;
            overflow-x: hidden;
        }

        ::selection {
            background: crimson;
        }

        html::-webkit-scrollbar {
            width: 1rem;
        }

        body {
            background: #0d0d0d;
        }

        .navbar {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            display: flex;
            z-index: 1000;
            align-items: flex-end;
        }

        .navbar a {
            padding: 8px 5px;
            font-size: 20px;
            background: #1a1a1a;
            flex: 1;
            color: white;
            text-align: center;
            font-family: serif;
            transition: .2s linear;

        }

        .navbar i {
            color: crimson;
            padding-right: 8px;

        }

        .navbar a:hover {
            background: crimson;
            padding-bottom: 30px;
        }

        .navbar a:hover i {
            color: white;
        }


        section {
            padding: 8rem 8%;
        }


        .heading {
            text-align: center;
            font-size: 30px;
            color: whitesmoke;
            margin-bottom: 30px;
            text-transform: uppercase;
        }

        .heading span {
            text-transform: uppercase;
            color: crimson;
        }


        .row {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .row .info-container {
            width: 35rem;
            padding-top: 30px;
        }

        .row .info-container h2 {
            font-size: 18px;
            text-transform: uppercase;
            font-family: sans-serif;
            color: crimson;
            padding-bottom: 30px;
        }

        .row .info-container .box-container {
            padding: 8px 0;

        }

        .row .info-container .box-container .box {
            display: flex;
            gap: 2rem;
        }

        .row .info-container .box-container .box {
            font-size: 15px;
            color: crimson;

        }

        .row .info-container .box-container .box h3 {
            font-size: 17px;
            font-family: sans-serif;
            color: white;
            padding-bottom: 10px;
        }


        .row .info-container .box-container .box p {
            font-size: 12px;
            font-family: sans-serif;
            color: #aaa;
            padding-bottom: 10px;
        }


        form {
            flex: 1 1 40rem;
            padding-top: 30px;
        }

        .inputbox {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;

        }

        input {
            width: 48%;
        }

        .inputbox input,
        textarea {
            border-radius: 5px;
            padding: 8px 8px;
            font-size: 12px;
            color: white;
            text-transform: none;
            margin: 5px 0;
            background: #1a1a1a;
            font-weight: bold;
        }

        textarea {
            width: 80%;
            border-radius: 5px;
            font-size: 12px;
            font-weight: bold;
            resize: none;
        }

        .row form .btn {
            display: inline-block;
            margin-top: 5px;
            padding: 8px;
            font-size: 18px;
            background: crimson;
            color: white;
            border-radius: 5px;
            font-family: serif;
            cursor: pointer;
        }

        .share {
            padding-top: 20px;
        }

        .online-icon img {
            height: 35px;
            padding: 0 5px;
        }






        @media (max-width:800px) {

            html {
                font-size: 55%;
            }

            .navbar span {
                padding: 0 5px;
                font-size: 18px;
            }

            .navbar i {

                padding: 0 5px;
            }

        }


        @media (max-width:500px) {

            html {
                font-size: 50%;
            }

        }
    </style>



</head>

<body>

    <nav class="navbar">

        <a href="home.php"><i class="fas fa-home"></i><span>home</span></a>
        <a href="about.php"><i class="fas fa-user"></i><span>about</span></a>
        <a href="portfolio.php"><i class="fas fa-briefcase"></i><span>work</span></a>
        <a href="blog.php"><i class="fas fa-sun"></i><span>weather</span></a>
        <a href="contact.php"><i class="fas fa-address-book"></i><span>contact</span></a>

    </nav>


    <section class="contact">

        <h1 class="heading">contact <span>me</span></h1>


        <div class="row">

            <div class="info-container">
                <h2>my number and
                    address, email </h2>

                <div class="box-container">


                    <div class="box">
                        <i class="fas fa-phone"></i>
                        <div class="info">
                            <h3>Phone No</h3>
                            <p>8602912044</p>
                        </div>
                    </div>


                    <div class="box">
                        <i class="fas fa-map"></i>
                        <div class="info">
                            <h3>Address</h3>
                            <p>Bhopal, india - 400104</p>
                        </div>
                    </div>

                    <div class="box">
                        <i class="fas fa-envelope"></i>
                        <div class="info">
                            <h3>Email</h3>
                            <p>dheerajverma1198@gmail.com</p>
                        </div>
                    </div>

                </div>



                <div class="share">
                    <i class="online-icon"><a href=""><img src="facebook.png" alt=""></a></i>
                    <i class="online-icon"><a href=""><img src="twitter.png" alt=""></a></i>
                    <i class="online-icon"><a href=""><img src="linkedin.png" alt=""></a></i>
                    <i class="online-icon"><a href=""><img src="instagram.png" alt=""></a></i>

                </div>


            </div>


            <form action="" method="post" >

                <div class="inputbox">
                    <input type="text" name="name" id="name" placeholder=" Your Name">
                    <input type="email" name="email" id="email" placeholder=" Your Email">
                    
                </div>
                <div class="inputbox">
                    <input type="number" name="number" id="number" placeholder=" Your number">
                    <input type="text" name="subject" id="subject" placeholder=" Subject">
                </div>

                <textarea type="text" name="message" id="message" cols="30" rows="10" placeholder=" Your Message"></textarea>

                <input type="submit" value="send Message" class="btn">

            </form>



        </div>

    </section>









</body>


</html>