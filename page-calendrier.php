<?php 
/*
Template Name: Calendrier
*/  

get_header(); 
?>
<main id="calendrier">
<section>
    <h1><?php the_field('titre'); ?></h1>
    <p><?php the_field('contenu'); ?></p>
</section>
</main>
<?php  

get_footer(); 

?>
    