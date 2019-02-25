<?php
/**
 * Created by PhpStorm.
 * User: sandy
 * Date: 24/02/19
 * Time: 11:04
 */
?>
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
                    <li><a href="/" class="a-visited">Accueil</a></li>
                    <li><a href="#" class="a-visited">Articles</a></li>
                    <li><a href="http://linux-and-co.dessins-plaisirs.fr/actualites" class="a-visited">Actualités</a></li>
                    <li><a href="#" class="a-visited">Contact</a></li>
                    <li><a href="#" class="a-visited">À propos</a></li>
                </ul>
            </nav>
        </header>
