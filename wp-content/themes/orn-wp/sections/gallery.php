<?php 
/*-----------------------------------------------------------
 	global variable of theme option to grab theme data
 	-----------------------------------------------------------*/ 
 	global $heal_option;
/*-----------------------------------------------------------
	menu settings.
	-----------------------------------------------------------*/
	$gallery_menu = $heal_option['heal_gallery_menu']; 
	$gallery_id = strtolower(str_replace(' ', '_', $gallery_menu));
	
	?>
	<!-- Gallery Section -->
	<section id="<?php echo esc_attr( $gallery_id); ?>">
		<?php if(!$heal_option['heal_gallery_agular']) { ?> 
		<div class="gallery-section white-bg angular section-padding">
			<div class="top-angle">
			</div><!-- /.top-angle -->
			<div class="container pb">
				<?php } else { ?>
				<div class="gallery-section white-bg section-padding">
					<div class="container">
						<?php } ?>
						
						<div class="section-head clearfix">
							<h2 class="section-title">
								<?php echo esc_html($heal_option['heal_gallery_title']); ?>
							</h2><!-- /.section-title -->
							<div class="section-description">
								<?php echo wp_kses_stripslashes( $heal_option['heal_gallery_des'] ); ?>
							</div>
						</div><!-- /.section-head clearfix -->
						<div id="gallery-container" class="gallery-container">
							<div class="galleryFilter">
								<a href="#" data-filter="" class="current">All</a>
								<?php
								$filters = get_terms( 'filter_menu' );
								foreach ($filters as $filter) {
									echo "<a href=\"#\" data-filter=\".$filter->slug\">$filter->name</a>";
								}
								?>
							</div> <!-- /.galleryFilter -->
							<div class="gallery-item isotope-gallery-items element-from-bottom">
								<?php 
								query_posts('post_type=gallery&taxonomy=filter_menu&posts_per_page=' . esc_attr($heal_option['heal_gallery_post_no']) );	
								if(have_posts()) : while(have_posts()) : the_post(); 
								$terms = wp_get_post_terms(get_the_ID(), 'filter_menu', true );	
								$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
								
								$t = array();   	
								foreach($terms as $term) 
									$t[] = $term->slug;
								?> 
								<figure class="item <?php echo implode(' ', $t); ?>">
									<?php if ( has_post_thumbnail() ) { 
										the_post_thumbnail('gallery-thumb'); 
									} else {
										echo '<img src="'.get_template_directory_uri().'/assets/images/no-img.jpg">';
									}
									?>
									<div class="item-link">
										<a class="link-hex boxer" data-boxer-height="500" data-boxer-width="500" href="<?php echo esc_url( $url ); ?>">
											<span>
												<i class="fa fa-plus"></i>
											</span>
										</a>
									</div><!-- /.item-link -->
									<figcaption class="item-description">
										<h4 class="item-title"><?php the_title(); ?></h4><!-- /.item-title -->
										<p class="gallery-item-description"><?php echo esc_html(get_post_meta( $post->ID, '_gallery_setting_id_caption', true ) ); ?></p><!-- /.gallery-item-description -->
									</figcaption>
								</figure>
							<?php endwhile;endif;
							
					//reset
							wp_reset_query();
							?>
						</div><!-- /.gallery-item -->
					</div><!-- /gallery-container -->
				</div><!-- /.container -->
			</div><!-- /.gallery-section -->
		</section><!-- /#gallery -->
		<!-- Gallery Section End -->
