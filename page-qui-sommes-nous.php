<?php  
/*
Template Name: Qui sommes nous?
*/  
get_header();

?>
<main id = "qui-sommes-nous">
    <h1><?php the_field('titre'); ?></h1>
    <section>
        <section>
            <?php the_field('contenu'); ?>
        </section>
    </section>
</main>
<?php  

get_footer(); 

?>
