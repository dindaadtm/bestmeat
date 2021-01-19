<?php
$e_activemenu = $this->action->id;
$controllers_ac = $this->id;
$session = new CHttpSession;
$session->open();
$login_member = $session['login_member'];

$active_menu_pg = $controllers_ac . '/' . $e_activemenu;
?>

<header class="head <?php if ($active_menu_pg != 'home/index') : ?>insides-head<?php endif ?>">
  <div class="prelative container cont-header mx-auto">
    <div class="row">
      <div class="col-md-10">
        <a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang' => Yii::app()->language)); ?>">
          <div class="image"><img class="img-fluid" src="<?php echo $this->assetBaseurl; ?>home/logo-web.png" alt=""></div>
        </a>
      </div>
      <div class="col-md-50">
        <div class="menu-taffix text-right">
          <ul class="list-inline d-inline">
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang' => Yii::app()->language)); ?>">BERANDA
                BEST MEAT</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang' => Yii::app()->language)); ?>">TENTANG
                BEST MEAT</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/produk', 'lang' => Yii::app()->language)); ?>">KATALOG
                PRODUK</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/blog', 'lang' => Yii::app()->language)); ?>">BERITA &
                ACARA</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/lokasi', 'lang' => Yii::app()->language)); ?>">LOKASI TOKO KAMI</a></li>
            <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/agen', 'lang' => Yii::app()->language)); ?>">JADI AGEN KAMI</a></li>
            <li class="list-inline-item menu"><a href="#">
                <img class="wa" src="<?php echo $this->assetBaseurl; ?>home/wa.png" alt="">
              </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
</header>


<header class="header-mobile homepage_head">
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang' => Yii::app()->language)); ?>"><img src="<?php echo $this->assetBaseurl; ?>home/logo-web.png" alt="" class="logo-image"></a>

    <button class="navbar-toggler right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang' => Yii::app()->language)); ?>">Tentang Best Meat</a></li>
        <li class="nav-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/produk', 'lang' => Yii::app()->language)); ?>">Katalog Produk</a></li>
        <li class="nav-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/blog', 'lang' => Yii::app()->language)); ?>">Berita & Acara</a></li>
        <li class="nav-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/lokasi', 'lang' => Yii::app()->language)); ?>">Lokasi Toko Kami</a></li>
        <li class="nav-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/agen', 'lang' => Yii::app()->language)); ?>">Jadi Agen Kami</a></li>
      </ul>
    </div>
  </nav>
</header>