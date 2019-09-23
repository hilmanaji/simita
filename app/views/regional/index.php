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
            <a href="<?= BASEURL; ?>/regional/tambahData">Tambah Data</a>
        
            <label class="kolom a-kolom a-kolom_a3">
                <input class="kolom__input a-kolom__input" placeholder="e.g. melnik909@ya.ru" required>
                <span class="a-kolom__label-wrap">
                <span class="a-kolom__label">Cari</span>
                </span>
            </label> 
            <input type="submit" value="Cari" class="tombol">
        </form>    
    </div>
    <!-- ini bagian judul -->
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>NO</th>
                <th>REGIONAL</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['data_regional'] as $reg ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $reg['regional'] ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/regional/getUbah/<?= $reg['id_regional'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="19" heigth="19"></a>
                    <a href="<?= BASEURL; ?>/regional/hapus/<?= $reg['id_regional'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                </td>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
    </div>
</div>

