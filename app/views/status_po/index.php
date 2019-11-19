<div class="judul">
    <h4>Setting / <?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <?php Flasher::flash(); ?>
        <a href="<?= BASEURL; ?>/StatusPo/tambahData">Tambah Data</a>   
    </div>
    <!-- ini bagian judul -->
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>NO</th>
                <th>STATUS DOKUMEN PO</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['data_status_po'] as $spo ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $spo['status_po'] ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/StatusPo/getUbah/<?= $spo['id_status_po'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="19" heigth="19"></a>
                    <a href="<?= BASEURL; ?>/StatusPo/hapus/<?= $spo['id_status_po'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                </td>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
    </div>
</div>

