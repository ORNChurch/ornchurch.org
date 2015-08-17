<?php 
/*-----------------------------------------------------------
 	global variable of theme option to grab theme data
 	-----------------------------------------------------------*/ 
 	global $heal_option;
/*-----------------------------------------------------------
	menu settings.
	-----------------------------------------------------------*/
	$team_menu = $heal_option['heal_team_menu']; 
	$team_id = strtolower(str_replace(' ', '_', $team_menu));
	?>
	<!-- Team Section -->
	<section id="<?php echo esc_attr( $team_id ); ?>">
		<div class="team-section"> 
			<?php if(!$heal_option['heal_team_agular']) { ?> 
			<div class="white-bg angular section-padding">
				<div class="top-angle">
				</div><!-- /.top-angle -->
				<?php } else { ?>
				<div class="white-bg section-padding">
					<?php } ?>
					<div class="container">
						<div class="section-head clearfix">
							<h2 class="section-title"><?php echo esc_html( $heal_option['heal_team_title']) ; ?></h2>
							<div class="section-description">
								<?php echo wp_kses_stripslashes( $heal_option['heal_team_des'] ); ?>
							</div><!-- /.section-description -->
						</div><!-- /.section-head clearfix -->
						<div id="team-slider"  class="owl-carousel">
							<?php 
							// Query post type team
							query_posts('post_type=team' );
							if(have_posts()) : while(have_posts()) : the_post(); 
							?> 
							
								<div class="team-member-box from-bottom delay-200">
									<?php if (has_post_thumbnail()){ ?>
									<figure>
										<?php the_post_thumbnail(); ?>
									</figure>
									<?php }else { ?>
									<figure>
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/no-img-team.jpg">
									</figure>
									<?php } ?>
									<h3 class="member-name"><?php the_title(); ?></h3>
									<h4 class="member-designation"><?php echo esc_html(get_post_meta($post->ID, '_team_setting_id_designation', true)); ?></h4>
									<p class="member-description"><?php echo esc_html(get_post_meta( $post->ID, '_team_setting_id_sort_team_bio', true )); ?></p><!-- /.member-description -->
									<div class="social-buttons">
										<?php 
										$facebook = get_post_meta($post->ID, '_team_setting_id_facebook', true);	
										if(!empty($facebook)) { ?>
										<a href="<?php echo esc_url(get_post_meta($post->ID, '_team_setting_id_facebook', true)); ?>" class="facebook-btn"><i class="fa fa-facebook"></i></a>
										<?php } ?>

										<?php 
										$tw = get_post_meta($post->ID, '_team_setting_id_twitter', true);
										if(!empty($tw)) { ?>
										<a href="<?php echo esc_url(get_post_meta($post->ID, '_team_setting_id_twitter', true)); ?>" class="twitter-btn"><i class="fa fa-twitter"></i></a>
										<?php } ?>

										<?php 
										$dribble = get_post_meta($post->ID, '_team_setting_id_dribbble', true);
										if(!empty($dribble)) { ?>
										<a href="<?php echo esc_url(get_post_meta($post->ID, '_team_setting_id_dribbble', true)); ?>" class="dribbble-btn"><i class="fa fa-dribbble"></i></a>
										<?php } ?>

										<?php 
										$googlepls= get_post_meta($post->ID, '_team_setting_id_google_plus', true);
										if(!empty($googlepls)) { ?>
										<a href="<?php echo esc_url(get_post_meta($post->ID, '_team_setting_id_google_plus', true)); ?>" class="google-plus-btn"><i class="fa fa-google-plus"></i></a>
										<?php } ?>

										<?php 
										$linkein = get_post_meta($post->ID, '_team_setting_id_linkedin', true);
										if(!empty($linkein)) { ?>
										<a href="<?php echo esc_url(get_post_meta($post->ID, '_team_setting_id_linkedin', true)); ?>" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>
										<?php } ?>

									</div><!-- /.social-buttons -->
								</div><!-- /.team-member-box -->
							
							<?php
							// reset
							endwhile;endif; 
							wp_reset_query();
							?>
						</div><!-- /#team-slider -->
					</div><!-- /.container -->
				</div><!-- ./white-bg -->
			</div><!-- /.team-section -->
		</section><!-- /#team-->
		<!-- Team Section End -->

		<?php if ($heal_option['heal_volunteer_off_on']) { ?>

		<!-- Volunteer Section -->
		<section id="volunteer">
			<div class="volunteer-section">
				<?php if(!$heal_option['heal_volunteer_agular']) { ?> 
				<div class="gray-bg angular section-padding">
					<div class="top-angle">
					</div><!-- /.top-angle -->
					<div class="container pb">
					<?php } else { ?>
					<div class="gray-bg section-padding">
					<div class="container">
						<?php } ?>
						
							<div class="row">
								<div class="section-content">
									<div class="media-content media-left col-md-4 from-bottom delay-200">
										<div class="meida-container">
											<img src="<?php echo esc_url($heal_option['heal_team_volunteer_img']['url']); ?>" alt="">
										</div><!-- /.meida-container -->
									</div><!-- /.media-content -->
									<div class="content-box col-md-8 from-bottom delay-600">
										<div class="hex content-icon-hex pull-left">
											<div class="content-icon">
												<span aria-hidden="true" class="<?php echo esc_attr($heal_option['heal_team_volunteer_icon']); ?>"></span>
											</div>
										</div><!-- /.content-icon-hex -->
										<h3 class="content-title"><?php echo esc_html($heal_option['heal_team_volunteer_title']); ?></h3>
										<?php echo wp_kses_stripslashes( $heal_option['heal_team_volunteer_des'] ); ?>
										<p>
											<a href="<?php echo esc_url($heal_option['heal_team_volunteer_link']); ?>" class="btn custom-btn angle-effect">
												<?php echo $heal_option['heal_team_volunteer_text_link']; ?>
											</a>
										</p>
									</div><!-- /.content-box -->
								</div><!-- /.section-content -->
							</div><!-- /.row -->
						</div><!-- /.container -->
					</div><!-- ./gray-bg -->
				</div><!-- /.volunteer-section -->
			</section><!-- /#volunteer -->
			<!-- Volunteer Section End -->
			<?php } ?>