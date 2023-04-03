<?php
/*
Template Name: actions
*/  
get_header(); 

?>
<main id = "actions">
<section>
    <h1><?php the_field('titre'); ?></h1>
    <p><?php the_field('contenu'); ?></p>
</section>

<div class="site__blog">
    <main class="site__content">
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <article class="post">
            <h2><?php the_title(); ?></h2>
            <?php the_post_thumbnail(); ?>
            <?php the_excerpt(); ?>
            <p>
                <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
            </p>
        </article>
        <?php endwhile; endif; ?>
        <div class="site__navigation">
            <div class="site__navigation__prev">
                <?php previous_posts_link( 'Page Précédente' ); ?>
            </div>
            <?php the_posts_pagination(); ?>
            <div class="site__navigation__next">
                <?php next_posts_link( 'Page Suivante' ); ?> 
            </div>
        </div>
    </main>
    <aside class="site__sidebar">
        <ul>
            <?php dynamic_sidebar( 'blog-sidebar' ); ?>
        </ul>
    </aside>
</div> 

</main>
<?php 

get_footer(); 

?>