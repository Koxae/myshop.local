<?php
/**
 * Title: Category Section
 * Slug: hover-boards/category-section
 * Categories: template
 */
$hover_boards_pluginsList = get_option( 'active_plugins' );
$hover_boards_plugin = 'woocommerce/woocommerce.php';
$hover_boards_results = in_array( $hover_boards_plugin , $hover_boards_pluginsList);
if ( $hover_boards_results )  {
?>

<!-- wp:group {"className":"product-category-section","style":{"spacing":{"margin":{"top":"0px"},"padding":{"right":"0px","left":"0px","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"tertiary","layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-group product-category-section has-tertiary-background-color has-background" style="margin-top:0px;padding-top:var(--wp--preset--spacing--70);padding-right:0px;padding-bottom:var(--wp--preset--spacing--70);padding-left:0px"><!-- wp:heading {"level":3,"className":"category-sec-title wow fadeInDown","style":{"typography":{"fontSize":"30px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}}} -->
<h3 class="wp-block-heading category-sec-title wow fadeInDown" style="font-size:30px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'flash sales today', 'hover-boards' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"category-box wow fadeInUp","layout":{"type":"default"}} -->
<div class="wp-block-group category-box wow fadeInUp"><!-- wp:woocommerce/product-categories {"hasImage":true,"hasEmpty":true,"className":"category-list-box"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php } else { ?>

<!-- wp:group {"className":"product-category-section","style":{"spacing":{"margin":{"top":"0px"},"padding":{"right":"0px","left":"0px","top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"backgroundColor":"tertiary","layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-group product-category-section has-tertiary-background-color has-background" style="margin-top:0px;padding-top:var(--wp--preset--spacing--70);padding-right:0px;padding-bottom:var(--wp--preset--spacing--70);padding-left:0px"><!-- wp:heading {"level":3,"className":"category-sec-title wow fadeInDown","style":{"typography":{"fontSize":"30px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}}} -->
<h3 class="wp-block-heading category-sec-title wow fadeInDown" style="font-size:30px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'flash sales today', 'hover-boards' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:group {"className":"category-box wow fadeInUp","layout":{"type":"default"}} -->
<div class="wp-block-group category-box wow fadeInUp"><!-- wp:columns {"className":"category-list-box owl-carousel"} -->
<div class="wp-block-columns category-list-box owl-carousel"><!-- wp:column {"className":"category-box"} -->
<div class="wp-block-column category-box"><!-- wp:group {"className":"category-img-box","style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"5px","right":"5px"},"margin":{"bottom":"var:preset|spacing|40"}},"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"50%","bottomRight":"50%"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group category-img-box has-section-bg-background-color has-background" style="border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-left-radius:50%;border-bottom-right-radius:50%;margin-bottom:var(--wp--preset--spacing--40);padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><!-- wp:image {"id":88,"width":"240px","height":"240px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img1.png" alt="" class="wp-image-88" style="object-fit:contain;width:240px;height:240px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"category-title","style":{"typography":{"textAlign":"center","fontSize":"22px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}}} -->
<h4 class="wp-block-heading has-text-align-center category-title" style="font-size:22px;font-style:normal;font-weight:600;text-transform:capitalize"><a href="#"><?php echo esc_html__( 'electric boards', 'hover-boards' ); ?></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"category-count","style":{"color":{"text":"#525252"},"elements":{"link":{"color":{"text":"#525252"}}},"typography":{"fontSize":"14px","textTransform":"capitalize","textAlign":"center"},"spacing":{"margin":{"top":"5px"}}}} -->
<p class="has-text-align-center category-count has-text-color has-link-color" style="color:#525252;margin-top:5px;font-size:14px;text-transform:capitalize"><?php echo esc_html__( '05 product available', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"category-box"} -->
<div class="wp-block-column category-box"><!-- wp:group {"className":"category-img-box","style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"5px","right":"5px"},"margin":{"bottom":"var:preset|spacing|40"}},"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"50%","bottomRight":"50%"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group category-img-box has-section-bg-background-color has-background" style="border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-left-radius:50%;border-bottom-right-radius:50%;margin-bottom:var(--wp--preset--spacing--40);padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><!-- wp:image {"id":98,"width":"240px","height":"240px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img2.png" alt="" class="wp-image-98" style="object-fit:contain;width:240px;height:240px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"category-title","style":{"typography":{"textAlign":"center","fontSize":"22px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}}} -->
<h4 class="wp-block-heading has-text-align-center category-title" style="font-size:22px;font-style:normal;font-weight:600;text-transform:capitalize"><a href="#"><?php echo esc_html__( 'self-balancing', 'hover-boards' ); ?></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"category-count","style":{"color":{"text":"#525252"},"elements":{"link":{"color":{"text":"#525252"}}},"typography":{"fontSize":"14px","textTransform":"capitalize","textAlign":"center"},"spacing":{"margin":{"top":"5px"}}}} -->
<p class="has-text-align-center category-count has-text-color has-link-color" style="color:#525252;margin-top:5px;font-size:14px;text-transform:capitalize"><?php echo esc_html__( '05 product available', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"category-box"} -->
<div class="wp-block-column category-box"><!-- wp:group {"className":"category-img-box","style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"5px","right":"5px"},"margin":{"bottom":"var:preset|spacing|40"}},"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"50%","bottomRight":"50%"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group category-img-box has-section-bg-background-color has-background" style="border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-left-radius:50%;border-bottom-right-radius:50%;margin-bottom:var(--wp--preset--spacing--40);padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><!-- wp:image {"id":99,"width":"240px","height":"240px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img3.png" alt="" class="wp-image-99" style="object-fit:contain;width:240px;height:240px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"category-title","style":{"typography":{"textAlign":"center","fontSize":"22px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}}} -->
<h4 class="wp-block-heading has-text-align-center category-title" style="font-size:22px;font-style:normal;font-weight:600;text-transform:capitalize"><a href="#"><?php echo esc_html__( 'smart hoverboards', 'hover-boards' ); ?></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"category-count","style":{"color":{"text":"#525252"},"elements":{"link":{"color":{"text":"#525252"}}},"typography":{"fontSize":"14px","textTransform":"capitalize","textAlign":"center"},"spacing":{"margin":{"top":"5px"}}}} -->
<p class="has-text-align-center category-count has-text-color has-link-color" style="color:#525252;margin-top:5px;font-size:14px;text-transform:capitalize"><?php echo esc_html__( '05 product available', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"category-box"} -->
<div class="wp-block-column category-box"><!-- wp:group {"className":"category-img-box","style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"5px","right":"5px"},"margin":{"bottom":"var:preset|spacing|40"}},"border":{"radius":{"topLeft":"50%","topRight":"50%","bottomLeft":"50%","bottomRight":"50%"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group category-img-box has-section-bg-background-color has-background" style="border-top-left-radius:50%;border-top-right-radius:50%;border-bottom-left-radius:50%;border-bottom-right-radius:50%;margin-bottom:var(--wp--preset--spacing--40);padding-top:5px;padding-right:5px;padding-bottom:5px;padding-left:5px"><!-- wp:image {"id":100,"width":"240px","height":"240px","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img4.png" alt="" class="wp-image-100" style="object-fit:contain;width:240px;height:240px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"category-title","style":{"typography":{"textAlign":"center","fontSize":"22px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"}}} -->
<h4 class="wp-block-heading has-text-align-center category-title" style="font-size:22px;font-style:normal;font-weight:600;text-transform:capitalize"><a href="#"><?php echo esc_html__( 'kids ride boards', 'hover-boards' ); ?></a></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"category-count","style":{"color":{"text":"#525252"},"elements":{"link":{"color":{"text":"#525252"}}},"typography":{"fontSize":"14px","textTransform":"capitalize","textAlign":"center"},"spacing":{"margin":{"top":"5px"}}}} -->
<p class="has-text-align-center category-count has-text-color has-link-color" style="color:#525252;margin-top:5px;font-size:14px;text-transform:capitalize"><?php echo esc_html__( '05 product available', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php } ?>