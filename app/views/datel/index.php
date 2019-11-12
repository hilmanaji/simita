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
            <a href="<?= BASEURL; ?>/datel/tambahData">Tambah Data</a>
        
            <input type="text" placeholder="Cari data" name="cari">
            <input type="submit" value="Cari" class="tombol">
        </form>    
    </div>
    <!-- ini bagian judul -->
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>NO</th>
                <th>DATEL</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['data_datel'] as $reg ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $reg['datel'] ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/datel/getUbah/<?= $reg['id_datel'] ?>/<?= $reg['id_witel'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="19" heigth="19"></a>
                    <a href="<?= BASEURL; ?>/datel/hapus/<?= $reg['id_datel'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                </td>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
    </div>
</div>

