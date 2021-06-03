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
            <div class="row fixed-top" style="background-color:#085484;">
                <div class="col-sm-5">
                    <h5 style="color:white" class="pt-2 ml-1 text-center">Also Affiliated with: <span style="font-weight:600;">Maisha Kara Children Foundation</span></h5>
                </div>
                <div class="col-sm-7" style="color:white">
                    <div class="text-right">
                        <span class="font-weight-bold">Follow us On:</span>
                        <a href="#" ><img style="width:50px;height:50px;" src="<?php echo base_url();?>assets/images/social/fb.png" alt=""></a>
                        <a href="#" ><img style="width:50px;height:50px;" src="<?php echo base_url();?>assets/images/social/twitter.png" alt=""></a>
                        <a href="#" ><img style="width:50px;height:50px;" src="<?php echo base_url();?>assets/images/social/insta.png" alt=""></a>
                    </div>
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
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2 menus-font" id="navbarCollapse" style="background-color:#787474;">
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
                            <a class="nav-link" href="#contact-us">CONTACT US</a>
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
                                <h1 style="font-weight:700;">We Honor and <br> <span style="font-weight:400;">embrace diversity</span></h1>
                                <p>Enhancing strengths and capacities<br> of the people we serve</p>
                                <p><a style="background-color:#00894d;color:white;" class="btn btn-lg" href="#" role="button">Read More</a></p>
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
                <div class="row" style="background-color:#e9e9e9">
                    <div class="col-lg-6 pt-1">
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
                    <div class="col-lg-6 pt-1">
                        <img class="img-responsive fit-image" src="<?php echo base_url();?>assets/images/dev-prog-image.jpeg" alt="">
                    </div>
                </div>
                <div class="section-spacing"></div>
                <div class="row">
                    <div class="col-lg-6">
                        <img class="img-responsive management-img" src="<?php echo base_url();?>assets/images/savio-1.jpeg" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h2 style="font-weight:600">Savio Vallabdas Solomon</h2>
                        <h3>Managing Director:</h3>
                        <p class="text-justify">Savio is an edutainment specialist with strategic focus on media communication and development holds a BA degree in Sociology from Oklahoma university of science and technology-USA and is working on MA in Communication and development at Daystar University. He has under taken practical training and assignments with Citizen Television and worked as Marketing officer with Radar Security Guards. Currently he is engaged in podcast production and business. Savio has passion in the elevating lives of marginalized youth through showcasing their skills, talents and innovation in various media plat-forms.</p>
                    </div>
                </div>
                <div class="section-spacing"></div>
                <div class="row">
                    <div class="col-lg-6">
                        <img class="img-responsive management-img" src="<?php echo base_url();?>assets/images/ricky-solomon.jpeg" alt="">
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-6">
                        <h2 style="font-weight:600">Ricky Mgalu Solomon</h2>
                        <h3>Chairman:</h3>
                        <p class="text-justify">Ricky, is the Chairman for Bauchi Company Limited and is also Director of Edustar Company Limited an organization that promotes international student education in Canada.</p>
                        <p class="text-justify">In 2011 Ricky was elected unopposed as National Chairman for Kenya Football Coaches Association - KEFOCA a position he still holds to date; 2014 August- Appointed to seat on the CECAFA -Technical Organizing Committee – Mombasa; 2012- Appointed to the East & Central Football Association on the Committee of Youth, Women; 2005 -Appointed to Kenya National Soccer Team ‘Harambee Stars’ Technical committee; 2003 -Appointed National Team Manager for the Harambee Stars Youth team; 1994-1998 - Assistant Secretary Technical Coast Branch –KFF; 1990-1994- Elected Senior Vice-chairman Mombasa District – KFF.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <h3 style="font-size:1.9vw;font-weight:600">MAISHA KARA CHILDREN FOUNDATION ASSOCIATES</h3>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="text-center">
                                <img class="img-responsive associate-img" src="<?php echo base_url();?>assets/images/kennedy-miheso.png" alt="">
                                <h4 class="pt-1 text-center" style="font-size:1.3vw;font-weight:600">Kennedy Miheso</h4>
                                <h4 class="text-center" style="font-size:1.3vw;font-weight:400">Associate</h4>
                                <h4 class="text-center" style="font-size:1.3vw;font-weight:400">Nairobi, Kenya</h4>
                                <div class="pt-3" style="background-color:#00894d;color:white;">
                                    <p class="text-center" style="font-size:1.0vw;">Ken holds a Bachelor of Science (Statistics) Degree from the University of Nairobi and is currently pursuing a Master of Science (Statistics) from the same institution.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="text-center">
                                <img class="img-responsive associate-img" src="<?php echo base_url();?>assets/images/ronald-guda-chunguli.jpg" alt="">
                                <h4 class="pt-1 text-center" style="font-size:1.3vw;font-weight:600">Ronald Guda Chunguli</h4>
                                <h4 class="text-center" style="font-size:1.3vw;font-weight:400">Associate</h4>
                                <h4 class="text-center" style="font-size:1.3vw;font-weight:400">Nairobi, Kenya</h4>
                                <div class="pt-3" style="background-color:#00894d;color:white;height:20%">
                                    <p class="text-center" style="font-size:1.0vw;">Ronald holds a BED degree (Kenyatta University) and also certificate in gender mainstreaming, besides other certificates human based approach to development. Ronald is an active member of Community Organizers and Practioners’ association of Kenya COPA-Kenya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="text-center">
                                <img class="img-responsive associate-img" src="<?php echo base_url();?>assets/images/fiona-shiundu.png" alt="">
                                <h4 class="pt-1 text-center" style="font-size:1.3vw;font-weight:600">Fiona Shiundu</h4>
                                <h4 class="text-center" style="font-size:1.3vw;font-weight:400">Associate</h4>
                                <h4 class="text-center" style="font-size:1.3vw;font-weight:400">Nairobi, Kenya</h4>
                                <div class="pt-3" style="background-color:#00894d;color:white;">
                                    <p class="text-center" style="font-size:1.0vw;">She is a member of the Programme for African Leadership (PfAL at LSE) and the Association of Media Women in Kenya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="text-center">
                                <img class="img-responsive associate-img" src="<?php echo base_url();?>assets/images/nyevu-kambi-tsuma.png" alt="">
                                <h4 class="pt-1 text-center" style="font-size:1.3vw;font-weight:600">Witness Nyevu Kambi Tsuma</h4>
                                <h4 class="text-center" style="font-size:1.3vw;font-weight:400">Associate-MKCF</h4>
                                <h4 class="text-center" style="font-size:1.3vw;font-weight:400">Mombasa, Kenya</h4>
                                <div class="pt-3" style="background-color:#00894d;color:white;">
                                    <p class="text-center" style="font-size:1.0vw;">Witness is an educationist with strategic focus on children with special needs and has a BA degree in community development and also holds several certificates on sign language. Currently she is the Chairman for Maendeleo ya Wanawake Kilifi County and the President for Interpreter in Africa representing the seventh day Adventists Churches.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container pb-2" id="contact-us">
                <div class="col-lg-5">
                    <h4 style="font-weight:700;">GET IN TOUCH</h4>
                    <h3 style="font-weight:0;">WITH US TODAY!</h3>
                    <hr class="ml-0" style="width:60%;border-top: 2px solid;">
                    <form action="">
                        <div class="form-group">
                            <input class="form-control" type="text" name="name" id="name" placeholder="Name:">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="subject" id="subject" placeholder="Subject:">
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" id="email" placeholder="Email:">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message" placeholder="Message:"></textarea>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-secondary" href="#" style="background-color:#00894d;font-weight:700;" role="button">SUBMIT</a>
                        </div>
                    </form>
                </div>
            </div>            
            <br>
            <footer class="container pb-4">
                <p class="float-right font-weight-bold"><a href="#">Back to top</a></p>
            </footer>           
        </main>
        <div class="page-footer container">
            <div class="row">
                <div class="col-sm-4 pt-2">
                    <?php
                        $obj = array('class'=>'navbar-brand');
                        //echo anchor('home','<img src="'.base_url().'assets/images/logo.jpg" alt="Logo" style="width:100%;height:10%;">', $obj);
                        echo anchor('home', img(array('src'=>base_url()."assets/images/logo-sm.jpg",'alt'=>'Delete', 'style'=>'width:100%;height:10%;')), $obj);
                    ?>
                    <p>&copy; <?php echo date('Y');?> Bauchi Company</p>                        
                </div>
                <div class="col-sm-4 footer-details pt-2">
                    <p><span class="font-weight-bold">LOCATION:</span><br>
                    Kanamai, Kilifi</p>
                    <p><span class="font-weight-bold">P. O. BOX:</span><br>
                    76690-005058 Nairobi, Kenya,</p>
                    <p><span class="font-weight-bold">TELEPHONE:</span><br>
                    +254 (0) 741852129;0722766846</p>
                </div>
                <div class="col-sm-4 footer-details pt-2">
                    <p><span class="font-weight-bold">WEBSITE:</span><br>www.bauchicompany.org</p>
                    <p><span class="font-weight-bold">EMAIL:</span><br>info@bauchicompany.org</p>
                    <p>
                        Connect with us<br>
                        <a href="#" ><img style="width:50px;height:50px;" src="<?php echo base_url();?>assets/images/social/fb.png" alt=""></a>
                        <a href="#" ><img style="width:50px;height:50px;" src="<?php echo base_url();?>assets/images/social/twitter.png" alt=""></a>
                        <a href="#" ><img style="width:50px;height:50px;" src="<?php echo base_url();?>assets/images/social/insta.png" alt=""></a>                    
                    </p>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url();?>assets/bootstrap/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="<?php echo base_url();?>assets/bootstrap/assets/js/vendor/popper.min.js"></script>
        <script src="<?php echo base_url();?>assets/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="<?php echo base_url();?>assets/bootstrap/assets/js/vendor/holder.min.js"></script>
    </body>
</html>