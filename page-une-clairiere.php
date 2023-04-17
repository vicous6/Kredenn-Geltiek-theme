<?php  
/*
Template Name: Une clairière
*/  
$slug = get_post_field( 'post_name', get_post() );

get_header();

?>
<main id = "clairiere">

<h1><?php the_field('titre'); ?></h1>



<section>
   <figure>
    <img href =  <?php the_field('logo'); ?> >
   </figure>
</section>
<section>
    
</section>
<section>
    
</section>
<section>
    
</section>
</main>

<?php  

get_footer(); 

?>