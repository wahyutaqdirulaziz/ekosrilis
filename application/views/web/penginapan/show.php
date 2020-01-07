<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-8">
                <div id="product-main-img">
                    <?php foreach ($penginapan->gambar as $gambar):?>
                    <div class="product-preview" style="cursor:zoom-in;">
                         <img src="<?= base_url('uploads/images/penginapan/'.$gambar->gambar) ?>"  alt="..." height="400px">
                    </div>
                     <?php endforeach; ?>
                </div>
				<div id="product-imgs" class="hidden-lg hidden-sm hidden-xs">
					<div class="row">					
						<div class="col-md-2 col-md-pull-2" style="margin-left:-20px;">						
							<?php foreach ($penginapan->gambar as $gambar): ?>
							<div class="product-preview">
								<img src="<?= base_url('uploads/images/penginapan/'.$gambar->gambar) ?>"  alt="..." style="object-fit: cover; height: 127px">
							 </div>
							<?php endforeach; ?>
						</div>
					</div>
				</div>				
				
				<div class="keterangan-lapak">
					<div class="judul-keterangan-lapak">Keterangan</div>
					<?= $penginapan->keterangan ?>
				</div>
				
				<div class="fasilitas">
					<div class="head-fasilitas-section">Fasilitas</div>
					<div class="row">
						<div class="col-md-3 col-xs-12">
							<ul>
								<li class="icon-fasilitas"><i class="fas fa-tv"></i><div class="nama-fasilitas">Televisi</div></li>
							</ul>
						</div>
						<div class="col-md-3 col-xs-12">
							<ul>
								<li class="icon-fasilitas"><i class="fas fa-fan"></i><div class="nama-fasilitas">Air Conditioner</div></li>
							</ul>
						</div>
						<div class="col-md-3 col-xs-12">
							<ul>
								<li class="icon-fasilitas"><i class="fas fa-bed"></i><div class="nama-fasilitas">Kasur</div></li>
							</ul>
						</div>
						<div class="col-md-3 col-xs-12">
							<ul>
								<li class="icon-fasilitas"><i class="fas fa-server"></i><div class="nama-fasilitas">Lemari</div></li>
							</ul>
						</div>
						<div class="col-md-3 col-xs-12">
							<ul>
								<li class="icon-fasilitas"><i class="fas fa-shower"></i><div class="nama-fasilitas">Hot Water</div></li>
							</ul>
						</div>
						<div class="col-md-3 col-xs-12">
							<ul>
								<li class="icon-fasilitas"><i class="fas fa-wifi"></i><div class="nama-fasilitas">Internet/Wifi</div></li>
							</ul>
						</div>
						<div class="col-md-3 col-xs-12">
							<ul>
								<li class="icon-fasilitas"><i class="fas fa-car"></i><div class="nama-fasilitas">Parkir</div></li>
							</ul>
						</div>
						<div class="col-md-3 col-xs-12">
							<ul>
								<li class="icon-fasilitas"><i class="fas fa-swimmer"></i><div class="nama-fasilitas">Kolam Renang</div></li>
							</ul>
						</div>
					</div>
				</div>
				
				<div id="map" class="peta">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0269917353676!2d116.10239601416396!3d-8.59340298962093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdbf6436d5117d%3A0x3e70e3bb2865dfb5!2sLombok%20Epicentrum%20Mall!5e0!3m2!1sid!2sid!4v1578399435559!5m2!1sid!2sid" width="100%" height="310px" frameborder="0" style="border:0;"></iframe>
				</div>
				
				<!-- Komentar -->
				<div id="komentar" class="komentar">
					<div class="head-komentar-section">Komentar</div>
					<div class="list-komentar">
						<div class="row">
							<div class="col-md-3">
								<div class="meta-komentar">
									<div class="foto-bookers">
										<img src="<?= base_url(); ?>uploads/user_pic/sella.jpg"  class="img-bookers" alt="Nama User" >
									</div>
									<div class="nama-bookers">
										Sella Anggaraini
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<div class="body-komentar">
									<div class="judul-komentar">
										<div class="row">
										<div class="col-md-9">
											<div class="isi-judul-komentar">Hotel yang sangat nyaman</div>
											<div class="tgl-komentar">01 Januari 2020</div>
											<div class="asal-bookers">Lombok Tengah</div>
										</div>
										<div class="col-md-3">
											<div class="comment-rate">
												<i class="fa fa-star" style="color: orange"></i>
												<i class="fa fa-star" style="color: orange"></i>
												<i class="fa fa-star" style="color: orange"></i>
												<i class="fa fa-star" style="color: orange"></i>
												<i class="fa fa-star" style="color: #ddd;"></i>
											</div>
											<div class="score">8.4</div>
										</div>
										</div>
									</div>
									<div class="isi-komentar">
										<p>
											Aenean porttitor ultricies ipsum non tristique. Praesent nec nibh aliquet, varius diam a, aliquet nisi. Vestibulum ut urna sollicitudin, tristique risus non, rutrum neque. Nulla vitae neque nibh. Nulla scelerisque interdum diam id suscipit. Integer eu dui nunc. Pellentesque massa ex, varius et quam quis, cursus bibendum mi.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>

            <!-- Order Details -->
            <div class="col-md-4">
				<div class="order-details">
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
					</div>
				</div>
                
				<div class="contact-lapak">
					<div class="section-title text-center">
						<h3 class="title">Info Kontak Lapak</h3>
					</div>
					<div class="order-col">
						<div class="row">
							<div class="col-md-3"><b>Alamat</b></div>
							<div class="col-md-9"><?= $penginapan->alamat ?></div>
						</div>
					</div>
					<div class="order-col">
						<div class="row">
							<div class="col-md-3"><b>Telepon</b></div>
							<div class="col-md-9"><?= $penginapan->nomor_handphone ?></div>
						</div>
					</div>
					<div class="sosmed-lapak">							
						<ul class="sosmed-lapak-follow">
							<li>
								<a href="#" style="background: #2851A3;"><i class="fa fa-facebook" style="color: #fff"></i></a>
							</li>
							<li>
								<a href="#" style="background: #3fccec;"><i class="fa fa-twitter" style="color: #fff"></i></a>
							</li>
							<li>
								<a href="#" style="background: #ce259a;"><i class="fa fa-instagram" style="color: #fff"></i></a>
							</li>
							<li>
								<a href="#" style="background: #D10024;"><i class="fa fa-youtube-play" style="color: #fff"></i></a>
							</li>
							<li>
								<a href="#" style="background: #25ce3a;"><i class="fa fa-whatsapp" style="color: #fff"></i></a>
							</li>
						</ul>
					</div>
				</div>
				
            </div>
			
            <!-- /Order Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<script src='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.js'></script>
	<script src='https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.4.2/mapbox-gl-geocoder.min.js'></script>
	<script src="<?= site_url('assets/vendor/select2/js/select2.full.min.js') ?>"></script>
  	<script>
	    $(function(){
	    	var regency_id = '<?= isset($data->regency_id) ? $data->regency_id : set_value('regency_id'); ?>'
	        $('.select2').select2();
	        $('.regency').val(regency_id).trigger('change');
	    });
	</script>
	<script>
		mapboxgl.accessToken = 'pk.eyJ1IjoicHV0cmFkb25na2FsIiwiYSI6ImNrMTkxZ3BjNTBuY2UzbW8xZTN2M2pkY3cifQ.VoRd8BjGTEKYkbhrawEL7w';
		var defaultLat = <?= isset($data->latitude) ? $data->latitude != '' ? $data->latitude : '-2' : '-2'?>;
		var defaultLong = <?= isset($data->longitude) ? $data->longitude != '' ? $data->longitude : '119' : '119'?>;
		// var coordinates = document.getElementById('coordinates');
		var kamar_latitude = $('#latitude');
		var kamar_longitude = $('#longitude');

		var map = new mapboxgl.Map({
					container: 'map',
					style: 'mapbox://styles/mapbox/streets-v11',
			        center: [defaultLong, defaultLat],
			        zoom: 3.8
				});
		 
		var canvas = map.getCanvasContainer();
		 
		var geojson = {
							"type": "FeatureCollection",
							"features": [{
								"type": "Feature",
								"geometry": {
									"type": "Point",
									"coordinates": [defaultLong, defaultLat]
								}
							}]
						};

		var geocoder = new MapboxGeocoder({
							accessToken: mapboxgl.accessToken,
							zoom: 14,
							placeholder: "Cari lokasi cth: Jakarta",
							mapboxgl: mapboxgl,
							marker: {
										color: 'orange'
									},
						})
					
		map.addControl(geocoder, 'top-left');

		map.on('load', function() {
		    geocoder.on('result', function(ev) {
		        var result = ev.result;
		        var result_lat = result.geometry.coordinates[0];
		        var result_lng = result.geometry.coordinates[1];
		        // var styleSpecBox = document.getElementById('json-response');
		        // var styleSpecText = JSON.stringify(styleSpec, null, 2);
		        // var syntaxStyleSpecText = syntaxHighlight(styleSpecText);
		        // styleSpecBox.innerHTML = syntaxStyleSpecText;
				kamar_latitude.val(result_lat);
				kamar_longitude.val(result_lng);
		    });
		});
 
		var marker = new mapboxgl.Marker({
			draggable: true,
			color: 'orange'
		})
		.setLngLat([defaultLong, defaultLat])
		.addTo(map);
		 
		function onDragEnd() {
			var lngLat = marker.getLngLat();
			console.log(lngLat);
			kamar_latitude.val(lngLat.lat);
			kamar_longitude.val(lngLat.lng);
		}
		 
		marker.on('dragend', onDragEnd);
	</script>