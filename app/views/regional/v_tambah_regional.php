
<div class="judul">
    <h4>Home / <a href="<?= BASEURL; ?>/regional/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <form action="<?= BASEURL; ?>/regional/tambah/" method="post">
        Regional:<br>
        <input type="text" name="regional" value="">
        <br>
        <br><br>
        <input class="tombol" type="submit" value="Submit">
        </form>   
    </div>
</div>


