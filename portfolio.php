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


        section {
            padding: 8rem 10%;
        }


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

        .box-container {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .box-container .box {
            flex: 1 1 40rem;
            padding-top: 20px;
        }

        .box-container .box video {
            height: 300px;
            width: 450px;
        }

        .box-container .box .content h2 {
            font-size: 20px;
            font-family: sans-serif;
            color: whitesmoke;
            padding: 8px 5px;
            padding-top: 20px;

        }

        .box-container .box .content a {
            font-size: 17px;
            font-family: sans-serif;
            color: white;
            padding: 8px 5px;
            font-weight: bold;
            background: crimson;

        }

        .box-container .box .content a:hover {
            color: black;
        }

        .box-container .box .content p {
            font-size: 14px;
            font-family: sans-serif;
            color: #aaa;
            padding: 5px 5px;
            line-height: 1.5;
            font-weight: lighter;

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


            .box-container .box video {
                height: 300px;
                width: 300px;
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


    <section>

        <h1 class="heading"><span>my</span>work</h1>


        <div class="box-container">

            <div class="box">

                <video src="dreamwedding.mp4" id="video-slider" loop autoplay muted></video>
                <div class="content">
                    <h2>Dream Wedding Website</h2>
                    <p>Create a complete responsive dream wedding website frontend and backend template using
                        html css and javascript and php and mysql database.</p>

                </div>
            </div>

            <div class="box">

                <video src="makeoversby.mp4" loop autoplay muted></video>
                <div class="content">
                    <h2>Makeovers By Mona Website</h2>
                    <p>Create a complete responsive makeovers by mona website frontend and backend template using
                        html css and javascript and php and mysql database.</p>

                </div>




            </div>



    </section>


    <section>


        <div class="box-container">

            <div class="box">

                <video src="gym.mp4" id="video-slider" loop autoplay muted></video>
                <div class="content">
                    <h2>Gym Fitness Website</h2>
                    <p>Create a complete responsive Gym Fitness website frontend and backend template using
                        html css and javascript and php and mysql database.</p>

                </div>
            </div>

            <div class="box">

                <video src="coffee.mp4" loop autoplay muted></video>
                <div class="content">
                    <h2>Coffee Shop Website</h2>
                    <p>Create a complete responsive Coffee Shop website frontend and backend template using
                        html css and javascript and php and mysql database.</p>

                </div>


            </div>




        </div>

    </section>



    <section>


        <div class="box-container">

            <div class="box">
                <video src="healthyfood.mp4" id="video-slider" loop autoplay muted></video>
                <div class="content">
                    <h2>Healthy Food Website</h2>
                    <p>Create a complete responsive healthy food website frontend and backend template using
                        html css and javascript and php and mysql database.</p>

                </div>
            </div>

            <div class="box">
                <video src="travel.mp4" loop autoplay muted></video>
                <div class="content">
                    <h2>Travel Website</h2>
                    <p>Create a complete responsive travel website frontend and backend template using
                        html css and javascript and php and mysql database.</p>

                </div>
            </div>
        </div>
    </section>



    <section>


        <div class="box-container">

            <div class="box">
                <video src="template-9.mp4" id="video-slider" loop autoplay muted></video>
                <div class="content">
                    <h2>Healthy Food Website</h2>
                    <p>Create a complete responsive healthy food website frontend and backend template using
                        html css and javascript and php and mysql database.</p>

                </div>
            </div>

            <div class="box">
                <video src="travel.mp4" loop autoplay muted></video>
                <div class="content">
                    <h2>Travel Website</h2>
                    <p>Create a complete responsive travel website frontend and backend template using
                        html css and javascript and php and mysql database.</p>

                </div>
            </div>
        </div>
    </section>







</body>


</html>