<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/ress.min.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <!-- css end-->
  <title>カットハウス　おしゃれ館ホームページ</title>
  <!--ogp-->
  <meta name="keywords" content="美容室、美容院、近江八幡、カット、パーマ、カラー">
  <meta name="description" content="">
  <meta property="og:title" content="">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="">
  <meta property="og:description" content="" />
  <meta name="twitter:card" content="summary_large_image">
  <!--google fonts-->
  <script>
    WebFontConfig = {
      google: {
        families: ['Noto+Serif+JP:400,500,700', 'Marcellus:400', 'Noto+Sans+JP:400,500,700']
      }
    };
    (function() {
      var wf = document.createElement('script');
      wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
      wf.type = 'text/javascript';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(wf, s);
    })();
  </script>
  <!-- google fonts end -->
</head>

<body id="top">
  <div class="header">
    <header>
      <div class="header-label">
        <div class="header-area">
          <h1><a href="<?php echo get_template_directory_uri(); ?>#home">おしゃれ館</a></h1>
          <div class="hamburger">
            <!-- ハンバーガーメニューの線 -->
            <span></span>
            <span></span>
            <span></span>
            <!-- /ハンバーガーメニューの線 -->
          </div>
        </div>
        <ul class="slide-menu">
          <li><a href="<?php echo get_template_directory_uri(); ?>#home">HOME</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>#about">ABOUT</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>#menu">MENU</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>#news">NEWS</a></li>
          <li><a href="<?php echo get_template_directory_uri(); ?>#contact">CONTACT</a></li>
        </ul>
      </div>
    </header>
  </div>
  <section class="fv" id="home">
    <div class="fv-area">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv.png" class="fv">
      <div class="fv-contents">
        <h2>Reservation</h2>
        <div class="fv-btn">
          <div class="tel">
            <p class="btn-introduction">電話で予約</p>
            <a href="tel:0748-34-8035" class="tel-btn">
              <p class="btn-text">0748-34-8035</p>
            </a>
          </div>
          <div class="line">
            <p class="btn-introduction">LINEで予約</p>
            <a href="#" class="line-btn">
              <p class="btn-text">LINEで予約する</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="content1">
    <h2 class="content-title" id="news">NEWS</h2>
    <div class="news-cards">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.png">
        </div>
        <div class="card-text">
          <h3 class="card-title">
            タイトルが入ります。
          </h3>
          <p class="card-introduction">
            説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。
          </p>
        </div>
      </div>
      <div class="card">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.png">
        </div>
        <div class="card-text">
          <h3 class="card-title">
            タイトルが入ります。
          </h3>
          <p class="card-introduction">
            説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。
          </p>
        </div>
      </div>
      <div class="card">
        <div class="card-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/no-image.png">
        </div>
        <div class="card-text">
          <h3 class="card-title">
            タイトルが入ります。
          </h3>
          <p class="card-introduction">
            説明が入ります。説明が入ります。説明が入ります。説明が入ります。説明が入ります。
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="content2">
    <h2 class="content-title" id="about">ABOUT</h2>
  </section>
  <section class="content3">
    <h2 class="content-title" id="menu">MENU</h2>
    <div class="menu">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu.png" class="menu-img">
      <div class="menu-content">
        <div class="menu-area">
          <div class="menus">
            <p class="menu-text">似合わせ<br class="sp">カット</p>
            <p class="price">￥4,500</p>
          </div>
          <div class="menus">
            <p class="menu-text">前髪<br class="sp">カット</p>
            <p class="price">￥880</p>
          </div>
        </div>
        <div class="menu-area">
          <div class="menus">
            <p class="menu-text">全頭<br class="sp">１ブリーチ</p>
            <p class="price">￥8,800~</p>
          </div>
          <div class="menus">
            <p class="menu-text">似合わせ<br class="sp">カット</p>
            <p class="price">￥4,500</p>
          </div>
        </div>
        <div class="menu-area">
          <div class="menus">
            <p class="menu-text">似合わせ<br class="sp">カット</p>
            <p class="price">￥4,500</p>
          </div>
          <div class="menus">
            <p class="menu-text">似合わせ<br class="sp">カット</p>
            <p class="price">￥4,500</p>
          </div>
        </div>
        <div class="menu-area">
          <div class="menus">
            <p class="menu-text">似合わせ<br class="sp">カット</p>
            <p class="price">￥4,500</p>
          </div>
          <div class="menus">
            <p class="menu-text">似合わせ<br class="sp">カット</p>
            <p class="price">￥4,500</p>
          </div>
        </div>
        <div class="menu-area">
          <div class="menus">
            <p class="menu-text">似合わせ<br class="sp">カット</p>
            <p class="price">￥4,500</p>
          </div>
          <div class="menus">
            <p class="menu-text">似合わせ<br class="sp">カット</p>
            <p class="price">￥4,500</p>
          </div>
        </div>
        <div class="menu-area">
          <div class="menus">
            <p class="menu-text">似合わせ<br class="sp">カット</p>
            <p class="price">￥4,500</p>
          </div>
          <div class="menus">
            <p class="menu-text">似合わせ<br class="sp">カット</p>
            <p class="price">￥4,500</p>
          </div>
        </div>
        <div class="menu-area">
          <div class="menus">
            <p class="menu-text">似合わせ<br class="sp">カット</p>
            <p class="price">￥4,500</p>
          </div>
          <div class="menus">
            <p class="menu-text">似合わせ<br class="sp">カット</p>
            <p class="price">￥4,500</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="content4">
    <h2 class="content-title" id="contact">CONTACT</h2>
    <div class="contact-form">
      <input type="text" name="name" class="input-field" placeholder="氏名">
      <input type="email" name="email" class="input-field" placeholder="メールアドレス">
      <input type="text" name="tel" class="input-field" placeholder="電話番号">
      <textarea name="body" class="input-area" placeholder="本文"></textarea>
      <button href="#" class="push">
        <p>送信</p>
      </button>
    </div>
  </section>
  <section class="content5 access">
    <h2 class="content-title" id="access">ACCESS</h2>
    <div class="access-content">
      <div class="company-introduction">
        <div class="company-inform">
          <p class="title">店舗名：</p>
          <p class="intro">おしゃれ館</p>
        </div>
        <div class="company-inform">
          <p class="title">住所：</p>
          <p class="intro">〒521-0000<br>
            滋賀県近江八幡市堀上町134-8</p>
        </div>
        <div class="company-inform">
          <p class="title">電話番号：</p>
          <p class="intro">0748-35-8035</p>
        </div>
        <div class="company-inform">
          <p class="title">営業時間：</p>
          <p class="intro">10:00~17:00まで</p>
        </div>
        <div class="company-inform">
          <p class="title">定休日：</p>
          <p class="intro">月曜日</p>
        </div>
      </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1631.7293639733673!2d136.09272942109138!3d35.12022439388467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60017a3346756989%3A0x2f290171256b0cfe!2z44CSNTIzLTAwMzEg5ruL6LOA55yM6L-R5rGf5YWr5bmh5biC5aCA5LiK55S677yR77yT77yU4oiS77yY!5e0!3m2!1sja!2sjp!4v1675092431124!5m2!1sja!2sjp" style="border:0;" loading="lazy"></iframe>
    </div>
  </section>
  <footer class="footer" id="footer">
    <small class="footer__small">Copyright© おしゃれ館 All rights Reserved.</small>
  </footer>
  <!--JavaScript-->
  <!--jQuery読み込み-->
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.4.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/toggle.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scroll-fadein.js"></script>
</body>

</html>