<?php
	add_shortcode('agent_home_shortcode','home_agent_shortcode');

	function home_agent_shortcode(){
		$args = array('post_type' => 'agent','posts_per_page' => -1); 
		$query = new WP_Query($args);
		if($query->have_posts()){
			//$facebook = get_post_meta(get_the_ID(),'agent_facebook', TRUE);
			while($query->have_posts()){
				$query->the_post();
				?>
					<div class="profile">
						<div class="profile-img">
							<?php 
								the_post_thumbnail(array(300,300));
							?>
							<div class="profile-img-info">
								<?php
									$link = get_post_meta(get_the_ID(),'agent_link',true); 
									$phone = get_post_meta(get_the_id(),'agent_phone',true);
									$email = get_post_meta(get_the_id(),'agent_email',true);
									$facebook = get_post_meta(get_the_ID(),'agent_facebook',true);
									$twitter = get_post_meta(get_the_ID(),'agent_twitter',true);
									$google_plus = get_post_meta(get_the_ID(),'agent_google_plus',true);
									$linkedin = get_post_meta(get_the_ID(),'agent_linkedin',true);
									$youtube = get_post_meta(get_the_ID(),'agent_youtube',true);
									$rss = get_post_meta(get_the_ID(),'agent_rss',true);
									$pinsert = get_post_meta(get_the_ID(),'agent_pinsert',true);
									$skype = get_post_meta(get_the_ID(),'agent_skype',true)
								?>
								<?php 
									if(!empty($facebook)){
										echo '<a href="'.$facebook.'" class="profile-social"><i class="fa fa-facebook"></i></a>';
									}
									if(!empty($twitter)){
										echo '<a href="'.$twitter.'" class="profile-social"><i class="fa fa-twitter"></i></a>';	
									}
									if(!empty($google_plus)){
										echo '<a href="'.$google_plus.'" class="profile-social"><i class="fa fa-google-plus"></i></a>';
									}

									if(!empty($linkedin)){
										echo '<a href="'.$linkedin.'" class="profile-social"><i class="fa fa-linkedin"></i></a>';
									}

									if(!empty($youtube)){
										echo '<a href="'.$youtube.'" class="profile-social"><i class="fa fa-youtube"></i></a>';
									}
									
									if(!empty($rss)){
										echo '<a href="'.$rss.'" class="profile-social"><i class="fa fa-rss"></i></a>';
									}

									if(!empty($pinsert)){
										echo '<a href="'.$pinsert.'" class="profile-social"><i class="fa fa-pinterest"></i></a>';
									}
									
									if(!empty($skype)){
										echo '<a href="'.$skype.'" class="profile-social"><i class="fa fa-skype"></i></a>';
									}
								?>
							</div>
						</div>
						<h5 class="profile-heading"><?php the_title();?></h5>
						<p>
							<?php 
								if(!empty($link)){
									echo $link;
								}
							?>
						</p>
						<p>
							<i class="fa fa-phone"></i> <?php if(!empty($phone)){echo $phone;}?><br/>
							<i class="fa fa-envelope"></i><?php if(!empty($email)){echo $email;}?><br/>
						</p>
						<a href="<?php echo the_permalink(); ?>" class="read-more-link-alt">See Full Profile</a>
					</div>
				<?php
			}
		}
	}
?>