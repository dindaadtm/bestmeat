<section class="breadcrumb p-0 m-0">
    <div class="prelative container">
        <nav aria-label="breadcrumb ">
            <ol class="breadcrumb py-2 m-0 pl-0 pr-0">
                <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/home', 'lang' => Yii::app()->language)); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Store Location</li>
            </ol>
        </nav>
    </div>
</section>

<section class="produk-sec-1">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-60 my-4">
                <div class="title-text text-center">
                    <h3 class="orange my-2">BEST MEAT <span class="tipografi"> PRODUK KATEGORI</span></h3>
                    <p>Kami menyediakan berbagai macam kebutuhan protein anda dengan bahan - bahan segar yang berkualitas dan bermutu tinggi.</p>
                </div>
            </div>
            <div class="col-md-15">
                <h5>PRODUCT CATEGORY</h5>
                <div class="m-3"></div>
                <div class="row d-flex justify-content-center">
                    <div class="card">
                        <article class="filter-group">
                            <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside1" data-abc="true" aria-expanded="false" class="collapsed"> <i class="icon-control fa fa-chevron-down"></i>
                                    <h6 class="title">Sub Categories</h6>
                                </a> </header>
                            <div class="filter-content collapse" id="collapse_aside1" style="">
                                <div class="card-body">
                                    <ul class="list-menu">
                                        <li><a href="#" data-abc="true">Whole Chicken </a></li>
                                        <li><a href="#" data-abc="true">Cut Up </a></li>
                                        <li><a href="#" data-abc="true">Chicken Parts </a></li>
                                    </ul>
                                </div>
                            </div>
                        </article>
                        <article class="filter-group">
                            <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside2" data-abc="true" aria-expanded="false" class="collapsed"> <i class="icon-control fa fa-chevron-down"></i>
                                    <h6 class="title">Price </h6>
                                </a> </header>
                            <div class="filter-content collapse" id="collapse_aside2" style="">
                                <div class="card-body"> <input type="range" class="custom-range" min="0" max="100" name="">
                                    <div class="form-row">
                                        <div class="form-group col-md-60"> <label>Min</label> <input class="form-control" placeholder="Rp. 0" type="number"> </div>
                                        <div class="form-group text-right col-md-60"> <label>Max</label> <input class="form-control" placeholder="Rp. 100.000" type="number"> </div>
                                    </div> <a href="#" class="highlight-button btn btn-medium button xs-margin-bottom-five" data-abc="true">Apply Now</a>
                                </div>
                            </div>
                        </article>

                        <article class="filter-group">
                            <header class="card-header"> <a href="#" data-toggle="collapse" data-target="#collapse_aside4" data-abc="true" class="collapsed" aria-expanded="false"> <i class="icon-control fa fa-chevron-down"></i>
                                    <h6 class="title">Rating </h6>
                                </a> </header>
                            <div class="filter-content collapse" id="collapse_aside4" style="">
                                <div class="card-body"> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                                        <div class="custom-control-label">Better </div>
                                    </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                                        <div class="custom-control-label">Best </div>
                                    </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                                        <div class="custom-control-label">Good</div>
                                    </label> <label class="custom-control"> <input type="checkbox" checked="" class="custom-control-input">
                                        <div class="custom-control-label">Not good</div>
                                    </label> </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-md-45">
                <div class="row">
                    <div class="col-md-40">
                        <h5>DAGING UNGGAS</h5>
                        <div class="deskripsi-kategori">
                            <p>Ayam yang telah dipisahkan dari kepala, ceker, dan jeroan, dengan berat yang beragam sesuai dengan masa hidup ayam - ayam pilihan tersebut. Ayam yang telah dipisahkan dari kepala, ceker, dan jeroan, dengan berat yang beragam sesuai dengan masa hidup ayam - ayam pilihan tersebut.</p>
                        </div>
                    </div>
                    <div class="col-md-20">
                        <h5>SEARCH PRODUCTS</h5>
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="">
                                <button class="submit" type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-40">
                        <div class="divider"></div>
                    </div>
                    <div class="col-md-20">
                        <h5>SORT BY</h5>
                        <form action="#">
                            <div class="input-group">
                                <select name="sort" id="sort" class="form-control">
                                    <option></option>
                                    <option value="min">Harga Terendah</option>
                                    <option value="max">Harga Tertinggi</option>
                                    <option value="relevan">Relevan</option>
                                    <option value="popular">Popularitas</option>
                                </select>
                            </div>
                        </form>

                    </div>
                    <div class="col-md-20">
                        <a href="<?php echo CHtml::normalizeUrl(array('/home/detailproduk', 'lang' => Yii::app()->language)); ?>">
                            <div class="box-contents">
                                <img src="<?php echo $this->assetBaseurl; ?>produk/img-product-1.jpg">
                                <div class="title p-3">
                                    <h5>Ayam Woku BestChicken</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-20">
                        <a href="<?php echo CHtml::normalizeUrl(array('/home/detailproduk', 'lang' => Yii::app()->language)); ?>">
                            <div class="box-contents">
                                <img src="<?php echo $this->assetBaseurl; ?>produk/img-product-1.jpg">
                                <div class="title p-3">
                                    <h5>Ayam Woku BestChicken</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-20">
                        <a href="<?php echo CHtml::normalizeUrl(array('/home/detailproduk', 'lang' => Yii::app()->language)); ?>">
                            <div class="box-contents">
                                <img src="<?php echo $this->assetBaseurl; ?>produk/img-product-1.jpg">
                                <div class="title p-3">
                                    <h5>Ayam Woku BestChicken</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-20">
                        <a href="<?php echo CHtml::normalizeUrl(array('/home/detailproduk', 'lang' => Yii::app()->language)); ?>">
                            <div class="box-contents">
                                <img src="<?php echo $this->assetBaseurl; ?>produk/img-product-1.jpg">
                                <div class="title p-3">
                                    <h5>Ayam Woku BestChicken</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-20">
                        <a href="<?php echo CHtml::normalizeUrl(array('/home/detailproduk', 'lang' => Yii::app()->language)); ?>">
                            <div class="box-contents">
                                <img src="<?php echo $this->assetBaseurl; ?>produk/img-product-1.jpg">
                                <div class="title p-3">
                                    <h5>Ayam Woku BestChicken</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-20">
                        <a href="<?php echo CHtml::normalizeUrl(array('/home/detailproduk', 'lang' => Yii::app()->language)); ?>">
                            <div class="box-contents">
                                <img src="<?php echo $this->assetBaseurl; ?>produk/img-product-1.jpg">
                                <div class="title p-3">
                                    <h5>Ayam Woku BestChicken</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-60">
                        <div class="m-4"></div>
                    </div>
                    <div class="col-md-20"></div>
                    <div class="col-md-20">
                        <div class="navigasi">
                            <div class="row">
                                <div class="col-md-25">
                                    <a href="">
                                        <p class="text-center py-2">First Page</p>
                                    </a>
                                </div>
                                <div class="col-md-10">
                                    <div class="divider-vertical"></div>
                                </div>
                                <div class="col-md-25">
                                    <a href="">
                                        <p class="text-center py-2">Last Page</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-20">
                        <div class="pagination">
                            <a href="#">&laquo;</a>
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">&raquo;</a>
                        </div>
                    </div>
                    <div class="col-md-60">
                        <div class="m-4"></div>
                    </div>
                    <div class="col-md-40">
                        <div class="cta">
                            <h2 class="text-uppercase orange">BUTUH SUPLIER MAKANAN UNTUK RESTORAN BARU ANDA?</h2>
                        </div>
                    </div>
                    <div class="col-md-20 text-center">
                        <a href="">
                            <div class="button">
                                <p>Hubungi kami sekarang</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-60 m-4">
            </div>
        </div>
</section>

<section class="cta">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-30">
                <div class="tagline">
                    <img class="img-fluid" src="<?php echo $this->assetBaseurl; ?>home/cta.png">
                </div>
                <div class="sosmed ml-5">
                    <div class="row">
                        <div class="col-md-20">
                            <a href="">
                                <img class="my-4" src="<?php echo $this->assetBaseurl; ?>home/i-tokped.png">
                            </a>
                        </div>
                        <div class="col-md-20">
                            <a href="">
                                <img class="my-4" src="<?php echo $this->assetBaseurl; ?>home/i-blibli.png">
                            </a>
                        </div>
                        <div class="col-md-20">
                            <a href="">
                                <img class="my-4" src="<?php echo $this->assetBaseurl; ?>home/i-shopee.png">
                            </a>
                        </div>
                        <div class="col-md-20">
                            <a href="">
                                <img class="my-4" src="<?php echo $this->assetBaseurl; ?>home/i-happyfresh.png">
                            </a>
                        </div>
                        <div class="col-md-20">
                            <a href="">
                                <img class="my-4" src="<?php echo $this->assetBaseurl; ?>home/i-gojek.png">
                            </a>
                        </div>
                        <div class="col-md-20">
                            <a href="">
                                <img class="my-4" src="<?php echo $this->assetBaseurl; ?>home/i-grab.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-30">
                <img class="mockup" src="<?php echo $this->assetBaseurl; ?>home/mockup.png">
            </div>
        </div>
    </div>
</section>