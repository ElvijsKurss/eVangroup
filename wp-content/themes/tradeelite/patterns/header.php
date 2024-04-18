<?php
 /**
  * Title: Header
  * Slug: tradeelite/header
  * Categories: tradeelite
  */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","right":"15px","bottom":"12px","left":"15px"},"blockGap":"0px"}},"backgroundColor":"foreground","layout":{"inherit":true,"type":"constrained"},"metadata":{"name":"Top Header"}} -->
<div class="wp-block-group has-foreground-background-color has-background" style="padding-top:12px;padding-right:15px;padding-bottom:12px;padding-left:15px"><!-- wp:group {"align":"wide","className":"mobile-aligncenter","layout":{"type":"flex","allowOrientation":false,"justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide mobile-aligncenter"><!-- wp:group {"className":"mobile-aligncenter"} -->
<div class="wp-block-group mobile-aligncenter"><!-- wp:social-links {"iconColor":"background","iconColorValue":"#fff","size":"has-small-icon-size","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"blockGap":{"top":"20px","left":"20px"}}},"className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only" style="margin-top:0px;margin-bottom:0px"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"#","service":"wordpress"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"mobile-aligncenter","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group mobile-aligncenter has-white-color has-text-color has-link-color"><!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":8087,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#3f6de4","#3f6de4"]}},"className":"is-style-default vertical-aligncenter"} -->
<figure class="wp-block-image size-full is-style-default vertical-aligncenter"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-mail.png" alt="" class="wp-image-8087"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"color":{"text":"#d0d0d0"},"elements":{"link":{"color":{"text":"#d0d0d0"}}}},"fontSize":"small"} -->
<p class="has-text-color has-link-color has-small-font-size" style="color:#d0d0d0;font-style:normal;font-weight:400"><a href="mailto:support@example.com"><?php echo esc_html__( 'support@example.com', 'tradeelite' ); ?></a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"id":8087,"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#3f6de4","#3f6de4"]}},"className":"is-style-default vertical-aligncenter"} -->
<figure class="wp-block-image size-full is-style-default vertical-aligncenter"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon-location.png" alt="" class="wp-image-8087"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"},"color":{"text":"#d0d0d0"},"elements":{"link":{"color":{"text":"#d0d0d0"}}}},"fontSize":"small"} -->
<p class="has-text-color has-link-color has-small-font-size" style="color:#d0d0d0;font-style:normal;font-weight:400"><?php echo esc_html__( 'Sumter,SC 29150', 'tradeelite' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"15px","bottom":"0px","left":"15px"},"blockGap":"0px"}},"backgroundColor":"background","className":"has-background-background-color","layout":{"type":"constrained"},"metadata":{"name":"Main Header"}} -->
<div class="wp-block-group has-background-background-color has-background" style="padding-top:0px;padding-right:15px;padding-bottom:0px;padding-left:15px"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"20px","top":"20px","right":"0px","left":"0px"}}},"className":"mobile-aligncenter","layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide mobile-aligncenter" style="padding-top:20px;padding-right:0px;padding-bottom:20px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"mobile-aligncenter","layout":{"type":"flex"}} -->
<div class="wp-block-group mobile-aligncenter"><!-- wp:site-logo {"width":41,"shouldSyncIcon":false,"style":{"color":{"duotone":["#495efc","#495efc"]}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"},"fontSize":"tiny"} -->
<div class="wp-block-group has-tiny-font-size"><!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"1.6rem","letterSpacing":"2px","textTransform":"capitalize"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"30px"}},"className":"mobile-media-alignjustify","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group mobile-media-alignjustify"><!-- wp:navigation {"textColor":"foreground","overlayBackgroundColor":"background","overlayTextColor":"foreground","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"left"},"style":{"spacing":{"blockGap":"var:preset|spacing|60"},"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"capitalize","fontSize":"0.99rem"},"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"right":"0px","left":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-right:0px;padding-left:0px"><!-- wp:image {"id":3479,"width":"40px","sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":["#3f6de4","#ffffff"]}}} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/calling.png" alt="" class="wp-image-3479" style="width:40px"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px"}}} -->
<h3 class="wp-block-heading" style="font-size:20px"><a href="tel:+981237345"><?php echo esc_html__( '+ 98 123 7345', 'tradeelite' ); ?></a></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
<p style="font-size:14px"><?php echo esc_html__( 'Have any Questions?', 'tradeelite' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->