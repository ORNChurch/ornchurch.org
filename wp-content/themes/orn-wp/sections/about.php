<?php 
/*-----------------------------------------------------------
 	global variable of theme option to grab theme data
 	-----------------------------------------------------------*/ 
 	global $heal_option;

/*-----------------------------------------------------------
	menu settings.
	-----------------------------------------------------------*/
	$about_menu = $heal_option['heal_about_menu']; 
	$about_id = strtolower(str_replace(' ', '_', $about_menu));

	?>		
	<!-- About Section -->
	<section id="<?php echo esc_attr($about_id); ?>">
		<div class="about-section">
			<?php if(!$heal_option['heal_about_agular']) { ?> 
			<div class="white-bg  section-padding angular">
				<div class="top-angle">
				</div><!-- /.top-angle -->
				<div class="container pb">
				<?php } else { ?>
				<div class="white-bg section-padding">
				<div class="container">
					<?php } ?>
						<div class="section-head clearfix">
							<h2 class="section-title"><?php echo ($heal_option['heal_about_title']) ? esc_html($heal_option['heal_about_title']) : 'About'; ?></h2>
							<div class="section-description">
								<?php echo ($heal_option['heal_about_des']) ? wp_kses_stripslashes($heal_option['heal_about_des']) : 'HEAL IS A CHARITY WEBSITE TEMPLATE AND A NOON PROFIT ORGANIZATION WORK WORLDWIDE FOR CHILDREN IN THE BANNER OF "SAVE THE CHILDREN". WE HELP THE CHILDREN FOR PROPER PHYSICAL AND MENTAL GROWTH.'; ?>
							</div><!-- /.section-description -->
						</div><!-- /.section-head clearfix -->

						<div class="section-content">
							<div class="row">
								<div class="content-box col-md-8 from-bottom delay-200">
									<div class="hex content-icon-hex pull-left">
										<div class="content-icon">
											<span aria-hidden="true" class="<?php echo esc_attr($heal_option['heal_story_icon']); ?>"></span>
										</div>
									</div><!-- /.content-icon-hex -->
									<h3 class="content-title"><?php echo esc_html($heal_option['heal_story_title']); ?></h3>
									<?php echo wp_kses_stripslashes($heal_option['heal_story_des']); ?>
								</div><!-- /.content-box -->

								<?php if(isset($heal_option['heal_story_slides'][1]['image'])) { ?>
								<div class="media-content media-right col-md-4 from-bottom delay-600">
									<div class="meida-container">
										<div id="about-img-carousel" class="about-img-carousel carousel slide" data-ride="carousel">
											<ol class="carousel-indicators">
												<?php for($i = 0; $i< count($heal_option['heal_story_slides']); $i++){ ?>
												<li data-target="#about-img-carousel" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i==0) ? 'active' : '' ?>"></li>
												<?php } ?>
											</ol><!-- /.carousel-indicators -->
											<div class="carousel-inner">
												<?php $i = 0;
												$sliders = $heal_option['heal_story_slides'];
												foreach ($sliders as $slider) {

													?>
													<div class="item <?php echo !$i ? 'active' : ''; ?>">
														<img src="<?php echo esc_url($slider['image']); ?>" alt="carousel image">				
													</div><!-- /.item -->
													<?php 
													$i = 1;	
												} ?>

											</div><!-- /.carousel-inner -->
										</div><!-- /#about-img-carousel -->
									</div><!-- /.meida-container -->
								</div><!-- /.media-content -->
								<?php } ?>
							</div><!-- row -->
						</div><!-- /.section-content -->
					</div><!-- /.container -->
					
				</div><!-- /.white-bg -->

				
				<?php if(!$heal_option['heal_mission_agular']) { ?>
				<div class="gray-bg angular section-padding">
					<div class="top-angle"></div>
					<div class="container pb">
					<?php } else { ?>
					<div class="gray-bg section-padding">
					<div class="container">
						<?php } ?>
						
							<div class="row">
								<div class="section-content">
									<div class="media-content media-left col-md-4 from-bottom delay-200">
										<div class="meida-container video-container">
											<?php if($heal_option['heal_mission_on_off']) { 
												
												global $wp_embed;
												$post_embed = $wp_embed->run_shortcode('[embed width="123" height="456"]'.esc_url($heal_option['heal_mission_youtube']).'[/embed]');
												echo $post_embed; 
											} else {
												echo do_shortcode( '[video src=" '. esc_url($heal_option['heal_mission_mp4']['url']) . '"]' );
											} ?>
										</div><!-- /.meida-container -->
									</div><!-- /.media-content -->

									<div class="content-box col-md-8 from-bottom delay-600">
										<div class="hex content-icon-hex pull-left">
											<div class="content-icon">
												<span aria-hidden="true" class="<?php echo esc_attr($heal_option['heal_mission_icon']); ?>"></span>
											</div>
										</div>
										<h3 class="content-title"><?php echo esc_html($heal_option['heal_mission_title']); ?></h3>
										<?php echo wp_kses_stripslashes($heal_option['heal_mission_des']); ?>
									</div><!-- /.content-box -->
								</div><!-- /.section-content -->
							</div><!-- /.row -->
						</div><!-- /.container -->

					</div><!-- ./gray-bg -->
				</div><!-- /.about-section -->
			</section><!-- /#about-->
			<!-- About Section End -->

