<?php
/**
 * Title: Home Banner
 * Slug: hover-boards/home-banner
 * Categories: template
 */
?>
<!-- wp:group {"metadata":{"patternName":"hover-boards/home-banner","name":"Home Banner","categories":["hover-boards-home-banner"]},"className":"banner-section","style":{"dimensions":{"minHeight":""},"border":{"radius":"0px"},"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group banner-section has-tertiary-background-color has-background" style="border-radius:0px;margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/images/banner-bg.png","id":6,"dimRatio":60,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":800,"contentPosition":"center center","sizeSlug":"large","className":"banner-bg","style":{"spacing":{"padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"35px","bottomRight":"35px"},"color":"#e0e0e0","width":"5px"}},"layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-cover banner-bg has-border-color" style="border-color:#e0e0e0;border-width:5px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:35px;border-bottom-right-radius:35px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px;min-height:800px"><img class="wp-block-cover__image-background wp-image-6 size-large" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/banner-bg.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-60 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"banner-boxes"} -->
<div class="wp-block-columns banner-boxes"><!-- wp:column {"width":"55%","className":"banner-left"} -->
<div class="wp-block-column banner-left" style="flex-basis:55%"><!-- wp:heading {"className":"banner-title wow fadeInDown","style":{"typography":{"fontSize":"80px"}}} -->
<h2 class="wp-block-heading banner-title wow fadeInDown" style="font-size:80px"><?php echo esc_html__( 'Next-Gen ', 'hover-boards' ); ?><br><img class="wp-image-9" style="width: 150px;" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/heading-img.png" alt=""><?php echo esc_html__( 'Hoverboards', 'hover-boards' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-para wow fadeInDown","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"}}}} -->
<p class="banner-para wow fadeInDown" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--70);font-size:16px;font-style:normal;font-weight:400"><?php echo esc_html__( 'Discover high-performance hoverboards designed for smooth rides, smart control, and modern lifestyles. Built for both beginners and pros.', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-btn"} -->
<div class="wp-block-buttons banner-btn"><!-- wp:button {"textColor":"section-bg","style":{"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}},"color":{"background":"#00000000"},"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"},"width":"3px"},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"left":"40px","right":"40px","top":"10px","bottom":"10px"}}},"borderColor":"section-bg"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-section-bg-color has-text-color has-background has-link-color has-border-color has-section-bg-border-color has-custom-font-size wp-element-button" href="#" style="border-width:3px;border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;background-color:#00000000;padding-top:10px;padding-right:40px;padding-bottom:10px;padding-left:40px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'shop now', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"45%","className":"banner-right"} -->
<div class="wp-block-column banner-right" style="flex-basis:45%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"className":"info-section","style":{"spacing":{"margin":{"top":"-90px"}}},"layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-group info-section" style="margin-top:-90px"><!-- wp:columns {"className":"info-boxes","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns info-boxes" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"className":"info-box"} -->
<div class="wp-block-column info-box"><!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/images/info-img1.png","id":34,"dimRatio":80,"overlayColor":"quaternary","isUserOverlayColor":true,"minHeight":240,"sizeSlug":"full","className":"info-bg wow zoomIn","style":{"border":{"radius":{"topLeft":"18px","topRight":"18px","bottomLeft":"18px","bottomRight":"18px"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-cover info-bg wow zoomIn" style="border-top-left-radius:18px;border-top-right-radius:18px;border-bottom-left-radius:18px;border-bottom-right-radius:18px;min-height:240px"><img class="wp-block-cover__image-background wp-image-34 size-full" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/info-img1.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-quaternary-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"info-content"} -->
<div class="wp-block-columns info-content"><!-- wp:column {"width":"15%","className":"info-icon"} -->
<div class="wp-block-column info-icon" style="flex-basis:15%"><!-- wp:image {"id":38,"width":"auto","height":"30px","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/info-icon1.png" alt="" class="wp-image-38" style="width:auto;height:30px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"85%","className":"info-detail"} -->
<div class="wp-block-column info-detail" style="flex-basis:85%"><!-- wp:heading {"level":3,"className":"info-title","style":{"typography":{"fontSize":"20px","textTransform":"capitalize"}}} -->
<h3 class="wp-block-heading info-title" style="font-size:20px;text-transform:capitalize"><?php echo esc_html__( 'smart balance technology', 'hover-boards' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"info-para","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"10px"}}}} -->
<p class="info-para" style="margin-top:10px;font-size:14px"><?php echo esc_html__( 'Advanced sensors for stability and effortless control.', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"info-btn","style":{"spacing":{"margin":{"top":"8px"}}}} -->
<div class="wp-block-buttons info-btn" style="margin-top:8px"><!-- wp:button {"style":{"color":{"background":"#00000000"},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"0px","right":"0px","top":"5px","bottom":"5px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#00000000;padding-top:5px;padding-right:0px;padding-bottom:5px;padding-left:0px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'shop now', 'hover-boards' ); ?><img class="wp-image-57" style="width: 80px;" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/info-btnicon.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"info-box"} -->
<div class="wp-block-column info-box"><!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/images/info-img2.png","id":68,"dimRatio":80,"overlayColor":"quaternary","isUserOverlayColor":true,"minHeight":240,"sizeSlug":"full","className":"info-bg wow zoomIn","style":{"border":{"radius":{"topLeft":"18px","topRight":"18px","bottomLeft":"18px","bottomRight":"18px"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-cover info-bg wow zoomIn" style="border-top-left-radius:18px;border-top-right-radius:18px;border-bottom-left-radius:18px;border-bottom-right-radius:18px;min-height:240px"><img class="wp-block-cover__image-background wp-image-68 size-full" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/info-img2.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-quaternary-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"info-content"} -->
<div class="wp-block-columns info-content"><!-- wp:column {"width":"15%","className":"info-icon"} -->
<div class="wp-block-column info-icon" style="flex-basis:15%"><!-- wp:image {"id":64,"width":"auto","height":"30px","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/info-icon2.png" alt="" class="wp-image-64" style="width:auto;height:30px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"85%","className":"info-detail"} -->
<div class="wp-block-column info-detail" style="flex-basis:85%"><!-- wp:heading {"level":3,"className":"info-title","style":{"typography":{"fontSize":"20px","textTransform":"capitalize"}}} -->
<h3 class="wp-block-heading info-title" style="font-size:20px;text-transform:capitalize"><?php echo esc_html__( 'battery &amp; performance', 'hover-boards' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"info-para","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"10px"}}}} -->
<p class="info-para" style="margin-top:10px;font-size:14px"><?php echo esc_html__( 'Enhance battery life and optimize performance for longer, safer rides.', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"info-btn","style":{"spacing":{"margin":{"top":"8px"}}}} -->
<div class="wp-block-buttons info-btn" style="margin-top:8px"><!-- wp:button {"style":{"color":{"background":"#00000000"},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"0px","right":"0px","top":"5px","bottom":"5px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#00000000;padding-top:5px;padding-right:0px;padding-bottom:5px;padding-left:0px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'shop now', 'hover-boards' ); ?><img class="wp-image-57" style="width: 80px;" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/info-btnicon.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"info-box"} -->
<div class="wp-block-column info-box"><!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/images/info-img3.png","id":69,"dimRatio":80,"overlayColor":"quaternary","isUserOverlayColor":true,"minHeight":240,"sizeSlug":"full","className":"info-bg wow zoomIn","style":{"border":{"radius":{"topLeft":"18px","topRight":"18px","bottomLeft":"18px","bottomRight":"18px"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-cover info-bg wow zoomIn" style="border-top-left-radius:18px;border-top-right-radius:18px;border-bottom-left-radius:18px;border-bottom-right-radius:18px;min-height:240px"><img class="wp-block-cover__image-background wp-image-69 size-full" alt="" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/info-img3.png" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-quaternary-background-color has-background-dim-80 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"className":"info-content"} -->
<div class="wp-block-columns info-content"><!-- wp:column {"width":"15%","className":"info-icon"} -->
<div class="wp-block-column info-icon" style="flex-basis:15%"><!-- wp:image {"id":65,"width":"auto","height":"30px","sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large is-resized"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/info-icon3.png" alt="" class="wp-image-65" style="width:auto;height:30px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"85%","className":"info-detail"} -->
<div class="wp-block-column info-detail" style="flex-basis:85%"><!-- wp:heading {"level":3,"className":"info-title","style":{"typography":{"fontSize":"20px","textTransform":"capitalize"}}} -->
<h3 class="wp-block-heading info-title" style="font-size:20px;text-transform:capitalize"><?php echo esc_html__( 'custom upgrades', 'hover-boards' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"info-para","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"10px"}}}} -->
<p class="info-para" style="margin-top:10px;font-size:14px"><?php echo esc_html__( 'Upgrade your hoverboard with stylish designs and improved components.', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"info-btn","style":{"spacing":{"margin":{"top":"8px"}}}} -->
<div class="wp-block-buttons info-btn" style="margin-top:8px"><!-- wp:button {"style":{"color":{"background":"#00000000"},"typography":{"fontSize":"16px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"600"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"},"width":"0px","style":"none"},"spacing":{"padding":{"left":"0px","right":"0px","top":"5px","bottom":"5px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-background has-custom-font-size wp-element-button" href="#" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;background-color:#00000000;padding-top:5px;padding-right:0px;padding-bottom:5px;padding-left:0px;font-size:16px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'shop now', 'hover-boards' ); ?><img class="wp-image-57" style="width: 80px;" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/info-btnicon.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->