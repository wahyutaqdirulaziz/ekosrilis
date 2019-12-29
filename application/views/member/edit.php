<div class="container-fluid mt-5 ml-3  text-gray-500">

<h3> <i class="fas fa-edit"></i> Edit Kos</h3>

<?php foreach($motor as $mhs): ?>
    <form action="<?php echo base_url().'Member_data/update' ?>" method="post">
<div class="for-group">

<label>nama</label>
<input type="text" name="nama_kos" class="form-control" value="<?= $mhs->nama_kos?>">


</div>
<div class="for-group">

<label>keterangan</label>
<input type="hidden" name="id_kos" class="form-control" value="<?= $mhs->id_kos?>">
<input type="text" name="keterangan" class="form-control" value="<?= $mhs->keterangan?>">


</div>
<div class="for-group">

<label>kabupaten/kota</label>
<select name="kota" class="form-control" >
               <option>lombok timur</option>
               <option>lombok tengah</option>
               <option>lombok barat</option>
               <option>mataram</option>
               <option>lombok utara</option>
               
             </select>


</div>
<div class="for-group">

<label>kategori</label>
<select name="katagori" class="form-control" >
               <option>kos cewek</option>
               <option>kos cewek cowok</option>
               <option>kos cowok</option>
               <option>Rumahan</option>
               
             </select>


</div>
<div class="for-group">

<label>no</label>
<input type="text" name="no_hp" class="form-control" value="<?= $mhs->no_hp?>">


</div>
<div class="for-group">

<label>status</label>
<select name="status" class="form-control" >
               <option>full</option>
               <option>kosong</option>
               
             </select>


</div>
<div class="for-group">

<label>harga</label>
<input type="text" name="harga" class="form-control" value="<?= $mhs->harga?>">


</div>
<div class="for-group">

<label>stok</label>
<input type="text" name="stok" class="form-control" value="<?= $mhs->stok?>">


</div>

<div>
<button type="submit" class="btn btn-primary btn-sm mt-5" >SIMPAN</button>
</div>




</form>



<?php endforeach; ?>



</div>

</div>

