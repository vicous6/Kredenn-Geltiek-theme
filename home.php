<?php
/*
Template Name: Les Actions
*/  
get_header(); 
?>
<div id="les-actions">
    <section>
        <h1>Les <?php the_field('titre'); ?></h1>
        <p><?php the_field('contenu'); ?></p>
        <ul>
            <li>
                <article>
                    <figure>

                        <img src = <?php the_field('image1'); ?> >

                    </figure>
                    <h2><?php the_field('titre1'); ?></h2>
                    <p><?php the_field('contenu1'); ?></p>
                </article>

            </li>
            <li>
            <article>
                <figure>

                    <img src = <?php the_field('image2'); ?> >

                </figure>
                    <h2><?php the_field('titre2'); ?></h2>
                    <p><?php the_field('contenu2'); ?></p>
                </article>
            </li>
            <li>
            <article>
                    <figure>

                        <img src = <?php the_field('image3'); ?> >

                    </figure>
                    <h2><?php the_field('titre3'); ?></h2>
                    <p><?php the_field('contenu3'); ?></p>
                    
                </article>
            </li>
            <li>
            <article>
                    <figure>

                        <img src = <?php the_field('image4'); ?> >

                    </figure>
                    <h2><?php the_field('titre4'); ?></h2>
                    <p><?php the_field('contenu4'); ?></p>
                    
                </article>
            </li>
        </ul>
    </section>


</div>
<?php 

get_footer(); 

?>