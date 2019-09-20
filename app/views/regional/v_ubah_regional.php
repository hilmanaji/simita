
<div class="judul">
    <h4>Home / <a href="<?= BASEURL; ?>/regional/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <form action="<?= BASEURL; ?>/regional/ubahData" method="post">
        Regional:<br>
        <input type="text" name="id_regional" value="<?= $data['data_regional']['id_regional'] ?>">
        <input type="text" name="regional" value="<?= $data['data_regional']['regional'] ?>">
        <br>
        <br><br>
        <input class="tombol" type="submit" value="Submit">
        </form>   
    </div>
</div>


