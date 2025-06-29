<?php get_header(); ?>

<main>
    <section class="posts-wrapper">
        <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 12,
                'orderby'        => 'date',
                'order'          => 'DESC',
                'paged'          => $paged
            );

            $posts = new WP_Query($args);

            if ($posts->have_posts()) :
                echo '<div class="posts-grid">';
                while ($posts->have_posts()) : $posts->the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <a href="<?php the_permalink(); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumbnail">
                                    <?php the_post_thumbnail('medium'); ?>
                                </div>
                            <?php endif; ?>
                            <h2 class="post-title"><?php the_title(); ?></h2>
                        </a>
                        <p class="post-excerpt"><?php the_excerpt(); ?></p>
                    </article>
                <?php endwhile;
                echo '</div>';

                $big = 999999999; 
                echo '<div class="pagination">';
                echo paginate_links(array(
                    'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format'  => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total'   => $posts->max_num_pages
                ));
                echo '</div>';

                wp_reset_postdata();
            else :
                echo '<p>Não foram encontrados posts.</p>';
            endif;
        ?>
    </section>
</main>

<?php get_footer(); ?>
