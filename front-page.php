<?php get_header("top"); ?>
</header><!-- end header-->
<section class="top-slide">
<script src="https://player.vimeo.com/api/player.js"></script>

</section><!-- end .top-slide-->

<div class="homepage">

<div class="homepage-wrapper">


<section class="hero">

<div class="hero-inner">

                <div class="hero-video-container">
                    <img
                      class="hero-image-fallback"
                      src=""
                      alt=""
                      aria-hidden="true" />
                    <iframe
                      id="desktop-hero-video"
                      class="hero-video-iframe desktop-hero-video"
                      src="https://player.vimeo.com/video/1122728938?autoplay=1&muted=1&loop=0&controls=0&title=0&byline=0&portrait=0&playsinline=1"
                      frameborder="0"
                      allow="autoplay; encrypted-media"
                      playsinline
                      allowfullscreen>
                    </iframe>

                    <iframe
                      id="mobile-hero-video"
                      class="hero-video-iframe mobile-hero-video"
                      src="https://player.vimeo.com/video/1125435786?autoplay=1&muted=1&loop=0&controls=0&title=0&byline=0&portrait=0&playsinline=1"
                      frameborder="0"
                      allow="autoplay; encrypted-media"
                      playsinline
                      allowfullscreen>
                    </iframe>





                    <div class="hero-overlay">
                      <button class="hero-skip-button" type="button">Skip</button>
                    </div>


        </div>
	</div>
</section>

<section class="container event-buttons">
  <div class="event-buttons-grid">
    <?php
    $cat_posts = get_posts([
        "post_type" => "post",
        "category_name" => "front-page",
        "posts_per_page" => 4,
        "orderby" => "date",
        "order" => "DESC",
    ]);

    global $post;
    if ($cat_posts):
        foreach ($cat_posts as $post):

            setup_postdata($post);

            $promo_link = function_exists("get_field")
                ? get_field("hero_link_override_optional", $post->ID)
                : null;

            $target_url =
                is_array($promo_link) && !empty($promo_link["url"])
                    ? $promo_link["url"]
                    : ($promo_link ?:
                    get_permalink($post->ID));

            $hero_desktop = function_exists("get_field")
                ? get_field("hero_image_desktop", $post->ID)
                : "";
            $hero_mobile = function_exists("get_field")
                ? get_field("hero_image_mobile", $post->ID)
                : "";

            $hero_desktop_url = $hero_desktop
                ? $hero_desktop["url"]
                : get_the_post_thumbnail_url($post->ID, "full");
            $hero_mobile_url = $hero_mobile
                ? $hero_mobile["url"]
                : get_the_post_thumbnail_url($post->ID, "large");

            $event_type_key = "other";

            if (function_exists("get_field")) {
                $maybe = get_field("event_type", $post->ID);

                if (is_array($maybe)) {
                    $maybe = $maybe["value"] ?? null;
                }

                if (is_string($maybe) && $maybe !== "") {
                    $event_type_key = $maybe;
                }
            }

            $type = kidsup_event_type_config($event_type_key);
            // default title unless custom label is added
            $button_title = $type["label"];

            if (function_exists("get_field")) {
                $custom_title = get_field("hero_button_title", $post->ID);
                if (is_string($custom_title) && $custom_title !== "") {
                    $button_title = $custom_title;
                }
            }

            $icon_markup = "";
            $icon_url = $type["icon"] ?? "";
            $icon_path = "";
            if (is_string($icon_url) && $icon_url !== "") {
                $base_uri = trailingslashit(get_stylesheet_directory_uri());
                if (strpos($icon_url, $base_uri) === 0) {
                    $relative = ltrim(substr($icon_url, strlen($base_uri)), "/");
                    $icon_path = trailingslashit(get_stylesheet_directory()) . $relative;
                }
            }

            if ($icon_path && file_exists($icon_path)) {
                $ext = strtolower(pathinfo($icon_path, PATHINFO_EXTENSION));
                if ($ext === "svg") {
                    $icon_markup = @file_get_contents($icon_path) ?: "";
                } elseif (in_array($ext, ["png", "jpg", "jpeg", "webp", "gif"], true)) {
                    $icon_markup = '<img src="' . esc_url($icon_url) . '" alt="" />';
                }
            }

            if ($icon_markup === "") {
                $fallback_svg = get_stylesheet_directory() . "/img/event-types/other.svg";
                $icon_markup = @file_get_contents($fallback_svg) ?: "";
            }
            ?>

      <a
        class="event-button"
        href="<?php echo esc_url($target_url); ?>"
        data-hero-desktop="<?php echo esc_url($hero_desktop_url); ?>"
        data-hero-mobile="<?php echo esc_url($hero_mobile_url); ?>"
        style="--event-color: <?php echo esc_attr(
            $type["color"] ?? "#999999",
        ); ?>;"
      >
        <span class="event-button-icon" aria-hidden="true">
          <?php echo $icon_markup; ?>
        </span>

        <span class="event-button-text">
          <?php
          $button_title_raw = (string) $button_title;
          $parts = explode("|", $button_title_raw, 2);

          if (count($parts) === 2) {
              // Keep author-entered spacing around "|" so same-line spacing is preserved.
              $before = $parts[0];
              $after = $parts[1];
              echo wp_kses($before, ["br" => [], "wbr" => []]);
              echo '<wbr><span class="event-button-nowrap">' .
                  wp_kses($after, ["br" => [], "wbr" => []]) .
                  "</span>";
          } else {
              echo wp_kses($button_title_raw, ["br" => [], "wbr" => []]);
          }
          ?>
        </span>

      </a>

    <?php
        endforeach;
    endif;
    wp_reset_postdata();
    ?>
  </div>
</section>
</div>

<section class="about-kidsup slide-bottom show">
	<div class="container">

	<div class="about-kidsup-inner">
		<div class="text-col">
				<h2>ABOUT KIDS UP</h2>
				<h3>KIDS UPについて</h3>
				<p>Kids UPは幼児コース（3歳～6歳）、小学生コース（小1～小6）を中心に、長時間、完全な英語環境を提供します。また、基礎力を身に着けた生徒を対象に上級者コース（小4～高校生）も用意しています。<br>
				<br>
				1日3時間～7時間、まさに留学をしているかの様な環境をつくり、最新のプログラムを使用して「楽しく」「効果的」にお子様の英語力・知的好奇心を徹底的に伸ばします。<br>
				<br>
				小学高学年以降になると、ネイティブと対等に渡り合える自己表現力の習得に加え、大人顔負けのプレゼンテーションスキルも身に着けます。Kids UPで学んでいただいたお子様は、小学校卒業までに高校卒業・大学受験レベル（英語検定2級）以上の英語力習得が十分可能です。</p>

				<div class="readmore-button-wrapper">
				<a href="/aboutus" class="readmore-button" >READ MORE</a>
				</div>
	</div>
		<div class="img-col">

	<div class="img-col">
  <img src="/wp-content/themes/kidsup/img/front-page/lesson-1.jpg" alt="" >
</div>


		</div>
	</div>
	</div>
</section>


<section class="features slide-bottom show">

	<div class="container">

		<div class="contents">
						<h2>FEATURES</h2>
				<h3>Kids UPの特長について</h3>
				<div class="features-row">

				<div class="feature">
					<img src="/wp-content/themes/kidsup/img/front-page/feature-1.svg" alt="">
					<p>安全で衛生的な教室環境</p>
				</div>

				<div class="feature">
					<img src="/wp-content/themes/kidsup/img/front-page/feature-2.svg" alt="">
					<p>お子様の成長をリアルタイムに報告</p>
				</div>

				<div class="feature">
					<img src="/wp-content/themes/kidsup/img/front-page/feature-3.svg" alt="">
					<p>充実のプログラムで好奇心を刺激</p>
				</div>

				<div class="feature">
					<img src="/wp-content/themes/kidsup/img/front-page/feature-4.svg" alt="">
					<p>長時間のオールイングリッシュ環境</p>
				</div>

				<div class="feature">
					<img src="/wp-content/themes/kidsup/img/front-page/feature-5.svg" alt="">
					<p>ネイティブ＋バイリンガル体制</p>
				</div>

				<div class="feature">
					<img src="/wp-content/themes/kidsup/img/front-page/feature-6.svg" alt="">
					<p>ご活用いただきやすい料金設定</p>
				</div>

				<div class="feature">
					<img src="/wp-content/themes/kidsup/img/front-page/feature-7.svg" alt="">
					<p>全スクール直営校で高いクオリティ</p>
				</div>

				<div class="feature">
					<img src="/wp-content/themes/kidsup/img/front-page/feature-8.svg" alt="">
					<p>対象の保育園・小学校にお子様をお迎え！</p>
				</div>

				<div class="feature">
					<img src="/wp-content/themes/kidsup/img/front-page/feature-9.svg" alt="">
					<p>Kids UPに到着</p>
				</div>

				<div class="feature">
					<img src="/wp-content/themes/kidsup/img/front-page/feature-10.svg" alt="">
					<p>レッスン終了後、お子様をご自宅近くまでお送りします</p>
				</div>
				</div>



		<a href="/aboutus" class="readmore-button" >READ MORE</a>


	</div>
</div>

</section>

<!-- CTA-->
<?php include $_SERVER["DOCUMENT_ROOT"] .
    "/wp-content/themes/kidsup/front-cta-2025.php"; ?>


<section class="course slide-bottom show">

<div class="container">
	<h2>COURSE</h2>
	<h3>コースのご紹介</h3>

	<div class="course-column">

	<div class="course-section">
		<img src="/wp-content/themes/kidsup/img/front-page/course-1.jpg" alt="">

		<div class="course-text">
			<h3> <span class="big">KINDY</span><br>
			幼児コース
			</h3>

			<p>オールイングリッシュの体験型アクティビティで楽しく遊び、「聴く、話す」と言った英語力の土台を育成します。</p>

				<div class="readmore-button-wrapper">
				<a href="/course/kindy" class="readmore-button" >READ MORE</a>
				</div>
		</div>

	</div>

	<div class="course-section">
		<img src="/wp-content/themes/kidsup/img/front-page/course-2.jpg" alt="">

		<div class="course-text">
			<h3> <span class="big">ELEMENTARY</span><br>
			学童コース
			</h3>

			<p>学校だけではできない挑戦や体験をお子様に提供します。オールイングリッシュの環境で、ワクワクしながら楽しく英語を学んでみませんか？</p>

				<div class="readmore-button-wrapper">
				<a href="/course/elementary" class="readmore-button" >READ MORE</a>
				</div>
		</div>

	</div>

	<div class="course-section">
		<img src="/wp-content/themes/kidsup/img/front-page/course-3.jpg" alt="">
		<div class="course-text">
			<h3> <span class="big">SPECIALIST</span><br>
			上級コース
			</h3>

			<p>帰国子女や中高生も在籍する少人数制のプログラムで、より実践的な英語力を身に着けます。</p>

				<div class="readmore-button-wrapper">
				<a href="/courses/specialist" class="readmore-button" >READ MORE</a>
				</div>
		</div>
	</div>

	<div class="mascot-bar-wrapper">

	<div class="mascot-inspiration jot-bar">
		<div class="mascot-container">
			<img src="/wp-content/themes/kidsup/img/front-page/frontpage-jot.svg" alt="">
		</div>

		<div class="text-contents">
				<p>2027年、28年スタート<br class="mobile-only-break">予約受付中！</p>
		</div>

<div class="readmore-button-row">
  <a href="/entry" class="readmore-button">無料体験申込み</a>
</div>


	</div>

		</div>

	</div>

	</div>
</section>
<section class="achievement slide-bottom show">
	<div class="container">

        <div class="top-block">
            <div class="title-wrapper">
                <h2>ACHIEVEMENT</h2>
                <h3>成長の様子</h3>
            </div>

            <div class="buttons-wrapper">
                <div class="button achievement-prev">
                    <svg id="arrow-left-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.24 53.24">
                        <path class="svg-circle" d="M26.62,52.24h0c14.15,0,25.62-11.47,25.62-25.62S40.77,1,26.62,1,1,12.47,1,26.62s11.47,25.62,25.62,25.62Z"/>
                        <g>
                            <line class="svg-arrow" x1="19.74" y1="26.62" x2="33.5" y2="26.62"/>
                            <line class="svg-arrow" x1="19.74" y1="26.62" x2="25.37" y2="20.99"/>
                            <line class="svg-arrow" x1="25.37" y1="32.25" x2="19.74" y2="26.62"/>
                        </g>
                    </svg>
                </div>
                <div class="button achievement-next">
                    <svg id="arrow-right-icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.24 53.24">
                        <path class="svg-circle" d="M26.62,1h0C12.47,1,1,12.47,1,26.62s11.47,25.62,25.62,25.62,25.62-11.47,25.62-25.62S40.77,1,26.62,1Z"/>
                        <g>
                            <line class="svg-arrow" x1="33.5" y1="26.62" x2="19.74" y2="26.62"/>
                            <line class="svg-arrow" x1="33.5" y1="26.62" x2="27.87" y2="32.25"/>
                            <line class="svg-arrow" x1="27.87" y1="20.99" x2="33.5" y2="26.62"/>
                        </g>
                    </svg>
                </div>
            </div>
        </div>

		<div class="achievement-row swiper achievement-slider">
			<div class="swiper-wrapper">

				<div class="achievement-item swiper-slide">
					<img src="/wp-content/themes/kidsup/img/front-page/winner-front-land.webp" alt="">

					<div class="level-button-row">
						<h4>LAND部門</h4>
						<a href="https://vimeo.com/1036642872" data-lity="data-lity" class="land-btn" onclick="return false;">動画を見る　▶</a>
					</div>
					<div class="lower-text">
						<p>主に英語を始めて１年以内のお子様達が学ぶ初級コース</p>

						<div class="name-school-row">
							<p class="winner-name">Kotoneさん</p>
							<a href="/school/8/" class="school-name">要町校</a>
						</div>
					</div>
				</div>

				<div class="achievement-item swiper-slide">
					<img src="/wp-content/themes/kidsup/img/front-page/winner-front-sky.webp" alt="">

					<div class="level-button-row">
						<h4>SKY部門</h4>
						<a href="https://vimeo.com/1036642972" data-lity="data-lity" class="sky-btn" onclick="return false;">動画を見る　▶</a>
					</div>

					<div class="lower-text">
						<p>主に英語を始めて１年以上のお子様達が学ぶ中級コース</p>

						<div class="name-school-row">
							<p class="winner-name">Shunichiさん</p>
							<a href="/school/20/" class="school-name">長原校</a>
						</div>
					</div>
				</div>

				<div class="achievement-item swiper-slide">
					<img src="/wp-content/themes/kidsup/img/front-page/winner-front-galaxy.webp" alt="">
					<div class="level-button-row">
						<h4>GALAXY部門</h4>
						<a href="https://vimeo.com/1036642805" data-lity="data-lity" class="galaxy-btn" onclick="return false;">動画を見る　▶</a>
					</div>

					<div class="lower-text">
						<p>実践的な英語を習得する上級コース</p>

						<div class="name-school-row">
							<p class="winner-name">Harukiさん</p>
							<a href="/school/3/" class="school-name">四谷校</a>
						</div>
					</div>
				</div>

				<div class="achievement-item swiper-slide">
					<img src="/wp-content/themes/kidsup/img/front-page/winner-front-specialist.webp" alt="">
					<div class="level-button-row">
						<h4>SPECIALIST部門</h4>
						<a href="https://vimeo.com/1036643047" data-lity="data-lity" class="specialist-btn" onclick="return false;">動画を見る　▶</a>
					</div>

					<div class="lower-text">
						<p>帰国子女や中高生も在籍する最上級コース</p>

						<div class="name-school-row">
							<p class="winner-name">Chiharuさん</p>
							<a href="/school/20/" class="school-name">大島校</a>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>
</section>
<!-- CTA-->
<?php include $_SERVER["DOCUMENT_ROOT"] .
    "/wp-content/themes/kidsup/front-cta-2025.php"; ?>

<section class="page-swipers">
<div class="container sliders-container">

    <div class="slider-block">
        <div class="top-block">
            <div class="title-wrapper">
                <h2>NEWS</h2>
                <h3>お知らせ</h3>
            </div>
            <div class="buttons-wrapper">
                <div class="button news-prev"><svg id="arrow-left-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.24 53.24">
  <path class="svg-circle" d="M26.62,52.24h0c14.15,0,25.62-11.47,25.62-25.62S40.77,1,26.62,1,1,12.47,1,26.62s11.47,25.62,25.62,25.62Z"/>
  <g>
    <line class="svg-arrow" x1="19.74" y1="26.62" x2="33.5" y2="26.62"/>
    <line class="svg-arrow" x1="19.74" y1="26.62" x2="25.37" y2="20.99"/>
    <line class="svg-arrow" x1="25.37" y1="32.25" x2="19.74" y2="26.62"/>
  </g>
</svg></div>
                <div class="button news-next">
					<svg id="arrow-right-icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.24 53.24">
  <path class="svg-circle" d="M26.62,1h0C12.47,1,1,12.47,1,26.62s11.47,25.62,25.62,25.62,25.62-11.47,25.62-25.62S40.77,1,26.62,1Z"/>
  <g>
    <line class="svg-arrow" x1="33.5" y1="26.62" x2="19.74" y2="26.62"/>
    <line class="svg-arrow" x1="33.5" y1="26.62" x2="27.87" y2="32.25"/>
    <line class="svg-arrow" x1="27.87" y1="20.99" x2="33.5" y2="26.62"/>
  </g>
</svg>
				</div>
            </div>
        </div>

        <div class="swiper news-slider">
            <div class="swiper-wrapper">
                <div class="swiper news-slider">
                  <div class="swiper-wrapper">
                    <?php
                    $raw_posts = get_posts([
                        "post_type" => "post",
                        "posts_per_page" => 20,
                        "orderby" => "date",
                        "order" => "DESC",
                    ]);

                    $news_posts = [];

                    foreach ($raw_posts as $p) {
                        $cats = get_the_category($p->ID);
                        $slugs = $cats ? wp_list_pluck($cats, "slug") : [];

                        // EXCLUDE if the ONLY category is 'front-page'
                        if (count($slugs) === 1 && $slugs[0] === "front-page") {
                            continue;
                        }

                        $news_posts[] = $p;

                        if (count($news_posts) >= 6) {
                            break;
                        }
                    }
                    ?>

                    <?php if ($news_posts): ?>
                      <?php foreach ($news_posts as $news_post): ?>
                        <div class="swiper-slide">
                          <a href="<?php echo esc_url(
                              get_permalink($news_post->ID),
                          ); ?>" class="news-slide-link">
                            <?php if (has_post_thumbnail($news_post->ID)) {
                                echo get_the_post_thumbnail(
                                    $news_post->ID,
                                    "medium",
                                );
                            } ?>
                          </a>

                          <div class="swiper-info-top">
                            <time class="time-area"><?php echo esc_html(
                                get_the_date("Y/m/d", $news_post->ID),
                            ); ?></time>
                            <a href="<?php echo esc_url(
                                get_permalink($news_post->ID),
                            ); ?>">READ MORE　▶</a>
                          </div>

                          <p><?php echo esc_html(
                              get_the_title($news_post->ID),
                          ); ?></p>
                        </div>
                      <?php endforeach; ?>
                    <?php endif; ?>
                  </div>
                </div>

            </div>
        </div>

		<a href="/alltopics/" class="readmore-button" >READ MORE</a>
    </div>

    <div class="slider-block">
        <div class="top-block">
            <div class="title-wrapper">
                <h2>COLUMN</h2>
                <h3>コラム</h3>
            </div>
            <div class="buttons-wrapper">
                <div class="button column-prev">


<svg id="arrow-left-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.24 53.24">
  <path class="svg-circle" d="M26.62,52.24h0c14.15,0,25.62-11.47,25.62-25.62S40.77,1,26.62,1,1,12.47,1,26.62s11.47,25.62,25.62,25.62Z"/>
  <g>
    <line class="svg-arrow" x1="19.74" y1="26.62" x2="33.5" y2="26.62"/>
    <line class="svg-arrow" x1="19.74" y1="26.62" x2="25.37" y2="20.99"/>
    <line class="svg-arrow" x1="25.37" y1="32.25" x2="19.74" y2="26.62"/>
  </g>
</svg>
				</div>
                <div class="button column-next">


<svg id="arrow-right-icon" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53.24 53.24">
  <path class="svg-circle" d="M26.62,1h0C12.47,1,1,12.47,1,26.62s11.47,25.62,25.62,25.62,25.62-11.47,25.62-25.62S40.77,1,26.62,1Z"/>
  <g>
    <line class="svg-arrow" x1="33.5" y1="26.62" x2="19.74" y2="26.62"/>
    <line class="svg-arrow" x1="33.5" y1="26.62" x2="27.87" y2="32.25"/>
    <line class="svg-arrow" x1="27.87" y1="20.99" x2="33.5" y2="26.62"/>
  </g>
</svg>
				</div>
            </div>
        </div>

        <div class="swiper column-slider">
            <div class="swiper-wrapper">
                <?php
                $news_posts = get_posts([
                    "post_type" => "column",
                    "posts_per_page" => 6,
                ]);
                if ($news_posts):
                    foreach ($news_posts as $news_post): ?>
                        <div class="swiper-slide">
                            <a href="<?php echo get_permalink(
                                $news_post->ID,
                            ); ?>" class="news-slide-link">
                                <?php if (has_post_thumbnail($news_post->ID)) {
                                    echo get_the_post_thumbnail(
                                        $news_post->ID,
                                        "medium",
                                    );
                                } ?>
								</a>
                                <div class="swiper-info-top">
									 <time class="time-area"><?php echo get_the_date(
              "Y/m/d",
              $news_post->ID,
          ); ?></time>
									  <a href="<?php echo get_permalink($news_post->ID); ?>">READ MORE　▶</a>
								</div>

                                <p><?php echo get_the_title(
                                    $news_post->ID,
                                ); ?></p>


                        </div>
                <?php endforeach;
                endif;
                ?>
            </div>
        </div>
		<a href="/column/" class="readmore-button" >READ MORE</a>
    </div>

</div>

<script>

const achievementSlider = new Swiper('.achievement-slider', {
    direction: 'horizontal',
    loop: false,
    spaceBetween: 20,
    slidesPerView: 1.1,
    navigation: {
        nextEl: '.achievement-next',
        prevEl: '.achievement-prev'
    },
    breakpoints: {
        576: { slidesPerView: 2, spaceBetween: 20 },
        992: { slidesPerView: 3, spaceBetween: 24 },
        1200: {
            slidesPerView: 4,
            spaceBetween: 24,
            allowTouchMove: false
        }
    }
});

const columnSlider = new Swiper('.column-slider', {
    direction: 'horizontal',
    loop: true,
    spaceBetween: 20,

    // Navigation arrows
    navigation: {
        nextEl: '.column-next',
        prevEl: '.column-prev',
    },

    slidesPerView: 1.25,
    breakpoints: {

		576: {
            slidesPerView: 1,
            spaceBetween: 30
        },

        991: {
            slidesPerView: 1.5,
            spaceBetween: 30
        },
		1300: {
            slidesPerView: 2,
            spaceBetween: 30
        }
    }
});


const newsSlider = new Swiper('.news-slider', {
    direction: 'horizontal',
    loop: true,
    spaceBetween: 32,

    navigation: {
        nextEl: '.news-next',
        prevEl: '.news-prev',
    },

    slidesPerView: 1.25,
    breakpoints: {


        576: {
            slidesPerView: 1,
            spaceBetween: 30
        },

        991: {
            slidesPerView: 1.5,
            spaceBetween: 30
        },
		1300: {
            slidesPerView: 2,
            spaceBetween: 30
        }
    }
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const heroContainer = document.querySelector('.hero-video-container');
  if (!heroContainer) return;

  const heroInner    = document.querySelector('.hero-inner') || heroContainer;
  const heroImage    = heroContainer.querySelector('.hero-image-fallback');
  const heroIframes  = heroContainer.querySelectorAll('.hero-video-iframe');
  const skipButton   = document.querySelector('.hero-skip-button');
  const mq           = window.matchMedia('(max-width: 767.98px)');
  const eventButtons = Array.from(document.querySelectorAll('.event-buttons .event-button'));
  const DISABLE_HERO_VIDEO = true; // Temporary toggle: set false to re-enable Vimeo hero playback
  const FADE_DURATION = 300;
  const ROTATE_INTERVAL = 6000;

  let currentHeroUrl    = null;
  let currentDesktopImg = null;
  let currentMobileImg  = null;
  let isImageMode       = false;
  let vimeoPlayers      = [];

  let hasStartedSlides  = false;
  let userSelected      = false;
  let autoRotateTimer   = null;
  let autoRotateIndex   = 0;

  function applyHeroImageForViewport() {
    if (!isImageMode) return;
    const imageUrl = mq.matches ? currentMobileImg : currentDesktopImg;
    if (!imageUrl) return;
    if (heroImage) {
      heroImage.src = imageUrl;
      heroImage.style.display = 'block';
    }
  }

  function hideVideos() {
    heroIframes.forEach(function (iframe) {
      iframe.style.display = 'none';
    });
  }

  function hideSkipButton() {
    if (!skipButton) return;
    skipButton.style.opacity = '0';
    skipButton.style.pointerEvents = 'none';
    setTimeout(function () {
      if (skipButton && skipButton.parentNode) {
        skipButton.parentNode.removeChild(skipButton);
      }
    }, 200);
  }

  function enterImageModeIfNeeded() {
    if (isImageMode) return;

    if (window.Vimeo && vimeoPlayers.length) {
      vimeoPlayers.forEach(function (player) {
        player.pause().catch(function () {});
      });
    }

    hideVideos();
    heroContainer.style.backgroundImage = 'none';
    if (heroImage) {
      heroImage.style.display = 'block';
    }
    isImageMode = true;
    applyHeroImageForViewport();
    heroInner.style.cursor = currentHeroUrl ? 'pointer' : 'default';

    hideSkipButton();
  }

  function stopAutoRotate() {
    if (autoRotateTimer) {
      clearInterval(autoRotateTimer);
      autoRotateTimer = null;
    }
  }

  function switchToHeroFromButton(btn, options) {
    options = options || {};
    const userInitiated    = !!options.userInitiated;
    const firstImageSwitch = !isImageMode;

    document.querySelectorAll('.event-buttons .event-button.is-active')
      .forEach(function (el) { el.classList.remove('is-active'); });

    btn.classList.add('is-active');

    currentDesktopImg = btn.dataset.heroDesktop || null;
    currentMobileImg  = btn.dataset.heroMobile  || null;
    currentHeroUrl    = btn.getAttribute('href') || null;

    if (firstImageSwitch) {
      enterImageModeIfNeeded();
      heroContainer.style.opacity = 0;
      applyHeroImageForViewport();

      requestAnimationFrame(function () {
        heroContainer.style.opacity = 1;
      });
    } else {
      heroContainer.style.opacity = 0;
      setTimeout(function () {
        applyHeroImageForViewport();
        heroContainer.style.opacity = 1;
      }, FADE_DURATION);
    }

    if (userInitiated) {
      userSelected = true;
      stopAutoRotate();
    }
  }

  function startAutoRotate() {
    if (hasStartedSlides || eventButtons.length === 0) return;
    hasStartedSlides = true;

    autoRotateIndex = 0;
    switchToHeroFromButton(eventButtons[autoRotateIndex]);
    autoRotateIndex = 1;

    autoRotateTimer = setInterval(function () {
      if (userSelected || eventButtons.length === 0) {
        stopAutoRotate();
        return;
      }
      const btn = eventButtons[autoRotateIndex % eventButtons.length];
      switchToHeroFromButton(btn);
      autoRotateIndex++;
    }, ROTATE_INTERVAL);
  }

  document.addEventListener('click', function (e) {
    const btn = e.target.closest('.event-buttons .event-button');
    if (!btn) return;

    e.preventDefault();
    e.stopPropagation();
    if (e.stopImmediatePropagation) e.stopImmediatePropagation();

    switchToHeroFromButton(btn, { userInitiated: true });
  }, true);

  heroInner.addEventListener('click', function () {
    if (currentHeroUrl) {
      window.location.href = currentHeroUrl;
    }
  });

  if (mq.addEventListener) {
    mq.addEventListener('change', function () {
      applyHeroImageForViewport();
    });
  } else if (mq.addListener) {
    mq.addListener(function () {
      applyHeroImageForViewport();
    });
  }

  if (skipButton) {
    skipButton.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
      startAutoRotate();
    });
  }

  function wireVimeoEnded() {
    if (!window.Vimeo) return;

    heroIframes.forEach(function (iframe) {
      try {
        const player = new Vimeo.Player(iframe);
        vimeoPlayers.push(player);

        player.on('ended', function () {
          if (!hasStartedSlides) {
            startAutoRotate();
          }
        });
      } catch (err) {}
    });
  }

  function getActiveHeroPlayer() {
    if (!vimeoPlayers.length) return null;

    const activeIframe = mq.matches
      ? document.getElementById('mobile-hero-video')
      : document.getElementById('desktop-hero-video');

    if (!activeIframe) return vimeoPlayers[0] || null;

    const index = Array.prototype.indexOf.call(heroIframes, activeIframe);
    return index >= 0 ? (vimeoPlayers[index] || null) : (vimeoPlayers[0] || null);
  }

  function ensureHeroVideoPlayback() {
    if (isImageMode || !window.Vimeo) return;
    const player = getActiveHeroPlayer();
    if (!player) return;

    player.ready().then(function () {
      return player.play();
    }).catch(function () {});
  }

  wireVimeoEnded();
  if (DISABLE_HERO_VIDEO) {
    hideVideos();
    hideSkipButton();
    startAutoRotate();
  } else {
    ensureHeroVideoPlayback();
    window.addEventListener('pageshow', function () {
      ensureHeroVideoPlayback();
    });
  }
});
</script>





</section>
</div>
</div>

<?php get_footer(); ?>
