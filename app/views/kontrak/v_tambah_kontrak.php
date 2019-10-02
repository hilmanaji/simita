
<div class="judul">
    <h4>Dashboard / <a href="<?= BASEURL; ?>/kontrak/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/kontrak/tambah/" method="post">
                <label for="no_kontrak">
                    <span>NO KONTRAK<span class="required">*</span></span>
                    <input type="text" class="input-text" name="no_kontrak" value="" required/>
                </label>
                <label for="jenis_kontrak">
                    <span>JENIS KONTRAK</span>
                    <select name="jenis_kontrak" class="select-field">
                        <option value="OSP">OSP</option>
                    </select>
                </label>
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


