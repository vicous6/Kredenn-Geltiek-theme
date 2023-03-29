<?php 
/*
Template Name: Enseignement
*/  

// $data = getHomepageData();

get_header();
?>

<h1><?php the_field('titre'); ?></h1>
<p><?php the_field('contenu'); ?></p>

<?php  get_footer(); ?>