<!-- <h4 style="text-align:center"> Slide Bar</h4> -->

<div class="slider-title">
    <h2 style="text-align:center"><?php echo esc_html($atts['title']); ?></h2>
</div>

<!-- test2 -->
<div class="owl-carousel owl-theme">
    <?php
    $args = array(
        'post_type'      => 'slidebar', // Change to 'slidebar' post type
        'post_status'    => 'publish', // Show only published posts
        'posts_per_page' => 7,
        'meta_query'     => array(
            array(
                'key'     => '_thumbnail_id', // Show only posts with featured images
                'compare' => 'EXISTS',
            ),
        ),
    );

    $query = new WP_Query($args);

    while ($query->have_posts()) :
        $query->the_post();
    ?>
        <div class="item">
            <?php the_post_thumbnail('large'); ?>
        </div>
    <?php endwhile; ?>
</div>
