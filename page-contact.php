<?php 
/*
Template Name: Contact
*/  

get_header(); 
?>
<main id="contact">
<section>
    <h1><?php the_field('titre'); ?></h1>
    <p><?php the_field('contenu'); ?></p>
    <ul>
        <li><a href="https://www.youtube.com/channel/UCdVeNteVa2wF4LAVDn6VLsA?app=desktop"><span class="fa-brands fa-youtube fa-2xl" style="color: #e11414;"></span></a></li>
        <li><a href="https://m.facebook.com/kredenngeltiek/"><span class="fa-brands fa-facebook fa-2xl" style="color: #0d52c9;"></span></a></li>
    </ul>
</section>  
</main>
<?php  

get_footer(); 

?>
    