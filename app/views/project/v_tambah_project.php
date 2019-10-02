
<div class="judul">
    <h4>Home / <a href="<?= BASEURL; ?>/project/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/project/tambah/" method="post">
                <label for="id_project">
                    <span>ID PROJECT<span class="required">*</span></span>
                    <input type="text" class="input-text" name="id_project" value="" required/>
                </label>
                <label for="no_po">
                    <span>NO PO</span>
                    <select name="no_po" class="select-field">
                        <?php foreach ( $data['data_po'] as $po ) : ?>    
                        <option value="<?= $po['id_po'] ?>"><?= $po['no_po'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="id_regional">
                    <span>REGIONAL</span>
                    <select name="id_regional" class="select-field">
                        <?php foreach ( $data['data_regional'] as $reg ) : ?>    
                        <option value="<?= $reg['id_regional'] ?>"><?= $reg['regional'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="id_witel">
                    <span>WITEL</span>
                    <select name="id_witel" class="select-field">
                        <?php foreach ( $data['data_witel'] as $wit ) : ?>    
                        <option value="<?= $wit['id_witel'] ?>"><?= $wit['witel'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="id_datel">
                    <span>DATEL</span>
                    <select name="id_datel" class="select-field">
                        <?php foreach ( $data['data_datel'] as $dat ) : ?>    
                        <option value="<?= $dat['id_datel'] ?>"><?= $dat['datel'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="id_sto">
                    <span>STO</span>
                    <select name="id_sto" class="select-field">
                        <?php foreach ( $data['data_sto'] as $sto ) : ?>    
                        <option value="<?= $sto['id_sto'] ?>"><?= $sto['kode_sto'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="nama_lokasi">
                    <span>SITE NAME<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama_lokasi" value="" required/>
                </label>
                <label for="odp">
                    <span>JASA <span class="required">*</span></span>
                    <input type="number" class="input-text" name="odp" value=""/>
                </label>
                <label for="port">
                    <span>JASA <span class="required">*</span></span>
                    <input type="number" class="input-text" name="port" value=""/>
                </label>
                <label for="toc">
                    <span>TOC<span class="required">*</span></span>
                    <input type="date" class="input-text" name="toc" value="" required/>
                </label>
                <label for="nilai_material">
                    <span>MATERIAL <span class="required">*</span></span>
                    <input type="number" class="input-text" name="nilai_material" value=""/>
                </label>
                <label for="nilai_jasa">
                    <span>MATERIAL <span class="required">*</span></span>
                    <input type="number" class="input-text" name="nilai_jasa" value=""/>
                </label>
                <label for="total">
                    <span>TOTAL <span class="required">*</span></span>
                    <input type="number" class="input-text" name="total" value=""/>
                </label>
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


