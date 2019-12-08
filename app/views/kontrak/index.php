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
            <a href="<?= BASEURL; ?>/kontrak/tambahData">Tambah Data</a>
        
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
                <th>NO KONTRAK</th>
                <th>JENIS KONTRAK</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['data_kontrak'] as $kontrak ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $kontrak['no_kontrak'] ?></td>
                <td><?= $kontrak['jenis_kontrak'] ?></td>
                <td>
                    <?php if ($_SESSION["role_user"] == 'Admin Project') { ?>
                        <a href="<?= BASEURL; ?>/kontrak/getUbah/<?= $kontrak['id_kontrak'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="19" heigth="19"></a>
                        <a href="<?= BASEURL; ?>/kontrak/hapus/<?= $kontrak['id_kontrak'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
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

