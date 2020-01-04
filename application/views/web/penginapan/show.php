<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-6">
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">Tampak Penginapan</h3>
                    </div>
                    <div class="form-group">
                        <div>
                            <div id="product-main-img">
                                <?php
                                    foreach ($penginapan->gambar as $gambar):
                                ?>
                                    <div class="product-preview" style="cursor:zoom-in;">
                                        <img src="<?= base_url('uploads/images/penginapan/'.$gambar->gambar) ?>"  alt="..." width="100%" >
                                    </div>
                                <?php
                                    endforeach;
                                ?>
                            </div>
                        </div>
                        <!-- /Product main img -->

                        <!-- Product thumb imgs -->
                        <div class="col-md-2  col-md-pull-5">
                            <div id="product-imgs">
                                <?php
                                foreach ($penginapan->gambar as $gambar):
                                    ?>
                                    <div class="product-preview">
                                        <img src="<?= base_url('uploads/images/penginapan/'.$gambar->gambar) ?>"  alt="..." width="100%" style="object-fit: cover; height: 127px">
                                    </div>
                                <?php
                                endforeach;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Order Details -->
            <div class="col-md-6 order-details" style="margin-top:85px">
                <div class="section-title text-center">
                    <h3 class="title">Detail Penginapan</h3>
                </div>

                <div class="order-summary">
                    <div class="order-products">
                        <div class="order-col">
                            <div>Nama Penginapan</div>
                            <div><?= $penginapan->nama_kamar ?></div>
                        </div>
                        <?php
                            foreach ($penginapan->harga as $harga) :
                        ?>
                                <div class="order-col">
                                    <div>Harga 1 <?= ucwords(substr($harga->durasi, 3)) ?></div>
                                    <div>Rp <?= number_format($harga->harga) . '/' . substr($harga->durasi, 3) ?></div>
                                </div>
                        <?php
                            endforeach;
                        ?>
                    </div>
                    <div class="order-col">
                        <div>Alamat</div>
                        <div><?= $penginapan->alamat ?></div>
                    </div>
                    <div class="order-col">
                        <div>Nomor Handphone</div>
                        <div><?= $penginapan->nomor_handphone ?></div>
                    </div>
                    <div class="order-col">
                        <div>Keterangan</div>
                        <div><?= $penginapan->keterangan?></div>
                    </div>
                </div>
                <?php
                    if(substr(trim($penginapan->nomor_handphone), 0, 3) == '+62'){
                        $no_hp = trim($penginapan->nomor_handphone);
                    }
                    // cek apakah no hp karakter 1 adalah 0
                    elseif(substr(trim($penginapan->nomor_handphone), 0, 1) == '0'){
                        $no_hp = '+62'.substr(trim($penginapan->nomor_handphone), 1);
                    }
                ?>

                <a href="https://api.whatsapp.com/send?phone=<?= $no_hp ?>" class="primary-btn order-submit" target="_blank">BOKING</a>
            </div>
            <!-- /Order Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->