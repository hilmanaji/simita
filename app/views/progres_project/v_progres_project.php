<div class="judul">
    <h4>Project / <?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <?php Flasher::flash(); ?>
    </div>
    <!-- ini bagian judul -->
    


    <div class="gaya-form">
        <div class="grid-project">
            <div class="grid-form">
                <label for="id_project">
                    <span>ID PROJECT<span class="required">*</span></span>
                    <input style="width: 40%" type="text" class="input-text" name="id_project" value="<?= $data['data_project']['id_project'] ?>" disabled/>
                </label>
                <label for="id_po">
                    <span>NO PO</span>
                    <select style="width: 40%" name="id_po" class="select-field">   
                        <option value="<?= $data['data_project']['id_po'] ?>"><?= $data['data_project']['no_po'] ?></option>
                    </select>
                </label>
                <label for="id_mitra">
                    <span>MITRA</span>
                    <input style="width: 40%" type="text" class="input-text" name="id_mitra" value="<?= $data['data_project']['nama_perusahaan'] ?>" disabled/>
                </label>
                <label for="id_sto">
                    <span>STO</span>
                    <input style="width: 40%" type="text" class="input-text" name="id_sto" value="<?= $data['data_project']['nama_sto'] ?>" disabled/>
                </label>
            </div>
            <div class="grid-form">
                <label for="nama_lokasi">
                    <span>SITE NAME<span class="required">*</span></span>
                    <input style="width: 40%" type="text" class="input-text" name="nama_lokasi" value="<?= $data['data_project']['nama_lokasi'] ?>" disabled/>
                </label>
                <label for="jumlah_odp">
                    <span>ODP<span class="required">*</span></span>
                    <input style="width: 40%" type="text" class="input-text" name="jumlah_odp" value="<?= $data['data_project']['jumlah_odp'] ?>" disabled/>
                </label>
                <label for="jumlah_port">
                    <span>PORT<span class="required">*</span></span>
                    <input style="width: 40%" type="text" class="input-text" name="jumlah_port" value="<?= $data['data_project']['jumlah_port'] ?>" disabled/>
                </label>
                <label for="toc">
                    <span>TOC<span class="required">*</span></span>
                    <input style="width: 40%" type="text" class="input-text" name="toc" value="<?= $data['data_project']['toc'] ?>" disabled/>
                </label>
            </div>
        </div>
    </div>   
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>KEGIATAN</th>
                <th>TANGGAL MULAI</th>
                <th>TANGGAL SELESAI</th>
                <th>KETERANGAN</th>
                <th>EVIDENCE</th>
                <th>UPDATE</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ( $data['data_progres'] as $prg ) : ?>
            <tr>
                <td><?= $prg['kegiatan'] ?></td>
                <td><?= $prg['tgl_mulai'] ?></td>
                <td><?= $prg['tgl_selesai'] ?></td>
                <td><?= $prg['keterangan'] ?></td>
                <td><?= $prg['evidence'] ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/ProgresProject/ubahProgres/<?= $prg['id_progres_project'] ?>"><img src="<?= BASEURL; ?>/img/edit.png" alt=""  width="19" heigth="19"></a>
                </td>
            </tr>
            <?php endforeach; ?>
            <tbody>
            <tbody>
                <form action="<?= BASEURL; ?>/ProgresProject/tambahProgres/" method="post" enctype="multipart/form-data">
                <td>
                    <div class="gaya-form">
                        <label for="id_kegiatan">
                            <select style="width: 130%" name="id_kegiatan" class="select-field">
                                <?php foreach ( $data['data_status'] as $sts ) : ?>    
                                <option value="<?= $sts['id_kegiatan'] ?>"><?= $sts['kegiatan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label>
                        <input type="hidden" name="id_project" value="<?= $data['data_project']['id_project'] ?>" >
                    </div> 
                </td>
                <td>
                    <div class="gaya-form">
                        <label for="tgl_mulai">
                            <input style="width: 100%" type="date" class="input-text" name="tgl_mulai" value="" required/>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="gaya-form">
                        <label for="tgl_selesai">
                            <input style="width: 100%" type="date" class="input-text" name="tgl_selesai" value="" required/>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="gaya-form">
                        <label for="keterangan">
                            <input style="width: 100%" type="text-area" class="input-text" name="keterangan" value="" required/>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="gaya-form">
                        <label for="evidence">
                             <input type="file" style="width: 100%" class="input-text" name="evidence" required/>
                        </label>
                    </div>
                </td>
                <td>
                    
                    <input class="update-progres" type="image" src="<?= BASEURL; ?>/img/tambah.png" width="19" heigth="19"/>  
                                 
                </td>
                </form>
            </tbody>
        </table>
    </div>
    <!-- End table Warper -->
</div>

