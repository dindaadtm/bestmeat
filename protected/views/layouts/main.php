<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="language" content="<?php echo Yii::app()->language ?>" />
    <meta name="keywords" content="<?php echo CHtml::encode($this->metaKey); ?>">
    <meta name="description" content="<?php echo CHtml::encode($this->metaDesc); ?>">

    <link rel="Shortcut Icon" href="<?php echo Yii::app()->baseUrl . Yii::app()->theme->baseUrl; ?>/asset/images/favicon.png" />
    <link rel="icon" type="image/ico" href="<?php echo Yii::app()->baseUrl . Yii::app()->theme->baseUrl; ?>/asset/images/favicon.png" />
    <link rel="icon" type="image/x-icon" href="<?php echo Yii::app()->baseUrl . Yii::app()->theme->baseUrl; ?>/asset/images/favicon.png" />

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl . Yii::app()->theme->baseUrl; ?>/asset/css/screen.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl . Yii::app()->theme->baseUrl; ?>/asset/css/comon.css" />
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>


    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl . Yii::app()->theme->baseUrl; ?>/asset/js/bootstrap-4.0.0/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo Yii::app()->baseUrl . Yii::app()->theme->baseUrl; ?>/asset/css/styles.css">


    <?php // Yii::app()->clientScript->registerCoreScript('jquery'); 
    ?>
    <script type="text/javascript" src="<?php echo Yii::app()->baseUrl . Yii::app()->theme->baseUrl; ?>/asset/js/jquery.min.js"></script>
    <?php Yii::app()->clientScript->registerCoreScript('jquery.ui'); ?>
    <?php /*$this->widget('application.extensions.fancyapps.EFancyApps', array(
            'target'=>'',
            'config'=>array(),
            )
        );*/ ?>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <!-- All JS -->
    <script type="text/javascript">
        var baseurl = "<?php echo CHtml::normalizeUrl(array('/')); ?>";
        var url_add_cart_action = "<?php echo CHtml::normalizeUrl(array('/product/addCart')); ?>";
        var url_edit_cart_action = "<?php echo CHtml::normalizeUrl(array('/product/edit')); ?>";
    </script>
    <script src="<?php echo Yii::app()->baseUrl . Yii::app()->theme->baseUrl; ?>/asset/js/all.js"></script>
    <!-- <script src="<?php echo Yii::app()->baseUrl . Yii::app()->theme->baseUrl; ?>/asset/js/jquery.min3.3.1.js"></script> -->

    <?php echo $this->setting['google_tools_webmaster']; ?>
    <?php echo $this->setting['google_tools_analytic']; ?>
    <?php if ($this->setting['purechat_status'] == '1') : ?>
        <?php echo $this->setting['purechat_code'] ?>
    <?php endif ?>

    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl . Yii::app()->theme->baseUrl; ?>/asset/css/styles.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl . Yii::app()->theme->baseUrl; ?>/asset/css/style.deory.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl . Yii::app()->theme->baseUrl; ?>/asset/css/pager.css" />
    <!-- Css Responsive -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl . Yii::app()->theme->baseUrl; ?>/asset/css/media.style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl . Yii::app()->theme->baseUrl; ?>/asset/css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
</head>

<body>

    <?php echo $content ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.9/fullpage.min.js">
    </script>
    <script type="text/javascript" href="<?php echo Yii::app()->baseUrl . Yii::app()->theme->baseUrl; ?>/asset/js/script.js"></script>
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.multiple-items').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 3,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.multiple-items-2').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        });
    </script>

    <script>
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            if ($(window).width() <= 768) {
                var $item = $('#myCarousel_home.carousel .carousel-item');
                var $wHeight = $(window).height();
                $item.eq(0).addClass('active');
                $item.height($wHeight);
                $item.addClass('full-screen');

                $('#myCarousel_home.carousel img.d-block.d-sm-none').each(function() {
                    var $src = $(this).attr('src');
                    var $color = $(this).attr('data-color');
                    $(this).parent().css({
                        'background-image': 'url(' + $src + ')',
                        'background-color': $color,
                        'background-repeat': 'no-repeat'
                    });
                    $(this).remove();
                });

                $(window).on('resize', function() {
                    $wHeight = $(window).height();
                    $item.height($wHeight);
                });

                $('#myCarousel_home.carousel').carousel({
                    interval: 4000,
                    pause: "false"
                });
            }

        });
    </script>

    <script>
        $(document).ready(function() {
            $("#click").click(function() {
                $('html, body').animate({
                    scrollTop: $("#div1").offset().top
                }, 2000);
            });
        });
    </script>

    <script type="text/javascript">
        $(window).load(function() {
            $('.t-backtop').hide();
        });
        $(function() {
            $('.t-backtop').click(function() {
                $('body,html').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });

            var $win = $(window);
            $win.scroll(function() {
                if ($win.scrollTop() == 0)
                    $('.t-backtop').hide();
                else if ($win.height() + $win.scrollTop() != $(document).height() || $win.height() + $win.scrollTop() > 500) {
                    $('.t-backtop').show();
                }
            });

            $('.toscroll').click(function() {
                var sn_id = $(this).attr('data-id');
                $('html, body').animate({
                    scrollTop: $("#" + sn_id).offset().top
                }, 1000);
            });
        });
    </script>

</body>

</html>