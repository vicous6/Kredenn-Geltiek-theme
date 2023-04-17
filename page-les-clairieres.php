<?php  
/*
Template Name: Les clairières
*/  
get_header();

?>
<main id = "clairieres">
    <h1><?php the_field('titre'); ?></h1>
    <section>
        <section>
            <?php the_field('contenu'); ?>
        </section>
        <section>
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1YCU1vq-e7ptWp2Kd0biCiy9xzTZRGlc&ehbc=2E312F" width="640" height="480"></iframe>
        </section>
    </section>
</main>
<?php  

get_footer(); 

?>