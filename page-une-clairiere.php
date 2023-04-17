<?php  
/*
Template Name: Une clairière
*/  
$slug = get_post_field( 'post_name', get_post() );

get_header();

?>
<main id = "clairiere">





<section>
   <figure>

        <img src = <?php the_field('logo'); ?> >
        
   </figure>
   <h1><?php echo $slug; ?></h1>
</section>
<section>
<p><?php the_field('contact'); ?>" </p>
<p><?php the_field('lieu'); ?>" </p>
<p><?php the_field('description'); ?>" </p>
</section>
<section>
    <h2>Informations Spécifiques</h2>
<p><?php the_field('information-specifique'); ?>" </p>
<p><?php the_field('lieu'); ?>" </p>
</section>
<section>
    
</section>
</main>

<?php  

get_footer(); 

?>