<?php 
$menuItems = getNavigationMenu();

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <?php wp_head(); ?>
        <meta content="<?php echo get_bloginfo( 'name' );?>" name="title">
        <meta content="<?php echo get_bloginfo( 'description' );?>" name="description">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Irish+Grover&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Sofadi+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
        <title><?php echo get_bloginfo( 'name' );?></title>
    </head>
    <body>
        <header id="header">
            <aside>
                
                <section>
                    <figure>
                        <a href="#" class="logo">
                            <img src="https://static.wixstatic.com/media/84770f_042ffa30c947807e7a43c51fa981b720.png/v1/fill/w_155,h_154,al_c,lg_1,q_85,enc_auto/84770f_042ffa30c947807e7a43c51fa981b720.png">
                        </a>
                    </figure>
                    <h1>La Kredenn Geltiek</h1>
                </section>
                
                <nav>
                    <?php 
                  
                    wp_nav_menu( array( 'theme_location' => 'Navigation' ) ); 

                    ?>
                
                    <!-- <ul>
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Enseignement</a></li>
                        <li><a href="#">Les Actions</a></li>
                        <li><a href="#">La Kredenn Geltiek</a>
                            <ul>
                                <li><a href="#">Services aux fidèles</a></li>
                                <li><a href="#">La Branche Blanche</a></li>
                                <li><a href="#">La Branche Rouge</a></li>
                                <li><a href="#">La Branche Verte</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Les Clairières</a>
                            <ul>
                                <li><a href="#">Ialos ar Mor</a></li>
                                <li><a href="#">Ialos ar C'Hoat</a></li>
                                <li><a href="#">Maen Loar</a></li>
                                <li><a href="#">Ialos al Lanv</a></li>
                                <li><a href="#">Ialos ar Brekilian</a></li>
                                <li><a href="#">Ialos al Lann</a></li>
                                <li><a href="#">Ialos ar Douar</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Calendrier</a></li>
                        <li><a href="#">KAD</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul> -->
                </nav>
            </aside>
        </header>
        
    
