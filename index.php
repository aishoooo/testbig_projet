<?php include_once "includes/header.php";?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portefolio Paul CHRETIEN</title>
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="slick/slick.min.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="css/templatemo-upright.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    
    <!--brython-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/brython@3.9.5/brython.min.js"></script>

    <!--fancybox-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    
    <!--mail-->
    <script src="js/index.js"></script>
  
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function(){
            emailjs.init("bQfjqwbzUQGL-oQFX");
        })();
    </script>

</head>
<body onload="brython()">
    <div class="container-fluid">
        <div class="row">
            <!-- Leftside bar -->
            <div id="tm-sidebar" class="tm-sidebar">
                <nav class="tm-nav">
                    <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div>
                        <div class="tm-brand-box">
                            <h1 class="tm-brand">Paul CHRETIEN</h1>
                        </div>
                        <ul id="tm-main-nav">
                            <li class="nav-item">
                                <a href="#home" class="nav-link current">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-home nav-icon"></i>
                                    Acceuil
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#projet" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-images nav-icon"></i>
                                    Mes Projets
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#about" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-user-friends nav-icon"></i>
                                    Paul
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#jeu" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-envelope nav-icon"></i>
                                    Mes jeux
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#contact" class="nav-link">
                                    <div class="triangle-right"></div>
                                    <i class="fas fa-envelope nav-icon"></i>
                                    Contact
                                </a>
                            </li>
                            <button id="openModal" class="custom-btn btn-primary">Indice pour l'easter egg</button>

                            <div id="myModal" class="modal">
                            <div class="modal-content ">
                                <span class="close">&times;</span>
                                <p>Indice: Sherlock Holmes inspecte partout meme dans la casier n°138 du Chef Santa habittant a Singapour </p>
                            </div>
                            </div>
                        </ul>
                        <div class="tm-section-wrap tm-copyright row fixed-bottom" color='darck'>
                    
                        <div class="col-12">
                        <div class="text-right">
                            Copyright @paulchretien 2023-04
                        </div>
                    </div>
                </div>
                    </div>
                    <footer class="mb-3 tm-mt-100">
                    <button type="button" class="btn btn-primary btn-sm border-0"
                    style="background-color:#fff;font-size:0.5rem;"
                    onclick="window.location.href='admin/login.php'">1</button>
                </footer>
                </nav>
            </div>
            
            <div class="tm-main">
                <!-- Home section -->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" id="myImg" data-image-src="images/CHRETIEN.jpg"></div>
                    <section id="home" class="tm-section">
                        <h2 class="tm-text-primary">Bienvenue sur le Portfolio de Paul CHRETIEN</h2>
                        <canvas id="myCanvas" width="600" height="50"></canvas>
                        <div class="row">
                            <div class="col-lg-6 tm-col-home mb-4">
                                <div class="tm-text-container">
                                    <p>
                                        Je suis un étudiant en 1ère année de Bachelor
                                        en développement avec option cybersécurité.
                                        Je suis diplômer du baccalauréat technologique science de
                                        l'industrie et du devellopement durable (STI2D).
                                    </p>
                                    <img src="images/hackeur.png" class="fancybox img-fluid" data-fancybox="hackeur"/>
                                    <p>
                                        Je suis actuellement en recherche d'un stage de
                                        2 mois en cybersécurité, en réseau ou en développement.
                                        Cela me permetterais de monter en compétence,
                                        afin d'obtenir le métiers de mes rêves.
                                    </br></br></br></br></br></br>
                                    </p>
                                    <div class="text-left">
                                        <a href="image/CV_Paul_CHRETIEN.pdf"
                                        class="custom-btn btn-primary"
                                        download>Télécharger mon CV</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </section>
                </div>
                <!--    Blog Post Start
==================================================-->
        <div class="tm-section-wrap">
            <div class="tm-parallax" data-parallax="scroll" data-image-src="images/vert.jpg"></div>
                <section id="projet" class="tm-section">
                    <h2 class="tm-text-primary">Mes Projets</h2>
                    <hr class="mb-5">
                    <?php
                    include_once "includes/sidebar.php";
                    ?>
                    <section class="blog_area py_80 full_row ">
                        <div class="container ">
                            <div class="row">
                                <div class="col-md-3 col-lg-7">
                                    <div class="blog_list mb_60">
                                        <?php
                                        $query = "SELECT * FROM post ORDER BY id DESC";
                                        $post = $db->select($query);
                                        if ($post) {
                                            while ($result = $post->fetch_assoc()) {
                                        ?>
                                            <div class="blog_item mb_30 wow animated slideInUp">
                                                <div class="blog_img overlay_one">
                                                    <img src="admin/<?php echo $result['image']; ?>" alt="image"></div>
                                                    <div class="blog_content bg_white">
                                                        <div class="blog_title">
                                                            <a class="color_primary"
                                                            href="post_details.php?id=<?php echo $result['id'];  ?>">
                                                                <h5><?php echo $result['title'];  ?></h5>
                                                            </a>
                                                        </div>
                                                        <p class="mt_15 mb_30">
                                                            <?php echo $format->textShorten($result['body']); ?></p>

                                                        <div class="admin">
                                                            <span class="color_white">By -
                                                                <?php echo $result['author']; ?></span>
                                                        </div>
                                                        <div class="date float-right color_primary">
                                                        <?php echo $format->formatDate($result['date']);  ?></div>
                                                    </div>
                                                </div>
                                            <?php  } ?> <!--end while-->
                                        <?php  } ?>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </section>
                </section>
                </div>
            </div>
                <!--end post -->
                <!-- About section -->
                <div class="tm-main">
                <!-- Home section -->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="images/moi2_travaille.png"></div>
                    <section id="about" class="tm-section">
                        <h2 class="tm-text-primary">A propos de moi</h2>
                        <hr class="mb-5">
                        <div class="row">
                            <div class="col-lg-6 tm-col-home mb-4">
                                <div class="tm-text-container">
                                    <p>
                                    Je m'appelle <strong>Paul CHRETIEN</strong>,
                                    j'ai 18 ans, je suis activement à la recherche d'un stage de 2 mois
                                    afin de valider ma 1ère année de Bachelor en développement option cybersécurité.
                                    Le stage aurait pour but de m'aider à m'ameliorer
                                    en développement, en réseau ou en cybersécurité.
                                    </p>
                                    <p>Je suis ponctuel, sociable, avenant,
                                    travailleur, rigoureux qui n'abandonne pas à la première difficulté.
                                    Plutôt perfectionniste, j'aime apprendre.</p></br>
                                    <p>Quand au savoir faire, lors de cette première année, j'ai acquis les bases de :</br>
                                        <strong> Mes différentes bases de langage de programmation :</strong></br>
                                        <li>PHP,</li>
                                        <li>Mysql,</li>
                                        <li>Python,</li>
                                        <li>C,</li>
                                        <li>Arduino,</li>
                                    </p>
                                    <p><strong> Mes différentes bases en Réseau :</strong>
                                        <li>Mettre en place un ad ds,</li>
                                        <li>Mettre en place un DNS,</li>
                                        <li>Mettre en place un DHCP,</li>
                                        <li>Mettre en place un service Web et Mail, </li></br>
                                        Je vous conseille d'aller voir mon LinkedIn,
                                    </p>
                                    <div class="primary-button">
                                        <a href="https://www.linkedin.com/in/paul-chretien-786ab8236/"
                                        class="custom-btn btn-primary">Mon LinkedIn</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </section>
                </div>
                <!--Mes jeux-->
                <div class="tm-main">
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="images/remake.jpg"></div>
                    <section class="tm-section">
                        <h2 id="jeu" class="tm-text-primary">Mes jeux</h2>
                        <hr class="mb-5">
                        <div class="row">
                            <div class="col-lg-6 tm-col-home mb-4">
                                <div class="tm-text-container">
                                <p>J'ai développé l'un de mes premier jeu tout seul, je vous le mets ci-dessous afin que vous puissiez le tester.</p>
                                <a href="game.php"class="custom-btn btn-primary">Le jeu des allumettes</a>
                                </div>
                            </div>
                        </div>
                        
                    </section>
                </div>

                <!-- Contact section -->
                <div class="tm-section-wrap">
                    <div class="tm-parallax" data-parallax="scroll" data-image-src="images/de.jpg"></div>
                    <div id="contact" class="tm-section">
                        <h2 class="tm-text-primary">Contacter Moi</h2>
                        <hr class="mb-5">
                        <div class="col-md-6 border-left py-3">
                            <h1>Contact form</h1>
                            <div class="form-group">
                                <h5 for="name">Name</h5>
                                <input
                                type="text"
                                class="form-control"
                                id="name"
                                placeholder="Enter name"
                                />
                            </div>
                            <div class="form-group">
                                <h5 for="email">Email</h5>
                                <input
                                type="email"
                                class="form-control"
                                id="email"
                                placeholder="Enter email"
                                />
                            </div>
                            <div class="form-group">
                                <h5 for="message">Message</h5>
                                <textarea class="form-control" id="message" rows="3"></textarea>
                            </div>
                            <button class="btn btn-primary" onclick="sendMail()">Submit</button>
                            </div>
                        <div class="col-xl-6 tm-contact-col-r">
                                <!-- Map -->
                                    <div class="mapouter mb-4">
                                        <div class="gmap_canvas">
                                            <iframe title="map"
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3
                                                !1d2622.5707468565283
                                                !2d2.3466845768887272!3d48.90451729745863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768
                                                !4f13.1!3m3!1m2!1s0x47e66e8d25fe1401%3A0x969fe88cd99b4294
                                                !2s16%20Rue%20Adrien%20Lesesne%2C%2093400%20Saint-Ouen-sur-Seine
                                                !5e0!3m2!1sfr!2sfr!4v1681658922818!5m2!1sfr!2sfr"
                                                width="600"
                                                height="450"
                                                style="border:0;"
                                                allowfullscreen=""
                                                loading="lazy"
                                                referrerpolicy="no-referrer-when-downgrade">
                                            </iframe>
                                        </div>
                                    </div>
            
                                    <!-- Address -->
                                    <address class="mb-4">
                                        16 rue Adrien Lesesne<br>
                                        93400 Saint Ouen<br>
                                    </address>
            
                                    <!-- Links -->
                                    <ul class="tm-contact-links mb-4">
                                        <li class="mb-2">
                                            <a href="tel:0648478413">
                                                <i class="fas fa-phone mr-2 tm-contact-link-icon"></i>
                                                Tel: 06.48.47.84.13
                                            </a>
                                        </li>
                                        <li>
                                            <a href="mailto:pchretien@guardiaschool.fr">
                                                <i class="fas fa-at mr-2 tm-contact-link-icon"></i>
                                                Email: pchretien@guardiaschool.fr
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="tm-contact-social">
                                        <li><a href="https://www.linkedin.com/in/paul-chretien-786ab8236/"
                                            class="tm-social-link"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="https://github.com/aishoooo" class="tm-social-link">
                                            <i class="fab fa-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        <div id="contact-messages"></div>
                    </div>
                    </div>
                </div> <!-- .tm-main -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    <script src="js/jquery-3.4.1.min.js"></script>          <!-- https://jquery.com/ -->
    <script src="js/jquery.singlePageNav.min.js"></script>  <!-- https://github.com/ChrisWojcik/single-page-nav -->
    <script src="js/parallax/parallax.min.js"></script>     <!-- https://pixelcog.github.io/parallax.js/ -->
    <script src="js/imagesloaded.pkgd.min.js"></script>     <!-- https://imagesloaded.desandro.com/ -->
    <script src="js/isotope.pkgd.min.js"></script>          <!-- https://isotope.metafizzy.co/ -->
    <script src="js/jquery.magnific-popup.min.js"></script> <!-- https://dimsemenov.com/plugins/magnific-popup/ -->
    <script src="slick/slick.min.js"></script>              <!-- https://kenwheeler.github.io/slick/ -->
    <script src="js/templatemo-script.js"></script>
    <script src="js/modal.js"></script>
    <script src="js/canvas.js"></script>
    <script src="js/fancybox.js"></script>
    <script src="js/index.js"></script>
    

</body>
</html>