<?php  
/*
Template Name: Les Branches
*/  
get_header();

?>
<main id = "les-branches">
<h1><?php the_field('titre'); ?></h1>
<?php the_field('contenu'); ?>
</main>
<?php  

get_footer(); 

?>