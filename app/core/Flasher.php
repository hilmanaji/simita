<?php

class Flasher {

    public static function setFlash($pesan, $aksi, $tipe) {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'akse' => $aksi,
            'tipe' => $tipe
        ];
    }

    public static function flash() {
        if ( isset($_SESSION['flash']) ) {
            echo'<p>' . $_SESSION['flash']['pesan'] . '</p><span class="close">&times;</span>';
        }

        unset($_SESSION['flash']);
    }
}