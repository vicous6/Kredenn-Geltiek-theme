<?php  
/*
Template Name: KAD
*/  
get_header();

?>
<main id = "kad">
<h1><?php the_field('titre'); ?></h1>
<figure>
    <img src = <?php the_field('image1'); ?> >
</figure>
<?php the_field('contenu'); ?>
</main>
<?php  

get_footer(); 

?>