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
            Input Data Rumah Sakit
        </div>
         <div class="panel-body">
           <?php echo form_open('rumkit_farrel/input_farrel'); ?>

           <div class="form-group">
                <label>Nama Rumah Sakit</label>
                <input class="form-control" name="nama_rumkit" placeholder="Nama Rumah Sakit" required>
            </div>

            <div class="form-group">
                <label>Nomer Telepon</label>
                <input class="form-control" name="no_telp" placeholder="Nomer Telepon" required>
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <input class="form-control" name="alamat" placeholder="Alamat" required>
            </div>
            <div class="form-group">
                <label>Latitude</label>
                <input class="form-control" name="latitude" placeholder="Latitude" required readonly>
            </div>
            <div class="form-group">
                <label>Longitude</label>
                <input class="form-control" name="longitude" placeholder="Longitude" required readonly>
            </div>
            <div class="form-group">
                <label>Deskripsi</label>
                <div><br></div>
                <textarea class="form-control" name="deskripsi"  cols="50" rows="5" required></textarea>
            </div>
            <div class="form-group">
               <button class="btn btn-primary btn-sm" type="submit">Simpan</button>
               <button class="btn btn-success btn-sm" type="reset">Reset</button>
            </div>


           <?php echo form_close() ?>
        </div>
        
    </div>
</div>