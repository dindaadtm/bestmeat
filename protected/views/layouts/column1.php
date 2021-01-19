<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

<?php echo $this->renderPartial('//layouts/_header', array()); ?>


<!-- Start fcs -->
<?php
$criteria = new CDbCriteria;
$criteria->with = array('description');
$criteria->addCondition('description.language_id = :language_id');
$criteria->addCondition('active = 1');
$criteria->params[':language_id'] = $this->languageID;
$criteria->group = 't.id';
$criteria->order = 't.id ASC';
$slide = Slide::model()->with(array('description'))->findAll($criteria);
?>
<div class="fcs-wrapper outers_fcs_wrapper prelatife wrapper-slide">
    <div id="myCarousel_home" class="carousel slide" data-ride="carousel" data-interval="4500">
        <div class="carousel-inner">
            <div class="carousel-item active home-slider-new">
                <img class="img_fcs d-none d-sm-block w-100" src="<?php echo $this->assetBaseurl; ?>home/slider1.jpg" alt="">
                <img class="img_fcs d-block d-sm-none" src="<?php echo $this->assetBaseurl; ?>fcs01_m.jpg" alt="">
            </div>
            <div class="carousel-item home-slider-new">
                <img class="img_fcs d-none d-sm-block w-100" src="<?php echo $this->assetBaseurl; ?>home/slider2.jpg" alt="">
                <img class="img_fcs d-block d-sm-none" src="<?php echo $this->assetBaseurl; ?>fcs02_m.jpg" alt="">
            </div>
        </div>

        <ol class="carousel-indicators">
            <li data-target="#myCarousel_home" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel_home" data-slide-to="1"></li>
        </ol>


        <!-- end caption -->
    </div>
</div>




<?php echo $content ?>

<?php echo $this->renderPartial('//layouts/_footer', array()); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<?php $this->endContent(); ?>