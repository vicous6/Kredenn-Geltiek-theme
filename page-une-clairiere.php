<?php  
/*
Template Name: Une clairières
*/  
get_header();

?>
<main id = "clairiere">
<h1><?php the_field('titre'); ?></h1>
<?php the_field('contenu'); ?>
</main>
<?php  

get_footer(); 

?>