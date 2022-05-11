<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio | HTML CSS & JS</title>

    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- custom css file -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

    <!---custom cursor-->
    <div class="cursor-1"></div>
    <div class="cursor-2"></div>

    <div id="menu-bars" class="fa fa-bars"></div>

    <!---header section start-->

    <header>

        <img src="images/logo.png">

        <nav class="navbar">
            <a href="#home">Accueil</a>
            <a href="#about">A propos</a>
            <a href="#service">Services</a>
            <a href="#experience">Parcours</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="follow">
            <!-- <a class="fab fa-facebook-f"></a>
            <a class="fab fa-twitter"></a>
            <a class="fab fa-instagram"></a> -->
            <a href="https://www.linkedin.com/in/evan-badri-3b2070206/" class="fab fa-linkedin" target="_blank"></a>
        </div>

        <p style="color:white; font-size: 1.2rem;">
            <?php 
                date_default_timezone_set('Europe/Paris');
                $date = date("d/m/Y");
                $heure = date("H:i");
                echo("Nous sommes le $date et il est $heure");
            ?>
        </p>

    </header>

    <!---header section end-->

    <!---home section start-->

    <section class="home" id="home">

        <div class="content" data-aos="fade-up">
            <span class="hi">Bonjour ...</span>
            <h3>Je suis <span>BADRI Evan</span></h3>
            <p class="info">Développeur junior <i class=" fas fa-laptop-code"></i></p>
            <p style="font-size: 1.6rem;">Je suis passionné par la technologie depuis mon plus jeune âge.<br>
                                          Internet existait déjà à ma naissance, alors je suis de cette génération qui a grandi avec le réseau comme un besoin et non comme une commodité.<br>
                                          Je recherche actuellement un poste en tant que <b style="color:#318ce7;">développeur web junior</b> en front ou back pour améliorer mes compétences</p>
            <a href="#about" class="btn">à propos</a>
        </div>

        <div class="image" data-aos="fade-up">
            <img src="images/img2.png" alt="portrait">
        </div>

    </section>

    <!---home section end-->

    <!---about section start-->

    <section class="about" id="about" data-aos="zoom-in">

        <h1 class="heading">À propos de <span> moi</span></h1>

        <div class="row-1">

            <div class="image">
                <img src="images/img2.png" alt="portrait">
            </div>

            <div class="content">
                <h3>Je m'appelle Evan BADRI et je suis développeur web junior</h3>

                <p>Je suis passionné par la technologie depuis mon plus jeune âge.
                   Internet existait déjà à ma naissance, alors je suis de cette génération qui a grandi avec le réseau comme un besoin et non comme une commodité.<br> 
                </p>
                <div class="box-container">
                    <div class="box">
                        <p><span>age :</span> 25</p>
                        <p><span>genre :</span> Homme</p>
                        <p><span>language :</span> Français & un peu Anglais ...</p>
                        <p><span>Ville :</span> Lyon</p>
                    </div>
                    <div class="box">
                        <p><span>freelance :</span> NA </p>
                        <p><span>Tel :</span> 07.68.07.90.62</p>
                        <p><span>Email :</span> Evanbdr35@gmail.com</p>
                        <p><span>Travail :</span> front-end & Back-end</p>
                    </div>
                </div>
                <a href="cv_developpeur.pdf" target="_blank" class="btn">Télécharger mon CV</a>
                <a href="#contact" class="btn">Engagez moi</a>
            </div>

        </div>

        <h1 class="heading"><span></span> Compétences </h1>

        <div class="row-2">
            <div class="skills">
                <div class="progress">
                    <h3>web design <span> 90% </span></h3>
                    <div class="bar"><span></span></div>
                </div>
                <div class="progress">
                    <h3>web developement HTML / CSS / JS / PHP <span> 75% </span></h3>
                    <div class="bar"><span></span></div>
                </div>
                <div class="progress">
                    <h3>seo marketing <span> 80% </span></h3>
                    <div class="bar"><span></span></div>
                </div>
                <div class="progress">
                    <h3>UI design <span> 70% </span></h3>
                    <div class="bar"><span></span></div>
                </div>
            </div>

            <div class="box-container">

                <div class="box">
                    <h3> >>1+ </h3>
                    <p>années d'expérience</p>
                </div>
                <div class="box">
                    <h3> >> 15+ </h3>
                    <p>Clients satisfait</p>
                </div>
                <div class="box">
                    <h3> >> 20+ </h3>
                    <p>Projets terminés</p>
                </div>
                <div class="box">
                    <h3> >> 35+ </h3>
                    <p>Recommandation</p>
                </div>
                <div class="box">
                    <?php
                    require_once('functions/compteur.php');
                    ajouter_vue();
                    $vues = nombre_vues()

                    ?>
                    <h3><?= $vues ?> <i class="fas fa-eye"></i></h3>
                    <p>visite<?php if ($vues > 1): ?>s<?php endif; ?> aujourd'hui </p>
                </div>

            </div>

        </div>

    </section>

    <!---about section end-->

    <!---service section start-->

    <section class="service" id="service">

        <h1 class="heading"><span>Services</span> Payant</h1>

        <div class="box-container">
            
            <div class="box" data-aos="fade-right">
                <i class="fas fa-code"></i>
                <h3>web design</h3>
                <p>Création de site statique ou dynamique pour votre entreprise</p>
                <a href="#portfolio" class="btn">Voir +</a>
            </div>

            <div class="box" data-aos="fade-left">
                <i class="fas fa-brush"></i>
                <h3>graphic design</h3>
                <p>Création de flyer, carte de visite, CV, maquette</p>
                <a href="#portfolio" class="btn">Voir +</a>

            </div>
            <!-- <div class="box">
                <i class="fas fa-mobile"></i>
                <h3>resonsive design</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, ipsum.</p>
            </div>
            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>seo marketing</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, ipsum.</p>
            </div>
            <div class="box">
                <i class="fas fa-chart-line"></i>
                <h3>digital design</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, ipsum.</p>
            </div>
            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email marketing</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dicta, ipsum.</p>
            </div> -->
        </div>

    </section>

    <!---service section end-->

    <!---experience section start-->

    <section class="experience" id="experience">

        <h1 class="heading"><span>Mon</span> experience</h1>

        <div class="box-container">

            <div class="box" data-aos="fade-left">

                <div class="content">
                    <span>2021/2022</span>
                    <h3>Formation Développeur web</h3>
                    <p>Création de site web statique & dynamique en utilisant les langages de programmation HTML, CSS, JS, PHP & MYSQL</p>
                </div>

            </div>
            <div class="box" data-aos="fade-right">

                <div class="content">
                    <span>2019 / 2020</span>
                    <h3>Opérateur de répartition Sanofi</h3>
                    <p> Maitrise des BPF,HSE,LOGICIEL SAP,HABILLAGE CLASSE ABC<br>
                        Zone-A -> Répartition des flacons sur machine (Groninger &
                        Bosh)
                        - Préparation des dossiers de lots.<br>
                        - Réalisation du vide de ligne / Contrôle vide de ligne<br>
                        - Respect des bonnes pratiques de fabrication<br>
                        - Réalisation du bionettoyage en fin de production<br>
                        - Réalisation des prélèvements sur tenue et surface<br>
                        - Réalisation des contrôles périodiques<br>
                        - Vérification des paramètres machine avant et après production.<br>
                        Zone-C -> Mise en eau des laveuses flacons (9-10-11)<br>
                        - Vérification des paramètres machine laveuse et tunnel
                        (Température four & température d'eau)<br>
                        - Mise en oeuvre des flacons via SAP et consommation<br>
                        - Contrôle du dossier de lot et traçabilité des données<br>
                        - Passage de matériel via un SAS pour la zone A respect du
                        bionettoyage<br>
                        - Nettoyage de la machine avec sporicide, solution et alcool .</p>
                </div>

            </div>

            <div class="box" data-aos="fade-left">
                <div class="content">
                    <span>2018 / 2019</span>
                    <h3>Conducteur de ligne Mylan</h3>
                    <p> - Conditionnement des comprimés et gélules dans des blisters.<br>
                        - Préparation du dossier de lot<br>
                        - Réalisation du vide de ligne et contrôle vide de ligne<br>
                        - Réalisation du démarrage de lot et fin de lot<br>
                        - Changement de format (Modification des pièces machine pour le
                        prochain lot<br>
                        - Nettoyage sur themoformeuse, magasin, étuyeuse et peseuse<br>
                        - Formé en sérialisation & agrégation<br>
                        - Contrôle périodique sur blister pour contrôle l'étanchéité du
                        blister<br>
                        - Utilisation de SAP pour consommation.<br>
                        - Maintenance de 1er niveau sur machine bosh</p>
                </div>
            </div>

            <div class="box" data-aos="fade-right">
                <div class="content">
                    <span>2017 / 2018</span>
                    <h3>Opérateur de production</h3>
                    <p> - Contrôle visuel sur boite de pétrie<br>
                        - Réalisation du vide de chaine et contrôle vide de chaine<br>
                        - Démarrage de lot et fin de lot<br>
                        - Contrôle périodique sur poids et couleur (Gélose)<br>
                        - Détection des pannes sur machine et remise en route<br>
                        - Traçabilité des données dans le dossier de lot</p>
                </div>
            </div>

        </div>

    </section>

    <!---experience section end-->

    <!---portfolio section start-->

    <section class="portfolio" id="portfolio">
        <h1 class="heading"><span>Mes</span> Projets</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/projet1.jpg" alt="Projet numéro 1">
                <h3>Projet 1 (WP)</h3>
                <div class="icons">
                    <a href="https://www.lordumarais.fr/" target="_blank" class="fas fa-link" title="Voir le projet"></a>
                    <a href="" class="fas fa-share"></a>
                    <a href="" class="fas fa-search"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/projet2.jpg" alt="Projet numéro 2">
                <h3>Projet 2 (WP)</h3>
                <div class="icons">
                    <a href="https://www.lescalades.com/" target="_blank" class="fas fa-link" title="Voir le projet"></a>
                    <a href="" class="fas fa-share"></a>
                    <a href="" class="fas fa-search"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/projet3.jpg" alt="Projet numéro 3">
                <h3>Projet 3 (WP)</h3>
                <div class="icons">
                    <a href="https://www.terrasses-de-pommiers.com/" target="_blank" class="fas fa-link" title="Voir le projet"></a>
                    <a href="" class="fas fa-share"></a>
                    <a href="" class="fas fa-search"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/projet4.jpg" alt="Projet numéro 4">
                <h3>Projet 4 (PHP)</h3>
                <div class="icons">
                    <a href="" target="_blank" class="fas fa-link" title="Voir le projet"></a>
                    <a href="" class="fas fa-share"></a>
                    <a href="" class="fas fa-search"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/projet5.jpg" alt="Projet numéro 5">
                <h3>Projet 5</h3>
                <div class="icons">
                    <a href="" class="fas fa-link"></a>
                    <a href="" class="fas fa-share"></a>
                    <a href="" class="fas fa-search"></a>
                </div>
            </div>

            <div class="box">
                <img src="images/6.jpg" alt="">
                <h3>Projet 6</h3>
                <div class="icons">
                    <a href="" class="fas fa-link"></a>
                    <a href="" class="fas fa-share"></a>
                    <a href="" class="fas fa-search"></a>
                </div>
            </div>

        </div>

    </section>

    <!---portfolio section end-->

    <!---contact section start-->

    <section class="contact" data-aos="zoom-in" id="contact">

        <h1 class="heading"><span>Contacter</span> moi</h1>

        <div class="icons-container">
            <div class="icons">
                <i class="fas fa-envelope"></i>
                <h3>Email</h3>
                <a href="mailto: evanbdr35@gmail.com"><p>Evanbdr35@gmail.com</p></a>
            </div>
            <div class="icons">
                <i class="fas fa-phone"></i>
                <h3>Tel</h3>
                <a href="tel:+33768079062"><p>07.68.07.90.62</p></a>
            </div>
            <div class="icons">
                <i class="fas fa-envelope"></i>
                <h3>Adresse</h3>
                <p>Route de messimy, Chaleins</p>
            </div>
        </div>

        <div class="row"> 
            <form id="contact-form" method="POST" action="">

                <input type="text" name="surname" placeholder="nom" id="surname" class="box">
                <p class="comments" style="color:red;"></p>

                <input type="email" name="email" placeholder="email" id="email" class="box">
                <p class="comments" style="color:red;"></p>

                <input type="tel" name="number" placeholder="numéro" id="number" class="box">
                <p class="comments" style="color:red;"></p>

                <textarea name="message" placeholder="message" id="message" cols="30" rows="10"></textarea>
                <p class="comments" style="color:red;"></p>

                <input type="submit" class="btn" value="Envoyer le message">
                
            </form>

            <iframe
             src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89077.17183975723!2d4.765090307966068!3d45.757929302887796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea516ae88797%3A0x408ab2ae4bb21f0!2sLyon!5e0!3m2!1sfr!2sfr!4v1647437298188!5m2!1sfr!2sfr"
             width="600" height="530" class="map" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>

    </section>

    <!---contact section end-->

    <!---footer section start-->

    <div class="footer"> <span>Badri Evan</span> | Tous droits réservés</div>

    <!---footer section end-->


    <!-- custom js file -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="js/script.js"></script>
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>
    

</body>

</html>