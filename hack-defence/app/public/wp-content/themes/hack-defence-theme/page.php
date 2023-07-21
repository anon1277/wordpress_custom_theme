
<?php
         get_header();
        while(have_posts())
         {
             the_post(); ?>
             
      <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg')?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
          <p>Learn how the school of your dreams got started.</p>
        </div>
      </div>
    </div>

    <?php
        $ParentId =  wp_get_post_parent_id(get_the_ID());
       if ($ParentId)
        { ?>
            <div class="container container--narrow page-section">
            <div class="metabox metabox--position-up metabox--with-home-link">
              <p>
                <a class="metabox__blog-home-link" href="<?php echo get_permalink($ParentId); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($ParentId );?></a> <span class="metabox__main"><?php the_title(); ?></span>
              </p>
            </div>
       <?php }
    ?>
    <?php 
    $testAray = get_pages(
        array(
            'child_of' => get_the_ID()
    )); 
    
    ?>
            <?php if ($ParentId or $testAray) { ?>
      <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink($ParentId); ?>"><?php echo get_the_title($ParentId); ?></a></h2>
        <ul class="min-list">
         <?php 
            if($ParentId)
                {
                    $findChildrenOf = $ParentId;
                }
            else
                {
                    $findChildrenOf  = get_the_ID();    
                }

                wp_list_pages(array(
                    'title_li' =>null ,
                    'child_of' =>   $findChildrenOf  
                ));
         ?>
        </ul>
      </div>
          <?php  } ?>

      <div class="generic-content">
        <?php the_content();?>
      </div>
    </div> 

    <?php if (has_post_thumbnail()) : ?>
    <div class="featured-image">
        <?php the_post_thumbnail(); ?>
    </div>
<?php endif; ?>


            
        <?php }
        get_footer  ();
 ?>