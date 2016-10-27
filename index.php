<?php
session_start();

$color = getThemeColor();

$video = getVideo();

function getThemeColor(){
    $lastColor = (empty($_SESSION["color"]))?"":$_SESSION["color"];
    $colors = ["blue", "green", "orange", "purple"];

    $colorRand = rand(0,3);
    while ( $colorRand == $lastColor) {
        $colorRand = rand(0,3);
    }
    $_SESSION["color"] = $colorRand;
    $color = $colors[$colorRand];
    return $color;
}

function getVideo(){
    $lastVideo = (empty($_SESSION["video"]))?"":$_SESSION["video"];
    $videos = ["1", "2"];

    $videoRand = rand(0,1);
    while ( $videoRand == $lastVideo) {
        $videoRand = rand(0,1);
    }
    $_SESSION["video"] = $videoRand;
    $video = $videos[$videoRand];
    return $video;
}
?>
<!DOCTYPE html>
<html lang="es">
    
<head>
        <meta charset="UTF-8">
        <title>CodeFull Expreciencia Web</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
        <link href="img/assets/favicon.png" rel="icon" type="image/png"> 
        <link href="css/init.css" rel="stylesheet" type="text/css">
        <link href="css/ion-icons.min.css" rel="stylesheet" type="text/css">
        <link href="css/etline-icons.min.css" rel="stylesheet" type="text/css">
        <link href="css/theme.css" rel="stylesheet" type="text/css">  
        <link href="css/custom.css" rel="stylesheet" type="text/css">
        <link href="css/colors/<?=$color?>.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CRaleway:400,100,200,300%7CHind:400,300" rel="stylesheet" type="text/css">
    </head>
    <body data-fade-in="true">

        <div class="pre-loader"><div></div></div>
        
        <!-- Start Header -->
        <nav class="navbar nav-down" data-fullwidth="true" data-menu-style="transparent" data-animation="shrink"><!-- Styles: light, dark, transparent | Animation: hiding, shrink -->
            <div class="container">
                
                <div class="navbar-header">
                    <div class="container">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                        </button>
                        <a class="navbar-brand to-top" href="#"><img src="img/assets/logo-light.png" class="logo-light" alt="#"><img src="img/assets/logo-dark.png" class="logo-dark" alt="#"></a> 
                    </div>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <div class="container">
                        <ul class="nav navbar-nav menu-right">                            
                            
                            <!-- Each section must have corresponding ID ( #hero -> id="hero" ) -->
                            <li><a href="index.php">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="servicios.php">Services</a></li>
                            <li><a href="#works">Work</a></li>
                            <li class="dropdown megamenu vos">
                                <a class="dropdown-toggle">Elements<i class="ion-ios-arrow-down"></i></a> 
                                <ul class="dropdown-menu fullwidth">
                                    <li class="megamenu-content withdesc">
                                        <div class="col-md-3 mg-col">
                                            <ul>
                                                <li><a href="elements.html#elements-accordion">Accordion</a></li>
                                                <li><a href="elements.html#elements-buttons">Buttons</a></li>
                                                <li><a href="elements.html#elements-features">Icon Features</a></li>
                                                <li><a href="elements.html#elements-bars">Progress Bars</a></li> 
                                                <li><a href="elements.html#elements-pricing">Pricing Options</a></li>
                                                <li><a href="elements.html#elements-lists">Lists</a></li>
                                                <li><a href="elements.html#elements-typography">Typography</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 mg-col">
                                            <ul>
                                                <li><a href="elements.html#elements-tabs">Tabs</a></li> 
                                                <li><a href="elements.html#elements-circles">Progress Circles</a></li>
                                                <li><a href="elements.html#elements-icons">Icon Fonts</a></li>
                                                <li><a href="elements.html#elements-maps">Google Maps</a></li>
                                                <li><a href="elements.html#elements-grid">Grid Columns</a></li>
                                                <li><a href="elements.html#elements-countdown">Countdowns</a></li>
                                                <li><a href="elements.html#elements-testimonials">Testimonials</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 mg-col">
                                            <ul>
                                                <li><a href="elements.html#elements-subscribe">Subscription</a></li>
                                                <li><a href="elements.html#elements-videos">Video Embeds</a></li>
                                                <li><a href="elements.html#elements-twitter">Twitter Feed</a></li>
                                                <li><a href="elements.html#elements-callouts">Callouts</a></li>
                                                <li><a href="portfolio-contained.html">Portfolio</a></li>
                                                <li><a href="portfolio-fullwidth.html">Portfolio Fullwidth</a></li>
                                                <li><a href="project-wide-gallery.html">Project Wide Gallery</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-3 mg-col">
                                            <ul>
                                                <li><a href="project-slides.html">Project Slides</a></li>
                                                <li><a href="project-gallery.html">Projects Gallery</a></li>
                                                <li><a href="project-video.html">Projects Video</a></li>
                                                <li><a href="project-wide-slides.html">Project Wide Slides</a></li>
                                                <li><a href="project-wide-video.html">Project Wide Video</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul> 
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle">Blog<i class="ion-ios-arrow-down"></i></a> 
                                <ul class="dropdown-menu">
                                    <li><a href="blog-standard.html">Standard Layout</a></li>
                                    <li><a href="blog-list.html">List Layout</a></li>
                                    <li><a href="blog-grid.html">Grid Layout</a></li>
                                    <li><a href="blog-post-standard.html">Standard Post</a></li>
                                    <li><a href="blog-post-gallery.html">Gallery Post</a></li>
                                    <li><a href="blog-post-video.html">Video Post</a></li>
                                    <li><a href="blog-post-fullwidth.html">Fullwidth Post</a></li>
                                </ul>
                            </li>
                            <li><a href="#contact">Contact</a></li>
                             
                            <li class="nav-separator"></li>
                            <li  class="nav-icon"><a href="http://facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                            <li  class="nav-icon"><a href="http://twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                            <li  class="nav-icon"><a href="#" target="_blank"><i class="ion-help-buoy"></i></a></li>
                        </ul>
                        
                    </div>
                </div> 
            </div>
        </nav>
        <!-- End Header -->
        
        <!-- Hero -->
        <section id="hero" class="hero-fullscreen parallax" data-overlay-dark="5">
            
            <div class="background-image">
                <video autoplay loop class="fillWidth">
                    <source src="<?=$video?>.mp4" type="video/mp4" />Your browser does not support the video tag. I suggest you upgrade your browser.
                    <source src="<?=$video?>.webm" type="video/webm" />Your browser does not support the video tag. I suggest you upgrade your browser.
                </video>
            </div>
                       
            <div class="hero-slider" data-autoplay="true" data-speed="8000" data-touch-drag="false">
                
                <div class="slide"> 
                    
                    <div class="container">  
                        <div class="row"> 
                            <div class="appear text-center"> 
                                <h1>Somos CodeFull<br><strong>Experiencia Web</strong></h1>
                                <p class="lead mb40">Somos un grupo de diseñadores y desarrolladores web, unidos con un mismo propósito, crear sitios y aplicaciones web de altura, con acabados profesionales e impecables.</p>
                                <a href="#about" class="btn btn-lg btn-primary btn-scroll">Proyectos</a>
                            </div>
                        </div> 
                    </div>   
                </div>
                
                <!-- Slide -->
                <div class="slide">
                    
                    <div class="container">  
                        <div class="row"> 
                            <div class="appear text-center"> 
                                <h1>Somos CodeFull<br><strong>Creando, Innovando</strong></h1>
                                <p class="lead mb40">Siempre pensando en tu negocio, en codefull siempre estamos en búsqueda de nuevas tecnogolías que puedan brindar un valor agregado a tu negocio.</p>
                                <a href="#about" class="btn btn-lg btn-primary btn-scroll">Servicios</a>
                            </div>
                        </div> 
                    </div>   
                </div>
                
            </div>
        </section>

        <!-- End Hero -->
        
        <!-- About Us -->
        <section id="about" class="pt100 pb90">
            <div class="container">                      
                <div class="row">    

                    <div class="col-md-12 text-center pb20">   
                        <h2>Somos CodeFull<br><strong>Más que un proveedor, somos tu aliado</strong></h2>
                        <p class="lead">Nos integramos y formamos parte de <span class="color">tu negocio</span>, construyendo soluciones específicas, con poderosas ideas.</p>
                    </div>  
                    
                    <div class="col-sm-6 feature-left">
                        <i class="icon-telescope size-3x color"></i>
                        <i class="icon-telescope back-icon color"></i> 
                        <div class="feature-left-content">
                            <h4><strong>Somos Creativos</strong><br>Creamos sin límites</h4>
                            <p>Contamos con un grupo de diseñadores y creativos apasionados por su trabajo, siempre ofreciendo un valor agregado a tu negocio. <span class="color">¡imaginando por tí, creando por tí!</span></p>
                        </div>
                        <i class="icon-expand size-3x color"></i>
                        <i class="icon-expand back-icon color"></i> 
                        <div class="feature-left-content">
                            <h4><strong>Pensamos en grande</strong><br>Codificamos para el futuro</h4>
                            <p>Sin duda, algo por lo que destacamos, es por desarrollar aplicaciones pensando en el futuro de tu negocio, escalables, con códigos re-utilizables, siempre pensando en el mañana, haciendo que tu inversión sea mucho más rentable en el futuro.</p> 
                        </div> 
                    </div>
                    <div class="col-sm-6 feature-left">
                        <i class="icon-genius size-3x color"></i>
                        <i class="icon-genius back-icon"></i> 
                        <div class="feature-left-content">
                            <h4><strong>Somos comprometidos</strong><br>Siempre disponibles a tus necesidades</h4>
                            <p>Una vez comenzado un proyecto, no descansamos hasta lograr esa agradable sensación de satisfacción en nuestros clientes. <span class="color">¡Tu éxito es nuestro éxito!</span></p> 
                        </div> 
                    </div>
                    <div class="col-sm-6 feature-left">
                        <i class="icon-global size-3x color"></i>
                        <i class="icon-global back-icon"></i> 
                        <div class="feature-left-content">
                            <h4><strong>Somos MultiSector</strong><br>¿Quien nos contrata?</h4>
                            <p>Básicamente cualquier persona o empresa con ganas de emprender un negocio, con planes de expansión, pues estamos esperandote para juntos poner en marcha tu negocio.</p>
                        </div> 
                    </div> 

                </div>
            </div>
        </section>
        <!-- End About Us -->
    
        <!-- Who We Are -->
        <section id="who-we-are" class="parallax pt40 pb40" data-overlay-dark="8">
            <div class="background-image">
                <img src="img/backgrounds/bg-2.jpg" alt="#">
            </div>
            <div class="container">   
                <div class="row vertical-align">

                    <div class="col-md-6 pr30 mt40 mb40">   
                        <h2 class="shadow"><strong>Nuestras Habilidades</strong><br><span class="color shadow">¡Sabemos hacer lo que hacemos!</span></h2>   
                    </div>

                    <div class="col-md-6 pt40 pb30">                        
                        <div class="progress-bars standard transparent-bars" data-animate-on-scroll="on">
                            <h5 class="bold shadow">Diseño web</h5>
                            <div class="progress" data-percent="95%">
                                <div class="progress-bar">
                                    <span class="progress-bar-tooltip">95%</span>
                                </div>
                            </div>
                            <h5 class="bold shadow">Diseño de marcas</h5>
                            <div class="progress" data-percent="90%">
                                <div class="progress-bar">
                                    <span class="progress-bar-tooltip">90%</span>
                                </div>
                            </div>
                            <h5 class="bold shadow">Desarrollo Web</h5>
                            <div class="progress" data-percent="95%">
                                <div class="progress-bar">
                                    <span class="progress-bar-tooltip">95%</span>
                                </div>
                            </div>
                            <h5 class="bold shadow">Desarrollo adaptativo/Responsive</h5>
                            <div class="progress" data-percent="95%">
                                <div class="progress-bar">
                                    <span class="progress-bar-tooltip">95%</span>
                                </div>
                            </div>
                            <h5 class="bold shadow">Desarrollo de aplicaiones web</h5>
                            <div class="progress" data-percent="95%">
                                <div class="progress-bar">
                                    <span class="progress-bar-tooltip">95%</span>
                                </div>
                            </div>
                            <h5 class="bold shadow">Seguridad web</h5>
                            <div class="progress" data-percent="95%">
                                <div class="progress-bar">
                                    <span class="progress-bar-tooltip">95%</span>
                                </div>
                            </div>
                            <h5 class="bold shadow">Manejo de proyectos</h5>
                            <div class="progress" data-percent="100%">
                                <div class="progress-bar">
                                    <span class="progress-bar-tooltip">100%</span>
                                </div>
                            </div>
                            <h5 class="bold shadow">Experiencia de usuario</h5>
                            <div class="progress" data-percent="90%">
                                <div class="progress-bar progress-bar-primary">
                                    <span class="progress-bar-tooltip">90%</span>
                                </div>
                            </div>
                            <h5 class="bold shadow">Desarrollo de Apps</h5>
                            <div class="progress" data-percent="70%">
                                <div class="progress-bar progress-bar-primary">
                                    <span class="progress-bar-tooltip">70%</span>
                                </div>
                            </div>
                            <h5 class="bold shadow">Diversión</h5>
                            <div class="progress" data-percent="100%">
                                <div class="progress-bar progress-bar-primary">
                                    <span class="progress-bar-tooltip">100%</span>
                                </div>
                            </div> 
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Who We Are -->
        
        <!-- Team -->
        <!--<section id="team" class="hero-fullscreen2 pt100 pb90"> 
            <div class="container">    
                <div class="row">   
                    
                    <div class="col-md-12 text-center">
                        <h2>Our Creative <strong>Collective</strong></h2>
                        <p class="lead">Interdisciplinary teams with <span class="color">big ideas</span>. Design and prototyping from day one.</p> 
                    </div>
                    
                    <div class="team-slider owl-carousel dark-pagination col-md-12"> 
                        <div class="team"> 
                            <div class="team-container">
                                <div class="team-image">
                                    <img src="img/team/1.jpg" class="img-responsive" alt="#" />
                                </div> 
                                <div class="team-caption">
                                    <div>
                                        <div> 
                                            <ul> 
                                                <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                                <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                                <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                                <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li> 
                                            </ul> 
                                        </div>
                                    </div>
                                </div>  
                            </div> 
                            <h6>Founder / CEO</h6>
                            <h5>John Westbrook</h5>
                            <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                        </div>          
                        <div class="team">
                            <div class="team-container">
                                <div class="team-image">
                                    <img src="img/team/2.jpg" class="img-responsive" alt="#" />
                                </div> 
                                <div class="team-caption">
                                    <div>
                                        <div> 
                                            <ul> 
                                                <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                                <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                                <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                                <li class="social-icon"><a href="https://www.dribbble.com/" target="_blank"><i class="ion-social-dribbble"></i></a></li> 
                                            </ul> 
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <h6>Developer</h6>
                            <h5>Kelly Swanson</h5>
                            <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                        </div>  
                        <div class="team">
                            <div class="team-container">
                                <div class="team-image">
                                    <img src="img/team/3.jpg" class="img-responsive" alt="#" />
                                </div> 
                                <div class="team-caption">
                                    <div>
                                        <div>
                                            <ul> 
                                                <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                                <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                                <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                                <li class="social-icon"><a href="https://www.dribbble.com/" target="_blank"><i class="ion-social-dribbble"></i></a></li>
                                                <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li> 
                                            </ul> 
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <h6>Designer</h6>
                            <h5>Chris Holland</h5>
                            <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                        </div> 
                        <div class="team"> 
                            <div class="team-container">
                                <div class="team-image">
                                    <img src="img/team/4.jpg" class="img-responsive" alt="#" />
                                </div> 
                                <div class="team-caption">
                                    <div>
                                        <div>
                                            <ul> 
                                                <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                                <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li> 
                                                <li class="social-icon"><a href="https://www.dribbble.com/" target="_blank"><i class="ion-social-dribbble"></i></a></li>
                                                <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li> 
                                            </ul> 
                                        </div>
                                    </div>
                                </div>  
                            </div> 
                            <h6>Art Director</h6>
                            <h5>Dave Harper</h5>
                            <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                        </div>          
                        <div class="team">
                            <div class="team-container">
                                <div class="team-image">
                                    <img src="img/team/5.jpg" class="img-responsive" alt="#" />
                                </div> 
                                <div class="team-caption">
                                    <div>
                                        <div>
                                            <ul> 
                                                <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                                <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                                <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                                <li class="social-icon"><a href="https://www.dribbble.com/" target="_blank"><i class="ion-social-dribbble"></i></a></li>
                                                <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li> 
                                            </ul> 
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <h6>Founder</h6>
                            <h5>Tracey Mathis</h5>
                            <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                        </div> 
                        <div class="team">
                            <div class="team-container">
                                <div class="team-image">
                                    <img src="img/team/6.jpg" class="img-responsive" alt="#" />
                                </div> 
                                <div class="team-caption">
                                    <div>
                                        <div>
                                            <ul> 
                                                <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                                <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                                <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li> 
                                                <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li> 
                                            </ul> 
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <h6>Developer</h6>
                            <h5>William Beck</h5>
                            <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                        </div> 
                        <div class="team">
                            <div class="team-container">
                                <div class="team-image">
                                    <img src="img/team/7.jpg" class="img-responsive" alt="#" />
                                </div> 
                                <div class="team-caption">
                                    <div>
                                        <div> 
                                            <ul> 
                                                <li class="social-icon"><a href="https://www.facebook.com/" target="_blank"><i class="ion-social-facebook"></i></a></li>
                                                <li class="social-icon"><a href="https://www.twitter.com/" target="_blank"><i class="ion-social-twitter"></i></a></li>
                                                <li class="social-icon"><a href="https://www.youtube.com/" target="_blank"><i class="ion-social-youtube"></i></a></li>
                                                <li class="social-icon"><a href="https://www.linkedin.com/" target="_blank"><i class="ion-social-linkedin"></i></a></li> 
                                            </ul> 
                                        </div>
                                    </div>
                                </div>  
                            </div>
                            <h6>Designer</h6>
                            <h5>Steven Griffin</h5>
                            <p>Vivamus motestues phasellus enim sed orci eu pharetra. Donec posuere nunc vitae tortor sagittis feugiat in non massa. Quisqueeas sed mi nec.</p>
                        </div> 
                    </div>
                        
                </div>  
            </div>
        </section>-->
        <!-- End Team --> 
        
        <!-- Video Section -->
        <!--<section class="parallax pt40 pb40" data-overlay-light="9"> 
            <div class="background-image">
                <img src="img/backgrounds/bg-3.jpg" alt="#">
            </div>
            <div class="container">   
                <div class="row vertical-align">

                    <div class="col-md-6 pr30 mt40 mb40">   
                        <h2><strong>We're Creative</strong><br>Crafting With Love</h2>   
                        <p>Fusce faucibus tincidunt nulla, tincidunt sagittis magna venenatis quis. Proin commodo eu ipsum eu suscipit. In dapibus arcu sit amet imperdiet. Praesent condimentum nulla at mauris ornare. Praesent condimentum nulla at mauris ornare, eget consequat felis euismod. Praesent condimentum nulla at mauris ornare.</p>
                        <p>Praesent condimentum nulla at mauris ornare, eget consequat felis euismod. Praesent condimentum nulla at mauris ornare. Fusce faucibus tincidunt nulla, tincidunt sagittis magna venenatis quis. Proin commodo eu ipsum eu suscipit.</p> 
                    </div>

                    <div class="col-md-6  mt50 mb50">
                        <div class="video-container">
                            <img src="img/video/thumbnail-youtube.jpg" />
                            <iframe data-video-embed="https://www.youtube.com/embed/B08iLAtS3AQ"></iframe>
                        </div>                        
                    </div>

                </div>
            </div>
        </section>-->
        <!-- End Video Section --> 
        
        <!-- Fun Facts -->
        <section id="fun-facts" data-animate="true">
            <div class="container-fluid"> 
                <div class="row">

                    <div class="col-sm-3 counter"> 
                        <h1 class="bold" data-count="4246"></h1> 
                        <h5>Happy Customers</h5> 
                    </div>
                    <div class="col-sm-3 counter"> 
                        <h1 class="bold" data-count="618"></h1> 
                        <h5>Finished Projects</h5> 
                    </div>
                    <div class="col-sm-3 counter"> 
                        <h1 class="bold" data-count="240"></h1> 
                        <h5>Tickets Solved</h5> 
                    </div> 
                    <div class="col-sm-3 counter"> 
                        <h1 class="bold" data-count="96"></h1> 
                        <h5>Winning Awards</h5> 
                    </div>

                </div> 
            </div>
        </section>
        <!-- End Fun Facts -->

        <!-- Quotes -->
        <section id="quotes" class="parallax pt100 pb90" data-overlay-dark="8">
            <div class="container">   
                <div class="row">
                    <div class="col-md-12 text-center shadow">
                        <h1 class="color"><strong>Curiosidades CodeFull</strong></h1>
                    </div>
                </div>
            </div>
            <div class="background-image">
                <img src="img/backgrounds/bg-4.jpg" alt="#">
            </div>
            <div class="container">   
                
                <div class="row">
                    <div class="col-md-12">   
                        <div class="quote-slider navigation-thin container white text-center" data-autoplay="true" data-speed="8000">
                            <div>
                                <h2 class="shadow">
                                    <i class="vossen-quote color"></i>
                                       <strong class="color">Diseño perfecto </strong><br> Inspiración + Pasión + Dedicación + (Tasa de cafe * 10<sup>10</sup>)
                                    <i class="vossen-quote color"></i>
                                </h2>
                                <p class="label label-primary">Creativos CodeFull</p>
                            </div>
                            <div>
                                <h2 class="shadow">
                                    <i class="vossen-quote color"></i>
                                        <strong class="color">Programación perfecta </strong><br> Capacidad + Concentración + Ingenio + 1 Xbox  One
                                    <i class="vossen-quote color"></i>
                                </h2>
                                <p class="label label-primary">Desarrollo CodeFull</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End Quotes --> 
        
        <!-- Services -->  
        <!--<section id="services" class="pt100 pb90">
            <div class="container">                      
                <div class="row">

                    <div class="col-md-12 text-center pb20">   
                        <h2 class="">What We Do<br><strong>Our Capabilities</strong></h2>
                        <p class="lead">A highly skilled professional service with a <span class="color">creative touch</span>.</p>
                    </div> 
                    
                    <div class="col-md-4 col-sm-6 feature-left">
                        <i class="icon-telescope size-3x color"></i>
                        <i class="icon-telescope back-icon"></i> 
                        <div class="feature-left-content">
                            <h4><strong>Graphic Design</strong><br>Crafting With Love</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                        </div> 
                    </div>
                    <div class="col-md-4 col-sm-6 feature-left">
                        <i class="icon-circle-compass size-3x color"></i>
                        <i class="icon-circle-compass back-icon"></i> 
                        <div class="feature-left-content">
                            <h4><strong>Modern Coding</strong><br>Crafting With Love</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p> 
                        </div> 
                    </div>
                    <div class="col-md-4 col-sm-6 feature-left">
                        <i class="icon-genius size-3x color"></i>
                        <i class="icon-genius back-icon"></i> 
                        <div class="feature-left-content">
                            <h4><strong>Web Optimization</strong><br>Lightning Fast</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p> 
                        </div> 
                    </div> 

                    <div class="col-md-4 col-sm-6 feature-left">
                        <i class="icon-layers size-3x color"></i>
                        <i class="icon-layers back-icon"></i> 
                        <div class="feature-left-content">
                            <h4><strong>Brand Indentity</strong><br>Making a New You</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                        </div> 
                    </div>
                    <div class="col-md-4 col-sm-6 feature-left">
                        <i class="icon-gears size-3x color"></i>
                        <i class="icon-gears back-icon"></i> 
                        <div class="feature-left-content">
                            <h4><strong>24/7 Free Support</strong><br>Free Support</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p> 
                        </div> 
                    </div>
                    <div class="col-md-4 col-sm-6 feature-left">
                        <i class="icon-globe size-3x color"></i>
                        <i class="icon-globe back-icon"></i> 
                        <div class="feature-left-content">
                            <h4><strong>Having Fun</strong><br>Office Surfing</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p> 
                        </div> 
                    </div> 

                </div>
            </div>
        </section>-->
        <!-- End Services -->
        
        <!-- Callout -->
        <!--<section class="parallax light bg-img-9" data-overlay-light="9">
            <div class="background-image">
                <img src="img/backgrounds/bg-5.jpg" alt="#">
            </div>
            <div class="container pt100 pb100"> 
                <div class="row pt20"> 						

                    <div class="col-md-12 text-center"> 
                        <h2>Ready to <span class="bold">Kickstart</span> Your Project</h2> 
                        <p class="lead">Use Wunderkind to build <span class="color">amazing</span> new website</p>
                        <a href="http://themeforest.net/user/vossendesign/portfolio?ref=VossenDesign" target="_blank" class="btn btn-md btn-primary btn-appear mt30"><span>Purchase Now <i class="ion-checkmark"></i></span></a>
                    </div> 

                </div>
            </div>
        </section>-->
        <!-- End Callout --> 
        
        <!-- Portfolio -->
        <!--<section id="works" class="pt100 pb110">
            <div class="container">
                <div class="row text-center">    

                    <div class="col-md-12 text-center pb20">   
                        <h2>Take a Look at<br><strong>Some of Our Work</strong></h2>
                        <p class="lead">Wide range of <span class="color">successful</span> digital and print projects.</p>
                    </div>
                    
                    <div class="portfolio" data-gap="20">
                            
                        <ul class="vossen-portfolio-filters" data-initial-filter="*">
                            <li data-filter="*">Show All</li>
                            <li data-filter="Branding">Branding</li>
                            <li data-filter="Digital">Digital</li>
                            <li data-filter="Print">Print</li>
                        </ul>
                        
                        <div class="vossen-portfolio">
                            
                            <div class="col-md-4 col-sm-6" data-filter="Branding">
                                <a href="project-slides.html">
                                    <div class="portfolio-item">
                                        <div class="item-caption">
                                            <h4>Wunderkind</h4>
                                            <p>Branding</p>
                                        </div>
                                        <div class="item-image">
                                            <img alt="#" src="img/portfolio/1.jpg" />
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6" data-filter="Digital">
                                <a href="project-slides.html">
                                    <div class="portfolio-item">
                                        <div class="item-caption">
                                            <h4>iWatch App</h4>
                                            <p>Digital</p>
                                        </div>
                                        <div class="item-image">
                                            <img alt="#" src="img/portfolio/2.jpg" />
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-12" data-filter="Branding Digital">
                                <a href="project-slides.html">
                                    <div class="portfolio-item">
                                        <div class="item-caption">
                                            <h4>Wunder Hero</h4>
                                            <p>Branding</p>
                                        </div>
                                        <div class="item-image">
                                            <img alt="#" src="img/portfolio/3.jpg" />
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-8 col-sm-6" data-filter="Branding">
                                <a href="project-slides.html">
                                    <div class="portfolio-item">
                                        <div class="item-caption">
                                            <h4>Thom Business Cards</h4>
                                            <p>Branding &amp; Digital</p>
                                        </div>
                                        <div class="item-image">
                                            <img alt="#" src="img/portfolio/4.jpg" />
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6" data-filter="Print Digital">
                                <a href="project-slides.html">
                                    <div class="portfolio-item">
                                        <div class="item-caption">
                                            <h4>Label Mockup</h4>
                                            <p>Print Category</p>
                                        </div>
                                        <div class="item-image">
                                            <img alt="#" src="img/portfolio/5.jpg" />
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6" data-filter="Print">
                                <a href="project-slides.html">
                                    <div class="portfolio-item">
                                        <div class="item-caption">
                                            <h4>Letter Mockup</h4>
                                            <p>Print Category</p>
                                        </div>
                                        <div class="item-image">
                                            <img alt="#" src="img/portfolio/6.jpg" />
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6" data-filter="Print">
                                <a href="project-slides.html">
                                    <div class="portfolio-item">
                                        <div class="item-caption">
                                            <h4>Boxed Cards</h4>
                                            <p>Print Work</p>
                                        </div>
                                        <div class="item-image">
                                            <img alt="#" src="img/portfolio/7.jpg" />
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6" data-filter="Branding">
                                <a href="project-gallery.html">
                                    <div class="portfolio-item">
                                        <div class="item-caption">
                                            <h4>Thanks Letter</h4>
                                            <p>Branding</p>
                                        </div>
                                        <div class="item-image">
                                            <img alt="product" src="img/portfolio/8.jpg" />
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-md-4 col-sm-6" data-filter="Branding Digital">
                                <a href="project-slides.html">
                                    <div class="portfolio-item">
                                        <div class="item-caption">
                                            <h4>Flying Mac</h4>
                                            <p>Branding</p>
                                        </div>
                                        <div class="item-image">
                                            <img alt="product" src="img/portfolio/9.jpg" />
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                    
                    <a href="portfolio-contained.html" class="btn btn-md btn-light btn-appear mt30"><span>View All <i class="ion-arrow-right-c"></i></span></a>
                
                </div>
            </div>
        </section>-->
        <!-- End Portfolio --> 
        
        <!-- Testimonials -->   
        <!--<section id="testimonials" class="parallax pt100 pb90" data-overlay-dark="9">
            <div class="background-image">
                <img src="img/backgrounds/bg-6.jpg" alt="#">
            </div>
            <div class="container"> 
                <div class="row"> 						

                    <div class="col-md-12 text-center pb20">
                        <h2>What Clients<br><strong>Say About Us</strong></h2>
                    </div>

                    <div class="col-md-12 text-center">
                        
                        <div class="testimonials quote-icons" data-autoplay="false" data-speed="4000"> 

                            <div>
                                <p>
                                    <i class="vossen-quote color"></i>
                                    This guys are amazing! They were so quick to respond and let me tell you, they are all knowing!<br><span class="color">I highly recommend</span> their themes! They are all about making their clients happy!
                                    <i class="vossen-quote color"></i>
                                </p>   
                                <h5><strong>Jack Westbrook</strong></h5>
                                <p class="occupation">Product Designer</p>
                            </div> 

                            <div> 
                                <p>
                                    <i class="vossen-quote color"></i>
                                    I have purchased tens of templates from ThemeForest and this one is undoubtedly the best<br>I ever tried. <span class="color">Easy to edit,</span> nicely coded. You guys, you did a great job here!
                                    <i class="vossen-quote color"></i>
                                </p>  
                                <h5><strong>Lindsay Swanson</strong></h5>
                                <p class="occupation">Web Designer</p>
                            </div> 

                            <div> 
                                <p>
                                    <i class="vossen-quote color"></i>
                                    This is one of the best themes that I bought on ThemeForest. It is well documented and <br>well coded but the best of all is the <span class="color">friendly and quick support</span> behind.
                                    <i class="vossen-quote color"></i>
                                </p> 
                                <h5><strong>Jared Jackson</strong></h5>
                                <p class="occupation">UX Designer</p>
                            </div> 

                        </div>
                        
                    </div> 
                    
                </div>
            </div>
        </section>-->
        <!-- End Testimonials -->

        <!-- Clients Section -->
        <!--<section class="pt70 pb70">
            <div class="container"> 
                <div class="row">	 

                    <div class="clients-slider" data-autoplay="false" data-speed="4000"> 
                        <div><img src="img/clients/1.png" class=" " alt="#"></div>  
                        <div><img src="img/clients/2.png" class="img-responsive" alt="#"></div> 
                        <div><img src="img/clients/3.png" class="img-responsive" alt="#"></div> 
                        <div><img src="img/clients/4.png" class="img-responsive" alt="#"></div> 
                        <div><img src="img/clients/5.png" class="img-responsive" alt="#"></div> 
                        <div><img src="img/clients/6.png" class="img-responsive" alt="#"></div> 
                        <div><img src="img/clients/7.png" class="img-responsive" alt="#"></div> 
                        <div><img src="img/clients/8.png" class="img-responsive" alt="#"></div> 
                        <div><img src="img/clients/9.png" class="img-responsive" alt="#"></div> 
                    </div>

                </div>
            </div>
        </section>-->
        <!-- End Clients -->  
        
        <!-- Get Connected -->  
        <!--<section class="parallax pt100 pb100" data-overlay-dark="9">
            <div class="background-image">
                <img src="img/backgrounds/bg-7.jpg" alt="#">
            </div>
            <div class="container">                      
                <div class="row">

                    <div class="col-sm-8 mr-auto text-center">
                        <h2>Get Connected<br><strong>Follow Us</strong></h2>
                        <p class="lead">Get connected with us on social networks!</p>
                    </div>
                    
                    <div class="col-md-12">
                        <ul class="connected-icons social-icons">

                            <li class="connected-icon">
                                <a target="_blank" href="#">
                                    <i class="ion-social-facebook"></i>
                                    <h5>Facebook</h5>
                                    <p>Be Our Friend</p>
                                </a>
                            </li>

                            <li class="connected-icon">
                                <a target="_blank" href="#">
                                    <i class="ion-social-youtube"></i> 
                                    <h5>Youtube</h5>
                                    <p>Watch Our Videos</p>
                                </a>
                            </li>

                            <li class="connected-icon">
                                <a target="_blank" href="#">
                                    <i class="ion-social-twitter"></i>
                                    <h5>Twitter</h5>
                                    <p>Follow Us</p>
                                </a>
                            </li>

                            <li class="connected-icon">
                                <a target="_blank" href="#">
                                    <i class="ion-social-instagram"></i>
                                    <h5>Instagram</h5>
                                    <p>See Our Pictures</p>
                                </a>
                            </li>  

                            <li class="connected-icon">
                                <a target="_blank" href="#">
                                    <i class="ion-social-googleplus"></i>
                                    <h5>Google+</h5>
                                    <p>Join Our Circle</p>
                                </a>
                            </li>

                            <li class="connected-icon">
                                <a target="_blank" href="#">
                                    <i class="ion-social-skype"></i> 
                                    <h5>Skype</h5>
                                    <p>Get in Touch</p>
                                </a>
                            </li>

                        </ul>        
                    </div>
                </div>
            </div>
        </section>-->
        <!-- End Get Connected -->

        <!-- Start Price List -->
        <!--<section class="pt100 pb100 pricing-1">
            <div class="container">
                <div class="row"> 
                    
                    <div class="col-md-12 text-center pb20">   
                        <h2>Pick Some of<br><strong>Our Latest Offers</strong></h2>
                        <p class="lead">Try for <span class="color">free</span> - Start paying when you're ready.</p>
                    </div>

                    <div class="col-lg-10 col-md-12 mr-auto">
                        
                        <div class="col-md-4 price-table">
                            <div class="price-box"> 
                                <h5><strong>Starter</strong></h5>
                                <h1 class="bold price-price">
                                    <span>Free</span> 
                                </h1>
                                <div class="price-features">  
                                    <p class="lead">25,000 Visits</p>
                                    <p>Limited Email Support</p>
                                    <p><i class="ion-close-round"></i></p>
                                    <p><i class="ion-close-round"></i></p>
                                    <p><i class="ion-close-round"></i></p>
                                </div>
                                <a href="#" class="btn btn-primary btn-md btn-appear"><span>Sign Up Now <i class="ion-android-arrow-forward"></i></span></a>
                            </div>
                        </div>

                        <div class="col-md-4 price-table-featured">
                            <div class="price-box"> 
                                <h5><strong>Growth</strong></h5>
                                <h1 class="bold price-price"> 
                                    <sup>$</sup>
                                    <span>19</span> 
                                </h1>
                                <div class="price-features">  
                                    <p class="lead">75,000 Visits</p>
                                    <p>Email Support</p> 
                                    <p>24/7 Free Support</p>
                                    <p>5GB Bandwidth</p>
                                    <p>100GB Storage</p> 
                                    <p>Free Upgrades</p>
                                </div>
                                <a href="#" class="btn btn-primary btn-md btn-appear"><span>Sign Up Now <i class="ion-android-arrow-forward"></i></span></a>
                            </div>
                        </div> 

                        <div class="col-md-4 price-table">
                            <div class="price-box"> 
                                <h5><strong>Premium</strong></h5>
                                <h1 class="bold price-price"> 
                                    <sup>$</sup>
                                    <span>59</span> 
                                </h1>
                                <div class="price-features">  
                                    <p class="lead">225,000 Visits</p>
                                    <p>Phone Support</p> 
                                    <p>24/7 Free Support</p>
                                    <p>900GB Bandwidth</p>
                                    <p>1000TB Storage</p> 
                                </div>
                                <a href="#" class="btn btn-primary btn-md btn-appear"><span>Sign Up Now <i class="ion-android-arrow-forward"></i></span></a>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
        </section>-->
        <!-- End Price List -->
        
        <!-- Contact Info -->
        <!--<section class="parallax pt110 pb70" data-overlay-dark="8">
            <div class="background-image">
                <img src="img/backgrounds/bg-8.jpg" alt="#">
            </div>
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-12 details white text-center">
                        <div class="phone-number mb10">
                            <h1 class="bold">48-1516-2342</h1>
                        </div>
                        <div class="col-lg-12">
                            <h3>hello@<span class="color">domain.com</span></h3>
                            <h4>124 Central West, Manhattan, <span class="color">New York</span></h4>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>-->
        <!-- End Contact Info -->
        
        <!-- Contact Form -->    
        <section id="contact" class="pt120 pb100">
            <div class="container">
                <div class="row">     
                    
                    <div class="col-md-12 text-center pb20">   
                        <h2><strong>Contáctanos</strong></h2>
                        <p class="lead">Nos gustaría <span class="color">saber de ti</span></p>
                    </div>
                    
                    <div class="col-md-8 col-md-offset-2 contact box-style"> 
                        <div id="message-info"></div>
                        <!-- Forms can be functional only on server. Upload to your server when testing. -->
                        <form id="contactform" method="post"> 
                            
                            <div class="col-sm-12">
                                <input name="name" id="name" placeholder="Como te llamas? *"/>
                            </div>
                            <div class="col-sm-6">
                                <input name="email" id="email" placeholder="Necesitamos un email para contactarte *"/>
                            </div>
                            <div class="col-sm-6">
                                <input name="phone" id="phone" placeholder="Si dejas tu número de teléfono y te llamamos?"/>
                            </div>
                            <div class="col-sm-12"> 
                                <textarea name="message" rows="9" id="message" placeholder="Cuentanos brevemente lo que tienes en mente... *"></textarea>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="submit btn btn-lg btn-primary" id="submit" value="Listo"/>
                            </div>
                            
                        </form>
                    </div>  

                </div>
            </div>
        </section>
        <!-- End Contact Form -->
        
        <!-- Google Map -->
        <!--<section 
            id="vossen-map"
            data-map-address="160 Central Park West, New York, NY 10023, USA"
            data-marker-info="Come visit us today!<br>4th West St, New York"
            data-maps-api-key="AIzaSyBD3JE1T5ssqLMdfRgR1bErpuWNBtIMHbI"
            data-map-zoom="16"
            data-map-height="500px"
            data-map-style="light">
        </section>-->
        <!-- End Google Map -->
        
        <!-- Start Footer -->
        <footer id="footer" class="footer style-1 dark">

            <a href="index.html"><img src="img/assets/footer-logo.png" alt="#" class="mr-auto img-responsive"></a>
            <ul>
                <li><a href="https://www.twitter.com/" target="_blank" class="color"><i class="ion-social-twitter"></i></a></li>
                <li><a href="https://www.facebook.com/" target="_blank" class="color"><i class="ion-social-facebook"></i></a></li>
                <li><a href="https://www.linkedin.com/" target="_blank" class="color"><i class="ion-social-linkedin"></i></a></li>
                <li><a href="https://www.pinterest.com/" target="_blank" class="color"><i class="ion-social-pinterest"></i></a></li> 
                <li><a href="https://plus.google.com/" target="_blank" class="color"><i class="ion-social-googleplus"></i></a></li> 
            </ul>
            <a href="http://www.codefull.com.ve/"><strong>© CodeFull <?=date("Y")?></strong></a>
            <p>Hecho por grandes personas.</p>
            
            <!-- Back To Top Button -->
            <span><a class="scroll-top"><i class="ion-chevron-up"></i></a></span>
            
        </footer>
        <!-- End Footer -->
        
        <script src="js/jquery.js"></script>
        <script src="js/init.js"></script>
        <script src="js/scripts.js"></script>
       
    </body>

</html>