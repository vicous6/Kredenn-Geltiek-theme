<?php  
/*
Template Name: Qui sommes nous?
*/  
get_header();

?>
<main id = "qui-sommes-nous">
    <h1><?php the_field('titre'); ?></h1>
    <section>
        <?php the_field('titre1'); ?>
        <section>
            <?php the_field('contenu1'); ?>
        </section>
        <section>
            <?php the_field('image1'); ?>
        </section>
        <section>
            <?php the_field('image2'); ?>
        </section>
        <section>
            <?php the_field('image3'); ?>
        </section>
        <section>
            <?php the_field('contenu2'); ?>
        </section>
    </section>
    <section>
    <?php the_field('titre2'); ?>
        <section>
            <?php the_field('contenu3'); ?>
        </section>
        <section>
            <?php the_field('image4'); ?>
        </section>
        <section>
            <?php the_field('image5'); ?>
        </section>
        <section>
            <?php the_field('image6'); ?>
        </section>
        <section>
            <?php the_field('contenu4'); ?>
        </section>
    </section>
    <section>
    <?php the_field('titre3'); ?>
        <section>
            <?php the_field('contenu5'); ?>
        </section>
        <section>
            <?php the_field('image7'); ?>
        </section>
        <section>
            <?php the_field('contenu6'); ?>
        </section>
    </section>
</main>
<?php  

get_footer(); 

?>
