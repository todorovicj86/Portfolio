<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Web Developer Portfolio">
        <meta name="keywords" content="HTML,CSS,JavaScript, jQuery, front-end, portfolio, web development">
        <meta name="author" content="Jelena Todorovic">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>jelenatodorovic.com</title>
        
        <!-- LOCAL -->
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <script src="assets/js/gen_validatorv31.js" type="text/javascript"></script>
       
        
        <!-- HOSTED -->
        <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.materialdesignicons.com/3.6.95/css/materialdesignicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" async></script>


  
    </head>
    <body>
        <header id="home">
            <div class="col col-right profile-img img-right fade-in"></div>
    
            <div class="col col-left pos-rel">
                
                <div id="title" class="centered fade-in">
                    <h1>
                        Hello! <br>
                        My name is Jelena Todorovi&#263;,
                    </h1>
                    <h3>and I am a front-end web developer</h3>
                    <a href="#projects" class = "btn">View Portfolio</a>
            
                </div>
            </div>        

            <!-- full-screen background for menu -->
            <div id="menu" class="overlayer"></div>

            <!-- Button to open the menu -->
            <a href="javascript:void(0)" data-toggle="collapse" data-target="navigation"  id="toggle">&#9776;</a>
            
            <!-- Button to close the menu -->
            <a href="javascript:void(0)" data-toggle="collapse" data-target="navigation" id="close">&times;</a>
            
            <!-- Menu/navigation items -->
            <nav>
                <ul>
                    <li><a href="#home" class="scroll_to">Home</a></li>
                    <li><a href="#about" class="scroll_to">About</a></li>
                    <li><a href="#skills" class="scroll_to">Skills</a></li>
                    <li><a href="#services" class="scroll_to">Services</a></li>
                    <li><a href="#projects" class="scroll_to">Projects</a></li>
                    <li><a href="#contact" class="scroll_to">Contact</a></li>
                </ul>
            </nav>
        </header>

        <main>
            <section id="about">
                <div id = "about-me-img" class ="col col-left profile-img img-left"></div>
                <div class="col col-right text-right pos-rel">
                    <div class ="text">
                        <h2>About me</h2>
                        
                        <h5>I am a self-thought freelance front-end web developer, currently situated in Serbia, getting ready for a new adventure!</h5>
                        <hr>
                        <p>
                            <span>Briefly: </span>I was born and raised in Bosnia and Herzegovina. 
                            I gained a Masters degree in <a href="http://www.ftn.uns.ac.rs/n159937925/departman-za-gradjevinarstvo-i-geodeziju" target="_blank" rel="noopener"><strong>Civil Engineering.</strong></a> in Serbia. 
                            For six years I worked as a doctoral researcher at the <a href="https://bwk.kuleuven.be/English" target="_blank" rel="noopener"><strong>KU Leuven University</strong></a> in Belgium.    
                        </p>
                        <br>
                        <p><span>And how come I am a front-end web developer?</span></p>
                        <p>
                            Well, I got too uncomfortable in my comfort zone, so it was time for a change!
                            I was craving for something new and different from everything that I have already done. 
                            Since I love creating, I love learning - I consider myself a forever-student - I love solving problems, and making things work, 
                            a birdie told me - web development. I started researching about it, tried <span class = "tooltip">this<span class="tooltip-text">HTML</span></span> and <span class = "tooltip"> that<span class="tooltip-text">CSS</span></span>, 
                            read more, tried <span class = "tooltip">more<span class="tooltip-text">JavaScript and jQuery</span></span>, and voila, I fall in love with it!
                        </p>
                        <p>
                        But web development is not the only thing that interests me. Personally, I am the happiest when I am traveling - I would go to the furthest and the tiniest places in the world. 
                            I get energy from a good HIIT training, I find a feeling of peace doing yoga and meditating, or spending time in nature.
                        </p>
               
                        <p>
                            Now that you have a small glimpse about who I am, if you find me interesting and want to work together, or you are an employer looking to hire,
                             reach out to <a href="mailto:todorovicj86@gmail.com"><strong>todorovicj86@gmail.com</strong></a> to connect!
                        </p>
                        <hr>
                       
                    </div>
                </div>
            </section>
            <section id="skills">
                <div class="parallax"></div>
                <div class="white-layer"></div>
                <div class="container">
                    <h2>Skills</h2>
                    <div class="row row-1">
                        <div class="card">
                            <img class="icons-service" src="images/icons/html.svg" alt="html icon">
                        </div>
                        <div class="card">
                            <img class="icons-service" src="images/icons/css.svg" alt="css icon">
                        </div>
                        <div class="card">                        
                            <img class="icons-service" id="js-icon" src="images/icons/java2.png" alt="javascript icon">
                        </div>
                        <div class="card">                        
                            <img class="icons-service icon-big jquery" src="images/icons/jQueryBig.svg" alt="jquery icon">                        
                        </div>
                        <div class="card">                        
                            <img class="icons-service icon-sass" src="images/icons/Sass_Logo_Color.svg" alt="sass icon">                        
                        </div>
                        <div class="card">                        
                            <img class="icons-service" src="images/icons/bootstrap.svg" alt="bootstrap icon">                        
                        </div>
                    </div>
                    <div class="row row-2">
                        <div class="card">                        
                            <img class="icons-service icon-big jquery" src="images/icons/jQueryBig.svg" alt="jquery icon">                        
                        </div>
                        <div class="card">                        
                            <img class="icons-service icon-sass" src="images/icons/Sass_Logo_Color.svg" alt="sass icon">                        
                        </div>
                        <div class="card">                        
                            <img class="icons-service" src="images/icons/bootstrap.svg" alt="bootstrap icon">                        
                        </div>
                    </div>
                </div>
            </section>

            <section id="services">
                <div class="container">
                    <h2>Services</h2>
                  
                    <div class="card">
                        <div class="card-header">
                            <img class="icons-service" src="images/icons/front-end-developer-80x80.png" alt="Front-end Development">
                        </div>
                        <div class="card-body">
                            <h4>Front-end</h4>
                            <p> I like bringing the website's designs live in a browser, using HTML, CSS and JavaScript. <br>
                        </p>
                                
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <img class="icons-service" src="images/icons/svg-4-512-80x80.png" alt="Responsiveness">
                        </div>
                        <div class="card-body">
                            <h4>Responsiveness</h4>
                            <p>My layouts are responsive and work on all modern devices and screen sizes.</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <img class="icons-service" src="images/icons/37-512-80x80.png" alt="Creative Thinking">
                        </div>
                        <div class="card-body">
                            <h4>UX/UI</h4>
                            <p>I value an intuitive, easy-to-use structure, clean and simple design with subtle interactions.
                                </p>
                        </div>
                    </div>                        
                </div>
            </section>
          
            <section id="projects">
                <div class="container">
                    <h2>Projects</h2>
                     <!-- Modal for projects -->
                    <div id="modal-overlayer" class ="overlayer"></div>
                    <div id="modal">
                        <div class="carousel-wrap">
                            <div class="carousel">
                                <div class="slide"></div>
                                <div class="slide"></div>
                                <div class="slide"></div>
                                <div class="slide"></div>
                                <div class="slide"></div>
                            </div>
                            <a id="next"><i class="mdi mdi-chevron-right"></i></a>
                            <a id="prev"> <i class="mdi mdi-chevron-left"></i> </a>
                        </div>
                        <div class="modal-content">
                            <div><h4 class="modal-title">This is modal title</h4></div>
                            <div><p class="modal-subtitle"><em>This is modal title</em></p></div>
                            <hr>
                            <div class="modal-description">This is modal description</div>
                        </div>
                        
                        <div class = "modal-footer">
                            <a id="github_site" href="" target="_blank">Code</a>
                            <a id="website" href="" target="_blank">Website</a>
                            <a href="javascript:void(0)" id="close-modal"><i class="mdi mdi-close"></i></a>
                        </div>
                    
                    </div>
                    
                    <div class="card projects-img" id = "portfolio">
                        <div class="card-content">
                            <div class="card-content-text">
                                <h4>Portfolio</h4>
                                <p>
                                    HTML, CSS, JavaScript, jQuery, PHP
                                </p>
                                <a class="details" href="javascript:void(0)">More</a>
                           </div>
                        </div>
                    </div>
                
                    <div class="card projects-img" id = "realestate">
                        <div class="card-content">
                            <div class="card-content-text">
                                <h4>Concept of a Real Estate Site</h4>
                                <p>
                                    HTML, CSS, JavaScript, jQuery
                                </p>
                                <a class="details" href="javascript:void(0)">More</a>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="card projects-img" id = "todo">
                
                        <div class="card-content">
                            <div class="card-content-text">
                                <h4>ToDo App</h4>
                                <p>
                                    Front-end Development
                                </p>
                                <a class="details" href="javascript:void(0)">More</a>
                            </div>
                        </div>
                    </div> -->

                    <div class="card projects-img" id = "fylo">
                        <div class="card-content">
                            <div class="card-content-text">
                                <h4>Fylo</h4>
                                <p>
                                    HTML, CSS, Sass, Bootstrap
                                </p>
                                <a class="details" href="javascript:void(0)">More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        
            <section id="contact">
                <div class="container">
                    <h2><em class="white">Let's create together!</em></h2>
                    <h3 class="white">Contact me!</h3>
                    <h5 class="white">I would love to hear your ideas!</h5><br>
                    <div class="row-contact">
                        <div id="contact-info" class="column">
                            <p>
                                <a class="icons-social" href="mailto:todorovicj86@gmail.com" target="_blank" rel="noopener"><i class="fa fa-envelope"></i>todorovicj86@gmail.com</a>
                                <a class="icons-social" href="https://github.com/todorovicj86" target="_blank" rel="noopener"><i class="fa fa-github"></i>www.github.com/todorovicj86</a>
                                <a class="icons-social" href="https://www.linkedin.com/in/todorovicj86/" target="_blank" rel="noopener"><i id="linkedin" class="fa fa-linkedin"></i>www.linkedin.com/in/todorovicj86</a>
                            </p>
                        </div>

                        <div id="message-form" class="column">
                            <form method="POST" name="contactform" action="contact-form-handler.php">
                                <div class="contact-row">
                                    <div class="col-contact left">
                                        <label for="name">Name</label>
                                        <input name="name" id="name" type="text" placeholder="Full name...">
                                    </div>
                                    <div class="col-contact right">
                                        <label for="email">Email</label>
                                        <input name="email" id="email" type="email" placeholder="Your email...">
                                    </div>
                                </div>
                                <div class="contact-row">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Your message..."></textarea>
                                </div>
                                <div class="btn-contain">
                                    <button class="btn btn-contact btn-clear" id="btn-clear" type="reset">Clear</button>
                                    <button class="btn btn-contact" type="submit">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <div class="container">                
                <p>Jelena Todorovi&#263; <span>&copy;2019</span> All Rights Reserved.</p>
            </div>
        </footer>
        
        <!-- LOCAL -->
        <script type="text/javascript" src="assets/js/index.js" async></script>    
    </body>
</html>