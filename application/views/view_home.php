<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.jpg">
        <title>Bauchi Company</title>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontawesome-free/css/all.min.css">
        <!-- Bootstrap core CSS -->
        <!-- <link href="<?php echo base_url();?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet"> -->
        <link href="<?php echo base_url();?>assets/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="<?php echo base_url();?>assets/bootstrap/dist/css/carousel.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
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
            <nav id="home" class="menu-bar-top navbar navbar-expand-md navbar-light bg-light">
                <?php
                    $obj = array('class'=>'navbar-brand');
                    echo anchor('home', img(array('src'=>base_url()."assets/images/logo-sm.jpg",'alt'=>'Delete', 'style'=>'width:100%;height:10%;')), $obj);
                ?>                  
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2 menus-font" id="navbarCollapse" style="background-color:#787474;">
                <!-- <div class="collapse navbar-collapse" id="navbarCollapse"> -->
                    <ul class="navbar-nav mr-auto bg-menu-left">
                        <li class="nav-item active">
                            <a class="nav-link" href="#home">HOME<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <!-- <a class="nav-link" href="#about-us">ABOUT US</a> -->
                            <?php
                                $obj = array('class'=>'nav-link');
                                echo anchor('#about-us', 'ABOUT US', $obj);
                            ?>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">OUR PROGRAMS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">GET INVOLVED</a>
                        </li>
                        <li class="nav-item">
                            <?php
                                $obj = array('class'=>'nav-link');
                                echo anchor('#contact-us', 'CONTACT US', $obj);
                            ?>
                        </li>
                    </ul>
                    <div class="bg-menu-right mr-auto" style="width:26.01%"></div>
                    <form class="form-inline mt-2 mt-md-0 bg-menu-right">
                        <div class="form-group has-feedback has-search">
                            <span class="fa fa-search form-control-feedback"></span>
                            <input type="text" class="form-control hide-outline search-input" placeholder="Search..." style="background-color:#787474;color:white;"/>
                            <!-- <i class="glyphicon glyphicon-search form-control-feedback"></i> -->
                        </div>
                    </form>
                </div>
            </nav>
        </header>
        <center>
            <?php 
                if($this->session->flashdata('message_no') > 0)
                {
            ?>
                <div class="msg-box">
                    <span class="msg-box-btn" onclick="this.parentElement.style.display='none';">&times;</span> 
                    <strong><?php echo $this->session->flashdata('message');?></strong>
                </div>
            <?php 
                }
            ?>
        </center>
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
                        <div class="container">
                            <div class="carousel-caption text-left">
                                <h1 style="font-weight:700;">We Honor and <br> <span style="font-weight:400;">embrace diversity</span></h1>
                                <p>Enhancing strengths and capacities<br> of the people we serve</p>
                                <!-- <p><a style="background-color:#00894d;color:white;" class="btn btn-lg" href="#" role="button">Read More</a></p> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="second-slide" src="<?php echo base_url();?>assets/images/slider-image-2.jpg" alt="" srcset="">
                        <div class="container">
                            <div class="carousel-caption">
                                <!-- <h1>Another example headline.</h1> -->
                                <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
                                <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p> -->
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="third-slide" src="<?php echo base_url();?>assets/images/dev-prog-image.jpeg" alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption text-right">
                                <!-- <h1>One more for good measure.</h1> -->
                                <!-- <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p> -->
                                <!-- <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p> -->
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
            <div class="container marketing" id="about-us">
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
                        <img class="img-responsive management-img" src="<?php echo base_url();?>assets/images/savio-3.jpeg" alt="">
                    </div>
                    <div class="col-lg-6">
                        <h2 style="font-weight:600">Savio Vallabdas</h2>
                        <h3>Managing Director:</h3>
                        <p class="text-justify">Savio is an edutainment specialist with strategic focus on media communication and development holds a BA degree in Sociology from Oklahoma university of science and technology-USA and is working on MA in Communication and development at Daystar University. He has under taken practical training and assignments with Citizen Television and worked as Marketing officer with Radar Security Guards. Currently he is engaged in podcast production and business. Savio has passion in the elevating lives of marginalized youth through showcasing their skills, talents and innovation in various media plat-forms.</p>
                    </div>
                </div>
                <div class="section-spacing"></div>
                <div class="row">
                    <div class="col-lg-6">
                        <img class="img-responsive management-img" src="<?php echo base_url();?>assets/images/catherine.jpeg" alt="">
                    </div>
                    <!-- /.col-lg-4 -->
                    <div class="col-lg-6">
                        <h2 style="font-weight:600">Catherine Wandera Solomon</h2>
                        <h3>Program Director:</h3>
                        <p class="text-justify">Catherine Wandera Solomon holds a Master of Science in Communication Materials ???USA and a certificate in NGO Management from Manitoba Institute of management ???Canada. She is a seasoned social scientist with demonstrable communication skills of more than 30 years in Behavior Change Communication for development. She began her professional career as a lecturer in communication design at the University of Nairobi ???Kenya. Her professional technical strength lies in the development of communication, partnership and capacity building strategies, training manuals and trainer.</p>
                        <p class="text-justify">She has notable experience in research with emphasis on children and women. Catherine has held various professional positions from Country Director, Programme coordinator to Project officer/Manager. Her extensive experience has seen her undertake consultancy assignments as communication for development specialist (C4D) in health in Kenya, Somalia, Uganda, Ethiopia, Eritrea, South Sudan, Nigeria and Papua New Guinea. Catherine received the ???1995 Felix Houphouet-Boingny Peace Prize??? awarded by UNESCO in recognition of her work as UNHCR community development officer during the height of Somali war in 1993. She is a Co-founder of MAISHA KARA CHILDREN FOUNDATION and organization in building capacity of caregivers, guardians for children with special in rural communities. Catherine has been a member of Rotary International-Kenya, a member of the Association of persons with disability Kenya (APDK) and a founding board member of a national adoption society called ???Little Angels Network???.</p>
                    </div>
                </div>
                <div class="row justify-content-center pt-2">
                    <h3 style="font-size:1.9vw;font-weight:600">MAISHA KARA CHILDREN FOUNDATION ASSOCIATES</h3>
                </div>
                <!-- <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-3">
                            <div class="text-center">
                                <img class="img-responsive associate-img" src="<?php echo base_url();?>assets/images/kennedy-miheso.png" alt="">
                                <h4 class="pt-1 text-center" style="font-size:1.3vw;font-weight:600">Kennedy Miheso</h4>
                                <h4 class="text-center" style="font-size:1.3vw;font-weight:400">Associate</h4>
                                <h4 class="text-center" style="font-size:1.3vw;font-weight:400">Nairobi, Kenya</h4>
                                <div class="flex-grow-1" style="background-color:#00894d;color:white;">
                                    <p class="text-center" style="font-size:1.0vw;">Ken holds a Bachelor of Science (Statistics) Degree from the University of Nairobi and is currently pursuing a Master of Science (Statistics) from the same institution.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="text-center">
                                <img class="img-responsive associate-img" src="<?php echo base_url();?>assets/images/ronald-guda-chunguli.jpg" alt="">
                                <h4 class="pt-1 text-center" style="font-size:1.3vw;font-weight:600">Ronald Guda Chunguli</h4>
                                <h4 class="text-center" style="font-size:1.3vw;font-weight:400">Associate</h4>
                                <h4 class="text-center" style="font-size:1.3vw;font-weight:400">Nairobi, Kenya</h4>
                                <div class="pt-0" style="background-color:#00894d;color:white;">
                                    <p class="text-center" style="font-size:1.0vw;">Ronald holds a BED degree (Moi University Maseno) and also certificate in gender mainstreaming, besides other certificates human based approach to development. Ronald is an active member of Community Organizers and Practioners??? association of Kenya COPA-Kenya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="text-center">
                                <img class="img-responsive associate-img" src="<?php echo base_url();?>assets/images/fiona-shiundu.png" alt="">
                                <h4 class="pt-1 text-center" style="font-size:1.3vw;font-weight:600">Fiona Shiundu</h4>
                                <h4 class="text-center" style="font-size:1.3vw;font-weight:400">Associate</h4>
                                <h4 class="text-center" style="font-size:1.3vw;font-weight:400">Nairobi, Kenya</h4>
                                <div class="pt-0" style="background-color:#00894d;color:white;">
                                    <p class="text-center" style="font-size:1.0vw;">She is a member of the Programme for African Leadership (PfAL at LSE) and the Association of Media Women in Kenya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3">
                            <div class="text-center">
                                <img class="img-responsive associate-img" src="<?php echo base_url();?>assets/images/nyevu-kambi-tsuma.png" alt="">
                                <h4 class="pt-1 text-center" style="font-size:1.3vw;font-weight:600">Witness Nyevu Kambi Tsuma</h4>
                                <h4 class="text-center" style="font-size:1.3vw;font-weight:400">Associate-MKCF</h4>
                                <h4 class="text-center" style="font-size:1.3vw;font-weight:400">Mombasa, Kenya</h4>
                                <div class="pt-0" style="background-color:#00894d;color:white;">
                                    <p class="text-center" style="font-size:1.0vw;">Witness is an educationist with strategic focus on children with special needs and has a BA degree in community development and also holds several certificates on sign language. Currently she is the Chairman for Maendeleo ya Wanawake Kilifi County and the President for Interpreter in Africa representing the seventh day Adventists Churches.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="container">
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                        <div class="col mb-4">
                            <div class="card h-100 text-center rounded">
                                <!-- <img src="https://dummyimage.com/600x400/000/fff.jpg" class="card-img-top" alt="..."> -->
                                <img class="img-responsive associate-img card-img-top" src="<?php echo base_url();?>assets/images/kennedy-miheso.png" alt="">
                                <h5 class="pt-1 text-center"><strong>Kennedy Miheso</strong></h5>
                                <h6 class="text-center">Associate</h6>
                                <h6 class="text-center">Nairobi, Kenya</h6>
                                <div class="card-body rounded" style="background-color:#00894d;color:white;">
                                    <p class="card-text">Ken holds a Bachelor of Science (Statistics) Degree from the University of Nairobi and is currently pursuing a Master of Science (Statistics) from the same institution.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card h-100 text-center rounded">
                                <!-- <img src="https://dummyimage.com/600x400/000/fff.jpg" class="card-img-top" alt="..."> -->
                                <img class="img-responsive associate-img card-img-top" src="<?php echo base_url();?>assets/images/ronald-guda-chunguli.jpg" alt="">
                                <h5 class="pt-1 text-center"><strong>Ronald Guda Chunguli</strong></h5>
                                <h6 class="text-center">Associate</h6>
                                <h6 class="text-center">Nairobi, Kenya</h6>
                                <div class="card-body rounded" style="background-color:#00894d;color:white;">
                                    <p class="card-text">Ronald holds a BED degree (Moi University Maseno) and also certificate in gender mainstreaming, besides other certificates human based approach to development. Ronald is an active member of Community Organizers and Practioners??? association of Kenya COPA-Kenya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card h-100 text-center rounded">
                                <img class="img-responsive associate-img card-img-top" src="<?php echo base_url();?>assets/images/fiona-shiundu.png" alt="">
                                <h5 class="pt-1 text-center"><strong>Fiona Shiundu</strong></h5>
                                <h6 class="text-center">Associate</h6>
                                <h6 class="text-center">Nairobi, Kenya</h6>
                                <div class="card-body rounded" style="background-color:#00894d;color:white;">
                                    <p class="card-text">She is a member of the Programme for African Leadership (PfAL at LSE) and the Association of Media Women in Kenya.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-4">
                            <div class="card h-100 text-center rounded">
                                <img class="img-responsive associate-img card-img-top" src="<?php echo base_url();?>assets/images/nyevu-kambi-tsuma.png" alt="">
                                <h5 class="pt-1 text-center"><strong>Witness Kambi Tsuma</strong></h5>
                                <h6 class="text-center">Associate</h6>
                                <h6 class="text-center">Nairobi, Kenya</h6>
                                <div class="card-body rounded" style="background-color:#00894d;color:white;">
                                    <p class="card-text">Witness is an educationist with strategic focus on children with special needs and has a BA degree in community development and also holds several certificates on sign language. Currently she is the Chairman for Maendeleo ya Wanawake Kilifi County and the President for Interpreter in Africa representing the seventh day Adventists Churches.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="container pb-2" id="contact-us">
                <div class="row">
                    <div class="col-lg-5">
                        <h4 style="font-weight:700;">GET IN TOUCH</h4>
                        <h3 style="font-weight:0;">WITH US TODAY!</h3>
                        <hr class="ml-0" style="width:60%;border-top: 2px solid;">
                        <!-- <form action=""> -->
                        <?php
                            echo form_open('home/send_mail');
                        ?>
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
                                <button class="btn btn-secondary" type="submit" style="background-color:#00894d;font-weight:700;">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-7">
                        <h2 class="text-center">Locate Us</h2>
                        <hr>
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe width="100%" height="85%" id="gmap_canvas" src="https://maps.google.com/maps?q=kanamai&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                <a href="https://123movies-to.org"></a>
                                <br>
                                <style>.mapouter{position:relative;text-align:right;height:85%;width:100%;}</style>
                                <a href="https://www.embedgooglemap.net"></a>
                                <style>.gmap_canvas {overflow:hidden;background:none!important;height:85%;width:100%;}</style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
            <br>
            <footer class="container pb-4">
                <p class="float-right font-weight-bold">
                    <?php
                        echo anchor('#home', 'Back to top');
                    ?>
                </p>
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
                    318-80109 Mtwapa, Kenya,</p>
                    <p><span class="font-weight-bold">TELEPHONE:</span><br>
                    +254 (0) 741852129; 0722766846</p>
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
        <script src="<?php echo base_url();?>assets/bootstrap/assets/js/vendor/holder.min.js"></script>
    </body>
</html>