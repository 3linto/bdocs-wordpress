<?php 
// Template Name: Blog
get_header(); 
?>


<main class="main-content">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post()?>

    <article class="page">
        <header class="page__header">
            <a class="page__anchor"><?php echo get_the_title( $post->post_parent ) ?></a>
            <h1 class="page__title"><?php the_title(); ?></h1>
        </header>
        <div class="page__content">
            <?php the_content(); ?>
        </div>
        <div class="page__posts">

            <?php 
                $args = [
                    'post_type' => 'post',
                ];

                $query = new WP_Query($args);

                if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();
             ?>
             
             <article class="post">
                <header class="post__header">
                    <div class="post__published"><?php the_time('F j, Y'); ?></div>
                    <h3 class="post__title"><?php the_title(); ?></h3>
                </header>
                <div class="post__excerpt">
                    <?php the_excerpt(); ?>
                </div>
                <footer class="post__footer">
                    <a href="<?php the_permalink(); ?>">Read more</a>
                </footer>
             </article>

             <?php endwhile; wp_reset_postdata(); endif; ?>

        </div>
    </article>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>