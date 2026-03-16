<!doctype html>
<html lang="ja">
<head>

<link
  rel="preload"
  as="image"
  href="/wp-content/themes/kidsup/images/custom-page-images/setsumeikai/hero-images/setsumeikai-mobile-hero-bg.png"
  fetchpriority="high"
>

 <style>
  /* --- CRITICAL NAV --- */
.custom-nav {
  height: 80px;
  background-color: white;
  box-shadow: 0 1px 6px 1px #ccc;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  padding: 0 2rem;
  position: sticky !important;
  top: 0;
  width: 100%;
  z-index: 1000;
}

.custom-nav .navbar-brand .nav-logo {
  width: 25rem;
}

.custom-nav .right {
  display: flex;
  flex-direction: row;
  gap: 1rem;
  align-items: center;
}

/* --- CRITICAL HERO --- */
.hero {
  display: flex;
  flex-direction: row;
  width: 100vw;
  justify-content: center;
  margin-top: 2rem;
  margin-bottom: 2rem;
}

.hero .hero-text {
  margin: auto 0;
  padding-left: 5rem;
  width: 45%;
}

.hero .h1-reversal h1 {
  font-family: sans-serif; /* Fallback until Google Font loads */
  font-size: 4.5rem;
  font-weight: 900;
  color: #333; /* Replace with your $kidsup-off-black */
  line-height: 1.1;
}

.hero .hero-image {
  width: 60%;
  display: flex;
  justify-content: center;
}

.hero .hero-image img {
  max-width: 100%;
  height: auto;
}

/* --- MOBILE CRITICAL OVERRIDES --- */
@media (max-width: 576.98px) {
  .custom-nav { padding: 0 1rem; }
  .custom-nav .navbar-brand .nav-logo { width: 14rem; }
  
  .hero {
    margin-top: 0;
    background-image: url(/wp-content/themes/kidsup/images/custom-page-images/setsumeikai/hero-images/setsumeikai-mobile-hero-bg.png);
    background-size: 100%;
    background-position: top;
    background-repeat: no-repeat;
  }
  
  .hero .hero-text {
    margin-top: 80vw;
    width: 100%;
    padding: 0 5%;
    background: linear-gradient(180deg, rgba(255,255,255,0) 30%, rgba(240,129,13,1) 45%, rgba(240,129,13,1) 70%, rgba(255,255,255,1) 100%);
  }

  .hero .hero-image { display: none; }
  
  .hero .h1-reversal h1 {
    font-size: 2rem;
    color: white;
  }
}

/* Hide the menu by default so it doesn't "flash" open */
.navbar-collapse:not(.show):not(.collapsing) {
  display: none;
}
 </style>


<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script>
(function(w,d,s,l,i){
w[l]=w[l]||[];
w[l].push({'gtm.start': new Date().getTime(), event:'gtm.js'});
var f=d.getElementsByTagName(s)[0],
j=d.createElement(s), dl=l!='dataLayer'?'&l='+l:'';
j.async=true;
j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MGWSQLH');
</script>
<title><?php wp_title('|学童保育型 英語・英会話スクール Kids UP （キッズアップ）', true, 'right'); ?></title>

<meta name="description" content="Kids UP（キッズアップ）は英語で預かる学童保育型英会話スクールです。">

<link 
  rel="preload" 
  href="<?php echo get_template_directory_uri(); ?>/style.css" 
  as="style" 
  onload="this.onload=null;this.rel='stylesheet'"
>


<?php wp_head(); ?>
</head>

<body <?php body_class('setsumeikai'); ?>>
<?php wp_body_open(); ?>

<!-- Google Tag Manager (noscript) -->
<noscript>
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGWSQLH"
height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager -->

<!-- ======================
     CUSTOM SETSUMEIKAI NAV NO PHONE NUMBER
====================== -->

<nav class="navbar custom-nav sticky-top">
  <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/images/custom-page-images/setsumeikai/navbar/nav-logo.svg" alt="" class="img-fluid nav-logo phone-desktop"/>
    <img src="<?php echo get_template_directory_uri(); ?>/images/custom-page-images/setsumeikai/navbar/nav-logo-mobile.svg" alt="" class="img-fluid nav-logo phone-mobile"/>
  </a>


  <div class="right">

          <a href="tel:0120-378-056" class="nav-telephone">
        0120-378-056 <br>
        <span class="availability">年中無休24時間</span>
      </a>


    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="toggler-top-bar"></span>
      <span class="toggler-middle-bar"></span>
      <span class="toggler-bottom-bar"></span>
    </button>
  </div>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="collapse-inner">

      <div class="button-box">
        <a href="<?php echo esc_url( home_url('/') ); ?>" class="logo-link">
          <img
            src="<?php echo get_template_directory_uri(); ?>/images/custom-page-images/setsumeikai/navbar/nav-collapse-logo.svg"
            alt=""
            class="img-fluid logo"
          />
        </a>

        <div class="button-stack">
          <a href="<?php echo esc_url( home_url('/entry/#/school_list') ); ?>" class="menu-button orange">
            無料体験お申し込み
          </a>
          <a href="tel:0120-378-056" class="menu-button blue">
            電話でお問い合せ
          </a>
          <a href="<?php echo esc_url( home_url('/inquiry/') ); ?>" class="menu-button gray">
            お問い合わせ
          </a>
        </div>
      </div>

      <div class="static-navlinks">
        <div><a class="nav-link static-navlink" href="#why-kidsup">Kids UPが選ばれる理由</a></div>
        <div><a class="nav-link static-navlink" href="#customer-voice">保護者様の声</a></div>
        <div><a class="nav-link static-navlink" href="#faq">よくあるご質問</a></div>
        <div><a class="nav-link static-navlink" href="#safety">安全・安心への取組み</a></div>
        <div><a class="nav-link static-navlink" href="#english-learners">英語力を身に付ける</a></div>
      </div>

    </div>
  </div>
</nav>

<script>
document.addEventListener("DOMContentLoaded", function () {
  const menuCollapse = document.getElementById("navbarSupportedContent");
  if (!menuCollapse) return;

  const bsCollapse = new bootstrap.Collapse(menuCollapse, {
    toggle: false,
  });

  document
    .querySelectorAll("#navbarSupportedContent, .navbar-brand")
    .forEach((element) => {
      element.addEventListener("click", () => {
        if (menuCollapse.classList.contains("show")) {
          bsCollapse.hide();
        }
      });
    });
});
</script>
