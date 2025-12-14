<?php
/**
 * Template Part: Display All Posts
 */

$args = [
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => -1, // get ALL posts
    'orderby'        => 'date',
    'order'          => 'DESC',
];

$query = new WP_Query($args);

if ($query->have_posts()) :
?>

<section class="all-posts">
    <div class="posts-wrapper">

        <?php while ($query->have_posts()) : $query->the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumb">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('medium'); ?>
                        </a>
                    </div>
                <?php endif; ?>

                <div class="post-content">
                    <h2 class="post-title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <div class="post-meta">
                        <span><?php the_date(); ?></span>
                        <span> | <?php the_author(); ?></span>
                    </div>

                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>
                    </div>

                    <a class="read-more" href="<?php the_permalink(); ?>">
                        Read More →
                    </a>
                </div>

            </article>

        <?php endwhile; ?>

    </div>
</section>

<?php
wp_reset_postdata();
else :
    echo '<p>No posts found.</p>';
endif;