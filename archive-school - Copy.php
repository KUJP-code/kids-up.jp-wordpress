<?php get_header('school'); ?>
	<section class="title-page-header">
				<div class="page-title-wrapper">
					<h2 class="page-title">スクール案内</h2>
				</div>
				<div class="page-img-wrapper" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/img-page-header-school.jpg)">
				</div>
	</section>
</header><!-- end header-->

		<!-- Start cp_container-->
		<div class="cp_container backimage-fixed">
			<div class="cp_content">
				<!-- Start .page-contentents-wrapper ここから固定ページの内容-->
				<section class="page-contentents-wrapper">
					<section id="school-01" class="page-contents-section" style="padding-bottom: 0;">
						<div class="page-contents-inner">
							<h3 class="page-subtitle">スクール検索</h3>
							<p class="p_normal-otherpage">Kids UPは、東京都をはじめ、神奈川県、千葉県、埼玉県に展開する、学童保育型英会話スクールです。<br>当社が運営する英会話スクールはすべて直営校で、最新のオリジナルプログラムにより「楽しく」「効果的」にお子様の英語力を伸ばします。<br>幼児コースから、帰国子女・インターナショナルスクール出身レベルのお子様に対応するスペシャリストコースまで、様々なコースをご用意していますので、ぜひお近くのスクールへお気軽にお問い合わせください。</p>
							<h4 class="page-subtitle3 search" style="margin-top: 50px;">地域から探す</h4>
							<secton class="tabBox">
								<input type="radio" id="tab_1" class="tabRadio" name="tab" checked>
								<input type="radio" id="tab_2" class="tabRadio" name="tab">
								<input type="radio" id="tab_3" class="tabRadio" name="tab">
								<input type="radio" id="tab_4" class="tabRadio" name="tab">
								<input type="radio" id="tab_5" class="tabRadio" name="tab">

								<ul class="tabList">
									<li class="tab">
										<label id="tab_label_1" for="tab_1">ALL</label>
									</li>
									<li class="tab">
										<label id="tab_label_2" for="tab_2">東京都</label>
									</li>
									<li class="tab">
										<label id="tab_label_3" for="tab_3">神奈川県</label>
									</li>
									<li class="tab">
										<label id="tab_label_4" for="tab_4">千葉県</label>
									</li>
									<li class="tab">
										<label id="tab_label_5" for="tab_5">埼玉県</label>
									</li>
									
								</ul>
								<div class="tabContentList">
									<article class="tabContent active" id="content_1">
										<h4 class="page-subtitle3">全地域スクール一覧</h4>
										<!-- Start 東京都のスクール一覧-->
										<h4 class="page-subtitle3 mappin">東京都</h4>
										<?php get_template_part( 'tokyo-school' ); ?>
										<h4 class="page-subtitle3 mappin">神奈川県</h4>
										<?php get_template_part( 'kanagawa-school' ); ?>
										<h4 class="page-subtitle3 mappin">千葉県</h4>
										<?php get_template_part( 'chiba-school' ); ?>
										<h4 class="page-subtitle3 mappin">埼玉県</h4>
										<?php get_template_part( 'saitama-school' ); ?>

									</article>
									<article class="tabContent" id="content_2">
										<h4 class="page-subtitle3 mappin">東京都のスクール一覧</h4>
										<!-- Start タクソノミー：東京都の全タームを表示+アンカーリンク-->
										<section class="region-wrapper">
											<?php
											  $terms = get_terms( 'tokyo-cat');
											  foreach ( $terms as $term ){
												  echo '<a href="#'.$term->slug.'">'.$term->name.'</a>';					
											  }
											?>
										</section>
										<?php get_template_part( 'tokyo-school' ); ?>
									</article>
									<article class="tabContent" id="content_3">
										<h4 class="page-subtitle3 mappin">神奈川県のスクール一覧</h4>
										<!-- Start タクソノミー：神奈川県の全タームを表示+アンカーリンク-->
										<section class="region-wrapper">
											<?php
											  $terms = get_terms( 'kanagawa-cat');
											  foreach ( $terms as $term ){
												  echo '<a href="#'.$term->slug.'">'.$term->name.'</a>';					
											  }
											?>
										</section>
										<?php get_template_part( 'kanagawa-school' ); ?>
									</article>
									<article class="tabContent" id="content_4">
										<h4 class="page-subtitle3 mappin">千葉県のスクール一覧</h4>
										<!-- Start タクソノミー：千葉県の全タームを表示+アンカーリンク-->
										<section class="region-wrapper">
											<?php
											  $terms = get_terms( 'chiba-cat');
											  foreach ( $terms as $term ){
												  echo '<a href="#'.$term->slug.'">'.$term->name.'</a>';					
											  }
											?>
										</section>
										<?php get_template_part( 'chiba-school' ); ?>
									</article>
									<article class="tabContent" id="content_5">
										<h4 class="page-subtitle3 mappin">埼玉県のスクール一覧</h4>
										<!-- Start タクソノミー：埼玉県の全タームを表示+アンカーリンク-->
										<section class="region-wrapper">
											<?php
											  $terms = get_terms( 'saitama-cat');
											  foreach ( $terms as $term ){
												  echo '<a href="#'.$term->slug.'">'.$term->name.'</a>';					
											  }
											?>
										</section>
										<?php get_template_part( 'saitama-school' ); ?>
									</article>
									
								</div>
							</secton>
							
						</div><!-- end page-contents-inner-->
					</section><!-- end school-01-->
				</section>
			
<?php get_footer('page'); ?>