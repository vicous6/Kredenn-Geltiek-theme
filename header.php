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
        <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Sofadi+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />

        <script src="https://kit.fontawesome.com/2a74f636e2.js" crossorigin="anonymous"></script>

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
                    <h1>KREDENN GELTIEK</h1>
                    <h2>GOURSEZ TUD DONN</h2>
                </section>
                <nav>
                    <?php 

                    wp_nav_menu( array( 'theme_location' => 'Navigation' ) ); 

                    ?>

                    <ul id="social-icons">
                        <li><a href="https://www.youtube.com/channel/UCdVeNteVa2wF4LAVDn6VLsA?app=desktop"><span class="fa-brands fa-youtube fa-2xl" style="color: #556B2F;"></span></a></li>
                        <li><a href="https://m.facebook.com/kredenngeltiek/"><span class="fa-brands fa-facebook fa-2xl" style="color: #556B2F;"></span></a></li>
                    </ul>
                </nav>
            </aside>
        </header>
        
    
