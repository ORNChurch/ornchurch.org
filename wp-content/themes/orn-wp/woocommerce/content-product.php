<?php
/**
 * The template for displaying product content within loops.
 *
 * Override this template by copying it to yourtheme/woocommerce/content-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $woocommerce_loop;

// Store loop count we're currently on
if ( empty( $woocommerce_loop['loop'] ) )
	$woocommerce_loop['loop'] = 0;

// Store column count for displaying the grid
if ( empty( $woocommerce_loop['columns'] ) )
	$woocommerce_loop['columns'] = apply_filters( 'loop_shop_columns', 4 );

// Ensure visibility
if ( ! $product || ! $product->is_visible() )
	return;

// Increase loop count
$woocommerce_loop['loop']++;

// Extra post classes
$classes = array();
if ( 0 == ( $woocommerce_loop['loop'] - 1 ) % $woocommerce_loop['columns'] || 1 == $woocommerce_loop['columns'] )
	$classes[] = 'first';
if ( 0 == $woocommerce_loop['loop'] % $woocommerce_loop['columns'] )
	$classes[] = 'last';
?>
<div  <?php post_class( 'col-sm-4 col-xs-6 xs-full' ); ?>>

	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
	<div class="product-item clearfix">
		<div class="product-image">
		<?php if(has_post_thumbnail()) { ?>
			<a class="thumb" href="<?php the_permalink(); ?>">

				<?php
			/**
			 * woocommerce_before_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_show_product_loop_sale_flash - 10
			 * @hooked woocommerce_template_loop_product_thumbnail - 10
			 */
			do_action( 'woocommerce_before_shop_loop_item_title' );

			?>
		</a>
		<?php }else {
			echo '<img src="'.get_template_directory_uri(). '/assets/images/no-img-team.jpg" alt="">';
			} ?>
		<?php 
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );

		 ?>
		<a href="<?php  echo $image[0]; ?>" class="quick-view boxer" title="<?php the_title(); ?>"><span>Quick View</span></a>
	</div>

	<div class="product-description">
		<div class="product-head">
			<h2 class="product-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php
			/**
			 * woocommerce_after_shop_loop_item_title hook
			 *
			 * @hooked woocommerce_template_loop_rating - 5
			 * @hooked woocommerce_template_loop_price - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item_title' );

			?>

		</div>
		<div class="product-action">

			<?php //echo cc_love() ?>
			<?php

			/**
			 * woocommerce_after_shop_loop_item hook
			 *
			 * @hooked woocommerce_template_loop_add_to_cart - 10
			 */
			do_action( 'woocommerce_after_shop_loop_item' ); 

			?>
		</div>
	</div>
</div>
<!--  /.product-item -->
</div>
