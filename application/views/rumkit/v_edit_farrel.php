<div class="col-lg-7">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Lokasi Rumah Sakit
        </div>
         <div class="panel-body">
           <?= $map['html']?>
        </div>
        
    </div>
</div>

<div class="col-lg-5">
    <div class="panel panel-primary">
        <div class="panel-heading">
            Edit Data Rumah Sakit
        </div>
         <div class="panel-body">
           <?php echo form_open('rumkit_farrel/edit_farrel/'.$rumkit->id_rumkit); ?>

           <div class="form-group">
                <label>Nama Rumah Sakit</label>
                <input class="form-control" value="<?= $rumkit->nama_rumkit ?>" name="nama_rumkit" placeholder="Nama Rumah Sakit" required>
            </div>

            <div class="form-group">
                <label>Nomer Telepon</label>
                <input class="form-control" name="no_telp" value="<?= $rumkit->no_telp ?>" placeholder="Nomer Telepon" required>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" name="alamat" value="<?= $rumkit->alamat ?>" placeholder="Alamat" required>
            </div>
            <div class="form-group">
                <label>Latitude</label>
                <input class="form-control" value="<?= $rumkit->latitude ?>" name="latitude" placeholder="Latitude" required readonly>
            </div>
            <div class="form-group">
                <label>Longitude</label>
                <input class="form-control" value="<?= $rumkit->longitude ?>" name="longitude" placeholder="Longitude" required readonly>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <div><br></div>
                <textarea class="form-control"  name="deskripsi"  cols="50" rows="5" required>"<?= $rumkit->deskripsi ?>"</textarea>
            </div>
            <div class="form-group">
               <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
            </div>


           <?php echo form_close() ?>
        </div>
        
    </div>
</div>