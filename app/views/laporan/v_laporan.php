<style>
body {
  background: rgb(204,204,204); 
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="landscape"] {
  width: 29.7cm;
  height: 21cm;  
}
page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="landscape"] {
  width: 42cm;
  height: 29.7cm;  
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="landscape"] {
  width: 21cm;
  height: 14.8cm;  
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}
</style>
<page size="A5" layout="landscape">
    <div style="float: right;">
        <img src="<?= BASEURL;?>/img/logo-ta.png" alt="" width="200" heigth="200" alt="">
    </div>
    <div>
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
    </div>
    </div>
    </page>
<script>
		window.print();
</script>
