<?php get_header(); ?>
			<section class="title-page-header">
				<div class="page-title-wrapper">
					<h2 class="page-title">コラム一覧</h2>
				</div>
				<div class="page-img-wrapper" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
				</div>
			</section>
</header><!-- end header-->

		<!-- Start cp_container-->
		<div class="cp_container backimage-fixed">
			<div class="cp_content">
				<section class="page-contentents-wrapper">
					<section id="archive-01" class="page-contents-section slide-bottom show" style="padding-bottom: 0;">
						<div class="page-contents-inner">
							
							<section class="archive-wrapper">
								<?php
								if (have_posts()) :
									while (have_posts()) :
										the_post();
								?>
								
								<figure>
									<a class="thumnail-area" href="<?php the_permalink() ?>" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)"></a>
									<div class="cattime-wrapper">
										<?php
											$terms = get_the_terms($post->ID, 'column-cat');
											if ($terms) :
												foreach ($terms as $term) {
													echo '<a class="cat_area" href="' . get_term_link($term) . '">' . $term->name . '</a>';
												}
											endif;
										?>
										<time class="time_area"><?php the_time('Y/m/d') ?></time><a href="<?php the_permalink() ?>" class="btn btn--circle btn--circle-c btn--shadow"><i class="fas fa-arrow-right"></i></a>
									</div>
									<h5 class="seasonal-title2"><a href="<?php the_permalink() ?>"><?php echo mb_substr( $post->post_title, 0, 50) ; ?></a></h5>
								</figure>

								<?php
									endwhile;
								endif;
								?>
							</section>
					
							<seicton class="pagenation">
								<?php
								$args = array(
									'mid_size' => 1,
									'prev_text' => '&lt;&lt;前へ',
									'next_text' => '次へ&gt;&gt;',
									'screen_reader_text' => ' ',
								);
								the_posts_pagination($args);
								?>
							</section>
						</div><!-- end .page-contents-inner-->
					</section><!-- end #archive-01-->
				</section><!-- end .page-contentents-wrapper-->

<?php get_footer('page'); ?>