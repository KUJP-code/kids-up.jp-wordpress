<?php get_header('page'); ?>
<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
?>
</header><!-- end header-->
		<!-- Start cp_container-->
		<div class="cp_container backimage-fixed">
			<div class="cp_content flip-page">
				<?php breadcrumb(); ?>
				<!-- Start .page-contentents-wrapper -->
				<section class="page-contentents-wrapper" >
					<section id="schooldetail-01" class="page-contents-section">
						<div class="page-contents-inner">
							<h3 class="page-subtitle"><?php the_title() ?></h3>
							<!-- Start ここからスクール情報 -->
							<ul class="school-information-wrapper slide-bottom show">
								<li>
									<div class="school-information-title p_normal-otherpage" style="font-weight: bold">住所</div>
									<div class="school-information-contents p_normal-otherpage"><?php echo get_post_meta($post->ID , 'address' ,true); ?></div>
								</li>
								<li>
									<div class="school-information-title p_normal-otherpage" style="font-weight: bold">電話番号</div>
									<div class="school-information-contents p_normal-otherpage"><?php echo get_post_meta($post->ID , 'tel' ,true); ?></div>
								</li>
								<li>
									<div class="school-information-title p_normal-otherpage" style="font-weight: bold">営業時間</div>
									<div class="school-information-contents p_normal-otherpage"><?php echo get_post_meta($post->ID , 'time' ,true); ?></div>
								</li>
								<li>
									<div class="school-information-title p_normal-otherpage" style="font-weight: bold">最寄駅</div>
									<div class="school-information-contents p_normal-otherpage"><?php echo get_post_meta($post->ID , 'station' ,true); ?></div>
								</li>
								<li>
									<div class="school-information-title p_normal-otherpage" style="font-weight: bold">アクセス</div>
									<div class="school-information-contents p_normal-otherpage"><?php echo get_post_meta($post->ID , 'access' ,true); ?></div>
								</li>
								<li>
									<div class="school-information-title p_normal-otherpage" style="font-weight: bold">送迎対象地域</div>
									<div class="school-information-contents p_normal-otherpage"><?php echo get_post_meta($post->ID , 'pickupbus' ,true); ?></div>
								</li>
								<li>
									<div class="school-information-title p_normal-otherpage" style="font-weight: bold"><?php the_title() ?>校の無料体験</div>
									<div class="school-information-contents p_normal-otherpage"><a href="https://kids-up.jp/entry/#/calendar/<?php echo get_post_field( 'post_name', get_the_ID() ); ?>/undefined" class="btn_normal_narrow btn_orange" style="background-color: #83C0DA; margin-top: 7px; margin-left: 10px; text-align: center;">無料体験申し込み</a></div>
								</li>
							</ul>
							<!-- Start ここから投稿の内容(MAPとその他情報)-->
							<?php the_content(); ?>
							<!-- Start ここから送迎バス情報 -->
							<div class="school-bus-wrapper slide-bottom show">
								<div class="img-schoolbus-group box wow animated bounceInUp delay-0.5s" data-wow-delay="1s"><img src="<?php echo get_template_directory_uri(); ?>/img/img-schoolbus.svg" alt="KidsUPについて aboutus" width="94" height="54" /></div>
								<h5 class="p_normal-otherpage">【送迎対象予定小学校】</h5>
								<p class="p_normal-otherpage" style="margin-bottom: 1rem;"><?php echo get_post_meta($post->ID , 'elementaryscool' ,true); ?></p>
								<h5 class="p_normal-otherpage">【送迎対象予定保育園・幼稚園】</h5>
								<p class="p_normal-otherpage"><?php echo get_post_meta($post->ID , 'kindergarten' ,true); ?></p>
							</div>
							<!-- Start .page-contentents-wrapper ここからスクール共通バナー-->
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>school/" class="btn_normal btn_orange">スクール案内に戻る</a>
							<div class="school-footer-banner slide-bottom show">
								<img class="only_pc_only" src="<?php echo get_template_directory_uri(); ?>/img/img-banner-school-footer.jpg" alt="全スクール直営校で高いクオリティ KidsUP" /><img class="only_mb_only" src="<?php echo get_template_directory_uri(); ?>/img/img-banner-school-footer-sp.jpg" alt="全スクール直営校で高いクオリティ KidsUP" />
							</div>
						</div><!-- end .page-contents-inner -->
					</section><!-- end .page-contentents-wrapper-->
				</section><!-- end .page-contentents-wrapper-->
				<!-- End .page-contentents-wrapper ここまで投稿の内容-->
				
				
<?php
	endwhile;
endif;
?>				
<?php get_footer('page'); ?>