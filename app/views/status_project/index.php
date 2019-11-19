<div class="judul">
    <h4>Setting / <?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <?php Flasher::flash(); ?>
        <a href="<?= BASEURL; ?>/StatusProject/tambahData">Tambah Data</a>   
    </div>
    <!-- ini bagian judul -->
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>NO</th>
                <th>STATUS DOKUMEN PROJECT</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['data_status_project'] as $spr ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $spr['kegiatan'] ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/StatusProject/getUbah/<?= $spr['id_kegiatan'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="19" heigth="19"></a>
                    <a href="<?= BASEURL; ?>/StatusProject/hapus/<?= $spr['id_kegiatan'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                </td>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
    </div>
</div>

