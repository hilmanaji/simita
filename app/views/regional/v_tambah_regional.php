
<div class="judul">
    <h4>Teritori / <a href="<?= BASEURL; ?>/regional/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/regional/tambah/" method="post">
                <label for="regional">
                    <span>REGIONAL<span class="required">*</span></span>
                    <input type="text" class="input-text" name="regional" value="" required/>
                </label>
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


