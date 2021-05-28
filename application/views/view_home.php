<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.jpg">
        <title>Bauchi Limited</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontawesome-free/css/all.min.css">
        <!-- Bootstrap core CSS -->
        <!-- <link href="<?php echo base_url();?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="<?php echo base_url();?>assets/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url();?>assets/bootstrap/dist/css/carousel.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="d-flex justify-content-between fixed-top" style="background-color:#085484;height:8vh">
                <div class="float-left">
                    <h5 style="color:white" class="pt-2 ml-1">Also Affiliated with: <span style="font-weight:600;">Maisha Kara Children Foundation</span></h5>
                </div>
                <div class="right" style="color:white">
                    Follow us On: 
                    <a href="#" ><img style="width:50px;height:50px;" src="<?php echo base_url();?>assets/images/social/fb.png" alt=""></a>
                    <a href="#" ><img style="width:50px;height:50px;" src="<?php echo base_url();?>assets/images/social/twitter.png" alt=""></a>
                    <a href="#" ><img style="width:50px;height:50px;" src="<?php echo base_url();?>assets/images/social/insta.png" alt=""></a>
                </div>
            </div>
            <nav class="navbar navbar-expand-md navbar-light bg-light">
                <?php
                    $obj = array('class'=>'navbar-brand');
                    //echo anchor('home','<img src="'.base_url().'assets/images/logo.jpg" alt="Logo" style="width:100%;height:10%;">', $obj);
                    echo anchor('home', img(array('src'=>base_url()."assets/images/logo-sm.jpg",'alt'=>'Delete', 'style'=>'width:100%;height:10%;')), $obj);
                ?>                  
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2" id="navbarCollapse" style="background-color:#787474;">
                <!-- <div class="collapse navbar-collapse" id="navbarCollapse"> -->
                    <ul class="navbar-nav mr-auto bg-menu-left">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">OUR PROGRAMS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">GET INVOLVED</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">CONTACT US</a>
                        </li>
                    </ul>
                    <div class="bg-menu-right mr-auto" style="width:26.01%"></div>
                    <form class="form-inline mt-2 mt-md-0 bg-menu-right">
                        <div class="form-group has-feedback has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control hide-outline" placeholder="Search..." style="background-color:#787474;color:white;"/>
                            <!-- <i class="glyphicon glyphicon-search form-control-feedback"></i> -->
                        </div>
                        <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
                    </form>
                </div>
            </nav>
        </header>
        <main role="main">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="first-slide" src="<?php echo base_url();?>assets/images/slider-image-1.jpg" alt="" srcset="">
                        <!-- <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide"> -->
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h1>Example headline.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="second-slide" src="<?php echo base_url();?>assets/images/slider-image-2.jpg" alt="" srcset="">
                        <!-- <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide"> -->
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Another example headline.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption text-right">
                                <h1>One more for good measure.</h1>
                                <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                                <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
            <!-- Marketing messaging and featurettes
                ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->
            <div class="container marketing">
                <!-- Three columns of text below the carousel -->
                <div class="row">
                    <div class="col-lg-7">                        
                        <h2 style="font-weight:600">DEVELOPMENT</h2>
                        <h3>PROGRAMMES</h3>
                        <p class="text-justify">Bauchi Ltd was initially started in 2019 as a non- profit, non-governmental organization to address the food security and learning needs of children within marginalized vulnerable communities in Nairobi and Kilifi county during the onset of COVID-19. A trying time when due to the outbreak and subsequent lock down measures many households in informal settlements and rural communities were in financial distress due to sudden loss of daily income to buy food and pay rent. Bauchi collaborated with other like-minded organization and sourced for food for distribution to street children, homeless and poorest families. And also advocated for counselling and financial support through rescue centers for teen pregnant girls. Bauchi was officially registered on 8th March 2021 limited by guarantee to better address community development programmes within rural communities in Kenya. Bauchi undertakes activities, projects, schemes and programs for the empowerment of boys, and girls with knowledge and skills to protect them from drugs substance and sexual abuse. The school dropout youth and abused women with economic livelihood ventures to improve household income.</p>
                        <h5>SERVICES</h5>
                        <ul>
                            <li>Rural Development programmes in education, health and economic empowerment</li>
                            <li>Consultancy</li>
                            <li>Trading</li>
                            <li>Training</li>
                        </ul>
                        <p><a class="btn btn-secondary" href="#" style="background-color:#00894d;font-weight:700;" role="button">ABOUT US</a></p>
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-5">
                        <img class="img-responsive" src="<?php echo base_url();?>assets/images/dev-prog-image.png" alt=""style="height:100%;width:100%">
                    </div>
                </div>
                <!-- /.row -->
                <!-- START THE FEATURETTES -->
                <hr class="featurette-divider">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                    </div>
                </div>
                <hr class="featurette-divider">
                <div class="row featurette">
                    <div class="col-md-7 order-md-2">
                        <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5 order-md-1">
                        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                    </div>
                </div>
                <hr class="featurette-divider">
                <div class="row featurette">
                    <div class="col-md-7">
                        <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
                        <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
                    </div>
                    <div class="col-md-5">
                        <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
                    </div>
                </div>
                <hr class="featurette-divider">
                <!-- /END THE FEATURETTES -->
            </div>
            <!-- /.container -->
            <!-- FOOTER -->
            <footer class="container">
                <p class="float-right"><a href="#">Back to top</a></p>
                <p>&copy; <?php echo date('Y');?> Bauchi Limited
                    <!-- , Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a> -->
                </p>
            </footer>
        </main>
        <!-- Bootstrap core JavaScript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/bootstrap/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="<?php echo base_url();?>assets/bootstrap/assets/js/vendor/popper.min.js"></script>
        <script src="<?php echo base_url();?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="<?php echo base_url();?>assets/bootstrap/assets/js/vendor/holder.min.js"></script>
    </body>
</html>