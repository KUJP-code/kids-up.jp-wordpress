				<section id="cta-footer" class="page-contents-section slide-bottom show">
					<div class="page-contents-inner bcg-orange2">
						<div class="cta-footer-title-wrapper">
							<h3 class="page-title2">選べて試せる！<br class="only_mb_only">レッスン</h3>
							<p class="p_normal-otherpage3" style="color: #fff;">Kids UPでは無料体験レッスンを実施しています。個別面談、個別体験レッスンも可能です。<br class="only_pc_only">お近くの教室、フォームからお気軽にお問い合わせください！</p>
						</div>
						<div class="col3_wrapper">
							<div class="col3_contents">
								<h4 class="page-subtitle2">シーズナルイベント</h4>
								<div class="img_normal-otherpage2"><img src="https://kids-up.jp/wp-content/uploads/2023/03/img-aboutus-04-01.jpg" alt="無料体験 KidsUP" width="300" height="164" class="alignnone size-full wp-image-216" /></div>
								<p class="p_normal-otherpage">長期休み期間の短期スクールや、季節のイベントやパーティーを開催しています。会員以外のお子様もご参加頂けるので、お試しにもピッタリです。</p>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>category/seasonal-cat" class="btn_normal btn_orange"><span class="btn_trial">シーズナルイベント一覧</span></a>
							</div>
							<div class="col3_contents">
								<h4 class="page-subtitle2">無料体験</h4>
								<div class="img_normal-otherpage2"><img src="https://kids-up.jp/wp-content/uploads/2023/03/img-aboutus-04-02.jpg" alt="先行予約 KidsUP" width="300" height="164" class="alignnone size-full wp-image-216" /></div>
								<p class="p_normal-otherpage">キッズアップでは無料体験レッスンを受付中です。学術的な裏付けの下、楽しく遊びながらしっかりと英語を身につけられるキッズアップのレッスンを体験してみてください。</p>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>entry" class="btn_normal btn_orange"><span class="btn_trial">無料体験に申し込む</span></a>
							</div>
							<div class="col3_contents">
								<h4 class="page-subtitle2">教室検索</h4>
								<div class="img_normal-otherpage2"><img src="https://kids-up.jp/wp-content/uploads/2023/03/img-aboutus-04-03.jpg" alt="シーズナルイベント KidsUP" width="300" height="164" class="alignnone size-full wp-image-216" /></div>
								<p class="p_normal-otherpage">お近くの教室で、レッスンや先生の雰囲気をご覧になってください！通われている小学校が送迎対象校かは各スクール情報でもご覧頂けます。</p>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>school" class="btn_normal btn_orange"><span class="btn_school-w">お近くの教室を探す</span></a>
							</div>
						</div><!-- end col3_contents-->
					</div><!-- end page-contents-inner-->
				</section>

				<section id="footer">
					<div class="footer-1">
						<div class="footer-1-left">
							<h3 class="footer-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/footer-logo.svg" alt="学童保育型　英会話スクール・幼児クラス - KidsUP"></a></h3>

							<div class="sns_area">
								<a href="https://www.instagram.com/kidsup.jp/">
									<img src="<?php echo get_template_directory_uri(); ?>/img/sns-insta.svg" alt="学童保育型　英会話スクール・幼児クラス - KidsUP インスタグラム" width="100%" height="auto">
								</a>
								<a href="https://www.youtube.com/c/Kids-upJp">
									<img src="<?php echo get_template_directory_uri(); ?>/img/sns-youtube.svg" alt="学童保育型　英会話スクール・幼児クラス - KidsUP　YOUTUBE" width="100%" height="auto">
								</a>
							

							</div>
							<small style="font-size: 12px; line-height: 30px; margin: 40px auto; color: #FFFFFF; font-weight: bold;">&copy;2016-<script type="text/javascript">myDate = new Date();myYear = myDate.getFullYear ();document.write(myYear);</script>Kids UP All Right Reserved.</small>
						</div>
						<div class="footer-1-right">
							<?php 
							  wp_nav_menu( array( 
								'theme_location' => 'footer-menu' 
							  ) ); 
							?>
							<div class="footer-subarea">
								<div class="footer-subarea-cta">
									<div class="footer-subarea-submenu-wrapper">
										<a href="https://kids-up.jp/lp-recruit/" class="btn_trial-footer">採用情報はこちら</a>
										<a href="<?php echo esc_url( home_url( '/' ) ); ?>entry" class="btn_trial-footer" style=" background: #83C0DA;">無料体験のご案内</a>
									</div>
								</div>
								<div class="footer-subarea-submenu">
									<div class="footer-subarea-submenu-wrapper">
										<a href="https://www.p-up.world/privacypolicy/">プライバシーポリシーについて</a>
										<a href="https://kids-up.jp/cookie-policy/">Cookieポリシーについて</a>
										

										<a href="https://kids-up.jp/online-terms-and-conditions/">特定商取引法に基づく表記</a>
									</div>
								</div>
							</div>
						</div>
				    </div>
				</section><!-- end footer-->				

			</div><!-- end cp_content-->
		</div><!-- end cp_container-->
	</div><!-- end cp_cont-->
<div class="footer-bar-wrapper only_mb_only" >
	<section id="footer-bar">
		<div id="nav_cta">
			<div class="nav_school"><a href="<?php echo esc_url( home_url( '/' ) ); ?>school">&emsp;教室</a></div>
			<div class="nav_tel"><a href="tel:0120-378-056">&emsp;電話</a></div>
			<div class="nav_trial"><a href="<?php echo esc_url( home_url( '/' ) ); ?>entry">無料体験</a></div>
		</div>
	</section>
</div>
<?php wp_footer(); ?>
<script>
new WOW().init();
</script>
</body>
</html>