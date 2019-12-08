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
                
                    <input style="width: 40%" type="hidden" class="input-text" name="id_po" value="<?= $data['data_po']['id_po'] ?>" disabled/>
               
                <label for="no_po">
                    <span>NO PO</span>
                    <input style="width: 40%" type="text" class="input-text" name="no_po" value="<?= $data['data_po']['no_po'] ?>" disabled/>
                </label>
                <label for="jenis_po">
                    <span>JENIS PO</span>
                    <input style="width: 40%" type="text" class="input-text" name="jenis_po" value="<?= $data['data_po']['jenis_po'] ?>" disabled/>
                </label>
                <label for="tgl_mulai">
                    <span>TANGGAL MULAI</span>
                    <input style="width: 40%" type="date" class="input-text" name="tgl_mulai" value="<?= $data['data_po']['tgl_mulai'] ?>" disabled/>
                </label>
                <label for="tgl_selesai">
                    <span>TANGGAL SELESAI</span>
                    <input style="width: 40%" type="date" class="input-text" name="tgl_selesai" value="<?= $data['data_po']['tgl_selesai'] ?>" disabled/>
                </label>
            </div>
            <div class="grid-form">
                <label for="nilai_material">
                    <span>MATERIAL<span class="required">*</span></span>
                    <input style="width: 40%" type="text" class="input-text" name="nilai_material" value="<?= $data['data_po']['nilai_material'] ?>" disabled/>
                </label>
                <label for="nilai_jasa">
                    <span>JASA<span class="required">*</span></span>
                    <input style="width: 40%" type="text" class="input-text" name="nilai_jasa" value="<?= $data['data_po']['nilai_jasa'] ?>" disabled/>
                </label>
                <label for="TOTAL">
                    <span>TOTAL<span class="required">*</span></span>
                    <input style="width: 40%" type="text" class="input-text" name="total" value="<?= $data['data_po']['total'] ?>" disabled/>
                </label>
            </div>
        </div>
    </div>   
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>POSISI</th>
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
                <td><?= $prg['status_po'] ?></td>
                <td><?= $prg['tgl_mulai'] ?></td>
                <td><?= $prg['tgl_selesai'] ?></td>
                <td><?= $prg['keterangan'] ?></td>
                <td><a href="<?= BASEURL; ?>/files/<?= $prg['evidence'] ?>" target="_blank">FILE EVIDENCE</a></td>
                <td>
                    <a href="<?= BASEURL; ?>/ProgresTagihan/ubahProgres/<?= $prg['id_progres'] ?>"><img src="<?= BASEURL; ?>/img/edit.png" alt=""  width="19" heigth="19"></a>
                    <a href="<?= BASEURL; ?>/ProgresTagihan/hapusProgres/<?= $prg['id_progres'] ?>/<?= $prg['id_po'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                </td>
            </tr>
            <?php endforeach; ?>
            <tbody>
            <tbody>
                <form action="<?= BASEURL; ?>/ProgresTagihan/tambahProgres/" method="post" enctype="multipart/form-data">
                <td>
                    <div class="gaya-form">
                        <label for="id_kegiatan">
                            <select style="width: 130%" name="id_status_po" class="select-field">
                                <?php foreach ( $data['data_status'] as $sts ) : ?>    
                                <option value="<?= $sts['id_status_po'] ?>"><?= $sts['status_po'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label>
                        <input type="hidden" name="id_po" value="<?= $data['data_po']['id_po'] ?>" >
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
                            <textarea name="keterangan" class="textarea-field" style="width: 100%" required></textarea>
                            <!-- <input style="width: 100%" type="text-area" class="input-text" name="keterangan" value="" required/> -->
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

