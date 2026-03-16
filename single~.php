<?php get_header(); ?>
<?php
	$cat = get_the_category();
	$cat_id = $cat[0] -> cat_ID;
	$cat_name = $cat[0] -> name;
?>
			<section class="title-page-header flip-page">
				<div class="page-title-wrapper">
					<p class="page-title"><?php echo esc_html($cat_name); ?></p>
				</div>
				<div class="page-img-wrapper" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
				</div>
			</section>
</header><!-- end header-->
<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
?>

		<!-- Start cp_container-->
		<div class="cp_container backimage-fixed">
			<div class="cp_content flip-page">
				<?php breadcrumb(); ?>
				<section class="page-contentents-wrapper" >
					<section id="post-01" class="page-contents-section">
						<div class="page-contents-inner">
							<div class="post-contents">
								<div class="cattime-wrapper" style="margin: 10px auto 30px 0;"><a class="cat_area" href="<?php echo esc_url(get_category_link($cat_id)); ?>"><?php echo esc_html($cat_name); ?></a><time class="time_area"><?php the_time('Y/m/d') ?></time></div>
								<h1 class="page-subtitle"><?php the_title(); ?></h1>
								<div class="post-contets-wrapper">
								<!-- Start .page-contentents-wrapper ここから投稿内容-->
									<?php the_content(); ?>
								</div>	
							</div>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>alltopics" class="btn_normal btn_orange"><span class="btn_trial">お知らせ一覧に戻る</span></a>
						</div><!-- end .page-contents-inner-->
						
						<div class="sns-area-wrapper">
							<?php
								$url_encode = urlencode( get_permalink() );
								$title_encode = urlencode( get_the_title() );
							?>
							<p class="sns-area-title">SHARE and FOLLOW US</p>
							<div class="sns-area">
								<a target="_blank" href="<?php echo esc_url( 'https://www.facebook.com/share.php?u=' . $url_encode ); ?>"><img style="width: 70px; height: 70px;" src="<?php echo get_template_directory_uri(); ?>/img/icon-fb-300x300.png" alt="フェイスブック facebook KidsUP" /></a>
								<a target="_blank" href="<?php echo esc_url( 'https://twitter.com/share?url=' . $url_encode . '&text=学童保育型英会話スクールKidsUP' . $title_encode ); ?>"><img style="width: 70px; height: 70px;" src="<?php echo get_template_directory_uri(); ?>/img/icon-tw.png" alt="ツイッター twitter KidsUP" /></a>
								<a target="_blank" href="https://www.instagram.com/kidsup.jp/?ref=badge"><img style="width: 70px; height: 70px;" src="<?php echo get_template_directory_uri(); ?>/img/icon-inst-300x300.png" alt="インスタ instagram KidsUP" /></a>
							</div>
						</div>
						<h3 class="page-subtitle post-footer">最新情報</h3>
						<div class="slider-wide">
							
							<?php
							$cat_posts = get_posts(array(
								'post_type' => 'post',
								'posts_per_page' => 9,
								'orderby' => 'date',
								'order' => 'DESC'
								
							));
							global $post;
							if($cat_posts): foreach($cat_posts as $post): setup_postdata($post);
								$cat = get_the_category();
								$cat_id = $cat[0] -> cat_ID;
								$cat_name = $cat[0] -> name;
							?>

							<!-- ROOP START -->
							<figure>
								<a class="thumnail-area" href="<?php the_permalink() ?>" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)"></a>
								<div class="cattime-wrapper"><a class="cat_area" href="<?php echo esc_url(get_category_link($cat_id)); ?>"><?php echo esc_html($cat_name); ?></a><time class="time_area"><?php the_time('Y/m/d') ?></time><a href="<?php the_permalink() ?>" class="btn btn--circle btn--circle-c btn--shadow"><i class="fas fa-arrow-right"></i></a></div>
								<h5 class="seasonal-title2"><a href="<?php the_permalink() ?>"><?php echo mb_substr( $post->post_title, 0, 30) . '...'; ?></a></h5>
							</figure>
							<!-- ROOP END -->

							<?php endforeach; endif; wp_reset_postdata(); ?>

						</div>
					</section><!-- end #schooldetail-01-->
				</section><!-- end .page-contentents-wrapper-->
<?php
	endwhile;
endif;
?>				
<?php get_footer('page'); ?>