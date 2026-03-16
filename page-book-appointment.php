<?php get_header('entry'); ?>
<?php
if (have_posts()) :
	while (have_posts()) :
		the_post();
?>
<?php if(isset($_GET['id'])) { $schoolID = "/" . $_GET['id']; } ?>
</header><!-- end header-->
		<!-- Start cp_container-->
		<div class="cp_container backimage-fixed">
			<div class="cp_content flip-page">
				<?php breadcrumb(); ?>
				<!-- Start .page-contentents-wrapper ここから固定ページの内容-->
				<section class="page-contentents-wrapper" >
					
					<section id="entry-02" class="slide-bottom show">
						<div class="page-contents-inner">
							<h3 class="page-subtitle">無料体験レッスンお申し込み</h3>
							<p class="p_normal-otherpage">KidsUPでは、「無料体験レッスン＆説明会」を実施しています。お気軽にお申込み下さい。<br>※無料体験レッスンの内容・流れは<a href="#entry-01" style="color: #EF8200; font-weight: bold;">こちら</a>から</p>
							<p class="p_normal-otherpage">※日程のご都合が合わない方には、個別でのご相談・体験レッスンも承っております。ご都合が合わない方はこちらの<a href="<?php echo esc_url( home_url( '/' ) ); ?>inquiry">お問い合わせ</a>からご依頼ください。</p>
						</div>
						<div id="root"></div>
					</section><!-- end #entry-02-->

					<section id="entry-01" class="page-contents-section">
						<div class="page-contents-inner">
							<h3 class="page-subtitle">「無料体験レッスン＆説明会」の流れ</h3>
							<!--<p class="p_normal-otherpage">KidsUPでは、「無料体験レッスン＆説明会」を実施しています。お気軽にお申込み下さい。日程のご都合が合わない方には、個別でのご相談・体験レッスンも承っております。ご都合が合わない方はこちらの<a href="<?php echo esc_url( home_url( '/' ) ); ?>inquiry">お問い合わせ</a>からご依頼ください。</p>-->
						</div>
						<div class="top_sec6_content" style="margin-bottom: 20px;">
							<div class="top_sec6_content_detail">
								<div class="top_sec6_content_detail_wrapper">
									<div class="top_sec6_content_detail_img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/top_sec6_03.png);">
									</div><!-- end .top_sec6_content_detail_img-->
									<div class="top_sec6_content_detail_text">
										<div class="top_sec6_content_detail_text_wrapper">
											<p class="p_big">STEP1</p>
											<p class="p_normal">緊張しているお子様を明るく楽しいティーチャーがお出迎え。すぐに打ち解けて楽しくレッスンに参加していただけます。</p>
										</div>
									</div><!-- end .top_sec6_content_detail_text-->
								</div><!-- end .top_sec6_content_detail_wrapper-->
								<div class="top_sec6_content_detail_wrapper only_pc_only">
									<div class="top_sec6_content_detail_text">
										<p class="p_big">STEP2</p>
										<p class="p_normal">ゲーム、エクササイズ、読み聞かせ、クラフトなど短時間で複数のプログラムを体験していただけます。</p>
									</div>
									<div class="top_sec6_content_detail_img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/top_sec6_02.png);"></div>
								</div><!-- end .top_sec6_content_detail_wrapper-->
								<div class="top_sec6_content_detail_wrapper only_mb_only">
									<div class="top_sec6_content_detail_img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/top_sec6_02.png);"></div>
									<div class="top_sec6_content_detail_text">
										<p class="p_big">STEP2</p>
										<p class="p_normal">ゲーム、エクササイズ、読み聞かせ、クラフトなど短時間で複数のプログラムを体験していただけます。</p>
									</div>
								</div><!-- end .top_sec6_content_detail_wrapper-->
								<div class="top_sec6_content_detail_wrapper">
									<div class="top_sec6_content_detail_img" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/top_sec6_01.png);"></div>
									<div class="top_sec6_content_detail_text">
										<p class="p_big">STEP3</p>
										<p class="p_normal">あっという間の楽しい時間！英語で今日のレッスンの振り返りをした後は“good bye”ハイタッチでお別れです。</p>
									</div>
								</div><!-- end .top_sec6_content_detail_wrapper-->
								<p class="p_normal-otherpage" style="margin: 20px 10px 0;">※上記は一例です。内容は教室により異なりますので、詳しくは最寄りの教室にお問い合わせください。</p>
							</div>
						</div>
						<div class="page-contents-inner">
							<h3 class="page-subtitle" style="margin-top: 70px;">当日のスケジュール</h3>
							<div class="col2_wrapper">
								<div class="col2_contents">
									<p class="page-subtitle3" style="text-align: center;">お子様(無料体験レッスン)</p>
									<div class="col2_wrapper3 schedule-layout">
										<div class="col2_contents3-1 bcg-blue1">
											<p class="p_normal-otherpage2" style="text-align: center; font-weight: bold;">60min</p>
										</div>
										<div class="col2_contents3-2">
											<h5 class="page-subtitle3" style="color: #EF8200;">無料体験レッスン</h5>
											<p class="p_normal-otherpage">ゲーム、エクササイズ、読み聞かせ、クラフトなど短時間で複数のプログラムを体験していただけます。</p>
										</div>
									</div>
								</div>
								<div class="col2_contents">
									<p class="page-subtitle3" style="text-align: center;">保護者(説明会)</p>
									<div class="col2_wrapper3 schedule-layout">
										<div class="col2_contents3-1 bcg-blue1">
											<ul>
												<li class="p_normal-otherpage2" style="text-align: center;">25min</li>
												<li class="p_normal-otherpage2" style="text-align: center;">25min</li>
												<li class="p_normal-otherpage2" style="text-align: center;">10min</li>
												<li class="p_normal-otherpage2" style="text-align: center;">10min</li>
												<li class="p_normal-otherpage2" style="text-align: center;">15min</li>
											</ul>
										</div>
										<div class="col2_contents3-2" style="padding: 0;">
											<ul>
												<li class="p_normal-otherpage" style="border-bottom: 1px dashed #9FD4D5;">最近の英語教育と臨界期について</li>
												<li class="p_normal-otherpage" style="border-bottom: 1px dashed #9FD4D5;">KidsUPの内容説明</li>
												<li class="p_normal-otherpage" style="border-bottom: 1px dashed #9FD4D5;">体験レッスン紹介</li>
												<li class="p_normal-otherpage" style="border-bottom: 1px dashed #9FD4D5;">料金、入会方法の説明</li>
												<li class="p_normal-otherpage">質疑応答</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
					</section><!-- end #entry-01-->
</section><!-- end .page-contentents-wrapper-->

<?php
	endwhile;
endif;
?>				
<?php get_footer('page'); ?>