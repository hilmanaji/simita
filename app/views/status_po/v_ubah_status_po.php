
<div class="judul">
    <h4>Setting / <a href="<?= BASEURL; ?>/StatusPo/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/StatusPo/ubahData/" method="post">
                <input type="hidden" name="id_status_po" value="<?= $data['data_status_po']['id_status_po'] ?>">
                <label for="regional">
                    <span>STATUS DOKUMEN PO<span class="required">*</span></span>
                    <input type="text" class="input-text" name="status_po" value="<?= $data['data_status_po']['status_po'] ?>" required/>
                </label>
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


