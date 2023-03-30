<?php  

// $data = getHomepageData();

get_header();

?>

<h1><?php the_field('titre'); ?></h1>
<?php the_field('contenu'); ?>

<?php  

get_footer(); 

?>