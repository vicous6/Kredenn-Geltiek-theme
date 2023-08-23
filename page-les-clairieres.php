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
            <iframe src="https://www.google.com/maps/d/u/7/embed?mid=1uvAY2abCCcVitfEPCTYHJbQ0RIZY6Sc&ehbc=2E312F" width="640" height="480"></iframe>
        </section>
    </section>
</main>
<?php  

get_footer(); 

?>