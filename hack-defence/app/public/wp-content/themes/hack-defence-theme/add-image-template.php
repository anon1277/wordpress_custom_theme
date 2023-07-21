<div class="wrap">
    <h1><?php _e('Add Image', 'text-domain'); ?></h1>
    <form id="add-image-form" method="post">
        <input type="hidden" name="action" value="add_image">
        <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('add_image_nonce'); ?>">
        <label for="image-url"><?php _e('Image URL', 'text-domain'); ?></label>
        <input type="text" name="image_url" id="image-url" class="regular-text">
        <p class="description"><?php _e('Enter the URL of the image you want to add.', 'text-domain'); ?></p>
        <?php submit_button(__('Add Image', 'text-domain'), 'primary', 'submit', false); ?>
    </form>
</div>




hackckckc