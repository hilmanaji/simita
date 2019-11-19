
<div class="judul">
    <h4>Setting / <a href="<?= BASEURL; ?>/StatusProject/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/StatusProject/ubahData/" method="post">
                <input type="hidden" name="id_kegiatan" value="<?= $data['data_status_project']['id_kegiatan'] ?>">
                <label for="regional">
                    <span>STATUS DOKUMEN PO<span class="required">*</span></span>
                    <input type="text" class="input-text" name="kegiatan" value="<?= $data['data_status_project']['kegiatan'] ?>" required/>
                </label>
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


