<?php
        get_header();
        while(have_posts())
         {
             the_post(); ?>
<div class="page-banner">
    <div class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg')?>)"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
            <p>Learn how the school of your dreams got started dreams got started.</p>
        </div>
    </div>
</div>




<div class="container container--narrow page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
            <a class="metabox__blog-home-link" href="<?php echo site_url('/blog'); ?>"><i class="fa fa-home"
                  aria-hidden="true"></i> Back to Blog Home</a> <span
                class="metabox__main">Posted by <?php  the_author_posts_link(); ?> on <?php the_time('n-F-Y');?> In
            <?echo get_the_category_list(' , ') ?></span>
        </p>
    </div>


    <div class="metabox">
        <p>Posted by <?php  the_author_posts_link(); ?> on <?php the_time('n-F-Y');?> In
            <?echo get_the_category_list(' , ') ?>
        <p>
    </div>

    <div class="generic-content">
        <?php the_excerpt();  ?>
        <p><a class="btn btn--blue" href="<?php the_permalink();?>">Continue Reading &raquo;</a></p>
    </div>

    <?php if (has_post_thumbnail()) : ?>
    <div class="featured-image">
        <?php the_post_thumbnail(); ?>

        
    </div>
<?php endif; ?>


<div class="owl-carousel owl-theme">
    <?php
    $args = array(
        'post_type'      => 'attachment',
        'post_mime_type' => 'image',
        'post_status'    => 'inherit',
        'posts_per_page' => 7,
    );

    $query = new WP_Query($args);

    while ($query->have_posts()) :
        $query->the_post();
    ?>
        <div class="item">
            <?php echo wp_get_attachment_image(get_the_ID(), 'large'); ?>
        </div>
    <?php endwhile; ?>
</div>

    <?php }
    get_footer();
 ?>