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
<script>
  function inquiryLink() {
    window.location.href = "https://kids-up.jp/inquiry/";
  }
</script>

</html>