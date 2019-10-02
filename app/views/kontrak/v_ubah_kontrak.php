<div class="judul">
    <h4>Dashboard / <a href="<?= BASEURL; ?>/kontrak/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/kontrak/ubahData/" method="post">
                <input type="hidden" name="id_kontrak" value="<?= $data['data_kontrak']['id_kontrak'] ?>">
                <label for="no_kontrak">
                    <span>NO KONTRAK<span class="required">*</span></span>
                    <input type="text" class="input-text" name="no_kontrak" value="<?= $data['data_kontrak']['no_kontrak'] ?>" required/>
                </label>
                <label for="jenis_kontrak">
                    <span>JENIS KONTRAK</span>
                    <select name="jenis_kontrak" class="select-field">
                        <option value="<?= $data['data_kontrak']['jenis_kontrak'] ?>"><?= $data['data_kontrak']['jenis_kontrak'] ?></option>
                        <option value="IODN">IODN</option>
                    </select>
                </label>
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>









