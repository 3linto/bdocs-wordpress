<?php get_header(); ?>


<main class="main-content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post()?>

    <article class="page">
        <header class="page__header">
            <a class="page__anchor">Published: <?php the_time('F j, Y h:i') ?></a>
            <h1 class="page__title"><?php the_title(); ?></h1>
        </header>
        <div class="page__content">
            <?php the_content(); ?>
        </div>
    </article>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>