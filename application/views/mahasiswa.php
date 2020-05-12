<div class="content-wrapper">
    <section>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">
                        Data Mahasiswa
                    
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Data Mahasiswa</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
       
    </section>
    <section class="content">
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Tambah Mahasiswa</button>
        <table class="table">
            <tr>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Nim</th>
                <th>Tanggal Lahir</th>
                <th>Jurusan</th>
                <th colspan="2">Aksi</th>
            </tr>

            <?php

            $no = 1;
            foreach ($mahasiswa as $mhs) : ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $mhs->nama ?></td>
                <td><?php echo $mhs->nim ?></td>
                <td><?php echo $mhs->tgl_lahir ?></td>
                <td><?php echo $mhs->jurusan ?></td>
                <td onclick="javascript:return confirm('anda yakin hapus')"><?php echo anchor('mahasiswa/hapus/'. $mhs->id, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                <td> <?php echo anchor('mahasiswa/edit/'. $mhs->id, '<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?></td>
                
            </tr>

            <?php endforeach ?>
        </table>
    </section>
   
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">FORM INPUT DATA MAHASISWA</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="post" action="<?php echo base_url().'mahasiswa/tambah_aksi' ?>">
                <div class="form-group">
                    <label for="">Nama Mahasiswa</label><br>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Nim</label><br>
                    <input type="text" name="nim" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Tanggal Lahir</label><br>
                    <input type="date" name="tgl_lahir" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Jurusan</label><br>
                    <input type="text" name="jurusan" class="form-control">
                </div>
                
            <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
       
       
        </div>
    </div>
    </div>
</div>