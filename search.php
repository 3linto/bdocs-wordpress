<?php 
get_header(); 
?>


<main class="main-content">

    
    <article class="page page--search">
        <header class="page__header">
            <a class="page__anchor">Search</a>
            <h1 class="page__title">Search results for: <?php the_search_query(); ?></h1>
        </header>
        <div class="page__content">
            <?php // get_search_form() ?>
        </div>
        <div class="page__posts">
            
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post()?>
             
            <?php if ( get_post_type() == 'page' ) : ?>

            <article class="post post--page">
                <header class="post__header">
                    <div class="post__type">Page</div>
                    <h3 class="post__title"><?php the_title(); ?></h3>
                </header>
                <div class="post__excerpt">
                    <?php the_excerpt(); ?>
                </div>
                <footer class="post__footer">
                    <a href="<?php the_permalink(); ?>">Go to page</a>
                </footer>
            </article>

            <?php else : ?>

            <article class="post">
                <header class="post__header">
                    <div class="post__type">Post</div>
                    <h3 class="post__title"><?php the_title(); ?></h3>
                    <div class="post__published"><?php the_time('F j, Y'); ?></div>
                </header>
                <div class="post__excerpt">
                    <?php the_excerpt(); ?>
                </div>
                <footer class="post__footer">
                    <a href="<?php the_permalink(); ?>">Read more</a>
                </footer>
            </article>

            <?php endif; ?>

            <?php endwhile; endif; ?>

        </div>
    </article>


</main>

<?php get_footer(); ?>