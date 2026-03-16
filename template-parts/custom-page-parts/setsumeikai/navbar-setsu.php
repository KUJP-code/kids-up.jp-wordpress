    <nav class="navbar custom-nav sticky-top">
      <a class="navbar-brand" href="https://kids-up.jp/"
        ><img
          src="/wp-content/themes/kidsup/images/custom-page-images/setsumeikai/navbar/nav-logo.svg"
          alt=""
          class="img-fluid nav-logo"
      /></a>

      <div class="right">
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
            <a href="https://kids-up.jp/" class="logo-link"
              ><img
                src="/wp-content/themes/kidsup/images/custom-page-images/setsumeikai/navbar/nav-collapse-logo.svg"
                alt=""
                class="img-fluid logo"
            /></a>

            <div class="button-stack">
              <a
                href="https://kids-up.jp/entry/#/school_list"
                class="menu-button orange"
                >無料体験お申し込み</a
              >
              <a href="tel:0120-378-056" class="menu-button blue"
                >電話でお問い合せ</a
              >
              <a href="https://kids-up.jp/inquiry/" class="menu-button gray"
                >お問い合わせ</a
              >
            </div>
          </div>

          <ul class="static-navlinks">
            <li class="nav-item">
              <a class="nav-link" href="#why-kidsup">Kids UPが選ばれる理由</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#customer-voice">保護者様の声</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#faq">よくあるご質問</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#safety">安全・安心への取組み</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#english-learners">英語力を身に付ける</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const menuCollapse = document.getElementById("navbarSupportedContent");

        // Initialize the Bootstrap Collapse instance
        const bsCollapse = new bootstrap.Collapse(menuCollapse, {
          toggle: false,
        });

        // Close the menu when clicking anywhere inside the collapse area
        // (Links, the orange background, or the Brand Logo)
        document
          .querySelectorAll("#navbarSupportedContent, .navbar-brand")
          .forEach((element) => {
            element.addEventListener("click", (e) => {
              if (menuCollapse.classList.contains("show")) {
                bsCollapse.hide();
              }
            });
          });
      });
    </script>
