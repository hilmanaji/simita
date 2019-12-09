<div class="judul">
    <h4>Home / <?= $data['judul'] ?></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <?php Flasher::flash(); ?>
        <form action="">
        <?php
        if($_SESSION["role_user"] == 'Admin Project') { ?>
            <a href="<?= BASEURL; ?>/po/tambahData">Tambah Data</a>
		<?php }
		else if($_SESSION["role_user"] == '') { 
			echo "gk bisa nambahin";
		} ?>
           
        
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
                <th>NO PO</th>
                <th>JENIS PO</th>
                <th>TGL MULAI</th>
                <th>TGL SELESAI</th>
                <th>MATERIAL</th>
                <th>JASA</th>
                <th>TOTAL</th>
                <th>STATUS PO</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['data_po'] as $po ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $po['no_po'] ?></td>
                <td><?= $po['jenis_po'] ?></td>
                <td><?= $po['tgl_mulai'] ?></td>
                <td><?= $po['tgl_selesai'] ?></td>
                <td><?= $po['nilai_material'] ?></td>
                <td><?= $po['nilai_jasa'] ?></td>
                <td><?= $po['total'] ?></td>
                <td><?= $po['status_po'] ?></td>
                <td>
                    <?php if ($_SESSION["role_user"] == 'Admin Project') { ?>
                        <a href="<?= BASEURL; ?>/po/getUbah/<?= $po['id_po'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="19" heigth="19"></a>
                        <a href="<?= BASEURL; ?>/po/hapus/<?= $po['id_po'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                    <?php
                    } else {
                        echo "";
                    } ?>
                </td>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
    </div>
</div>

