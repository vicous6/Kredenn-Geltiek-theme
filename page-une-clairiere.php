<?php  
/*
Template Name: Une clairière
*/  


get_header();

?>
<main id = "clairiere">





<section>
   <figure>

        <img src = <?php the_field('logo'); ?> >
        
   </figure>
</section>
<section>
<p>Contact : <?php the_field('contact'); ?> </p>
<p>Lieux de rituélie : <?php the_field('lieu'); ?>" </p>
<p><?php the_field('description'); ?>" </p>
</section>
<section>
    <h2>Informations Spécifiques</h2>
<p><?php the_field('information_specifique'); ?> </p>
</section>
<section>
    <figure>

    <img src = <?php the_field('image1'); ?> >

    </figure>
    <figure>

        <img src = <?php the_field('image2'); ?> >
        
   </figure>
   
</section>
</main>

<?php  

get_footer(); 

?>