<script type="text/javascript">
    function sum() {
        var odp = document.getElementById('jumlah_odp').value;

        
        var port = parseInt(odp) * 8;
        if (!isNaN(port)) {
            document.getElementById('txt3').value = port;
        }
    }
</script>
<div class="judul">
    <h4>Home / <a href="<?= BASEURL; ?>/project/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="gaya-form">
        <form action="<?= BASEURL; ?>/project/tambah/" method="post">
        <div class="grid-project">
            <div class="grid-form">
                <label for="id_project">
                    <span>ID PROJECT<span class="required">*</span></span>
                    <input style="width: 40%" type="text" class="input-text" name="id_project" value="" required/>
                </label>
                <label for="id_po">
                    <span>NO PO</span>
                    <select style="width: 40%" name="id_po" class="select-field">
                        <?php foreach ( $data['data_po'] as $po ) : ?>    
                        <option value="<?= $po['id_po'] ?>"><?= $po['no_po'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="id_mitra">
                    <span>MITRA</span>
                    <select style="width: 40%" name="id_mitra" class="select-field">
                        <?php foreach ( $data['data_mitra'] as $mitra ) : ?>    
                        <option value="<?= $mitra['id_mitra'] ?>"><?= $mitra['nama_perusahaan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="id_regional">
                    <span>REGIONAL</span>
                    <select style="width: 40%" name="id_regional" class="select-field" >
                        <?php foreach ( $data['data_regional'] as $reg ) : ?>    
                        <option value="<?= $reg['id_regional'] ?>"><?= $reg['regional'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="id_witel">
                    <span>WITEL</span>
                    <select style="width: 40%" name="id_witel" class="select-field">
                        <?php foreach ( $data['data_witel'] as $wit ) : ?>    
                        <option value="<?= $wit['id_witel'] ?>"><?= $wit['witel'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="id_datel">
                    <span>DATEL</span>
                    <select style="width: 40%" name="id_datel" class="select-field">
                        <?php foreach ( $data['data_datel'] as $dat ) : ?>    
                        <option value="<?= $dat['id_datel'] ?>"><?= $dat['datel'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
                <label for="id_sto">
                    <span>STO</span>
                    <select style="width: 40%" name="id_sto" class="select-field">
                        <?php foreach ( $data['data_sto'] as $sto ) : ?>    
                        <option value="<?= $sto['id_sto'] ?>"><?= $sto['kode_sto'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </label>
            </div>
            <div class="grid-form">
                <label for="nama_lokasi">
                    <span>SITE NAME<span class="required">*</span></span>
                    <input type="text" class="input-text" name="nama_lokasi" value="" required/>
                </label>
                <label for="odp">
                    <span>ODP<span class="required">*</span></span>
                    <input style="width: 60px" type="number" class="input-text" name="jumlah_odp" id="jumlah_odp" value="" onkeyup="sumodp();"/>
                </label>
                <label for="port">
                    <span>PORT<span class="required">*</span></span>
                    <input style="width: 60px" type="number" class="input-text" name="jumlah_port" id="jumlah_port" value="" readonly/>
                </label>
                <label for="toc">
                    <span>TOC<span class="required">*</span></span>
                    <input style="width: 30%" type="date" class="input-text" name="toc" value="" required/>
                </label>
                <label for="nilai_material">
                    <span>MATERIAL <span class="required">*</span></span>
                    <input type="number" class="input-text" name="nilai_material" id="nilai_material" value="" onkeyup="sum();"/>
                </label>
                <label for="nilai_jasa">
                    <span>MATERIAL <span class="required">*</span></span>
                    <input type="number" class="input-text" name="nilai_jasa" id="nilai_jasa" value="" onkeyup="sum();"/>
                </label>
                <label for="total">
                    <span>TOTAL <span class="required">*</span></span>
                    <input type="number" class="input-text" name="total" id="total" value="" readonly/>
                </label>
            </div>
            <label><span> </span><input type="submit" value="SIMPAN" /></label>
        </div>
        </form>   
    </div>   
</div>


