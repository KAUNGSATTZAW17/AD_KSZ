<?php
    session_start();
    if(empty($_SESSION['email']))
    {
        header('location: index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover.css'/>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.css'/>
    <link href="https://fonts.googleapis.com/css2?family=Grenze+Gotisch:wght@200;400&display=swap" rel="stylesheet">
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/holder/2.9.7/holder.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js'></script>
    <style>
        h1,h2,h3,h4,h5{
            font-family: 'Grenze Gotisch', cursive;
        }
        p{
            font-family: 'Grenze Gotisch', cursive;
            font-weight:200;
            font-size:16pt;
        }
        .fstyle{
            font-family: 'Grenze Gotisch', cursive;
        }
    </style>
</head>
<?php require "header.php";?>
<?php require "slider.php";?>
<body class= "bg-light">
    <section>
        <div class="container my-4">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Hot News</h2>
                </div>                
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="carousel-item active">
                        <div class="card" style="width: 18rem;">
                            <img src="Assignment_Images/ap1.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">Card title</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary float-right">Read Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-item active">
                        <div class="card" style="width: 18rem;">
                            <img src="Assignment_Images/ap2.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">Card title</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary float-right">Read Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="carousel-item active">
                        <div class="card" style="width: 18rem;">
                            <img src="Assignment_Images/ap3.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">Card title</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary float-right">Read Now</a>
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="col-md-3">
                    <div class="carousel-item active">
                        <div class="card" style="width: 18rem;">
                            <img src="Assignment_Images/ap1.jpg" class="d-block w-100" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">Card title</h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary float-right">Read Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-4">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1>Welcome to our Site</h1>
                </div>
            </div>
            <div class="row">
                <p class="text-center">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque mollitia saepe ullam doloremque consectetur omnis earum voluptates. Iure blanditiis cupiditate dolore, et incidunt, dolorem inventore fugiat recusandae odio eum nam!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque mollitia saepe ullam doloremque consectetur omnis earum voluptates. Iure blanditiis cupiditate dolore, et incidunt, dolorem inventore fugiat recusandae odio eum nam!
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque mollitia saepe ullam doloremque consectetur omnis earum voluptates. Iure blanditiis cupiditate dolore, et incidunt, dolorem inventore fugiat recusandae odio eum nam!
                </p>
            </div>
        </div>
        <div class="container my-4">
            <div class="row pb-5">
                <div class="col-md-12">
                    <h2 class="text-center mb-3 wow slideInLeft">Latest News</h2>
                    <div class="row">
                        <div class="col-md-4 wow flipInX">
                            <img src="Assignment_Images/airpo.jpg" class="w-100 hvr-grow-shadow" alt="" srcset="">
                        </div>
                        <div class="col-md-4 wow flipInX">
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe width="420" height="315" 
                                src="https://www.youtube.com/embed/e6rglsLy1Ys?autoplay=1&mute=1">
                                </iframe>
                            </div>
                            <a href="#">
                                <h3 class= "text-dark text-justify">
                                    Lorem ipsum, dolor dssit amet consectetur - Maric Abus.
                                </h3>
                            </a>
                        </div>
                        <div class="col-md-4 wow flipInX">
                            <img src="Assignment_Images/airpo1.jpg" class="w-100 hvr-grow-shadow" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
<?php require "footer.php";?>