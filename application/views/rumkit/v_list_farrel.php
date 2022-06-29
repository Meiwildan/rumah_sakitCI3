<div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <?= $title?>
            </div>
            <!-- /.panel-heading -->
                    <div class="panel-body">
                    <?php if($this->session->userdata('username')<>"") { ?>

                    
                        <a href="<?= base_url('rumkit_farrel/input_farrel')?>" class="btn btn-primary btn-sm" ><i class="fa fa-plus"></i>>Input Data</a>
                    <?php } ?>
                        <div><br></div>
                        <?php
                        if ($this->session->flashdata('pesan')) {
                            echo '<div class="alert alert-success">
                            Data Berhasil Disimpan 
                        </div>';
                            echo $this->session->flashdata('pesan');
                        }
                        
                        ?>
                <div class="table-responsive">
                    <table  class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Rumah Sakit</th>
                                <th>Alamat</th>
                                <th>No Telepon</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <?php if($this->session->userdata('username')<>"") { ?>
                                <th>Action</th>
                                <?php } ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($rumkit as $key => $rumkit_farrel) {?>
                              
                            <tr>
                            <td><?= $no++;?></td>
                            <td><?= $rumkit_farrel->nama_rumkit ?></td>
                            <td><?= $rumkit_farrel->no_telp ?></td>
                            <td><?= $rumkit_farrel->alamat ?></td>
                            <td><?= $rumkit_farrel->latitude ?></td>
                            <td><?= $rumkit_farrel->longitude ?></td>
                            <?php if($this->session->userdata('username')<>"") { ?>
                            <td>
                                <a href="<?= base_url('rumkit_farrel/edit_farrel/'.$rumkit_farrel->id_rumkit); ?>" class="btn btn-success btn-sm">Edit</a>
                                <a href=""<?= base_url('rumkit_farrel/delete/'.$rumkit_farrel->id_rumkit); ?> class="btn btn-danger btn-sm " onclick="return confirm('Apakah yakin ingin menghapus data ini?')">Delete</a>
                            </td>
                            <?php } ?>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>