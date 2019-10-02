
<div class="judul">
    <h4>Home / <a href="<?= BASEURL; ?>/po/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/mitra/ubahData/" method="post">
                <input type="hidden" name="id_mitra" value="<?= $data['data_mitra']['id_mitra'] ?>">
                <label for="nama_perusahaan">
                    <span>NAMA PERUSAHAAN<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama_perusahaan" value="<?= $data['data_mitra']['nama_perusahaan'] ?>" required/>
                </label>
                <label for="alamat">
                    <span>ALAMAT<span class="required">*</span></span>
                    <input type="textarea" class="textarea-field" name="alamat" value="<?= $data['data_mitra']['alamat'] ?>" required/>
                </label>
                <label for="email">
                    <span>EMAIL<span class="required">*</span></span>
                    <input type="email" class="input-text" name="email" value="<?= $data['data_mitra']['email'] ?>" required/>
                </label>
                <label for="telp">
                    <span>TELP<span class="required">*</span></span>
                    <input type="text" class="input-text" name="telp" value="<?= $data['data_mitra']['telp'] ?>" required/>
                </label>
                <label for="nama_direktur">
                    <span>NAMA DIREKTUR<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama_direktur" value="<?= $data['data_mitra']['nama_direktur'] ?>" required/>
                </label>
                <label for="no_hp">
                    <span>NO HANDPHONE<span class="required">*</span></span>
                    <input type="text" class="input-text" name="no_hp" value="<?= $data['data_mitra']['no_hp'] ?>" required/>
                </label>
                
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


