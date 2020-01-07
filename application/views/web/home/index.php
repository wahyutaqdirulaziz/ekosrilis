<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
			<div class="col-md-10">
				<div class="head-section">
					Unggulan
				</div>
			</div>
            <span class="col-md-2 atribut">
                <button class="btn btn-light btn-sm text-muted"><i class="fas fa-filter"></i> Filter</button>
                <button class="btn btn-light btn-sm text-muted"><i class="fas fa-sort-amount-down"></i> Urutkan</button>
            </span>
            <!-- /section title -->

            <!-- Products -->
            <div class="col-md-12">
                <div class="row">
                    <?php
                        $no=$this->uri->segment('3') + 1;
                        foreach($penginapans as $penginapan) : ?>
                            <div class="col-md-3 col-xs-6">
                                <div class="product">
                                    <div class="product-img">
                                        <img class="thumbnail-img-product" src="<?= $penginapan->gambar != null ? base_url('uploads/images/penginapan/'.$penginapan->gambar) : base_url('assets/tempatnginap/img/no-image.jpg') ?>" alt="">
                                        <div class="product-label">
<!--                                            <span class="sale">--><?php //echo $penginapan->status ?><!--</span>-->
											<span class="new"><a href="<?= base_url($penginapan->jenis_kamar);?>" style="color: #fff;"><?= $penginapan->jenis_kamar ?></a></span>
											<?php if($penginapan->nama_kategori_kamar != null ){?>
                                                <span class="new"><a href="<?= base_url($penginapan->nama_kategori_kamar);?>" style="color: #fff;"><?= $penginapan->nama_kategori_kamar ?></a></span>
                                            <?php }else{

                                            }; ?>
                                        </div>
										<div class="product-name">
											<a href="<?= base_url($penginapan->jenis_kamar.'/'.$penginapan->slug) ?>" style="color: #fff;"><?= $penginapan->nama_kamar ?></a>
										</div>
                                    </div>
                                    <div class="product-body">                                        
                                        <div class="product-price">
											Rp. <?= isset($penginapan->harga[0]->harga) ? number_format($penginapan->harga[0]->harga) : '0' ?>
											<span class="product-old-price"><?= isset($penginapan->harga[0]->durasi) ? $penginapan->harga[0]->durasi: '' ?> </span>
										</div>
                                        <div class="product-rating">
                                            <i class="fa fa-star" style="color: orange"></i>
											<i class="fa fa-star" style="color: orange"></i>
											<i class="fa fa-star" style="color: orange"></i>
											<i class="fa fa-star" style="color: orange"></i>
											<i class="fa fa-star" style="color: orange"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fas fa-tv" style="color: #70b2e0"></i><span class="tooltipp">Televisi</span></button>
                                            <button class="add-to-compare"><i class="fas fa-bed" style="color: #70b2e0"></i><span class="tooltipp">Tempat Tidur</span></button>
                                            <button class="quick-view"><i class="fas fa-server" style="color: #70b2e0"></i><span class="tooltipp">Lemari</span></button>
											<button class="quick-view"><i class="fas fa-wifi" style="color: #70b2e0"></i><span class="tooltipp">Wifi</span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        endforeach;
                    ?>
                </div>
            </div>
            <!-- /Products -->
        </div>
        <!-- /row -->
    </div>

    <div class="container"><?php echo $this->pagination->create_links(); ?></div>
    <!-- /container -->
</div>