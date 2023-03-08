<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fury Family - Contact</title>
    <link rel="icon" type="image/png" href="../Ressources/favicon.png" />
    <link href="../StylesCss/body-header_style.css" rel="stylesheet" type="text/css" />
    <link href="../StylesCss/main-content_style.css" rel="stylesheet" type="text/css" />
    <link href="../StylesCss/form_style.css" rel="stylesheet" type="text/css" />
    <meta name="description" 
          content="La Fury Family est une petite communauté multi-gaming française (crée autour d'une famille et ses amis de jeux vidéos). Jouant principalement à des FPS, vous pouvez aussi nous retrouver sur tous types de jeux (RTS, MMO...). Nous privilégions humour et décontraction en joueant.">
</head>
<body>
    <div class="overlay-mobileMenu" onclick="closeMenuMobile()"></div>
    <header>
        <div class="headerBandeau">
            <img    src="../Ressources/FF-logo02.png"
                    alt="Logo de la Fury Family"
                    class="desktopLogo"/>
            <img    src="../Ressources/FF-logo01.png"
                    alt="Logo de la Fury Family"
                    class="mobileLogo"/>
        </div>
        <div class="headerGlobalNav">
            <nav class="headerDesktopMenu">
                <ul class="desktopMenu">
                    <li><a href="../index.html" class="menu-item"><button>ACCUEIL</button></a></li>
                    <li><a href="nos_jeux.html" class="menu-item"><button>NOS JEUX</button></a></li>
                    <li><a href="minecraft.html" class="menu-item"><button>MINECRAFT</button></a></li>
                    <li><a href="discord.html" class="menu-item"><button>DISCORD</button></a></li>
                    <li><a href="contactez-nous.php" class="menu-activeItem"><button>CONTACT</button></a></li>
                </ul>
            </nav>
        </div>
        <div class="headerGlobalBurger">
            <div class="icone-CloseBurger" onclick="closeMenuMobile()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>                  
            </div>
            <nav class="headerMobileMenu">
                <ul class="mobileMenu">
                    <li><a href="../index.html" class="burger-item">ACCUEIL</a></li>
                    <li><a href="nos_jeux.html" class="burger-item">NOS JEUX</a></li>
                    <li><a href="minecraft.html" class="burger-item">MINECRAFT</a></li>
                    <li><a href="discord.html" class="burger-item">DISCORD</a></li>
                    <li><a href="contactez-nous.php" class="burger-activeItem">CONTACT</a></li>
                </ul>
            </nav>
        </div>
        <div class="icone-MenuBurger" onclick="openMenuMobile()">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
            </svg>                  
        </div> 
    </header>
    <main>
        <div class="startTopMargin"> </div>
        <article class="mainArticle">
            <section class="largeArticle">
                <h1>✉ CONTACTEZ-NOUS</h1>
                <div class="pictureContainer">
                    <img class="picture_fullWidth" src="../Ressources/Trait_metal.png" alt="Ligne séparatrice">
                </div>
                <div class="smallArticle">
                    <div class="articleColumnInclude3">
                        <p class="form_comment"><u><i>
                        Remplissez le formulaire ci-dessous pour nous contacter:
                        </i></u></p>
                        <div class="contact__Form">
                            <form method="post">
                                <label>Votre Prénom / Nom  ou un Pseudo <font color="red">(requis)</font> :</color></label>
                                <input type="text" name="nom" placeholder="exemples:  Damien.P  ou  Raton19" required>
                                <label>Votre adresse email <font color="red">(requise pour la réponse)</font></color> :</label>
                                <input type="email" name="email" placeholder="exemple:  tireur69@gmail.com" required>
                                <label for="sujet">Sujet de la demande (choisissez) :</label> <br>
                                <select name="sujet" id="sujet">
                                    <option value="Rejoindre la Fury Family / Postuler">Rejoindre la Fury Family / Postuler</option>
                                    <option value="Demandes de renseignements diverses" selected>Demande de renseignements divers</option>
                                    <option value="Signaler un problème sur Discord">Signaler un problème sur Discord</option>
                                    <option value="Autres demandes / Sujets divers">Autres demandes</option>
                                </select>
                                <label>Votre Message <font color="red">(requis)</font> :</label>
                                <textarea name="message" placeholder="Tapez votre demande ici..." required></textarea>
                                <input type="submit" value="Valider votre message">
                            </form>
                        </div>
                    </div>
                    <div class="articleColumnInclude4">
                        <h2>Pourquoi nous contacter?</h2> <br>    
                        <h3> - POUR SIGNALER UN PROBLÈME SUR LE DISCORD : </h3>
                        <p> En cas d'absence des administrateurs ou modérateurs, vous pouvez nous contacter ici pour signaler un problème Discord. 
                        Par exemple, si un joueur manque de respect à une autre personne (ou a un comportement déplacé), s'il spam des channels écrits, vocaux ou poste du contenu innaproprié, n'hésitez pas à nous prévenir via ce formulaire de contact pour qu'on puisse intervenir.
                        </p>
                        <h3> - POUR DEMANDER A REJOINDRE NOTRE COMMUNAUTÉ : </h3>
                        <p> Nous ne cherchons pas à recruter massivement. 
                            Normalement, vous ne pouvez être invité que par l'un de nos membres. Néanmoins, si vous nous connaissez et souhaitez nous rejoindre (pour jouer avec nous), vous pouvez faire une demande ici. 
                            Dans ce cas, expliquez brievement comment vous nous connaissez, qui vous avez rencontré et/ou sur quel jeu vous l'avez rencontré. 
                            Nous étudierons votre demande et y répondrons dans les plus brefs délais.
                        </p>
                        <h3> - POUR VOUS RENSEIGNER / EN SAVOIR PLUS ... </h3>
                        <p> Vous souhaitez contacter l'administrateur de ce site ou du Discord? Vous souhaitez faire une suggestion ou une réclamation? 
                            Vous souhaitez en savoir plus sur notre communauté (nos membres, nos jeux, nos serveurs, nos activités, nos évènements...)? 
                            N'hésitez pas à nous contacter quelque soit votre demande! Nous essaierons de répondre à vos messages le plus rapidement possible!
                        </p>
                    </div>
                </div>
            </section>
        </article>
    </main>
    <footer>
        <div class="footerContainer">
            <p class="footerText">Copyright©2023 / Site by FuRy</p>
            <a href="mentions-legales.html" class="mentionsLegales">➜ mentions légales du site</a>
            <p> </p>
        </div>
    </footer>

    <script src="../script.js"></script>

    <?php
    // traitement (envoi email) si le formulaire a été soumis
    if (isset($_POST["message"])) {
        $message = "Ce message vous a été envoyé via la page de contact du site fury-family.fr
        Nom/Pseudo: " . $_POST["nom"] . "
        Email: " . $_POST["email"] . "
        -----------------------------
        Message: " . $_POST["message"];

        $retour = mail("fd.renov@gmail.com", $_POST["sujet"], $_POST["message"], "From:contact@fd-fury.synology.me" . "\r\n" . "Reply-to:" . $_POST["email"]);
        if ($retour) {
            echo "<p>L'email a bien été envoyé.</p>";
        }
    }
    ?>
</body>

</html>