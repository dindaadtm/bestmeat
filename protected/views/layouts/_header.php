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
                <img src="<?php echo $this->assetBaseurl; ?>home/wa.png" alt="">
              </a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </div>
</header>

<section id="myAffix" class="header-affixs affix-top">
  <!-- <div class="clear height-15"></div> -->
  <div class="prelative container cont-header mx-auto">
    <div class="row">
      <div class="col-md-15 col-sm-15">
        <div class="lgo_web_headrs_wb">
          <a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang' => Yii::app()->language)); ?>">
            <img src="<?php echo $this->assetBaseurl; ?>logo-web.png" alt="" class="img img-fluid">
          </a>
        </div>
      </div>
      <div class="col-md-45 col-sm-45">
        <div class="text-right">
          <div class="menu-taffix">
            <ul class="list-inline d-inline">
              <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang' => Yii::app()->language)); ?>">About Us</a></li>
              <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/product', 'lang' => Yii::app()->language)); ?>">Our Products</a></li>
              <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/market', 'lang' => Yii::app()->language)); ?>">Market</a></li>
              <li class="list-inline-item menu"><a href="<?php echo CHtml::normalizeUrl(array('/home/contact', 'lang' => Yii::app()->language)); ?>">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</section>

<div class="outer-blok-black-menuresponss-hides" style="display: none;">
  <div class="prelatife container">
    <div class="clear height-45"></div>
    <div class="fright">
      <div class="hidesmenu-frightd"><a href="#" class="closemrespobtn"><img src="<?php echo $this->assetBaseurl; ?>closen-btn.png" alt=""></a></div>
    </div>
    <div class="py-5"></div>
    <div class="blocksn_logo-centers text-center justify-content-center">
      <img src="<?php echo $this->assetBaseurl; ?>logo-web-putih.png" alt="logo" class="img img-fluid">
    </div>
    <div class="py-4"></div>
    <div class="menu-sheader-datals">
      <ul class="list-unstyled">
        <li><a href="<?php echo CHtml::normalizeUrl(array('/home/inded', 'lang' => Yii::app()->language)); ?>">Home</a></li>
        <li class="separate"></li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/home/about', 'lang' => Yii::app()->language)); ?>">About Us</a></li>
        <li class="separate"></li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/home/product', 'lang' => Yii::app()->language)); ?>">Our Products</a></li>
        <li class="separate"></li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/home/market', 'lang' => Yii::app()->language)); ?>">Market</a></li>
        <li class="separate"></li>
        <li><a href="<?php echo CHtml::normalizeUrl(array('/home/contact', 'lang' => Yii::app()->language)); ?>">Contact</a></li>
        <li class="separate"></li>
        <li><a style="font-size: 17px" href="https://wa.me/628165407766"><i class="fa fa-whatsapp"></i> &nbsp;081 6540 7766</a></li>
      </ul>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>

<!-- <script type="text/javascript">
  $(function(){
    // show and hide menu responsive
    $('a.showmenu_barresponsive').on('click', function() {
      $('.outer-blok-black-menuresponss-hides').slideToggle('slow');
      return false;
    });
    $('a.closemrespobtn').on('click', function() {
      $('.outer-blok-black-menuresponss-hides').slideUp('slow');
      return false;
    });

  })
</script>

<script type="text/javascript">
  $(function() {

    var sn_width = $(window).width();
    if (sn_width > 1150) {

      $(window).scroll(function() {
        var sntop1 = $(window).scrollTop();

        if (sntop1 > 115) {
          // console.log(sntop1);
          $('.header-affixs').removeClass('affix-top').addClass('affix');
          // $('.header-affixs').addClass('affix');
        } else {
          $('.header-affixs.affix').removeClass('affix').addClass('affix-top');
          // $('body').css('padding-top', '0px');
        }
      });

    }

  });
</script>



<script>
  $(document).ready(function() {
    $("#headerproduct").css("display", "none");
  });
</script> -->