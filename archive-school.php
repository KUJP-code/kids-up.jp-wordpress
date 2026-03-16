<style>
  #brett-search-wrapper {
    align-items: center !important;
    background-color: rgb(255 255 255) !important;
    border-radius: 0.25rem !important;
    border-width: 1px !important;
    box-shadow: inset 0 0 0 1px var(--ku-secondary);
    color: rgb(15 23 42) !important;
    display: flex !important;
    gap: 0.5rem !important;
    margin-top: 50px;
    width: 100% !important;
  }

  #brett-search-label {
    font-size: calc(22px + 0.390625vw);
    margin: 0;
  }

  #brett-search {
    -webkit-appearance: textfield;
    border: none;
    border-radius: 0.25rem !important;
    box-shadow: inset 0 0 0 1px rgb(145, 135, 121);
    color: inherit;
    color: rgb(112 112 134) !important;
    flex-grow: 1;
    font-family: inherit;
    font-feature-settings: inherit;
    font-size: 100%;
    font-variation-settings: inherit;
    font-weight: 400 !important;
    line-height: inherit;
    margin: 0;
    opacity: 1;
    outline-offset: -2px;
    padding: 0.25rem !important;

    &:focus {
      outline: 2px solid #ef8200;
    }
  }

  @media screen and (max-width: 768px) {
    #brett-search-wrapper {
      flex-direction: column;
      justify-content: start;
      gap: 1rem !important;
    }

    #brett-search {
      width: 100%;
    }
  }
</style>
<?php get_header('school'); ?>
	<section class="title-page-header flip-page">
				<div class="page-title-wrapper">
					<h1 class="page-title">スクール案内</h1>
				</div>
				<div class="page-img-wrapper" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/img-page-header-school.jpg)">
				</div>
	</section>
</header><!-- end header-->

		<!-- Start cp_container-->
		<div class="cp_container backimage-fixed">
			<div class="cp_content　flip-page">
				<?php breadcrumb(); ?>
				<!-- Start .page-contentents-wrapper ここから固定ページの内容-->
				<section class="page-contentents-wrapper">
					<section id="school-01" class="page-contents-section" style="padding-bottom: 0;">
						<div class="page-contents-inner">
							<h3 class="page-subtitle">スクール検索</h3>
							<p class="p_normal-otherpage">Kids UPは、東京都をはじめ、神奈川県、千葉県、埼玉県に展開する、学童保育型英会話スクールです。<br>当社が運営する英会話スクールはすべて直営校で、最新のオリジナルプログラム・オリジナルテキストにより「楽しく」「効果的」にお子様の英語力を伸ばします。<br>幼児コースから、帰国子女・インターナショナルスクール出身レベルのお子様に対応するスペシャリストコースまで、様々なコースをご用意していますので、ぜひお近くのスクールへお気軽にお問い合わせください。</p>
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
								<div id="brett-search-wrapper">
  									<h4 id="brett-search-label" class="page-subtitle3 search">地域から探す</h4>
 									<input
    									class="page-subtitle3 search"
    									id="brett-search"
    									type="search"
    									placeholder="スクール名検索、住所検索、電話番号検索、エリア検索"
  									/>
								</div>
								<div class="tabContentList slide-bottom show">
									<article class="tabContent active" id="content_1">
										<h4 class="page-subtitle3" style=" margin: 10px 0 30px; border-bottom: 2px solid; padding-bottom: 10px; text-align: center;">全地域スクール一覧</h4>
										<!-- Start 東京都のスクール一覧-->
										<h4 class="page-subtitle3 mappin" style="margin-top: 0;">東京都</h4>
										<?php get_template_part( 'template-parts/all-tokyo-school' ); ?>
										<h4 class="page-subtitle3 mappin">神奈川県</h4>
										<?php get_template_part( 'template-parts/all-kanagawa-school' ); ?>
										<h4 class="page-subtitle3 mappin">千葉県</h4>
										<?php get_template_part( 'template-parts/all-chiba-school' ); ?>
										<h4 class="page-subtitle3 mappin">埼玉県</h4>
										<?php get_template_part( 'template-parts/all-saitama-school' ); ?>

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
										<!-- 東京のスクール一覧を表示する -->										
										<?php get_template_part( 'template-parts/tokyo-school' ); ?>
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
										<!-- 神奈川県のスクール一覧を表示する -->										
										<?php get_template_part( 'template-parts/kanagawa-school' ); ?>
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
										<!-- 千葉県のスクール一覧を表示する -->										
										<?php get_template_part( 'template-parts/chiba-school' ); ?>
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
										<!-- 埼玉県のスクール一覧を表示する -->										
										<?php get_template_part( 'template-parts/saitama-school' ); ?>
									</article>
									
								</div>
							</secton>
							
						</div><!-- end page-contents-inner-->
					</section><!-- end school-01-->
				</section>
				
<script defer>
  const searchInput = document.getElementById("brett-search");
  const schools = document.querySelectorAll(".school-list-wrapper");
  const areas = [...document.querySelectorAll(".page-subtitle5")];
  let query = "";

  searchInput.addEventListener("input", (e) => {
    query = e.target.value;
    search(query);
  });

  function search(query) {
    hideSchools(query);
    hideAreas();
    hidePrefectures();
  }

  function hideSchools(query) {
    schools.forEach((school) => {
      const name = school.querySelector(".school-name").innerText;
      const infoSection = school.querySelector(".school-info");
      const infoArray = [];
      infoSection
        .querySelectorAll(".p_normal-otherpage")
        .forEach((node) => infoArray.push(node.innerText));
      info = infoArray.join();
      if (name.includes(query) || info.includes(query)) {
        school.style.display = "flex";
      } else {
        school.style.display = "none";
      }
    });
  }

  function hideAreas() {
    areas.forEach((area) => {
      if (
        [...area.nextElementSibling.children].find((child) =>
          child.checkVisibility(),
        )
      ) {
        area.style.display = "block";
      } else {
        area.style.display = "none";
      }
    });
  }

  function hidePrefectures() {
    let activeArticle = document.querySelector("article.tabContent.active");
    let children = [...activeArticle.children].filter((child) =>
      ["H4", "H5"].includes(child.nodeName),
    );
    children.forEach((child, index) => {
      if (!child.classList.contains("mappin")) {
        return;
      }

      if (noSubHeadings(child, children[index + 1], children)) {
        child.style.display = "none";
      } else {
        child.style.display = "block";
      }
    });
  }

  function noSubHeadings(currentNode, nextNode, children) {
    if (!nextNode || nextNode.nodeName === "H4") return true;
    if (nextNode.checkVisibility()) return false;

    return noSubHeadings(
      currentNode,
      children[children.indexOf(currentNode + 1)],
      children,
    );
  }
</script>
			
<?php get_footer('page'); ?>