
<div class="judul">
    <h4>Home / <a href="<?= BASEURL; ?>/po/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/Po/tambah/" method="post">
                <label for="no_po">
                    <span>NO PO <span class="required">*</span></span>
                    <input type="text" class="input-text" name="no_po" value="" required/>
                </label>
                <label for="jenis_po">
                    <span>JENIS PO</span>
                    <select name="jenis_po" class="select-field">
                        <option value="OSP">OSP</option>
                        <option value="IODN">IODN</option>
                        <option value="PSB DAN MIGRASI">PSB & MIGRASI</option>
                    </select>
                </label>
                <label for="tgl_mulai">
                    <span>TGL MULAI <span class="required">*</span></span>
                    <input type="date" class="input-text" name="tgl_mulai" value="" required/>
                </label>
                <label for="tgl_selesai">
                    <span>TGL SELSAI <span class="required">*</span></span>
                    <input type="date" class="input-text" name="tgl_selesai" value="" required/>
                </label>
                <label for="nilai_material">
                    <span>MATERIAL <span class="required">*</span></span>
                    <input type="number" class="input-text" name="nilai_material" value=""/>
                </label>
                <label for="nilai_jasa">
                    <span>JASA <span class="required">*</span></span>
                    <input type="number" class="input-text" name="nilai_jasa" value=""/>
                </label>
                <label for="total">
                    <span>TOTAL <span class="required">*</span></span>
                    <input type="number" class="input-text" name="total" value=""/>
                </label>
                <label for="id_mitra">
                    <span>MITRA</span>
                    <select style="width: 40%" name="id_mitra" class="select-field">
                        <?php foreach ( $data['data_mitra'] as $mitra ) : ?>    
                        <option value="<?= $mitra['id_mitra'] ?>"><?= $mitra['nama_perusahaan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="status_po"><span>STATUS PO <span class="required">*</span></span><textarea name="status_po" class="textarea-field"></textarea></label>

                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


