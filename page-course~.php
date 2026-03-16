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
				<!-- Start .page-contentents-wrapper ここから固定ページの内容-->
				<section class="page-contentents-wrapper">
					<!-- Start top_section4-->
					<ul class="top_section4" style="margin-top: 50px;">
						<li class="top_sec4_content">
							<div class="top_sec4_content_left">
								<img src="<?php echo get_template_directory_uri(); ?>/img/top_sec4_back_1.jpg">		
							</div>
							<div class="top_sec4_content_right">
								<div class="top_sec4_content_detail">
									<p class="course_title_en">KINDY</p>
									<p class="course_title_ja">幼児コース</p>
									<p class="course_detail">オールイングリッシュの体験型アクティビティで楽しく遊び、「聞く、話す」と言った英語力の土台を育成します。</p>
									<div class="btn_main btn_main_orange">
										<a href="kindy/" class="btn bgskew"><span class="btn_title">幼児コース詳細</span></a>
									</div>
								</div>
							</div>
						</li>
						<li class="top_sec4_content slide-bottom show">
							<div class="top_sec4_content_left">
								<img src="<?php echo get_template_directory_uri(); ?>/img/top_sec4_back_2.jpg">		
							</div>
							<div class="top_sec4_content_right">
								<div class="top_sec4_content_detail">
									<p class="course_title_en">ELEMENTARY</p>
									<p class="course_title_ja">学童コース</p>
									<p class="course_detail">学校だけではできない挑戦や体験をお子様に提供します。オールイングリッシュの環境で、ワクワクしながら楽しく英語を学んでみませんか？</p>
									<div class="btn_main btn_main_orange">
										<a href="elementary/" class="btn bgskew"><span class="btn_title">学童コース詳細</span></a>
									</div>
								</div>
							</div>
						</li>
						<li class="top_sec4_content slide-bottom show">
							<div class="top_sec4_content_left">
								<img src="<?php echo get_template_directory_uri(); ?>/img/top_sec4_back_3.jpg">
							</div>
							<div class="top_sec4_content_right">
								<div class="top_sec4_content_detail">
									<p class="course_title_en">SPECIALIST</p>
									<p class="course_title_ja">上級コース</p>
									<p class="course_detail">脳全体を「英語脳」にし、「英語で考える」ことを身に付け、4技能のスキルを更に高めていくコースです。</p>
									<div class="btn_main btn_main_orange">
										<a href="specialist/" class="btn bgskew"><span class="btn_title">上級コース詳細</span></a>
									</div>
								</div>
							</div>
						</li>
						<li class="top_sec4_content slide-bottom show">
							<div class="top_sec4_content_left">
								<img src="<?php echo get_template_directory_uri(); ?>/img/top_sec4_back_4.jpg">		
							</div>
							<div class="top_sec4_content_right">
								<div class="top_sec4_content_detail">
									<p class="course_title_en">ONLINE</p>
									<p class="course_title_ja">オンラインコース</p>
									<p class="course_detail">KidsUPのレッスンをご家庭で！お子様の学びをサポートするコンテンツを豊富にご用意しております！</p>
									<div class="btn_main btn_main_orange">
										<a href="online/" class="btn bgskew"><span class="btn_title">オンラインコース詳細</span></a>
									</div>
								</div>
							</div>
						</li>
					</ul><!-- end .top_section4-->
				</section><!-- end .page-contentents-wrapper-->
<?php
	endwhile;
endif;
?>				
<?php get_footer('page'); ?>