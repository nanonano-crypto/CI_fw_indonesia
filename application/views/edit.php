<div class="content-wrapper">
    <section class="content">
        <?php foreach($mahasiswa as $mhs) { ?>
            <form action="<?php echo base_url(). 'mahasiswa/update'; ?>" method="post">
            <div class="form-group">
                <label for="">Nama Mahasiswa</label>
                <input type="hidden" name="id" class="form-control" value="<?php echo $mhs->id ?>">
                <input type="text" name="nama" class="form-control" value="<?php echo $mhs->nama ?>">
            </div>
            <div class="form-group">
                <label for="">Nim</label>               
                <input type="text" name="nim" class="form-control" value="<?php echo $mhs->nim ?>">
            </div>
            <div class="form-group">
                <label for="">Tanggal Lahir</label>               
                <input type="text" name="tgl_lahir" class="form-control" value="<?php echo $mhs->tgl_lahir ?>">
            </div>
            <div class="form-group">
                <label for="">Jurusan</label>
                <select name="jurusan" class="form-control value="<?php echo $mhs->jurusan ?>">
                    <option>sistem informasi</option>
                    <option>Teknik Informatika</option>
                    <option>Teknik Komputer</option>
                </select>           
               
            </div>


            <div class="form-group">
                <label for="">Alamat</label>               
                <input type="text" name="alamat" class="form-control" value="<?php echo $mhs->alamat ?>">
            </div>
            <div class="form-group">
                <label for="">E-mail</label>               
                <input type="text" name="email" class="form-control" value="<?php echo $mhs->email ?>">
            </div>
            <div class="form-group">
                <label for="">No telpom</label>               
                <input type="text" name="no_telp" class="form-control" value="<?php echo $mhs->no_telp ?>">
            </div>

            <button type="reset" class="btn btn-danger"> Reset</button>
            <button type="submit" class="btn btn-primary"> Simpan</button>
           
        
        
        </form>
        <?php } ?>
    </section>
</div>