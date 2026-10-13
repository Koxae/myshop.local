<?php
/**
 * Title: Products Section
 * Slug: hover-boards/products-section
 * Categories: template
 */
$hover_boards_pluginsList = get_option( 'active_plugins' );
$hover_boards_plugin = 'woocommerce/woocommerce.php';
$hover_boards_results = in_array( $hover_boards_plugin , $hover_boards_pluginsList);
if ( $hover_boards_results )  {
?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}},"gradient":"section-background","layout":{"type":"default"}} -->
<div class="wp-block-group has-section-background-gradient-background has-background" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"product-section","layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-group product-section"><!-- wp:columns {"verticalAlignment":"bottom","className":"product-sec-boxes"} -->
<div class="wp-block-columns are-vertically-aligned-bottom product-sec-boxes"><!-- wp:column {"verticalAlignment":"bottom","width":"80%","className":"product-sec-left"} -->
<div class="wp-block-column is-vertically-aligned-bottom product-sec-left" style="flex-basis:80%"><!-- wp:heading {"level":3,"className":"product-sec-title","style":{"typography":{"fontSize":"32px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}}},"textColor":"section-bg"} -->
<h3 class="wp-block-heading product-sec-title has-section-bg-color has-text-color has-link-color" style="font-size:32px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'most view product', 'hover-boards' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"20%","className":"product-sec-right"} -->
<div class="wp-block-column is-vertically-aligned-bottom product-sec-right" style="flex-basis:20%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"product-cont-box","layout":{"type":"default"}} -->
<div class="wp-block-group product-cont-box"><!-- wp:group {"className":"main-tab","style":{"spacing":{"margin":{"bottom":"45px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group main-tab" style="margin-bottom:45px"><!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"15px","left":"30px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foreground","className":"tab-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"capitalize","fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"border":{"width":"0px","style":"none","radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"40px","right":"40px","top":"4px","bottom":"4px"}}}} -->
<div class="wp-block-button tab-title"><a class="wp-block-button__link has-foreground-color has-tertiary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:4px;padding-right:40px;padding-bottom:4px;padding-left:40px;font-size:16px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'all', 'hover-boards' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"tertiary","textColor":"foreground","className":"tab-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"capitalize","fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"border":{"width":"0px","style":"none","radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"40px","right":"40px","top":"4px","bottom":"4px"}}}} -->
<div class="wp-block-button tab-title"><a class="wp-block-button__link has-foreground-color has-tertiary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:4px;padding-right:40px;padding-bottom:4px;padding-left:40px;font-size:16px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'skates', 'hover-boards' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"tertiary","textColor":"foreground","className":"tab-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"capitalize","fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"border":{"width":"0px","style":"none","radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"40px","right":"40px","top":"4px","bottom":"4px"}}}} -->
<div class="wp-block-button tab-title"><a class="wp-block-button__link has-foreground-color has-tertiary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:4px;padding-right:40px;padding-bottom:4px;padding-left:40px;font-size:16px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'segway', 'hover-boards' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"tertiary","textColor":"foreground","className":"tab-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"capitalize","fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"border":{"width":"0px","style":"none","radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"40px","right":"40px","top":"4px","bottom":"4px"}}}} -->
<div class="wp-block-button tab-title"><a class="wp-block-button__link has-foreground-color has-tertiary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:4px;padding-right:40px;padding-bottom:4px;padding-left:40px;font-size:16px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'skate board', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"tab-content","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group tab-content" style="margin-top:0px;margin-bottom:0px"><!-- wp:woocommerce/product-collection {"queryId":31,"query":{"perPage":6,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":{"product_cat":[17]},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/by-category","hideControls":["inherit","hand-picked","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"product-card-boxes"} -->
<div class="wp-block-woocommerce-product-collection product-card-boxes"><!-- wp:woocommerce/product-template {"className":"owl-carousel"} -->
<!-- wp:group {"className":"product-card","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group product-card has-tertiary-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"250px","scale":"contain","className":"product-img","style":{"border":{"radius":{"topLeft":"0px","topRight":"25px","bottomRight":"0px","bottomLeft":"25px"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"center","level":4,"isLink":true,"className":"product-card-title","style":{"spacing":{"margin":{"bottom":"0rem","top":"20px"}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","className":"product-rating","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"10px"}},"color":{"text":"#ffc700"},"elements":{"link":{"color":{"text":"#ffc700"}}}}} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","textColor":"heading-color","className":"product-price-box","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"12px"}},"typography":{"fontSize":"15px"}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"backgroundColor":"primary","className":"product-card-btn","fontSize":"small","style":{"spacing":{"margin":{"top":"18px","bottom":"0px"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tab-content","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group tab-content" style="margin-top:0px;margin-bottom:0px"><!-- wp:woocommerce/product-collection {"queryId":32,"query":{"perPage":6,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":{"product_cat":[17]},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/by-category","hideControls":["inherit","hand-picked","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"product-card-boxes"} -->
<div class="wp-block-woocommerce-product-collection product-card-boxes"><!-- wp:woocommerce/product-template {"className":"owl-carousel"} -->
<!-- wp:group {"className":"product-card","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group product-card has-tertiary-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"250px","scale":"contain","className":"product-img","style":{"border":{"radius":{"topLeft":"0px","topRight":"25px","bottomRight":"0px","bottomLeft":"25px"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"center","level":4,"isLink":true,"className":"product-card-title","style":{"spacing":{"margin":{"bottom":"0rem","top":"20px"}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","className":"product-rating","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"10px"}},"color":{"text":"#ffc700"},"elements":{"link":{"color":{"text":"#ffc700"}}}}} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","textColor":"heading-color","className":"product-price-box","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"12px"}},"typography":{"fontSize":"15px"}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"backgroundColor":"primary","className":"product-card-btn","fontSize":"small","style":{"spacing":{"margin":{"top":"18px","bottom":"0px"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tab-content","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group tab-content" style="margin-top:0px;margin-bottom:0px"><!-- wp:woocommerce/product-collection {"queryId":33,"query":{"perPage":6,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":{"product_cat":[17]},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/by-category","hideControls":["inherit","hand-picked","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"product-card-boxes"} -->
<div class="wp-block-woocommerce-product-collection product-card-boxes"><!-- wp:woocommerce/product-template {"className":"owl-carousel"} -->
<!-- wp:group {"className":"product-card","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group product-card has-tertiary-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"250px","scale":"contain","className":"product-img","style":{"border":{"radius":{"topLeft":"0px","topRight":"25px","bottomRight":"0px","bottomLeft":"25px"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"center","level":4,"isLink":true,"className":"product-card-title","style":{"spacing":{"margin":{"bottom":"0rem","top":"20px"}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","className":"product-rating","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"10px"}},"color":{"text":"#ffc700"},"elements":{"link":{"color":{"text":"#ffc700"}}}}} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","textColor":"heading-color","className":"product-price-box","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"12px"}},"typography":{"fontSize":"15px"}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"backgroundColor":"primary","className":"product-card-btn","fontSize":"small","style":{"spacing":{"margin":{"top":"18px","bottom":"0px"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tab-content","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group tab-content" style="margin-top:0px;margin-bottom:0px"><!-- wp:woocommerce/product-collection {"queryId":34,"query":{"perPage":6,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":{"product_cat":[17]},"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":4,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/by-category","hideControls":["inherit","hand-picked","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"className":"product-card-boxes"} -->
<div class="wp-block-woocommerce-product-collection product-card-boxes"><!-- wp:woocommerce/product-template {"className":"owl-carousel"} -->
<!-- wp:group {"className":"product-card","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"tertiary","layout":{"type":"default"}} -->
<div class="wp-block-group product-card has-tertiary-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"height":"250px","scale":"contain","className":"product-img","style":{"border":{"radius":{"topLeft":"0px","topRight":"25px","bottomRight":"0px","bottomLeft":"25px"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"textAlign":"center","level":4,"isLink":true,"className":"product-card-title","style":{"spacing":{"margin":{"bottom":"0rem","top":"20px"}},"typography":{"lineHeight":"1.4","fontSize":"20px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}}},"textColor":"heading-color","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","className":"product-rating","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"10px"}},"color":{"text":"#ffc700"},"elements":{"link":{"color":{"text":"#ffc700"}}}}} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","textColor":"heading-color","className":"product-price-box","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-color"}}},"spacing":{"margin":{"top":"12px"}},"typography":{"fontSize":"15px"}}} /-->

<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"backgroundColor":"primary","className":"product-card-btn","fontSize":"small","style":{"spacing":{"margin":{"top":"18px","bottom":"0px"}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<?php } else { ?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}},"gradient":"section-background","layout":{"type":"default"}} -->
<div class="wp-block-group has-section-background-gradient-background has-background" style="margin-top:0px;margin-bottom:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"className":"product-section","layout":{"type":"constrained","contentSize":"85%"}} -->
<div class="wp-block-group product-section"><!-- wp:columns {"verticalAlignment":"bottom","className":"product-sec-boxes"} -->
<div class="wp-block-columns are-vertically-aligned-bottom product-sec-boxes"><!-- wp:column {"verticalAlignment":"bottom","width":"80%","className":"product-sec-left"} -->
<div class="wp-block-column is-vertically-aligned-bottom product-sec-left" style="flex-basis:80%"><!-- wp:heading {"level":3,"className":"product-sec-title","style":{"typography":{"fontSize":"32px","textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|section-bg"}}}},"textColor":"section-bg"} -->
<h3 class="wp-block-heading product-sec-title has-section-bg-color has-text-color has-link-color" style="font-size:32px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'most view product', 'hover-boards' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"20%","className":"product-sec-right"} -->
<div class="wp-block-column is-vertically-aligned-bottom product-sec-right" style="flex-basis:20%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"className":"product-cont-box","layout":{"type":"default"}} -->
<div class="wp-block-group product-cont-box"><!-- wp:group {"className":"main-tab","style":{"spacing":{"margin":{"bottom":"45px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group main-tab" style="margin-bottom:45px"><!-- wp:buttons {"style":{"spacing":{"blockGap":{"top":"15px","left":"30px"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"tertiary","textColor":"foreground","className":"tab-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"capitalize","fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"border":{"width":"0px","style":"none","radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"40px","right":"40px","top":"4px","bottom":"4px"}}}} -->
<div class="wp-block-button tab-title"><a class="wp-block-button__link has-foreground-color has-tertiary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:4px;padding-right:40px;padding-bottom:4px;padding-left:40px;font-size:16px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'all', 'hover-boards' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"tertiary","textColor":"foreground","className":"tab-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"capitalize","fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"border":{"width":"0px","style":"none","radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"40px","right":"40px","top":"4px","bottom":"4px"}}}} -->
<div class="wp-block-button tab-title"><a class="wp-block-button__link has-foreground-color has-tertiary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:4px;padding-right:40px;padding-bottom:4px;padding-left:40px;font-size:16px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'skates', 'hover-boards' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"tertiary","textColor":"foreground","className":"tab-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"capitalize","fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"border":{"width":"0px","style":"none","radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"40px","right":"40px","top":"4px","bottom":"4px"}}}} -->
<div class="wp-block-button tab-title"><a class="wp-block-button__link has-foreground-color has-tertiary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:4px;padding-right:40px;padding-bottom:4px;padding-left:40px;font-size:16px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'segway', 'hover-boards' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"tertiary","textColor":"foreground","className":"tab-title","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"textTransform":"capitalize","fontSize":"16px","fontStyle":"normal","fontWeight":"500"},"border":{"width":"0px","style":"none","radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"40px","right":"40px","top":"4px","bottom":"4px"}}}} -->
<div class="wp-block-button tab-title"><a class="wp-block-button__link has-foreground-color has-tertiary-background-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="border-style:none;border-width:0px;border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:4px;padding-right:40px;padding-bottom:4px;padding-left:40px;font-size:16px;font-style:normal;font-weight:500;text-transform:capitalize"><?php echo esc_html__( 'skate board', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"tab-content","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group tab-content" style="margin-top:0px;margin-bottom:0px"><!-- wp:group {"className":"product-card-boxes","layout":{"type":"default"}} -->
<div class="wp-block-group product-card-boxes"><!-- wp:columns {"className":"owl-carousel"} -->
<div class="wp-block-columns owl-carousel"><!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":53,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img5.png" alt="" class="wp-image-53" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'urban glide scooter', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":74,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img6.png" alt="" class="wp-image-74" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'street rider skateboard', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":75,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img7.png" alt="" class="wp-image-75" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'galaxy hoverboard X1', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":76,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img8.png" alt="" class="wp-image-76" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'pro speed inline skates', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":76,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img4.png" alt="" class="wp-image-76" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'urban glide scooter', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tab-content","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group tab-content" style="margin-top:0px;margin-bottom:0px"><!-- wp:group {"className":"product-card-boxes","layout":{"type":"default"}} -->
<div class="wp-block-group product-card-boxes"><!-- wp:columns {"className":"owl-carousel"} -->
<div class="wp-block-columns owl-carousel"><!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":53,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img3.png" alt="" class="wp-image-53" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'urban glide scooter', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":74,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img2.png" alt="" class="wp-image-74" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'street rider skateboard', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":75,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img1.png" alt="" class="wp-image-75" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'galaxy hoverboard X1', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":76,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img6.png" alt="" class="wp-image-76" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'pro speed inline skates', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":76,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img8.png" alt="" class="wp-image-76" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'urban glide scooter', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tab-content","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group tab-content" style="margin-top:0px;margin-bottom:0px"><!-- wp:group {"className":"product-card-boxes","layout":{"type":"default"}} -->
<div class="wp-block-group product-card-boxes"><!-- wp:columns {"className":"owl-carousel"} -->
<div class="wp-block-columns owl-carousel"><!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":53,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img1.png" alt="" class="wp-image-53" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'urban glide scooter', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":74,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img2.png" alt="" class="wp-image-74" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'street rider skateboard', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":75,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img3.png" alt="" class="wp-image-75" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'galaxy hoverboard X1', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":76,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img8.png" alt="" class="wp-image-76" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'pro speed inline skates', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":76,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img1.png" alt="" class="wp-image-76" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'urban glide scooter', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"tab-content","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group tab-content" style="margin-top:0px;margin-bottom:0px"><!-- wp:group {"className":"product-card-boxes","layout":{"type":"default"}} -->
<div class="wp-block-group product-card-boxes"><!-- wp:columns {"className":"owl-carousel"} -->
<div class="wp-block-columns owl-carousel"><!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":53,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img6.png" alt="" class="wp-image-53" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'urban glide scooter', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":74,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img8.png" alt="" class="wp-image-74" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'street rider skateboard', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":75,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img3.png" alt="" class="wp-image-75" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'galaxy hoverboard X1', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":76,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img5.png" alt="" class="wp-image-76" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'pro speed inline skates', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"product-card","style":{"border":{"radius":{"topLeft":"30px","topRight":"30px","bottomLeft":"30px","bottomRight":"30px"}},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"20px","left":"0px"}}},"backgroundColor":"tertiary"} -->
<div class="wp-block-column product-card has-tertiary-background-color has-background" style="border-top-left-radius:30px;border-top-right-radius:30px;border-bottom-left-radius:30px;border-bottom-right-radius:30px;padding-top:0px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"className":"product-img-box","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"10px","right":"10px"}},"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}},"backgroundColor":"section-bg","layout":{"type":"default"}} -->
<div class="wp-block-group product-img-box has-section-bg-background-color has-background" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;padding-top:20px;padding-right:10px;padding-bottom:20px;padding-left:10px"><!-- wp:image {"id":76,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","className":"product-img"} -->
<figure class="wp-block-image size-full is-resized product-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/product-img7.png" alt="" class="wp-image-76" style="width:auto;height:250px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":4,"className":"product-card-title","style":{"typography":{"textAlign":"center","fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"top":"20px"}}}} -->
<h4 class="wp-block-heading has-text-align-center product-card-title" style="margin-top:20px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize"><?php echo esc_html__( 'urban glide scooter', 'hover-boards' ); ?></h4>
<!-- /wp:heading -->

<!-- wp:image {"id":58,"width":"auto","height":"12px","sizeSlug":"full","linkDestination":"none","align":"center","className":"product-rating","style":{"spacing":{"margin":{"top":"10px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized product-rating" style="margin-top:10px"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/rating-img.png" alt="" class="wp-image-58" style="width:auto;height:12px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"product-price-box","style":{"spacing":{"blockGap":"10px","margin":{"top":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group product-price-box" style="margin-top:12px"><!-- wp:paragraph {"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}}} -->
<p style="font-size:20px;font-style:normal;font-weight:600"><?php echo esc_html__( '$26.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"color":{"text":"#3f3f3f"},"elements":{"link":{"color":{"text":"#3f3f3f"}}},"typography":{"fontSize":"12px","textDecoration":"line-through","fontStyle":"normal","fontWeight":"300"}}} -->
<p class="has-text-color has-link-color" style="color:#3f3f3f;font-size:12px;font-style:normal;font-weight:300;text-decoration:line-through"><?php echo esc_html__( '$50.00', 'hover-boards' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"product-card-btn","style":{"spacing":{"margin":{"top":"18px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons product-card-btn" style="margin-top:18px"><!-- wp:button {"style":{"typography":{"fontSize":"15px","textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"border":{"radius":{"topLeft":"4px","topRight":"4px","bottomLeft":"4px","bottomRight":"4px"}},"spacing":{"padding":{"left":"25px","right":"25px","top":"6px","bottom":"6px"}}}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-custom-font-size wp-element-button" href="#" style="border-top-left-radius:4px;border-top-right-radius:4px;border-bottom-left-radius:4px;border-bottom-right-radius:4px;padding-top:6px;padding-right:25px;padding-bottom:6px;padding-left:25px;font-size:15px;font-style:normal;font-weight:500;text-transform:uppercase"><?php echo esc_html__( 'add to cart', 'hover-boards' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<?php } ?>