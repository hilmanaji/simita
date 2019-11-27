<div class="judul">
    <h4>Project / <?= $data['judul'] ?></h4>
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
                <th>NO</th>
                <th>ID PROJECT</th>
                <th>NO PO</th>
                <th>LOKASI</th>
                <th>TOC</th>
                <th>UPDATE</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['data_project'] as $project ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $project['id_project'] ?></td>
                <td><?= $project['no_po'] ?></td>
                <td><?= $project['nama_lokasi'] ?></td>
                <td><?= $project['toc'] ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/ProgresProject/updateProject/<?= $project['id_project'] ?>"><img src="<?= BASEURL; ?>/img/edit.png" alt=""  width="19" heigth="19"></a>
                </td>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
    </div>
</div>

