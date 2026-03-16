<?php
/**
 * Setsumeikai custom header
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Tag Manager -->
  <script>
    (function(w,d,s,l,i){
      w[l]=w[l]||[];
      w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});
      var f=d.getElementsByTagName(s)[0],
          j=d.createElement(s),
          dl=l!='dataLayer'?'&l='+l:'';
      j.async=true;
      j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
      f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MGWSQLH');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Ebisu tracking -->
  <script>
    (function (a, d, e, b, i, s) {
      window[i] = window[i] || [];
      var f = function (a, d, e, b, i, s) {
        var o = a.getElementsByTagName(d)[0],
            h = a.createElement(d);
        h.type = "text/javascript";
        h.async = e;
        h.onload = function () {
          window[i].init({ argument: s, auto: true });
        };
        h._p = o;
        return h;
      },
      h = f(a, d, e, b, i, s),
      l = "//taj",
      j = b + s + "/cmt.js";

      h.src = l + "1." + j;
      h._p.parentNode.insertBefore(h, h._p);

      h.onerror = function () {
        var k = f(a, d, e, b, i, s);
        k.src = l + "2." + j;
        k._p.parentNode.insertBefore(k, k._p);
      };
    })(document, "script", true, "ebis.ne.jp/", "ebis", "UUQ5rhNV");
  </script>

  <!-- PID / CID tracking -->
  <script>
    (function() {
      var params = new URLSearchParams(window.location.search);
      var pid = params.get('_pid');
      var cid = params.get('cid');

      if (pid && cid) {
        var xhr = new XMLHttpRequest();
        xhr.open("GET", "<?php echo esc_url( home_url( '/lptag.php' ) ); ?>?p=" + pid + "&cid=" + cid);
        xhr.send();
        localStorage.setItem("CL_" + pid, cid);
      }
    })();
  </script>

  <!-- Meta -->
  <meta name="description" content="Kids UP（キッズアップ）は英語で預かる、学童保育型英会話スクール・幼児クラスです。３歳〜１２歳までのお子様の英語教育を承ります。">
  <meta property="og:site_name" content="Kids UP">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?php echo esc_url( home_url( '/' ) ); ?>">
  <meta property="og:image" content="<?php echo esc_url( get_template_directory_uri() . '/images-boilerplate/fb_main.jpg' ); ?>">
  <meta name="twitter:card" content="summary_large_image">

  <!-- Favicon -->
  <link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/images/core/favicon.png' ); ?>" type="image/x-icon">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Open+Sans:wght@300..800&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body <?php body_class( 'setsumeikai' ); ?>>
<?php wp_body_open(); ?>

<!-- Google Tag Manager (noscript) -->
<noscript>
  <iframe
    src="https://www.googletagmanager.com/ns.html?id=GTM-MGWSQLH"
    height="0"
    width="0"
    style="display:none;visibility:hidden">
  </iframe>
</noscript>
<!-- End Google Tag Manager -->
