
<div class="judul">
    <h4>Project / <a href="<?= BASEURL; ?>/project/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="gaya-form">
        <form action="<?= BASEURL; ?>/project/ubahData/" method="post">
        <div class="grid-project">
            <div class="grid-form">
                <label for="id_project">
                    <span>ID PROJECT<span class="required">*</span></span>
                    <input style="width: 40%" type="text" class="input-text" name="id_project" value="<?= $data['data_project']['id_project'] ?>" />
                </label>
                <label for="id_po">
                    <span>NO PO</span>
                    <select style="width: 40%" name="id_po" class="select-field">
                        <option value="<?= $data['data_project']['id_po'] ?>"><?= $data['data_project']['no_po'] ?></option>
                        <?php foreach ( $data['data_po'] as $po ) : ?>    
                        <option value="<?= $po['id_po'] ?>"><?= $po['no_po'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="id_mitra">
                    <span>MITRA</span>
                    <select style="width: 40%" name="id_mitra" class="select-field">
                        <option value="<?= $data['data_project']['id_mitra'] ?>"><?= $data['data_project']['nama_perusahaan'] ?></option>
                        <?php foreach ( $data['data_mitra'] as $mitra ) : ?>    
                        <option value="<?= $mitra['id_mitra'] ?>"><?= $mitra['nama_perusahaan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="id_regional">
                    <span>REGIONAL</span>
                    <select style="width: 40%" name="id_regional" class="select-field" >
                        <option value="<?= $data['data_project']['id_regional'] ?>"><?= $data['data_project']['regional'] ?></option>
                        <?php foreach ( $data['data_regional'] as $reg ) : ?>    
                        <option value="<?= $reg['id_regional'] ?>"><?= $reg['regional'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="id_witel">
                    <span>WITEL</span>
                    <select style="width: 40%" name="id_witel" class="select-field">
                        <option value="<?= $data['data_project']['id_witel'] ?>"><?= $data['data_project']['witel'] ?></option>
                        <?php foreach ( $data['data_witel'] as $wit ) : ?>    
                        <option value="<?= $wit['id_witel'] ?>"><?= $wit['witel'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="id_datel">
                    <span>DATEL</span>
                    <select style="width: 40%" name="id_datel" class="select-field">
                        <option value="<?= $data['data_project']['id_datel'] ?>"><?= $data['data_project']['datel'] ?></option>
                        <?php foreach ( $data['data_datel'] as $dat ) : ?>    
                        <option value="<?= $dat['id_datel'] ?>"><?= $dat['datel'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="id_sto">
                    <span>STO</span>
                    <select style="width: 40%" name="id_sto" class="select-field">
                    <option value="<?= $data['data_project']['id_sto'] ?>"><?= $data['data_project']['kode_sto'] ?></option>
                    <?php foreach ( $data['data_sto'] as $sto ) : ?>    
                        <option value="<?= $sto['id_sto'] ?>"><?= $sto['kode_sto'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
            </div>
            <div class="grid-form">
                <label for="nama_lokasi">
                    <span>SITE NAME<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama_lokasi" value="<?= $data['data_project']['nama_lokasi'] ?>" required/>
                </label>
                <label for="odp">
                    <span>ODP<span class="required">*</span></span>
                    <input style="width: 60px" type="number" class="input-text" name="jumlah_odp" id="jumlah_odp" value="<?= $data['data_project']['jumlah_odp'] ?>" onkeyup="sumodp();"/>
                </label>
                <label for="port">
                    <span>PORT<span class="required">*</span></span>
                    <input style="width: 60px" type="number" class="input-text" name="jumlah_port" id="jumlah_port" value="<?= $data['data_project']['jumlah_port'] ?>" readonly/>
                </label>
                <label for="toc">
                    <span>TOC<span class="required">*</span></span>
                    <input style="width: 30%" type="date" class="input-text" name="toc" value="<?= $data['data_project']['toc'] ?>" required/>
                </label>
                <label for="nilai_material">
                    <span>MATERIAL <span class="required">*</span></span>
                    <input type="number" class="input-text" name="nilai_material" id="nilai_material" onkeyup="sum();" value="<?= $data['data_project']['nilai_material'] ?>"/>
                </label>
                <label for="nilai_jasa">
                    <span>MATERIAL <span class="required">*</span></span>
                    <input type="number" class="input-text" name="nilai_jasa" id="nilai_jasa" onkeyup="sum();" value="<?= $data['data_project']['nilai_jasa'] ?>"/>
                </label>
                <label for="total">
                    <span>TOTAL <span class="required">*</span></span>
                    <input type="number" class="input-text" name="total" id="total" value="<?= $data['data_project']['total'] ?>" readonly/>
                </label>
                <input type="hidden" class="input-text" name="status_progress" value="<?= $data['data_project']['status_progress'] ?>" required/>
            </div>
            <label><span> </span><input type="submit" value="SIMPAN" /></label>
        </div>
        </form>   
    </div>   
</div>


