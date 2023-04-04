<?php

get_header(); 
var_dump(the_field("titre"));
?>
<div id = "actions">
<section>
    <h1><?php the_field('titre'); ?></h1>
    <p><?php the_field('contenu'); ?></p>
    <h2><?php the_field('titre1'); ?></h2>
    <p><?php the_field('contenu1'); ?></p>
    <h2><?php the_field('titre2'); ?></h2>
    <p><?php the_field('contenu2'); ?></p>
</section>




</div> 

</div>
<?php 

get_footer(); 

?>