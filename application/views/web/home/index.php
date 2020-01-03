<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12" style="margin-bottom: 10px;">
                <button class="btn btn-light btn-sm text-muted"><i class="fas fa-filter"></i> Filter</button>
                <button class="btn btn-light btn-sm text-muted"><i class="fas fa-sort-amount-down"></i> Urutkan</button>
            </div>
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
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">Category</p>
                                        <h3 class="product-name"><a href="<?= base_url($penginapan->jenis_kamar.'/'.$penginapan->slug) ?>"><?= $penginapan->nama_kamar ?></a></h3>
                                        <h4 class="product-price">Rp. <?= isset($penginapan->harga[0]->harga) ? number_format($penginapan->harga[0]->harga) : '0' ?> <span class="product-old-price"><?= isset($penginapan->harga[0]->durasi) ? $penginapan->harga[0]->durasi: '' ?> </span></h4>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product-btns">
                                            <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                            <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                            <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <?= anchor('Baru/cek/'.$penginapan->id_kamar,' <button class="add-to-cart-btn"><i class="fa fa-click"></i>CEK KOS</button>')?>
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