<!DOCTYPE html>
<!--[if lte IE 9]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?=$title?></title>
<!--=================================
Meta tags
=================================-->
<meta name="description" content="">
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta name="viewport" content="minimum-scale=1.0, width=device-width, maximum-scale=1, user-scalable=no" />
<!--=================================
Google Fonts
=================================-->
<link href="http://fonts.googleapis.com/css?family=Ubuntu:400,300" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Questrial" rel="stylesheet" type="text/css">
<!--=================================
Style Sheets
=================================-->
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assetsf/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assetsf/css/pixeden-icons.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assetsf/css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assetsf/css/animations.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assetsf/css/dl-menu.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>assetsf/css/main.css">


<script src="<?php echo base_url(); ?>assetsf/js/lib/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>

<body class="<?=$body?>">

<div class="xv-overFlow">
<!--========================================
Body Content
===========================================-->

<div class="alert alert-info">
  <strong>Info!</strong> Mohon maaf atas ketidak nyamanan anda dalam mengunjungi website kami karena masih dalam tahap pengembangan.
</div>

<header class="style1 docHeader">
  <nav id="sticktop" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header clearfix">
        <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>foto_artikel/logo.png" alt="/"></a>
      </div>
      <div class="social-wrap">
        <ul class="social-list">
            <li><a href="../../www.facebook.com/Innosoft-656633357841348/" class="icon-facebook"></a></li>
        </ul>
      </div>
      <div id="dl-menu" class="xv-menuwrapper responsive-menu">
          <button class="dl-trigger">Menu</button>

          <ul class="dl-menu clearfix">
              <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
              <li class="parent"><a href="<?php echo base_url(); ?>aktifitas">Aktifitas</a>
                    <ul class="lg-submenu">
                      <li><a href="<?php echo base_url(); ?>aktifitas/rpl"><span class="badge badge-blue-deep">Aktifitas RPL</span></a></li>
                      <li><a href="<?php echo base_url(); ?>aktifitas/ti"><span class="badge badge-violet">Aktifitas TI</span></a></li>
                      <li><a href="<?php echo base_url(); ?>aktifitas/uika"><span class="badge badge-green">Aktifitas UIKA</span></a></li>
                      <li><a href="<?php echo base_url(); ?>aktifitas/event"><span class="badge badge-yellow-deep">Aktifitas Event</span></a></li>
                  </ul>
              </li>
              <li><a href="<?php echo base_url(); ?>event">Event</a></li>
              <li class="parent"><a href="#">LAB</a>
                    <ul class="lg-submenu">
                      <li><a href="#"><span class="badge badge-blue-dark">Struktur Organisasi</span></a></li>
                      <li><a href="#"><span class="badge badge-blue-dark">Fasilitas</span></a></li>
                      <li><a href="#"><span class="badge badge-blue-dark">Mata Kuliah</span></a></li>
                      <li><a href="#"><span class="badge badge-blue-dark">Program Unggulan</span></a></li>
                      <li><a href="#"><span class="badge badge-blue-dark">Prosedur & Peraturan</span></a></li>
                  </ul>
              </li>
              <li><a href="#">Kerjasama</a></li>
              <li><a href="<?php echo base_url(); ?>kontak_view">Kontak</a></li>

          </ul>
      </div><!-- /dl-menuwrapper/xv-menuwrapper  -->
    </div>
  </nav>

</header>

<?php echo $contents; ?>

<!--=================================
footer
=================================-->
<footer>
    <div class="container">
        <div class="footer_inner">
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-lg-4">
                    <a href="#" class="logo-footer"><img src="<?php echo base_url(); ?>/foto_artikel/logo-footer.png" alt="" width="149" height="25" /></a>
                    <div class="widget widget_text">
                        <p>Inovasi terbaik bukan terbentuk karena teknologi tapi inovasi terbaik merupakan inovasi yang memberikan banyak kebaikan untuk hidupmu, sekitar dan dunia!</p>
                    </div>
                </div>
            </div><!--row-->
            <div class="widget widget_menu">
                <nav class="sitemap">
                    <ul>
                        <li><a href="single/privpol">Privacy Policy</a></li>
                        <li><a href="kontak">Kontak</a></li>
                        <li><a href="single/edista">Editorial Staff</a></li>
                        <li><a href="single/pkl">PKL?</a></li>
                    </ul>
                </nav>
            </div>

            <div class="widget widget_newsletter">
                <form class="form_newsletter" action="front_home/subscribe" method="post">
                    <label for="subEmail"><i class="icon-mail2"></i> Berlangganan EMAIL!</label>
                    <input id="subEmail" type="email" required="required" placeholder="email.mu@labinnosoft.ac.id" />
                    <button type="submit" value="Submit" name="submit">subscribe</button>
                </form>
            </div>
            <div class="copyrights">
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <ul class="social-list">
                            <li><a href="#" class="icon-facebook"></a></li>
                        </ul>
                    </div><!--column-->
                    <div class="col-xs-12 col-md-6">
                        <div class="rights">website v0.9 &copy; lab innosoft</div>
                    </div>
                </div>
            </div><!--copyrights-->

        </div>
    </div>
</footer>

</div>
<!--=================================
Script Source
=================================-->
<script src="<?php echo base_url(); ?>assetsf/js/lib/jquery.js"></script>
<script src="<?php echo base_url(); ?>assetsf/js/lib/jquery.dlmenu.js"></script>
<script src="<?php echo base_url(); ?>assetsf/js/lib/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>assetsf/js/lib/jquery.sticky.js"></script>
<script src="<?php echo base_url(); ?>assetsf/js/lib/jquery.inview.js"></script>
<script src="<?php echo base_url(); ?>assetsf/js/app/main.js"></script>

</body>
</html>
