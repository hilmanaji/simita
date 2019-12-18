<div class="dashboard-frame">
    <div class="judul">
        <h4>Laporan</h4>
    </div>
    <br>
    <div class="navigasi">
    <a href="<?= BASEURL; ?>/Laporan/getData/">PRINT PROJECT</a>
    </div>
    <div class="table-wrapper">
        <table class="fl-table">
            <thead>
            <tr>
                <th>NO</th>
                <th>ID PROJECT</th>
                <th>NO PO</th>
                <th>DATEL</th>
                <th>STO</th>
                <th>SITE NAME</th>
                <th>ODP</th>
                <th>PORT</th>
                <th>TOC</th>
                <th>MATERIAL</th>
                <th>JASA</th>
                <th>TOTAL</th>                
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
                <td><?= $project['datel'] ?></td>
                <td><?= $project['nama_sto'] ?></td>
                <td><?= $project['nama_lokasi'] ?></td>
                <td><?= $project['jumlah_odp'] ?></td>
                <td><?= $project['jumlah_port'] ?></td>
                <td><?= $project['toc'] ?></td>
                <td><?= $project['nilai_material'] ?></td>
                <td><?= $project['nilai_jasa'] ?></td>
                <td><?= $project['total'] ?></td>
            </tr>
            <?php endforeach; ?>
            <tbody>
        </table>
    <form action="">    
        <!-- <label for="data">
            <span>TIPE USER</span>
                <select name="data" class="select-field">
                    <option value="tbl_pr">Data Project</option>
                    <option value="Admin Project">Data PO</option>
            </select>
        </label> -->
    </form>