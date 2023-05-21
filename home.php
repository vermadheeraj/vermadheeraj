<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">

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

        ::selection {
            background: crimson;
        }

        html {
            font-size: 62%;
            overflow-x: hidden;
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
            padding-right: 5px;

        }

        .navbar a:hover {
            background: crimson;
            padding-bottom: 30px;
        }

        .navbar a:hover i {
            color: white;
        }

        /*-------------------home-section-------------*/

        section {
            padding: 30px 9%;
        }

        .home {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 40px;
            min-height: calc(100vh - 6rem);
        }

        .home .image {
            flex: 1 1 35rem;

        }

        .home .image img {
            height: 50rem;
            width: 50rem;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        }

        .home .content {
            flex: 1 1 35rem;

        }

        .home .content h3 {
            color: white;
            font-size: 22px;
            padding-bottom: 5px;
            font-family: sans-serif;
        }

        .home .content span {
            font-size: 18px;
            color: crimson;
            padding: 5px 0;
            display: block;
            font-family: sans-serif;
        }

        .home .content p {
            font-size: 15px;
            color: #aaa;
            padding: 5px 0;
            line-height: 2;
            font-family: sans-serif;

        }

        .home .content .btn {
            display: inline-block;
            margin-top: 5px;
            padding: 8px;
            font-size: 18px;
            background: crimson;
            color: white;
            border-radius: 5px;
            font-family: serif;
        }

        .home .content i {
            height: 25px;
            width: 25px;
            font-size: 15px;
            line-height: 25px;
            text-align: center;
            background: white;
            color: crimson;
            border-radius: 50%;
            margin-left: 4px;
            transition: .2s linear;
        }

        .home .content :hover i {
            margin-left: 8px;

        }



        /*--------------------skills-section----------------------*/


        .heading-2 {
            text-align: center;
            font-size: 30px;
            color: whitesmoke;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .heading-2 span {
            text-transform: uppercase;
            color: crimson;
        }

        .skills .box-container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            padding-top: 20px;
        }

        .skills .box-container .box {
            padding: 10px;
            text-align: center;
            box-shadow: rgba(0, 0, 0, .7);
            border-radius: 5px;
            background: #1a1a1a;
            margin: 0 15px;
            padding-top: 8px;
            transition: .5s linear;

        }

        .skills .box-container .box img {
            height: 80px;
        }

        .skills .box-container .box h3 {
            font-size: 13px;
            color: whitesmoke;
            font-family: sans-serif;
            padding: 5px 0;
            text-transform: uppercase;

        }

        .skills .box-container .box:hover {
            background: whitesmoke;


        }

        .skills .box-container .box:hover h3 {
            color: black;

        }

        /*-------------------------Trainers-section---------------------*/


        .heading {
            text-align: center;
            font-size: 30px;
            color: whitesmoke;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .heading span {
            text-transform: uppercase;
            color: crimson;
        }


        .trainers {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;

        }

        .trainers .box-container .box {
            overflow: hidden;
            position: relative;
            padding: 12px 0;
        }

        .trainers .box-container .box:hover .content {
            transform: translateY(0);
        }

        .trainers .box-container .box img {
            width: 400px;
            height: 300px;
            object-fit: cover;
        }

        .trainers .box-container .content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: slategray;
            padding: 5px;
            transform: translateY(6rem);
        }

        .trainers .box-container .content span {
            font-size: 18px;
            color: wheat;
            padding: 5px;
        }

        .trainers .box-container .content h3 {
            font-size: 15px;
            color: whitesmoke;
            padding: 5px;
        }

        .trainers .box-container .content .share {
            border-top: 1px solid whitesmoke;
        }

        .heading-2 {
            font-size: 22px;
            color: wheat;
            font-family: serif;
            padding: 10px 0;
            text-align: center;
        }

        .banner {
            background: linear-gradient(rgba(0, 0, 0, .7), rgba(0, 0, 0, .7)), url('banner-bg.jpg') no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            text-align: center;

        }

        .banner span {
            font-size: 20px;
            color: wheat;
            padding: 5px 0;

        }

        .banner h3 {
            font-size: 25px;
            color: whitesmoke;
            text-transform: uppercase;
            padding-top: 5px;
        }

        .banner p {
            font-size: 15px;
            padding-top: 10px;
            margin: 5px auto;
            color: whitesmoke;
            max-width: 50rem;
            padding-bottom: 20px;
            line-height: 1.5;
        }

        .btn-items {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-details {
            display: inline-block;
            margin-top: 5px;
            padding: 8px;
            font-size: 18px;
            background: crimson;
            color: white;
            border-radius: 5px;
            font-family: serif;
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

            .home {
                text-align: center;
            }

            .home .image img {
                height: 30rem;
                width: 30rem;
            }

            .trainers .box-container .box img {
                width: 300px;
                height: 200px;
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

    <br>
    <br>
    <h1 class="heading"><span>My</span> Information</h1>

    <section class="home">


        <div class="image">
            <img src="image1.jpg" alt="">
        </div>

        <div class="content">
            <h3>Hey, I Am Dheeraj Verma</h3>
            <span>Website Developer</span>
            <p>I live in bhopal I have done B.tech in computer science from trinity institute of
                technology and research. </p>
            <a href="about.html" class="btn">about me <i class="fas fa-user"></i></a>
        </div>


    </section>


    <section class="skills">

        <h1 class="heading"><span>My</span> Skills</h1>

        <div class="box-container">

            <div class="box">
                <img src="html-5.png" alt="">
                <h3>html</h3>
            </div>

            <div class="box">
                <img src="css-3.png" alt="">
                <h3>css</h3>
            </div>

            <div class="box">
                <img src="java-script.png" alt="">
                <h3>java-script</h3>
            </div>

            <div class="box">
                <img src="php.png" alt="">
                <h3>php</h3>
            </div>

            <div class="box">
                <img src="python.png" alt="">
                <h3>python</h3>
            </div>

            <div class="box">
                <img src="figma.png" alt="">
                <h3>figma</h3>
            </div>


        </div>


        <div class="box-container">


            <div class="box">
                <img src="react.png" alt="">
                <h3>react</h3>
            </div>

            <div class="box">
                <img src="wordpress.png" alt="">
                <h3>wordpress</h3>
            </div>

            <div class="box">
                <img src="mysql.png" alt="">
                <h3>my sql</h3>
            </div>

            <div class="box">
                <img src="c.png" alt="">
                <h3>c++</h3>
            </div>


        </div>


    </section>

    <div class="btn-items">
        <a href="about.html" class="btn-details">More Details</a>
    </div>


    <br>
    <h1 class="heading"><span>My</span> Projects </h1>



    <section class="trainers" id="trainers">


        <div class="box-container">
            <div class="box">
                <img src="template-1.png" alt="">
                <div class="content">
                    <span>Pizza. Website</span>
                    <h3>John Deo</h3>
                    <div class="share">
                        <a href=""><i></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="template-2.png" alt="">
                <div class="content">
                    <span>Expert Trainers</span>
                    <h3>Ranbir Verma</h3>
                    <div class="share">
                        <a href=""><i></i></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="box-container">
            <div class="box">
                <img src="template-3.png" alt="">
                <div class="content">
                    <span>Expert Trainers</span>
                    <h3>Vijay Rai</h3>
                    <div class="share">
                        <a href=""><i></i></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="box-container">
            <div class="box">
                <img src="template-4.jpg" alt="">
                <div class="content">
                    <span>Expert Trainers</span>
                    <h3>JD Verma</h3>
                    <div class="share">
                        <a href=""><i></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="template-5.jpg" alt="">
                <div class="content">
                    <span>Expert Trainers</span>
                    <h3>JD Verma</h3>
                    <div class="share">
                        <a href=""><i></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <img src="template-6.jpg" alt="">
                <div class="content">
                    <span>Expert Trainers</span>
                    <h3>JD Verma</h3>
                    <div class="share">
                        <a href=""><i></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-container">
            <div class="box">
                <img src="template-7.png" alt="">
                <div class="content">
                    <span>Expert Trainers</span>
                    <h3>JD Verma</h3>
                    <div class="share">
                        <a href=""><i></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-container">
            <div class="box">
                <img src="template-8.png" alt="">
                <div class="content">
                    <span>Expert Trainers</span>
                    <h3>JD Verma</h3>
                    <div class="share">
                        <a href=""><i></i></a>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <div class="btn-items">
        <a href="portfolio.html" class="btn-details"> More Details</a>
    </div>

    <br>
    <br>
    <br>
    <br>





    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
</body>




</html>