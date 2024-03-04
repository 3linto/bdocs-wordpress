<?php 
// Template Name: Contact
get_header(); ?>


<main class="main-content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post()?>

    <article class="page">
        <header class="page__header">
            <a class="page__anchor"><?php echo get_the_title( $post->post_parent ) ?></a>
            <h1 class="page__title"><?php the_title(); ?></h1>
        </header>
        <div class="page__content">
            <?php the_content(); ?>
            <?php echo do_shortcode( '[contact-form-7 id="6aed4c7" title="Kontaktformulär 1"]' ) ?>
        </div>
    </article>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>