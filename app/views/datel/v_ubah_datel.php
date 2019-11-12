
<div class="judul">
    <h4>Dashboard / <a href="<?= BASEURL; ?>/datel/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/datel/ubahData/" method="post">
                <input type="hidden" name="id_datel" value="<?= $data['data_datel']['id_datel'] ?>">
                <label for="id_witel">
                    <span>WITEL</span>
                    <select name="id_witel" class="select-field">
                        <option value="<?= $data['data_witel']['id_witel'] ?>"><?= $data['data_witel']['witel'] ?></option>
                        <?php foreach ( $data['data_wit'] as $wit ) : ?>    
                        <option value="<?= $wit['id_witel'] ?>"><?= $wit['witel'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="witel">
                    <span>DATEL<span class="required">*</span></span>
                    <input type="text" class="input-text" name="datel" value="<?= $data['data_datel']['datel'] ?>"/>
                </label>
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


