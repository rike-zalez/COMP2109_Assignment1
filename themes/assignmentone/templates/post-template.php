<?php
/** 
 * Template Name: Post Template
 * Template Post Type: post
*/
get_header();
?>

<main>
    <?php
    while (have_posts()) :
        the_post();
    ?>
        <section class="post-masthead" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url($post->ID, 'full')); ?>');">
            <div>
                <h1><?php the_title(); ?></h1>
            </div>
        </section>

        <div class="post-content">
            <?php the_content(); ?>
        </div>

    <?php endwhile; ?>

</main>

<?php get_footer(); ?>
