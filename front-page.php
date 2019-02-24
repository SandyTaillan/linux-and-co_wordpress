<!--todo : mettre le fonds avec des couleurs et un motif transparent
    todo : Créer un index.php pour le fil actualités
    todo : créer une page de sommaire pour le fil articles
    todo : créer une page de contact
    todo : créer une page à propos
    todo : mettre en adaptatif : bootstrap

-->
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head> <!--Metadata -->
        <meta charset="<?php bloginfo('charset'); ?>" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Site sur Linux en particulier et sur l'informatique en général." />
        <title>Linux-and-co</title>
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div id="header-entete">
                <div id="header-texte">
                    <h1>Linux and Co.</h1>
                    <p>Un site sur Linux en particulier et sur l'informatique en général.</p>
                </div>
                <img src="/wp-content/themes/linux-and-co_wordpress/img/image-header-site.png" alt="image-site">
            </div>
            <nav id="header-nav">
                <ul>
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Articles</a></li>
                    <li><a href="http://linux-and-co.dessins-plaisirs.fr/actualites">Actualités</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">À propos</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section id="section-frontpage">
                <img src="/wp-content/themes/linux-and-co_wordpress/img/informatique_ecran-1.jpg" alt="image-ordinateur">
                <p style="text-align: justify">"Linux and Co." est un site pour parler de Linux et des logiciels fonctionnant sous la distribution Ubuntu, mais pas uniquement.<br>
                    En effet, J'aimerai vous aider à vous familiariser avec l'informatique et son vocabulaire si particulier. Et comme la programmation est indissociable de l'informatique, vous pourrez y trouver des lignes de codes. Mes langages de prédilection sont le Python et le Bash.<br><br>
                    En fait, "Linux and Co" contiendra tout ce qui me passionne dans le monde de l'informatique.</p>
            </section>
           </main>
        <footer>
            <p>Copyright © 2019 - Sandy Taillan</p>
        </footer>
    </body>
</html>