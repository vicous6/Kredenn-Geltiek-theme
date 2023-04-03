<?php  
/*
Template Name: Les clairières
*/  
get_header();

?>
<main id = "clairieres">
<h1><?php the_field('titre'); ?></h1>
<?php the_field('contenu'); ?>
</main>
<?php  

get_footer(); 

?>