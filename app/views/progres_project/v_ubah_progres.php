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
                <form action="<?= BASEURL; ?>/ProgresProject/updateProgres/<?= $data['data_progres']['id_project'] ?>" method="post" enctype="multipart/form-data">
                <td>
                    <div class="gaya-form">
                        <label for="id_kegiatan">
                            <select style="width: 130%" name="id_kegiatan" class="select-field">
                                <option value="<?= $data['data_progres']['id_kegiatan'] ?>"><?= $data['data_progres']['kegiatan'] ?></option>
                                <?php foreach ( $data['data_status'] as $sts ) : ?>    
                                <option value="<?= $sts['id_kegiatan'] ?>"><?= $sts['kegiatan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </label>
                        <input type="hidden" name="id_progres_project" value="<?= $data['data_progres']['id_progres_project'] ?>" >
                        <input type="hidden" name="id_project" value="<?= $data['data_progres']['id_project'] ?>" >
                    </div> 
                </td>
                <td>
                    <div class="gaya-form">
                        <label for="tgl_mulai">
                            <input style="width: 100%" type="date" class="input-text" name="tgl_mulai" value="<?= $data['data_progres']['tgl_mulai'] ?>" required/>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="gaya-form">
                        <label for="tgl_selesai">
                            <input style="width: 100%" type="date" class="input-text" name="tgl_selesai" value="<?= $data['data_progres']['tgl_selesai'] ?>" required/>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="gaya-form">
                        <label for="keterangan">
                            <!-- <textarea name="keterangan" class="textarea-field" style="width: 100%" value="<?= $data['data_progres']['keterangan'] ?>" required></textarea> -->
                            <input style="width: 100%" type="text-area" class="input-text" name="keterangan" value="<?= $data['data_progres']['keterangan'] ?>" required/>
                        </label>
                    </div>
                </td>
                <td>
                    <div class="gaya-form">
                        <label for="evidence">
                             <input type="file" style="width: 100%" class="input-text" name="evidence" value="<?= $data['data_progres']['evidence'] ?>" required/>
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

