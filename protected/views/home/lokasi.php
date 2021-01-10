<section class="breadcrumb">
    <div class="prelative container">
        <div class="bloc_post_breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb wow fadeInDown">
                    <li class="breadcrumb-item"><a href="<?php echo CHtml::normalizeUrl(array('/home/index', 'lang' => Yii::app()->language)); ?>"><i class="fa fa-home"></i> &nbsp;&nbsp;Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Store Location</li>
                </ol>
            </nav>
        </div>
    </div>
</section>

<section class="lokasi-sec-1">
    <div class="prelative container">
        <div class="row">
            <div class="col-md-60">
                <div class="title-text">
                    <h1>TEMUKAN TOKO KAMI DI DEKAT ANDA</h1>
                </div>
            </div>
            <div class="col-md-20">
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Province</button>
                    <div id="myDropdown" class="dropdown-content">
                        <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                        <a href="#">Jawa Timur</a>
                        <a href="#">Jawa Barat</a>
                        <a href="#">Jawa Tengah</a>
                        <a href="#">DKI Jakarta</a>
                    </div>
                </div>
            </div>
            <div class="col-md-20">
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">City</button>
                    <div id="myDropdown2" class="dropdown-content">
                        <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                        <a href="#">Surabaya</a>
                        <a href="#">Malang</a>
                        <a href="#">Mojokerto</a>
                        <a href="#">Sidoarjo</a>
                    </div>
                </div>
            </div>
            <div class="col-md-20">
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn">Store Type</button>
                    <div id="myDropdown3" class="dropdown-content">
                        <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
                        <a href="#">Sawahan</a>
                        <a href="#">Gubeng</a>
                        <a href="#">Wonokromo</a>
                        <a href="#">Dukuh Pakis</a>
                    </div>
                </div>
            </div>
            <div class="col-md-60">
                <a href="">
                    <div class="button">
                        <p>Tunjukkan Toko Sekarang</p>
                    </div>
                </a>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d506196.7402608211!2d112.31982270581123!3d-7.611705665563149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbaeb847b26e6068f!2sBest%20Meat%20Kendangsari!5e0!3m2!1sid!2sid!4v1610195052119!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div class="col-md-30"> <img src="<?php echo $this->assetBaseurl; ?>lokasi/store.png">
            </div>
            <div class="col-md-30">
                <div class="row">
                    <div class="col-md-30">
                        <div class="store">
                            <h5>1. Best Meat Kalpataru</h5>
                            <p>Meat wholesaler
                                Jl. Cengkeh Ruko KAV. II No. 2Open : 07.00 - 21.00, Phone : 0811 - 3497 - 123</p>
                            <a href="#">
                                <p>View Location</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-30">
                        <div class="store">
                            <h5>2. Best Meat Kalpataru</h5>
                            <p>Meat wholesaler
                                Jl. Cengkeh Ruko KAV. II No. 2Open : 07.00 - 21.00, Phone : 0811 - 3497 - 123</p>
                            <a href="#">
                                <p>View Location</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-30">
                        <div class="store">
                            <h5>3. Best Meat Kalpataru</h5>
                            <p>Meat wholesaler
                                Jl. Cengkeh Ruko KAV. II No. 2Open : 07.00 - 21.00, Phone : 0811 - 3497 - 123</p>
                            <a href="#">
                                <p>View Location</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-30">
                        <div class="store">
                            <h5>4. Best Meat Kalpataru</h5>
                            <p>Meat wholesaler
                                Jl. Cengkeh Ruko KAV. II No. 2Open : 07.00 - 21.00, Phone : 0811 - 3497 - 123</p>
                            <a href="#">
                                <p>View Location</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-60 text-center">
                <h5>jika anda menemukan kesulitan menemukan toko kami, dan membutuhkan bantuan lebih lanjut,
                    silahkan menghubungi hotline kami sekarang</h5>
                <a href="">
                    <div class="button">
                        <p>Hubungi Kami Sekarang</p>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>