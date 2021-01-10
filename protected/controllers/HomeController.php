<?php

class HomeController extends Controller
{

	public function actions()
	{
		return array(
			'captcha' => array(
				'class' => 'CCaptchaAction',
				'backColor' => 0xFFFFFF,
			),
		);
	}

	// public function actionDummy()
	// {
	// 	// Dummy::createDummyProduct();
	// 	// echo '<META http-equiv="refresh" content="0;URL=http://localhost/dv-computers/home/dummy">';

	// 	$data = Data::model()->findAll('1 LIMIT '.$_GET['page'].', 30');
	// 	foreach ($data as $key => $value) {
	// 		// 106-large_default.jpg
	// 		$image_name = '';
	// 		if ($value->image != 'http://ufoelektronika.com/img/p/0.jpg') {
	// 			$url = $value->image;
	// 			$url = substr($url, 0, -4).'-large_default.jpg';
	// 			$image_name = Slug::create($value->id.'-'.$value->name).'.jpg';
	// 			$img = Yii::getPathOfAlias('webroot').'/images/product/'.$image_name;
	// 			@file_put_contents($img, file_get_contents($url));
	// 		}

	// 		$model = new PrdProduct;
	// 		$model->kode = $value->reference;
	// 		$model->image = $image_name;
	// 		$model->harga = $value->base_price;
	// 		$model->harga_coret = $value->base_price + ($value->base_price*20/100);
	// 		$model->stock = $value->qty;
	// 		$model->status = $value->status;
	// 		$model->save(false);

	// 		$modelDesc = new PrdProductDescription;
	// 		$modelDesc->product_id = $model->id;
	// 		$modelDesc->language_id = 2;
	// 		$modelDesc->name = $value->name;
	// 		$modelDesc->save(false);
	// 	}
	// 	echo '<a href="'.CHtml::normalizeUrl(array('dummy', 'page'=>$_GET['page']+30)).'">next</a>';

	// }

	public function actionCreatecategory()
	{
		for ($i = 1; $i < 111; $i++) {
			$model = new PrdCategoryProduct;
			$model->category_id = 12;
			$model->product_id = $i;
			$model->save(false);
		}
	}

	public function actionInput()
	{
		$data = Table61::model()->findAll();
		foreach ($data as $key => $value) {
			$model = new PrdProduct;
			$model->kode = $value->col_1;
			if ($value->col_7 != '') {
				copy(YiiBase::getPathOfAlias('webroot') . '/images/precise/' . $value->col_7 . '/COVER.jpg', YiiBase::getPathOfAlias('webroot') . '/images/product/' . Slug::create($value->col_1) . '-' . Slug::create($value->col_2) . '-cover.jpg');
				$model->image = Slug::create($value->col_1) . '-' . Slug::create($value->col_2) . '-cover.jpg';
			} else {
				$model->image = '';
			}
			$model->harga = $value->col_6;
			$model->harga_coret = 0;
			$model->save(false);
			$dataDesc = new PrdProductDescription;
			$dataDesc->product_id = $model->id;
			$dataDesc->language_id = 2;
			$dataDesc->name = $value->col_2;
			$dataDesc->subtitle = $value->col_3;
			$dataDesc->desc = '<p>' . $value->col_4 . '</p>';
			$dataDesc->save(false);
			$dataAttr = explode(',', $value->col_5);
			foreach ($dataAttr as $v) {
				$modelAttr = new PrdProductAttributes;
				$modelAttr->product_id = $model->id;
				$modelAttr->attribute = trim($v);
				$modelAttr->stock = 10;
				$modelAttr->price = $value->col_6;
				$modelAttr->save(false);
				$modelAttr->id_str = $modelAttr->id;
				$modelAttr->save(false);
			}
			if ($value->col_7 != '') {
				for ($i = 1; $i < 7; $i++) {
					$modelImage = new PrdProductImage;
					$modelImage->product_id = $model->id;
					copy(YiiBase::getPathOfAlias('webroot') . '/images/precise/' . $value->col_7 . '/' . $i . '.jpg', YiiBase::getPathOfAlias('webroot') . '/images/product/' . Slug::create($value->col_1) . '-' . Slug::create($value->col_2) . '-photo' . $i . '.jpg');
					$modelImage->image = Slug::create($value->col_1) . '-' . Slug::create($value->col_2) . '-photo' . $i . '.jpg';
					$modelImage->save(false);
				}
			}
		}
	}

	public function actionIndex()
	{
		$this->layout = '//layouts/column1';
		$this->render('index', array());
	}
	public function actionAbout()
	{
		$this->layout = '//layouts/column1';

		$this->render('about', array());
	}

	public function actionBlog()
	{
		$this->layout = '//layouts/column1';

		$this->render('blog', array());
	}
	public function actionDetailProduk()
	{
		$this->layout = '//layouts/column1';

		$this->render('detailproduk', array());
	}

	public function actionProduk()
	{
		$this->layout = '//layouts/column1';

		$this->render('produk', array());
	}

	public function actionLokasi()
	{
		$this->layout = '//layouts/column1';

		$this->render('lokasi', array());
	}
	public function actionAgen()
	{
		$this->layout = '//layouts/column1';

		$this->render('agen', array());
	}
}
