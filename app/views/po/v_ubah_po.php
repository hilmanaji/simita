
<div class="judul">
    <h4>Home / <a href="<?= BASEURL; ?>/po/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/Po/ubahData/" method="post">
                <input type="hidden" name="id_po" value="<?= $data['data_po']['id_po'] ?>">
                <label for="no_po">
                    <span>NO PO <span class="required">*</span></span>
                    <input type="text" class="input-text" name="no_po" value="<?= $data['data_po']['no_po'] ?>" required/>
                </label>
                <label for="jenis_po">
                    <span>JENIS PO</span>
                    <select name="jenis_po" class="select-field">
                        <option value="<?= $data['data_po']['jenis_po'] ?>"><?= $data['data_po']['jenis_po'] ?></option>
                        <option value="IODN">IODN</option>
                        <option value="OSP">OSP</option>
                        <option value="PSB DAN MIGRASI">PSB & MIGRASI</option>
                    </select>
                </label>
                <label for="tgl_mulai">
                    <span>TGL MULAI <span class="required">*</span></span>
                    <input type="date" class="input-text" name="tgl_mulai" value="<?= $data['data_po']['tgl_mulai'] ?>" required/>
                </label>
                <label for="tgl_selesai">
                    <span>TGL SELSAI <span class="required">*</span></span>
                    <input type="date" class="input-text" name="tgl_selesai" value="<?= $data['data_po']['tgl_selesai'] ?>" required/>
                </label>
                <label for="nilai_material">
                    <span>MATERIAL <span class="required">*</span></span>
                    <input type="number" class="input-text" name="nilai_material" value="<?= $data['data_po']['nilai_material'] ?>" id="nilai_material" onkeyup="sum();"/>
                </label>
                <label for="nilai_jasa">
                    <span>JASA <span class="required">*</span></span>
                    <input type="number" class="input-text" name="nilai_jasa" value="<?= $data['data_po']['nilai_jasa'] ?>" id="nilai_jasa" onkeyup="sum();"/>
                </label>
                <label for="total">
                    <span>TOTAL <span class="required">*</span></span>
                    <input type="number" class="input-text" name="total" value="<?= $data['data_po']['total'] ?>" id="total" readonly/>
                </label>
                <label for="status_po"><span>STATUS PO <span class="required">*</span></span><textarea name="status_po" class="textarea-field"></textarea></label>

                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


