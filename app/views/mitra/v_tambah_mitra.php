
<div class="judul">
    <h4>Home / <a href="<?= BASEURL; ?>/po/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/mitra/tambah/" method="post">
                <label for="nama_perusahaan">
                    <span>NAMA PERUSAHAAN<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama_perusahaan" value="" required/>
                </label>
                <label for="alamat">
                    <span>ALAMAT<span class="required">*</span></span>
                    <input type="textarea" class="textarea-field" name="alamat" value="" required/>
                </label>
                <label for="email">
                    <span>EMAIL<span class="required">*</span></span>
                    <input type="email" class="input-text" name="email" value="" required/>
                </label>
                <label for="telp">
                    <span>TELP<span class="required">*</span></span>
                    <input type="text" class="input-text" name="telp" value="" required/>
                </label>
                <label for="nama_direktur">
                    <span>NAMA DIREKTUR<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama_direktur" value="" required/>
                </label>
                <label for="no_hp">
                    <span>NO HANDPHONE<span class="required">*</span></span>
                    <input type="text" class="input-text" name="no_hp" value="" required/>
                </label>
                
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


