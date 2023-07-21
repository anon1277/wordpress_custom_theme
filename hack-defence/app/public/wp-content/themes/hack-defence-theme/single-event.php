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
            <p>Learn how the school of your dreams got started.</p>
        </div>
    </div>
</div>


cscsjlcnkscsjc sjc scjsd 

<div class="container container--narrow page-section">
    <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
            <a class="metabox__blog-home-link" href="<?php echo get_post_type_archive_link('event'); ?>"><i class="fa fa-home"
                  aria-hidden="true"></i> Back to Event Home</a> <span
                class="metabox__main"><?php the_title(); ?></span>
        </p>
    </div>


    <div class="metabox">
        <p>Posted by <?php  the_author_posts_link(); ?> on <?php the_time('n-F-Y');?> In
            <?echo get_the_category_list(' , ') ?>
        <p>
    </div>

    <?php if (has_post_thumbnail()) : ?>
    <div class="featured-image">
        <?php the_post_thumbnail(); ?>
    </div>
<?php endif; ?>

    <div class="generic-content">
        <?php the_excerpt();  ?>
        <p><a class="btn btn--blue" href="<?php the_permalink();?>">Continue Reading &raquo;</a></p>
    </div>

    <?php }
    get_footer();
 ?>