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
                    <h2><?php the_field('titre1'); ?></h2>
                    <p><?php the_field('contenu1'); ?></p>
                    <figure>

                        <img src = <?php the_field('image1'); ?> >

                    </figure>
                </article>

            </li>
            <li>
            <article>
                    <h2><?php the_field('titre2'); ?></h2>
                    <p><?php the_field('contenu2'); ?></p>
                    <figure>

                        <img src = <?php the_field('image2'); ?> >

                    </figure>
                </article>
            </li>
            <li>
            <article>
                    <h2><?php the_field('titre3'); ?></h2>
                    <p><?php the_field('contenu3'); ?></p>
                    <figure>

                        <img src = <?php the_field('image3'); ?> >

                    </figure>
                </article>
            </li>
            <li>
            <article>
                    <h2><?php the_field('titre4'); ?></h2>
                    <p><?php the_field('contenu4'); ?></p>
                    <figure>

                        <img src = <?php the_field('image4'); ?> >

                    </figure>
                </article>
            </li>
        </ul>
    </section>


</div>
<?php 

get_footer(); 

?>