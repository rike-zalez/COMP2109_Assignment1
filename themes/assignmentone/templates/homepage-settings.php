<?php
/** 
 * Template Name: Homepage Settings
 * Template Post Type: page 
*/
get_header();
?>

<main> 
    <?php 

    ?>
    <section class="masthead" style="background-image: url('<?php echo esc_url(get_field('masthead_image')['url']); ?>')">
    </section>
    <section class="home-intro">
        <div>
            <h1><?php echo wp_kses_post(get_field('page_title')); ?></h1>
            <p><?php echo wp_kses_post(get_field('page_text')); ?></p>
        </div>
    </section>
    <section class="latest-posts">
        <h2>Latest Posts</h2>
        <div class="post-list">
            <?php
            $latest_posts_query = new WP_Query(array(
                'posts_per_page' => 3,
                'post_type' => 'post',
                'orderby' => 'date',
                'order' => 'DESC'
            ));

            if ($latest_posts_query->have_posts()) :
                while ($latest_posts_query->have_posts()) : $latest_posts_query->the_post();
            ?>
                    <article>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div><?php the_excerpt(); ?></div>
                        <a href="<?php the_permalink(); ?>" class="read-more">read more ...</a>
                    </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo 'No posts found';
            endif;
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>