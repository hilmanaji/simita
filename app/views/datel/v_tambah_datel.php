
<div class="judul">
    <h4>Dashboard / <a href="<?= BASEURL; ?>/datel/index"><?= $data['judul'] ?></a></h4>
</div>
<div class="head-table">
    <h4><?= $data['sub_judul'] ?></h4>
</div>
<div class="data-table">
    <div class="navigasi">
        <div class="gaya-form">
            <form action="<?= BASEURL; ?>/datel/tambah/" method="post">
                <label for="id_witel">
                    <span>WITEL</span>
                    <select name="id_witel" class="select-field">
                        <option value="id witel">Nama Witel</option>
                    </select>
                </label>
                <label for="datel">
                    <span>DATEL<span class="required">*</span></span>
                    <input type="text" class="input-text" name="datel" value=""/>
                </label>
                <label><span> </span><input type="submit" value="SIMPAN" /></label>
            </form>
        </div>
    </div>
</div>


