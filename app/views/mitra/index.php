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
            <a href="<?= BASEURL; ?>/mitra/tambahData">Tambah Data</a>
        
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
                <th>NAMA PERUSAHAAN</th>
                <th>ALAMAT</th>
                <th>EMAIL</th>
                <th>TELF</th>
                <th>NAMA DIREKTUR</th>
                <th>NO HANDPHONE</th>
                <th>ACTION</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1; ?>
            <?php foreach ( $data['data_mitra'] as $mitra ) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $mitra['nama_perusahaan'] ?></td>
                <td><?= $mitra['alamat'] ?></td>
                <td><?= $mitra['email'] ?></td>
                <td><?= $mitra['telp'] ?></td>
                <td><?= $mitra['nama_direktur'] ?></td>
                <td><?= $mitra['no_hp'] ?></td>
                <td>
                    <a href="<?= BASEURL; ?>/mitra/getUbah/<?= $mitra['id_mitra'] ?>"><img src="<?= BASEURL; ?>/img/b-edit.png" alt=""  width="19" heigth="19"></a>
                    <a href="<?= BASEURL; ?>/mitra/hapus/<?= $mitra['id_mitra'] ?>" onClick="return confirm('Anda Yakin Akan Menghapus ?')"><img src="<?= BASEURL; ?>/img/b-hapus.png" alt=""  width="15" heigth="15"></a>
                </td>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
    </div>
</div>

