<?php  
/*
Template Name: Enseignement
*/  
get_header();

?>
<main id = "enseignement">
<h1><?php the_field('titre'); ?></h1>
<?php the_field('contenu'); ?>
</main>
<?php  

get_footer(); 

?>