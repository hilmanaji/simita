<div class="container">  
    <h3>Data Regional</h3>
    <?php foreach ( $data['data_regional'] as $reg ) : ?>
        <ul>
            <li><?= $reg['regional'] ?></li>
            <li><a href="<?= BASEURL; ?>/regional/detail/<?= $reg['id_regional'] ?>">LIHAT</a></li>
            <br>
        </ul>
    <?php endforeach; ?>
</div>
