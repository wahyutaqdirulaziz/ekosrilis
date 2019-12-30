<div class="form-group row">
    <label for="nama_kos" class="col-sm-2 col-form-label text-right">Nama</label>
    <div class="col-sm-9">
      	<input type="text" class="form-control" id="nama_kos" name="nama_kos" minlength="3" maxlength="100" value="<?= isset($data->nama_kos) ? $data->nama_kos : set_value('nama_kos');?>">
    	 <?= form_error('nama_kos', '<small class="text-danger" >','</small>');  ?>
    </div>
</div>
<div class="form-group row">
    <label for="katagori" class="col-sm-2 col-form-label text-right">Kategori</label>
    <div class="col-sm-9">
        <input type="text" class="form-control" id="katagori" name="katagori" minlength="3" maxlength="100" value="<?= isset($data->katagori) ? $data->katagori : set_value('katagori');?>">
        <?= form_error('katagori', '<small class="text-danger" >','</small>');  ?>
    </div>
</div>
<div class="form-group row">
    <label for="stok" class="col-sm-2 col-form-label text-right">Kamar Kosong</label>
    <div class="col-sm-9">
        <input type="number" class="form-control" id="stok" name="stok" value="<?= isset($data->stok) ? $data->stok : set_value('stok');?>">
        <?= form_error('stok', '<small class="text-danger" >','</small>');  ?>
    </div>
</div>
<div class="form-group row">
    <label for="harga" class="col-sm-2 col-form-label text-right">Harga</label>
    <div class="col-sm-9">
        <input type="number" class="form-control" id="harga" name="harga" value="<?= isset($data->harga) ? $data->harga : set_value('harga');?>">
        <?= form_error('harga', '<small class="text-danger" >','</small>');  ?>
    </div>
</div>
<div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label text-right">Alamat Lengkap</label>
    <div class="col-sm-9">
      	<textarea class="form-control" id="alamat" name="alamat" minlength="10"><?= isset($data->alamat) ? $data->alamat : set_value('alamat');?></textarea>
      	<?= form_error('alamat', '<small class="text-danger" >','</small>');  ?>
    </div>
</div>
<div class="form-group row">
    <label for="kota" class="col-sm-2 col-form-label text-right">Kota</label>
    <div class="col-sm-9">
      	<input type="text" class="form-control" id="kota" name="kota" minlength="3" maxlength="100" value="<?= isset($data->kota) ? $data->kota : set_value('kota');?>">
      	<?= form_error('kota', '<small class="text-danger" >','</small>');  ?>
    </div>
</div>
<div class="form-group row">
    <label for="no_hp" class="col-sm-2 col-form-label text-right">Nomor Whatsapp</label>
    <div class="col-sm-9">
      	<input type="number" class="form-control" id="no_hp" name="no_hp" minlength="3" maxlength="15" value="<?= isset($data->no_hp) ? $data->no_hp : set_value('no_hp');?>">
      	<?= form_error('no_hp', '<small class="text-danger" >','</small>');  ?>
    </div>
</div>
<div class="form-group row">
    <label for="keterangan" class="col-sm-2 col-form-label text-right">Keterangan</label>
    <div class="col-sm-9">
        <textarea class="form-control" id="keterangan" name="keterangan" minlength="10"><?= isset($data->keterangan) ? $data->keterangan : set_value('keterangan');?></textarea>
        <?= form_error('keterangan', '<small class="text-danger" >','</small>');  ?>
    </div>
</div>
<div class="form-group row">
    <label for="id_user" class="col-sm-2 col-form-label text-right">Pemilik</label>
    <div class="col-sm-9">
        <select class="form-control" name="id_user">
            <option value="">-Pilih Pemilik-</option>
            <?php
                foreach ($members as $member) {
                    $selected = isset($data->id_user) ? $data->id_user == $member->user_id ? 'selected' : '' : '';
                    echo '<option value="'.$member->user_id.'" '.$selected.'>'.$member->nama.'</option>';
                }
            ?>
        </select>
        <?= form_error('id_user', '<small class="text-danger" >','</small>');  ?>
    </div>
</div>