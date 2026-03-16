<?php get_header('columndetail'); ?>
<?php
	$terms = get_terms( 'colunm-cat');
?>
			<section class="title-page-header flip-page">
				<div class="page-title-wrapper">
					<p class="page-title">コラム一覧</p>
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
					<section id="post-01" class="page-contents-section slide-bottom show">
						<div class="page-contents-inner">
							<div class="post-contents">
								<div class="cattime-wrapper" style="margin: 10px auto 30px 0;">
									<?php
											$terms = get_the_terms($post->ID, 'column-cat');
											if ($terms) :
												foreach ($terms as $term) {
													echo '<a class="cat_area" href="' . get_term_link($term) . '">' . $term->name . '</a>';
												}
											endif;
									?>
									<time class="time_area"><?php the_time('Y/m/d') ?></time></div>
								<h1 class="page-subtitle"><?php the_title(); ?></h1>
								<div class="post-contets-wrapper">
								<!-- Start .page-contentents-wrapper ここから投稿内容-->
									<?php the_content(); ?>
								</div>	
							</div>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>column" class="btn_normal btn_orange"><span class="btn_trial">コラム一覧に戻る</span></a>							</div><!-- end .page-contents-inner-->

<div class="trial-session-banner-2023-wrapper">
  <div class="trial-session-banner-2023">
	  <p class="trial-session-banner-2023-copy">無料体験のお申込みはこちらから</p>
	  <p>
    <a href="https://kids-up.jp/entry/">
      <img src="http://kids-up.jp/wp-content/uploads/2023/12/2023KidsUp-ad-free-trial-jpg.webp" alt="無料体験説明会受付中" />
    </a>
    </p>
  </div>												
</div>												
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
						<h3 class="page-subtitle post-footer">最新コラム</h3>
						<div class="slider-wide">
							
							<?php
							$cat_posts = get_posts(array(
								'post_type' => 'column',
								'posts_per_page' => 9,
								'orderby' => 'date',
								'order' => 'DESC'
								
							));
							global $post;
							if($cat_posts): foreach($cat_posts as $post): setup_postdata($post);
                            $cat = get_the_category();
                            $cat_id = null;
                            $cat_name = '';

                            if (!empty($cat) && isset($cat[0]) && is_object($cat[0])) {
                                $cat_id   = $cat[0]->cat_ID ?? null;
                                $cat_name = $cat[0]->name ?? '';
                            }

							?>

							<!-- ROOP START -->
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