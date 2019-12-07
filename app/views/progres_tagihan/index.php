<div class="judul">
    <h4>Tagihan / <?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <?php Flasher::flash(); ?>
        <!-- buat naroh pencarian -->
    </div>
    <!-- ini bagian judul -->
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>NO PURCHASE ORDER (PO)</th>
                <th>TOC</th>
                <th>NILAI</th>
                <th>JUMLAH PROJECT</th>
                <th>UPDATE</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['data_po'] as $po ) : ?>
            <tr>
                <td><?= $po['no_po'] ?></td>
                <td><?= $po['tgl_selesai'] ?></td>
                <td><?= $po['total'] ?></td>
                <td>
                    <?php
                    $id_po = $po['id_po'];
                    $data['data_count'] = $this->model('DataHandle')->getCountRowById ($table = 'tbl_lop', $kolom = 'nama_lokasi', $id = 'id_po', $kondisi = $id_po );

                    ?>
                    <?= $data['data_count']['jumlah'] ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/ProgresTagihan/updateTagihan/<?= $po['id_po'] ?>"><img src="<?= BASEURL; ?>/img/edit.png" alt=""  width="19" heigth="19"></a>
                </td>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
    </div>
</div>

