
<div class="judul">
    <h4>Setting / <a href="<?= BASEURL; ?>/StatusProject/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/StatusProject/tambah/" method="post">
                <label for="status_po">
                    <span>STATUS KEGIATAN PROJECT<span class="required">*</span></span>
                    <input type="text" class="input-text" name="kegiatan" value="" required/>
                </label>
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>