<?php  
/*
Template Name: Qui sommes nous?
*/  
get_header();

?>
<main id = "qui-sommes-nous">
    <h1><?php the_field('titre'); ?></h1>
    <section>
        <h2><?php the_field('titre1'); ?></h2>
        <section>
            <?php the_field('contenu1'); ?>
        </section>
        <figure>
            <img src = <?php the_field('image1'); ?> >
        </figure>
        <figure>
            <img src = <?php the_field('image2'); ?> >
        </figure>
        <figure>
            <img src = <?php the_field('image3'); ?> >
        </figure>
        <section>
            <?php the_field('contenu2'); ?>
        </section>
    </section>
    <section>
        <h2><?php the_field('titre2'); ?></h2>
        <section>
            <?php the_field('contenu3'); ?>
        </section>
        <figure>
            <img src = <?php the_field('image4'); ?> >
        </figure>
        <figure>
            <img src = <?php the_field('image5'); ?> >
        </figure>
        <figure>
            <img src = <?php the_field('image6'); ?> >
        </figure>
        <section>
            <?php the_field('contenu4'); ?>
        </section>
    </section>
    <section>
        <h2><?php the_field('titre3'); ?></h2>
        <section>
            <?php the_field('contenu5'); ?>
        </section>
        <figure>
            <img src = <?php the_field('image7'); ?> >
        </figure>
        <section>
            <?php the_field('contenu6'); ?>
        </section>
    </section>
</main>
<?php  

get_footer(); 

?>
