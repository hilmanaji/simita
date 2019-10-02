<div class="judul">
    <h4>Dashboard / <?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <?php Flasher::flash(); ?>
        <form action="">
            <a href="<?= BASEURL; ?>/Project/tambahData">Tambah Data</a>
        
            <span>Cari :</span>
            <input type="text" value="" name="" placeholder="Cari Data"> 
            <input type="submit" value="Cari" class="tombol">
        </form>    
    </div>
    <!-- ini bagian judul -->
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>NO</th>
                <th>ID PROJECT</th>
                <th>NO PO</th>
                <th>REGIONAL</th>
                <th>WITEL</th>
                <th>DATEL</th>
                <th>STO</th>
                <th>SITE NAME</th>
                <th>ODP</th>
                <th>PORT</th>
                <th>TOC</th>
                <th>MATERIAL</th>
                <th>JASA</th>
                <th>TOTAL</th>
                <th>STATUS</th>
                <th>ACTION</th>
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
                <td><?= $project['id_regional'] ?></td>
                <td><?= $project['id_witel'] ?></td>
                <td><?= $project['id_datel'] ?></td>
                <td><?= $project['id_sto'] ?></td>
                <td><?= $project['nama_lokasi'] ?></td>
                <td><?= $project['jumlah_odp'] ?></td>
                <td><?= $project['jumlah_port'] ?></td>
                <td><?= $project['toc'] ?></td>
                <td><?= $project['nilai_material'] ?></td>
                <td><?= $project['nilai_jasa'] ?></td>
                <td><?= $project['total'] ?></td>
                <td><?= $project['status_progress'] ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/po/getUbah/<?= $po['id_project'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="19" heigth="19"></a>
                    <a href="<?= BASEURL; ?>/po/hapus/<?= $po['id_project'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                </td>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
    </div>
</div>

