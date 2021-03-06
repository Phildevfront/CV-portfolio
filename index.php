<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>PORTFOLIO</title>
        
        <link rel="stylesheet" href="assets/css/main.css">
        <link rel="stylesheet" href="assets/css/mediasqueries.css">
        <link rel="stylesheet" href="assets/css/keyframes.css">
        <!--<script src="assets/js/gallery.js"></script>-->
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/4af066ad9c.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <!-------------------------------------------- HEADER NAV --------------------------------------------------------------------->
        <header id="nav" class="header">
            <a href="#home" class="logo">Philippe Baurens</a>
            <input class="menu-btn" type="checkbox" id="menu-btn" />
            <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
            <ul class="menu">
              <li><a href="#home">HOME</a></li>
              <li><a href="#apropos">ABOUT</a></li>
              <li><a href="#resume">RESUME</a></li>
              <li><a href="#works">WORKS & PROJECTS</a></li>
              <li><a href="#contact">CONTACT</a></li>
            </ul>
        </header>
        <main>
        <!-------------------------------------------- SECTION 1 BANNER ----------------------------------------------------------------->
            <section id="home" class="flex-row banner">
                <div class="banner-text">
                    <h1 class="text-focus-in"> &#60; Philippe Baurens /&#62;</h1>
                    <h3 class="banner"> 
                        <p>Je suis actuellement en formation de <span class="banner-title">développeur web & web mobile</span><br /> chez <a href="https://simplon.co/" target="_blank"><img class="linksimplon" src="assets/images/logo/logo-simplon.png"></a>.</p><br />
                        <p>Passionné par les technologies digitales & audiovisuelles,<br> j'ai toujours désiré
                        faire carrière dans ces domaines.</p>
                        <p>Je vous invite à <a class="scroll" href="#apropos"><span class="banner">découvrir mon profil.</span></a></p>
                    </h3>
                    <div class="separateur">
                    </div>
                    <ul class="flex-row banner-social">
                        <li>
                            <a href="https://www.linkedin.com/in/philippe-baurens-aa44a06a/" class="linkedin" target="_blank">
                            <span style="color:Grey;"><i class="fab fa-linkedin-in"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/Phildevfront" class="github" target="_blank">
                            <span style="color:Grey;"><i class="fab fa-github"></i></span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:pbaurens.dev@gmail.com" class="mail" target="_blank">
                            <span style="color:Grey;"><i class="fas fa-envelope"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </section>
        <!--------------------------------------------------- SECTION 2 A PROPOS --------------------------------------------------------------->
            <div id="apropos"></div>
            <section id="about">
                <div class="about row">
                    <div class="profile-img">
                        <img id="focusfx" class="profile-pic" src="assets/images/photo-face.png">
                       
                    </div>
                    <div class="about text">
                        <h2 class="about">A propos</h2>
                        <h3 class="about-title"> Créatif, Passionné & Motivé</h3>
                        <p><br>Passionné depuis longtemps par le monde numérique,
                            j'ai toujours désiré faire carrière dans ce domaine.
                            <br>Actuellement, je suis apprenant à la fabrique SIMPLON<span>&#160;</span> d'Élancourt, en formation
                            de développeur web et mobile.<br />
                            Créatif, motivé et d'un naturel curieux, j'aspire à apprendre tous les jours de nouvelles choses afin de monter en compétence rapidement.
                        </p>
                    </div>
                    <div class="row download">
                        <div class="download">
                            <p><a href="assets/cv/CV-PhilippeBaurens.pdf" class="button" target="_blank" download="CV-PhilippeBaurens.pdf"><i class="fa fa-download"></i>Téléchargez mon CV</a></p>
                        </div>
                    </div>
                </div>
            </section>
        <!------------------------------------ SECTION 3 EXPÉRIENCE ÉDUCATION COMPÉTENCES ------------------------------------------>
            <div id="resume"></div>
            <section id="resume">
                <h2 class="works-txt">RESUME</h2>
                <!---------------------------------------- Apparition au scroll ----------------------------------->
                <div class="resume-img reveal">
                    <img class="resume" src="assets/images/image3.jpg">
                    <!--<div id="rectangle1"></div>-->
                    <image class="code" src="assets/images/image4.jpg">
                </div>
                <!----------------------------------------- END Scrolling ---------------------------------------->
                <div class="experience bg-white reveal">
                    <div class="title">
                        <h2>EXPÉRIENCE</h2>
                    </div>
                    <div class="xp-txt">
                        <div class="xp-one">
                            <div class="xp-folio">
                                <h3 class="resume">Portfolio</h3>
                                <p class="location">Levallois Perret</p>
                                <p class="info">Développeur Html5 - CSS3 - JS
                                    <span class="point">∙</span>
                                    <em class="date">Janvier 2020</em>
                                </p>
                                <p class="text">Création et développement de mon portfolio dans le cadre de ma formation<br /> de développeur web & apps mobile chez Simplon.co</p>
                            </div>
                        </div>
                        <div class="xp-one">
                            <div class="xp-jn">
                                <h3 class="resume">Jessie Nottola - Photographe / Réalisateur Indépendant</h3>
                                <p class="location">Levallois Perret</p>
                                <p class="info">Développeur Wordpress
                                    <span class="point">∙</span>
                                    <em class="date">Septembre 2019</em>
                                </p>
                                <p class="text">Création et développement du site vitrine du photographe & réalisateur Jessie Nottola.</p>
                            </div>
                        </div>
                        <div class="xp-two">
                            <div class="xp-birds">
                                <h3 class="resume">Birds Conseils</h3>
                                <p class="location">Levallois Perret</p>
                                <p class="info">Développeur Wordpress
                                    <span class="point">∙</span>
                                    <em class="date">Octobre 2018</em>
                                </p>
                                <p class="text">Création et Développement d’un site de coaching et formation en ligne.<br />
                                    ORSC (Organisation and Relationship Systems Coaching)est le premier<br /> 
                                    programme de coaching systémique agréé par l’ICF.</p>
                            </div>
                        </div>
                        <div class="xp-two">
                            <div class="xp-hrcls">
                                <h3 class="resume">Havas Group - Hrcls Prod.</h3>
                                <p class="location">Puteaux</p>
                                <p class="info">Ingénieur du Son
                                    <span class="point">∙</span>
                                    <em class="date">2007 à 2018</em>
                                </p>
                                <p class="text">Enregistrement voix off et speak, montage, bruitage, sound-design, mixage, 
                                <br />conformation son-image & création PAD Publicitaire pour TV - RADIO - WEB & CORPORATE.<br />
                                    Clients : Citroen, Krys, B for Bank, Credit Mutuel, Lidl, Intersport, BolloréLogistics</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="education bg-white reveal">
                    <div class="title">
                        <h2>ÉDUCATION</h2>
                    </div>
                    <div class="educ-txt">
                    <div class="educ-one">
                            <div class="educ-multim">
                                <h3 class="resume">Simplon.co (actuellement)</h3>
                                <p class="info">Titre RNCP Niv III - Développeur web & mobile
                                    <span class="point">∙</span>
                                    <em class="date">Nov 2019 - Juin 2020</em>
                                </p>
                                <p class="text"><strong>DÉVELOPPER LE BACK-END D'UNE APPLICATION :</strong>  Créer une base de données.
                                    Développer les composants d’accès aux données.Élaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce.<br />
                                    <strong>DÉVELOPPER LE FRONT-END D'UNE APPLICATION :</strong> Maquetter une application.
                                    Réaliser une interface utilisateur web.Développer une interface utilisateur web dynamique.
                                    Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce.
                                </p>
                            </div>
                        </div>
                        <div class="educ-one">
                            <div class="educ-multim">
                                <h3 class="resume">L'École Multimédia Paris</h3>
                                <p class="info">Titre RNCP Niv II - Développeur Multimédia
                                    <span class="point">∙</span>
                                    <em class="date">Mars 2018 - Sept 2018</em>
                                </p>
                                <p class="text"><strong>INTEGRATION HTML5 - CSS3 :</strong> mise en page typographie et médias, responsive design, Bootstrap et les framework CSS.<br />
                                    <strong>PROGRAMMATION FRONT-END :</strong> Algorithmique JavaScript Librairie jQuery Ajax API REST Web App mobiles (Framework7).<br />
                                    <strong>PROGRAMMATION BACK-END :</strong> PHP Programmation orienté objet, MVC et design pattern, SQL Framework,PHP Laravel.     
                                </p>
                            </div>
                        </div>
                        <div class="educ-two">
                            <div class="educ-son">
                                <h3 class="resume">Institut Supérieur des Technique Sons - Paris</h3>
                                <p class="info">Brevet Technicien Supérieur - Technicien Audiovisuel
                                    <span class="point">∙</span>
                                    <em class="date">1998 - 1999</em>
                                </p>
                                <p class="text">Technique audio analogique - Technique audionumérique - Prise de son - Sonorisation - Mixage musique - Post-Production audiovisuelle - Acoustique - Multicanal - Production et réalisation radio MAO Audio sur IP.</p>
                            </div>
                        </div>
                        <div class="educ-three">
                            <div class="educ-son">
                                <h3 id="bac" class="resume">Lycée Technologique Clément ADER</h3>
                                <p class="info">Bac Professionnel Électrotechnique
                                    <span class="point">∙</span>
                                    <em class="date">1991 - 1993</em>
                                </p>
                                <p class="text">Mise en service et maintenance d’installations électriques de courants forts (basse tension) et de courants faibles véhiculant la voix, les données, les images.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="competence bg-white reveal">
                    <div class="comp-title">
                        <h2>COMPÉTENCES</h2>
                    </div>
                    <div class="comp-txt">
                        <h3 class="resume">Développement</h3>
                        <p class="comp-text"> Voici mon niveau de maîtrise des différents languages & outils que j'utilise.   
                        </p>
                        <div class="bars">
                            <ul class="comp">
                                <li>
                                    <span class="bar-expand html"></span>
                                    <em>HTLM 5</em>
                                </li>
                                <li><span class="bar-expand css"></span>
                                    <em>CSS 3</em>
                                </li>
                                <li><span class="bar-expand js"></span>
                                    <em>JAVASCRIPT</em>
                                </li>
                                <li><span class="bar-expand react"></span>
                                    <em>REACT JS</em>
                                </li>
                                <li><span class="bar-expand node"></span>
                                    <em>NODE JS</em>
                                </li>
                                <li><span class="bar-expand php"></span>
                                    <em>PHP</em>
                                </li>
                                <li><span class="bar-expand cms"></span>
                                    <em>WORDPRESS</em>
                                </li>
                            </ul>
                            <hr class="cut">
                        </div>
                        <h3 class="resume-tools">Outils</h3>
                        <div class="bars">
                            <ul class="comp">
                                <li>
                                    <span class="bar-expand mac"></span>
                                    <em>MAC OS</em>
                                </li>
                                <li><span class="bar-expand visual"></span>
                                    <em>VISUAL STUDIO CODE</em>
                                </li>
                                <li><span class="bar-expand git"></span>
                                    <em>GIT</em>
                                </li>
                                <li><span class="bar-expand mamp"></span>
                                    <em>MAMP SERVER</em>
                                </li>
                                <li><span class="bar-expand phpmyadmin"></span>
                                    <em>PHPMYADMIN</em>
                                </li>
                                <li><span class="bar-expand gatsby"></span>
                                    <em>GATSBY</em>
                                </li>
                                <li><span class="bar-expand docker"></span>
                                    <em>DOCKER</em>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> 
            </section>
            <!-------------------------------------------------- MY WORK ------------------------------------------------------------------>
            <section id="works" class="flex-row works">
                <div class="works-title">
                    <h2 class="works-txt">WORKS</h2>
                </div>
                <div class="flex-row main-cards">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <h3>HTML5-CSS3-JS</h3>
                                <img src="assets/images/portfolio/Mon-Portfolio.jpg" alt="projet">
                            </div>
                            <div class="flip-card-back">
                                <h2>Mon Portfolio</h2> 
                                <p>Site WEB</p> 
                                <a class="card" href="#" target="_blank"><span class="card-back"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <h3>JS TABLE-CARD</h3>
                                <img src="assets/images/portfolio/ExoJSgithub.jpg" alt="projet">
                            </div>
                            <div class="flip-card-back">
                                <h2>Exercice de JavaScript</h2> 
                                <p><p>Manipulation du DOM et création de tableau</p></p> 
                                <a class="card" href="https://github.com/Phildevfront/TABLE-CARD/tree/master" target="_blank"><span class="card-back">github.com/Phildevfront/TABLE-CARD</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <h3>CMS WORDPRESS</h3>
                                <img src="assets/images/portfolio/Site-jessieNottola.jpg" alt="projet">
                            </div>
                            <div class="flip-card-back">
                                <h2>Jessie Nottola</h2> 
                                <p>Création et développement du site vitrine pour le photographe & réalisateur JESSIE NOTTOLA</p>
                                <a class="card" href="https://www.jessienottola.com" target="_blank"><span class="card-back">www.jessienottola.com</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <h3>HTML5-CSS3</h3>
                                <img src="assets/images/portfolio/Site-visiteAlhambra.jpg" alt="projet">
                            </div>
                            <div class="flip-card-back">
                                <h2>Visite de l'Alhambra</h2> 
                                <p>Site démo</p> 
                                <a class="card" href="http://pb-visitealhambra.planethoster.world" target="_blank"><span class="card-back">pb-visitealhambra.planethoster.world</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <h3>CMS WORDPRESS</h3>
                                <img src="assets/images/portfolio/site-orsc.jpg" alt="projet">
                            </div>
                            <div class="flip-card-back">
                                <h2>ORSC</h2> 
                                <p>Site Web pour un Cabinet de coaching</p> 
                                <a class="card" href="https://orscprogram.com/" target="_blank"><span class="card-back">orscprogram.com</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <h3>WEB</h3>
                                <img src="assets/images/portfolio/avenir.jpg" alt="projet">
                            </div>
                            <div class="flip-card-back">
                                <h2>WIP</h2> 
                                <p>Site WEB</p> 
                                <a class="card" href="#" target="_blank"><span class="card-back"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!------------------------------------------- WIP PROJECT ---------------------------------------------------------------->
            <section id="projects" class="flex-column display">
                <div class="works-title">
                    <h2 class="works-txt">PROJECTS</h2>
                </div>
            </section>
            <!--------------------------------------------- CONTACT ----------------------------------------------------------------->
            <section id="contact">
                <div class="contact-text">
                    <h2 class="contact-title">CONTACT</h2>
                    <p class="message">N'hésitez pas à m'envoyer un message</p>
                </div>
                <div class="row">
                       <!-- form -->
                    <form action="traitement.php" method="post" name="form">
                        <div>
                          <label for="contactName">Nom</label>
                          <input type="text" value="" size="35" name="nom">
                        </div>
                        <div>
                          <label for="contactEmail">Email</label>
                          <input type="text" value="" size="35" name="email">
                        </div>
                        <div>
                          <label for="contactMessage">Message</label>
                          <textarea cols="50" rows="15" name="message"></textarea>
                        </div>
                        <div>
                           <button class="submit">Soumettre</button>
                        </div>
                        <p class="thanks" style="display:<?php if($isSuccess) echo 'block'; else echo 'none';?>">Votre message a bien été envoyé.Merci de m'avoir contacté.</p>
                    </form> 
                </div>  
               
            </section>
            <!-------------------------------------------------- FOOTER ---------------------------------------------------------->
            <footer>
                <section id="footer">
                    <div class="social">
                        <ul class="flex-row footer-social">
                            <li>
                                <a href="https://www.linkedin.com/in/philippe-baurens-aa44a06a/" target="_blank">
                                <span style="color:Grey;"><i class="fab fa-linkedin-in"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/Phildevfront" target="_blank">
                                <span style="color:Grey;"><i class="fab fa-github"></i></span>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:pbaurens.dev@gmail.com" target="_blank">
                                <span style="color:Grey;"><i class="fas fa-envelope"></i></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="copyright">
                        <p>© Copyright 2020 - Philippe BAURENS</p>
                    </div>
                </section>
            </footer>
        </main>
        <script type="text/javascript" src="assets/js/navbar.js"></script>
        <script type="text/javascript" src="assets/js/scroll.js"></script>
        
    </body>
</html>
