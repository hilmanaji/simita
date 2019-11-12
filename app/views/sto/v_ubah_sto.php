
<div class="judul">
    <h4>Dashboard / <a href="<?= BASEURL; ?>/sto/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/sto/ubahData/" method="post">
                <input type="hidden" name="id_sto" value="<?= $data['data_sto']['id_sto'] ?>">
                <label for="id_datel">
                    <span>DATEL</span>
                    <select name="id_datel" class="select-field">
                        <option value="<?= $data['data_datel']['id_datel'] ?>"><?= $data['data_datel']['datel'] ?></option>
                        <?php foreach ( $data['data_dat'] as $dat ) : ?>    
                        <option value="<?= $dat['data_dat'] ?>"><?= $dat['datel'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="kode_sto">
                    <span>KODE STO<span class="required">*</span></span>
                    <input type="text" class="input-text" name="kode_sto" value="<?= $data['data_sto']['kode_sto'] ?>"/>
                </label>
                <label for="nama_sto">
                    <span>NAMA STO<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama_sto" value="<?= $data['data_sto']['nama_sto'] ?>"/>
                </label>
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


